<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_example_index`;");
E_C("CREATE TABLE `phome_ecms_example_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_example_index` values('1','7','1','1582175965','1582175991','1582176097','1');");
E_D("replace into `phome_ecms_example_index` values('2','7','1','1582176172','1582176183','1582176183','1');");
E_D("replace into `phome_ecms_example_index` values('3','7','1','1582176191','1582176217','1582176217','1');");
E_D("replace into `phome_ecms_example_index` values('4','7','1','1582176220','1582176238','1582176238','1');");
E_D("replace into `phome_ecms_example_index` values('5','7','1','1582176240','1582176261','1582176261','1');");
E_D("replace into `phome_ecms_example_index` values('6','7','1','1582176264','1582176277','1582176277','1');");

@include("../../inc/footer.php");
?>