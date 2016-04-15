<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: HukpoFuJl
	 * File: promo-item.php
	 * Project: TOUR
	 * Date: 17.10.2015
	 * Feedback: support@devorans.com
	 ************************************/?>


<div id="sub-header" class="large" style="background-image:url('/DEMO/sh-promo-item.jpg')">
	<h3>Загадки Стамбула и неизведанная Турция! Море экскурсий!</h3>
	<div id="circle-blocks">
		<div class="block" id="cbl-1">
			<div class="icon" style="background-image:url(/img/circle-1.png)"></div>
			<div class="info">
				<h4 class="title">Приемлимые цены</h4>
				<span class="text">Сообщите нам, если найдете туры дешевле</span>
			</div>
		</div>
		<div class="block active" id="cbl-2">
			<div class="icon" style="background-image:url(/img/circle-2.png)"></div>
			<div class="info">
				<h4 class="title">Приемлимые цены</h4>
				<span class="text">Сообщите нам, если найдете туры дешевле</span>
			</div>
		</div>
		<div class="block" id="cbl-3">
			<div class="icon" style="background-image:url(/img/circle-3.png)"></div>
			<div class="info">
				<h4 class="title">Приемлимые цены</h4>
				<span class="text">Сообщите нам, если найдете туры дешевле</span>
			</div>
		</div>
		<div class="controls">
			<span data-target="cbl-1"></span>
			<span data-target="cbl-2" class="active"></span>
			<span data-target="cbl-3"></span>
		</div>
	</div>
</div>
<div id="promo-item">
	<div class="container">
		<h1>Уникальные места, потрясающие памятники, которые Вы не забудете!</h1>
		<div class="row">
			<div class="col-sm-9 col-md-9 col-lg-9">
				<p>Тур "Наследие великих цивилизаций" поражает воображение! Целых 3 дня путешествия посвящены загадочному Стамбулу. Затем Вы побываете в Чанаккале, где разворачивалось действие «Илиады», увидите культурные святыни, открытые во время раскопок Шлиманна! Вас ждут руины города Пергам, «хлопковый замок» в Памуккале, термальные ванны Клеопатры, древний город Иераполис, экскурсия по Анталии и поездка к невероятному водопаду!</p>
				<p>В стоимость тура включены: перелёт, проживание в отелях с завтраками, трансферы на комфортабельном автобусе, экскурсии, услуги гида.</p>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3 weather">
				<div class="temp" data-operator="+" style="background-image:url(/img/weather-1.png)">35</div>
				<div class="desc">Переменная облачность, без осадков</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-4 col-lg-4">
				<h2>Доступные вылеты</h2>
				<div id="date-picker"></div>
				<script type="text/javascript">
					ready(function () {
						$('#date-picker').datetimepicker({
							locale: 'ru',
							format: "dddd, MMMM Do YYYY",
							inline: true,
							sideBySide: true
						});
					});
				</script>
			</div>
			<div class="col-md-8 col-lg-8">
					<div id="filters">
						<div class="row">
							<div class="btn-group visible-xs col-xs-12">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>Откуда</button>
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
							<div class="col-xs-12 col-sm-8 col-md-8 hidden-xs" style="line-height: 25px;">
								<span class="hidden-xs">Отправление из</span>
								<span class="hidden-xs dropdown-text">Екатеринбурга</span>

								<span style="margin-left:20px">Валюта</span>
								<span class="dropdown-text">RUB<span class="caret"></span></span>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 text-right people-count">
								<span class="hidden-sm hidden-xs">Нас едет</span>
								<label class="count-input">
									<span class="pull-right minus">-</span>
									<span class="pull-left plus">+</span>
									<input type="number" step="1" min="1" max="27" value="2">
								</label>

								<div class="btn-group visible-xs">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>RUB</button>
									<ul class="dropdown-menu">
										<li><a href="#">USD</a></li>
										<li><a href="#">EUR</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div>
						<?for($i=0;$i<5;$i++):?>
						<div class="col-md-12 tour-list-item clearfix">
							<div class="col-xs-7 col-sm-4 col-md-4 pull-right" style="min-height:50px;">
								<div class="price pull-right text-left">28&nbsp;500&nbsp;<i class="fa fa-rub"></i><small>на всех</small></div>
								<div class="btn btn-orange">Купить сейчас</div>
							</div>
							<div class="col-xs-5 col-sm-5 col-md-5">
								<div class="xs-pull-left"><span class="date">10.12</span>&nbsp;<span class="hidden-xs"> вылет</span></div>
								<div class="xs-pull-left"><span class="date"><b class="visible-xs-inline-block">- </b>16.12</span>&nbsp;<span class="hidden-xs"> обратно, 7 ночей</span></div>
								<div class="visible-xs clearfix"></div>
								<div class="visible-xs">7 ночей</div>
							</div>
							<div class="col-xs-5 col-sm-3 col-md-3 info">
								<span>Завтраки</span>
							</div>
						</div>
						<?endfor;?>
					</div>
			</div>
		</div>
	</div>
</div>