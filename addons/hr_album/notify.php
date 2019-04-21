<?php
/**
 * [WeEngine System] Copyright (c) 2014 WE7.CC
 * WeEngine is NOT a free software, it under the license terms, visited http://www.zheyitianshi.com/ for more details.
 */
define('IN_MOBILE', true);
$input = file_get_contents('php://input');
if (!empty($input) && empty($_GET['out_trade_no'])) {
	if (preg_match('/(\<\!DOCTYPE|\<\!ENTITY)/i', $input)) {
		exit('fail');
	}
	libxml_disable_entity_loader(true);
	$obj = simplexml_load_string($input, 'SimpleXMLElement', LIBXML_NOCDATA);
	$data = json_decode(json_encode($obj), true);
	if (empty($data)) {
		exit('fail');
	}
	if ($data['result_code'] != 'SUCCESS' || $data['return_code'] != 'SUCCESS') {
				exit('fail');
	}else{
	    require '../../framework/bootstrap.inc.php';
	    $out_trade_no = $data['out_trade_no'];
	    $addtime = strtotime($data['time_end']);
	    $openid = $data['openid'];
	    $transaction_id = $data['transaction_id'];
	    $money = $data['total_fee'];
	    $paydata = pdo_fetch("SELECT * FROM".tablename('hr_album_paylog')." WHERE out_trade_no = :out_trade_no",array(':out_trade_no' => $out_trade_no));
	    //file_put_contents(IA_ROOT.'/addons/tc_card/11.txt',$paydata['tid']."//".$out_trade_no);
	    if($paydata){
            $isthis = pdo_fetchcolumn("SELECT id FROM".tablename('tc_card_paylog')." WHERE transaction_id = :transaction_id",array(':transaction_id' => $transaction_id));
            if(!$isthis){
                $user = pdo_fetch("SELECT fee FROM".tablename('hr_album_user')." WHERE openid = :openid",array(':openid' => $paydata['tid']));
                $newfee = $paydata['cost']+$user['fee'];
                pdo_update('hr_album_user',array('fee' => $newfee),array('openid' => $paydata['tid']));
                pdo_update('hr_album_paylog',array('transaction_id' => $transaction_id,'addtime' => $addtime,'status' => 1),array('out_trade_no' => $out_trade_no));
            }
	    }
	}
	echo 'success';
} else {
	echo 'success';
}
