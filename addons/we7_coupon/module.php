<?php
/**
 * 微擎卡券模块定义
 *
 * @author 微擎团队
 * @url 
 */
defined('IN_IA') || die('Access Denied');
class We7_couponModule extends WeModule
{
	public function settingsDisplay($settings)
	{
		global $_GPC, $_W;
		if (checksubmit()) {
			$cfg = $_GPC['setting'];
			if ($this->saveSettings($cfg)) {
				message('保存成功', 'refresh');
			}
		}
		include $this->template('setting');
	}
}