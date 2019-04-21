<?php
pdo_query("CREATE TABLE IF NOT EXISTS `ims_amouse_wxapp_house` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`uniacid` int(10) NOT NULL,
`openid` varchar(255) NOT NULL,
`avater` varchar(255) NOT NULL,
`nickname` varchar(255) NOT NULL,
`mobile` varchar(18) COMMENT '手机号',
`title` varchar(255) COMMENT '房屋名称',
`code` varchar(255) NOT NULL,
`is_person` tinyint(2) DEFAULT '0' COMMENT '0:官方 1：个人',
`person_mobile` varchar(18) DEFAULT '0' COMMENT '个人电话',
`price` varchar(100) COMMENT '单价',
`total_price` varchar(100) COMMENT '总价',
`rental` varchar(100) COMMENT '租金元/月',
`house_type` tinyint(2) DEFAULT '0' COMMENT '0:出租 1：出售 2:求租3：求购',
`cash_type` varchar(100) COMMENT '押金类型',
`estate` varchar(255) COMMENT '小区名',
`video_url` varchar(255) COMMENT '视频链接',
`area_id` int(10) NOT NULL COMMENT '区域',
`type_id` int(10) NOT NULL COMMENT '户型',
`fit_id` int(10) NOT NULL COMMENT '装修情况',
`use_id` int(10) NOT NULL COMMENT '用途',
`shop_id` int(10) NOT NULL COMMENT '门店',
`vill_id` int(10) NOT NULL COMMENT '小区',
`view` int(10) NOT NULL DEFAULT '0' COMMENT '阅读量',
`age_id` int(10) NOT NULL COMMENT '年代',
`house_toward` int(10) NOT NULL COMMENT '方向',
`agent_id` int(10) NOT NULL COMMENT '经纪人',
`is_open_map` tinyint(1) DEFAULT '1' COMMENT '0打开 1关闭',
`lat` decimal(18,10) NOT NULL DEFAULT '31.9591530000' COMMENT '经度',
`lng` decimal(18,10) NOT NULL DEFAULT '118.7512210000' COMMENT '纬度',
`house_area` varchar(100) COMMENT '面积',
`floor` varchar(100) COMMENT '楼层',
`desc` varchar(255),
`address` varchar(255),
`imgs` text,
`vipstatus` tinyint(1) NOT NULL DEFAULT '0',
`listorder` int(10) DEFAULT '0' COMMENT '排序',
`createtime` int(10) NOT NULL,
`status` tinyint(1) DEFAULT '0' COMMENT '0表示未审核，1表示已审核，2表示禁用',
`sendcode` varchar(255) COMMENT '推送码',
`document_age` varchar(10) NOT NULL COMMENT '产证日期',
`house_age` varchar(20) NOT NULL COMMENT '建造年代',
KEY `indx_weid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ims_amouse_wxapp_house_history` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`uniacid` int(10) NOT NULL,
`cardid` int(10) NOT NULL,
`from_user` varchar(255) NOT NULL COMMENT '自己',
`zan_mid` int(10) NOT NULL,
`zan_cid` int(10) NOT NULL,
`to_user` varchar(255) NOT NULL COMMENT '好友',
`sms_type` tinyint(2) NOT NULL COMMENT '0:看，1:赞 2:收藏',
`createtime` int(11) NOT NULL,
KEY `indx_weid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `id` int(10) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `uniacid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'openid')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `openid` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'avater')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `avater` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'nickname')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `nickname` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'mobile')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `mobile` varchar(18) COMMENT '手机号';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'title')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `title` varchar(255) COMMENT '房屋名称';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'code')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `code` varchar(255) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'is_person')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `is_person` tinyint(2) DEFAULT '0' COMMENT '0:官方 1：个人';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'person_mobile')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `person_mobile` varchar(18) DEFAULT '0' COMMENT '个人电话';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'price')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `price` varchar(100) COMMENT '单价';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'total_price')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `total_price` varchar(100) COMMENT '总价';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'rental')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `rental` varchar(100) COMMENT '租金元/月';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'house_type')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `house_type` tinyint(2) DEFAULT '0' COMMENT '0:出租 1：出售 2:求租3：求购';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'cash_type')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `cash_type` varchar(100) COMMENT '押金类型';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'estate')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `estate` varchar(255) COMMENT '小区名';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'video_url')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `video_url` varchar(255) COMMENT '视频链接';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'area_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `area_id` int(10) NOT NULL COMMENT '区域';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'type_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `type_id` int(10) NOT NULL COMMENT '户型';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'fit_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `fit_id` int(10) NOT NULL COMMENT '装修情况';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'use_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `use_id` int(10) NOT NULL COMMENT '用途';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'shop_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `shop_id` int(10) NOT NULL COMMENT '门店';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'vill_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `vill_id` int(10) NOT NULL COMMENT '小区';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'view')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `view` int(10) NOT NULL DEFAULT '0' COMMENT '阅读量';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'age_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `age_id` int(10) NOT NULL COMMENT '年代';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'house_toward')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `house_toward` int(10) NOT NULL COMMENT '方向';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'agent_id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `agent_id` int(10) NOT NULL COMMENT '经纪人';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'is_open_map')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `is_open_map` tinyint(1) DEFAULT '1' COMMENT '0打开 1关闭';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'lat')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `lat` decimal(18,10) NOT NULL DEFAULT '31.9591530000' COMMENT '经度';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'lng')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `lng` decimal(18,10) NOT NULL DEFAULT '118.7512210000' COMMENT '纬度';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'house_area')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `house_area` varchar(100) COMMENT '面积';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'floor')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `floor` varchar(100) COMMENT '楼层';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'desc')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `desc` varchar(255);");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'address')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `address` varchar(255);");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'imgs')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `imgs` text;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'vipstatus')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `vipstatus` tinyint(1) NOT NULL DEFAULT '0';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'listorder')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `listorder` int(10) DEFAULT '0' COMMENT '排序';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `createtime` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'status')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `status` tinyint(1) DEFAULT '0' COMMENT '0表示未审核，1表示已审核，2表示禁用';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'sendcode')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `sendcode` varchar(255) COMMENT '推送码';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'document_age')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `document_age` varchar(10) NOT NULL COMMENT '产证日期';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house')) {
	if(!pdo_fieldexists('amouse_wxapp_house',  'house_age')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house')." ADD `house_age` varchar(20) NOT NULL COMMENT '建造年代';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'id')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `id` int(10) NOT NULL AUTO_INCREMENT;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'uniacid')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `uniacid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'cardid')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `cardid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'from_user')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `from_user` varchar(255) NOT NULL COMMENT '自己';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'zan_mid')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `zan_mid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'zan_cid')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `zan_cid` int(10) NOT NULL;");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'to_user')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `to_user` varchar(255) NOT NULL COMMENT '好友';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'sms_type')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `sms_type` tinyint(2) NOT NULL COMMENT '0:看，1:赞 2:收藏';");
	}	
}
if(pdo_tableexists('amouse_wxapp_house_history')) {
	if(!pdo_fieldexists('amouse_wxapp_house_history',  'createtime')) {
		pdo_query("ALTER TABLE ".tablename('amouse_wxapp_house_history')." ADD `createtime` int(11) NOT NULL;");
	}	
}
