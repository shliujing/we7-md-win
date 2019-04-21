<?php
/**
 * 酷炫相册模块处理程序
 *
 * @author agressor
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class hr_albumModuleProcessor extends WeModuleProcessor {
	public function respond(){    
	        $x_openid = $this->message['from'];
	        $msgtype = $this->message['msgtype'];
		    $event = $this->message['event'];
		    $this->scan($x_openid);
	}
	public function gettag_a($msg) {
	    $msg = str_replace('&lt;', '<', $msg);
	    $msg = str_replace('&gt;', '>', $msg);
	    $msg = str_replace('&#039;', "'", $msg);
	    return $msg;
	}
	public function sendRes($data) {
	    global $_W;
	    load()->classs('wxapp.account');
	    $accObj = WxappAccount::create($_W['uniacid']);
	    $access_token = $accObj->getAccessToken();
	    $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token={$access_token}";
	    load()->func('communication');
	    $ret = ihttp_request($url, $data);
	    $content = @json_decode($ret['content'], true);
	    return $content['errcode'];
	}
	public function sendText($openid, $text) {
	    $text = $this->gettag_a($text);
	    $post = '{"touser":"' . $openid . '","msgtype":"text","text":{"content":"' . $text . '"}}';
	    $ret = $this->sendRes($post);
	    return $ret;
	}
	public function scan($x_openid) {
	    global $_W,$_GPC;
	    $res = '456';
	    $this->sendText($x_openid, $res);
	}
	public function getAccessToken() {
	    global $_W;
	    load()->model('account');
	    $acid = $_W['acid'];
	    if (empty($acid)) {
	        $acid = $_W['uniacid'];
	    }
	    $account = WeAccount::create($acid);
	    $token = $account->getAccessToken();	    
	    return $token;
	}
}