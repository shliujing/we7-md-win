<?php
global $_W, $_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');

$weid = intval($_W['uniacid']);
if ($operation == 'display') {
    $condition = '';
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_kinds', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('ages', array('page' => $_GPC['page'])));
    }

    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $list = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename('amouse_wxapp_kinds')." WHERE uniacid = $weid and type=5 ORDER BY id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_kinds') . "   WHERE uniacid = $weid  and type=5 ");
    $pager = pagination($total, $pindex, $psize);

} elseif ($operation == 'post') {
    $id = intval($_GPC['id']);
    if (!empty($id)) {
        $age = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_kinds') . " WHERE id = '$id'");
    }
    if (checksubmit('submit')) {
        $rns = array();
        if (empty($id)) {
            if ($_GPC['name']) {
                foreach ($_GPC['name'] as $key => $value) {
                    $rns[$key]['rn'] = $value;
                }
            }
            foreach ($rns as $k => $v) {
                $insert = array('type' => intval($_GPC['type']),
                    'name' => $v['rn'],
                    'uniacid' => $_W['uniacid'],
                );
                pdo_insert('amouse_wxapp_kinds', $insert);
                !pdo_insertid() ? message('保存数据失败, 请稍后重试.', 'error') : '';
            }
        } else {
            $update = array('type' => intval($_GPC['type']), 'name' => trim($_GPC['name']), 'uniacid' => $_W['uniacid']);
            if (pdo_update('amouse_wxapp_kinds', $update, array('id' => $id)) === false) {
                message('更新成功失败, 请稍后重试.', 'error');
            }
        }
        message('更新成功！', $this->createWebUrl('ages', array('op' => 'display')), 'success');
    }
} elseif ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $order = pdo_fetch("SELECT id  FROM " . tablename('amouse_wxapp_kinds') . " WHERE id = $id AND uniacid=" . $weid);
    if (empty($order)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('ages', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_kinds', array('id' => $id));

    message('删除成功！', $this->createWebUrl('ages', array('op' => 'display')), 'success');
}
include $this->template('web/age');