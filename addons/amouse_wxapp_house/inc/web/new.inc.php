<?php
global $_W, $_GPC;
$op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');

$weid = intval($_W['uniacid']);
$areas = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=1  ORDER BY displayorder DESC   ", array(":weid" => $weid));
$uses = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . " WHERE uniacid=:weid and type=3 ORDER BY id asc ", array(":weid" => $weid));
if ($op == 'display') {
    $condition = '';
    $stat = $_GPC['status'];
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_newflats', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        pdo_delete('amouse_wxapp_like', " houseid  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('new', array('page' => $_GPC['page'])));
    }
    if (checksubmit('submit2') && !empty($_GPC['delete'])) {
        $ids = $_GPC['delete'];
        foreach ($ids as $key => $id) {
            pdo_update('amouse_wxapp_newflats', array('status' => 0), array("id" => $id));
        }
        message('批量审核成功！', $this->createWebUrl('new', array('page' => $_GPC['page'])));
    }
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $sql="SELECT * FROM " . tablename('amouse_wxapp_newflats')."  WHERE uniacid =:weid ORDER BY createtime DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize ;
    $list = pdo_fetchall($sql,array(':weid'=>$weid));
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_newflats') . "  WHERE uniacid = $weid ");
    $pager = pagination($total, $pindex, $psize);
    if (!empty($list)) {
        foreach ($list as $key => $card) {
            $imgs = iunserializer($card['thumb']);
            foreach ($imgs as $k => $imgid) {
                $imgs[$k] = tomedia($imgid);
            }
            $list[$key]['imgs'] = $imgs;
            $area = pdo_fetch("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=1  and id=:id  limit 1", array(":weid" => $weid, ":id" => $card['area_id']));
            $list[$key]['area'] = $area;
            $use = pdo_fetch("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=3 and id=:id  limit 1", array(":weid" => $weid, ":id" => $card['use_id']));
            $list[$key]['use'] = $use; 
        }
    }

} elseif ($op == 'detail') {
    $id = intval($_GPC['id']);
    $item = pdo_fetch("SELECT *  FROM " . tablename('amouse_wxapp_newflats') . " WHERE  id =:id AND uniacid=:weid limit 1", array(':id' => $id, ':weid' => $weid));
} elseif ($op == 'delete') {
    $id = intval($_GPC['id']);
    $item = pdo_fetch("SELECT *  FROM " . tablename('amouse_wxapp_newflats') . " WHERE  id =:id AND uniacid=:weid limit 1", array(':id' => $id, ':weid' => $weid));
    if (empty($item)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('new', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_newflats', array('id' => $id));
     
    message('删除成功！', $this->createWebUrl('new', array('op' => 'display')), 'success');
} elseif ($op == 'post') {
    $id = intval($_GPC['id']);
    if (!empty($id)) {
        $item= pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_newflats') . " WHERE id =:id ", array(":id" => $id));
        $piclist = array();
        $piclist1 = unserialize($item['thumb']);
        if (is_array($piclist1)) {
            foreach ($piclist1 as $key => $p) {
                $piclist[] = is_array($p) ? $p['attachment'] : $p;
            }
        }
    }
    if (checksubmit('submit')) {

        $insert= array('uniacid'=>$weid,
            'name' => trim($_GPC['name']),
            'thumb' => serialize($_GPC['imgs']),
            'area_id' => $_GPC['area_id'],
            'use_id' => $_GPC['use_id'],
            'type' => trim($_GPC['type']),
            'years'=>$_GPC['years'],
            'wytype'=>$_GPC['wytype'],
            'jzarea'=>$_GPC['jzarea'],
            'ratio'=>$_GPC['ratio'],
            'floor_area'=>$_GPC['floor_area'],
            'lat'  => trim($_GPC['lat']),
            'lng'  => trim($_GPC['lng']), 
            'afforestation'=>$_GPC['afforestation'],
            'total'=>$_GPC['total'],
            'door_area'=>$_GPC['door_area'],
            'road_transport'=>$_GPC['road_transport'],
            'investors'=>$_GPC['investors'],
            'developers'=>$_GPC['developers'],
            'property_compay'=>$_GPC['property_compay'],
            'propertypay'=>$_GPC['propertypay'],
            'features'=>$_GPC['features'],
            'sales_addres'=>$_GPC['sales_addres'],
            'checkin_time'=>$_GPC['checkin_time'],
            'sales_status'=>$_GPC['sales_status'],
            'average_price'=>$_GPC['average_price'],
            'business'=>$_GPC['business'],
            'banks'=>$_GPC['banks'],'trading_area'=>$_GPC['trading_area'],
            'park'=>$_GPC['park'],'hotel'=>$_GPC['hotel'],'supermarket'=>$_GPC['supermarket'],
            'humanities'=>$_GPC['humanities'],
            'parking_number'=>$_GPC['parking_number'],'base'=>$_GPC['base'],'equally'=>$_GPC['equally'],
            'surrounding'=>$_GPC['surrounding'],'landscape'=>$_GPC['landscape'],'hospitals'=>$_GPC['hospitals'],
            'school'=>$_GPC['school'],'traffic'=>$_GPC['traffic'],
            'construction'=>$_GPC['construction'],
            'design'=>$_GPC['design'],
            'salecom'=>$_GPC['salecom'],
            'address'=>$_GPC['address'],
            'like'=>0,
            'introduction'=>htmlspecialchars_decode($_GPC['introduction']), 'createtime' => TIMESTAMP);
        if (!empty($id)) {
            pdo_update('amouse_wxapp_newflats', $insert, array('id' => $id));
        } else {
            pdo_insert('amouse_wxapp_newflats', $insert);
            $id = pdo_insertid();
            $qrcode = $this->makeActivityCode('amouse_wxapp_newflats:newhouse:', $id);
            pdo_update('amouse_wxapp_newflats', array('equally' => $qrcode), array('id' => $id));
        }
        message('更新信息成功！', $this->createWebUrl('new', array('op' => 'display')), 'success');
    }
}  elseif ($op == 'setstatus') {
    $id = intval($_GPC['id']);
    $data = intval($_GPC['data']);
    $type = $_GPC['type'];
    $data = ($data == 1 ? '0' : '1');
    pdo_update('amouse_wxapp_newflats', array($type => $data), array("id" => $id, "uniacid" => $_W['uniacid']));
    die(json_encode(array(
        'result' => 1,
        'data' => $data
    )));
}
include $this->template('web/new');