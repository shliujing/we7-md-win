<?php
defined("IN_IA") or die("Access Denied");
class Amouse_Wxapp_HouseModuleWxapp extends WeModuleWxapp
{
    public function doPageApiGetSlide()
    {
        global $_W;
        $message = "success";
        $uniacid = $_W["uniacid"];
        $slides = pdo_getall("amouse_wxapp_card_slide", array("uniacid" => $uniacid), array("thumb", "name", "id", "url"));
        foreach ($slides as $key => $value) {
            $slides[$key]["thumb"] = tomedia($slides[$key]["thumb"]);
        }
        return $this->result(0, $message, $slides);
    }
    public function doPageApiGetSys()
    {
        global $_W;
        $uniacid = $_W["uniacid"];
        $set = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_sysset") . " WHERE `uniacid`= :weid  limit 1 ", array(":weid" => $uniacid));
        $set["logo"] = tomedia($set["logo"]);
        $set["share_thumb"] = tomedia($set["share_thumb"]);
        $default = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_house") . " WHERE `uniacid` =:weid  and status=0 limit 1 ", array(":weid" => $uniacid));
        $login_success = $this->checkLogin();
		
		if (is_error($login_success)) {
            return $this->result($login_success["errno"], $login_success["message"]);
        }
		
        $from = $_W["fans"]["openid"];
        if (!empty($_W["fans"]["nickname"])) {
            $fdata = array("openid" => $from, "uniacid" => $uniacid, "createtime" => time(), "vip" => 0, "sex" => $_W["fans"]["sex"], "realname" => trim($_W["fans"]["nickname"]));
            $fans = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_member") . " WHERE `uniacid`= :weid and `openid`=:openid ", array(":weid" => $uniacid, ":openid" => $from));
            if (empty($fans)) {
                pdo_insert("amouse_wxapp_member", $fdata);
                $set["vip"] = 0;
            } else {
                $set["vip"] = $fans["vip"];
            }
        }
        $set["houseid"] = $default["id"];
        $rules = unserialize($set["rule"]);
        $set["rules"] = $rules;
        return $this->result(0, '', $set);
    }
    public function doPageApiGetConfig()
    {
        global $_W;
        $uniacid = $_W["uniacid"];
        $areas = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` =:weid and type=1 order by displayorder desc, id desc ", array(":weid" => $uniacid));
        $fits = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` = :weid and type=2 order by id desc ", array(":weid" => $uniacid));
        $uses = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` = :weid and type=3 order by id desc ", array(":weid" => $uniacid));
        $types = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` = :weid and type=4 order by id desc ", array(":weid" => $uniacid));
        $ages = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE  type=5 order by id asc ");
        $shoplist = pdo_fetchall("SELECT id,name,thumb FROM " . tablename("amouse_wxapp_shop") . "  WHERE `uniacid` = :weid order by id desc ", array(":weid" => $uniacid));
        $return = array();
        $return["areas"] = $areas;
        $return["fits"] = $fits;
        $return["uses"] = $uses;
        $return["types"] = $types;
        $return["ages"] = $ages;
        $return["shoplist"] = $shoplist;
        return $this->result(0, '', $return);
    }
    public function doPageApiGetList()
    {
        global $_W, $_GPC;
        $uniacid = $_W["uniacid"];
        $shopid = $_GPC["shopid"];
        $agent_id = $_GPC["agent_id"];
        $fits = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` = :weid and type=2 order by id desc ", array(":weid" => $uniacid));
        $uses = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` = :weid and type=3 order by id desc ", array(":weid" => $uniacid));
        $types = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` = :weid and type=4 order by id desc ", array(":weid" => $uniacid));
        $ages = pdo_fetchall("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE  type=5 order by id asc ");
        $shop = pdo_fetch("SELECT id,name,area_id FROM " . tablename("amouse_wxapp_shop") . "  WHERE `uniacid` = :weid and id=:id limit 1 ", array(":weid" => $uniacid, ":id" => $shopid));
        $return = array();
        $return["area_id"] = $shop["area_id"];
        $vills = pdo_fetchall("SELECT * FROM " . tablename("amouse_wxapp_vill") . "  WHERE uniacid =:weid  and area_id=:areaid  ORDER BY displayorder DESC ", array(":weid" => $uniacid, ":areaid" => $shop["area_id"]));
        $return["fits"] = $fits;
        $return["uses"] = $uses;
        $return["types"] = $types;
        $return["ages"] = $ages;
        $return["vills"] = $vills;
        return $this->result(0, '', $return);
    }
    public function doPageApiGetInit()
    {
        global $_W;
        $uniacid = $_W["uniacid"];
        $login_success = $this->checkLogin();
        if (is_error($login_success)) {
            return $this->result($login_success["errno"], $login_success["message"]);
        }
        $from = $_W["fans"]["openid"];
        $return = array();
        $myagent = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_agent") . "  WHERE `uniacid` =:weid  and openid=:openid limit 1 ", array(":weid" => $uniacid, ":openid" => $from));
        $myshop = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_shop") . "  WHERE `uniacid` =:weid  and id=:id limit 1 ", array(":weid" => $uniacid, ":id" => $myagent["shop_id"]));
        if ($myshop) {
            $return["shopid"] = $myshop["id"];
            $return["shopname"] = $myshop["name"];
            $return["agentid"] = $myagent["id"];
            $return["agent"] = $myagent["realname"];
            return $this->result(0, '', $return);
        } else {
            return $this->result(1, '', $return);
        }
    }
    public function doPageApiGetAgents()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $pindex = max(1, intval($_GPC["pageIndex"]));
        $psize = max(10, intval($_GPC["pageSize"]));
        $start = ($pindex - 1) * $psize;
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_agent") . " WHERE `uniacid` =:weid and `status`=0 order by id desc limit {$start},{$psize}";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid));
        $total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("amouse_wxapp_agent") . "  WHERE `uniacid` =:weid and `status`=0 ", array(":weid" => $uniacid));
        $tpage = ceil($total / $psize);
        $return = array();
        $set = pdo_fetch("select * from " . tablename("amouse_wxapp_sysset") . " where `uniacid`=:uniacid limit 1", array(":uniacid" => $uniacid));
        if (count($list) > 0) {
            foreach ($list as $key => $value) {
                $list[$key]["icon_url"] = tomedia($value["icon_url"]);
                $list[$key]["mobile"] = $value["mobile"];
            }
            $return["list"] = $list;
            $return["gtotal"] = $tpage;
            return $this->result(0, '', $return);
        } else {
            return $this->result(1, '', 0);
        }
    }
    public function doPageApiGetAgent()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $id = intval($_GPC["id"]);
        $agent = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_agent") . " WHERE `uniacid` =:weid and id=:id limit 1", array(":weid" => $uniacid, ":id" => $id));
        $agent["icon_url"] = tomedia($agent["icon_url"]);
        return $this->result(0, '', $agent);
    }
    public function doPageApiGetAgentResourceList()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $pindex = max(1, intval($_GPC["pageIndex"]));
        $psize = max(10, intval($_GPC["pageSize"]));
        $agent_id = intval($_GPC["agent_id"]);
        $start = ($pindex - 1) * $psize;
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_house") . " WHERE `uniacid` =:weid and `agent_id`=:agent_id and status=0 order by id desc limit {$start},{$psize}";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid, ":agent_id" => $agent_id));
        $total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("amouse_wxapp_house") . " WHERE `uniacid` =:weid and `agent_id`=:agent_id and status=0 ", array(":weid" => $uniacid, ":agent_id" => $agent_id));
        $tpage = ceil($total / $psize);
        $return = array();
        if (count($list) > 0) {
            foreach ($list as $key => $value) {
                $imgs = iunserializer($value["imgs"]);
                $list[$key]["icon"] = tomedia($imgs[0]);
                $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 limit 1", array(":id" => $value["area_id"]));
                $list[$key]["area_name"] = $area["name"];
                $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=4 limit 1", array(":id" => $value["type_id"]));
                $list[$key]["type_name"] = $type ? $type["name"] : '';
                if ($value["house_type"] == 0) {
                    $list[$key]["house_typename"] = "出租";
                } else {
                    if ($value["house_type"] == 1) {
                        $list[$key]["house_typename"] = "出售";
                    }
                }
                $vill = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_vill") . " WHERE id = :id and uniacid=:uniacid limit 1", array(":id" => $value["vill_id"], ":uniacid" => $uniacid));
                $list[$key]["vill_name"] = $vill ? $vill["name"] : '';
                $lat = $value["lat"];
                $lng = $value["lng"];
                $list[$key]["lat"] = $lat;
                $list[$key]["lng"] = $lng;
            }
            $return["list"] = $list;
            $return["gtotal"] = $tpage;
            return $this->result(0, '', $return);
        } else {
            return $this->result(1, '', 0);
        }
    }
    public function doPageApiSetCollect()
    {
        global $_GPC, $_W;
        $houseid = intval($_GPC["id"]);
        $login_success = $this->checkLogin();
        if (is_error($login_success)) {
            return $this->result($login_success["errno"], $login_success["message"]);
        }
        $from = $_W["fans"]["openid"];
        $uniacid = $_W["uniacid"];
        $avatar = $_W["fans"]["avatar"];
        $is_sell = intval($_GPC["is_sell"]);
        $like = pdo_fetch("SELECT `id` FROM " . tablename("amouse_wxapp_like") . " WHERE uniacid = :weid and houseid=:houseid and openid=:from ", array(":weid" => $uniacid, ":houseid" => $houseid, ":from" => $from));
        if (empty($like)) {
            $data = array("uniacid" => $uniacid, "houseid" => $houseid, "house_type" => $is_sell, "openid" => $from, "create_time" => time());
            pdo_insert("amouse_wxapp_like", $data);
            $uid = pdo_insertid();
            $is_collect = 1;
            return $this->result(0, "收藏成功", $is_collect);
        } else {
            $is_collect = 0;
            pdo_delete("amouse_wxapp_like", array("id" => $like["id"], "uniacid" => $uniacid));
            return $this->result(0, '', $is_collect);
        }
    }
    public function doPageApiGetCollect()
    {
        global $_GPC, $_W;
        $uni_acid = $_W["uniacid"];
        $login_success = $this->checkLogin();
        if (is_error($login_success)) {
            return $this->result($login_success["errno"], $login_success["message"]);
        }
        $from = $_W["fans"]["openid"];
        $status = $_GPC["status"];
        $likes = pdo_fetchall("SELECT l.id ,l.houseid,l.create_time,h.imgs,h.area_id,h.type_id,h.vill_id,h.title,h.house_area,h.house_type,h.total_price,h.rental FROM " . tablename("amouse_wxapp_like") . " as l left join " . tablename("amouse_wxapp_house") . " as h on l.houseid=h.id  WHERE h.uniacid = :weid and h.status=0 and l.openid=:from and l.house_type=:house_type", array(":weid" => $uni_acid, ":from" => $from, ":house_type" => $status));
        foreach ($likes as $key => $v) {
            $imgs = iunserializer($v["imgs"]);
            $likes[$key]["icon"] = tomedia($imgs[0]);
            $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 ", array(":id" => $v["area_id"]));
            $likes[$key]["area_name"] = $area ? $area["name"] : '';
            $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=4 ", array(":id" => $v["type_id"]));
            $likes[$key]["type_name"] = $type ? $type["name"] : '';
            if ($house["house_type"] == 0) {
                $likes[$key]["house_typename"] = "出租";
            } else {
                if ($house["house_type"] == 1) {
                    $likes[$key]["house_typename"] = "出售";
                } else {
                }
            }
            $vill = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_vill") . " WHERE id = :id and uniacid=:uniacid limit 1", array(":id" => $v["vill_id"], ":uniacid" => $uni_acid));
            $likes[$key]["vill_name"] = $vill ? $vill["name"] : '';
        }
        return $this->result(0, '', $likes);
    }
    public function doPageApiGetMyFabu()
    {
        global $_GPC, $_W;
        $uni_acid = $_W["uniacid"];
        $login_success = $this->checkLogin();
        if (is_error($login_success)) {
            return $this->result($login_success["errno"], $login_success["message"]);
        }
        $from = $_W["fans"]["openid"];
        $status = $_GPC["house_type"];
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_house") . " WHERE `uniacid` = :weid and `openid`=:from and `house_type`=:house_type ";
        $houses = pdo_fetchall($sql, array(":weid" => $uni_acid, ":from" => $from, "house_type" => $status));
        if (!empty($houses)) {
            foreach ($houses as $key => $house) {
                $imgs = iunserializer($house["imgs"]);
                $houses[$key]["icon"] = tomedia($imgs[0]);
                $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 ", array(":id" => $house["area_id"]));
                $houses[$key]["area_name"] = $area ? $area["name"] : '';
                $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=4 ", array(":id" => $house["type_id"]));
                $houses[$key]["type_name"] = $type ? $type["name"] : '';
                if ($house["house_type"] == 0) {
                    $houses[$key]["house_typename"] = "出租";
                } else {
                    if ($house["house_type"] == 1) {
                        $houses[$key]["house_typename"] = "出售";
                    } else {
                    }
                }
                $vill = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_vill") . " WHERE id = :id and uniacid=:uniacid limit 1", array(":id" => $v["vill_id"], ":uniacid" => $uniacid));
                $houses[$key]["vill_name"] = $vill ? $vill["name"] : '';
                $houses[$key]["house_area"] = $house["house_area"];
                $houses[$key]["total_price"] = $house["total_price"];
                $houses[$key]["rental"] = $house["rental"];
            }
            return $this->result(0, '', $houses);
        } else {
            return $this->result(1, "no data", $from . $status);
        }
    }
    public function doPageGetStoreList()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $pindex = max(1, intval($_GPC["pageIndex"]));
        $psize = max(10, intval($_GPC["pageSize"]));
        $start = ($pindex - 1) * $psize;
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_shop") . " WHERE `uniacid` =:weid order by id desc limit {$start},{$psize}";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid));
        $total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("amouse_wxapp_shop") . "  WHERE `uniacid` =:weid  ", array(":weid" => $uniacid));
        $tpage = ceil($total / $psize);
        $return = array();
        if (count($list) > 0) {
            foreach ($list as $key => $v) {
                $a = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` =:weid and id=:id limit 1 ", array(":weid" => $uniacid, ":id" => $v["area_id"]));
                $imgs = iunserializer($v["thumb"]);
                $list[$key]["thumb"] = tomedia($imgs[0]);
                $list[$key]["cityareaname"] = $a["name"];
            }
            $return["list"] = $list;
            $return["gtotal"] = $tpage;
            return $this->result(0, '', $return);
        } else {
            return $this->result(1, '', 0);
        }
    }
    public function doPageGetStoreDetail()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $shopid = intval($_GPC["shopid"]);
        $shop = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_shop") . " WHERE `uniacid` =:weid and id=:id limit 1 ", array(":weid" => $uniacid, ":id" => $shopid));
        if (!empty($shop)) {
            $area = pdo_fetch("SELECT id,name,type,thumb FROM " . tablename("amouse_wxapp_kinds") . "  WHERE `uniacid` =:weid and type=1 and id=:id limit 1 ", array(":weid" => $uniacid, ":id" => $shop["area_id"]));
            $piclist = array();
            $piclist1 = unserialize($shop["thumb"]);
            if (is_array($piclist1)) {
                foreach ($piclist1 as $p) {
                    $piclist[] = tomedia($p);
                }
            }
            $shop["piclist"] = $piclist;
            $shop["cityareaname"] = $area["name"];
            return $this->result(0, '', $shop);
        } else {
            return $this->result(1, '', 0);
        }
    }
    public function doPageApiGetResource()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $shopid = intval($_GPC["shopid"]);
        $pindex = max(1, intval($_GPC[" "]));
        $psize = max(10, intval($_GPC["pageSize"]));
        $start = ($pindex - 1) * $psize;
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_house") . " WHERE `uniacid` =:weid  and status=0 and shop_id=:shopid limit {$start},{$psize} ";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid, ":shopid" => $shopid));
        foreach ($list as $key => $value) {
            $imgs = iunserializer($value["imgs"]);
            $list[$key]["icon"] = tomedia($imgs[0]);
            $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 ", array(":id" => $value["area_id"]));
            $list[$key]["area_name"] = $area ? $area["name"] : '';
            $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=4 ", array(":id" => $value["type_id"]));
            $list[$key]["type_name"] = $type ? $type["name"] : '';
            if ($value["house_type"] == 0) {
                $list[$key]["house_typename"] = "出租";
            } else {
                if ($value["house_type"] == 1) {
                    $list[$key]["house_typename"] = "出售";
                } else {
                }
            }
            $vill = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_vill") . " WHERE id = :id and uniacid=:uniacid limit 1", array(":id" => $value["vill_id"], ":uniacid" => $uniacid));
            $list[$key]["vill_name"] = $vill ? $vill["name"] : '';
            $lat = $value["lat"];
            $lng = $value["lng"];
            $list[$key]["lat"] = $lat;
            $list[$key]["lng"] = $lng;
        }
        return $this->result(0, '', $list);
    }
    public function doPageGetAgentByShopId()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $shopid = intval($_GPC["shopid"]);
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_agent") . " WHERE `uniacid`=:weid and `status`=0 and  shop_id=:shopid order by createtime desc  ";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid, ":shopid" => $shopid));
        foreach ($list as $key => $value) {
            $list[$key]["icon_url"] = tomedia($value["icon_url"]);
        }
        return $this->result(0, '', $list);
    }
    public function doPageApiGetHouseList()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $type = !empty($_GPC["house_type"]) ? $_GPC["house_type"] : "0";
        $pindex = max(1, intval($_GPC["pageIndex"]));
        $psize = max(10, intval($_GPC["pageSize"]));
        $area_id = $_GPC["area_id"];
        $house_total = $_GPC["house_total"];
        $type_id = $_GPC["type_id"];
        $house_area = $_GPC["house_area"];
        $fit_id = $_GPC["house_category"];
        $houseToward = $_GPC["houseToward"];
        $house_ageValue = $_GPC["house_ageValue"];
        $search = $_GPC["search"];
        $contain = " WHERE `uniacid` =:weid and status=0 ";
        if ($type == "0") {
            $contain .= " and house_type=0 ";
        } else {
            if ($type == "1") {
                $contain .= " and house_type=1 ";
            } else {
                $contain .= " and ( house_type=4 or house_type=5)";
            }
        }
        if ($area_id > 0) {
            $contain .= " and area_id={$area_id} ";
        }
        if ($type == "0" && !empty($house_total)) {
            $rental = explode("-", $house_total);
            $start = $rental[0];
            $end = $rental[1];
            $contain .= " and rental>= " . $start . " and rental<" . $end;
        } else {
            if ($type == "1" && !empty($house_total)) {
                $total = explode("-", $house_total);
                $start = $total[0];
                $end = $total[1];
                $contain .= " and total_price>= " . $start . " and total_price<" . $end;
            }
        }
        if ($type_id > 0) {
            $contain .= " and type_id={$type_id} ";
        }
        if ($fit_id > 0) {
            $contain .= " and fit_id={$fit_id} ";
        }
        if ($house_ageValue > 0) {
            $contain .= " and age_id={$house_ageValue} ";
        }
        if ($houseToward > 0) {
            $contain .= " and house_toward={$houseToward} ";
        }
        if (!empty($house_area) && $house_area > 0) {
            $area = explode("-", $house_area);
            $start_area = $area[0];
            $end_area = $area[1];
            $contain .= " and house_area>= " . $start_area . " and house_area<" . $end_area;
        }
        if (!empty($search)) {
            $contain .= " AND (title LIKE '%{$search}%' or address LIKE '%{$search}%')  ";
        }
        $start = ($pindex - 1) * $psize;
        $sql = "SELECT `id`,`uniacid`,`imgs`,`mobile`,`address`,`title`,`createtime`,`type_id`,`area_id`,`vill_id`,`house_type`,`house_area`,`total_price`,`rental`,`view`,`vipstatus`,case when vipstatus=1 then 1 else listorder end paixun FROM " . tablename("amouse_wxapp_house") . $contain . " ORDER BY paixun DESC, createtime DESC limit {$start},{$psize}";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid));
        $total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("amouse_wxapp_house") . $contain, array(":weid" => $uniacid));
        $tpage = ceil($total / $psize);
        $return = array();
        if (count($list) > 0) {
            foreach ($list as $key => $value) {
                $imgs = iunserializer($value["imgs"]);
                $list[$key]["icon"] = tomedia($imgs[0]);
                $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 limit 1 ", array(":id" => $value["area_id"]));
                if (!empty($area)) {
                    $list[$key]["area_name"] = $area["name"];
                } else {
                    $list[$key]["area_name"] = '';
                }
                if ($value["type_id"] > 0) {
                    $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id limit 1", array(":id" => $value["type_id"]));
                    $list[$key]["type_name"] = $type["name"];
                } else {
                    $list[$key]["type_name"] = '';
                }
                if ($value["house_type"] == 0) {
                    $list[$key]["house_typename"] = "出租";
                } else {
                    if ($value["house_type"] == 1) {
                        $list[$key]["house_typename"] = "出售";
                    } else {
                    }
                }
                $vill = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_vill") . " WHERE id = :id and uniacid=:uniacid limit 1", array(":id" => $value["vill_id"], ":uniacid" => $uniacid));
                $list[$key]["vill_name"] = $vill ? $vill["name"] : '';
            }
            $return["list"] = $list;
            $return["gtotal"] = $tpage;
            return $this->result(0, $sql, $return);
        } else {
            return $this->result(0, $sql, $uniacid);
        }
    }
    public function doPageApiGetHouseInfo()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $id = $_GPC["id"];
        $info = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_house") . " WHERE `uniacid` =:weid and id=:id limit 1", array(":weid" => $uniacid, ":id" => $id));
        $imgs = iunserializer($info["imgs"]);
        $info["icon"] = tomedia($imgs[0]);
        foreach ($imgs as $k => $imgid) {
            $imgs[$k] = tomedia($imgid);
        }
        $from = $_W["fans"]["openid"];
        $myrecord = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_log") . " WHERE `openid`=:openid and houseid=:houseid and uniacid=:uniacid and `module`=:module limit 1 ", array(":openid" => $from, ":houseid" => $id, ":uniacid" => $_W["uniacid"], ":module" => "amouse_wxapp_house"));
        if (empty($myrecord["id"])) {
            $insert = array("houseid" => $id, "view" => 1, "uniacid" => $_W["uniacid"], "openid" => $from, "module" => "amouse_wxapp_house");
            pdo_insert("amouse_wxapp_log", $insert);
            pdo_update("amouse_wxapp_house", array("view" => $info["view"] + 1), array("id" => $info["id"]));
            $info["view"] = $info["view"] + 1;
        }
        $collectid = pdo_fetchcolumn("SELECT `id` FROM " . tablename("amouse_wxapp_like") . " WHERE uniacid = :weid and houseid=:houseid and openid=:from ", array(":weid" => $uniacid, ":houseid" => $id, ":from" => $from));
        $info["collect"] = $collectid > 0 ? 1 : 0;
        $info["imgs"] = $imgs;
        $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 limit 1 ", array(":id" => $info["area_id"]));
        $info["area_name"] = $area["name"];
        $info["area_id"] = $area["id"];
        $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=4 limit 1", array(":id" => $info["type_id"]));
        $info["type_name"] = $type ? $type["name"] : '';
        $info["type_id"] = $type["id"];
        $age = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=5 limit 1", array(":id" => $info["age_id"]));
        $info["age_name"] = $age ? $age["name"] : '';
        $info["age_id"] = $age["id"];
        $fit = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=2 limit 1", array(":id" => $info["fit_id"]));
        $info["fit_name"] = $fit ? $fit["name"] : '';
        $info["fit_id"] = $fit["id"];
        if ($info["house_type"] == 0) {
            $info["house_typename"] = "出租";
        } else {
            if ($info["house_type"] == 1) {
                $info["house_typename"] = "出售";
            }
        }
        $use = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id limit 1", array(":id" => $info["use_id"]));
        $info["house_use"] = $use ? $use["name"] : '';
        $info["use_id"] = $use["id"];
        $vill = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_vill") . " WHERE id = :id and uniacid=:uniacid limit 1", array(":id" => $info["vill_id"], ":uniacid" => $uniacid));
        $info["vill_name"] = $vill ? $vill["name"] : '';
        $agent = pdo_fetch("select id,realname,icon_url,mobile from " . tablename("amouse_wxapp_agent") . " WHERE uniacid=:weid and id=:id limit 1", array(":weid" => $uniacid, ":id" => $info["agent_id"]));
        $info["agent_icon"] = tomedia($agent["icon_url"]);
        $info["agent_id"] = $agent["id"];
        $info["agent_name"] = $agent["realname"];
        $account_info = pdo_get("account_wxapp", array("uniacid" => $uniacid));
        $lat = $info["lat"];
        $lng = $info["lng"];
        if (empty($info["code"])) {
            $code = $this->makeActivityCode("amouse_wxapp_house,house," . $info["id"]);
            if (!is_error($code)) {
                pdo_update("amouse_wxapp_house", array("code" => $code), array("id" => $info["id"]));
            }
            $info["code"] = tomedia($code);
        } else {
            $info["code"] = tomedia($info["code"]);
        }
        $info["wxappname"] = $account_info["name"];
        $info["lat"] = $lat;
        $info["lng"] = $lng;
        $set = pdo_fetch("select * from " . tablename("amouse_wxapp_sysset") . " where `uniacid`=:uniacid limit 1", array(":uniacid" => $uniacid));
        if ($set["is_shield"] == 1 || $info["is_person"] == 1) {
            $info["person_mobile"] = $this->hidetel($info["person_mobile"]);
            $info["person_mobile2"] = $set["systel"];
        } else {
            $info["person_mobile2"] = $info["person_mobile"];
        }
        if ($info["house_type"] == 4 || $info["house_type"] == 5) {
            $info["person_mobile"] = $this->hidetel($info["mobile"]);
            $info["person_mobile2"] = $set["systel"];
        }
        $info["agent_mobile2"] = $agent["mobile"];
        $info["agent_mobile"] = $agent["mobile"];
        return $this->result(0, '', $info);
    }
    private function hidetel($phone)
    {
        $IsWhat = preg_match("/(0[0-9]{2,3}[-]?[2-9][0-9]{6,7}[-]?[0-9]?)/i", $phone);
        if ($IsWhat == 1) {
            return preg_replace("/(0[0-9]{2,3}[-]?[2-9])[0-9]{3,4}([0-9]{3}[-]?[0-9]?)/i", "\$1****\$2", $phone);
        } else {
            return preg_replace("/(1[35478]{1}[0-9])[0-9]{4}([0-9]{4})/i", "\$1****\$2", $phone);
        }
    }
    public function doPageApiGetNewList()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $pindex = max(1, intval($_GPC["pageIndex"]));
        $psize = max(10, intval($_GPC["pageSize"]));
        $area_id = $_GPC["area_id"];
        $type_id = $_GPC["type_id"];
        $keywords = $_GPC["keywords"];
        $contain = " WHERE `uniacid` =:weid ";
        if ($area_id > 0) {
            $contain .= " and area_id={$area_id} ";
        }
        if ($type_id > 0) {
            $contain .= " and use_id={$type_id} ";
        }
        if (!empty($keywords)) {
            $contain .= " and `name` like concat('%',{$keywords},'%')  or `address` like concat('%',{$keywords},'%') ";
        }
        $start = ($pindex - 1) * $psize;
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_newflats") . $contain . " ORDER BY createtime DESC limit {$start},{$psize}";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid));
        $total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("amouse_wxapp_newflats") . $contain, array(":weid" => $uniacid));
        $tpage = ceil($total / $psize);
        $return = array();
        if (count($list) > 0) {
            foreach ($list as $key => $value) {
                $imgs = iunserializer($value["thumb"]);
                $list[$key]["icon"] = tomedia($imgs[0]);
                $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 limit 1 ", array(":id" => $value["area_id"]));
                if (!empty($area)) {
                    $list[$key]["area_name"] = $area["name"];
                } else {
                    $list[$key]["area_name"] = '';
                }
                if ($value["use_id"] > 0) {
                    $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id limit 1", array(":id" => $value["use_id"]));
                    $list[$key]["type_name"] = $type["name"];
                } else {
                    $list[$key]["type_name"] = '';
                }
                $features = explode("|", $value["features"]);
                $list[$key]["sign"] = $features;
            }
            $return["list"] = $list;
            $return["gtotal"] = $tpage;
            return $this->result(0, '', $return);
        } else {
            return $this->result(1, '', 0);
        }
    }
    public function doPageApiGetNewInfo()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $id = $_GPC["id"];
        $info = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_newflats") . " WHERE `uniacid` =:weid and id=:id limit 1", array(":weid" => $uniacid, ":id" => $id));
        $imgs = iunserializer($info["thumb"]);
        $info["icon"] = tomedia($imgs[0]);
        foreach ($imgs as $k => $imgid) {
            $imgs[$k] = tomedia($imgid);
        }
        $from = $_W["fans"]["openid"];
        $myrecord = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_log") . " WHERE `openid`=:openid and houseid=:houseid and uniacid=:uniacid and `module`=:module limit 1 ", array(":openid" => $from, ":houseid" => $id, ":uniacid" => $_W["uniacid"], ":module" => "amouse_wxapp_house"));
        if (empty($myrecord["id"])) {
            $insert = array("houseid" => $id, "view" => 1, "uniacid" => $_W["uniacid"], "openid" => $from, "module" => "amouse_wxapp_house");
            pdo_insert("amouse_wxapp_log", $insert);
            pdo_update("amouse_wxapp_house", array("readcount" => $info["readcount"] + 1), array("id" => $info["id"]));
            $info["readcount"] = $info["readcount"] + 1;
        }
        $features = explode("|", $info["features"]);
        $info["sign"] = $features;
        $info["imgs"] = $imgs;
        $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 limit 1 ", array(":id" => $info["area_id"]));
        $info["area_name"] = $area["name"];
        $info["area_id"] = $area["id"];
        $use = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id limit 1", array(":id" => $info["use_id"]));
        $info["house_use"] = $use ? $use["name"] : '';
        $info["use_id"] = $use["id"];
        $account_info = pdo_get("account_wxapp", array("uniacid" => $uniacid));
        $lat = $info["lat"];
        $lng = $info["lng"];
        if (empty($info["code"])) {
            $code = $this->makeActivityCode("amouse_wxapp_house,newhouse," . $info["id"]);
            if (!is_error($code)) {
                pdo_update("amouse_wxapp_newflats", array("equally" => $code), array("id" => $info["id"]));
            }
            $info["code"] = tomedia($code);
        } else {
            $info["code"] = tomedia($info["code"]);
        }
        $info["wxappname"] = $account_info["name"];
        $info["lat"] = $lat;
        $info["lng"] = $lng;
        return $this->result(0, '', $info);
    }
    public function doPageApiSendMsg()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $_mobile_val = trim($_GPC["_mobile_val"]);
        $set = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_sysset") . " WHERE `uniacid`= :weid  limit 1 ", array(":weid" => $uniacid));
        if (empty($set)) {
            return $this->result(1, "短信业务配置不正确", $_mobile_val);
        }
        if ($_mobile_val == '') {
            return $this->result(1, "请输入手机号", '');
        } else {
            if (!preg_match("/(^1[3|4|5|7|8][0-9]{9}\$)/", $_mobile_val)) {
                return $this->result(1, "您输入的手机号格式错误", '');
            }
        }
        $userVerifyCode = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_sms") . " WHERE `uniacid`= :weid and `mobile`=:mobile ", array(":weid" => $uniacid, ":mobile" => $_mobile_val));
        if (!empty($userVerifyCode)) {
            if ($userVerifyCode["total"] > 3) {
                return $this->result(1, "您的操作过于频繁,请稍后再试", '');
            }
            $code = $userVerifyCode["code"];
            $mins = intval((time() - $userVerifyCode["createtime"]) % 86400 % 3600 / 60);
            if ($mins < 1) {
                return $this->result(1, "您的操作过于频繁,请稍后再试r", $mins);
            }
            $record["total"] = $userVerifyCode["total"] + 1;
            $record["createtime"] = time();
            pdo_update("uni_verifycode", $record, array("id" => $userVerifyCode["id"]));
        } else {
            $code = random(6, true);
            $data = array("uniacid" => $uniacid, "code" => $code, "mobile" => $_mobile_val, "createtime" => time());
            pdo_insert("amouse_wxapp_sms", $data);
        }
        if (!empty($_mobile_val)) {
            include_once IA_ROOT . "/addons/amouse_wxapp_house/AliyunSms.class.php";
            $sms = new \AliyunSms();
            $sms_param = "{\"number\":\"{$code}\"}";
            if ($set["sms_type"] == 1) {
                $acsResponse = $sms->_sendNewDySms($_mobile_val, $set["sms_user"], $set["sms_secret"], $set["sms_free_sign_name"], $set["reg_sms_code"], $sms_param, $code);
            } else {
                $acsResponse = $sms->_sendAliDaYuSms($_mobile_val, $set["sms_user"], $set["sms_secret"], $set["sms_free_sign_name"], $set["reg_sms_code"], $sms_param);
            }
        }
        return $this->result(0, '', $code);
    }
    private function checkLogin()
    {
        global $_W;
        if (empty($_W["fans"])) {
            return error(1, "请先登录" . $_W["fans"]);
        }
        return true;
    }
    private function makeActivityCode($scene)
    {
        $account_api = WeAccount::create();
        $code = $account_api->getCodeUnlimit($scene);
        
    }
    public function doPageApiPostHouseInfo()
    {
        global $_GPC, $_W;
        $from = $_W["fans"]["openid"];
        $uniacid = $_W["uniacid"];
        $nickname = $_GPC["nickname"] ? $_GPC["nickname"] : $_W["fans"]["nickname"];
        $avatar = $_W["fans"]["avatar"];
        $area_id = $_GPC["area_id"];
        $fit_id = intval($_GPC["fit_id"]);
        $use_id = intval($_GPC["use_id"]);
        $age_id = intval($_GPC["age_id"]);
        $vill_id = intval($_GPC["vill_id"]);
        if ($vill_id <= 0) {
            $vill_name = $_GPC["vill_name"];
            $villData = array("uniacid" => $_W["uniacid"], "name" => trim($vill_name), "area_id" => $area_id);
            pdo_insert("amouse_wxapp_vill", $villData);
            $vill_id = pdo_insertid();
        }
        $type_id = intval($_GPC["type_id"]);
        if ($type_id <= 0) {
            $house_type = $_GPC["house_type"];
            $typesdata = array("uniacid" => $_W["uniacid"], "name" => $house_type, "type" => 4);
            pdo_insert("amouse_wxapp_kinds", $typesdata);
            $type_id = pdo_insertid();
        }
        $house_area = trim($_GPC["house_area"]);
        $house_toward = intval($_GPC["orientation_id"]);
        $floor = trim($_GPC["floor"]);
        $mobile = trim($_GPC["mobile"]);
        $desc = trim($_GPC["description"]);
        $document_age = trim($_GPC["document_age"]);
        $images = $_GPC["imagesList"];
        $imgs = explode("|", $images);
        $down_images = array();
        foreach ($imgs as $imgid) {
            $down_images[] = $imgid;
        }
        $images = iserializer($down_images);
        $n = floatval($_GPC["total_price"] / $house_area);
        $data = array("uniacid" => $uniacid, "openid" => $from, "title" => $_GPC["title"], "mobile" => $mobile, "person_mobile" => $mobile, "is_person" => 1, "house_toward" => $house_toward, "status" => 0, "area_id" => $area_id, "vill_id" => $vill_id, "document_age" => $document_age, "house_age" => trim($_GPC["house_age"]), "fit_id" => $fit_id, "use_id" => $use_id, "type_id" => $type_id, "age_id" => $age_id, "total_price" => $_GPC["total_price"], "house_area" => $house_area, "floor" => $floor, "nickname" => $nickname, "avater" => $avatar, "address" => trim($_GPC["address"]), "lat" => trim($_GPC["lat"]), "lng" => trim($_GPC["lng"]), "sendcode" => trim($_GPC["formId"]), "house_type" => $_GPC["type"], "estate" => $_GPC["estate"], "cash_type" => $_GPC["cash_type"], "createtime" => time(), "rental" => $_GPC["rental"], "listorder" => 0, "vipstatus" => 0, "desc" => $desc, "imgs" => $images, "price" => substr(sprintf("%.3f", $n), 0, -1));
        $set = pdo_fetch("select `qqmap_ak`,`is_public`,`show_top`,`enable` from " . tablename("amouse_wxapp_sysset") . " where `uniacid`=:uniacid limit 1", array(":uniacid" => $uniacid));
        if ($set["enable"] == 1) {
            $url = "http://apis.map.qq.com/ws/geocoder/v1/?address={$_GPC["address"]}&key=" . $set["qqmap_ak"];
            load()->func("communication");
            $ret = ihttp_request($url);
            $content = @json_decode($ret["content"], true);
            if ($content["status"] == 0) {
                $result = $content["result"];
                $lng = $result["location"]["lng"];
                $lat = $result["location"]["lat"];
                $data["lat"] = $lat;
                $data["lng"] = $lng;
            }
        }
        $msg = "发布成功";
        if ($set && $set["is_public"] == 0) {
            $data["status"] = 1;
            $msg .= ",请等待管理员审核";
        }
        pdo_insert("amouse_wxapp_house", $data);
        $apiCardid = pdo_insertid();
        if ($set["show_top"] == 0 && $_GPC["is_top"] == 1) {
            $price = intval($_GPC["top_amount"]);
            $day = $_GPC["top_day"];
            $paytype = 1;
        }
        if (intval($_GPC["public_price"]) > 0) {
            $price = intval($_GPC["public_price"]);
            $paytype = 2;
        }
        if ($_GPC["is_top"] == 1 && intval($_GPC["public_price"]) > 0) {
            $price = intval($_GPC["top_amount"]) + intval($_GPC["public_price"]);
            $day = $_GPC["top_day"];
            $paytype = 3;
        }
        if ($price > 0) {
            $orderData = array("uniacid" => $uniacid, "openid" => $from, "module" => $this->modulename, "ordersn" => date("ymd") . sprintf("%04d", $_W["fans"]["id"]) . random(4, 1), "status" => 0, "paytype" => $paytype, "price" => $price, "top_day" => $day, "createtime" => TIMESTAMP, "house_id" => $apiCardid);
            pdo_insert("amouse_wxapp_order", $orderData);
            $orderId = pdo_insertid();
            $orderPayData = array("tid" => intval($orderId), "user" => $from, "fee" => $orderData["price"], "title" => "置顶" . $orderData["top_day"] . "-付款" . $orderData["price"]);
            $pay_params = $this->pay($orderPayData);
            $pay_params["orderid"] = $orderId;
            if (is_error($pay_params)) {
                return $this->result(0, '', $pay_params);
            }
            $prepay_id = str_replace("prepay_id=", '', $pay_params["package"]);
            pdo_update("amouse_wxapp_order", array("prepay_id" => $prepay_id), array("id" => $orderId));
            return $this->result(0, '', $pay_params);
        } else {
            return $this->result(0, $msg, 0);
        }
    }
    public function doPageApiPostShop()
    {
        global $_GPC, $_W;
        $from = $_W["fans"]["openid"];
        $uniacid = $_W["uniacid"];
        $shop_id = intval($_GPC["shop_id"]);
        if ($shop_id <= 0) {
            $mobile = trim($_GPC["mobile"]);
            $area_id = $_GPC["area_id"];
            $address = trim($_GPC["address"]);
            $latitude = trim($_GPC["latitude"]);
            $longitude = trim($_GPC["longitude"]);
            $images = $_GPC["imagesList"];
            $imgs = explode("|", $images);
            $down_images = array();
            foreach ($imgs as $imgid) {
                $down_images[] = $imgid;
            }
            $images = iserializer($down_images);
            $data = array("uniacid" => $uniacid, "openid" => $from, "name" => $_GPC["title"], "mobile" => $mobile, "area_id" => $area_id, "lat" => $latitude, "lng" => $longitude, "address" => $address, "thumb" => $images);
            pdo_insert("amouse_wxapp_shop", $data);
            $shop_id = pdo_insertid();
        }
        $agentName = trim($_GPC["agentname"]);
        $agentMobile = trim($_GPC["agentmobile"]);
        $desc = trim($_GPC["description"]);
        $data2 = array("uniacid" => $uniacid, "openid" => $from, "realname" => $agentName, "createtime" => time(), "vip" => 1, "mobile" => $agentMobile, "shop_id" => $shop_id, "icon_url" => $_W["fans"]["avatar"], "sendcode" => trim($_GPC["formId"]), "desc" => $desc);
        $set = pdo_fetch("select `check` from " . tablename("amouse_wxapp_sysset") . " where `uniacid`=:uniacid limit 1", array(":uniacid" => $uniacid));
        if ($set && $set["check"] == 1) {
            $data2["status"] = 1;
        }
        pdo_insert("amouse_wxapp_agent", $data2);
        $agent_id = pdo_insertid();
        return $this->result(0, '', $agent_id);
    }
    public function doPageApiPostAgent()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $agent_id = intval($_GPC["agent_id"]);
        $agent = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_agent") . " WHERE `uniacid` =:weid and id=:id limit 1", array(":weid" => $uniacid, ":id" => $agent_id));
        $shopname = pdo_fetchcolumn("SELECT name FROM " . tablename("amouse_wxapp_shop") . " WHERE `uniacid` =:weid and id=:id limit 1", array(":weid" => $uniacid, ":id" => $agent["shop_id"]));
        $agentname = trim($_GPC["agentname"]);
        $agentmobile = trim($_GPC["agentmobile"]);
        $formid = trim($_GPC["sendcode"]);
        $desc = trim($_GPC["description"]);
        $data2 = array("realname" => $agentname, "mobile" => $agentmobile, "desc" => $desc, "sendcode" => $formid);
        pdo_update("amouse_wxapp_agent", $data2, array("id" => $agent_id));
        $agent["shopname"] = $shopname;
        return $this->result(0, '', $agent);
    }
    public function doPageApiGetVill()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $areaId = $_GPC["areaId"];
        $vills = pdo_fetchall("SELECT * FROM " . tablename("amouse_wxapp_vill") . "  WHERE uniacid =:weid  and area_id=:areaid  ORDER BY displayorder DESC ", array(":weid" => $uniacid, ":areaid" => $areaId));
        return $this->result(0, '', $vills);
    }
    public function doPageApiGetMyHouses()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $agentid = intval($_GPC["agentid"]);
        $type = !empty($_GPC["house_type"]) ? $_GPC["house_type"] : "0";
        $pindex = max(1, intval($_GPC["pageIndex"]));
        $psize = max(10, intval($_GPC["pageSize"]));
        if ($type == "0") {
            $where .= " and house_type=0 ";
        } else {
            if ($type == "1") {
                $where .= " and house_type=1 ";
            }
        }
        $start = ($pindex - 1) * $psize;
        $sql = "SELECT * FROM " . tablename("amouse_wxapp_house") . " WHERE `uniacid` =:weid   and `agent_id`=:agentid " . $where . " limit {$start},{$psize}";
        $list = pdo_fetchall($sql, array(":weid" => $uniacid, ":agentid" => $agentid));
        $total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("amouse_wxapp_house") . "  WHERE `uniacid` =:weid  and `agent_id`=:agentid " . $where, array(":weid" => $uniacid, ":agentid" => $agentid));
        $tpage = ceil($total / $psize);
        $return = array();
        if (count($list) > 0) {
            foreach ($list as $key => $value) {
                $imgs = iunserializer($value["imgs"]);
                $list[$key]["icon"] = tomedia($imgs[0]);
                $area = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=1 ", array(":id" => $value["area_id"]));
                $list[$key]["area_name"] = $area["name"];
                $type = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_kinds") . " WHERE id = :id and type=4 ", array(":id" => $value["type_id"]));
                $list[$key]["type_name"] = $type ? $type["name"] : '';
                if ($value["house_type"] == 0) {
                    $list[$key]["house_typename"] = "出租";
                } else {
                    if ($value["house_type"] == 1) {
                        $list[$key]["house_typename"] = "出售";
                    }
                }
            }
            $return["list"] = $list;
            $return["gtotal"] = $tpage;
            return $this->result(0, $where, $return);
        } else {
            return $this->result(1, '', 0);
        }
    }
    public function doPageApiPostUpdateHouse()
    {
        global $_GPC, $_W;
        $uniacid = $_W["uniacid"];
        $id = $_GPC["id"];
        $area_id = $_GPC["area_id"];
        $openid = $_W["openid"];
        $nickname = $_W["fans"]["nickname"];
        $avatar = $_W["fans"]["avatar"];
        $fit_id = intval($_GPC["fit_id"]);
        $use_id = intval($_GPC["use_id"]);
        $age_id = intval($_GPC["age_id"]);
        $house_area = trim($_GPC["house_area"]);
        $floor = trim($_GPC["floor"]);
        $mobile = trim($_GPC["mobile"]);
        $desc = trim($_GPC["description"]);
        $agent_id = intval($_GPC["agent_id"]);
        $type_id = intval($_GPC["type_id"]);
        $vill_id = intval($_GPC["vill_id"]);
        if ($vill_id <= 0) {
            $vill_name = $_GPC["vill_name"];
            $villData = array("uniacid" => $_W["uniacid"], "name" => trim($vill_name), "area_id" => $area_id);
            pdo_insert("amouse_wxapp_vill", $villData);
            $vill_id = pdo_insertid();
        }
        if ($type_id <= 0) {
            $house_type = $_GPC["house_type"];
            $typesdata = array("uniacid" => $_W["uniacid"], "name" => $house_type, "type" => 4);
            pdo_insert("amouse_wxapp_kinds", $typesdata);
            $type_id = pdo_insertid();
        }
        $images = $_GPC["imagesList"];
        $imgs = explode("|", $images);
        $down_images = array();
        foreach ($imgs as $imgid) {
            $down_images[] = $imgid;
        }
        $images = iserializer($down_images);
        $n = floatval($_GPC["total_price"] / $house_area);
        $agent = pdo_fetch("SELECT id, status FROM " . tablename("amouse_wxapp_agent") . " WHERE id ='{$agent_id}' AND uniacid=" . $uniacid);
        $shop_id = pdo_fetchcolumn("SELECT `shop_id` FROM " . tablename("amouse_wxapp_agent") . " WHERE `uniacid`= :weid and `id`=:id limit 1 ", array(":weid" => $uniacid, ":id" => $agent_id));
        $data = array("title" => $_GPC["title"], "lat" => $_GPC["lat"], "lng" => $_GPC["lng"], "address" => $_GPC["address"], "mobile" => $mobile, "status" => 0, "area_id" => $area_id, "agent_id" => $agent_id, "shop_id" => $shop_id, "fit_id" => $fit_id, "use_id" => $use_id, "age_id" => $age_id, "total_price" => $_GPC["total_price"], "price" => substr(sprintf("%.3f", $n), 0, -1), "type_id" => intval($type_id), "vill_id" => $vill_id, "is_person" => 0, "document_age" => trim($_GPC["document_age"]), "house_age" => trim($_GPC["house_age"]), "house_type" => $_GPC["type"], "estate" => $_GPC["estate"], "cash_type" => $_GPC["cash_type"], "house_area" => $house_area, "floor" => $floor, "rental" => $_GPC["rental"], "desc" => $desc, "imgs" => $images);
        $set = pdo_fetch("select `qqmap_ak`,`enable` from " . tablename("amouse_wxapp_sysset") . " where `uniacid`=:uniacid limit 1", array(":uniacid" => $uniacid));
        if ($agent && $agent["status"] == 1) {
            $data["status"] = 1;
        }
        if ($set["enable"] == 1) {
            $url = "http://apis.map.qq.com/ws/geocoder/v1/?address={$_GPC["address"]}&key=" . $set["qqmap_ak"];
            load()->func("communication");
            $ret = ihttp_request($url);
            $content = @json_decode($ret["content"], true);
            if ($content["status"] == 0) {
                $result = $content["result"];
                $lng = $result["location"]["lng"];
                $lat = $result["location"]["lat"];
                $data["lat"] = $lat;
                $data["lng"] = $lng;
            }
        }
        if (!empty($id) && $id > 0) {
            pdo_update("amouse_wxapp_house", $data, array("id" => $id));
        } else {
            $data["uniacid"] = $uniacid;
            $data["openid"] = $openid;
            $data["nickname"] = $nickname;
            $data["avater"] = $avatar;
            pdo_insert("amouse_wxapp_house", $data);
            $id = pdo_insertid();
            $code = $this->makeActivityCode("amouse_wxapp_house,house," . $id);
            if (!is_error($code)) {
                pdo_update("amouse_wxapp_house", array("code" => $code), array("id" => $id));
            }
        }
        return $this->result(0, '', $id);
    }
    public function doPageApiPostChangeMobile()
    {
        global $_GPC, $_W;
        $uniacid = intval($_W["uniacid"]);
        $apiCardid = intval($_GPC["cardid"]);
        if ($apiCardid > 0) {
            $data = array("mobile" => trim($_GPC["mobile"]));
            $mobile_verify_status = pdo_fetchcolumn("SELECT `mobile_verify_status` FROM " . tablename("amouse_wxapp_sysset") . " WHERE `uniacid`= :weid  limit 1 ", array(":weid" => $uniacid));
            if ($mobile_verify_status && $mobile_verify_status == 1) {
                $phone_code = trim($_GPC["phone_code"]);
                $userVerifyCode = pdo_fetch("SELECT `id`,`code`,`createtime`,`status` FROM " . tablename("amouse_wxapp_sms") . " WHERE `uniacid`= :uniacid and `mobile`=:mobile limit 1 ", array(":uniacid" => $uniacid, ":mobile" => trim($_GPC["mobile"])));
                if (!empty($userVerifyCode)) {
                    $mins = intval((time() - $userVerifyCode["createtime"]) % 86400 % 3600 / 60);
                    if ($mins > 30) {
                        return $this->result(1, "此验证码已经失效", $mins);
                    }
                    if ($userVerifyCode["status"] == 1) {
                        return $this->result(1, "此验证码已经被使用", $userVerifyCode["status"]);
                    }
                    if ($userVerifyCode["code"] == $phone_code) {
                        pdo_update("amouse_wxapp_sms", array("status" => 1), array("id" => $userVerifyCode["id"]));
                        pdo_update("amouse_wxapp_house", $data, array("id" => $apiCardid));
                    } else {
                        return $this->result(1, "验证码不正确，请确认验证", $userVerifyCode["status"]);
                    }
                } else {
                    return $this->result(1, "手机号码不正确，请确认验证", $phone_code);
                }
            } else {
                pdo_update("amouse_wxapp_house", $data, array("id" => $apiCardid));
            }
            return $this->result(0, '', $apiCardid);
        } else {
            return $this->result(1, '', $apiCardid);
        }
    }
    public function payResult($params)
    {
        global $_W;
        $order = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_order") . " WHERE id = :id AND `uniacid` = :weid ", array(":id" => $params["tid"], ":weid" => intval($_W["uniacid"])));
        $data = array("status" => $params["result"] == "success" ? 1 : 0);
        if ($params["type"] == "wechat") {
            $data["transid"] = $params["tag"]["transaction_id"];
        }
        if ($params["result"] == "success" && $params["from"] == "notify") {
            if ($params["fee"] == $order["price"]) {
                pdo_update("amouse_wxapp_order", $data, array("id" => $params["tid"]));
                if ($order["paytype"] == 0) {
                    pdo_update("amouse_wxapp_member", array("vip" => 1), array("openid" => $order["openid"]));
                } else {
                    if ($order["paytype"] == 1 || $order["paytype"] == 3) {
                        $house_id = $order["house_id"];
                        $top_day = $order["top_day"];
						$house = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_house") . " WHERE id = :id AND `uniacid` = :weid ", array(":id" => $house_id, ":weid" => intval($_W["uniacid"])));
						if ($house["createtime"] >= time()) {
                            $nextWeek = $house["createtime"] + $top_day * 24 * 60 * 60;
                        } else {
                            $nextWeek = TIMESTAMP + $top_day * 24 * 60 * 60;
                        }
                        $data["createtime"] = $nextWeek;
                        $data["vipstatus"] = 1;
                        $data["listorder"] = 1;
                        $is_pay_public = pdo_fetchcolumn("select `is_pay_public` from " . tablename("amouse_wxapp_sysset") . " where `uniacid`=:uniacid limit 1", array(":uniacid" => intval($_W["uniacid"])));
                        if ($is_pay_public == 0) {
                            $data["status"] = 0;
                        }
                        pdo_update("amouse_wxapp_house", $data, array("id" => $house_id));
                    }
                }
            }
        }
    }
    public function doPageApiWxPay()
    {
        global $_GPC, $_W;
        $login_success = $this->checkLogin();
        if (is_error($login_success)) {
            return $this->result($login_success["errno"], $login_success["message"]);
        }
        $uniacid = $_W["uniacid"];
        $from = $_W["openid"];
        $orderid = $_GPC["orderid"];
        $set = pdo_fetch("SELECT * FROM " . tablename("amouse_wxapp_sysset") . " WHERE `uniacid`= :weid  limit 1 ", array(":weid" => $uniacid));
        if ($orderid <= 0) {
            $data = array("uniacid" => $uniacid, "openid" => $from, "ordersn" => date("ymd") . sprintf("%04d", $_W["fans"]["id"]) . random(4, 1), "status" => 0, "paytype" => 0, "price" => $_GPC["price"], "createtime" => TIMESTAMP);
            pdo_insert("amouse_wxapp_order", $data);
            $orderid = pdo_insertid();
        }
        if (!empty($set["print_bottom"]) && !empty($from)) {
            $send["first"] = array("value" => "尊敬的会员，您的订单提交成功，请尽快付款。", "color" => "#000");
            $send["keyword1"] = array("value" => empty($data["ordersn"]) ? $order["ordersn"] : $data["ordersn"], "color" => "#000");
            $send["keyword2"] = array("value" => empty($data["totalprice"]) ? $order["totalprice"] : $data["totalprice"] . "元", "color" => "#000");
            $send["keyword3"] = array("value" => '', "color" => "#000");
            $send["keyword4"] = array("value" => date("Y年m月d日", empty($data["createtime"]) ? $order["createtime"] : $data["createtime"]), "color" => "#000");
            $this->sendTplNotice($from, $set["print_bottom"], "amouse_wxapp_house/pages/order_list/order_details?orderid=" . $orderid, trim($_GPC["formId"]), $send, "keyword1.DATA");
        }
        $payparam = array("tid" => intval($orderid), "user" => $from, "fee" => $_GPC["price"], "title" => "经纪人入驻申请支付");
        $pay_params = $this->pay($payparam);
        $pay_params["orderid"] = $orderid;
        if (is_error($pay_params)) {
            return $this->result(1, "系统支付配置出错", $pay_params);
        }
        $prepay_id = str_replace("prepay_id=", '', $pay_params["package"]);
        pdo_update("amouse_wxapp_order", array("prepay_id" => $prepay_id), array("id" => $orderid));
        return $this->result(0, '', $pay_params);
    }
    protected function sendTplNotice($touser, $template_id, $page = '', $form_id, $postdata, $emphasis_keyword = NULL)
    {
        load()->model("mc");
        load()->func("communication");
        $account_api = WeAccount::create();
        $accesstoken = $account_api->getAccessToken();
        if (is_error($accesstoken)) {
            return $accesstoken;
        }
        if (empty($touser)) {
            return error(-1, "参数错误,粉丝openid不能为空");
        }
        if (empty($template_id)) {
            return error(-1, "参数错误,模板标示不能为空");
        }
        if (empty($postdata) || !is_array($postdata)) {
            return error(-1, "参数错误,请根据模板规则完善消息内容");
        }
        $data = array();
        $data["touser"] = $touser;
        $data["template_id"] = trim($template_id);
        $data["page"] = trim($page);
        $data["form_id"] = trim($form_id);
        if ($emphasis_keyword) {
            $send["emphasis_keyword"] = $emphasis_keyword;
        }
        $data["data"] = $postdata;
        $data = json_encode($data);
        $templateUrl = "https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token={$accesstoken}";
        $response = ihttp_request($templateUrl, $data);
        if (is_error($response)) {
            return error(-1, "访问公众平台接口失败, 错误: {$response["message"]}");
        }
        $result = @json_decode($response["content"], true);
        if (empty($result)) {
            return error(-1, "接口调用失败, 元数据: {$response["meta"]}");
        } else {
            if (!empty($result["errcode"])) {
                return error(-1, "访问微信接口错误, 错误代码: {$result["errcode"]}, 错误信息: {$result["errmsg"]},信息详情：{$this->error_code($result["errcode"])}");
            }
        }
        return true;
    }
    public function doPageWxUpload()
    {
        global $_W;
        $path = ATTACHMENT_ROOT . "images/";
        load()->func("file");
        $pathinfo = pathinfo($_FILES["file"]["name"]);
        $exename = strtolower($pathinfo["extension"]);
		if ($exename != "png" && $exename != "jpg" && $exename != "gif") {
			return $this->result(0, "格式不正确", '');
		}
        if (!empty($_FILES["file"])) {
            $tmpP = $_FILES["file"]["tmp_name"];
            if ($tmpP) {
                $p = "jpeg";
                $filename = $_W["uniacid"] . "/" . date("Y/m/");
                if (!is_dir($path . $filename)) {
                    mkdirs(dirname($path . $filename));
                    mkdir($path . $filename);
                }
                $filename = $filename . file_random_name($filename, $p);
                $uploadfile = $path . $filename;
                $fp = $uploadfile;
                if (move_uploaded_file($tmpP, $fp)) {
                    $url = "images/" . $filename;
                    if (!empty($_W["setting"]["remote"]["type"])) {
                        $remotestatus = file_remote_upload($url);
                        if (is_error($remotestatus)) {
                            file_delete($url);
                            return $this->result(0, "远程附件上传失败，请检查配置并重新上传", $url);
                        } else {
                            file_delete($url);
                            $url = tomedia($url, false);
                        }
                    }
                    return $this->result(0, '', $url);
                }
            }
        } else {
            return $this->result(1, "服务器出问题了", '');
        }
    }
    public function doPageApiJuhe()
    {
        global $_GPC, $_W;
        $type = trim($_GPC["type"]);
        $key = '';
        switch ($type) {
            case "card":
                $key = "86f79e974dd392f4c48e226aa3f8ed0c";
                $cardno = $_GPC["cardno"];
                $get_res = file_get_contents("http://apis.juhe.cn/idcard/index?cardno=" . $cardno . "&key=" . $key);
                echo $get_res;
                break;
            case "ip":
                $key = "86f79e974dd392f4c48e226aa3f8ed0c";
                $cardno = $_GPC["cardno"];
                $get_res = file_get_contents("http://apis.juhe.cn/ip/ip2addr?ip=" . $cardno . "&key=" . $key);
                echo $get_res;
                break;
            case "history":
                $key = "86f79e974dd392f4c48e226aa3f8ed0c";
                $month = $_GPC["month"];
                $day = $_GPC["day"];
                $get_res = file_get_contents("http://apis.juhe.cn/japi/toh?key=" . $key . "&v=1.0&month=" . $month . "&day=" . $day);
                echo $get_res;
                break;
            case "weixin":
                $key = "86f79e974dd392f4c48e226aa3f8ed0c";
                $get_res = file_get_contents("http://apis.juhe.cn/weixin/query?key=" . $key);
                echo $get_res;
                break;
            default:
                die("error : no type 404");
                break;
        }
    }
}