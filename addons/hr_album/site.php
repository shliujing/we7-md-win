<?php
/**
 * 酷炫小程序相册模块微站定义
 *
 * @author agressor
 * @url 
 */
defined('IN_IA') or exit('Access Denied');
class Hr_albumModuleSite extends WeModuleSite {
    private function wangluo(){
        $data = 'a:33:{i:0;a:3:{s:5:"title";s:15:"我们说好的";s:6:"singer";s:9:"尤起胜";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100004AJYfu0dwauP.m4a?fromtag=46&lyric=104974249";}i:1;a:3:{s:5:"title";s:18:"你的泪会说谎";s:6:"singer";s:9:"田一龙";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100003tKRt03FbDol.m4a?fromtag=46&lyric=106556934";}i:2;a:3:{s:5:"title";s:15:"青春不认输";s:6:"singer";s:9:"格子兮";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100004b76Fa155dXo.m4a?fromtag=46&lyric=201670058";}i:3;a:3:{s:5:"title";s:15:"扑火的飞蛾";s:6:"singer";s:6:"庄妮";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100003YU9MA2PO2Ou.m4a?fromtag=46&lyric=3458623";}i:4;a:3:{s:5:"title";s:6:"男人";s:6:"singer";s:6:"笑天";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100004HYzGl4RJuBe.m4a?fromtag=46&lyric=105972228";}i:5;a:3:{s:5:"title";s:12:"何必怀念";s:6:"singer";s:12:"牛奶咖啡";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100003lVb982WWq4v.m4a?fromtag=46&lyric=7161341";}i:6;a:3:{s:5:"title";s:6:"玻璃";s:6:"singer";s:9:"蔡淳佳";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002Dg3jU2mVTj2.m4a?fromtag=46&lyric=106345942";}i:7;a:3:{s:5:"title";s:15:"最后悔爱谁";s:6:"singer";s:9:"安又琪";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100000ecKrF0Frnkl.m4a?fromtag=46&lyric=109755";}i:8;a:3:{s:5:"title";s:15:"让心跳停了";s:6:"singer";s:9:"蓝又时";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100001x3T220yO0l1.m4a?fromtag=46&lyric=3574116";}i:9;a:3:{s:5:"title";s:12:"旁观者悲";s:6:"singer";s:6:"林峯";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C10000144vYo3M2vLz.m4a?fromtag=46&lyric=105857718";}i:10;a:3:{s:5:"title";s:18:"最后一次分手";s:6:"singer";s:9:"吴若希";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000BufSu3It7QO.m4a?fromtag=46&lyric=107536367";}i:11;a:3:{s:5:"title";s:9:"钟无艳";s:6:"singer";s:9:"谢安琪";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100003xKgVs0gdqZ0.m4a?fromtag=46&lyric=414257";}i:12;a:3:{s:5:"title";s:12:"不爱之恩";s:6:"singer";s:5:"Twins";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002THbyZ1Efzd5.m4a?fromtag=46&lyric=107660564";}i:13;a:3:{s:5:"title";s:6:"绵绵";s:6:"singer";s:9:"陈奕迅";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C1000006tWxy0mUp7s.m4a?fromtag=46&lyric=4829898";}i:14;a:3:{s:5:"title";s:15:"只是太爱你";s:6:"singer";s:9:"郑子威";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000BeT9s0JQeOG.m4a?fromtag=46&lyric=200393530";}i:15;a:3:{s:5:"title";s:12:"原来如此";s:6:"singer";s:9:"王菀之";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100000yB8KF2pI9DN.m4a?fromtag=46&lyric=1347592";}i:16;a:3:{s:5:"title";s:24:"十指紧扣 (特别版)";s:6:"singer";s:9:"张智霖";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000SSgdt18AtuE.m4a?fromtag=46&lyric=102351585";}i:17;a:3:{s:5:"title";s:9:"电灯胆";s:6:"singer";s:9:"邓丽欣";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100003emfRu1xAsvk.m4a?fromtag=46&lyric=184607";}i:18;a:3:{s:5:"title";s:9:"四不像";s:6:"singer";s:6:"泳儿";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C1000009OCFa0duN0S.m4a?fromtag=46&lyric=106059935";}i:19;a:3:{s:5:"title";s:6:"秋酿";s:6:"singer";s:12:"房东的猫";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002s8D0U1B9ULG.m4a?fromtag=46&lyric=102192376";}i:20;a:3:{s:5:"title";s:9:"安和桥";s:6:"singer";s:9:"宋冬野";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100001fpbwS2TUTjV.m4a?fromtag=46&lyric=5002687";}i:21;a:3:{s:5:"title";s:9:"半壶纱";s:6:"singer";s:9:"刘珂矣";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100003tOapB4aiTwv.m4a?fromtag=46&lyric=7048773";}i:22;a:3:{s:5:"title";s:18:"白兰鸽巡游记";s:6:"singer";s:15:"丢火车乐队";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C1000002xdhG0ITC06.m4a?fromtag=46&lyric=100516358";}i:23;a:3:{s:5:"title";s:24:"我一直都站在这里";s:6:"singer";s:9:"刘明汉";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C1000020AL9u23tfeR.m4a?fromtag=46&lyric=104333324";}i:24;a:3:{s:5:"title";s:9:"不找了";s:6:"singer";s:6:"郭旭";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002BWJyE2nofFX.m4a?fromtag=46&lyric=108027479";}i:25;a:3:{s:5:"title";s:6:"活着";s:6:"singer";s:6:"郝云";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100002fd96B43RdFh.m4a?fromtag=46&lyric=5004496";}i:26;a:3:{s:5:"title";s:12:"只道寻常";s:6:"singer";s:9:"谢春花";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100001RmWOG2yxDg3.m4a?fromtag=46&lyric=200288108";}i:27;a:3:{s:5:"title";s:12:"平凡之路";s:6:"singer";s:6:"朴树";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C10000020yc41KtWj2.m4a?fromtag=46&lyric=211668025";}i:28;a:3:{s:5:"title";s:13:"故乡 (Live)";s:6:"singer";s:6:"许巍";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100001Tw6Tm3gmRxq.m4a?fromtag=46&lyric=104235383";}i:29;a:3:{s:5:"title";s:12:"不说再见";s:6:"singer";s:15:"好妹妹乐队";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C1000000xYPh1yUoyt.m4a?fromtag=46&lyric=105460886";}i:30;a:3:{s:5:"title";s:33:"这一切没有想象的那么糟";s:6:"singer";s:9:"万晓利";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100000N2aO10TOVUT.m4a?fromtag=46&lyric=7072014";}i:31;a:3:{s:5:"title";s:6:"心曲";s:6:"singer";s:15:"好妹妹乐队";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100001pN28D0kCM8e.m4a?fromtag=46&lyric=7409411";}i:32;a:3:{s:5:"title";s:12:"一头偶像";s:6:"singer";s:6:"李志";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100001cBmHP2c4tcD.m4a?fromtag=46&lyric=109325700";}}';
        return $data;
    }
    private function liuxing(){
        $data = 'a:28:{i:0;a:3:{s:5:"title";s:6:"征婚";s:6:"singer";s:6:"大哲";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100001Ketgd2TvA7H.m4a?fromtag=46&lyric=200503025";}i:1;a:3:{s:5:"title";s:21:"来生还要做兄弟";s:6:"singer";s:6:"冷漠";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100001RxbNx4391Kb.m4a?fromtag=46&lyric=1762207";}i:2;a:3:{s:5:"title";s:9:"装糊涂";s:6:"singer";s:9:"Ven陈斌";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000SZYJ80hzgT9.m4a?fromtag=46&lyric=109215285";}i:3;a:3:{s:5:"title";s:21:"做个绿色地球人";s:6:"singer";s:6:"寒香";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C1000037k9kk0TYksM.m4a?fromtag=46&lyric=200430728";}i:4;a:3:{s:5:"title";s:12:"快乐是…";s:6:"singer";s:9:"刘晏辰";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100001hILxa1ZeNT2.m4a?fromtag=46&lyric=3511638";}i:5;a:3:{s:5:"title";s:15:"相爱是个错";s:6:"singer";s:9:"豆子民";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100003hvRNk0PrOtr.m4a?fromtag=46&lyric=4991225";}i:6;a:3:{s:5:"title";s:21:"第三者的第三者";s:6:"singer";s:6:"弦子";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100002xsasD2ldkwl.m4a?fromtag=46&lyric=875653";}i:7;a:3:{s:5:"title";s:15:"你给我的爱";s:6:"singer";s:9:"毕书尽";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100000BFPBh2MZADv.m4a?fromtag=46&lyric=4819904";}i:8;a:3:{s:5:"title";s:9:"不值得";s:6:"singer";s:9:"梦飞船";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100004GmYLS41GsSS.m4a?fromtag=46&lyric=126506";}i:9;a:3:{s:5:"title";s:12:"大个之后";s:6:"singer";s:9:"许靖韵";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000TEBHI43F4yc.m4a?fromtag=46&lyric=108784127";}i:10;a:3:{s:5:"title";s:30:"你就是我最想要的丫头";s:6:"singer";s:6:"赵照";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002sLzao2vTeM1.m4a?fromtag=46&lyric=101798793";}i:11;a:3:{s:5:"title";s:9:"南山南";s:6:"singer";s:6:"马頔";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C1000030moFt21TOxK.m4a?fromtag=46&lyric=5057872";}i:12;a:3:{s:5:"title";s:15:"我们的时光";s:6:"singer";s:6:"赵雷";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100003ITzMw2CRNZX.m4a?fromtag=46&lyric=100641068";}i:13;a:3:{s:5:"title";s:12:"世界之大";s:6:"singer";s:3:"Jam";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000zgAuv3I4Eec.m4a?fromtag=46&lyric=105894688";}i:14;a:3:{s:5:"title";s:15:"轻轻的放下";s:6:"singer";s:6:"小柯";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100001S9aR94BiCJN.m4a?fromtag=46&lyric=7219454";}i:15;a:3:{s:5:"title";s:27:"就算全世界与我为敌";s:6:"singer";s:9:"陈绮贞";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100003DDWJI3kvgwj.m4a?fromtag=46&lyric=4928045";}i:16;a:3:{s:5:"title";s:46:"唱一首悲伤的歌 就当我为你送行了";s:6:"singer";s:6:"赵照";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100003z6dXP0yU1S4.m4a?fromtag=46&lyric=202616395";}i:17;a:3:{s:5:"title";s:12:"港岛妹妹";s:6:"singer";s:6:"士辉";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C10000056Sej2HW8iC.m4a?fromtag=46&lyric=202373192";}i:18;a:3:{s:5:"title";s:9:"董小姐";s:6:"singer";s:9:"宋冬野";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100003eLKKD2wQ4th.m4a?fromtag=46&lyric=5002691";}i:19;a:3:{s:5:"title";s:12:"梵高先生";s:6:"singer";s:6:"李志";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000XbViR0N7w5w.m4a?fromtag=46&lyric=102391972";}i:20;a:3:{s:5:"title";s:34:"如果来生还能遇见你 (Live)";s:6:"singer";s:6:"郝云";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000lBbzv3YSDdu.m4a?fromtag=46&lyric=105577814";}i:21;a:3:{s:5:"title";s:15:"和你在一起";s:6:"singer";s:6:"李志";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100003HAE1U26h3D6.m4a?fromtag=46&lyric=102392675";}i:22;a:3:{s:5:"title";s:21:"关于郑州的记忆";s:6:"singer";s:6:"李志";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000k5dn31a2gxp.m4a?fromtag=46&lyric=102408825";}i:23;a:3:{s:5:"title";s:6:"旅行";s:6:"singer";s:6:"许巍";s:5:"music";s:77:"http://ws.stream.qqmusic.qq.com/C100000Qhd4C3Hfn7t.m4a?fromtag=46&lyric=96319";}i:24;a:3:{s:5:"title";s:3:"你";s:6:"singer";s:4:"GALA";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002daqnB3lFTzR.m4a?fromtag=46&lyric=211673433";}i:25;a:3:{s:5:"title";s:12:"哈利路亚";s:6:"singer";s:4:"GALA";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000atnJc2p4qvG.m4a?fromtag=46&lyric=204249081";}i:26;a:3:{s:5:"title";s:24:"我绝对不能失去你";s:6:"singer";s:4:"GALA";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100000AwiuQ28f1gd.m4a?fromtag=46&lyric=9081832";}i:27;a:3:{s:5:"title";s:27:"请你给我多一点温柔";s:6:"singer";s:15:"好妹妹乐队";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100004DsINM0tnQ4W.m4a?fromtag=46&lyric=105054132";}}';
        return  $data;
    }
    private function huaijiu(){
        $data = 'a:19:{i:0;a:3:{s:5:"title";s:12:"新四季歌";s:6:"singer";s:6:"庄妮";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100004gGHvA0aAgei.m4a?fromtag=46&lyric=2855771";}i:1;a:3:{s:5:"title";s:15:"分手的距离";s:6:"singer";s:9:"李魏西";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100003jA8fd0dOMHu.m4a?fromtag=46&lyric=1163319";}i:2;a:3:{s:5:"title";s:9:"座右铭";s:6:"singer";s:9:"吴雨霏";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C10000394aos0oNmcJ.m4a?fromtag=46&lyric=393982";}i:3;a:3:{s:5:"title";s:9:"番外篇";s:6:"singer";s:6:"武艺";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100001kzLD42Y88oA.m4a?fromtag=46&lyric=108753653";}i:4;a:3:{s:5:"title";s:9:"悬崖花";s:6:"singer";s:9:"林欣彤";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002YdqD90D7y24.m4a?fromtag=46&lyric=108536721";}i:5;a:3:{s:5:"title";s:12:"时间的错";s:6:"singer";s:9:"容祖儿";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000FbBmo2L0U4R.m4a?fromtag=46&lyric=200606586";}i:6;a:3:{s:5:"title";s:12:"幸福止痛";s:6:"singer";s:6:"侧田";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100001BtEzU0ZHRKd.m4a?fromtag=46&lyric=200097648";}i:7;a:3:{s:5:"title";s:9:"喜帖街";s:6:"singer";s:9:"谢安琪";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100002cW0Rt0E6HV0.m4a?fromtag=46&lyric=435779";}i:8;a:3:{s:5:"title";s:12:"下次爱你";s:6:"singer";s:9:"张敬轩";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000r7ckY0Fdkwx.m4a?fromtag=46&lyric=200561445";}i:9;a:3:{s:5:"title";s:15:"奇妙能力歌";s:6:"singer";s:6:"陈粒";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100004cXwmW4Hs88w.m4a?fromtag=46&lyric=101099682";}i:10;a:3:{s:5:"title";s:12:"生如夏花";s:6:"singer";s:6:"朴树";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100001NrtIJ0ylNai.m4a?fromtag=46&lyric=465340";}i:11;a:3:{s:5:"title";s:9:"去大理";s:6:"singer";s:6:"郝云";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C100002NQLBN3zC2wV.m4a?fromtag=46&lyric=7212681";}i:12;a:3:{s:5:"title";s:6:"忽然";s:6:"singer";s:6:"李志";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002cQnEN2Slcol.m4a?fromtag=46&lyric=102408826";}i:13;a:3:{s:5:"title";s:6:"借我";s:6:"singer";s:9:"谢春花";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100000H3VYO0hU0ko.m4a?fromtag=46&lyric=105917234";}i:14;a:3:{s:5:"title";s:42:"我说今晚月光那么美，你说是的";s:6:"singer";s:15:"好妹妹乐队";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C1000046UaSY1gaQjZ.m4a?fromtag=46&lyric=5205090";}i:15;a:3:{s:5:"title";s:15:"你曾是少年";s:6:"singer";s:15:"好妹妹乐队";s:5:"music";s:79:"http://ws.stream.qqmusic.qq.com/C1000014rNtB2ZgFoG.m4a?fromtag=46&lyric=5205087";}i:16;a:3:{s:5:"title";s:12:"天空之城";s:6:"singer";s:6:"李志";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100003iDFNR04D7QS.m4a?fromtag=46&lyric=102408662";}i:17;a:3:{s:5:"title";s:36:"揪心的玩笑与漫长的白日梦";s:6:"singer";s:18:"万能青年旅店";s:5:"music";s:78:"http://ws.stream.qqmusic.qq.com/C100002hsDHj4REbse.m4a?fromtag=46&lyric=769124";}i:18;a:3:{s:5:"title";s:18:"山阴路的夏天";s:6:"singer";s:6:"李志";s:5:"music";s:81:"http://ws.stream.qqmusic.qq.com/C100002zzw5e3UPCK6.m4a?fromtag=46&lyric=102409018";}}';
        return  $data;
    }
    private function qingyin(){
        $data = 'a:56:{i:0;a:3:{s:5:"title";s:33:"我可是你手中那一朵鲜花";s:6:"singer";s:15:"好妹妹乐队";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000CiFcH13wj5a.m4a?fromtag=46";}i:1;a:3:{s:5:"title";s:24:"假如时间变成哑巴";s:6:"singer";s:9:"翁大涵";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002w29zW3pI3LZ.m4a?fromtag=46";}i:2;a:3:{s:5:"title";s:21:"童年里的纸飞机";s:6:"singer";s:6:"九日";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001Vtudy3wi9Wu.m4a?fromtag=46";}i:3;a:3:{s:5:"title";s:21:"还没下雪的冬天";s:6:"singer";s:9:"王大培";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000rNkF92fzWcX.m4a?fromtag=46";}i:4;a:3:{s:5:"title";s:18:"九眼桥的姑娘";s:6:"singer";s:12:"俄木木果";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003yodbv09nhyv.m4a?fromtag=46";}i:5;a:3:{s:5:"title";s:18:"下雨天的周末";s:6:"singer";s:9:"木吉他";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002w23lE2Bahf4.m4a?fromtag=46";}i:6;a:3:{s:5:"title";s:18:"小城的每一天";s:6:"singer";s:23:"大冰的小屋·一鸣";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C1000042DVAG1zrBhG.m4a?fromtag=46";}i:7;a:3:{s:5:"title";s:18:"十点半的地铁";s:6:"singer";s:9:"刘锦泽";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001NUw6k1W9zuJ.m4a?fromtag=46";}i:8;a:3:{s:5:"title";s:18:"写给雨天的歌";s:6:"singer";s:9:"雷光夏";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001z01ZZ1q54lk.m4a?fromtag=46";}i:9;a:3:{s:5:"title";s:15:"醉问客家夜";s:6:"singer";s:9:"茉莉僧";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100004PSFFQ3UT8gF.m4a?fromtag=46";}i:10;a:3:{s:5:"title";s:15:"一树桃花开";s:6:"singer";s:6:"赵照";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C1000002MJtK2MF9uq.m4a?fromtag=46";}i:11;a:3:{s:5:"title";s:12:"就在今夜";s:6:"singer";s:6:"边远";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000fZzz43m8UJK.m4a?fromtag=46";}i:12;a:3:{s:5:"title";s:12:"当你老了";s:6:"singer";s:9:"王德顺";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002amgkW2PxNxS.m4a?fromtag=46";}i:13;a:3:{s:5:"title";s:12:"里博热索";s:6:"singer";s:9:"钟立风";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100004aLZH32mGBEx.m4a?fromtag=46";}i:14;a:3:{s:5:"title";s:12:"梦里的歌";s:6:"singer";s:6:"纣王";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000nPGjf4cTqw3.m4a?fromtag=46";}i:15;a:3:{s:5:"title";s:12:"时间里的";s:6:"singer";s:6:"马頔";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002q5G7w1bRcqk.m4a?fromtag=46";}i:16;a:3:{s:5:"title";s:23:"那么多年 (Original)";s:6:"singer";s:9:"豆子糖";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000sg8RK40iIwT.m4a?fromtag=46";}i:17;a:3:{s:5:"title";s:12:"窗外花开";s:6:"singer";s:6:"李晋";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003QImdp1vvSCW.m4a?fromtag=46";}i:18;a:3:{s:5:"title";s:12:"童年时光";s:6:"singer";s:9:"张羿凡";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100004FECyZ1jEEfM.m4a?fromtag=46";}i:19;a:3:{s:5:"title";s:12:"小峰饭店";s:6:"singer";s:6:"一三";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002LFoAG35BZU7.m4a?fromtag=46";}i:20;a:3:{s:5:"title";s:12:"春花秋开";s:6:"singer";s:6:"曹方";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100004NJljy2knUew.m4a?fromtag=46";}i:21;a:3:{s:5:"title";s:13:"人海 田野";s:6:"singer";s:9:"黄玉芹";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C1000040iWvd4Bn4QE.m4a?fromtag=46";}i:22;a:3:{s:5:"title";s:12:"坠入星空";s:6:"singer";s:9:"吕浩峰";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C1000026pEjT1SYU1c.m4a?fromtag=46";}i:23;a:3:{s:5:"title";s:12:"银河之外";s:6:"singer";s:6:"树子";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003UHFxB2HbJRz.m4a?fromtag=46";}i:24;a:3:{s:5:"title";s:12:"小兴安岭";s:6:"singer";s:6:"小猛";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003URRAz1OddKi.m4a?fromtag=46";}i:25;a:3:{s:5:"title";s:12:"星尘往事";s:6:"singer";s:23:"苏紫旭&The Paramecia";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003MgdHQ2ufkor.m4a?fromtag=46";}i:26;a:3:{s:5:"title";s:12:"且听风吟";s:6:"singer";s:6:"虞鹏";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C10000291Id54cqYwQ.m4a?fromtag=46";}i:27;a:3:{s:5:"title";s:12:"相望天涯";s:6:"singer";s:6:"丁源";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100004ZB78g3hdFti.m4a?fromtag=46";}i:28;a:3:{s:5:"title";s:16:"致爱人 (Demo)";s:6:"singer";s:9:"卢庚戌";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002mmW5g00JBoY.m4a?fromtag=46";}i:29;a:3:{s:5:"title";s:9:"红雪莲";s:6:"singer";s:6:"高樱";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002raD681j04rn.m4a?fromtag=46";}i:30;a:3:{s:5:"title";s:9:"小螺号";s:6:"singer";s:6:"李志";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001nZawy0tFaZ8.m4a?fromtag=46";}i:31;a:3:{s:5:"title";s:9:"在路上";s:6:"singer";s:6:"张希";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003RXui90sSTMP.m4a?fromtag=46";}i:32;a:3:{s:5:"title";s:9:"秀水街";s:6:"singer";s:9:"张玮玮";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002YcxRj1tFZG1.m4a?fromtag=46";}i:33;a:3:{s:5:"title";s:9:"忆旧时";s:6:"singer";s:6:"蒋明";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100004NIuF84QMqVn.m4a?fromtag=46";}i:34;a:3:{s:5:"title";s:9:"榕树花";s:6:"singer";s:6:"川子";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C1000021uJc21hOsW2.m4a?fromtag=46";}i:35;a:3:{s:5:"title";s:6:"星空";s:6:"singer";s:9:"张晏铭";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002uR5EU1qhGbD.m4a?fromtag=46";}i:36;a:3:{s:5:"title";s:6:"绽放";s:6:"singer";s:6:"李健";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000dIsXA08zTPy.m4a?fromtag=46";}i:37;a:3:{s:5:"title";s:6:"麦田";s:6:"singer";s:9:"茶季杨";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000mBd6H20cV5Z.m4a?fromtag=46";}i:38;a:3:{s:5:"title";s:6:"治疗";s:6:"singer";s:9:"黄雨篱";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000CVwxs0wcorH.m4a?fromtag=46";}i:39;a:3:{s:5:"title";s:6:"笔盒";s:6:"singer";s:6:"波昂";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001v2DpU07I2kn.m4a?fromtag=46";}i:40;a:3:{s:5:"title";s:6:"暗香";s:6:"singer";s:9:"周云蓬";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100004CczCE4Qed7C.m4a?fromtag=46";}i:41;a:3:{s:5:"title";s:6:"无画";s:6:"singer";s:27:"小娟 & 山谷里的居民";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000Um9ZT1UebjB.m4a?fromtag=46";}i:42;a:3:{s:5:"title";s:6:"有时";s:6:"singer";s:6:"郭旭";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001zzPai1X3Eul.m4a?fromtag=46";}i:43;a:3:{s:5:"title";s:6:"一人";s:6:"singer";s:9:"七修远";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003f0cgG2pw2BX.m4a?fromtag=46";}i:44;a:3:{s:5:"title";s:6:"静夜";s:6:"singer";s:9:"尧十三";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000AtF2W3noBNu.m4a?fromtag=46";}i:45;a:3:{s:5:"title";s:6:"黄昏";s:6:"singer";s:9:"吴思瑶";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002bNPcE2s3xLp.m4a?fromtag=46";}i:46;a:3:{s:5:"title";s:6:"晚风";s:6:"singer";s:9:"刘东明";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001FHYQl2bFSRN.m4a?fromtag=46";}i:47;a:3:{s:5:"title";s:6:"鱼书";s:6:"singer";s:9:"陈鸿宇";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100003Ncik13D4fW9.m4a?fromtag=46";}i:48;a:3:{s:5:"title";s:6:"蝴蝶";s:6:"singer";s:6:"小皮";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002wmo8l0C8pPG.m4a?fromtag=46";}i:49;a:3:{s:5:"title";s:6:"碌碌";s:6:"singer";s:6:"花粥";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100001OettQ0KZhoi.m4a?fromtag=46";}i:50;a:3:{s:5:"title";s:6:"风景";s:6:"singer";s:9:"李知蹊";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002DF6tO1W8tbT.m4a?fromtag=46";}i:51;a:3:{s:5:"title";s:6:"复苏";s:6:"singer";s:6:"朱七";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100002yvtBA3GVakX.m4a?fromtag=46";}i:52;a:3:{s:5:"title";s:6:"风吟";s:6:"singer";s:6:"小植";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C1000021yvuL1hPVGX.m4a?fromtag=46";}i:53;a:3:{s:5:"title";s:3:"醒";s:6:"singer";s:6:"黄婧";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C10000427Ixo1gHuu3.m4a?fromtag=46";}i:54;a:3:{s:5:"title";s:3:"岛";s:6:"singer";s:6:"椅子";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000VjWHG34Xsuk.m4a?fromtag=46";}i:55;a:3:{s:5:"title";s:3:"雾";s:6:"singer";s:9:"张小九";s:5:"music";s:65:"http://ws.stream.qqmusic.qq.com/C100000myI3Z1MuzGu.m4a?fromtag=46";}}';
        return $data;
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
    private  function my_scandir($dir)
    {
        $files = array();
        $dir_list = scandir($dir);
        foreach($dir_list as $file)
        {
            if ( $file != ".." && $file != "." )
            {
                if ( is_dir($dir . "/" . $file) )
                {
                    $files[$file] = $this->my_scandir($dir . "/" . $file);
                }
                else
                {
                    $files[] = $file;
                }
            }
        }
        return $files;
    }
    private function file_delete($file) {
        if (empty($file)) {
            return FALSE;
        }
        if (file_exists($file)) {
            @unlink($file);
        }
        if (file_exists(ATTACHMENT_ROOT . '/' . $file)) {
            @unlink(ATTACHMENT_ROOT . '/' . $file);
        }
        return TRUE;
    }
    private function delqiniu($url){
        global $_W;
        $cfg = $this->module['config'];
        //$auth = new Qiniu\Auth($remote['qiniu']['accesskey'], $remote['qiniu']['secretkey']);
        $remopic = str_replace($cfg['remote']['qiniu']['url'].'/', '', $url);
        load()->library('qiniu');
        $auth = new Qiniu\Auth($cfg['remote']['qiniu']['accesskey'], $cfg['remote']['qiniu']['secretkey']);
        $manager = new Qiniu\Storage\BucketManager($auth);
        if(is_array($remopic)){
            $manager->delete($cfg['remote']['qiniu']['bucket'], $remopic[0]);
            $this->file_delete($remopic[0]);
        }else{
            $manager->delete($cfg['remote']['qiniu']['bucket'], $remopic);
            $this->file_delete($remopic);
        }

    }
    private function  remote_skin_upload($filename,$remote) {
        global $_W;
        if (empty($remote['type'])) {
            return false;
        }
        if ($remote['type'] == '1') {
            require_once(IA_ROOT . '/framework/library/ftp/ftp.php');
            $ftp_config = array(
                'hostname' => $remote['ftp']['host'],
                'username' => $remote['ftp']['username'],
                'password' => $remote['ftp']['password'],
                'port' => $remote['ftp']['port'],
                'ssl' => $remote['ftp']['ssl'],
                'passive' => $remote['ftp']['pasv'],
                'timeout' => $remote['ftp']['timeout'],
                'rootdir' => $remote['ftp']['dir'],
            );
            $ftp = new Ftp($ftp_config);
            if (true === $ftp->connect()) {
                $response = $ftp->upload(MODULE_ROOT . '/' . $filename, $filename);                
                if (!empty($response)) {
                    return true;
                } else {
                    return error(1, '远程附件上传失败，请检查配置并重新上传');
                }
            } else {
                return error(1, '远程附件上传失败，请检查配置并重新上传');
            }
        } elseif ($remote['type'] == '2') {
            load()->library('oss');
            load()->model('attachment');
            $buckets = attachment_alioss_buctkets($remote['alioss']['key'], $remote['alioss']['secret']);
            $endpoint = 'http://'.$buckets[$remote['alioss']['bucket']]['location'].'.aliyuncs.com';
            $ossClient = new \OSS\OssClient($remote['alioss']['key'], $remote['alioss']['secret'], $endpoint);
            $ossClient->uploadFile($remote['alioss']['bucket'], $filename, MODULE_ROOT.'/'.$filename); 
            return true;
        }elseif ($remote['type'] == '3') {
            load()->library('qiniu');
            $auth = new Qiniu\Auth($remote['qiniu']['accesskey'],$remote['qiniu']['secretkey']);
            $uploadmgr = new Qiniu\Storage\UploadManager();
            $putpolicy = Qiniu\base64_urlSafeEncode(json_encode(array('scope' => $remote['qiniu']['bucket'].':'. $filename)));
            $uploadtoken = $auth->uploadToken($remote['qiniu']['bucket'], $filename, 3600, $putpolicy);
            list($ret, $err) = $uploadmgr->putFile($uploadtoken, $filename, MODULE_ROOT. '/'.$filename);            
            if ($err !== null) {
                return error(1, '远程附件上传失败，请检查配置并重新上传');
            } else {
                return true;
            }
        } elseif ($remote['type'] == '4') {
            if (!empty($remote['cos']['local'])) {
                load()->library('cos');
                qcloudcos\Cosapi :: setRegion($remote['cos']['local']);
                $uploadRet = qcloudcos\Cosapi::upload($remote['cos']['bucket'], MODULE_ROOT .$filename,'/'.$filename,'',3 * 1024 * 1024, 0);
            } else {
                load()->library('cosv3');
                $uploadRet = \Qcloud_cos\Cosapi::upload($remote['cos']['bucket'], MODULE_ROOT .$filename,'/'.$filename,'',3 * 1024 * 1024, 0);
            }
            if ($uploadRet['code'] != 0) {
                switch ($uploadRet['code']) {
                    case -62:
                        $message = '输入的appid有误';
                        break;
                    case -79:
                        $message = '输入的SecretID有误';
                        break;
                    case -97:
                        $message = '输入的SecretKEY有误';
                        break;
                    case -166:
                        $message = '输入的bucket有误';
                        break;
                }
                return error(-1, $message);
            }
        }
    }
    private function file_albumremote_upload($filename, $remote, $auto_delete_local = true)
    {
        global $_W;
        if (empty($remote['type'])) {
            return false;
        }
        if ($remote['type'] == '1') {
            require_once (IA_ROOT . '/framework/library/ftp/ftp.php');
            $ftp_config = array(
                'hostname' => $remote['ftp']['host'],
                'username' => $remote['ftp']['username'],
                'password' => $remote['ftp']['password'],
                'port' => $remote['ftp']['port'],
                'ssl' => $remote['ftp']['ssl'],
                'passive' => $remote['ftp']['pasv'],
                'timeout' => $remote['ftp']['timeout'],
                'rootdir' => $remote['ftp']['dir']
            );
            $ftp = new Ftp($ftp_config);
            if (true === $ftp->connect()) {
                $response = $ftp->upload(ATTACHMENT_ROOT . '/' . $filename, $filename);
                if ($auto_delete_local) {
                    file_delete($filename);
                }
                if (! empty($response)) {
                    return true;
                } else {
                    return error(1, '远程附件上传失败，请检查配置并重新上传');
                }
            } else {
                return error(1, '远程附件上传失败，请检查配置并重新上传');
            }
        } elseif ($remote['type'] == '2') {
            load()->library('oss');
            load()->model('attachment');
            $buckets = attachment_alioss_buctkets($remote['alioss']['key'], $remote['alioss']['secret']);
            $endpoint = 'http://' . $buckets[$remote['alioss']['bucket']]['location'] . '.aliyuncs.com';
            try {
                $ossClient = new \OSS\OssClient($remote['alioss']['key'], $remote['alioss']['secret'], $endpoint);
                $ossClient->uploadFile($remote['alioss']['bucket'], $filename, ATTACHMENT_ROOT .'/'. $filename);
            } catch (\OSS\Core\OssException $e) {
                return error(1, $e->getMessage());
            }
            if ($auto_delete_local) {
                file_delete($filename);
            }
        } elseif ($remote['type'] == '3') {
            load()->library('qiniu');
            $auth = new Qiniu\Auth($remote['qiniu']['accesskey'], $remote['qiniu']['secretkey']);
            $uploadmgr = new Qiniu\Storage\UploadManager();
            $putpolicy = Qiniu\base64_urlSafeEncode(json_encode(array(
                'scope' => $remote['qiniu']['bucket'] . ':' . $filename
            )));
            $uploadtoken = $auth->uploadToken($remote['qiniu']['bucket'], $filename, 3600, $putpolicy);
            list ($ret, $err) = $uploadmgr->putFile($uploadtoken, $filename, ATTACHMENT_ROOT . '/' . $filename);
            if ($auto_delete_local) {
                file_delete($filename);
            }
            if ($err !== null) {
                return error(1, '远程附件上传失败，请检查配置并重新上传');
            } else {
                return true;
            }
        } elseif ($remote['type'] == '4') {
            if (!empty($remote['cos']['local'])) {
                load()->library('cos');
                qcloudcos\Cosapi::setRegion($remote['cos']['local']);
                $uploadRet = qcloudcos\Cosapi::upload($remote['cos']['bucket'], ATTACHMENT_ROOT . $filename, '/' . $filename, '', 3 * 1024 * 1024, 0);
            } else {
                load()->library('cosv3');
                $uploadRet = \Qcloud_cos\Cosapi::upload($remote['cos']['bucket'], ATTACHMENT_ROOT . $filename, '/' . $filename, '', 3 * 1024 * 1024, 0);
            }
            if ($uploadRet['code'] != 0) {
                switch ($uploadRet['code']) {
                    case - 62:
                        $message = '输入的appid有误';
                        break;
                    case - 79:
                        $message = '输入的SecretID有误';
                        break;
                    case - 97:
                        $message = '输入的SecretKEY有误';
                        break;
                    case - 166:
                        $message = '输入的bucket有误';
                        break;
                }
                return error(- 1, $message);
            }
            if ($auto_delete_local) {
                file_delete($filename);
            }
        }
    }

    public function doWebUppic(){
        global $_W, $_GPC;
        load()->func('file');
        if (empty($_FILES['file']['name'])) {
            $result['message'] = '上传失败, 请选择要上传的文件！';
            die(json_encode($result));
        }
        if ($_FILES['file']['error'] != 0) {
            $result['message'] = '上传失败, 请重试.';
            die(json_encode($result));
        }
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        $size = intval($_FILES['file']['size']);
        $setting = $_W['setting']['upload']['image'];
        $setting['folder'] = "images/".$_W['uniacid'];
        $setting['folder'] .= '/hr_album/' . date('Y/m/');
        $filename = file_random_name(ATTACHMENT_ROOT . '/' . $setting['folder'], $ext);
        $file = file_upload($_FILES['file'], 'image', $setting['folder'] . $filename);
        if (is_error($file)) {
            $result['message'] = $file['message'];
            die(json_encode($result));
        }    
        $cfg = $this->module['config'];
        $pathname = $file['path'];
        if ($cfg['remote']['type']) {
            $this->file_albumremote_upload($pathname, $cfg['remote'], $auto_delete_local = true);
        }
        $ret["message"]= "图片上传成功！";
        $ret["status"] = 1;
        $ret["reurl"] = $this->imgurl().$file['path'];
        $ret["src"] = $file['path'];
        return json_encode($ret);
    }
	public function doWebMusic() {
		//这个操作被定义用来呈现 管理中心导航菜单
		global $_W, $_GPC;
		$op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
		if($_W['ispost']){
		    if($op == 'del'){
		        $id = intval($_GPC['id']);
		        $ishere = pdo_delete($this->modulename.'_music',array('uniacid' => $_W['uniacid'],'id' => $id));
		        if($ishere){
		            $result = array(
		                'result' => 1
		            );
		        }else{
		            $result = array(
		                'result' => 0
		            );
		        }
		        echo json_encode($result);
		    }elseif ($op== 'sysmusic'){
                $iscate = pdo_fetchcolumn("SELECT count(id) FROM" . tablename($this->modulename.'_mucate'). " WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                if($iscate){
                    $mid = pdo_fetchcolumn("SELECT id FROM" . tablename($this->modulename.'_mucate'). " WHERE oldtitle = :oldtitle and uniacid = :uniacid",array(':oldtitle' => '网络',':uniacid' => $_W['uniacid']));
                    $liuxing = pdo_fetchcolumn("SELECT id FROM" . tablename($this->modulename.'_mucate'). " WHERE oldtitle = :oldtitle and uniacid = :uniacid",array(':oldtitle' => '流行',':uniacid' => $_W['uniacid']));
                    $huaijiu = pdo_fetchcolumn("SELECT id FROM" . tablename($this->modulename.'_mucate'). " WHERE oldtitle = :oldtitle and uniacid = :uniacid",array(':oldtitle' => '怀旧',':uniacid' => $_W['uniacid']));
                    $qingyin = pdo_fetchcolumn("SELECT id FROM" . tablename($this->modulename.'_mucate'). " WHERE oldtitle = :oldtitle and uniacid = :uniacid",array(':oldtitle' => '纯音乐',':uniacid' => $_W['uniacid']));
                    if($mid){
                        $music = unserialize($this->wangluo());
                        for($i=0;$i<count($music);$i++){
                            $title = pdo_fetchcolumn("SELECT count(*) FROM" . tablename($this->modulename.'_music') . " WHERE title = :title and uniacid = :uniacid",array('title' => $music[$i]['title'],':uniacid' => $_W['uniacid']));
                            if(!$title){
                                $music[$i]['uniacid'] = $_W['uniacid'];
                                $music[$i]['addtime'] = TIMESTAMP;
                                $music[$i]['type'] = $mid;
                                pdo_insert($this->modulename.'_music',$music[$i]);
                            }
                        }
                    }
                    if($liuxing){
                        $music = unserialize($this->liuxing());
                        for($i=0;$i<count($music);$i++){
                            $title = pdo_fetchcolumn("SELECT count(*) FROM" . tablename($this->modulename.'_music') . " WHERE title = :title and uniacid = :uniacid",array('title' => $music[$i]['title'],':uniacid' => $_W['uniacid']));
                            if(!$title){
                                $music[$i]['uniacid'] = $_W['uniacid'];
                                $music[$i]['addtime'] = TIMESTAMP;
                                $music[$i]['type'] = $liuxing;
                                pdo_insert($this->modulename.'_music',$music[$i]);
                            }
                        }
                    }
                    if($huaijiu){
                        $music = unserialize($this->huaijiu());
                        for($i=0;$i<count($music);$i++){
                            $title = pdo_fetchcolumn("SELECT count(*) FROM" . tablename($this->modulename.'_music') . " WHERE title = :title and uniacid = :uniacid",array('title' => $music[$i]['title'],':uniacid' => $_W['uniacid']));
                            if(!$title){
                                $music[$i]['uniacid'] = $_W['uniacid'];
                                $music[$i]['addtime'] = TIMESTAMP;
                                $music[$i]['type'] = $huaijiu;
                                pdo_insert($this->modulename.'_music',$music[$i]);
                            }
                        }
                    }
                    if($qingyin){
                        $music = unserialize($this->qingyin());
                        for($i=0;$i<count($music);$i++){
                            $title = pdo_fetchcolumn("SELECT count(*) FROM" . tablename($this->modulename.'_music') . " WHERE title = :title and uniacid = :uniacid",array('title' => $music[$i]['title'],':uniacid' => $_W['uniacid']));
                            if(!$title){
                                $music[$i]['uniacid'] = $_W['uniacid'];
                                $music[$i]['addtime'] = TIMESTAMP;
                                $music[$i]['type'] = $qingyin;
                                pdo_insert($this->modulename.'_music',$music[$i]);
                            }
                        }
                    }
                    $data = array(
                        'result' => 'success'
                    );
                }else{
                    $data = array(
                        'result' => 'false'
                    );
                }

		        echo json_encode($data);
		    }elseif($op == 'delmusic'){
		        pdo_delete($this->modulename.'_music',array('uniacid' => $_W['uniacid']));
		        $data = array(
		            'result' => 'success'
		        );
		        echo json_encode($data);
		    }
		}else{
		   if($op == 'display'){
		       $cate = pdo_fetchall("SELECT id,title FROM" . tablename($this->modulename.'_mucate')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']),id);
		       $pindex = max(1, intval($_GPC['page']));
		       $psize = 15;
		       $list = pdo_fetchall("SELECT * FROM". tablename($this->modulename.'_music')." WHERE uniacid = :uniacid ORDER BY addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
		       $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_music') . " WHERE uniacid = :did",array(':did' => $_W['uniacid']));
		       $pager = pagination($total, $pindex, $psize);
		       include $this->template('music');		       
		   }elseif ($op == 'edit'){
		       $id = intval($_GPC['id']);
		       $cate = pdo_fetchall("SELECT id,title FROM" . tablename($this->modulename.'_mucate')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']),id);
		       $music = pdo_fetch("SELECT * FROM" . tablename($this->modulename.'_music') . " WHERE id = :id",array(':id' => $id));
		       include $this->template('addmusic');
		   }
		}
	}
	public function doWebMucate(){
	    global $_W, $_GPC;
	    $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
	    if($_W['ispost']){
	        if ($op == 'sysmucate'){
	            $mcate = array('网络','流行','怀旧','纯音乐','儿歌');
	            for($i=0;$i<count($mcate);$i++){
	                $ishere = pdo_fetchcolumn('SELECT id FROM'.tablename($this->modulename.'_mucate')." WHERE uniacid = :uniacid and title = :title",array(":title" => $mcate[$i],":uniacid" => $_W['uniacid']));
	                if(!$ishere){
	                    $data = array(
	                        'title' => $mcate[$i],
	                        'oldtitle' => $mcate[$i],
	                        'uniacid' => $_W['uniacid'],
	                        'addtime' => TIMESTAMP
	                    );
	                    $result = pdo_insert($this->modulename.'_mucate',$data);
	                }
	            }
	            if($result){
	                $msg = array(
	                    'result' => 'success'
	                );
	            }else{
	                $msg = array(
	                    'result' => '0'
	                );
	            }
	            echo json_encode($msg);
	        }elseif ($op == 'delmucate'){
	            $id = intval($_GPC['id']);
	            $result  =  pdo_delete($this->modulename.'_mucate',array('uniacid' => $_W['uniacid'],'id' => $id));
	            if($result){
	                $data = array(
	                    'result' => '1'
	                );
	            }else{
	                $data = array(
	                    'result' => '0'
	                );
	            }
	            echo json_encode($data);
	        }elseif ($op == 'edit'){
	            $id = intval($_GPC['id']);
	            $title = strip_gpc($_GPC['title']);
	            $displayorder = intval($_GPC['displayorder']);
	            pdo_update($this->modulename."_mucate",array('displayorder' => $displayorder,'title' => $title),array('id' => $id,'uniacid' => $_W['uniacid']));
	            $this->message('音乐分类编辑成功！',$this->createWebUrl('mucate'));
	        }else{
	            $displayorder = $_GPC['displayorder'];
	            if (!empty($displayorder)) {
	                foreach ($displayorder as $id => $dis) {
	                    if($dis){
	                        $update = array(
	                            'displayorder' => $dis
	                        );
	                        pdo_update($this->modulename.'_mucate', $update, array(
	                            'id' => $id
	                        ));
	                    }
	                }
	                $this->message('分类排序更新成功！', 'refresh', 'success');
	        }
	        }
	    }else{
	        if($op == 'display'){
	            $list = pdo_fetchall("SELECT * FROM" . tablename($this->modulename.'_mucate')." WHERE uniacid = :uniacid ORDER BY  displayorder DESC",array(":uniacid" => $_W['uniacid']));
	            include $this->template('mucate');
	        }elseif ($op == 'edit'){
	            $id = intval($_GPC['id']);
	            $item = pdo_fetch("SELECT * FROM " . tablename($this->modulename.'_mucate'). " WHERE uniacid = :uniacid and id = :id",array(':uniacid' => $_W['uniacid'],':id' => $id));
	            include $this->template('editmucate');
	        }
	    }
	    	    
	}
	public function doWebSeachmusic(){
	    global $_W, $_GPC; 
	    if($_W['ispost']){
	        $keyword = strip_gpc($_GPC['musicname']);
	        if (empty($keyword)) die('1');
            load()->func('communication');            
            $url = "https://auth-external.music.qq.com/open/fcgi-bin/fcg_weixin_music_search.fcg?remoteplace=txt.weixin.officialaccount&w={$keyword}&platform=weixin&perpage=15&curpage=1";
            $res = ihttp_get($url);
            $res = json_decode($res['content'],true);
            $list = $res['list'];
            if(empty($list)) die('1');             
            for($i=0;$i<count($list);$i++){
                $list[$i]['m4a'] = str_replace('ws.stream.qqmusic.qq.com','dl.stream.qqmusic.qq.com',$list[$i]['m4a']);
                $html .= '<tr><td class="text-left">'.$list[$i]['songname'].'</td><td class="text-left">'.$list[$i]['singername'].'</td><td><div class="link-group"><a class="plays" href="javascript:;" data-music="'.$list[$i]['m4a'].'">播放</a></div></td><td><div class="link-group"><a class="playsave" href="javascript:;" data-musicname="'.$list[$i]['songname'].'" data-singer="'.$list[$i]['singername'].'" data-music="'.$list[$i]['m4a'].'&lyric='.$list[$i]['id'].'">确定</a></div></td></tr>';
            }
            $data = array(
                'result' => 'success',
                'music' => '<table class="table we7-table table-hover vertical-middle we7-form"><col width="230px"/><col width="120px"/><col width="60px"/><col width="60px"/><tr><th class="text-left">歌曲名称</th><th class="text-left">歌手</th><th class="text-right">试听</th><th class="text-right">操作</th></tr>'.$html.'</table>'
            );
            echo json_encode($data);
	    }else{
	        include $this->template('seachmusic');
	    }
	}
	public function doWebAddmusic(){
	    global $_W, $_GPC;
	    $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
	    $cate = pdo_fetchall("SELECT * FROM" . tablename($this->modulename.'_mucate')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
	    if($_W['ispost']){
	        if($op == 'display'){
	            $id = intval($_GPC['id']);
	            $musictype = $_GPC['musictype'];
	            if(!$musictype){
	                message('请选择音乐分类！', $this->createWebUrl('music'), 'error');
	            }
	            $musictitle = $_GPC['musictitle'];
	            $musicurl = $_GPC['musicurl'];
	            $data = array(
	                'type' => $musictype,
	                'uniacid' => $_W['uniacid'],
	                'title' => $musictitle,
	                'singer' => strip_gpc($_GPC['singer']),
	                'music' => $musicurl,
	                'addtime' => TIMESTAMP
	            );
	            if($id){
	                pdo_update($this->modulename.'_music',$data,array('uniacid' => $_W['uniacid'],'id' => $id));
	                $this->message('音乐编辑成功！',$this->createWebUrl('music'));
	            }else{
	                pdo_insert($this->modulename.'_music',$data);
	                $this->message('音乐添加成功！',$this->createWebUrl('music'));
	            }
	        }
	    }else{
	        if($op == 'display'){
	            include $this->template('addmusic');
	        }
	    }
	}
	public function doWebAddmucate(){
	    global $_W, $_GPC;
	    if($_W['ispost']){
	        $mucate = $_GPC['musictitle'];
	        $displayorder = intval($_GPC['displayorder']);
	        $data = array(
	            'title' => $mucate,
	            'uniacid' => $_W['uniacid'],
	            'displayorder' => $displayorder,
	            'addtime' => TIMESTAMP
	        );
	        pdo_insert($this->modulename.'_mucate',$data);
	        $this->message('音乐分类添加成功！',$this->createWebUrl('music'));
	    }else{
	       include $this->template('addmucate');
	    }
	    
	}
	public function doWebSkin(){ 
	    global $_W, $_GPC;
	    $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
	    $cfg = $this->module['config'];
	    if($_W['ispost']){
	        if($op == 'sysskin'){
                $iscate = pdo_fetchcolumn('SELECT count(id) FROM'.tablename($this->modulename.'_skincate').' where uniacid = :uniacid',array(':uniacid' => $_W['uniacid']));
                if($iscate){
                    $skin = array(
                        array(
                            'skintitle' => '蔷薇恋',
                            'skiname' => 'qiangwei',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000003FhfU2GR1tu.m4a?fromtag=0',
                            'cname' => '爱情'
                        ),
                        array(
                            'skintitle' => '钟爱一生',
                            'skiname' => 'rose',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000KR71T0vs9Yp.m4a?fromtag=0',
                            'cname' => '爱情'
                        ),
                        array(
                            'skintitle' => '童心未泯',
                            'skiname' => 'fengche',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001McakF1axbfO.m4a?fromtag=0',
                            'cname' => '儿童'
                        ),
                        array(
                            'skintitle' => '时光放映机',
                            'skiname' => 'shiguang',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004TSZYg2HaHQi.m4a?fromtag=0',
                            'cname' => '多图'
                        ),
                        array(
                            'skintitle' => '黎明清晨',
                            'skiname' => 'liming',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001O8Fq6090GIP.m4a?fromtag=0',
                            'cname' => '多图'
                        ),
                        array(
                            'skintitle' => '冬日问候',
                            'skiname' => 'dongri',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002OrhQA0bNYFg.m4a?fromtag=0',
                            'cname' => '多图'
                        ),
                        array(
                            'skintitle' => '快乐圣诞',
                            'skiname' => 'shengdan1',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002PlIV94B0l6I.m4a?fromtag=0',
                            'cname' => '节日'
                        ),
                        array(
                            'skintitle' => '圣诞快乐',
                            'skiname' => 'shengdan2',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002lW91D2TL1UM.m4a?fromtag=0',
                            'cname' => '节日'
                        ),
                        array(
                            'skintitle' => '心说',
                            'skiname' => 'xinshuo',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000035x1uO2pRBBS.m4a?fromtag=0',
                            'cname' => '爱情'
                        ),
                        array(
                            'skintitle' => '十里桃花',
                            'skiname' => 'taohua',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001Nl0W80sBSwJ.m4a?fromtag=0',
                            'cname' => '爱情'
                        ),
                        array(
                            'skintitle' => '冰雪奇缘',
                            'skiname' => 'bingxue',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000011bjAY09MJKk.m4a?fromtag=0',
                            'cname' => '多图'
                        ),
                        array(
                            'skintitle' => '梦幻森林',
                            'skiname' => 'senlin',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000amRvH3wxv56.m4a?fromtag=0',
                            'cname' => '多图'
                        ),
                        array(
                            'skintitle' => '小雪清寒',
                            'skiname' => 'xiaoxue',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001qr2SW1q6AKQ.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '春节快乐',
                            'skiname' => 'chunjie',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001PFFK20X95aT.m4a?fromtag=0',
                            'cname' => '节日'
                        ),array(
                            'skintitle' => '春节快乐',
                            'skiname' => 'xinnian',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001PFFK20X95aT.m4a?fromtag=0',
                            'cname' => '节日'
                        ),array(
                            'skintitle' => '春暖花开',
                            'skiname' => 'hualuo',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004TXEXY2G2c7C.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '清风蝶影',
                            'skiname' => 'qingfeng',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004TXEXY2G2c7C.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '绽放青春',
                            'skiname' => 'qingchun',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000006tWxy0mUp7s.m4a?fromtag=46&lyric=4829898',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '多彩气球',
                            'skiname' => 'qiqiu',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000006tWxy0mUp7s.m4a?fromtag=46&lyric=4829898',
                            'cname' => '儿童'
                        ),array(
                            'skintitle' => '感恩有你',
                            'skiname' => 'ganen2',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002THbyZ1Efzd5.m4a?fromtag=46&lyric=107660564',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '古韵荷花',
                            'skiname' => 'guyun',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002THbyZ1Efzd5.m4a?fromtag=46&lyric=107660564',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '阳光宝贝',
                            'skiname' => 'baobei',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000021uJc21hOsW2.m4a?fromtag=46',
                            'cname' => '儿童'
                        ),array(
                            'skintitle' => '温暖时光',
                            'skiname' => 'baokan',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002THbyZ1Efzd5.m4a?fromtag=46&lyric=107660564',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '花之语',
                            'skiname' => 'hua',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004b76Fa155dXo.m4a?fromtag=46&lyric=201670058',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '大图影集',
                            'skiname' => 'datu',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004b76Fa155dXo.m4a?fromtag=46&lyric=201670058',
                            'cname' => '多图',
                            'type' => '1'
                        ),array(
                            'skintitle' => '春光无限',
                            'skiname' => 'chunguang',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002wmo8l0C8pPG.m4a?fromtag=46',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '生日快乐',
                            'skiname' => 'shengri',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000dWjyk4G5V6k.m4a?fromtag=46&lyric=2460009',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '暮色烟云',
                            'skiname' => 'yunyan',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000dWjyk4G5V6k.m4a?fromtag=46&lyric=2460009',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '玫瑰之恋',
                            'skiname' => 'ailian',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000aVpHR3FrRPY.m4a?fromtag=46&lyric=4830166',
                            'cname' => '爱情'
                        ),array(
                            'skintitle' => '美丽相约',
                            'skiname' => 'xiangyue',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000aVpHR3FrRPY.m4a?fromtag=46&lyric=4830166',
                            'cname' => '爱情'
                        ),array(
                            'skintitle' => '劳动节快乐',
                            'skiname' => 'laodong',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000Qhd4C3Hfn7t.m4a?fromtag=46&lyric=96319',
                            'cname' => '节日'
                        ),array(
                            'skintitle' => '沐浴春风',
                            'skiname' => 'chunfeng',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000024AJ1w1wl9KK.m4a?fromtag=46&lyric=5176515',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '落花春风',
                            'skiname' => 'chuntian',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000UQ9Fd3xPIHC.m4a?fromtag=46&lyric=449074',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '绿色春天',
                            'skiname' => 'green',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000UQ9Fd3xPIHC.m4a?fromtag=46&lyric=449074',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '我爱你妈妈',
                            'skiname' => 'muqin1',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000UQ9Fd3xPIHC.m4a?fromtag=46&lyric=449074',
                            'cname' => '节日'
                        ),array(
                            'skintitle' => '感恩母亲节',
                            'skiname' => 'muqin2',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100000UQ9Fd3xPIHC.m4a?fromtag=46&lyric=449074',
                            'cname' => '节日'
                        ),array(
                            'skintitle' => '环游世界',
                            'skiname' => 'huanyou',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004PD71W0q0x2K.m4a?fromtag=46&lyric=5205963',
                            'cname' => '儿童'
                        ),array(
                            'skintitle' => '自由天空',
                            'skiname' => 'ziyou',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000041EsNA30QvSR.m4a?fromtag=46&lyric=1030964',
                            'cname' => '儿童'
                        ),array(
                            'skintitle' => '带你去旅行',
                            'skiname' => 'lvxing',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100003ezWUI4SrnJl.m4a?fromtag=46&lyric=5003421',
                            'cname' => '儿童'
                        ),array(
                            'skintitle' => '陌上花开',
                            'skiname' => 'moshang',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004TFRgJ1O1PrK.m4a?fromtag=46&lyric=110211',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '清凉一夏',
                            'skiname' => 'xialiang',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004TFRgJ1O1PrK.m4a?fromtag=46&lyric=110211',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '夏天的味道',
                            'skiname' => 'summer',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004TFRgJ1O1PrK.m4a?fromtag=46&lyric=110211',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '幸福海洋',
                            'skiname' => 'haiyang',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002zU3Zk3kB3MN.m4a?fromtag=0',
                            'cname' => '儿童'
                        ),array(
                            'skintitle' => '荷塘月色',
                            'skiname' => 'hetang',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004Zeemn1ScQMX.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '缤纷夏季',
                            'skiname' => 'binfen',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004Kxue107QgYM.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '一生一世',
                            'skiname' => 'yisheng',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004gKren0UitgE.m4a?fromtag=0',
                            'cname' => '爱情'
                        ),array(
                            'skintitle' => '朝夕相伴',
                            'skiname' => 'zhaoxi',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100004HdPmN0HZipA.m4a?fromtag=0',
                            'cname' => '爱情'
                        ),array(
                            'skintitle' => '遇见秋天',
                            'skiname' => 'qiutian',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100003KtYhg4frNXC.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '落叶知秋',
                            'skiname' => 'qiusi',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100003KtYhg4frNXC.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '金秋思忆',
                            'skiname' => 'qiutian1',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C1000030moFt21TOxK.m4a?fromtag=0',
                            'cname' => '多图'
                        ),array(
                            'skintitle' => '中秋节快乐',
                            'skiname' => 'zhongqiu1',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001ESXGB3P5zAe.m4a?fromtag=0',
                            'cname' => '节日'
                        )
                    ,array(
                            'skintitle' => '故乡明',
                            'skiname' => 'zhongqiu2',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100002HuVt830ZOcB.m4a?fromtag=0',
                            'cname' => '节日'
                        )
                    ,array(
                            'skintitle' => '团圆美满',
                            'skiname' => 'zhongqiu3',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001hrxeH2H3vFN.m4a?fromtag=0',
                            'cname' => '节日'
                        )
                    ,array(
                            'skintitle' => '福禄寿',
                            'skiname' => 'zhongqiu4',
                            'music' => 'http://dl.stream.qqmusic.qq.com/C100001ESXGB3P5zAe.m4a?fromtag=0',
                            'cname' => '节日'
                        )
                    ,array(
                            'skintitle' => '国庆节快乐',
                            'skiname' => 'guoqing',
                            'music' => 'http://res2.maka.im/user/5664401/music/594065_2e9d7ab366da165a5463232945dd2207.mp3',
                            'cname' => '节日'
                        )
                    ,array(
                            'skintitle' => '欢度国庆',
                            'skiname' => 'guoqing2',
                            'music' => 'http://res2.maka.im/common/%E9%9F%B3%E4%B9%90%E7%B4%A0%E6%9D%90-0901/3-%E5%A4%A7%E6%B0%94/%E4%BC%9F%E5%A4%A7%E5%8F%B2%E8%AF%97.mp3',
                            'cname' => '节日'
                        )
                    ,array(
                            'skintitle' => '重阳节快乐',
                            'skiname' => 'chongyang',
                            'music' => 'https://res2.maka.im/user/2899768/music/547253_09d2fb1903ec534484df97bb3785f930.mp3',
                            'cname' => '节日'
                        )
                    );
                    for($i=0;$i<count($skin);$i++){
                        $ishere = pdo_fetchcolumn('SELECT id FROM'.tablename($this->modulename.'_skin')." WHERE uniacid = :uniacid and skiname = :skiname",array(":skiname" => $skin[$i]['skiname'],":uniacid" => $_W['uniacid']));
                        if(!$ishere){
                            $cid = pdo_fetchcolumn('SELECT id FROM'.tablename($this->modulename.'_skincate').' where uniacid = :uniacid and title = :title',array(':uniacid' => $_W['uniacid'],':title' => $skin[$i]['cname']));
                            if(!$cid){
                                $cid = 0;
                            }
                            $data = array(
                                'skintitle' => $skin[$i]['skintitle'],
                                'skiname' => $skin[$i]['skiname'],
                                'music' => $skin[$i]['music'],
                                'cid' => $cid,
                                'uniacid' => $_W['uniacid'],
                                'addtime' => TIMESTAMP
                            );
                            pdo_insert($this->modulename.'_skin',$data);
                            $result = pdo_insertid();
                        }
                    }
                    if($result){
                        $msg = array(
                            'result' => 'success'
                        );
                    }else{
                        $msg = array(
                            'result' => '0'
                        );
                    }
                }else{
                    $msg = array(
                        'result' => '0'
                    );
                }
	            echo json_encode($msg);
	        }elseif ($op == 'edit'){
	            $data = array(
	                'displayorder' => intval($_GPC['displayorder']),
	                'skintitle' => strip_gpc($_GPC['skintitle']),
	                'music' => $_GPC['musicurl'],
	                'cid' => intval($_GPC['cate']),
	                'ishot' => intval($_GPC['ishot']),
	                'addtime' => TIMESTAMP
	            );
	            pdo_update($this->modulename.'_skin',$data,array('uniacid' => $_W['uniacid'],'id' => intval($_GPC['id'])));
	            $this->message('模板编辑成功！',$this->createWebUrl('skin'));
	        }elseif($op == 'resskin'){
	            $result = pdo_update($this->modulename.'_skin',array('remoted' => 0),array('uniacid' => $_W['uniacid']));
	            if($result){
	                $msg = array(
	                    'result' => 'success'
	                );
	            }else{
	                $msg = array(
	                    'result' => '0'
	                );
	            }
	            echo json_encode($msg);
	        }elseif($op == 'delskin'){
                $id = $_GPC['id'];
                pdo_delete($this->modulename.'_skin',array('id' => $id,'uniacid' => $_W['uniacid']));
                $msg = array(
                    'result' => 1
                );
                echo json_encode($msg);
            }
	    }else{
	        if($op == 'display'){
	            $cate = pdo_fetchall("SELECT id,title FROM" . tablename($this->modulename.'_skincate')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']),id);
	            $pindex = max(1, intval($_GPC['page']));
	            $psize = 15;	            
	            $list = pdo_fetchall("SELECT * FROM". tablename($this->modulename.'_skin')." WHERE uniacid = :uniacid ORDER BY addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
	            $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_skin') . " WHERE uniacid = :did",array(':did' => $_W['uniacid']));
	            $pager = pagination($total, $pindex, $psize);
	            include $this->template('skin');
	        }elseif($op == 'edit'){
	            $id = intval($_GPC['id']);
	            $item = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_skin'). " WHERE uniacid = :uniacid and id = :id",array(':uniacid' => $_W['uniacid'],':id' => $id));
	            $cate = pdo_fetchall("SELECT id,title FROM" . tablename($this->modulename.'_skincate')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']),id);
	            include $this->template('editskin');
	        }
	    }	    
	}
	public function doWebSkincate(){
	    global $_W, $_GPC;
	    $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
	    if($_W['ispost']){
	        if($op == 'syscate'){
	            $skinarr = array('爱情','儿童','节日','多图');
	            for($i=0;$i<count($skinarr);$i++){
	                $ishere = pdo_fetchcolumn('SELECT id FROM'.tablename($this->modulename.'_skincate')." WHERE uniacid = :uniacid and title = :title",array(":title" => $skinarr[$i],":uniacid" => $_W['uniacid']));
	                if(!$ishere){
	                    $data = array(
	                        'title' => $skinarr[$i],
	                        'uniacid' => $_W['uniacid'],
	                        'addtime' => TIMESTAMP
	                    );
	                    $result = pdo_insert($this->modulename.'_skincate',$data);
	                }
	            }
	            if($result){
	                $msg = array(
	                    'result' => 'success'
	                );
	            }else{
	                $msg = array(
	                    'result' => '0'
	                );
	            }
	            echo json_encode($msg);
	        }elseif ($op == 'edit'){
	            $id = intval($_GPC['id']);
	            $title = strip_gpc($_GPC['title']);
	            $displayorder = intval($_GPC['displayorder']);
	            pdo_update($this->modulename."_skincate",array('displayorder' => $displayorder,'title' => $title),array('id' => $id,'uniacid' => $_W['uniacid']));
	            $this->message('模板分类编辑成功！',$this->createWebUrl('skincate'));
	        }else{
	            $displayorder = $_GPC['displayorder'];
	            if (!empty($displayorder)) {
	                foreach ($displayorder as $id => $dis) {
	                    if($dis){
	                        $update = array(
	                            'displayorder' => $dis
	                        );
	                        pdo_update($this->modulename.'_skincate', $update, array(
	                            'id' => $id
	                        ));
	                    }
	                }
	                $this->message('分类排序更新成功！', 'refresh', 'success');
	            }
	        }
	    }else{
	        if($op == 'display'){
	            $list = pdo_fetchall("SELECT * FROM" . tablename($this->modulename.'_skincate')." WHERE uniacid = :uniacid ORDER BY  displayorder DESC",array(":uniacid" => $_W['uniacid']));
	            include $this->template('skincate');
	        }elseif($op == 'edit'){
	            $id = intval($_GPC['id']);
	            $item = pdo_fetch("SELECT * FROM " . tablename($this->modulename.'_skincate'). " WHERE uniacid = :uniacid and id = :id",array(':uniacid' => $_W['uniacid'],':id' => $id));
	            include $this->template('editskincate');
	        }
	        
	    }
	}
public function doWebuser(){
        global $_W, $_GPC;
        $op = $_GPC['op'];
        if($_W['ispost']){
            if($op == 'status'){
                $status = intval($_GPC['status']);
                $id = intval($_GPC['uid']);
                $status = $status ? 0 : 1;
                $result = pdo_update($this->modulename.'_user',array('status' => $status),array('id' => $id));
                $data = array(
                    'result' => $result
                );
                echo json_encode($data);
            }
            elseif($op == 'deluser'){
              $openid = $_GPC['id'];
              pdo_delete($this->modulename.'_data',array('openid' => $openid,'uniacid' => $_W['uniacid']));
              $result = pdo_delete($this->modulename.'_user',array('openid' => $openid,'uniacid' => $_W['uniacid']));
              if($result){
                  $data = array(
                      'result' => $result
                  );
                  echo json_encode($data);
              }
            }
            elseif($op == 'keyword'){
                $keyword = $_GPC['keyword'];
                $list = pdo_fetchall("SELECT id,openid,nickname,avatar,addtime,fee,status FROM". tablename($this->modulename.'_user')."  WHERE uniacid = :uniacid and nickname LIKE :keyword order by addtime DESC",array(':keyword'=>'%'.$keyword.'%',':uniacid' => $_W['uniacid']));
                if($list){
                    for($i=0;$i<count($list);$i++){
                        $list[$i]['totalcard'] = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_data') . " WHERE uniacid = :did and openid = :openid",array(':openid'=>$list[$i]['openid'],':did' => $_W['uniacid']));
                        $deluser = "'".$list[$i]['openid']."','".$list[$i]['id']."'";
                        $statuser = "'".$list[$i]['id']."','".$list[$i]['status']."'";
                        $text = $list[$i]['status'] ? '禁止' : '正常';
                        $html .= '<tr id="user_'.$list[$i]['id'].'"><td><span>'.$list[$i]['id'].'</span></td><td><span>'.$list[$i]['nickname'].'</span></td><td><span><img src="'.$list[$i]['avatar'].'" style="border-radius:100%;width:25px;height:25px"></span></td><td>'.$list[$i]['fee'].' 元</td><td><button class="layui-btn layui-btn-small dostatus" data-uid="'.$list[$i]['id'].'" data-status="'.$list[$i]['status'].'" onclick="dostatus('.$statuser.')">'.$text.'</button></td><td class="">'. date("Y-m-d H:s",$list[$i]['addtime']).'</td><td><div class="layui-btn-group"><a class="layui-btn" href="'.$_W['siteroot'].'web/index.php?c=site&a=entry&do=list&m=hr_album&mid='.$list[$i]['openid'].'">相册('.$list[$i]['totalcard'].')</a> <button class="layui-btn layui-btn-danger" data-id="'.$list[$i]['openid'].'"onclick="deluser('.$deluser.')">删除用户</button><button class="layui-btn edituser" data-id="'.$list[$i]['id'].'">修改</button></div></td></tr>';
                    }
                }
                $data = array(
                    'result' =>  true,
                    'html' => $html
                );
                echo json_encode($data);
            }
            elseif($op == 'edit'){
                $data = array(
                    'nickname' => $_GPC['nickname'],
                    'status' => $_GPC['status'],
                    'fee' => $_GPC['fee']
                );
                pdo_update($this->modulename.'_user',$data,array('id' => $_GPC['id'],'uniacid' => $_W['uniacid']));
                $this->message('编辑用户成功！', 'refresh', 'success');
            }elseif($op == 'lahei'){
                $id = $_GPC['id'];
                pdo_update($this->modulename.'_user',array('status' => 0),array('id' => $id,'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 'success'
                );
                echo json_encode($data);
            }
        }else{
            if($op == 'edit'){
                $id = $_GPC['id'];
                $item = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_user')." WHERE uniacid = :uniacid and id = :id",array(':uniacid' => $_W['uniacid'],'id' => $id));
                include $this->template('edituser');
            }elseif($op == 'deluserlist'){
                $list = pdo_fetchall("SELECT * FROM".tablename($this->modulename.'_user')." WHERE uniacid = :uniacid and status = 1",array(':uniacid' => $_W['uniacid']));
                include $this->template('deluserlist');
            }else{
                $pindex = max(1, intval($_GPC['page']));
                $psize = 15;
                $list = pdo_fetchall("SELECT id,openid,nickname,avatar,addtime,status,fee FROM". tablename($this->modulename.'_user')."  WHERE uniacid = :uniacid order by addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
                if($list){
                    for($i=0;$i<count($list);$i++){
                        $list[$i]['totalcard'] = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_data') . " WHERE uniacid = :did and openid = :openid",array(':openid'=>$list[$i]['openid'],':did' => $_W['uniacid']));
                    }
                }
                $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_user') . " WHERE uniacid = :did",array(':did' => $_W['uniacid']));
                $pager = pagination($total, $pindex, $psize);
                include $this->template('user');
            }
            
        }
    }
    public function doWebShowpic(){
        global $_W, $_GPC;
        if($_W['ispost']){
            $id = intval($_GPC['id']);
            $pics = pdo_fetchcolumn("SELECT content FROM".tablename($this->modulename.'_data') . " WHERE id = :id and uniacid = :uniacid ",array(':id' => $id,':uniacid' => $_W['uniacid']));
            $thumb = unserialize($pics);
            for($j=0;$j<count($thumb);$j++){
                $data[$j] = array(
                    "alt"=>'',
                    "pid"=>$j, //图片id
                    "src"=> $this->imgurl().trim($thumb[$j]['pics']),
                    "thumb"=>'' //缩略图地址
                );
            }
            $json = array(
                "title"=>"", //相册标题
                "id"=>$id, //相册id
                "start"=>0, //初始显示的图片序号，默认0
                'data' => $data
            );
            echo json_encode($json);
        }
    }
	public  function doWebList(){
	    global $_W, $_GPC;
	    $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        $cfg = $this->module['config'];
	    if($_W['ispost']){
	        if($op == 'delpic'){ 
	            $id = intval($_GPC['pid']);
	            $picurl = strip_gpc($_GPC['src']);
	            if($cfg['remote']['type'] == '3'){
                    $this->delqiniu($picurl);
                }
	            $pics = pdo_fetchcolumn("SELECT content FROM".tablename($this->modulename.'_data') . " WHERE id = :id and uniacid = :uniacid ",array(':id' => $id,':uniacid' => $_W['uniacid']));
	            $pics = unserialize($pics);
	            for($i=0;$i<count($pics);$i++){
	                if(strstr($picurl, $pics[$i]['pics'])){
	                    array_splice($pics,$i,1);
	                }
	            }
	            $pics = serialize($pics);
	            pdo_update($this->modulename."_data",array('content' => $pics),array('id' => $id));
	            $res = array(
	                'result' => 'success'
	            );
	            echo json_encode($res);
	        }elseif ($op == 'keyword'){
                $keyword = strip_gpc($_GPC['keyword']);
                $list = pdo_fetchall("SELECT id,openid,title,content,isverify,click,share,best,addtime FROM". tablename($this->modulename.'_data')."  WHERE uniacid = :uniacid and title LIKE :keyword order by addtime DESC",array(':uniacid' => $_W['uniacid'],':keyword' => '%'.$keyword.'%'));
                for($i=0;$i<count($list);$i++){
                    $list[$i]['pics'] = unserialize($list[$i]['content']);
                    if($list[$i]['pics'][0]){
                        $picsed[$i] .= '<img src="'.$this->imgurl().$list[$i]['pics'][0]['pics'].'" style="border-radius:5px;margin-right:5px;width:30px;height:30px">';
                    }
                    if($list[$i]['pics'][1]){
                        $picsed[$i] .= '<img src="'.$this->imgurl().$list[$i]['pics'][1]['pics'].'" style="border-radius:5px;margin-right:5px;width:30px;height:30px">';
                    }
                    if($list[$i]['pics'][2]){
                        $picsed[$i] .= '<img src="'.$this->imgurl().$list[$i]['pics'][2]['pics'].'" style="border-radius:5px;margin-right:5px;width:30px;height:30px">';
                    }
                    $html .= '<tr><td><span>'.$list[$i]['id'].'</span></td><td><a href="'.$_W['siteroot'].'web/index.php?c=site&a=entry&do=list&m=hr_album&mid='.$list[$i]['openid'].'"><img src="'. $list[$i]['avatar'].'" style="width:25px;height:25px">'.$list[$i]['nickname'].'</a></td><td><span>'.$list[$i]['click'].'</span></td><td><span>'.$list[$i]['share'].'</span></td><td><span>'.$list[$i]['best'].'</span></td><td class="reviewpic" data-id="'.$list[$i]['id'].'"><span>'.$picsed[$i].'</span></td><td><span>'.$list[$i]['title'].'</span></td><td class="">'.date("Y-m-d H:s",$list[$i]['addtime']).'</td><td><div class="layui-btn-group"> <button class="layui-btn layui-btn-danger delpic" data-id="'.$list[$i]['id'].'">删除</button></div></td></tr>';
                }
                $data = array(
                    'result' => 1,
                    'html' => $html
                );
                echo json_encode($data);
            }elseif($op == 'shenhe'){
	           $id = $_GPC['id'];
	           $isshow = $_GPC['val'];
	           pdo_update($this->modulename.'_data',array('isshow' => $isshow),array('id' => $id,'uniacid' => $_W['uniacid']));
	           $data = array(
	               'result' =>1
               );
	           exit(json_encode($data));
	        }
            else{
                $id = intval($_GPC['id']);
                $rs = pdo_delete($this->modulename.'_data',array('id' => $id,'uniacid' => $_W['uniacid']));
                if($rs){
                    $data = array(
                        'result' => 1,
                    );
                }else{
                    $data = array(
                        'result' => 0,
                    );
                }
                echo json_encode($data);
            }
	    }else{
	        $pindex = max(1, intval($_GPC['page']));
	        $psize = 15;
	        $openid = $_GPC['mid'];
	        $cfg = $this->module['config'];
	        $verify = $cfg['verify'];
	        $isshare = $cfg['ishare'];
	        if($openid){
	            $list = pdo_fetchall("SELECT id,openid,title,content,isshow,isverify,click,share,best,addtime FROM". tablename($this->modulename.'_data')."  WHERE uniacid = :uniacid and openid = :openid order by addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid'],':openid' => $openid));
	            $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_data') . " WHERE uniacid = :did and openid = :openid",array(':did' => $_W['uniacid'],':openid' => $openid));
	        }else{
	            $list = pdo_fetchall("SELECT * FROM". tablename($this->modulename.'_data')." WHERE uniacid = :uniacid order by addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
	            $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_data') . " WHERE uniacid = :did",array(':did' => $_W['uniacid']));
	        }
	        
	        for($i=0;$i<count($list);$i++){	           
	            $thumb = unserialize($list[$i]['content']);
	            for($j=0;$j<count($thumb);$j++){
	                $list[$i]['piced'][$j] = $this->imgurl().trim($thumb[$j]['pics']);
	            }
	             
	        }
	        $pager = pagination($total, $pindex, $psize);
	        include $this->template('list');
	    }
	}
    public function doWebPhotos(){
        global $_W, $_GPC;
        $imgurl = $this->imgurl();
        $pindex = max(1, intval($_GPC['page']));
        $psize = 10;
        $list = pdo_fetchall("SELECT * FROM". tablename($this->modulename.'_data')." WHERE uniacid = :uniacid ORDER BY addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
        $num = 0;
        for($i=0;$i<count($list);$i++){
            $thumb = unserialize($list[$i]['content']);
            for($j=0;$j<count($thumb);$j++){
                $thumbs[$num]['pid'] = $list[$i][id];
                $thumbs[$num]['addtime'] = $list[$i]['addtime'];
                $thumbs[$num]['pics'] = $imgurl.trim($thumb[$j]['pics']);
                $num++;
            }
             
        }
        $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_data') . " WHERE uniacid = :did",array(':did' => $_W['uniacid']));
        $pager = pagination($total, $pindex, $psize);
        include $this->template('photos');
    }    
    public function  doWebDownskin(){
        global $_W,$_GPC;
        if($_W['ispost']){
            $url = 'http://update.lz6.xin/skinxcx.zip';
            $path = MODULE_ROOT.'/public/zip/skinxcx.zip';
            $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $dzip=curl_exec($ch);
            curl_close($ch);
            $fp2=@fopen($path,'wb');
            fwrite($fp2,$dzip);
            fclose($fp2);
            $zip = new ZipArchive;
            $res = $zip->open($path);
            if ($res === TRUE) {
                $zip->extractTo(MODULE_ROOT.'/public/zip/');
                $zip->close();
                include_once 'public/fileutil.php';
                $result = FileUtil::moveDir(MODULE_ROOT.'/public/zip/skinxcx/',MODULE_ROOT.'/skin',true);
            }
            if($result){
                unlink($path);
                $data = array(
                    'result' => 'success'
                );
            }else{
                $data = array(
                    'result' => 'error'
                );
            }
            echo json_encode($data);
        }else{
            include $this->template('downskin');
        }
    }
    public function doWebUpskin(){
        global $_W,$_GPC;
        $cfg = $this->module['config'];
        $skin = $_GPC['skiname'];
        $id = $_GPC['id'];
        $dir= MODULE_ROOT.'/skin/'.$skin;
        $result = $this->my_scandir($dir);
        if($cfg['remote']['type']){
            for($i=0;$i<count($result);$i++){
                $filename = 'skin/'.$skin.'/'.$result[$i];
                $rs = $this->remote_skin_upload($filename, $cfg['remote']);
            }
        }
        if($rs){
            pdo_update($this->modulename.'_skin',array('remoted' => 1),array('uniacid' => $_W['uniacid'],'id' => $id));
            $data = array(
                'result' => 'success'
            );
        }else{
            $data = array(
                'result' => 'error'
            );
        }
        echo json_encode($data);       
    }
    public function  doWebIsharedo(){
        global $_W,$_GPC;
        if($_W['ispost']){
             $id = intval($_GPC['id']);
             $result = pdo_update($this->modulename.'_data',array('isshow' => 1),array('id' => $id,'uniacid' => $_W['uniacid']));
             if($result){
                 pdo_delete($this->modulename.'_review',array('id' => $id));
             }
             $data = array(
                 'result' => 1
             );
             echo json_encode($data);             
        }else{
            $pindex = max(1, intval($_GPC['page']));
            $psize = 20;
            $list = pdo_fetchall("SELECT b.id,b.openid,b.title,b.content,b.click,b.share,b.addtime times,b.nickname,b.avatar,a.addtime FROM". tablename($this->modulename.'_review')." a INNER JOIN " . tablename($this->modulename.'_data')." b ON a.id = b.id WHERE a.uniacid = :uniacid ORDER BY a.addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
            $total = pdo_fetchcolumn("SELECT count(*) FROM".tablename($this->modulename.'_review')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
            $pager = pagination($total, $pindex, $psize);
            for($i=0;$i<count($list);$i++){
	            $thumb = unserialize($list[$i]['content']);
	            for($j=0;$j<count($thumb);$j++){
	                $list[$i]['piced'][$j] = $this->imgurl().trim($thumb[$j]['pics']);
	            }
	             
	        }
            include $this->template('isharedo');
        }
    }
    public function doWebAds(){
        global $_W,$_GPC;
        $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        $imgurl = $this->imgurl();
        if($_W['ispost']){
            if($op == 'add'){
                $id = intval($_GPC['id']);
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'displayorder' => $_GPC['displayorder'],
                    'title' => $_GPC['title'],
                    'thumb' => $_GPC['thumb'],                    
                    'type' => $_GPC['type'],
                    'appid' => $_GPC['appid'], 
                    'path' => $_GPC['path']
                );
                if($id){
                    pdo_update($this->modulename.'_ads',$data,array('id' => $id,'uniacid' => $_W['uniacid']));
                    $this->message('广告编辑成功！',$this->createWebUrl('ads'));
                }else{
                    pdo_insert($this->modulename.'_ads',$data);
                    $this->message('广告添加成功！',$this->createWebUrl('ads'));
                }
            }elseif ($op == 'del'){
                $id = $_GPC['id'];
                pdo_delete($this->modulename.'_ads',array('id' => $id,'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 1
                );
                return json_encode($data);
            }else{
                $displayorder = $_GPC['displayorder'];
                if (!empty($displayorder)) {
                    foreach ($displayorder as $id => $dis) {
                        if($dis){
                            $update = array(
                                'displayorder' => $dis
                            );
                            pdo_update($this->modulename.'_ads', $update, array(
                                'id' => $id
                            ));
                        }
                    }
                    $this->message('分类排序更新成功！', 'refresh', 'success');
                }
            }
        }else{
            if($op == 'add'){
                $id = intval($_GPC['id']);
                if($id){
                    $item = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_ads').' WHERE uniacid = :uniacid and id = :id',array(':uniacid' => $_W['uniacid'],':id' => $id));
                }                
                include $this->template('addads');
            }else{
                $list = pdo_fetchall("SELECT * FROM".tablename($this->modulename.'_ads')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                include $this->template('ads');
            }
        }
    }
    public function doWebCostdata(){
        global $_W,$_GPC;
        $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        if($_W['ispost']){
            if($op=='setpay'){
                $id = $_GPC['id'];
                $uniacid=$_W['uniacid'];
                $cert_path = ATTACHMENT_ROOT . 'botcert/';
                if (!file_exists($cert_path)){ mkdir ($cert_path);}//创建证书文件夹                
                if(!empty($_GPC['cert'])) {
                    $content=$_GPC['cert'];//file_get_contents($cert_path . 'apiclient_cert.pem.' . $uniacid);
                    $ret = file_put_contents($cert_path . 'apiclient_cert.pem.' . $uniacid, trim($content));
                    $b = $b && $ret;
                }
                if(!empty($_GPC['key'])) {
                    $content=$_GPC['key'];//file_get_contents($cert_path . 'apiclient_key.pem.' . $uniacid);
                    $ret = file_put_contents($cert_path . 'apiclient_key.pem.' . $uniacid, trim($content));
                    $b = $b && $ret;
                }
                /*if(!empty($_GPC['ca'])) {
                    $content=$_GPC['ca'];//file_get_contents($cert_path . 'rootca.pem.' . $uniacid);
                    $ret = file_put_contents($cert_path . 'rootca.pem.' . $uniacid, trim($content));
                    $b = $b && $ret;
                }*/
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'leastmon' => intval($_GPC['leastmon']),
                    'service' => intval($_GPC['service']),
                    'addtime' => TIMESTAMP
                );
                if($id){
                    pdo_update($this->modulename.'_paydata',$data,array('uniacid' => $_W['uniacid']));
                    $this->message('提现设置更新成功！', 'refresh', 'success');
                }else{
                    pdo_insert($this->modulename.'_paydata',$data);
                    $this->message('提现设置添加成功！', 'refresh', 'success');
                }
            }elseif($op == 'monum'){
                $id = $_GPC['id'];
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'content' => serialize($_GPC['content']),
                    'addtime' => TIMESTAMP
                );
                if($id){
                    pdo_update($this->modulename.'_paydata',$data,array('uniacid' => $_W['uniacid']));
                    $this->message('红包金额更新成功！', 'refresh', 'success');
                }else{
                    pdo_insert($this->modulename.'_paydata',$data);
                    $this->message('红包金额添加成功！', 'refresh', 'success');
                }
            }elseif ($op == 'cash'){
                $id = intval($_GPC['id']);
                $service = pdo_fetchcolumn("SELECT service FROM".tablename($this->modulename.'_paydata')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $cash = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_cashpay')." WHERE uniacid = :uniacid and id = :id",array("id" => $id,":uniacid" => $_W['uniacid']));      
                $realmoney = $cash['rcost']; 
                if($realmoney < 1){
                    $realmoney = 1;
                }
                $openid = $cash['openid']; 
                $mhid = $_W['account']['setting']['payment']['wechat']['mchid'];                
                if(!$mhid){
                    $this->message('请先设置商户信息！', 'refresh', 'error');
                    exit();
                }
                //$res =  $this->payWeixin($openid,$realmoney);
                $result = $this->payWeixin($openid, $realmoney, $mhid);
                if($result == 'success'){
                    pdo_update($this->modulename.'_cashpay',array('status' => 1),array('uniacid' => $_W['uniacid'],'id' => $id));
                    $data = array(
                        'result' => $result
                    );
                }else{
                    $data = array(
                        'result' => $result
                    );
                }
                return json_encode($data);
            }elseif ($op == 'delcash'){
                pdo_delete($this->modulename.'_cashpay',array('id' => $_GPC['id'],'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 1
                );
                return json_encode($data);
            }elseif($op == 'lahei'){
                $openid = $_GPC['openid'];
                $id = $_GPC['id'];
                pdo_update($this->modulename.'_user',array('status' => 1),array('openid' => $openid,'uniacid' => $_W['uniacid']));
                pdo_update($this->modulename.'_cashpay',array('status' => 2),array('openid' => $openid,'status' => 0));
                $data = array(
                    'result' => 'success'
                );
                return json_encode($data);
            }elseif ($op == 'huifu'){
                $openid = $_GPC['openid'];
                $id = $_GPC['id'];
                pdo_update($this->modulename.'_user',array('status' => 0),array('openid' => $openid,'uniacid' => $_W['uniacid']));
                pdo_update($this->modulename.'_cashpay',array('status' => 0),array('openid' => $openid,'id' => $id));
                $data = array(
                    'result' => 'success'
                );
                return json_encode($data); 
            }
        }else{
            if($op == 'display'){
                $cost = pdo_fetch("SELECT SUM(rcost) as rcosted,SUM(cost) as costed FROM".tablename($this->modulename.'_cashpay')." WHERE uniacid = :uniacid and status = 1",array(':uniacid' => $_W['uniacid']));
                $icost = pdo_fetch("SELECT SUM(rcost) as nonecost FROM".tablename($this->modulename.'_cashpay')." WHERE uniacid = :uniacid and status = 0",array(':uniacid' => $_W['uniacid']));
                $service = pdo_fetchcolumn("SELECT service FROM".tablename($this->modulename.'_paydata')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $pindex = max(1, intval($_GPC['page']));
                $psize = 10;
                $list = pdo_fetchall("SELECT a.id,a.nickname,a.openid,a.avatar,a.rcost,a.cost,a.addtime,a.status,b.fee FROM".tablename($this->modulename.'_cashpay')." a INNER JOIN ".tablename($this->modulename.'_user')." b ON b.openid = a.openid WHERE a.uniacid = :uniacid and a.status != 2 ORDER BY a.addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(":uniacid" => $_W['uniacid']));
                $total = pdo_fetchcolumn("SELECT count(*) FROM".tablename($this->modulename.'_cashpay')." WHERE uniacid = :uniacid and status != 2",array(':uniacid' => $_W['uniacid']));
                $pager = pagination($total, $pindex, $psize);
                include $this->template('costdata');
            }elseif($op == 'setpay'){
                $item = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_paydata')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                include $this->template('setpay');
            }elseif($op == 'monum'){
                $item = pdo_fetch("SELECT id,content FROM".tablename($this->modulename.'_paydata')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $num = unserialize($item['content']);
                include $this->template('monum');
            }elseif($op == 'mingxi'){
                $openid = $_GPC['openid'];
                $id = $_GPC['id'];
                $list = pdo_fetchall("SELECT * FROM".tablename($this->modulename.'_paylog')." WHERE tid = :openid and uniacid = :uniacid order by addtime desc",array(':openid' => $openid,':uniacid' => $_W['uniacid']));
                include $this->template('mingxi');
            }elseif ($op == 'weigui'){
                $service = pdo_fetchcolumn("SELECT service FROM".tablename($this->modulename.'_paydata')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $pindex = max(1, intval($_GPC['page']));
                $psize = 20;
                $list = pdo_fetchall("SELECT a.id,a.openid,a.nickname,a.avatar,a.rcost,a.cost,a.status,a.addtime,b.fee FROM".tablename($this->modulename.'_cashpay')." a  INNER JOIN ".tablename($this->modulename.'_user')." b ON b.openid = a.openid WHERE a.uniacid = :uniacid and a.status = 2 ORDER BY a.addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(":uniacid" => $_W['uniacid']));
                $total = pdo_fetchcolumn("SELECT count(*) FROM".tablename($this->modulename.'_cashpay')." WHERE uniacid = :uniacid and status = 2",array(':uniacid' => $_W['uniacid']));
                $pager = pagination($total, $pindex, $psize);
                include $this->template('weigui');
            }elseif($op == 'paylog'){
                $pindex = max(1, intval($_GPC['page']));
                $psize = 30;
                $list = pdo_fetchall("SELECT * FROM".tablename($this->modulename.'_paylog')."  WHERE uniacid = :uniacid  ORDER BY addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(":uniacid" => $_W['uniacid']));
                $total = pdo_fetchcolumn("SELECT count(*) FROM".tablename($this->modulename.'_paylog')." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $pager = pagination($total, $pindex, $psize);
                include $this->template('paylog');
            }
        }        
    }
    /*提现支付*/
    function _isPrivate($ip) {
        $i = explode('.', $ip);
        if ($i[0] == 10) return true;
        if ($i[0] == 172 && $i[1] > 15 && $i[1] < 32) return true;
        if ($i[0] == 127 && $i[1] == 0) return true;
        if ($i[0] == 192 && $i[1] == 168) return true;
        return false;
    }
    function get_ip(){
        if(isset($_SERVER)){
            if($_SERVER['SERVER_ADDR']){
                $server_ip=$_SERVER['SERVER_ADDR'];
            }
        }else{
            $server_ip = getenv('SERVER_ADDR');
        }
        if($this->_isPrivate($server_ip)||empty($server_ip)){

            $host=$_SERVER['HTTP_HOST'];
            $arr = explode('.',$host);
            if(count($arr)==3){
                $host=$arr[1].".".$arr[2];
            }
            $set["from_host"]=$host;
            $server_ip = gethostbyname($_SERVER["HTTP_HOST"]);
        }
        return $server_ip;
    }
    function payWeixin($openid,$money,$mchid){
        global $_GPC, $_W;
        $uniacid=$_W['uniaccount']['uniacid'];
        //测试
        $wxconfig=$this->get_wxconfig_admin($mchid);
        $settings["appid"]=$wxconfig['appid'];
        $settings["appsecret"]=$wxconfig['appsecret'];
        $settings["mchid"]=$wxconfig['mchid'];
        $settings["uniacid"]=$_W['uniaccount']['uniacid'];
        $settings['password']=$wxconfig['password'];
        $settings['tj_amount']=intval($money*100);//1*100; //这里要转换成分
        $toUser=$openid;//openid
        $settings['ip']=$wxconfig['ip'];
        $settings['password']=$wxconfig['password'];
        $result=$this->sendhb($settings,$toUser);
        return $result;
    }
    function get_wxconfig_admin($mchid=""){
        global $_GPC, $_W;
        $uniacid=$_W['uniaccount']['uniacid'];
        $setting = uni_setting($uniacid, array('payment', 'recharge'));
        $pay = $setting['payment'];
        $wxconfig['appid']=trim($_W['uniaccount']['key']);
        $wxconfig['appsecret']=trim($_W['uniaccount']['secret']);
        $wxconfig['mchid']=trim($mchid);
        $wxconfig['ip']=$this->get_ip();//服务器IP
        $wxconfig['password']=$pay['wechat']['signkey'];
        //var_dump($wxconfig);
        return $wxconfig;
    }
    /*
     * 企业微信打款给微信用户
     */
    function sendhb($settings,$toUser){
        global $_GPC, $_W;
        define('MB_ROOT', IA_ROOT . '/attachment/botcert');//定义的微信支付证书路径
        load()->func('communication');
        if (empty($settings['tj_amount'])){
            return;
        }
        $amount=$settings['tj_amount'];
        $url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers';
        $pars = array();
        $pars['mch_appid'] =$settings['appid'];
        $pars['mchid'] = $settings['mchid'];
        $pars['nonce_str'] = random(32);
        $pars['partner_trade_no'] = random(10). date('Ymd') . random(3);
        $pars['openid'] =$toUser;
        $pars['check_name'] = "NO_CHECK";
        $pars['amount'] =$amount;
        $pars['desc'] = "提现";
        $pars['spbill_create_ip'] =$settings['ip'];
        ksort($pars, SORT_STRING);
        $string1 = '';
        foreach($pars as $k => $v) {
            $string1 .= "{$k}={$v}&";
        }
        $string1 .= "key={$settings['password']}";
        $pars['sign'] = strtoupper(md5($string1));
        $xml = array2xml($pars);
        $extras = array();
        if(!empty($settings["uniacid"])){
            //$extras['CURLOPT_CAINFO'] = MB_ROOT . '/rootca.pem.'.$settings["uniacid"];
            $extras['CURLOPT_SSLCERT'] = MB_ROOT . '/apiclient_cert.pem.'.$settings["uniacid"];
            $extras['CURLOPT_SSLKEY'] = MB_ROOT . '/apiclient_key.pem.'.$settings["uniacid"];
        }
        $procResult = null;
        $resp = ihttp_request($url, $xml, $extras);
        if(is_error($resp)){
            $procResult = $resp;
        } else {
            $xml = '<?xml version="1.0" encoding="utf-8"?>' . $resp['content'];
            $dom = new DOMDocument();
            if($dom->loadXML($xml)) {
                $xpath = new DOMXPath($dom);
                $code = $xpath->evaluate('string(//xml/return_code)');
                $ret = $xpath->evaluate('string(//xml/result_code)');
                if(strtolower($code) == 'success' && strtolower($ret) == 'success') {
                    $procResult = 'success';
                } else {
                    $error = $xpath->evaluate('string(//xml/err_code_des)');
                    $procResult = $error;
                }
            } else {
                $procResult = false;
            }

            //file_put_contents(MB_ROOT . '/11.txt',implode(' ',$procResult).'+++'.$amount);
            //var_dump($procResult);
        }
        return $procResult;
    }
    public function doWebReview(){
        global $_W, $_GPC;
        if($_W['ispost']){
            $id = intval($_GPC['id']);
            $rs = pdo_delete($this->modulename.'_pl',array('id' => $id,'uniacid' => $_W['uniacid']));
            if($rs){
                $data = array(
                    'result' => 1
                );
            }else{
                $data = array(
                    'result' => 0
                );
            }
            echo json_encode($data);
        }else{
            $pindex = max(1, intval($_GPC['page']));
            $psize = 15;
            $list = pdo_fetchall("SELECT a.nickname,a.content,a.id,a.addtime,b.title FROM". tablename($this->modulename.'_pl')." a INNER JOIN ".tablename($this->modulename.'_data') ." b ON b.id = a.cid WHERE a.uniacid = :uniacid ORDER BY a.addtime DESC LIMIT ".($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
            $total = pdo_fetchcolumn('SELECT COUNT(*) FROM ' . tablename($this->modulename.'_pl') . " WHERE uniacid = :did",array(':did' => $_W['uniacid']));
            $pager = pagination($total, $pindex, $psize);
            //print_r($list);
            include $this->template('review');
        }
    }
    public function doWebReviewpic(){
        global $_W,$_GPC;
        $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        if($_W['ispost']){
            if($op == 'sys'){
                $arr = array(
                    array(
                        'title' => '火辣身材女生金鑫惹火妖娆时尚写真',
                        'content' =>'https://img.alicdn.com/imgextra/i1/14252630/TB2HID3X_JYBeNjy1zeXXahzVXa_!!14252630.jpg',
                    ),
                    array(
                        'title' => '热裤露脐装美女唯依室内清纯写真照片',
                        'content' =>'https://img.alicdn.com/imgextra/i4/14252630/TB2HRWcXY1YBuNjSszeXXablFXa_!!14252630.jpg',
                    ),
                    array(
                        'title' => '人生若只如初见',
                        'content' =>'https://img.alicdn.com/imgextra/i4/14252630/TB2jF65X_tYBeNjy1XdXXXXyVXa_!!14252630.jpg',
                    ),
                    array(
                        'title' => '气质美女生活照',
                        'content' =>'https://img.alicdn.com/imgextra/i4/14252630/TB2G11dXY1YBuNjSszeXXablFXa_!!14252630.jpg',
                    ),
                    array(
                        'title' => '邻家美女清新写真',
                        'content' =>'https://img.alicdn.com/imgextra/i1/14252630/TB2xDjWX9tYBeNjSspaXXaOOFXa_!!14252630.jpg',
                    ),
                    array(
                        'title' => '恬静优雅美女写真',
                        'content' =>'https://img.alicdn.com/imgextra/i1/14252630/TB2riejX1GSBuNjSspbXXciipXa_!!14252630.jpg',
                    ),
                );
                for($i=0;$i<count($arr);$i++){
                    $ishere = pdo_fetchcolumn('SELECT id FROM'.tablename($this->modulename.'_shenhe')." WHERE uniacid = :uniacid and title = :title",array(":title" => $arr[$i]['title'],":uniacid" => $_W['uniacid']));
                    if(!$ishere){
                        $data = array(
                            'title' => $arr[$i]['title'],
                            'content' => $arr[$i]['content'],
                            'uniacid' => $_W['uniacid'],
                            'addtime' => TIMESTAMP
                        );
                        $result = pdo_insert($this->modulename.'_shenhe',$data);
                    }
                }
                if($result){
                    $msg = array(
                        'result' => 'success'
                    );
                }else{
                    $msg = array(
                        'result' => '0'
                    );
                }
                echo json_encode($msg);
                
            }elseif ($op == 'add'){
                $id = $_GPC['id'];
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'title' => $_GPC['title'],
                    'content' => $_GPC['thumb'],
                    'addtime' => TIMESTAMP
                );
                if($id){
                    pdo_update($this->modulename.'_shenhe',$data,array('id' => $id));
                    $this->message('图片编辑成功！',$this->createWebUrl('reviewpic'));
                }else{
                    pdo_insert($this->modulename.'_shenhe',$data);
                    $this->message('图片添加成功！',$this->createWebUrl('reviewpic'));
                }
            }elseif ($op == 'del'){
                $id = $_GPC['id'];
                pdo_delete($this->modulename.'_shenhe',array('id' => $id,'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 1
                );
                return json_encode($data);
            }
        }else{
            if($op == 'display'){
                $list = pdo_fetchall("SELECT * FROM".tablename($this->modulename.'_shenhe')." WHERE uniacid = :uniacid order by addtime desc",array(':uniacid' => $_W['uniacid']));
                include $this->template('reviewpic');
            }elseif ($op == 'add'){
                $id = $_GPC['id'];
                if($id){
                    $item = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_shenhe')." WHERE uniacid = :uniacid and id = :id",array(':uniacid' => $_W['uniacid'],':id' => $id));
                }
                include $this->template('addreviewpic');
            }
        }
    }
    public function doWebMob(){
        global $_W,$_GPC;
        $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        if($_W['ispost']){
            if($op == 'add'){
                $id = intval($_GPC['id']);
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'content' => serialize($_GPC['content']),
                    'templateid' => $_GPC['templateid'],
                    'path' => $_GPC['path'],
                    'rate' => $_GPC['rate'],
                    'addtime' => TIMESTAMP
                );
                if($id){
                    pdo_update($this->modulename.'_sended',$data,array('id'=>$id,'uniacid'=>$_W['uniacid']));
                    $this->message('模板编辑成功！',$this->createWebUrl('mob'));
                }else{
                    pdo_insert($this->modulename.'_sended',$data);
                    $this->message('模板添加成功！',$this->createWebUrl('mob'));
                }
            }elseif ($op == 'del'){
                $id = $_GPC['id'];
                pdo_delete($this->modulename.'_sended',array('id' => $id,'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 1
                );
                return json_encode($data);
            }
        }else{
            if($op == 'display'){
                //$user = pdo_fetchcolumn('SELECT COUNT(*) FROM '. tablename($this->modulename."_user")." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $users = pdo_fetchcolumn('SELECT count(distinct openid) FROM '.tablename($this->modulename.'_formdata').' WHERE uniacid = :uniacid',array(':uniacid' => $_W['uniacid']));
                $user = $users;
                $pindex = max(1, intval($_GPC['page']));
                $psize = 20;
                $total = pdo_fetchcolumn('SELECT COUNT(*) FROM '. tablename($this->modulename."_sended")." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $list = pdo_fetchall("SELECT * FROM" . tablename($this->modulename.'_sended').'WHERE uniacid = :uniacid ORDER BY addtime DESC LIMIT '.($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
                for ($i=0;$i<count($list);$i++){
                    $list[$i]['content'] = unserialize($list[$i]['content']);
                }
                $pager = pagination($total, $pindex, $psize);
                include $this->template('mob');
            }elseif ($op == 'add'){
                $id = intval($_GPC['id']);
                if ($id){
                    $item = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_sended').' WHERE id = :id',array(':id' => $id));
                    $item['content'] = unserialize($item['content']);
                }
                include $this->template('addmob');
            }elseif ($op == 'send'){
                $id = $_GPC['id'];
                $mobaninfo = pdo_fetch("SELECT * FROM".tablename($this->modulename.'_sended')." WHERE id = :id",array(":id" => $id));
                $users = pdo_fetchcolumn('SELECT  count(distinct openid) FROM '.tablename($this->modulename.'_formdata').' WHERE uniacid = :uniacid',array(':uniacid' => $_W['uniacid']));
                $total = $users;
                $pindex = max(1, intval($_GPC['page']));
                $psize = $mobaninfo['rate'];
                $allpage = ceil($total / $psize);
                $page = max(1, intval($_GPC['page']));
                if($page > $allpage){
                    $msg = '模板消息推送完成，请关闭窗口。';
                }else{
                    $list = pdo_fetchall('SELECT * FROM '.tablename($this->modulename.'_formdata').' WHERE uniacid = :uniacid GROUP BY openid LIMIT '.($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
                    for ($i=0;$i<count($list);$i++){
                        $issend = pdo_fetchcolumn("SELECT id FROM".tablename($this->modulename.'_sendlog')." WHERE openid = :openid and msgid = :msgid",array(':openid' => $list[$i]['openid'],':msgid' => $id));
                        if(!$issend){
                            $result = $this->Sendmsg($mobaninfo['templateid'],$mobaninfo['path'],$mobaninfo['content'],$list[$i]['openid']);
                            if($result){
                                $data = array(
                                    'openid' => $list[$i]['openid'],
                                    'uniacid' => $_W['uniacid'],
                                    'msgid' => $id,
                                    'templateid' =>  $mobaninfo['templateid'],
                                    'addtime' => TIMESTAMP
                                );
                                pdo_insert($this->modulename.'_sendlog',$data);
                                pdo_query("UPDATE " . tablename($this->modulename . '_sended') . " SET send = send + 1 WHERE id = :id", array(':id' => $id));
                            }
                        }
                    }
                }
                include $this->template('send');
            }elseif($op == 'formid'){
                /*$total = pdo_fetchcolumn('SELECT COUNT(*) FROM '. tablename($this->modulename."_formdata")." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $pindex = max(1, intval($_GPC['page']));
                $psize = 50;
                $allpage = ceil($total / $psize);
                $page = max(1, intval($_GPC['page']));
                if($page > $allpage){
                    $msg = '清理成功，请关闭窗口。';
                }else{
                    $list = pdo_fetchall("SELECT * FROM" . tablename($this->modulename.'_formdata').'WHERE uniacid = :uniacid ORDER BY addtime DESC LIMIT '.($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));
                    for ($i=0;$i<count($list);$i++){
                        $nowtiems = TIMESTAMP;
                        if($nowtiems > ($list[$i]['addtime']+(86400*7))){
                            pdo_delete($this->modulename.'_formdata',array('id' => $list[$i]['id'],'uniacid' => $_W['uniacid']));
                        }
                    }
                }*/
                $nowtiems = TIMESTAMP - (86400*7);
                pdo_delete($this->modulename.'_formdata',array('addtime <' => $nowtiems,'uniacid' => $_W['uniacid']));
                $msg = '清理成功，请关闭窗口。';
                include $this->template('formid');
            }elseif($op == 'sendlog'){
                $pindex = max(1, intval($_GPC['page']));
                $psize = 20;
                $total = pdo_fetchcolumn('SELECT COUNT(*) FROM '. tablename($this->modulename."_sendlog")." WHERE uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));
                $list = pdo_fetchall("SELECT * FROM" . tablename($this->modulename.'_sendlog').'WHERE uniacid = :uniacid ORDER BY addtime DESC LIMIT '.($pindex - 1) * $psize.','.$psize,array(':uniacid' => $_W['uniacid']));

                $pager = pagination($total, $pindex, $psize);
                include $this->template('sendlog');
            }elseif($op == 'help'){
                include $this->template('help');
            }
        }
    }
    public  function doWebTestmob(){
        global $_W,$_GPC;
        if($_W['ispost']){
            $templateid = $_GPC['templateid'];
            $path = $_GPC['path'];
            $mobaninfo = serialize($_GPC['content']);
            $openid = pdo_fetchcolumn('select openid from'.tablename($this->modulename.'_user')." where id = :id",array(':id' => $_GPC['userid']));
            $result = $this->Sendmsg($templateid,$path,$mobaninfo,$openid);
            if($result && $result != 'error'){
                echo '<span style="display: block;width:100%;margin-top:60px;text-align:center;font-size:18px; color:#4752ea;" id="show">模板消息已发送</span>';
            }else{
                echo '<span style="display: block;width:100%;margin-top:60px;text-align:center;font-size:18px; color:#EA2020;" id="show">模板消息出错，请检查模板ID是否正确。</span>';
            }
        }else{
            include $this->template('testmob');
        }
    }
    private function Sendmsg($templateid,$path,$mobaninfo,$openid){
        global $_W,$_GPC;
        $formid = pdo_fetch("SELECT id,formid FROM".tablename($this->modulename.'_formdata').' WHERE openid = :openid and uniacid = :uniacid order by addtime desc',array(':uniacid' => $_W['uniacid'],':openid' => $openid));
        if($formid){
            $mobaninfo = unserialize($mobaninfo);
            $account_api = WeAccount::create();
            $token = $account_api->getAccessToken();
            load()->func('communication');
            $url = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token='.$token;
            $data = array(
                'touser' => $openid,
                'template_id'=>$templateid,
                "page"=>$path,
                "form_id"=> $formid['formid'],
                'data' => array(
                    'keyword1' => array(
                        'value' => htmlspecialchars_decode($mobaninfo[0]),
                        "color"=>"#000000"
                    ),
                    'keyword2' => array(
                        'value' => htmlspecialchars_decode($mobaninfo[1]),
                        "color"=>"#E92302"
                    ),
                    'keyword3' => array(
                        'value' => htmlspecialchars_decode($mobaninfo[2]),
                        "color"=>"#E92302"
                    )
                ),
                'emphasis_keyword' =>'keyword1.DATA'
            );
            $res = ihttp_post($url, json_encode($data));
            pdo_delete($this->modulename.'_formdata',array('id' => $formid['id']));
            if($res->errcode == 0){
                return $res;
            }else{
                return false;
            }
        }
    }
    public function doWebapp(){
        global $_W,$_GPC;
        $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        $imgurl = $this->imgurl();
        $id = intval($_GPC['id']);
        if($_W['ispost']){
            if($op == 'add'){
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'displayorder' => $_GPC['displayorder'],
                    'title' => $_GPC['title'],
                    'desc' => $_GPC['desc'],
                    'appid' => $_GPC['appid'],
                    'path' => $_GPC['path'],
                    'thumb' => $_GPC['thumb'],
                    'addtime' => TIMESTAMP
                );
                if($id){
                    pdo_update($this->modulename.'_app',$data,array('id' => $id));
                    $this->message('编辑成功！',$this->createWebUrl('app'));
                }else{
                    pdo_insert($this->modulename.'_app',$data);
                    $this->message('添加成功！',$this->createWebUrl('app'));
                }

            }elseif($op == 'del'){
                pdo_delete($this->modulename.'_app',array('id' => $id,'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 1
                );
                exit(json_encode($data));
            }elseif ($op == 'display'){
                $displayorder = $_GPC['displayorder'];
                if (!empty($displayorder)) {
                    foreach ($displayorder as $id => $dis) {
                        if($dis){
                            $update = array(
                                'displayorder' => $dis
                            );
                            pdo_update($this->modulename.'_app', $update, array(
                                'id' => $id
                            ));
                        }
                    }
                    $this->message('排序更新成功！', 'refresh', 'success');
                }
            }
        }else{
            if($op == 'display'){
                $list = pdo_fetchall('select * from'.tablename($this->modulename.'_app').' where uniacid = :uniacid',array(':uniacid' => $_W['uniacid']));
                include $this->template('app');
            }elseif($op == 'add'){
                if($id){
                    $item = pdo_fetch('select * from'.tablename($this->modulename.'_app').' where id = :id',array(':id' => $id));
                }
                include $this->template('addapp');
            }
        }
    }
    public function doWebIndex(){
        global $_W,$_GPC;
        $op = !empty($_GPC['op']) ? $_GPC['op'] : 'display';
        if($_W['ispost']){
            if ($op == 'syspush'){
                $data = array("热门推荐","节日模板","祝福模板");
                for ($i=0;$i<count($data);$i++){
                    $isthis = pdo_fetch('select id from'.tablename($this->modulename.'_incate').' where uniacid = :uniacid and title = :title',array(':uniacid' => $_W['uniacid'],':title' => $data[$i]));
                    if(!$isthis){
                        $indata = array(
                            'uniacid' => $_W['uniacid'],
                            'title' => $data[$i],
                            'addtime' => TIMESTAMP
                        );
                        pdo_insert($this->modulename.'_incate',$indata);
                    }
                }
                $msg = array(
                    'result' => 'success'
                );
                exit(json_encode($msg));
            }elseif($op == 'display'){
                $displayorder = $_GPC['displayorder'];
                if (!empty($displayorder)) {
                    foreach ($displayorder as $id => $dis) {
                        if($dis){
                            $update = array(
                                'displayorder' => $dis
                            );
                            pdo_update($this->modulename.'_incate', $update, array(
                                'id' => $id
                            ));
                        }
                    }
                    $this->message('分类排序更新成功！', 'refresh', 'success');
                }
            }elseif ($op == 'edit'){
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'displayorder' => $_GPC['displayorder'],
                    'title' => $_GPC['title'],
                    'addtime' => TIMESTAMP
                );
                $id = intval($_GPC['id']);
                if($id){
                    pdo_update($this->modulename.'_incate',$data,array('id' => $id));
                    $this->message('编辑成功！',$this->createWebUrl('index'));
                }else{
                    pdo_insert($this->modulename.'_incate',$data);
                    $this->message('添加成功！',$this->createWebUrl('index'));
                }
            }elseif($op == 'delincate'){
                pdo_delete($this->modulename.'_incate',array('id' => $_GPC['id'],'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 1
                );
                exit(json_encode($data));
            }elseif($op == "inmoadd"){
                $id = $_GPC['id'];
                $data = array(
                    'uniacid' => $_W['uniacid'],
                    'cid' => $_GPC['cid'],
                    'displayorder' => $_GPC['displayorder'],
                    'title' => $_GPC['title'],
                    'skin' => $_GPC['skin'],
                    'thumb' => $_GPC['thumb'],
                    'addtime' => TIMESTAMP
                );
                if($id){
                    pdo_update($this->modulename.'_inskin',$data,array('id' => $id,'uniacid' => $_W['uniacid']));
                    $this->message('编辑成功！',$this->createWebUrl('index',array('op' =>'inmolist','id' => $_GPC['cid'])));
                }else{
                    pdo_insert($this->modulename.'_inskin',$data);
                    $this->message('编辑成功！',$this->createWebUrl('index',array('op' =>'inmolist','id' => $_GPC['cid'])));
                }
            }elseif($op == 'delmob'){
                pdo_delete($this->modulename.'_inskin',array('id' => $_GPC['id'],'uniacid' => $_W['uniacid']));
                $data = array(
                    'result' => 1
                );
                exit(json_encode($data));
            }elseif($op == 'inmolist'){
                $displayorder = $_GPC['displayorder'];
                if (!empty($displayorder)) {
                    foreach ($displayorder as $id => $dis) {
                        if($dis){
                            $update = array(
                                'displayorder' => $dis
                            );
                            pdo_update($this->modulename.'_inskin', $update, array(
                                'id' => $id
                            ));
                        }
                    }
                    $this->message('排序更新成功！', 'refresh', 'success');
                }
            }
        }else{
            if($op == 'display'){
                $item = pdo_fetchall('select * from'.tablename($this->modulename.'_incate').' where uniacid = :uniacid order by displayorder desc',array(':uniacid' => $_W['uniacid']));
                include $this->template('index');
            }
            elseif ($op == 'edit') {
                $id = $_GPC['id'];
                if ($id) {
                    $item = pdo_fetch('select * from' . tablename($this->modulename . '_incate') . " where uniacid = :uniacid and id = :id", array(':uniacid' => $_W['uniacid'], ':id' => $id));
                }
                include $this->template('editindex');
            }
            elseif($op == 'inmolist'){
                $id = $_GPC['id'];
                $item = pdo_fetchall('select * from'.tablename($this->modulename.'_inskin').' where cid = :cid and uniacid = :uniacid',array(':cid' => $id,':uniacid' => $_W['uniacid']));
                include $this->template('inmob');
            }elseif($op == 'inmoadd'){
                $id = $_GPC['id'];
                if($id){
                    $item = pdo_fetch('select * from'.tablename($this->modulename.'_inskin').' where id = :id and uniacid = :uniacid',array(':id' => $id,':uniacid' => $_W['uniacid']));
                }
                $cid = $_GPC['cid'];
                $items = pdo_fetchall('select id,skiname,skintitle from'.tablename($this->modulename.'_skin').' where uniacid = :uniacid',array(':uniacid' => $_W['uniacid']));
                $cate = pdo_fetchall('select * from'.tablename($this->modulename.'_incate')."where uniacid = :uniacid", array(':uniacid' => $_W['uniacid']),id);
                include $this->template('editaddmob');
            }
        }
    }
    private  function getjson($url,$refer){
        $curl = curl_init();
        // 要访问的网址
        curl_setopt($curl, CURLOPT_URL, $url);
        // 设置来路
        curl_setopt($curl, CURLOPT_REFERER,$refer);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25');
        // 不直接输入内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // 降结果保存在$result中
        $qqlyc = curl_exec($curl);
        // 关闭
        curl_close($curl);
        return $qqlyc;
    }
    public function doWebdemos(){
        global  $_W,$_GPC;
        $url = 'https://qqwin.shanweifang.com.cn/miniprogram/context?id=20';
        $refer = 'https://qqwin.shanweifang.com.cn';
        $rs = $this->getjson($url,$refer);
        print_r(json_decode($rs,true));
    }

}