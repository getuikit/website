<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsloginfail`;");
E_C("CREATE TABLE `phome_enewsloginfail` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `num` tinyint(4) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsloginfail` values(0x3234362e3235302e38362e323439,'1','1584249939');");
E_D("replace into `phome_enewsloginfail` values(0x36392e3231332e31322e3231,'1','1584249937');");
E_D("replace into `phome_enewsloginfail` values(0x3138392e37342e36392e323439,'1','1584249936');");
E_D("replace into `phome_enewsloginfail` values(0x37362e36362e3131362e313130,'1','1584249935');");
E_D("replace into `phome_enewsloginfail` values(0x3139362e3138312e3137332e3835,'1','1584249933');");
E_D("replace into `phome_enewsloginfail` values(0x3235312e31342e3130382e323234,'1','1584249932');");
E_D("replace into `phome_enewsloginfail` values(0x37352e3233312e33332e323439,'1','1584249930');");
E_D("replace into `phome_enewsloginfail` values(0x3130332e3136392e34332e313138,'1','1584249929');");

@include("../../inc/footer.php");
?>