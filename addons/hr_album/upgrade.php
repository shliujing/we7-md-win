<?php 
$sql="CREATE TABLE IF NOT EXISTS `ims_hr_album_ads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL DEFAULT '0',
  `displayorder` int(10) NOT NULL DEFAULT '0',
  `type` tinyint(1) DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `path` varchar(500) NOT NULL DEFAULT '',
  `appid` varchar(50) NOT NULL DEFAULT '',
  `addtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_id` (`id`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_app` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL DEFAULT '0',
  `displayorder` int(10) NOT NULL DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `desc` varchar(200) NOT NULL DEFAULT '',
  `path` varchar(500) NOT NULL DEFAULT '',
  `appid` varchar(50) NOT NULL DEFAULT '',
  `addtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_id` (`id`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_cashpay` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `openid` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `cost` decimal(10,2) NOT NULL COMMENT '提现金额',
  `rcost` decimal(10,2) NOT NULL COMMENT '实际金额',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未审核，1已审核',
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `skin` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `music` varchar(255) NOT NULL,
  `click` int(10) NOT NULL,
  `share` int(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `best` int(10) NOT NULL DEFAULT '0',
  `isshow` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示，0否，1是',
  `isverify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0不开启默认，1开启',
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_uniacid` (`uniacid`),
  KEY `index_openid` (`openid`)
) ENGINE=MyISAM AUTO_INCREMENT=279 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_formdata` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) DEFAULT '0',
  `openid` varchar(255) DEFAULT '',
  `formid` varchar(255) DEFAULT '',
  `addtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=444 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_incate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_inskin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `skin` int(10) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_mucate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `oldtitle` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_music` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `singer` varchar(20) NOT NULL,
  `music` varchar(500) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=273 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_paydata` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `leastmon` int(10) unsigned NOT NULL,
  `service` int(10) unsigned NOT NULL,
  `content` varchar(255) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_paylog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `pid` int(10) NOT NULL,
  `tid` varchar(255) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `tnickname` varchar(50) NOT NULL,
  `cost` decimal(10,2) NOT NULL COMMENT '打赏金额',
  `out_trade_no` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未支付，1已支付',
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_pl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_review` (
  `id` int(10) unsigned NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  `openid` varchar(255) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_sended` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) DEFAULT '0',
  `templateid` varchar(255) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `rate` int(10) DEFAULT '0',
  `send` int(10) DEFAULT '0',
  `addtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_sendlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `msgid` int(10) DEFAULT '0',
  `uniacid` int(10) DEFAULT '0',
  `templateid` varchar(255) DEFAULT '',
  `openid` varchar(255) DEFAULT '',
  `addtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_id` (`id`),
  KEY `index_templateid` (`templateid`),
  KEY `index_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_shenhe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_skin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `skintitle` varchar(255) NOT NULL,
  `skiname` varchar(50) NOT NULL,
  `music` varchar(255) NOT NULL,
  `ishot` tinyint(1) DEFAULT '0',
  `type` tinyint(1) DEFAULT '0' COMMENT '0正常，1整套轮换，2图文',
  `remoted` tinyint(1) DEFAULT '0',
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_skincate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hr_album_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `openid` varchar(255) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `fee` decimal(10,2) DEFAULT '0.00' COMMENT '金额',
  `souce` int(10) NOT NULL DEFAULT '0' COMMENT '积分',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0启用，1禁用',
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index_uniacid` (`uniacid`),
  KEY `index_openid` (`openid`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
";
pdo_run($sql);
if(!pdo_fieldexists("hr_album_ads", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_ads", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `uniacid` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_ads", "displayorder")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `displayorder` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_ads", "type")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `type` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_ads", "thumb")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `thumb` varchar(500) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_ads", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `title` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_ads", "path")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `path` varchar(500) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_ads", "appid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `appid` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_ads", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   `addtime` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_ads", "indx_id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   KEY `indx_id` (`id`);");
}
if(!pdo_fieldexists("hr_album_ads", "indx_uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_ads")." ADD   KEY `indx_uniacid` (`uniacid`);");
}
if(!pdo_fieldexists("hr_album_app", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_app", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `uniacid` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_app", "displayorder")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `displayorder` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_app", "thumb")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `thumb` varchar(500) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_app", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `title` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_app", "desc")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `desc` varchar(200) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_app", "path")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `path` varchar(500) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_app", "appid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `appid` varchar(50) NOT NULL DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_app", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   `addtime` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_app", "indx_id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   KEY `indx_id` (`id`);");
}
if(!pdo_fieldexists("hr_album_app", "indx_uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_app")." ADD   KEY `indx_uniacid` (`uniacid`);");
}
if(!pdo_fieldexists("hr_album_cashpay", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_cashpay", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `uniacid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_cashpay", "openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `openid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_cashpay", "avatar")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `avatar` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_cashpay", "nickname")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `nickname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_cashpay", "cost")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `cost` decimal(10,2) NOT NULL COMMENT '提现金额';");
}
if(!pdo_fieldexists("hr_album_cashpay", "rcost")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `rcost` decimal(10,2) NOT NULL COMMENT '实际金额';");
}
if(!pdo_fieldexists("hr_album_cashpay", "status")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未审核，1已审核';");
}
if(!pdo_fieldexists("hr_album_cashpay", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_cashpay")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_data", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `openid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "nickname")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `nickname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "avatar")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `avatar` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `title` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "skin")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `skin` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "content")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `content` text NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "music")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `music` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "click")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `click` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "share")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `share` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "pass")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `pass` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "best")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `best` int(10) NOT NULL DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_data", "isshow")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `isshow` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示，0否，1是';");
}
if(!pdo_fieldexists("hr_album_data", "isverify")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `isverify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0不开启默认，1开启';");
}
if(!pdo_fieldexists("hr_album_data", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_data", "index_uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   KEY `index_uniacid` (`uniacid`);");
}
if(!pdo_fieldexists("hr_album_data", "index_openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_data")." ADD   KEY `index_openid` (`openid`);");
}
if(!pdo_fieldexists("hr_album_formdata", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_formdata")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_formdata", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_formdata")." ADD   `uniacid` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_formdata", "openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_formdata")." ADD   `openid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_formdata", "formid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_formdata")." ADD   `formid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_formdata", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_formdata")." ADD   `addtime` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_formdata", "indx_id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_formdata")." ADD   KEY `indx_id` (`id`);");
}
if(!pdo_fieldexists("hr_album_incate", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_incate")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_incate", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_incate")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_incate", "displayorder")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_incate")." ADD   `displayorder` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_incate", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_incate")." ADD   `title` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_incate", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_incate")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_inskin", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_inskin", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_inskin", "displayorder")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `displayorder` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_inskin", "cid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `cid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_inskin", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `title` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_inskin", "thumb")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `thumb` varchar(500) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_inskin", "skin")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `skin` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_inskin", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_inskin")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_mucate", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_mucate")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_mucate", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_mucate")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_mucate", "displayorder")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_mucate")." ADD   `displayorder` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_mucate", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_mucate")." ADD   `title` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_mucate", "oldtitle")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_mucate")." ADD   `oldtitle` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_mucate", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_mucate")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_music", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_music")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_music", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_music")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_music", "type")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_music")." ADD   `type` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_music", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_music")." ADD   `title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_music", "singer")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_music")." ADD   `singer` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_music", "music")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_music")." ADD   `music` varchar(500) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_music", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_music")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paydata", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paydata")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_paydata", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paydata")." ADD   `uniacid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paydata", "leastmon")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paydata")." ADD   `leastmon` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paydata", "service")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paydata")." ADD   `service` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paydata", "content")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paydata")." ADD   `content` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paydata", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paydata")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_paylog", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `uniacid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "pid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `pid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "tid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `tid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `openid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "avatar")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `avatar` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "nickname")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `nickname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "tnickname")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `tnickname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "cost")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `cost` decimal(10,2) NOT NULL COMMENT '打赏金额';");
}
if(!pdo_fieldexists("hr_album_paylog", "out_trade_no")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `out_trade_no` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "transaction_id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `transaction_id` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_paylog", "status")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未支付，1已支付';");
}
if(!pdo_fieldexists("hr_album_paylog", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_paylog")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_pl", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_pl")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_pl", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_pl")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_pl", "cid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_pl")." ADD   `cid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_pl", "nickname")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_pl")." ADD   `nickname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_pl", "avatar")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_pl")." ADD   `avatar` varchar(500) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_pl", "content")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_pl")." ADD   `content` text NOT NULL;");
}
if(!pdo_fieldexists("hr_album_pl", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_pl")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_review", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_review")." ADD   `id` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_review", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_review")." ADD   `uniacid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_review", "openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_review")." ADD   `openid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_review", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_review")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_sended", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_sended", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `uniacid` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_sended", "templateid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `templateid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_sended", "content")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `content` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_sended", "path")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `path` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_sended", "rate")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `rate` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_sended", "send")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `send` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_sended", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   `addtime` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_sended", "indx_id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sended")." ADD   KEY `indx_id` (`id`);");
}
if(!pdo_fieldexists("hr_album_sendlog", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_sendlog", "msgid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   `msgid` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_sendlog", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   `uniacid` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_sendlog", "templateid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   `templateid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_sendlog", "openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   `openid` varchar(255) DEFAULT '';");
}
if(!pdo_fieldexists("hr_album_sendlog", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   `addtime` int(10) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_sendlog", "indx_id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   KEY `indx_id` (`id`);");
}
if(!pdo_fieldexists("hr_album_sendlog", "index_templateid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   KEY `index_templateid` (`templateid`);");
}
if(!pdo_fieldexists("hr_album_sendlog", "index_openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_sendlog")." ADD   KEY `index_openid` (`openid`);");
}
if(!pdo_fieldexists("hr_album_shenhe", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_shenhe")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_shenhe", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_shenhe")." ADD   `uniacid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_shenhe", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_shenhe")." ADD   `title` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_shenhe", "content")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_shenhe")." ADD   `content` varchar(500) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_shenhe", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_shenhe")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skin", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_skin", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skin", "displayorder")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `displayorder` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skin", "cid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `cid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skin", "skintitle")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `skintitle` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skin", "skiname")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `skiname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skin", "music")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `music` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skin", "ishot")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `ishot` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_skin", "type")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `type` tinyint(1) DEFAULT '0' COMMENT '0正常，1整套轮换，2图文';");
}
if(!pdo_fieldexists("hr_album_skin", "remoted")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `remoted` tinyint(1) DEFAULT '0';");
}
if(!pdo_fieldexists("hr_album_skin", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skin")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skincate", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skincate")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_skincate", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skincate")." ADD   `uniacid` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skincate", "displayorder")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skincate")." ADD   `displayorder` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skincate", "title")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skincate")." ADD   `title` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_skincate", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_skincate")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_user", "id")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `id` int(10) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("hr_album_user", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `uniacid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("hr_album_user", "openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `openid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_user", "nickname")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `nickname` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_user", "avatar")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `avatar` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_user", "fee")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `fee` decimal(10,2) DEFAULT '0.00' COMMENT '金额';");
}
if(!pdo_fieldexists("hr_album_user", "souce")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `souce` int(10) NOT NULL DEFAULT '0' COMMENT '积分';");
}
if(!pdo_fieldexists("hr_album_user", "status")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0启用，1禁用';");
}
if(!pdo_fieldexists("hr_album_user", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("hr_album_user", "index_uniacid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   KEY `index_uniacid` (`uniacid`);");
}
if(!pdo_fieldexists("hr_album_user", "index_openid")) {
 pdo_query("ALTER TABLE ".tablename("hr_album_user")." ADD   KEY `index_openid` (`openid`);");
}

 ?>