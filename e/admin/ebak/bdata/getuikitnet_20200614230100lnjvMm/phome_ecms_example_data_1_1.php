<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_example_data_1`;");
E_C("CREATE TABLE `phome_ecms_example_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_example_data_1` values('1','7','','0','11','0','0','','','','');");
E_D("replace into `phome_ecms_example_data_1` values('2','7','','0','0','0','0','','','','');");
E_D("replace into `phome_ecms_example_data_1` values('3','7','','0','0','0','0','','','','');");
E_D("replace into `phome_ecms_example_data_1` values('4','7','','0','0','0','0','','','','');");
E_D("replace into `phome_ecms_example_data_1` values('5','7','','0','0','0','0','','','','');");
E_D("replace into `phome_ecms_example_data_1` values('6','7','','0','0','0','0','','','','');");

@include("../../inc/footer.php");
?>