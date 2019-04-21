<?php
global $_W, $_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');

$weid = intval($_W['uniacid']);
$set = pdo_fetch("select * from " . tablename('amouse_wxapp_sysset') . ' where `uniacid`=:uniacid limit 1', array(':uniacid' => $weid));
if (empty($set) || empty($set['qqmap_ak'])) {
    // message('先设置好所在城市！', $this->createWebUrl('sysset', array()));
}
/*$url = "http://apis.map.qq.com/ws/geocoder/v1/?address=北京市海淀区彩和坊路海淀西大街74号&key=YGRBZ-4SPKS-YQ5OO-6XUPS-VH73S-Y6BP6" ;
load()->func('communication');
$ret = ihttp_request($url);
$content = @json_decode($ret['content'], true);
if ($content['status'] == 0) {
    $result = $content['result'];
    $lng = $result['location']['lng'];
    $lat = $result['location']['lat'];
    var_dump($lng);
}*/

$areas = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=1  ORDER BY displayorder DESC   ", array(":weid" => $weid));
$types = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=4  ORDER BY id DESC ", array(":weid" => $weid));
$ages = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE type=5  ORDER BY id asc  ");
$fits = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . " WHERE uniacid=:weid and type=2 ORDER BY id asc ", array(":weid" => $weid));
$uses = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . " WHERE uniacid=:weid and type=3 ORDER BY id asc ", array(":weid" => $weid));
$shops = pdo_fetchall("select id,name from " . tablename("amouse_wxapp_shop") . " WHERE uniacid=:weid  ", array(":weid" => $weid));
if ($operation == 'display') {
    $condition = '';
    $stat = $_GPC['status'];
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_house', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        pdo_delete('amouse_wxapp_like', " houseid  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('houses', array('page' => $_GPC['page'])));
    }
    if (checksubmit('submit2') && !empty($_GPC['delete'])) {
        $ids = $_GPC['delete'];
        foreach ($ids as $key => $id) {
            pdo_update('amouse_wxapp_house', array('status' => 0), array("id" => $id));
        }
        message('批量审核成功！', $this->createWebUrl('houses', array('page' => $_GPC['page'])));
    }
    if (!empty($_GPC['tel'])) {
        $condition .= " AND mobile LIKE '%{$_GPC['tel']}%'";
    }
    $stat = $_GPC['house_type'];
    if ($stat != '') {
        $status = intval($stat);
        $condition .= " AND house_type = '{$status}'";
    }else{
        $condition .= " and  (house_type=0 or house_type=1) ";
    }
    $keyword =  $_GPC['keyword'];
    if (!empty($keyword)) {
        $condition .= " AND (title LIKE '%{$keyword}%' or address LIKE '%{$keyword}%')  ";
    }
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $sql="SELECT `id`,`imgs`,`mobile`,`title`,`house_type`,`createtime`,`type_id`,`area_id`,`vill_id`,`fit_id`,`agent_id`,`status`,`house_area`,`total_price`,`rental`,`view`,`is_person`,`person_mobile`,case when vipstatus=1 then 1 else listorder end paixun FROM " . tablename('amouse_wxapp_house')."  WHERE uniacid =:weid  $condition ORDER BY paixun DESC, createtime DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize ;
    $list = pdo_fetchall($sql,array(':weid'=>$weid));

    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_house') . "  WHERE uniacid = $weid  $condition");
    $pager = pagination($total, $pindex, $psize);
    if (!empty($list)) {
        foreach ($list as $key => $card) {
            $imgs = iunserializer($card['imgs']);
            foreach ($imgs as $k => $imgid) {
                $imgs[$k] = tomedia($imgid);
            }
            $list[$key]['imgs'] = $imgs;
            $area = pdo_fetch("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=1  and id=:id  limit 1", array(":weid" => $weid, ":id" => $card['area_id']));
            $list[$key]['area'] = $area;
            $fit = pdo_fetch("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=2 and id=:id  limit 1", array(":weid" => $weid, ":id" => $card['fit_id']));
            $list[$key]['fit'] = $fit;
            $type = pdo_fetch("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=4 and id=:id limit 1 ", array(":weid" => $weid, ":id" => $card['type_id']));
            $list[$key]['type'] = $type['name'];
            $agent = pdo_fetch("SELECT id,realname,mobile FROM " . tablename('amouse_wxapp_agent') . "   WHERE uniacid =:weid and id=:id limit 1", array(":weid" => $weid, ":id" => $card['agent_id']));
            $list[$key]['agent'] = $agent;

            $order = pdo_fetch("SELECT id,status,top_day,price,`paytype` FROM " . tablename('amouse_wxapp_order') . "   WHERE uniacid =:weid and house_id=:id  limit 1", array(":weid" => $weid, ":id" => $card['id']));
            $list[$key]['order'] = $order;

        }
    }

} elseif ($operation == 'detail') {
    $id = intval($_GPC['id']);
    $item = pdo_fetch("SELECT *  FROM " . tablename('amouse_wxapp_house') . " WHERE  id =:id AND uniacid=:weid limit 1", array(':id' => $id, ':weid' => $weid));
} elseif ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $item = pdo_fetch("SELECT *  FROM " . tablename('amouse_wxapp_house') . " WHERE  id =:id AND uniacid=:weid limit 1", array(':id' => $id, ':weid' => $weid));
    if (empty($item)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('houses', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_house', array('id' => $id));
    pdo_delete('amouse_wxapp_like', array('houseid' => $id));
    message('删除成功！', $this->createWebUrl('houses', array('op' => 'display')), 'success');
} elseif ($operation == 'post') {
    $set = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_sysset') . " WHERE `uniacid`= :weid  limit 1 ", array(':weid' => $weid));
    $id = intval($_GPC['id']);
    if (!empty($id)) {
        $house = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_house') . " WHERE id =:id limit 1 ", array(":id" => $id));
        $agents = pdo_fetchall("select id,realname from " . tablename("amouse_wxapp_agent") . " WHERE `uniacid`=:weid and `shop_id`=:shop_id ", array(":weid" => $weid, ":shop_id" => $house['shop_id']));
        $vills = pdo_fetchall("SELECT * FROM " . tablename('amouse_wxapp_vill') . "  WHERE uniacid = :weid and area_id =:area_id ORDER BY displayorder DESC ", array(":weid" => $weid, ":area_id" => $house['area_id']));
        $piclist = array();
        $piclist1 = unserialize($house['imgs']);
        if (is_array($piclist1)) {
            foreach ($piclist1 as $key => $p) {
                $piclist[] = is_array($p) ? $p['attachment'] :tomedia($p);
            }
        }
        $item['createtime']= $item['createtime']==0 ? time() : $item['createtime'];
    }else{
        $item['createtime']=time();
    }

    if (checksubmit('submit')) {
        $n = floatval($_GPC['total_price'] / trim($_GPC['house_area']));
        $data2['uniacid'] = $weid;
        $data2['title'] = trim($_GPC['title']);
        $data2['mobile'] = trim($_GPC['mobile']);
        $data2['area_id'] = intval($_GPC['area_id']);
        $data2['house_type'] = intval($_GPC['house_type']);
        $data2['rental'] = trim($_GPC['rental']);
        $data2['cash_type'] = trim($_GPC['cash_type']);
        $data2['price'] =  sprintf("%.2f", $n);
        $data2['total_price'] = trim($_GPC['total_price']);
        $data2['house_area'] = trim($_GPC['house_area']);
        $data2['floor'] = trim($_GPC['floor']);
        $data2['type_id'] = intval($_GPC['type_id']);
        $data2['fit_id'] = intval($_GPC['fit_id']);
        $data2['use_id'] = intval($_GPC['use_id']);
        $data2['shop_id'] = intval($_GPC['shop_id']);
        $data2['agent_id'] = intval($_GPC['agent_id']);
        $data2['age_id'] = intval($_GPC['age_id']);
        $data2['lat'] = trim($_GPC['lat']);
        $data2['lng'] = trim($_GPC['lng']);
        $data2['video_url'] = trim($_GPC['video_url']);
        $data2['imgs'] = serialize($_GPC['imgs']);
        $data2['status'] = intval($_GPC['status']);
        $data2['vill_id'] = intval($_GPC['vill_id']);
        $data2['address'] = $_GPC['address'];
        $data2['desc']= $_GPC['desc'];
        $data2['is_person'] = intval($_GPC['is_person']);
        $data2['is_open_map'] = intval($_GPC['is_open_map']);
        $data2['person_mobile'] = $_GPC['person_mobile'];
        $data2['view'] = intval($_GPC['view']);
        $data2['createtime'] = strtotime($_GPC['createtime']);
        $data2['vipstatus'] = $_GPC['vipstatus'];
        $data2['house_toward'] = intval($_GPC['house_toward']);
        if (!empty($id)) {
            pdo_update('amouse_wxapp_house', $data2, array('id' => $id));
            if (intval($_GPC['status'])==0 && !empty($set['aduit_tpl']) && !empty($house['openid'])) {  //发送模板消息 订单提交成功通知
                $send['first'] = array('value' => '您的提交申请审核通过。', 'color' => '#000');
                $send['keyword1'] = array('value' => $item['nickname'], 'color' => '#000');
                $send['keyword2'] = array('value' =>$item['nickname'].'发布'.$item['title'], 'color' => '#000');
                $send['keyword3'] = array('value' => date('Y年m月d日',   time()), 'color' => '#000');
                $send['keyword4'] = array('value' => date('Y年m月d日', time()), 'color' => '#000');
                $send['keyword5'] = array('value' => '恭喜您发布信息成功', 'color' => '#000');
                $this->sendTplNotice($house['openid'], $set['aduit_tpl'], 'amouse_wxapp_house/pages/estate-agency/detail/detail?id='.$id, trim($item['sendcode']), $send, 'keyword1.DATA');
            }
        } else {
            pdo_insert('amouse_wxapp_house', $data2);
            $id = pdo_insertid();
            $qrcode = $this->makeActivityCode('amouse_wxapp_house,house,'. $id);
            pdo_update('amouse_wxapp_house', array('code' => $qrcode), array('id' => $id));
        }

        message('更新信息成功！', $this->createWebUrl('houses', array('op' => 'display')), 'success');
    }
} elseif ($operation == 'getAgent') {
    $shop_id = $_GPC['shopid'];
    $agentlist = pdo_fetchall("select id,realname from " . tablename("amouse_wxapp_agent") . " WHERE uniacid=:weid and shop_id=:shop_id ", array(":weid" => $weid, ":shop_id" => $shop_id));
    foreach ($agentlist as $key => $value) {
        $result_str .= '<option value="' . $value['id'] . '" >' . $value['realname'] . '</option>';
    }
    echo json_encode($result_str);
    exit;
}elseif ($operation == 'getVill') {
    $areaId= $_GPC['areaId'];
    $vills = pdo_fetchall("SELECT * FROM " . tablename('amouse_wxapp_vill') . "  WHERE uniacid =:weid  and area_id=:areaid  ORDER BY displayorder DESC ",array(":weid"=>$weid,":areaid"=>$areaId));
    foreach ($vills as $key => $value) {
        $result_str .= '<option value="' . $value['id'] . '" >' . $value['name'] . '</option>';
    }
    echo json_encode($result_str);
    exit;
} elseif ($operation == 'setstatus') {
    $id = intval($_GPC['id']);
    $data = intval($_GPC['data']);
    $type = $_GPC['type'];
    $data = ($data == 1 ? '0' : '1');
    $house = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_house') . " WHERE id =:id limit 1 ", array(":id" => $id));
    $set = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_sysset') . " WHERE `uniacid`= :weid  limit 1 ", array(':weid' => $weid));
    if ($data==0 && !empty($set['aduit_tpl']) && !empty($house['openid'])) {  //发送模板消息 订单提交成功通知
        $send['first'] = array('value' => '您的提交申请审核通过。', 'color' => '#000');
        $send['keyword1'] = array('value' => $house['nickname'], 'color' => '#000');
        $send['keyword2'] = array('value' =>$house['nickname'].'发布'.$house['title'], 'color' => '#000');
        $send['keyword3'] = array('value' => date('Y年m月d日',  $house['createtime']), 'color' => '#000');
        $send['keyword4'] = array('value' => date('Y年m月d日', time()), 'color' => '#000');
        $send['keyword5'] = array('value' => '恭喜您发布信息成功', 'color' => '#000');
        $this->sendTplNotice($house['openid'], $set['aduit_tpl'], 'amouse_wxapp_house/pages/estate-agency/detail/detail?id='.$id, trim($house['sendcode']), $send, 'keyword1.DATA');
    }
    pdo_update('amouse_wxapp_house', array($type => $data), array("id" => $id, "uniacid" => $_W['uniacid']));
    die(json_encode(array(
        'result' => 1,
        'data' => $data
    )));

}elseif($operation=='export_submit'){
    $sql = "SELECT `id`,`title`,`mobile`,`house_type`,`createtime`,`type_id`,`area_id`,`vill_id`,`house_area`,`total_price`,`view`,`person_mobile` FROM". tablename('amouse_wxapp_house') . " WHERE uniacid = :uniacid ";
    $houses= pdo_fetchall($sql,array(':uniacid' => $weid));
    $html = wxapp_house_export_parse($houses);
    header("Content-type:text/csv");
    header("Content-Disposition:attachment; filename=house_data.csv");
    echo $html;
    exit();
}
include $this->template('web/house');

function wxapp_house_export_parse($houses) {
    if (empty($houses)) {
        return false;
    }
    $header = array(
        'id' => 'ID', 'title' => '房屋名称', 'mobile' => '手机号', 'house_type' => '类型',
        'createtime' => '注册时间','type_id' => '户型', 'area_id' => '区域',
        'vill_id' => '小区', 'house_area' => '面积','total_price'=>'总价',
        'view'=>'预览量','person_mobile'=>'个人号码'
    );
    $keys = array_keys($header);
    $html = "\xEF\xBB\xBF";
    foreach ($header as $li) {
        $html .= $li . "\t ,";
    }
    $html .= "\n";
    $count = count($houses);
    $pagesize = ceil($count / 5000);
    for ($j = 1; $j <= $pagesize; $j++) {
        $list = array_slice($houses, ($j - 1) * 5000, 5000);
        if (!empty($list)) {
            $size = ceil(count($list) / 500);
            for ($i = 0; $i < $size; $i++) {
                $buffer = array_slice($list, $i * 500, 500);
                $user = array();
                foreach ($buffer as $row) {
                    if ($row['house_type']==0 || $row['house_type']==2) {
                        $row['house_type'] = '出租';
                    }else if ($row['house_type']==1 || $row['house_type']==3){
                        $row['house_type'] = '出售';
                    }
                    $area = pdo_fetchcolumn("SELECT name FROM " . tablename('amouse_wxapp_kinds') . " WHERE type=1  and id=:id  limit 1", array(":id" => $row['area_id']));
                    $row['area_id'] = $area;
                    $type = pdo_fetchcolumn("SELECT name FROM " . tablename('amouse_wxapp_kinds') . "   WHERE type=4 and id=:id limit 1 ", array(":id" => $row['type_id']));
                    $row['type_id'] = $type;
                    $vill= pdo_fetchcolumn("SELECT name FROM " . tablename('amouse_wxapp_vill') . "  WHERE id =:id limit 1 ", array(":id" => $row['vill_id']));
                    $row['createtime'] = date('Y-m-d H:i:s', $row['createtime']);
                    $row['vill_id'] = $vill;
                    foreach ($keys as $key) {
                        $data[] = $row[$key];
                    }
                    $user[] = implode("\t ,", $data) . "\t ,";
                    unset($data);
                }
                $html .= implode("\n", $user) . "\n";
            }
        }
    }
    return $html;
}