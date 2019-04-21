<?php
global $_W, $_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');

$weid = intval($_W['uniacid']);
if ($operation == 'display') {
    $condition = '';
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_kinds', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('use', array('page' => $_GPC['page'])));
    }

    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $list = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds') . "   WHERE uniacid = $weid and type=3  ORDER BY id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_kinds') . "   WHERE uniacid = $weid  and type=3 ");
    $pager = pagination($total, $pindex, $psize);

} elseif ($operation == 'post') {
    $id = intval($_GPC['id']);
    if (!empty($id)) {
        $age = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_kinds') . " WHERE id = '$id'");
    }
    if (checksubmit('submit')) {
        $opts = array();
        if ($_GPC['name']) {
            if($_GPC['id']){
                foreach ($_GPC['id'] as $key => $v) {
                    $opts[$key]['id'] = $v;
                }
            }
            foreach ($_GPC['name'] as $key => $value) {
                $opts[$key]['name'] = $value;
            }
        }
        array_filter($opts);
        foreach($opts as $k=>$v){
            if( !$v ) unset( $arr[$k] );
            $insert = array(
                'type' => 3,
                'name' => $v['name'],'displayorder' =>$v['displayorder']
            );
            if($v['id']>0){
                if (pdo_update('amouse_wxapp_kinds', $insert, array('id' =>$v['id'])) === false) {
                    message('保存数据失败, 请稍后重试.', 'error');
                }
            }else{
                $insert['uniacid']=$weid;
                pdo_insert('amouse_wxapp_kinds', $insert);
                !pdo_insertid() ? message('保存数据失败, 请稍后重试.', 'error') : '';
            }
        }
        message('更新成功！', $this->createWebUrl('use', array('op' => 'display')), 'success');
    }
} elseif ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $order = pdo_fetch("SELECT id  FROM " . tablename('amouse_wxapp_kinds') . " WHERE id = $id AND uniacid=" . $weid);
    if (empty($order)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('use', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_kinds', array('id' => $id));

    message('删除成功！', $this->createWebUrl('use', array('op' => 'display')), 'success');
}elseif($operation=='initData'){

    pdo_delete('amouse_wxapp_kinds', array('type' => 3,'uniacid'=>$_W['uniacid']));

    $names=array('公寓','普通住宅','别墅','板房','平房','其他');

    foreach ($names as $key => $value) {
        $insert = array(
            'type' => 3, 'uniacid' => $_W['uniacid'],
            'name' => $value, 'displayorder' =>$key
        );
        $insert['uniacid'] = $weid;
        pdo_insert('amouse_wxapp_kinds', $insert);
    }
    message('初始化数据成功！', $this->createWebUrl('use', array('op' => 'display')), 'success');
}
include $this->template('web/use');