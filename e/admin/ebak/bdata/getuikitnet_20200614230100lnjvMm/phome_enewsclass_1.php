<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0',0xe69687e6a1a3,0x7c347c,'0','25','10','0','0','1','','0',0x646f63,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','9','1','10',0xe69687e6a1a3,'0','1','9',0x756b646f63,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1573463258','0','','0','1582175172');");
E_D("replace into `phome_enewsclass` values('2','1',0x7633,0x7c337c347c,'0','25','10','1','0','1',0x7c317c,'0',0x646f632f7633,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','9','1','10',0x7633,'2','1','9',0x756b646f63,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','1','0','1','','0','0','0','','0','0','0','0','1573463290','0','','0','1591172151');");
E_D("replace into `phome_enewsclass` values('3','2',0xe585a5e997a8,'','0','25','10','10','0','1',0x7c317c327c,'1',0x646f632f76332f67657474696e672d73746172746564,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','9','1','10',0x47455454494e472053544152544544,'0','1','9',0x756b646f63,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','1','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','1','0','1','','0','0','0','','0','0','10','10','1573505508','0','','0','1573537618');");
E_D("replace into `phome_enewsclass` values('4','2',0xe7bb84e4bbb6,'','0','25','10','10','0','1',0x7c317c327c,'1',0x646f632f76332f636f6d706f6e656e7473,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','9','1','10',0x434f4d504f4e454e5453,'0','1','9',0x756b646f63,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','1','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','1','0','1','','0','0','0','','0','0','79','79','1573505557','0','','0','1575400434');");
E_D("replace into `phome_enewsclass` values('5','1',0x7632,'','0','25','10','1','0','1',0x7c317c,'0',0x646f632f7632,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','9','1','10',0x7632,'2','1','9',0x756b646f63,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','1','0','1','','0','0','0','','0','0','0','0','1578641443','0','','0','1578641491');");
E_D("replace into `phome_enewsclass` values('6','0',0xe5b883e5b180e7a4bae4be8b,0x7c377c,'0','25','10','0','0','1','','0',0x6578616d706c6573,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','10','1','10',0xe5b883e5b180e7a4bae4be8b,'0','1','10',0x6578616d706c65,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1582175237','0','','0','1582175932');");
E_D("replace into `phome_enewsclass` values('7','6',0x5633e5b883e5b180e7a4bae4be8b,'','0','25','10','11','0','1',0x7c367c,'1',0x6578616d706c65732f7633,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','10','1','10',0x5633e5b883e5b180e7a4bae4be8b,'0','1','10',0x6578616d706c65,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','1','0','1','','0','0','0','','0','0','6','6','1582175385','0','','0','1582176308');");

@include("../../inc/footer.php");
?>