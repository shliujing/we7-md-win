<?php
global $_W,$_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');

$weid=intval($_W['uniacid']);
if ($operation == 'display') {
    $condition = '';
    $stat = $_GPC['status'];
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_shop', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('shop', array('page' => $_GPC['page'])));
    }

    if (!empty($_GPC['title'])) {
        $condition .= " AND title LIKE '%{$_GPC['title']}%'";
    }
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $list = pdo_fetchall("SELECT * FROM " . tablename('amouse_wxapp_shop') . "  WHERE uniacid = $weid $condition ORDER BY id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_shop') . "  WHERE uniacid = $weid  $condition");
    $pager = pagination($total, $pindex, $psize);

    if (!empty($list)) {
        foreach ($list as $key => $card) {
            $imgs = iunserializer($card['thumb']);
            foreach ($imgs as $k => $imgid) {
                $imgs[$k] = tomedia($imgid);
            }
            $list[$key]['thumb'] = $imgs;
        }
    }
}elseif($operation == 'post') {
    $id=intval($_GPC['id']);
    $areas= pdo_fetchall("SELECT id,name,type FROM " . tablename('amouse_wxapp_kinds')." WHERE `uniacid` = $weid and type=1 order by id desc ");
    if(!empty($id)){
        $shop=pdo_fetch("SELECT * FROM ".tablename('amouse_wxapp_shop')." WHERE id = '$id'");
        $piclist = array();
        $piclist1 = unserialize($shop['thumb']);
        if (is_array($piclist1)) {
            foreach ($piclist1 as $key =>  $p) {
                $piclist[] = is_array($p) ? $p['attachment'] : $p;
            }
        }
    }
    if(checksubmit('submit')){
        $data=array('uniacid'=>$_W['uniacid'],'name'=>$_GPC['name'],
            'area_id'=>intval($_GPC['area_id']),'lat'=>trim($_GPC['lat']),'lng'=>trim($_GPC['lng']),
            'address'=>trim($_GPC['address']),
            'thumb' => serialize($_GPC['thumb']),'mobile'=>trim($_GPC['mobile']));
        if(!empty($id)){
            pdo_update('amouse_wxapp_shop', $data, array('id'=>$id));
        } else {
            pdo_insert('amouse_wxapp_shop', $data);
            $id=pdo_insertid();
        }
        message('更新成功！', $this->createWebUrl('shop', array('op'=>'display')), 'success');
    }
} elseif ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $order = pdo_fetch("SELECT id  FROM " . tablename('amouse_wxapp_shop') . " WHERE id = $id AND uniacid=" . $weid);
    if (empty($order)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('shop', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_shop', array('id' => $id));

    message('删除成功！', $this->createWebUrl('shop', array('op' => 'display')), 'success');
}
include $this->template('web/shop');