<?php
global $_W,$_GPC;
$operation = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
load()->func('tpl');
$weid=intval($_W['uniacid']);
if ($operation == 'display') {
    $condition = '';
    $stat = $_GPC['status'];
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_agent', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('agent', array('page' => $_GPC['page'])));
    }
    if (!empty($_GPC['mobile'])) {
        $condition .= " AND a.mobile LIKE '%{$_GPC['mobile']}%'";
    }
    if (!empty($_GPC['realname'])) {
        $condition .= " AND a.realname LIKE '%{$_GPC['realname']}%'";
    }
    $pindex = max(1, intval($_GPC['page']));
    $psize = 10;
    $list = pdo_fetchall("SELECT a.* FROM " . tablename('amouse_wxapp_agent') . " as a WHERE a.uniacid = $weid $condition ORDER BY a.id DESC LIMIT " . ($pindex - 1) * $psize . ',' . $psize);
    $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename('amouse_wxapp_agent') . " as a WHERE a.uniacid = $weid  $condition");
    $pager = pagination($total, $pindex, $psize);
    if (!empty($list)) {
        foreach ($list as $key => $card) {
            $shop_id = $card['shop_id'] ;
            $shop=pdo_fetch("SELECT * FROM ".tablename('amouse_wxapp_shop')." WHERE uniacid =:uniacid and id=:id limit 1 ",array(":uniacid"=>$weid,":id"=>$shop_id));
            $list[$key]['shop_name'] = $shop['name'];
            $list[$key]['shop_id'] = $shop['id'];
        }
    }

} elseif ($operation == 'detail') {
    $id = intval($_GPC['id']);
    $item = pdo_fetch("SELECT *  FROM " . tablename('amouse_wxapp_agent') . " WHERE  id =$id AND uniacid=" . $weid);
} elseif($operation == 'post') {
    $id=intval($_GPC['id']);
    $shops=pdo_fetchall("SELECT * FROM ".tablename('amouse_wxapp_shop')." WHERE uniacid = '$weid' order by id desc ");

    if(!empty($id)){
        $slide=pdo_fetch("SELECT * FROM ".tablename('amouse_wxapp_agent')." WHERE id = '$id'");
    }
    if(checksubmit('submit')){
        $data=array('uniacid'=>$_W['uniacid'], 'realname'=>$_GPC['realname'],
            'shop_id'=>intval($_GPC['shop_id']),'icon_url'=>$_GPC['icon_url'],'desc'=>trim($_GPC['desc']),
            'mobile'=>trim($_GPC['mobile']));
        if(!empty($id)){
            pdo_update('amouse_wxapp_agent', $data, array('id'=>$id));
        } else {
            pdo_insert('amouse_wxapp_agent', $data);
            $id=pdo_insertid();
        }


        message('更新成功！', $this->createWebUrl('agent', array('op'=>'display')), 'success');
    }

} elseif ($operation == 'delete') {
    $id = intval($_GPC['id']);
    $order = pdo_fetch("SELECT id  FROM " . tablename('amouse_wxapp_agent') . " WHERE id = $id AND uniacid=" . $weid);
    if (empty($order)) {
        message('抱歉，不存在，或者已经删除！', $this->createWebUrl('agent', array('op' => 'display')), 'error');
    }
    pdo_delete('amouse_wxapp_agent', array('id' => $id));

    message('删除成功！', $this->createWebUrl('agent', array('op' => 'display')), 'success');
}elseif ($operation == 'setstatus') {
    $id = intval($_GPC['id']);
    $data = intval($_GPC['data']);
    $type = $_GPC['type'];
    $data = ($data == 1 ? '0' : '1');
    $agent = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_agent') . " WHERE id = $id AND uniacid=" . $weid);
    $set = pdo_fetch("SELECT * FROM " . tablename('amouse_wxapp_sysset') . " WHERE `uniacid`= :weid  limit 1 ", array(':weid' => $weid));
    if ($data==0 && !empty($set['aduit_tpl']) && !empty($agent['openid'])) {  //发送模板消息 订单提交成功通知
        $send['first'] = array('value' => '您的提交申请审核通过，请去管理您的房源。', 'color' => '#000');
        $send['keyword1'] = array('value' => $agent['realname'], 'color' => '#000');
        $send['keyword2'] = array('value' =>'置业顾问['.$agent['realname'].']申请入驻', 'color' => '#000');
        $send['keyword3'] = array('value' => date('Y年m月d日',  $agent['createtime']), 'color' => '#000');
        $send['keyword4'] = array('value' => date('Y年m月d日', time()), 'color' => '#000');
        $send['keyword5'] = array('value' => '恭喜您申请入驻成功', 'color' => '#000');
        $this->sendTplNotice($agent['openid'], $set['aduit_tpl'], 'amouse_wxapp_house/pages/user/agent/shop-regist', trim($agent['sendcode']), $send, 'keyword1.DATA');
    }
    pdo_update('amouse_wxapp_agent', array($type => $data), array("id" => $id, "uniacid" => $_W['uniacid']));
    die(json_encode(array( 'result' => 1, 'data' => $data)));
}
include $this->template('web/agent');