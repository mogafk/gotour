<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: Admin
	 * File: tour-hot.php
	 * Project: tour
	 * Date: 20.10.2015
	 * Feedback: support@devorans.com
	 ************************************/ ?>

<div id="sub-header" style="background-image:url('/DEMO/sh-tour-hot.png')">
	<h3>Билеты в лето! Горячие туры!</h3>
</div>
<div class="container" id="x-filters">

	<div class="flex-1 col-xs-12 col-sm-6 col-md-6 col-lg-6 big">
		<span class="hidden-xs">Отправление из</span>

		<label class="x-input-dd x-text no-caret">
			<input type="hidden" placeholder="Выбрать город">
			<sub data-before="Из: "></sub>
				<span>
					<i data-value="1">Екатеринбург</i>
					<i data-value="2">Москва</i>
					<i data-value="3">Санкт Петербург</i>
					<i data-value="4">Владивосток</i>
				</span>
		</label>
	</div>

	<div class="flex-4 col-xs-5 col-sm-6 col-md-6 col-lg-6 text-right big">
		<span class="hidden-xs">Валюта</span>

		<label class="x-input-dd x-text">
			<input type="hidden">
			<sub></sub>
				<span>
					<i data-value="1">RUB</i>
					<i data-value="2">USD</i>
					<i data-value="3">EUR</i>
					<i data-value="4">GBP</i>
				</span>
		</label>


		<span class="view-change hidden-xs"><a class="active" href="#">Плиткой</a><a href="#">Списком</a></span>
	</div>

	<div class="clearfix hidden-xs" style="margin-bottom: 20px;"></div>

	<div class="flex-2 col-xs-12 col-sm-5 col-md-3 col-lg-3">
		<label class="x-input-dd">
			<input type="hidden" placeholder="Выберите страну">
			<sub data-before="В: "></sub>
			<span>
				<i data-value="1">Абхазия       </i>
				<i data-value="2">Австрия       </i>
				<i data-value="3">Андорра       </i>
				<i data-value="4">Бельгия       </i>
				<i data-value="5">Болгария      </i>
				<i data-value="6">Ватикан       </i>
				<i data-value="7">Великобритания</i>
				<i data-value="8">Венгрия       </i>
				<i data-value="9">Германия      </i>
			</span>
		</label>
	</div>

	<div class="flex-6 col-xs-6 col-sm-4 col-md-3 col-lg-4 text-right">
		<span class="hidden-xs">До вылета:</span>
		<label class="x-input-dd x-text no-caret">
			<input type="hidden">
			<sub data-before="Через: "></sub>
				<span>
					<i data-value="1">2-3 дня</i>
					<i data-value="2">3-5 дней</i>
					<i data-value="3">5-10 дней</i>
					<i data-value="4">более 10 дней</i>
				</span>
		</label>
	</div>

	<div class="flex-5 col-xs-6 col-sm-3 col-md-3 col-lg-3">

		<span class="hidden-xs">Едем на:</span>
		<label class="x-input-dd x-text no-caret">
			<input type="hidden">
			<sub data-before="На: "></sub>
				<span>
					<i data-value="1">5-7 дней</i>
					<i data-value="2">7-12 дней</i>
					<i data-value="4">более 12 дней</i>
				</span>
		</label>
	</div>

	<div class="flex-3 col-xs-7 col-sm-3 col-md-3 col-lg-2 text-right pull-right">
		<div style="height:27px" class="visible-sm"></div>

		<span class="hidden-xs">Нас едет</span>

		<label class="x-input-plus-minus">
			<span class="x-minus">—</span>
			<span class="x-plus">+</span>
			<input type="number" step="1" min="1" max="27" value="2" readonly>
		</label>

	</div>

	<div class="flex-7 col-xs-12 col-sm-9 col-md-12 col-lg-12 x-input-chk-group">
		<div style="height:20px" class="hidden-xs"></div>
		<sub>Дополнительно</sub>

		<span class="x-group">
			<label class="x-input-check">
				<input type="checkbox" checked>
				<i><i class="fa fa-check"></i></i>
				<span>Дешево</span>
			</label>

			<label class="x-input-check">
				<input type="checkbox" checked>
				<i><i class="fa fa-check"></i></i>
				<span>Потусить</span>
			</label>

			<label class="x-input-check">
				<input type="checkbox" checked>
				<i><i class="fa fa-check"></i></i>
				<span>С детьми</span>
			</label>

			<label class="x-input-check">
				<input type="checkbox" checked>
				<i><i class="fa fa-check"></i></i>
				<span>На пляж</span>
			</label>

			<label class="x-input-check">
				<input type="checkbox">
				<i><i class="fa fa-check"></i></i>
				<span>Виза не нужна</span>
			</label>

			<label class="x-input-check">
				<input type="checkbox">
				<i><i class="fa fa-check"></i></i>
				<span>Все включено</span>
			</label>

			<label class="x-input-check">
				<input type="checkbox">
				<i><i class="fa fa-check"></i></i>
				<span>Экскурсии</span>
			</label>

			<span class="invisible" style="display:inline-block;width:100%"></span>
		</span>
	</div>


</div>

<div class="container">
	<div class="row">
    <?php for($i=1;$i<=9;$i++){ ?>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="tour-block tour-block-new">
        <div class="tour-header row">
          <h2 class="col-md-7">SIGMA RESORT <?php if(rand(0,1)) echo 'JOMTIEN PATTAYA';  ?></h2>
          <div class="tour-rating col-md-5">
            <div class="tour-rating--star"><img src="img/tour-rating.png" width="59" height="12" alt=""></div>
            <span class="tour-rating--num">~ 4,2</span>
          </div>
        </div>
        <div class="tour-desc">Таиланд, Паттайя, пляж Джомтьен, 1 линия, Песок, Оборудованный</div>
				<div class="thumb">
					<img src="/DEMO/tour-item-1.jpg">
					<a href="#" class="like like-left"></a>
				</div>
				<div class="tour-footer">
          <div class="col-md-4">
            <div class="tour-eat">
              <span>Завтраки</span>
              19 ноября на 6 ночей
            </div>
          </div>
          <div class="col-md-3">
            <a href="#" class="tour-commentlink">Отзывы (14)</a>
          </div>
          <div class="col-md-5">
            <div class="tour-price">34&nbsp;200&nbsp;<i class="fa fa-rub"></i></div>
          </div>
				</div>
			</div>
		</div>
    <?php } ?>


	</div>
</div>
<div class="more"><a href="#">Загрузить еще</a></div>