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
    <h3>
    Добавить отзыв
    <button href="#" class="hotel-comment--close" data-toggle="offcanvas" data-target="#hotel-comment" data-canvas="#site-wrap"><i class="fa fa-times"></i></button>
    </h3>
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
        <?php for($i=0;$i<3;$i++){ ?>
        <div class="hotel-addcomment-item">
          <div class="hotel-addcomment-photo">
            <span class="hotel-addcomment-photo--text">Загрузить<br>фото</span>
            <input type="file" name="photo<?php echo $i; ?>" accept="image/*">
          </div>
        </div>
        <?php } ?>
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
  </div>
	<!-- Tab panes -->
	<div class="tab-content">
    <div class="visible-xs">
      <a href="#" class="tab-xs-header tab-xs-header_active">Описание и туры <span class="icon"><i class="fa fa-angle-up"></i></span></a>
    </div>
		<div class="tab-pane fade in active" id="info">
      <div class="hotel-search--container">
        <div class="hotel-search--form">
          <form action="#" class="form-hotelsearch">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="roundtour-city">
                    Город вылета: <a href="#" class="roundtour-city--select">Москва</a>
                    <div class="roundtour-city--submenu">
                      <input type="text" class="form-control roundtour-city--search" value="Москва">
                      <a href="#" class="roundtour-city--close"><span class="icons-close_orange"></span></a>
                      <div class="roundtour-city--wrapper scrollbar-inner">
                        <ul class="roundtour-city--list">
                          <li>Москва</li>
                          <li>Санкт-Петербург</li>
                          <li>Абакан</li>
                          <li>Актау</li>
                          <li>Актобе</li>
                          <li>Алматы</li>
                          <li>Анадырь</li>
                          <li>Анапа</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="form-group roundtour-place--container">
                    <a href="#" class="roundtour-place">
                      <span class="icon icons-location_orange"></span>
                      <span class="text">Где хотите отдохнуть?</span>
                    </a>
                    <div class="roundtour-place--submenu">
                      <input type="text" class="form-control roundtour-place--search" value="" placeholder="Где хотите отдохнуть?">
                      <span class="roundtour-place--searchicon icons-location_orange"></span>
                      <div class="roundtour-place--wrapper scrollbar-inner">
                        <ul class="roundtour-place--list">
                          <?php
                          $icons = array('','home','location','aircraft');
                          $curort = array('','Анапа','Аналипси','Evason Ana Mandara','Hostal Santa Ana Hostal Santa Ana','Ana Mandara Hue','Apatrments Ana');
                          $curortCountry = array('','Россия','Греция','Испания ЛЛарет-де-Мар','Вьетнам Фуванг','Черногория Котор');
                          for($i=1;$i<=20;$i++){ ?>
                          <li>
                            <div class="roundtour-place--icon"><span class="icons-<?php echo $icons[rand(1,3)]; ?>"></span></div>
                            <div class="roundtour-place--info">
                              <h4 class="roundtour-place--curort"><?php echo $curort[rand(1,6)]; ?></h4>
                              <span class="roundtour-place--country"><?php echo $curortCountry[rand(1,5)]; ?></span>
                            </div>
                            <div class="roundtour-place--img"><img src="DEMO/curort<?php echo rand(1,3); ?>.jpg?ver=1.0" alt=""></div>
                          </li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 no-leftpadding" >
                  <div class="form-group">
                    <a href="#" class="roundtour-date hotel-roundtour-date--open" data-open="noblur">
                      <span class="icon icons-calendar_orange"></span>
                      <span class="text">
                        <span class="roundtour-date--months">Выберите дату</span>
                        <span class="roundtour-date--nights">и количество ночей</span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-md-5 col-sm-12 no-leftpadding">
                  <div class="roundtour-people">
                    <div class="roundtour-people--active">
                      <ul class="roundtour-people--adults">
                        <li>
                          <a href="#" class="roundtour-people--remove"><i class="fa fa-times"></i></a>
                          <span class="icons-people-adult_white hidden-xs hidden-sm"></span>
                          <span class="icons-people-adultsm_white visible-sm visible-xs"></span>

                        </li>
                        <li>
                          <a href="#" class="roundtour-people--remove"><i class="fa fa-times"></i></a>
                          <span class="icons-people-adult_white hidden-xs hidden-sm"></span>
                          <span class="icons-people-adultsm_white visible-sm visible-xs"></span>
                        </li>
                      </ul>
                      <ul class="roundtour-people--childrens">
                        <!--
                        <li>
                          <a href="#" class="roundtour-people--remove"><i class="fa fa-times"></i></a>
                          <span class="icons-people-children_white hidden-xs hidden-sm"></span>
                          <span class="icons-people-childrensm_white visible-sm visible-xs"></span>
                          <div class="roundtour-people--year">2</div>
                        </li>
                        -->
                      </ul>
                    </div>
                    <a href="#" class="roundtour-people--addadults">
                      <span class="text icons-plus_yellow"></span>
                      <span class="icon icons-people-adult_yellow hidden-xs hidden-sm"></span>
                      <span class="icon icons-people-adultsm_yellow visible-sm visible-xs"></span>
                    </a>
                    <div class="roundtour-people--addchildrens-wrapper">
                      <a href="#" class="roundtour-people--addchildrens">
                        <span class="text icons-plus_yellow"></span>
                        <span class="icon icons-people-children_yellow hidden-xs hidden-sm"></span>
                        <span class="icon icons-people-childrensm_yellow visible-sm visible-xs"></span>
                      </a>
                      <div class="roundtour-people--years scrollbar-inner">
                        <ul>
                          <li>1 год</li>
                          <li>2 года</li>
                          <li>3 года</li>
                          <li>4 года</li>
                          <li>5 лет</li>
                          <li>6 лет</li>
                          <li>7 лет</li>
                          <li>8 лет</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <button class="btn hotel-search--send">Найти тур</button>
                </div>
              </div>
            </div>
            <input id="city-id" type="hidden" name="city_id" value='832' >
            <input id="place_id" type="hidden" name="place_id" value='4023'>
            <input id="place_type" type="hidden" name="place_type" value='resort' >
            <input id="nights_min" type="hidden" name="nights_min" >
            <input id="nights_max" type="hidden" name="nights_max" >
            <input id="date_min" type="hidden" name="date_min" >
            <input id="date_max" type="hidden" name="date_max" >
            <input id="children" type="hidden" name="children" >
            <input id="adult" type="hidden" name="adult" value="2">
          </form>
        </div>
        <!-- select date -->
        <div class="hotel-search--date">
          <div class="roundtour-date--wrapper">
            <div class="roundtour-date--content">
              <div class="roundtour-date--top">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3 no-rightpadding"><h4>Выберите количество ночей:</h4></div>
                    <div class="col-md-8 no-rightpadding">
                      <ul class="roundtour-date--night">
                        <?php for($i=2;$i<=20;$i++){ ?>
                        <li class="<?php if($i==7) {echo 'active';} ?>"><?php echo $i ?></li>
                        <?php } ?>
                        <li>более 20</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="roundtour-date--days">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3"><h4>Выберите период отдыха:</h4></div>
                    <div class="col-md-8">
                      <div class="roundtour-date--month"></div>
                      <input type="hidden" class="select-date" value="">
                    </div>
                    <div class="col-md-8 col-md-offset-3">
                      <div class="roundtour-date--save">
                        <a href="#" class="btn btn-black hotel-selectdate--save">Сохранить</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
      </div>
      <div class="container">
        <div class="container-white">
          <div id="hotel-tours-info" class="hotel-tours-info hidden-xs">В тур включен перелет, проживание в отеле с выбранным типом питания, медицинская страховка, трансфер. Наша цена честная и финальная: она уже включает все необходимые сборы от туроператоров.</div>
          <hr class="hotel-hr">
          <div class="col-md-12 hotel-table--header clearfix hidden-xs hidden-sm">
    				<div class="col-sm-5 col-md-4">Дата</div>
    				<div class="col-sm-2 col-md-2">Питание</div>
    				<div class="col-sm-2 col-md-2">Номер</div>
    				<div class="hidden-sm col-md-2">Туроператор</div>
    				<div class="col-sm-3 col-md-2"></div>
    			</div>
    			<?for($i=0;$i<3;$i++):?>
    				<div class="col-md-12 tour-list-item clearfix hotel-table <?php if($i==2): echo 'tour-list-item_vip'; endif; ?>">
    					<div class="col-xs-6 col-sm-3 col-md-2 pull-right" style="min-height:50px;">
    						<div class="price pull-right text-left">28&nbsp;500&nbsp;<i class="fa fa-rub"></i><small>на всех</small></div>
    						<div class="btn btn-orange">Купить сейчас</div>
    					</div>
    					<div class="col-xs-6 col-sm-5 col-md-4 no-rightpadding">
    						<div class="xs-pull-left"><span class="date">10.12</span>&nbsp;<span class="hidden-xs"> вылет из Екатеринбурга</span></div>
    						<div class="xs-pull-left"><span class="date"><b class="visible-xs-inline-block">- </b>16.12</span>&nbsp;<span class="hidden-xs"> вылет обратно, 7 ночей</span></div>
    						<div class="visible-xs clearfix"></div>
    						<div class="visible-xs">7 ночей</div>
    					</div>
    					<div class="col-xs-6 col-sm-2 col-md-2 info">
    						<span>Завтраки</span>
    					</div>
    					<div class="hidden-xs col-sm-2 col-md-2 info">
    						<span>Номер Стандартный.<br class="hidden-lg"> 2 взрослых</span>
    					</div>
    					<div class="hidden-xs hidden-sm col-md-2 info">
                <?php if($i==2): ?>
                <span class="tour-list--logo"><img src="DEMO/tour-logo.png" alt=""></span>
                <?php endif; ?>
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
                  <div class="row">
                    <div class="col-sm-12 col-xs-8">
                      <h4 class="hotel-comment--author">Иванов Илья</h4>
                      <span class="hotel-comment--date">28.08.15</span>
                    </div>
                    <div class="hotel-comment--rating col-sm-12 col-xs-4">7,8 из 10</div>
                  </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 no-leftpadding">
                  <div class="hotel-comment--text">
                    <p>Ассортиментная политика предприятия позиционирует социометрический рекламный макет. Организация службы маркетинга тормозит социометрический повторный кон</p>
                    <p>Ассортиментная политика предприятия позиционирует социометрический рекламный макет. Организация службы маркетинга тормозит социометрический повторный кон</p>
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
      </div>
		</div>
    <div class="visible-xs">
      <a href="#" class="tab-xs-header">Отзывы клиентов <span class="icon"><i class="fa fa-angle-down"></i></span></a>
    </div>
		<div class="tab-pane fade" id="comments">
      <div class="container">
        <div class="container-white">
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
      </div>
		</div>
    <div class="visible-xs">
      <a href="#" class="tab-xs-header">Отель на карте <span class="icon"><i class="fa fa-angle-down"></i></span></a>
    </div>
		<div class="tab-pane fade frame-map" id="map">
      <div class="container">
        <div class="container-white">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58730.31270831107!2d60.64912399337177!3d56.83602367647622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sby!4v1447341222324" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
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
