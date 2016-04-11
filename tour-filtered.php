<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: Admin
	 * File: tour-filtered.php
	 * Project: tour
	 * Date: 20.10.2015
	 * Feedback: support@devorans.com
	 ************************************/ ?>


<div id="sub-header" style="background-image:url('/DEMO/sh-tour-filtered.jpg')">
	<h3>Шри-Ланка</h3>
</div>

<div class="container" id="tour-filtered">
	<div class="row">
		<h2 class="col-xs-12 col-sm-6 col-md-6 roboto-light">Найдено 28 отелей</h2>

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right" id="filters">
			<div class="big">
				<span class="xs-pull-right">
					<span class="hidden-xxs">Валюта</span>
          <label class="x-input-dd x-text closed hidden-xs" style="color:#965738;">
      			<input type="hidden" placeholder="Выбрать город" value="3">
      			<sub data-before="Из: ">RUB</sub>
      				<span style="display: none;">
      					<i data-value="1">RUB</i>
      					<i data-value="2">EUR</i>
      					<i data-value="3" class="selected">USD</i>
      				</span>
      		</label>
				</span>
				<span class="view-change xs-pull-left"><a class="active" href="#">Плиткой</a><a href="#">Списком</a></span>
			</div>
		</div>
	</div>

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
