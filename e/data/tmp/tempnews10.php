<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<title><?=$ecms_gr[title]?> - UIkit3中文文档</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="/skin/ukv3/css/uikit.min.css" /> -->
		<link rel="stylesheet" type="text/css" href="/skin/ukv3/css/theme.css?3.5.3"/>
		<script src="/skin/ukv3/js/clipboard.min.js" defer=""></script>
		<script src="/skin/ukv3/js/uikit.min.js"></script>
		<script src="/skin/ukv3/js/uikit-icons.min.js"></script>
		<script src="/skin/ukv3/js/highlight.min.js"></script>
	</head>

	<body>
	        <div><div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-active uk-sticky-below uk-sticky-fixed"><div class="uk-container uk-container-expand"><nav class="uk-navbar"><div class="uk-navbar-left"><a href="../" class="uk-navbar-item uk-logo"><img uk-svg="" src="/skin/ukv3/images/uikit-logo.svg" class="uk-margin-small-right" hidden="true"> UIkit
                    </a></div> <div class="uk-navbar-right"><ul class="uk-navbar-nav uk-visible@m"><li class="uk-active"><a href="/doc/v3/getting-started/introduction.html">UIkit3文档</a></li> <li><a href="/docs/documentation_get-started.html">UIkit2文档</a></li> <li><a href="/showcase/">案例展示</a></li> <li><a target="_blank" href="https://getuikit.com/changelog">更新日志</a></li></ul> <div class="uk-navbar-item uk-visible@m"><a title="版本3.5.3" href="/uikitzip/uikit-3.5.3.zip" class="uk-button uk-button-default tm-button-default uk-icon">下载 <canvas uk-icon="icon: download" width="20" height="20" class="uk-icon" hidden="true"></canvas></a></div> <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></a></div></nav></div></div><div class="uk-sticky-placeholder" style="height: 80px; margin: 0px;"></div> <div class="tm-sidebar-left uk-visible@m"><h3>UIkit3.x文档</h3> <ul class="uk-nav uk-nav-default tm-nav"><li class="uk-nav-header">入门</li> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,100,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><?php
$css="";
if($navinfor[id]==$bqr[id])
{
$css="router-link-exact-active uk-active";
}
?><li class="<?=$css?>"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></li><?php
}
}
?></ul><ul class="uk-nav uk-nav-default tm-nav uk-margin-top"><li class="uk-nav-header">组件</li> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,100,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><?php
$css="";
if($navinfor[id]==$bqr[id])
{
$css="router-link-exact-active uk-active";
}
?><li class="<?=$css?>"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></li><?php
}
}
?></ul></div> <div class="tm-main uk-section uk-section-default"><div class="uk-container uk-container-small uk-position-relative"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?> <div class="tm-sidebar-right uk-visible@l"><div uk-sticky="offset: 160" class="uk-sticky uk-active uk-sticky-fixed" style="position: fixed; top: 160px; width: 200px;"><ul uk-scrollspy-nav="closest: li; scroll: true; offset: 100" class="uk-nav uk-nav-default tm-nav uk-nav-parent-icon"><?=$ecms_gr[subnav]?></ul></div><div class="uk-sticky-placeholder" style="height: 252px; margin: 0px;"></div></div></div></div> <div id="offcanvas" uk-offcanvas="mode: push; overlay: true" class="uk-offcanvas"><div class="uk-offcanvas-bar"><div class="uk-panel"><ul class="uk-nav uk-nav-default tm-nav"><li class="uk-nav-header">总目录</li> <li><a href="../index">首页</a></li> <li><a href="/showcase/">案例</a></li> <li><a href="../changelog">更新日志</a></li> <li><a href="/uikitzip/uikit-3.2.7.zip">下载</a></li></ul> <ul class="uk-nav uk-nav-default tm-nav uk-margin-top"><li class="uk-nav-header">入门</li> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,100,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><li exact=""><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></li><?php
}
}
?></ul><ul class="uk-nav uk-nav-default tm-nav uk-margin-top"><li class="uk-nav-header">组件1</li> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,100,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><li exact=""><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></li><?php
}
}
?></ul></div></div></div></div>
	    
	
	
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?812601e3e7446047a37d28240bb3c3c8";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>	

</body>

</html>