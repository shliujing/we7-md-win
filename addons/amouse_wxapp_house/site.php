<?php
defined('IN_IA') or die('Access Denied');
define('AMOUSE_WXAPP_HOUSE', 'amouse_wxapp_house');
define('RES', '../addons/' . AMOUSE_WXAPP_HOUSE . '/style/');
class Amouse_Wxapp_HouseModuleSite extends WeModuleSite
{
    public function payResult($params)
    {
        global $_W;
        load()->func("logging");
        logging_run($params);
        $order = pdo_fetch('SELECT * FROM ' . tablename('amouse_wxapp_order') . ' WHERE id = :id AND `uniacid` = :weid ', array(':id' => $params['tid'], ':weid' => intval($_W['uniacid'])));
        $orderData = array('status' => $params['result'] == 'success' ? 1 : 0);
        if ($params['type'] == 'wechat') {
            $orderData['transid'] = $params['tag']['transaction_id'];
        }
        if ($params['result'] == 'success' && $params['from'] == 'notify') {
            if ($params['fee'] == $order['price']) {
                pdo_update('amouse_wxapp_order', $orderData, array('id' => $params['tid']));
                if ($order['paytype'] == 0) {
                    pdo_update('amouse_wxapp_member', array('vip' => 1), array('openid' => $order['openid']));
                } else {
                    if ($order['paytype'] == 1 || $order['paytype'] == 3) {
                        $house_id = $order['house_id'];
                        $top_day = $order['top_day'];
                        if (pdo_fetch('SELECT * FROM ' . tablename('amouse_wxapp_house') . ' WHERE id = :id AND `uniacid` = :weid ', array(':id' => $house_id, ':weid' => intval($_W['uniacid'])))) {
                            $nextWeek = $house['createtime'] + $top_day * 24 * 60 * 60;
                        } else {
                            $nextWeek = TIMESTAMP + $top_day * 24 * 60 * 60;
                        }
                        $data['createtime'] = $nextWeek;
                        $data['vipstatus'] = 1;
                        $data['listorder'] = 1;
                        $is_pay_public = pdo_fetchcolumn('select `is_pay_public` from ' . tablename('amouse_wxapp_sysset') . ' where `uniacid`=:uniacid limit 1', array(':uniacid' => intval($_W['uniacid'])));
                        if ($is_pay_public == 0) {
                            $data['status'] = 0;
                        }
                        pdo_update('amouse_wxapp_house', $data, array('id' => $house_id));
                    }
                }
            }
        }
    }
    public function makeActivityCode($scene)
    {
        $account_api = WeAccount::create();
        $code = $account_api->getCodeUnlimit($scene);
        if (is_error($code)) {
            return $code;
        }
        $path = $this->fileSave($code, "jpg");
        return $path;
    }
    public function doMobileAutoFinishVip()
    {
        global $_W;
        error_reporting(0);
        ignore_user_abort();
        set_time_limit(0);
        $sets = pdo_fetchall('SELECT uniacid FROM ' . tablename('amouse_wxapp_sysset'));
        load()->classs("weixin.account");
        load()->func("file");
        foreach ($sets as $set) {
            $sweid = $set['uniacid'];
            if (!empty($sweid)) {
                $accObj = WeixinAccount::create($sweid);
                $houses = pdo_fetchall('SELECT id,openid,createtime,vipstatus FROM ' . tablename('amouse_wxapp_house') . ' where vipstatus=1 and createtime<unix_timestamp() order by createtime desc ');
                if (!empty($houses)) {
                    foreach ($houses as $k => $auto) {
                        pdo_update('amouse_wxapp_house', array('createtime' => time(), 'vipstatus' => 0), array('id' => $auto['id']));
                    }
                }
            } else {
            }
        }
    }
    public function sendTplNotice($touser, $template_id, $page = '', $form_id, $postdata, $emphasis_keyword = NULL)
    {
        load()->model("mc");
        load()->func("communication");
        $account_api = WeAccount::create();
        $accesstoken = $account_api->getAccessToken();
        if (is_error($accesstoken)) {
            return $accesstoken;
        }
        if (empty($touser)) {
            return error(-1, '参数错误,粉丝openid不能为空');
        }
        if (empty($template_id)) {
            return error(-1, '参数错误,模板标示不能为空');
        }
        if (empty($postdata) || !is_array($postdata)) {
            return error(-1, '参数错误,请根据模板规则完善消息内容');
        }
        $data = array();
        $data['touser'] = $touser;
        $data['template_id'] = trim($template_id);
        $data['page'] = trim($page);
        $data['form_id'] = trim($form_id);
        if ($emphasis_keyword) {
            $send['emphasis_keyword'] = $emphasis_keyword;
        }
        $data['data'] = $postdata;
        $data = json_encode($data);
        $templateUrl = "https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token={$accesstoken}";
        $response = ihttp_request($templateUrl, $data);
        if (is_error($response)) {
            return error(-1, "访问公众平台接口失败, 错误: {$response['message']}");
        }
        $result = @json_decode($response['content'], '1');
        WeUtility::logging("sendTplNotice", var_export($result, true));
        if (empty($result)) {
            return error(-1, "接口调用失败, 元数据: {$response['meta']}");
        } else {
            if (!empty($result['errcode'])) {
                return error(-1, "访问微信接口错误, 错误代码: {$result['errcode']}, 错误信息: {$result['errmsg']},信息详情：{$this->error_code($result["errcode"])}");
            }
        }
        return '1';
    }
}