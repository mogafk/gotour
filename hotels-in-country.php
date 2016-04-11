<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: Admin
	 * File: hotels-in-country.php
	 * Project: tour
	 * Date: 20.10.2015
	 * Feedback: support@devorans.com
	 ************************************/?>


<div id="sub-header" style="background-image:url('/DEMO/sh-hotels-in-country.jpg')">
	<h3>Край родной навеки, латвия моя</h3>
</div>

<div class="container">
	<div class="breadcrumbs"><a href="#">Все страны</a> - <a href="#">Латвия</a></div>
	<h1>Топ отелей Латвии</h1>
	<div id="filters"></div>

	<div id="hotels-list">
		<? for($i=0;$i<7;$i++): ?>
		<div class="hotel clearfix">
			<div class="col-xs-5 col-sm-3 col-md-2 pull-right">
				<div class="price text-right">2 140<i class="fa fa-rub"></i><small>на одного за сутки</small></div>
				<div class="btn btn-orange">Подробнее</div>
			</div>
			<div class="col-xs-7 col-sm-5 col-md-4">
				<h2>Aktas Ronto Hotel</h2>
				<small class="hidden-xxs">Рига, 25 км от аэропорта</small>
			</div>
			<div class="col-xs-7 col-sm-2 col-md-3 stars">
				<span class="visible-xs-inline">Рейтинг </span>
				<i class="hidden-xs hidden-sm glyphicon glyphicon-star active"></i>
				<i class="hidden-xs hidden-sm glyphicon glyphicon-star active"></i>
				<i class="hidden-xs hidden-sm glyphicon glyphicon-star"></i>
				<span>~ 4.2</span>
			</div>
			<div class="hidden-xs col-sm-2 col-md-2">
				<a class="comments" href="#">40 отзывов</a>
			</div>
			<div class="hidden-xs hidden-sm col-md-1 options">
				<i class="fa fa-wifi"></i>
			</div>
		</div>
		<? endfor; ?>
		<div class="text-center">
			<button class="btn-more">Показать еще</button>
		</div>
	</div>

</div>