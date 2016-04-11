<?php
/***********************************
 * Created by Devorans.com
 * Author: HukpoFuJl
 * File: _header.php
 * Project: TOUR
 * Date: 16.10.2015
 * Feedback: support@devorans.com
 ************************************/

		$menu = array(
			'blog'=>'Блог',
			'promo'=>'Акции',
			'promo-item'=>'Акция',
			'tour-by-country'=>'Туры по странам',
			'tour-filtered'=>'Выдача туров',
			'tour-hot'=>'Горячие туры',
			'hotels-by-country'=>'Отели по странам',
			'hotel'=>'Страница отеля',
			'operators'=>'Туроператоры',
			'about'=>'О нас'
		);

		$menuHTML = '<li'.(isset($_GET['p'])?'':' class="active"').'><a href="/">Главная</a></li>';
		$menuHTML .= '<li class="visible-xs"><a href="/?p=about#footer-map">Контакты</a></li>';
		$menuHTML .= '<li class="visible-xs"><a href="/?'.time().'#showfilter">Подобрать тур</a></li>';
		$active = false;
		foreach($menu as $s => $n){
			$active = isset($_GET['p'])&&$_GET['p']==$s?true:$active;
			$menuHTML .= '<li'.(isset($_GET['p'])&&$_GET['p']==$s?' class="active"':'').'><a href="/?p='.$s.'">'.$n.'</a></li>';
		}
?>


<nav id="site-menu" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
	<ul class="nav navmenu-nav">
		<?=$menuHTML?>
		<li><a>&nbsp;</a></li>
		<li><a href="#">Избранное</a><span>0</span></li>
	</ul>
	<input type="search" placeholder="">
</nav>
<a href="/?p=login-reg" id="login-link" class="fa fa-lock">
	<svg width="40px" height="40px">
		<circle class="path" r="17" cx="20" cy="20" fill="transparent"  stroke-width="3"></circle>
	</svg>
</a>
<button type="button" id="nav-toggle" data-recalc="false" data-toggle="offcanvas" data-target="#site-menu" data-canvas="#site-wrap">
	<span class="icon-bar top"></span>
	<span class="icon-bar middle"></span>
	<span class="icon-bar bottom"></span>
</button>
<header class="container-fluid" id="all-header">
	<div class="row">
		<div class="hidden-xs col-md-4 col-sm-4 text-right">
			<a class="header-link" <?=isset($_GET['p'])?'href="/#showfilter"':'href="#" data-click="showfilter"'?>>Подобрать тур</a>
		</div>
		<div class="col-xs-8 col-md-4 col-sm-4 text-center" id="logo">
			<a href="/">ПОЕДЕМ В ТУР</a>
			<em>мобильный туроператор</em>
		</div>
		<div class="hidden-xs col-md-4 col-sm-4 text-left">
			<a class="header-link" href="/?p=about#footer-map">Контакты</a>
			<br>
			<span class="header-phone">8 800 500-53-16</span>
		</div>
	</div>
</header>