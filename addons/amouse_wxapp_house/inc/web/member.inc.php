<?php

global $_W, $_GPC;
$weid=$_W['uniacid'];
$op=$_GPC['op'] ? $_GPC['op'] : "display";
if($op == 'display'){
    $pindex=intval($_GPC['page']) ? intval($_GPC['page']) : 1;
    if (checksubmit('submit1') && !empty($_GPC['delete'])) {
        pdo_delete('amouse_wxapp_member', " id  IN  ('" . implode("','", $_GPC['delete']) . "')");
        message('批量处理成功！', $this->createWebUrl('member', array('page' => $_GPC['page'])));
    }
    $psize=10;
    $sql=" where uniacid = :weid   ";
    $params[':weid']=$_W['uniacid'];
    if(isset($_GPC['keywords'])){
        $sql=' AND `username` LIKE :keywords';
        $params[':keywords']="%{$_GPC['keywords']}%";
    }
    if(isset($_GPC['keywords1'])){
        $sql.=' AND `phone` LIKE :keywords1';
        $params[':keywords1']="%{$_GPC['keywords1']}%";
    }
    $list=pdo_fetchall("SELECT * FROM ".tablename('amouse_wxapp_member').$sql." order by id desc  limit ".($pindex-1) * $psize.",".$pindex * $psize, $params);
    $total=pdo_fetchcolumn("SELECT count(*) FROM ".tablename('amouse_wxapp_member').$sql, $params);
    $pager=pagination($total, $pindex, $psize);
} elseif($op == 'change') {
    $id=intval($_GPC['id']);
    $status=$_GPC['status'];
    if($id){
        pdo_update('amouse_wxapp_member', array('status'=>$status), array('id'=>$id));
    }
    message('设置会员状态数据成功！', $this->createWebUrl('member', array('op'=>'display')), 'success');
} elseif($op == 'del') {
    $id=intval($_GPC['id']);
    if($id){
        pdo_delete('amouse_wxapp_member', array('id' => $id));
    }
    message('删除会员数据成功！', $this->createWebUrl('member', array('op'=>'display')), 'success');
} elseif ($op == 'setstatus') {
    $id  = intval($_GPC['id']);
    $data = intval($_GPC['data']);
    $type = $_GPC['type'];
    $data = ($data == 1 ? '0' : '1');
    pdo_update('amouse_wxapp_member', array($type=> $data), array("id"=>$id,"uniacid" => $_W['uniacid']));
    die(json_encode(array(
        'result' => 1,
        'data' => $data
    )));

}
include $this->template('web/member');