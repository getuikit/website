<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_ukdoc_index`;");
E_C("CREATE TABLE `phome_ecms_ukdoc_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_ukdoc_index` values('1','3','1','1573505911','1573506063','1591172173','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('2','3','1','1573544895','1573545146','1579050471','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('3','3','1','1573583235','1573583559','1579053118','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('4','3','1','1575186994','1575187182','1579053228','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('5','3','1','1575249734','1575249802','1579053325','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('6','3','1','1575274881','1575274964','1579053363','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('7','3','1','1575275778','1575275858','1579054180','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('8','3','1','1575276805','1575276860','1579054254','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('9','3','1','1575277962','1575278036','1579054336','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('10','3','1','1575310237','1575310285','1578208689','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('11','4','1','1575313581','1575313641','1584106977','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('12','4','1','1575350133','1575350215','1579056269','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('13','4','1','1575358223','1575358278','1578209082','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('14','4','1','1575359158','1575359221','1579056431','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('15','4','1','1575361011','1575361069','1579056486','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('16','4','1','1575400264','1575400359','1579056555','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('17','4','1','1575407871','1575407933','1578210591','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('18','4','1','1575408524','1575408604','1579056706','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('19','4','1','1575707038','1575707109','1578210900','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('20','4','1','1575791722','1575791794','1579062321','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('21','4','1','1575793041','1575793086','1579062429','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('22','4','1','1575928975','1575929037','1579062490','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('23','4','1','1575933795','1575933858','1578211425','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('24','4','1','1575934864','1575934908','1579062563','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('25','4','1','1575938343','1575938399','1579934317','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('26','4','1','1575939129','1575939177','1579062650','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('27','4','1','1575940887','1575940962','1579062790','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('28','4','1','1575946120','1575946199','1578249499','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('29','4','1','1575952759','1575952825','1578249575','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('30','4','1','1575954366','1575954429','1579062999','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('31','4','1','1575956303','1575956364','1589374215','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('32','4','1','1576044587','1576044667','1579063394','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('33','4','1','1576048326','1576048406','1579063575','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('34','4','1','1576220370','1576220439','1579063694','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('35','4','1','1576224452','1576224500','1579063845','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('36','4','1','1576364081','1576364137','1579064260','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('37','4','1','1576374693','1576374736','1579064347','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('38','4','1','1576379895','1576379949','1579064475','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('39','4','1','1576385764','1576385810','1579064629','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('40','4','1','1576388260','1576388309','1579065563','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('41','4','1','1576395309','1576395351','1579065648','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('42','4','1','1576626488','1576626537','1579065735','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('43','4','1','1576627668','1576627756','1578255468','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('44','4','1','1576628418','1576628608','1579065823','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('45','4','1','1576630045','1576630092','1586502931','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('46','4','1','1576633041','1576633081','1579065991','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('47','4','1','1576637016','1576637058','1591174550','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('48','4','1','1576975336','1576975396','1580254336','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('49','4','1','1576995481','1576995536','1579066129','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('50','4','1','1576995962','1576996009','1579066433','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('51','4','1','1577001951','1577002005','1579066600','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('52','4','1','1577228907','1577228977','1579066913','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('53','4','1','1577344435','1577347077','1579066992','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('54','4','1','1577347129','1577347183','1579067083','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('55','4','1','1577397787','1577397842','1579067198','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('56','4','1','1577400618','1577400671','1578266278','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('57','4','1','1577401285','1577401333','1579067262','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('58','4','1','1577402077','1577402156','1579067348','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('59','4','1','1577434867','1577434924','1579067377','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('60','4','1','1577435116','1577435161','1579110527','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('61','4','1','1577482037','1577482098','1579110566','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('62','4','1','1577482551','1577482601','1578267059','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('63','4','1','1577483067','1577483114','1584107234','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('64','4','1','1577510627','1577511820','1579110713','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('65','4','1','1577516329','1577516377','1589374988','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('66','4','1','1577521124','1577521265','1579110917','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('67','4','1','1577523109','1577523172','1579110976','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('68','4','1','1577557172','1577557247','1579111213','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('69','4','1','1577577022','1577577065','1579111438','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('70','4','1','1577588589','1577588682','1579111494','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('71','4','1','1577601900','1577601974','1578269665','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('72','4','1','1577603212','1577603308','1579111579','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('73','4','1','1577689355','1577689415','1579111632','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('74','4','1','1577690421','1577690467','1579111687','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('75','4','1','1577692810','1577692851','1579111844','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('76','4','1','1577742692','1577742754','1579121786','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('77','4','1','1577778471','1577778515','1579121917','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('78','4','1','1577841687','1577841739','1579121966','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('79','4','1','1577849571','1577849670','1579122063','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('80','4','1','1577948714','1577948765','1579122092','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('81','4','1','1577949344','1577949448','1579122176','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('82','4','1','1577994690','1577994784','1579122218','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('83','4','1','1578007002','1578007048','1579122243','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('84','4','1','1578011197','1578011256','1579122273','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('85','4','1','1578032553','1578032726','1579122323','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('86','4','1','1578032754','1578032793','1579122489','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('87','4','1','1578032796','1578032842','1579122557','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('88','4','1','1578032844','1578032892','1578273343','1');");
E_D("replace into `phome_ecms_ukdoc_index` values('89','4','1','1578032895','1578032940','1591172863','1');");

@include("../../inc/footer.php");
?>