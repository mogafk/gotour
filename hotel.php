<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: Admin
	 * File: hotel.php
	 * Project: tour
	 * Date: 20.10.2015
	 * Feedback: support@devorans.com
	 ************************************/?>

<nav id="hotel-comment" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
  <div class="hotel-addcomment-bar">
    <h3>Добавить отзыв</h3>
    <form class="hotel-addcomment-form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Представтесь">
      </div>
      <div class="input-group date">
  			<input type="text" class="form-control" placeholder="Дата отдыха">
        <span class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </span>
  		</div>
      <ul class="input-group--checkboxs">
        <li>
          <label class="x-input-radio">
    				<input type="radio" name="col" id="addcomment-col1" checked>
    				<i><i></i></i>
    				<span>Отдыхал(а)</span>
    			</label>
        </li>
        <li>
          <label class="x-input-radio">
    				<input type="radio" name="col" id="addcomment-col2">
    				<i><i></i></i>
    				<span>С семьей</span>
    			</label>
        </li>
      </ul>
      <div class="form-group">
        <h4>Обслуживание</h4>
        <select class="form-control">
          <option>Выберите</option>
          <?php for($i=1;$i<=10;$i++){ ?>
          <option><?php echo $i; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <h4>Питание</h4>
        <select class="form-control">
          <option>Выберите</option>
          <?php for($i=1;$i<=10;$i++){ ?>
          <option><?php echo $i; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <h4>Состояние номера</h4>
        <select class="form-control">
          <option>Выберите</option>
          <?php for($i=1;$i<=10;$i++){ ?>
          <option><?php echo $i; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <textarea class="form-control" placeholder="Общее впечатление" rows="3"></textarea>
      </div>
      <div class="hotel-addcomment-photos">
        <div class="hotel-addcomment-linephoto">
          <?php for($i=1;$i<=3;$i++){ ?>
          <div class="hotel-addcomment-item">
            <div class="hotel-addcomment-photo">
              <span class="hotel-addcomment-photo--text">Загрузить<br>фото</span>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <a href="#" class="hotel-addcomment-addphoto">добавить Еще фото</a>
      <div class="hotel-addcomment-btn">
        <button class="btn btn-orange btn-block">оставить отзыв</button>
      </div>
    </form>
  </div>
</nav>

<div id="sub-header" class="sub-header_hotel xxs-compact" style="background-image:url('/img/bg-sub-header-hotel.jpg')">

</div>
<div class="hotel-header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8">
        <h1 class="hotel-name">PORTO AZZURRO CLUB MARE</h1>
        <ul class="hotel-breadcrumbs">
          <li><a href="#">Отели Австрия</a></li>
          <li class="sep">/</li>
          <li>Porto Azzurro Club Mare</li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-right-no-xs text-right">
        <div class="hotel-rating">
          <div class="hotel-rating--star"><img src="DEMO/rating.png" width="123" height="19" alt=""></div>
          <span class="hotel-rating--number">~ 4,7</span>
        </div>
        <button class="hotel-addcomment btn btn-yellow" data-recalc="false" data-toggle="offcanvas" data-target="#hotel-comment" data-canvas="#site-wrap">добавить отзыв</button>
      </div>
    </div>
  </div>
</div>
<div class="hotel-slider--wrapper">
  <div class="container">
    <div class="hotel-slider hidden-xs">
      <?php for($i=0;$i<=9;$i++){ ?>
      <div>
        <div class="hotel-slide">
        <a href="DEMO/hotel<?php echo rand(1,3); ?>.jpg" class="fancybox" rel="hotel-gallery1">
          <img src="DEMO/hotel<?php echo rand(1,3); ?>.jpg"  alt="">
          <span class="hotel-slide--zoom icons-search"></span>
        </a>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="hotel-slider visible-xs">
      <?php for($i=0;$i<=4;$i++){ ?>
      <div>
        <div class="hotel-slide">
        <a href="DEMO/hotel<?php echo rand(1,3); ?>.jpg" class="fancybox" rel="hotel-gallery1">
          <img src="DEMO/hotel<?php echo rand(1,3); ?>.jpg"  alt="">
          <span class="hotel-slide--zoom icons-search"></span>
        </a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="hotel-info hidden-xs">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="hotel-info--item">
          <div class="hotel-info--img">
            <span class="icons-hotel-beach"></span>
          </div>
          <div class="hotel-info--content">
            <h3 class="hotel-info--header">Пляж</h3>
            <p>Муниципальный, 495 м до пляжа,
            в пешей доступности, песок,
            оборудованный</p>
            <p>Пусть к пляжу: через дорогу
            Выход на море: пологий.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="hotel-info--item">
          <div class="hotel-info--img">
            <span class="icons-hotel-info"></span>
          </div>
          <div class="hotel-info--content">
            <h3 class="hotel-info--header">Коротко об отеле</h3>
            <p>50 номеров, 11 этажей, тип корпуса: одно здание</p>
            <p>Год строительства: 2009</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="hotel-info--item">
          <div class="hotel-info--img">
            <span class="icons-hotel-pool"></span>
          </div>
          <div class="hotel-info--content">
            <h3 class="hotel-info--header">Бассейны</h3>
            <p>Открытый басейн</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="hotel">
	<div class="container">
		<!-- Nav tabs -->
		<ul class="nav" id="hotel-tabs">
			<li class="active"><a href="#info" data-toggle="tab">Описание и туры</a></li>
			<li><a href="#comments" data-toggle="tab">Отзывы клиентов <span>7</span></a></li>
			<li><a href="#map" data-toggle="tab">Отель на карте</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
      <div class="visible-xs">
        <a href="#" class="tab-xs-header tab-xs-header_active">Описание и туры <span class="icon"><i class="fa fa-angle-up"></i></span></a>
      </div>
			<div class="tab-pane fade in active" id="info">
        <div class="search-hotel">
          <div class="search-hotel--header">
            <h2>
          		<span>Туры в отель <span class="hidden-xs">из</span></span>
          		<label class="x-input-dd x-text no-caret closed hidden-xs">
          			<input type="hidden" placeholder="Выбрать город" value="3">
          			<sub data-before="Из: ">Санкт Петербурга</sub>
          				<span style="display: none;">
          					<i data-value="1">Екатеринбурга</i>
          					<i data-value="2">Москвы</i>
          					<i data-value="3" class="selected">Санкт Петербурга</i>
          					<i data-value="4">Владивостока</i>
          				</span>
          		</label>
            </h2>
            <label class="x-input-dd x-text no-caret closed visible-xs hotel-xs-city">
        			<input type="hidden" placeholder="Выбрать город" value="3">
        			<sub data-before="Откуда: ">Санкт Петербурга</sub>
        				<span style="display: none;">
        					<i data-value="1">Екатеринбурга</i>
        					<i data-value="2">Москвы</i>
        					<i data-value="3" class="selected">Санкт Петербурга</i>
        					<i data-value="4">Владивостока</i>
        				</span>
        		</label>
          </div>
          <div class="search-hotel--filter">
            <div class="row">
              <div class="col-md-4 col-sm-5 col-xs-12">
                <h4 class="search-hotel--titlefield hidden-xs">Начало поездки</h4>
                <div class="input-group date">
            			<input type="text" class="form-control hidden-xs" placeholder="">
            			<input type="text" class="form-control visible-xs" placeholder="Дата">
                  <span class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                  </span>
        				</div>
            		<label class="x-input-dd x-text no-caret closed search-hotel--filter_time">
            			<input type="hidden" value="1">
            			<sub data-before="На: ">5-7 дней</sub>
            				<span style="display: none;">
            					<i data-value="1">5-7 дней</i>
            					<i data-value="2">7-12 дней</i>
            					<i data-value="4">более 12 дней</i>
            				</span>
            		</label>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12">
                <h4 class="search-hotel--titlefield hidden-xs">Взрослые</h4>
                <div class="hidden-xs">
                  <label class="count-input">
        						<span class="pull-right minus">-</span>
        						<span class="pull-left plus">+</span>
        						<input type="number" step="1" min="1" max="27" value="2">
        					</label>
                </div>
                <div class="col-xs-12">
                  <label class="x-input-dd x-text no-caret closed">
              			<input type="hidden" value="1">
              			<sub data-before="">Все типы питания</sub>
              				<span style="display: none;">
              					<i data-value="1">Все типы питания</i>
              					<i data-value="2">Обед</i>
              					<i data-value="4">Все включено</i>
              				</span>
              		</label>
                </div>
                <div class="visible-xs col-xs-12 text-center">
                  <label class="count-input">
        						<span class="pull-right minus">-</span>
        						<span class="pull-left plus">+</span>
        						<input type="number" step="1" min="1" max="27" value="2">
        					</label>
                </div>
              </div>
              <div class="col-md-3 hidden-sm hidden-xs">
                <div class="search-hotel--children">
                  <label class="x-input-check">
            				<input type="checkbox">
            				<i><i class="fa fa-check"></i></i>
            				<span>А также дети</span>
            			</label>
                </div>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="xs-padding">
                  <a href="#" class="btn btn-green btn-block">Найти</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="hotel-tours-info" class="hotel-tours-info hidden-xs">В тур включен перелет, проживание в отеле с выбранным типом питания, медицинская страховка, трансфер. Наша цена честная и финальная: она уже включает все необходимые сборы от туроператоров.</div>
        <hr class="hotel-hr">
        <div class="col-md-12 hotel-table--header clearfix hidden-xs hidden-sm">
					<div class="col-sm-5 col-md-4 col-lg-3">Дата</div>
					<div class="col-sm-2 col-md-2 col-lg-2">Питание</div>
					<div class="col-sm-2 col-md-2 col-lg-3">Номер</div>
					<div class="hidden-sm col-md-2 col-lg-2">Туроператор</div>
					<div class="col-sm-3 col-md-2 col-lg-2"></div>
				</div>
				<?for($i=0;$i<5;$i++):?>
					<div class="col-md-12 tour-list-item clearfix hotel-table">
						<div class="col-xs-6 col-sm-3 col-md-2 pull-right" style="min-height:50px;">
							<div class="price pull-right text-left">28&nbsp;500&nbsp;<i class="fa fa-rub"></i><small>на всех</small></div>
							<div class="btn btn-orange">Купить сейчас</div>
						</div>
						<div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
							<div class="xs-pull-left"><span class="date">10.12</span>&nbsp;<span class="hidden-xs"> вылет из Екатеринбурга</span></div>
							<div class="xs-pull-left"><span class="date"><b class="visible-xs-inline-block">- </b>16.12</span>&nbsp;<span class="hidden-xs"> вылет обратно, 7 ночей</span></div>
							<div class="visible-xs clearfix"></div>
							<div class="visible-xs">7 ночей</div>
						</div>
						<div class="col-xs-6 col-sm-2 col-md-2 info">
							<span>Завтраки</span>
						</div>
						<div class="hidden-xs col-sm-2 col-md-2 col-lg-3 info">
							<span>Номер Стандартный.<br class="hidden-lg"> 2 взрослых</span>
						</div>
						<div class="hidden-xs hidden-sm col-md-2 info">
							<span>Веди тур</span>
						</div>
					</div>
				<?endfor;?>
        <div class="clearfix"></div>
        <h2 class="clearfix">Отзывы об отеле</h2>
        <div class="hotel-comments--list">
          <?php for($i=1;$i<=5;$i++){ ?>
          <div class="hotel-comment--item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="col-xs-8">
                  <h4 class="hotel-comment--author">Иванов Илья</h4>
                  <span class="hotel-comment--date">28.08.15</span>
                </div>
                <div class="hotel-comment--rating col-xs-4">7,8 из 10</div>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="hotel-comment--text">
                  <p>Ассортиментная политика предприятия позиционирует социометрический рекламный макет. Организация службы маркетинга тормозит социометрический повторный кон</p>
                </div>
                <a href="#" class="hotel-comment--fulllink hidden-xs">Читать отзыв</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="">
					<h2 class="clearfix">Уютный отель на берегу моря</h2>
					<div class="row hotel-xs-padding">
						<div class="col-sm-12 col-md-9 col-lg-9">
							<p>Тур "Наследие великих цивилизаций" поражает воображение! Целых 3 дня путешествия посвящены загадочному Стамбулу. Затем Вы побываете в Чанаккале, где разворачивалось действие «Илиады», увидите культурные святыни, открытые во время раскопок Шлиманна! Вас ждут руины города Пергам, «хлопковый замок» в Памуккале, термальные ванны Клеопатры, древний город Иераполис, экскурсия по Анталии и поездка к невероятному водопаду!</p>
							<p>В стоимость тура включены: перелёт, проживание в отелях с завтраками, трансферы на комфортабельном автобусе, экскурсии, услуги гида.</p>
						</div>
						<div class="hidden-sm col-md-3 col-lg-3 weather">
							<div class="temp" data-operator="+" style="background-image:url(/img/weather-1.png)">35</div>
							<div class="desc">Переменная облачность, без осадков</div>
						</div>
					</div>
					<div id="hotel-options">
            <div class="col-xs-12">
              <div class="hotel-options-xs-select--wrapper">
                <a href="#" class="visible-xs hotel-options-xs-select">
                  <span class="text">Инфраструктура</span>
                  <span class="icon"><i class="fa fa-caret-down"></i></span>
                </a>
    						<!-- Nav tabs -->
    						<ul class="nav hotel-options-xs-select--submenu">
    							<li class="active"><a href="#opt-1" data-toggle="tab">Инфраструктура</a></li>
    							<li><a href="#opt-2" data-toggle="tab">Платно</a></li>
    							<li><a href="#opt-3" data-toggle="tab">В номере</a></li>
    							<li><a href="#opt-4" data-toggle="tab">Типы комнат</a></li>
    						</ul>
              </div>
            </div>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="opt-1">
                <ul class="hotel-options-list">
                  <li>3 ресторана</li>
                  <li>3 бара</li>
                  <li>2 бассейна</li>
                  <li>Услуги врача</li>
                </ul>
							</div>
							<div class="tab-pane" id="opt-2"></div>
							<div class="tab-pane" id="opt-3"></div>
							<div class="tab-pane" id="opt-4"></div>
						</div>
					</div>
					<div id="filters"></div>

				</div>

			</div>
      <div class="visible-xs">
        <a href="#" class="tab-xs-header">Отзывы клиентов <span class="icon"><i class="fa fa-angle-down"></i></span></a>
      </div>
			<div class="tab-pane fade" id="comments">
				<div class="clearfix xs-padding">
					<h2 class="pull-left">Отзывы клиентов</h2>
					<button class="btn pull-right" data-recalc="false" data-toggle="offcanvas" data-target="#hotel-comment" data-canvas="#site-wrap">Добавить отзыв</button>
				</div>
				<? for($i=0;$i<7;$i++):?>
				<div class="comment clearfix">
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="name">Иванов Иван</div>
						<div class="date">28.08.15</div>
						<a href="#" class="photos hidden-xs">Фотоотчет</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-2 pull-right text-right">
						<p class="gray hidden-xs">Общая оценка:</p>
						<div class="rating"><b>7,8</b> из 10</div>
					</div>
					<div class="visible-xs clearfix"></div>
					<div class="visible-xs"><br></div>
					<div class="col-xs-12 col-sm-6 col-md-7">
						<p>Тестовый текст. Написан для наглядности. Расширяет блок в зависимости от количества текста... Тестовый текст. Написан для наглядности. Расширяет блок в зависимости от количества текста...</p>
						<p class="gray hidden-xs">Отдыхал: один</p>
					</div>
				</div>
				<? endfor; ?>

				<div class="more"><a href="#">Показать еще</a></div>
			</div>
      <div class="visible-xs">
        <a href="#" class="tab-xs-header">Отель на карте <span class="icon"><i class="fa fa-angle-down"></i></span></a>
      </div>
			<div class="tab-pane fade frame-map" id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58730.31270831107!2d60.64912399337177!3d56.83602367647622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sby!4v1447341222324" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
  <div class="block-hotel-comments">
    <div class="container">
      <h3>ОТЗЫВЫ ОБ ОТЕЛЕ GREEN WORLD HOTEL</h3>
      <div class="block-hotel-comments--list row">
        <?php for($i=1;$i<=3;$i++){ ?>
        <div class="col-md-4 col-sm-6 <?php if($i==3) echo 'hidden-sm'; ?> <?php if($i>1) echo 'hidden-xs'; ?>">
          <div class="block-hotel-comments--item">
            <div class="block-hotel-comments--header">
              <span class="block-hotel-comments--author">Сергей</span>
              <span class="block-hotel-comments--rating">7,8 из 10</span>
            </div>
            <div class="block-hotel-comments--place">Green World Hotel, Вьетнам, Нячанг, Ноябрь 2015</div>
            <div class="block-hotel-comments--content">Ассортиментная политика предприятия позиционирует социометрический рекламный макет. Организация службы маркетинга тормозит социометрический повторный контракт</div>
            <a href="#" class="block-hotel-comments--fulllink">Читать отзыв</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="hotel-bottom">
  <div class="container">
    <div class="hotel-photos">
    <?php for($i=1;$i<=7;$i++){ ?>
      <a href="DEMO/hotel<?php echo rand(1,3); ?>.jpg" class="fancybox <?php if($i>5) echo 'hidden-sm ' ?><?php if($i>4) echo 'hidden-xs' ?>" rel="hotel-gallery2"><img src="DEMO/hotel<?php echo rand(1,3); ?>.jpg" alt=""></a>
    <?php } ?>
    </div>
    <div class="hotel-beside">
      <h3>ОТЕЛИ РЯДОМ С GREEN WORLD HOTEL, НЯЧАНГ, ВЬЕТНАМ</h3>
      <div class="row">
      <?php for($i=1;$i<=3;$i++){ ?>
        <div class="col-md-3 col-sm-4">
          <ul class="hotel-beside--list">
            <li><a href="#">Barcelona 3*</a></li>
            <li><a href="#">Ha Thanh Hotel 2*</a></li>
            <li><a href="#">Daisy 3*</a></li>
          </ul>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
