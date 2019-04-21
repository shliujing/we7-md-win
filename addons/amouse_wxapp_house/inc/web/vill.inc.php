<?php
global $_W,$_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');

$weid=intval($_W['uniacid']);
if ($operation == 'display') {
    $condition = '';
    $stat = $_GPC['status'];
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_vill', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('vill', array('page' => $_GPC['page'])));
    }
    if (checksubmit('submit') && !empty($_GPC['displayorder'])) {
        foreach ($_GPC['displayorder'] as $id => $displayorder) {
            pdo_update('amouse_wxapp_vill', array('displayorder' => $displayorder), array('id' => $id));
        }
        message('批量处理成功！', $this->createWebUrl('vill', array('page' => $_GPC['page'])));
    }

    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $list = pdo_fetchall("SELECT a.* FROM " . tablename('amouse_wxapp_vill') . " as a WHERE a.uniacid = $weid $condition ORDER BY a.displayorder DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_vill') . " as a WHERE a.uniacid = $weid  $condition");
    $pager = pagination($total, $pindex, $psize);
    foreach ($list as $key => $vill) {
        $area= pdo_fetch("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid =:weid and type=1  and id=:id  ",array(":weid"=>$weid,":id"=>$vill['area_id']));
        $list[$key]['area'] = $area['name'];
    }

}  elseif($operation == 'post') {
    $id=intval($_GPC['id']);
    $areas = pdo_fetchall("SELECT id,name FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid = $weid and type=1  ORDER BY id DESC ");
    if(!empty($id)){
        $vill=pdo_fetch("SELECT * FROM ".tablename('amouse_wxapp_vill')." WHERE id = '$id'");
    }
    if(checksubmit('submit')){
        $data=array('uniacid'=>$_W['uniacid'], 'name'=>$_GPC['name'],'displayorder'=>$_GPC['displayorder'], 'area_id'=>intval($_GPC['area_id']));
        if(!empty($id)){
            pdo_update('amouse_wxapp_vill', $data, array('id'=>$id));
        } else {
            pdo_insert('amouse_wxapp_vill', $data);
            $id=pdo_insertid();
        }
        message('更新成功！', $this->createWebUrl('vill', array('op'=>'display')), 'success');
    }

} elseif ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $order = pdo_fetch("SELECT id  FROM " . tablename('amouse_wxapp_vill') . " WHERE id = $id AND uniacid=" . $weid);
    if (empty($order)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('vill', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_vill', array('id' => $id));

    message('删除成功！', $this->createWebUrl('vill', array('op' => 'display')), 'success');
}
include $this->template('web/vill');