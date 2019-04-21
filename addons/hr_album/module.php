<?php
/**
 * 酷炫小程序相册模块微站定义
 *
 * @author agressor
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Hr_albumModule extends WeModule {
    public function welcomeDisplay($menus = array()) {
        //这里来展示DIY管理界面
        global $_W, $_GPC;
        include $this->template('welcome');
    }
    function message($msg, $redirect = '', $type = '') {
        global $_W;
        if($redirect == 'refresh') {
            $redirect = $_W['script_name'] . '?' . $_SERVER['QUERY_STRING'];
        } elseif (!empty($redirect) && !strexists($redirect, 'http://')) {
            $urls = parse_url($redirect);
            $redirect = $_W['siteroot'] . 'web/index.php?' . $urls['query'];
        }
        if($redirect == '') {
            $type = in_array($type, array('success', 'error', 'info', 'warning', 'ajax', 'sql')) ? $type : 'info';
        } else {
            $type = in_array($type, array('success', 'error', 'info', 'warning', 'ajax', 'sql')) ? $type : 'success';
        }
        if($_W['isajax'] || $type == 'ajax') {
            $vars = array();
            $vars['message'] = $msg;
            $vars['redirect'] = $redirect;
            $vars['type'] = $type;
            exit(json_encode($vars));
        }
        if (empty($msg) && !empty($redirect)) {
            header('location: '.$redirect);
        }
        $label = $type;
        if($type == 'error') {
            $label = 'danger';
        }
        if($type == 'ajax' || $type == 'sql') {
            $label = 'warning';
        }
        if (defined('IN_API')) {
            exit($msg);
        }
        include $this->template('message');
        exit();
    }
    private function imgurl(){
        global $_GPC, $_W;
        $cfg = $this->module['config'];
        if($cfg['remote']['type']){
            if($cfg['remote']['type'] == 1){
                $url = $cfg['remote']['ftp']['url'].'/';
            }elseif ($cfg['remote']['type'] == 2){
                $url = $cfg['remote']['alioss']['url'].'/';
            }elseif ($cfg['remote']['type'] == 3){
                $url = $cfg['remote']['qiniu']['url'].'/';
            }elseif ($cfg['remote']['type'] == 4){
                $url = $cfg['remote']['cos']['url'].'/';
            }
        }else{
            $url = $_W['siteroot'].'attachment/';
        }
        return $url;
    }
    public function settingsDisplay($settings) {
        global $_W, $_GPC;      
        load() -> model('attachment');
        //点击模块设置时将调用此方法呈现模块设置页面，$settings 为模块设置参数, 结构为数组。这个参数系统针对不同公众账号独立保存。
        //在此呈现页面中自行处理post请求并保存设置参数（通过使用$this->saveSettings()来实现）
        if(checksubmit()) {
            //字段验证, 并获得正确的数据$dat
            if($_GPC['qnurl']){
                if(!strstr($_GPC['qnurl'], 'http')){
                    $qnurl = 'http://'.trim($_GPC['qnurl']);
                }else{
                    $qnurl = $_GPC['qnurl'];
                }
    
            }
            $remote = array(
                'type' => intval($_GPC['type']), 
                'ftp' => array('ssl' => intval($_GPC['ftp']['ssl']),
                'host' => $_GPC['ftp']['host'],
                'port' => $_GPC['ftp']['port'],
                'username' => $_GPC['ftp']['username'],
                'password' => $_GPC['ftp']['password'],
                'pasv' => intval($_GPC['ftp']['pasv']),
                'dir' => $_GPC['ftp']['dir'],
                'url' => $_GPC['ftp']['url'],
                'overtime' => intval($_GPC['ftp']['overtime']),),
                'alioss' => array('key' => $_GPC['alioss']['key'], 
                'secret' => $_GPC['alioss']['secret'], 
                'url' => $_GPC['alioss']['url'],
                'bucket' => $_GPC['alioss']['bucket'],), 
                'qiniu' => array('accesskey' => trim($_GPC['qiniu']['accesskey']),
                'secretkey' => trim($_GPC['qiniu']['secretkey']), 
                'bucket' => trim($_GPC['qiniu']['bucket']),                  
                'url' => trim($_GPC['qiniu']['url'])), 
                'cos' => array('appid' => trim($_GPC['cos']['appid']), 
                'secretid' => trim($_GPC['cos']['secretid']), 
                'secretkey' => trim($_GPC['cos']['secretkey']), 
                'bucket' => trim($_GPC['cos']['bucket']),
                'local' => trim($_GPC['cos']['local']),
                'url' => trim($_GPC['cos']['url'])));
            if ($remote['type'] == ATTACH_OSS){
                if (trim($remote['alioss']['key']) == ''){
                    message('阿里云OSS-Access Key ID不能为空');
                }
                if (trim($remote['alioss']['secret']) == ''){
                    message('阿里云OSS-Access Key Secret不能为空');
                }
                $buckets = attachment_alioss_buctkets($remote['alioss']['key'], $remote['alioss']['secret']);
                if (is_error($buckets)){
                    message('OSS-Access Key ID 或 OSS-Access Key Secret错误，请重新填写');
                }
                list($remote['alioss']['bucket'], $remote['alioss']['url']) = explode('@@', $_GPC['alioss']['bucket']);
                if (empty($buckets[$remote['alioss']['bucket']])){
                    message('Bucket不存在或是已经被删除');
                }
                $remote['alioss']['url'] = 'http://' . $remote['alioss']['bucket'] . '.' . $buckets[$remote['alioss']['bucket']]['location'] . '.aliyuncs.com';
                $remote['alioss']['ossurl'] = $buckets[$remote['alioss']['bucket']]['location'] . '.aliyuncs.com';
                if(!empty($_GPC['custom']['url'])){
                    $url = trim($_GPC['custom']['url'], '/');
                    if (!strexists($url, 'http://') && !strexists($url, 'https://')){
                        $url = 'http://' . $url;
                    }
                    $remote['alioss']['url'] = $url;
                }
            }elseif ($remote['type'] == ATTACH_FTP){
                if (empty($remote['ftp']['host'])){
                    message('FTP服务器地址为必填项.');
                }
                if (empty($remote['ftp']['username'])){
                    message('FTP帐号为必填项.');
                }
                if (empty($remote['ftp']['password'])){
                    message('FTP密码为必填项.');
                }
            }elseif ($remote['type'] == ATTACH_QINIU){
                if (empty($remote['qiniu']['accesskey'])){
                    message('请填写Accesskey');
                }
                if (empty($remote['qiniu']['secretkey'])){
                    message('请填写secretkey');
                }
                if (empty($remote['qiniu']['bucket'])){
                    message('请填写bucket');
                }
                if (empty($remote['qiniu']['url'])){
                    message('请填写url');
                }else{
                    $remote['qiniu']['url'] = strexists($remote['qiniu']['url'], 'http') ? trim($remote['qiniu']['url'], '/') : 'http://' . trim($remote['qiniu']['url'], '/');
                }   
                $auth = attachment_qiniu_auth($remote['qiniu']['accesskey'], $remote['qiniu']['secretkey'], $remote['qiniu']['bucket'], $remote['qiniu']['district']);
                if (is_error($auth)){
                    $message = $auth['message']['error'] == 'bad token' ? 'Accesskey或Secretkey填写错误， 请检查后重新提交' : 'bucket填写错误或是bucket所对应的存储区域选择错误，请检查后重新提交';
                    message($message);
                }
            }elseif ($remote['type'] == ATTACH_COS){
                if (empty($remote['cos']['appid'])){
                    message('请填写APPID');
                }
                if (empty($remote['cos']['secretid'])){
                    message('请填写SECRETID');
                }
                if (empty($remote['cos']['secretkey'])){
                    message('请填写SECRETKEY');
                }
                if (empty($remote['cos']['bucket'])){
                    message('请填写BUCKET');
                }
                if (empty($remote['cos']['url'])){
                    $remote['cos']['url'] = 'http://' . $remote['cos']['bucket'] . '-' . $remote['cos']['appid'] . '.cos.myqcloud.com';
                }else{
                    if (strexists($remote['cos']['url'], '.cos.myqcloud.com') && !strexists($url, '//' . $remote['cos']['bucket'] . '-')){
                        $remote['cos']['url'] = 'http://' . $remote['cos']['bucket'] . '-' . $remote['cos']['appid'] . '.cos.myqcloud.com';
                    }
                    $remote['cos']['url'] = strexists($remote['cos']['url'], 'http') ? trim($remote['cos']['url'], '/') : 'http://' . trim($remote['cos']['url'], '/');
                }
                $auth = attachment_cos_auth($remote['cos']['bucket'], $remote['cos']['appid'], $remote['cos']['secretid'], $remote['cos']['secretkey'],$remote['cos']['local']);
                if (is_error($auth)){
                    message($auth['message']);
                }
            }
            $dat = array(
                'spacename' => $_GPC['spacename'],//空间名字   
                'remoteskin' => $_GPC['remoteskin'],
                'deftitle' => $_GPC['deftitle'],
                'baseskin' => $_GPC['baseskin'],
                'remote' => $remote,
                'isopenthereview' => $_GPC['isopenthereview'],
                'review' => $_GPC['review'],
                'sharepic' => $_GPC['sharepic'],
                'kfbg' => $_GPC['kfbg'],
                'morebg' => $_GPC['morebg'],
                'ishare' => $_GPC['ishare'],
                'isico' => $_GPC['isico'],
                'wxyellow' => $_GPC['wxyellow'],
                'ispay' => $_GPC['ispay'],
                'showmode' => $_GPC['showmode'],
                'dsdesc' => $_GPC['dsdesc'],
                'llads' => $_GPC['llads'],
                'iskf' => $_GPC['iskf'],
                'ishot' => $_GPC['ishot'],
                'paydesc' => $_GPC['paydesc'],
                'list_style' => $_GPC['list_style'],
                'templateid' => $_GPC['templateid']
            );
           
            if ($this->saveSettings ($dat)) {
                $this->message ('保存成功');
            }

        }
        $remote = $settings['remote'];         
        if (!empty($remote['alioss']['key']) && !empty($remote['alioss']['secret'])){
            $buckets = attachment_alioss_buctkets($remote['alioss']['key'], $remote['alioss']['secret']);
        }
        $skinlist = pdo_fetchall("SELECT * FROM" . tablename('hr_album_skin') . " WHERE uniacid = :uniacid ORDER BY `addtime` DESC", array(':uniacid' => $_W['uniacid']));        
        //这里来展示设置项表单
        include $this->template('setting');
    }
}