<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: HukpoFuJl
	 * File: promo.php
	 * Project: TOUR
	 * Date: 17.10.2015
	 * Feedback: support@devorans.com
	 ************************************/ ?>


<div id="sub-header" class="xxs-compact" style="background-image:url('/DEMO/sh-promo.jpg')">
	<h3 class="hidden-xxs">Самые выгодные предложения</h3>
</div>
<div class="container" id="filters">
	<h3 class="visible-xxs">Самые выгодные предложения</h3>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 big">
			<span class="hidden-xs">Отправление из</span>
<!--			<span class="hidden-xs dropdown-text">Екатеринбурга</span>-->
			<select class="selectize-text dropdown-text w200" placeholder="">
				<option value="1">Екатеринбурга</option>
				<option value="2">Москвы</option>
				<option value="3">Питера</option>
				<option value="4">Брянска</option>
			</select>

			<div class="btn-group visible-xs">
				<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Откуда<span
						class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Аквапарки</a></li>
					<li><a href="#">Бизнес</a></li>
					<li><a href="#">Гастротуризм</a></li>
					<li><a href="#">Греция</a></li>
					<li><a href="#">Дети</a></li>
					<li><a href="#">Египет</a></li>
					<li><a href="#">Интересное</a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix visible-xs"></div>
		<div class="hidden-xs col-sm-6 col-md-6 col-lg-6 text-right big">
			<span>Валюта</span>
<!--			<span class="dropdown-text">RUB<span class="caret"></span></span>-->

			<select class="selectize-text dropdown-text w55" placeholder="">
				<option value="1">RUB</option>
				<option value="2">USD</option>
				<option value="3">EUR</option>
				<option value="4">GBP</option>
			</select>

			<span class="view-change"><a class="active" href="#">Плиткой</a><a href="#">Списком</a></span>
		</div>
		<div class="clearfix visible-sm visible-xs"></div>
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 pull-right text-right people-count">
			<div class="visible-md visible-lg clearfix" style="margin-top: 18px;"></div>
			<span class="hidden-sm hidden-xs">Нас едет</span>
			<label class="count-input">
				<span class="pull-right minus">-</span>
				<span class="pull-left plus">+</span>
				<input type="number" step="1" min="1" max="27" value="2">
			</label>

			<div class="btn-group visible-xs">
				<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>RUB
				</button>
				<ul class="dropdown-menu">
					<li><a href="#">USD</a></li>
					<li><a href="#">EUR</a></li>
				</ul>
			</div>
		</div>
		<div class="hidden-xs col-sm-8 col-md-9 col-lg-10 checkboxes">
			<div class="element"><input type="checkbox" id="fcb-1" checked><label
					for="fcb-1"><span></span> Дешево</label></div>
			<div class="element"><input type="checkbox" id="fcb-2" checked><label
					for="fcb-2"><span></span> Потусить</label></div>
			<div class="element"><input type="checkbox" id="fcb-3" checked><label
					for="fcb-3"><span></span> С детьми</label></div>
			<div class="element"><input type="checkbox" id="fcb-4" checked><label
					for="fcb-4"><span></span> На пляж</label></div>
			<div class="element"><input type="checkbox" id="fcb-5"><label
					for="fcb-5"><span></span> Виза не нужна</label></div>
			<div class="element"><input type="checkbox" id="fcb-6"><label for="fcb-6"><span></span> Все включено</label>
			</div>
			<div class="element"><input type="checkbox" id="fcb-7"><label for="fcb-7"><span></span> Экскурсии</label>
			</div>
			<div class="element invisible" style="width:100%"></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="tour-block">
				<div class="thumb">
					<img src="/DEMO/tour-item-1.jpg">
					<span class="sale" data-perc="20"></span>
					<a href="#" class="like"></a>
				</div>
				<div class="sub-thumb">
					<span class="pull-left">Завтраки</span>
					<span class="pull-right">Вылеты 9 октября - 13 ноября</span>
				</div>
				<div class="info">
					<h2>Aktas Hotel
						<small>Китай, Пекин, 25 км от аэропорта</small>
					</h2>
					<div class="price">34&nbsp;200&nbsp;<i class="fa fa-rub"></i>
						<small>на всех</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="tour-block">
				<div class="thumb">
					<img src="/DEMO/tour-item-2.jpg">
					<span class="sale" data-perc="20"></span>
					<a href="#" class="like"></a>
				</div>
				<div class="sub-thumb">
					<span class="pull-left">Завтраки</span>
					<span class="pull-right">Вылеты 9 октября - 13 ноября</span>
				</div>
				<div class="info">
					<h2>Poly Plaza Hotel
						<small>Китай, Пекин, 25 км от аэропорта</small>
					</h2>
					<div class="price">146&nbsp;300&nbsp;<i class="fa fa-rub"></i>
						<small>на всех</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="tour-block">
				<div class="thumb">
					<img src="/DEMO/tour-item-3.jpg">
					<span class="sale" data-perc="20"></span>
					<a href="#" class="like"></a>
				</div>
				<div class="sub-thumb">
					<span class="pull-left">Завтраки</span>
					<span class="pull-right">Вылеты 9 октября - 13 ноября</span>
				</div>
				<div class="info">
					<h2>Ping An Fu
						<small>Китай, Пекин, Средний Чаоян, 25 км от аэропорта</small>
					</h2>
					<div class="price">28&nbsp;500&nbsp;<i class="fa fa-rub"></i>
						<small>на всех</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="tour-block">
				<div class="thumb">
					<img src="/DEMO/tour-item-4.jpg">
					<span class="sale" data-perc="20"></span>
					<a href="#" class="like"></a>
				</div>
				<div class="sub-thumb">
					<span class="pull-left">Завтраки</span>
					<span class="pull-right">Вылеты 9 октября - 13 ноября</span>
				</div>
				<div class="info">
					<h2>Poly Plaza Hotel
						<small>Китай, Пекин, 25 км от аэропорта</small>
					</h2>
					<div class="price">146&nbsp;300&nbsp;<i class="fa fa-rub"></i>
						<small>на всех</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="tour-block">
				<div class="thumb">
					<img src="/DEMO/tour-item-5.jpg">
					<span class="sale" data-perc="20"></span>
					<a href="#" class="like"></a>
				</div>
				<div class="sub-thumb">
					<span class="pull-left">Завтраки</span>
					<span class="pull-right">Вылеты 9 октября - 13 ноября</span>
				</div>
				<div class="info">
					<h2>Ping An Fu
						<small>Китай, Пекин, 25 км от аэропорта</small>
					</h2>
					<div class="price">34&nbsp;200&nbsp;<i class="fa fa-rub"></i>
						<small>на всех</small>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="tour-block">
				<div class="thumb">
					<img src="/DEMO/tour-item-1.jpg">
					<span class="sale" data-perc="20"></span>
					<a href="#" class="like"></a>
				</div>
				<div class="sub-thumb">
					<span class="pull-left">Завтраки</span>
					<span class="pull-right">Вылеты 9 октября - 13 ноября</span>
				</div>
				<div class="info">
					<h2>Poly Plaza Hotel
						<small>Китай, Пекин, 25 км от аэропорта</small>
					</h2>
					<div class="price">34 200 <i class="fa fa-rub"></i>
						<small>на всех</small>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="more"><a href="#">Загрузить еще</a></div>