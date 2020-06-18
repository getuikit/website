<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<title>UIkit中文网</title>
		<meta name="description" content="UIkit是YOOtheme团队开发的一款轻量级、模块化的前端框架，可快速构建强大的前端web界面。UIKit使用的变量基于LESS，具有体积小、模块化、可轻松地自定义主题及响应式设计可在多种环境中使用等特点。UIkit中文网为广大国内开发者提供详尽的中文文档、代码实例等，帮助开发者快速掌握并使用这一框架。">
		<meta name="author" content="UIkit中文网">
		<meta name="keywords" content="UIkit,轻量级,前端框架,响应式布局,基于LESS,CSS framework,js框架,getuikit,uikit开发,uikit代码,uikit入门">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.getuikit.net/skin/ukv3/css/theme.css?3.5.3" />
		<script src="http://cdn.getuikit.net/uikit3.5.3/js/uikit.min.js"></script>
		<script src="http://cdn.getuikit.net/uikit3.5.3/js/uikit-icons.min.js"></script>
		<style>
			.uk-card-default {
				background: #f8f8f8;
				box-shadow: none;
			}
		</style>
	</head>
	<body>
		<div>
			<div class="uk-section-primary tm-section-texture">
				<div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-navbar-transparent uk-sticky uk-sticky-fixed">
					<div class="uk-container uk-container-expand">
						<nav class="uk-navbar">
							<div class="uk-navbar-left"><a href="/" class="uk-navbar-item uk-logo"><img uk-svg="" src="http://www.getuikit.net/skin/ukv3/images/uikit-logo.svg" class="uk-margin-small-right" hidden="true"> UIkit</a></div>
							<div class="uk-navbar-right">
								<ul class="uk-navbar-nav uk-visible@m">
									<li class="uk-active"><a href="http://www.getuikit.net/doc/v3/getting-started/introduction.html">UIkit3文档</a></li>
									<li><a href="http://www.getuikit.net/docs/documentation_get-started.html">UIkit2文档</a></li>
									<li><a href="/showcase/">案例展示</a></li>
									<li><a target="_blank" href="https://getuikit.com/changelog">更新日志</a></li>
								</ul>
								<div class="uk-navbar-item uk-visible@m"><a title="版本3.5.3" href="/uikitzip/uikit-3.5.3.zip" class="uk-button uk-button-default tm-button-default uk-icon">下载
										<canvas uk-icon="icon: download" width="20" height="20" class="uk-icon" hidden="true"></canvas></a></div> <a
								 uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon"></a>
							</div>
						</nav>
					</div>
				</div>
				<div class="uk-sticky-placeholder" style="height: 80px; margin: 0px;"></div>
				<div uk-height-viewport="offset-top: true; offset-bottom: true" class="uk-section uk-section-small uk-flex uk-flex-middle uk-text-center" style="min-height: calc((100vh - 80px) - 102.625px);">
					<div class="uk-width-1-1">
						<div class="uk-container">
							<p><canvas width="168" height="155" uk-svg="" src="/skin/ukv3/images/uikit-logo-large.svg" style="color: rgb(255, 255, 255);"
								 hidden="true"></canvas></p>
							<p class="uk-margin-medium uk-text-lead">
								一个轻量级的模块化前端框架，<br class="uk-visible@s">
								用于快速开发强大的Web界面。
							</p>
							<div uk-grid="" class="uk-child-width-auto uk-grid-medium uk-flex-inline uk-flex-center uk-grid">
								<div class="uk-first-column"><a href="/doc/v3/getting-started/introduction.html" class="uk-button uk-button-primary tm-button-primary uk-button-large tm-button-large uk-visible@s">开始使用（版本：3.5.3）</a>
									<a href="/doc/v3/getting-started/introduction.html" class="uk-button uk-button-primary tm-button-primary uk-hidden@s">开始使用</a></div>
								<div><a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=3e3f1acbea5ce50221fdcf0b73883a645489935f04f68023da55fa2d8bf0edc7"
									 class="uk-button uk-button-default tm-button-default uk-button-large tm-button-large uk-visible@s">加入QQ群讨论</a>
									<a href="https://github.com/uikit/uikit" class="uk-button uk-button-default tm-button-default uk-hidden@s">Github</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="offcanvas" uk-offcanvas="mode: push; overlay: true" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<div class="uk-panel">
						<ul class="uk-nav uk-nav-default tm-nav">
							<li class="uk-nav-header">总目录</li>
							<li><a href="../index">首页</a></li>
							<li><a href="/showcase/">案例</a></li>
							<li><a href="../changelog">更新日志</a></li>
							<li><a href="/uikitzip/uikit-3.5.3.zip">下载</a></li>
						</ul>
						<ul class="uk-nav uk-nav-default tm-nav uk-margin-top">
							<li class="uk-nav-header">入门</li> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,100,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><li exact=""><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></li><?php
}
}
?>
						</ul>
						<ul class="uk-nav uk-nav-default tm-nav uk-margin-top">
							<li class="uk-nav-header">组件1</li> <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,100,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><li exact=""><a href="<?=$bqsr['titleurl']?>">
									<?=$bqr['title']?></a></li><?php
}
}
?>
						</ul>
					</div>
				</div>
			</div>
			<div class="uk-section">
				<div class="uk-container">
					<div class="uk-width-xlarge uk-margin-auto uk-text-center uk-margin-large-bottom">
						<h1 class="uk-h6 tm-h6 uk-margin-remove">The Layout Library</h1>
						<h3 class="uk-h1 uk-margin-top">工具和相关资源</h3>
						<p class="uk-text-large tm-text-large">以下项目或者是对UIkit进行了有益的补充，或者是基于UIkit开发的</p>
					</div>
					<div class="uk-child-width-1-1 uk-child-width-1-3@m" uk-grid uk-height-match="target: > div > a > .uk-card">
						<div>
							<a rel="external nofollow" class="uk-link-reset" href="/warp/">
								<div class="uk-card uk-card-default uk-card-hover">
									<div class="uk-card-media-top">
										<img width="100%" src="https://cdn.jsdelivr.net/npm/@bootcss/www.bootcss.com@0.0.3/dist/img/nodejs.png" alt="">
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title  uk-text-center">Warp 主题框架</h3>
										<p>一款快速和简洁的主题框架，它提供了丰富的工具集，用于开发跨平台的主题</p>
									</div>
								</div>
							</a>
						</div>
						<div>
							<a rel="external nofollow" target="_blank" class="uk-link-reset" href="http://www.pagekit.com/">
								<div class="uk-card uk-card-default uk-card-hover">
									<div class="uk-card-media-top">
										<img width="100%" src="http://www.getuikit.net/skin/ukv3/images/pagekit-logo.png" alt="">
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title  uk-text-center">Pagekit</h3>
										<p>一款全新的现代CMS，用于创作和分享</p>
									</div>
								</div>
							</a>
						</div>
						<div>
							<a rel="external nofollow" class="uk-link-reset" target="_blank" href="https://vuikit.js.org/">
								<div class="uk-card uk-card-default uk-card-hover">
									<div class="uk-card-media-top">
										<img width="100%" src="http://www.getuikit.net/skin/ukv3/images/vuikit.jpg" alt="">
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title  uk-text-center">Vuikit</h3>
										<p>一个一致的且响应迅速的Vue UI库，基于前端框架UIkit。</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-section uk-section-primary tm-section-primary uk-padding-remove-bottom">
			<div class="uk-container uk-text-center">
				<hr class="uk-margin-remove-bottom">
				<div class="uk-margin-top uk-margin-bottom">
					<div uk-grid="" class="uk-child-width-auto@m uk-flex-middle uk-grid">
						<div class="uk-first-column">
							<div class="uk-text-left@m uk-text-center"><a href="/" class="uk-logo"><canvas width="28" height="34" uk-svg="" src="./images/uikit-logo.svg" class="uk-margin-small-right" hidden="true"></canvas> UIkit</a></div>
						</div>
						<div class="uk-margin-auto">
							<ul uk-margin="" class="uk-subnav uk-flex-center">
								<li><a href="/doc/v3/getting-started/introduction.html">UIkit3文档</a></li>
								<li><a rel="external nofollow" target="_blank" href="http://beian.miit.gov.cn/">蜀ICP备08107246号</a></li>
								<li><a target="_blank" href="http://www.getuikit.net/uikitzip/uikit-3.5.3.zip">下载</a></li>
								<li><a target="_blank" href="http://www.vpsno.com/">VPS排行</a></li>
								<li><a target="_blank" href="http://www.banwagon.net/">搬瓦工</a></li>
							</ul>
						</div>
						<div>
							<div class="uk-text-right@m uk-text-center">
								<div uk-grid="" class="uk-child-width-auto uk-grid-small uk-flex-center uk-grid">
									<div class="uk-first-column"><a target="_blank" href="https://github.com/uikit/uikit" uk-icon="icon: github"
										 class="uk-icon-link uk-icon"></a></div>
									<div><a rel="external nofollow" target="_blank" href="https://discordapp.com/invite/NEt4Pv7" uk-icon="icon: commenting" class="uk-icon-link uk-icon"></a></div>
									<div><a rel="external nofollow" target="_blank" href="https://twitter.com/getuikit" uk-icon="icon: twitter" class="uk-icon-link uk-icon"></a></div>
									<div><a rel="external nofollow" target="_blank" href="https://www.facebook.com/getuikit" uk-icon="icon: facebook" class="uk-icon-link uk-icon"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
