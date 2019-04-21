<?php
global $_W, $_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');

$weid = intval($_W['uniacid']);
$areas = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=1  ORDER BY displayorder DESC   ",array(":weid"=>$weid));
$types = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=4  ORDER BY id DESC ",array(":weid"=>$weid));
$ages = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE type=5  ORDER BY id asc  ");

$fits = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . " WHERE uniacid=:weid and type=2 ORDER BY id asc ",array(":weid"=>$weid));
$uses = pdo_fetchall("SELECT id,name,type,thumb FROM ".tablename('amouse_wxapp_kinds')." WHERE uniacid=:weid and type=3 ORDER BY id asc ",array(":weid"=>$weid));
$shops = pdo_fetchall("select id,name from " . tablename("amouse_wxapp_shop") . " WHERE uniacid=:weid  ", array(":weid" => $weid));
if ($operation == 'display') {
    $condition = '';
    $stat = $_GPC['status'];
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_house', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('houses', array('page' => $_GPC['page'])));
    }
    if (!empty($_GPC['tel'])) {
        $condition .= " AND mobile LIKE '%{$_GPC['tel']}%'";
    }
    if (!empty($_GPC['username'])) {
        $condition .= " AND nickname LIKE '%{$_GPC['username']}%'";
    }
    if (empty($_GPC['house_type'])) {
        $condition.=" and ( house_type=4 or house_type=5 )";
    }
    if (!empty($_GPC['house_type'])) { //0 1
        $condition.=" and  house_type= ".$_GPC['house_type'];
    }
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $list = pdo_fetchall("SELECT * FROM " . tablename('amouse_wxapp_house') . "  WHERE uniacid = $weid  $condition ORDER BY id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_house') . "  WHERE uniacid = $weid  $condition");
    $pager = pagination($total, $pindex, $psize);
    if (!empty($list)) {
        foreach ($list as $key => $card) {
            $imgs = iunserializer($card['imgs']);
            foreach ($imgs as $k => $imgid) {
                $imgs[$k] = tomedia($imgid);
            }
            $list[$key]['imgs'] = $imgs;
            $area= pdo_fetchcolumn("SELECT name FROM " . tablename('amouse_wxapp_kinds')." WHERE uniacid =:weid and type=1  and id=:id  ",array(":weid"=>$weid,":id"=>$card['area_id']));
            $list[$key]['area'] = $area;
            $fit= pdo_fetchcolumn("SELECT name FROM " . tablename('amouse_wxapp_kinds')." WHERE uniacid =:weid and type=2 and id=:id  ",array(":weid"=>$weid,":id"=>$card['fit_id']));
            $list[$key]['fit'] = $fit;
            $use= pdo_fetchcolumn("SELECT name FROM " . tablename('amouse_wxapp_kinds')." WHERE uniacid =:weid  and id=:id  ",array(":weid"=>$weid,":id"=>$card['use_id']));
            $list[$key]['use'] = $use;

        }
    }

} elseif ($operation == 'detail') {
    $id = intval($_GPC['id']);
    if (!empty($id)) {
        $house = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_house') . " WHERE id =:id ", array(":id" => $id));
        $piclist = array();
        $piclist1 = unserialize($house['imgs']);
        if (is_array($piclist1)) {
            foreach ($piclist1 as $key => $p) {
                $piclist[] = is_array($p) ? $p['attachment'] : $p;
            }
        }
        $agents = pdo_fetchall("select id,realname from ".tablename("amouse_wxapp_agent")." WHERE uniacid=:weid and shop_id=:shop_id ",array(":weid"=>$weid,":shop_id"=>$house['shop_id']));
    }
} elseif ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $order = pdo_fetch("SELECT id  FROM " . tablename('amouse_wxapp_house') . " WHERE id = $id AND uniacid=" . $weid);
    if (empty($order)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('houses', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_house', array('id' => $id));

    message('删除成功！', $this->createWebUrl('rents', array('op' => 'display')), 'success');
}  elseif ($operation == 'setstatus') {
    $id  = intval($_GPC['id']);
    $data = intval($_GPC['data']);
    $data = ($data == 1 ? '0' : '1');
    pdo_update('amouse_wxapp_house', array('status'=> $data), array("id"=>$id,"uniacid" => $_W['uniacid']));
    die(json_encode(array( 'result' => 1, 'data' => $data  )));

}elseif ($operation == 'post') {
    $id = intval($_GPC['id']);
    $vills = pdo_fetchall("SELECT * FROM " . tablename('amouse_wxapp_vill') . "  WHERE uniacid = $weid ORDER BY displayorder DESC " );

    if (!empty($id)) {
        $house = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_house') . " WHERE id =:id ", array(":id" => $id));
        $agents = pdo_fetchall("select id,realname from ".tablename("amouse_wxapp_agent")." WHERE uniacid=:weid and shop_id=:shop_id ",array(":weid"=>$weid,":shop_id"=>$house['shop_id']));
        $piclist = array();
        $piclist1 = unserialize($house['imgs']);
        if (is_array($piclist1)) {
            foreach ($piclist1 as $key => $p) {
                $piclist[] = is_array($p) ? $p['attachment'] : $p;
            }
        }

    }
    if (checksubmit('submit')) {
        $data2['uniacid'] = $weid;
        $data2['title'] = trim($_GPC['title']);
        $data2['mobile'] = trim($_GPC['mobile']);
        $data2['area_id'] = intval($_GPC['area_id']);
        $data2['house_type'] = intval($_GPC['house_type']);
        $data2['rental'] = trim($_GPC['rental']);
        $data2['cash_type'] = trim($_GPC['cash_type']);
        $data2['price'] = trim($_GPC['price']);
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
        $data2['imgs'] = serialize($_GPC['imgs']);
        $data2['status'] = intval($_GPC['status']);
        $data2['vill_id'] = intval($_GPC['vill_id']);
        $data2['address'] = $_GPC['address'];
        $data2['is_person'] = intval($_GPC['is_person']);
        $data2['is_open_map'] = intval($_GPC['is_open_map']);
        $data2['person_mobile'] = $_GPC['person_mobile'];
        if (!empty($id)) {
            $qrcode = $this->makeActivityCode('amouse_wxapp_house:house:', $id);
            pdo_update('amouse_wxapp_house', array('code'=>$qrcode), array('id' => $id));
            pdo_update('amouse_wxapp_house', $data2, array('id' => $id));
        }
        message('更新信息成功！', $this->createWebUrl('rents', array('op' => 'display')), 'success');
    }
}elseif($operation=='export_submit'){
    $sql = "SELECT `id`,`title`,`mobile`,`house_type`,`createtime`,`nickname`,`area_id`,`view` FROM". tablename('amouse_wxapp_house') . " WHERE uniacid = :uniacid ";
    $houses= pdo_fetchall($sql,array(':uniacid' => $weid));
    $html = wxapp_house_export_parse($houses);
    header("Content-type:text/csv");
    header("Content-Disposition:attachment; filename=house_data.csv");
    echo $html;
    exit();
}
include $this->template('web/rents');

function wxapp_house_export_parse($houses) {
    if (empty($houses)) {
        return false;
    }
    $header = array(
        'id' => 'ID', 'title' => '房屋名称', 'mobile' => '手机号', 'house_type' => '类型',
        'createtime' => '注册时间','nickname' => '用户信息','area_id' => '区域',
        'view'=>'预览量'
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
                    if ($row['house_type']==4){
                        $row['house_type'] = '求租';
                    }else if ($row['house_type']==5){
                        $row['house_type'] = '求购';
                    }
                    $area = pdo_fetchcolumn("SELECT name FROM " . tablename('amouse_wxapp_kinds') . " WHERE type=1  and id=:id  limit 1", array(":id" => $row['area_id']));
                    $row['area_id'] = $area;
                    $row['createtime'] = date('Y-m-d H:i:s', $row['createtime']);
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