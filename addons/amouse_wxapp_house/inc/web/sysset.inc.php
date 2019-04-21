<?php
/**
 * Created by PhpStorm.
 * User: shizhongying
 * QQ : 214983937
 * Date: 7/21/15
 * Time: 09:47
 */
global $_W, $_GPC;
$weid = $_W['uniacid'];
$op = !empty($_GPC['op']) ? $_GPC['op'] : 'base';
load()->func('tpl');
$set = pdo_fetch("select * from " . tablename('amouse_wxapp_sysset') . ' where `uniacid`=:uniacid limit 1', array(':uniacid' => $weid));
$rules = unserialize($set['rule']);
if (checksubmit('submit')) {
    if ($op == 'base') {
        $data2['systel'] = trim($_GPC['systel']);$data2['qqmap_ak'] =  trim($_GPC['qqmap_ak']) ;
        $data2['enable'] = intval($_GPC['enable']) ; $data2['copyright'] = trim($_GPC['copyright']);
        $data2['is_custom'] =  intval($_GPC['is_custom']) ;$data2['is_shield'] =  intval($_GPC['is_shield']) ;
         $data2['is_public'] =  intval($_GPC['is_public']) ;
        $data2['is_pay_public']  =  intval($_GPC['is_pay_public']) ;
         $data2['check'] =  intval($_GPC['check']) ; $data2['isrent'] =  intval($_GPC['isrent']) ;
        $data2['isshare'] = intval($_GPC['isshare']) ;  $data2['is_close_shop'] =  intval($_GPC['is_close_shop']) ;
        $data2['is_style'] = intval($_GPC['is_style']) ;$data2['iscreate'] =  intval($_GPC['iscreate']) ;
        $data2['wxapp_name1'] =  trim($_GPC['wxapp_name1']) ;
        $data2['wxapp_url1'] =  trim($_GPC['wxapp_url1']) ;
        $data2['wxapp_name2'] =  trim($_GPC['wxapp_name2']) ;
        $data2['wxapp_url2'] =  trim($_GPC['wxapp_url2']) ;
    }else if ($op == 'tpl') {
        $data2['aduit_tpl'] =  trim($_GPC['aduit_tpl']) ;
        $data2['share_title']  = $_GPC['share_title']  ;
        $data2['share_desc']  = $_GPC['share_desc']  ;
        $data2['share_thumb']  = $_GPC['share_thumb']  ;
        $data2['mobile_verify_status'] = trim($_GPC['mobile_verify_status']);
        $data2['logo'] = trim($_GPC['logo']);
        $data2['sms_user'] = trim($_GPC['sms_user']);
        $data2['sms_secret'] = trim($_GPC['sms_secret']);
        $data2['sms_type'] = trim($_GPC['sms_type']);
        $data2['sms_template_code'] = trim($_GPC['sms_template_code']);
        $data2['sms_free_sign_name'] = trim($_GPC['sms_free_sign_name']);
        $data2['reg_sms_code'] = trim($_GPC['reg_sms_code']);
    }else if ($op == 'credit') {
        $data2['enter_price']  =intval($_GPC['enter_price']) ;
        $data2['public_price'] =  intval($_GPC['public_price']) ;
        $data2['top_price'] =  intval($_GPC['top_price']) ;
        $data2['show_top'] =  intval($_GPC['show_top']) ;
        $cs = array();
        $top_days = $_GPC['top_days'];
        $top_amouts = $_GPC['top_amounts'];
        if (is_array($top_days)) {
            foreach ($top_days as $key => $value) {
                $d = array('day' => $top_days[$key], 'amount' => $top_amouts[$key]);
                $cs[] = $d;
            }
        }
        if (!empty($cs)) {
            $_GPC['rule'] = iserializer($cs);
        }
        $data2['rule'] = trim($_GPC['rule']);
    }
    if (empty($set)) {
        $data2['uniacid'] = $weid;
        pdo_insert('amouse_wxapp_sysset', $data2);
    } else {
        pdo_update('amouse_wxapp_sysset', $data2, array('uniacid' => $weid));
    }
    message('更新参数设置成功！', 'refresh');
}

if (checksubmit('confrimprint')) {
    load()->func('logging');
    $rnd = random(6, 1);
    $txt = "【微信验证】您的本次操作的验证码为：" . $rnd . ".十分钟内有效";
    include_once IA_ROOT . '/addons/amouse_wxapp_house/AliyunSms.php';
    if (empty($_GPC['sms_phone']) || empty($_GPC['sms_secret']) || empty($_GPC['sms_user'])) {
        message('设置好参数！', 'error');
    }
    $sms = new \AliyunSms();
    if ($set['_type'] == 0 && $set['sms_free_sign_name'] && $set['sms_template_code']) {
        if ($set['sms_type'] == 1) {
            $sms_param2 = "{\"number\":\"$rnd\"}";
            $sms->_sendNewDySms($_GPC['sms_phone'], $set['sms_user'], $set['sms_secret'], $set['sms_free_sign_name'], $set['mail_smtp'], $sms_param2, '1234');
        } else {
            $gname = $_W['account']['name'];
            $sms_param = "{\"number\":\"$rnd\",\"product\":\"$gname\"}";
            $sms->_sendAliDaYuSms($_GPC['sms_phone'], $set['sms_user'], $set['sms_secret'], $set['sms_free_sign_name'], $set['mail_smtp'], $sms_param);
        }
    }
}
include $this->template('web/_set');