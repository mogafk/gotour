<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: HukpoFuJl
	 * File: main.php
	 * Project: TOUR
	 * Date: 17.10.2015
	 * Feedback: support@devorans.com
	 ************************************/?>


<div class="main-slider">
  <?php
  $mainText = array(
  '',
  'Наши цены<br>стабильные и<br>прозрачные!<br>Никаких<br>скрытых доплат!',
  'Миллионы туров от крупных туроператоров и в лучшие отели!',
  'Тысячи радостных путешественников по всему миру – благодаря нам :-)',
  'Бонусные мили в подарок – за тур от 30 тысяч рублей',
  'Мы с Вами на связи до Вашего отдыха, во время и после!'
  );
  for($i=1;$i<=5;$i++){ ?>
  <div class="slide" style="background-image:url(DEMO/main-slider<?php echo $i; ?>.jpg">
    <div class="slide-content">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-6 col-md-6 col-sm-offset-7 col-sm-5">
            <div class="slide-text"><?php echo $mainText[$i]; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<div class="main-content">
  <div class="container">
     <div class="row">
       <div class="col-md-5 col-sm-7">
        <div class="main-roundtour">
          <div class="main-roundtour-content">
            <div class="main-roundtour-text">
              <h2>Подобрать тур</h2>
              <form class="form-roundtour">
                <ul class="roundtour-radio">
                <!--
                  <li><input type="radio" class="custom-radio" name="type" checked><label>Турпутевку</label></li>
                  <li><input type="radio" class="custom-radio" name="type"><label>Только отель</label></li>
                -->
                  <li>
                    <input type="radio" class="custom-radio1" id="type1" name="type" checked>
                    <label for="type1">Турпутевку</label>
                  </li>
                  <li>
                    <input type="radio" class="custom-radio1" id="type2" name="type">
                    <label for="type2">Только отель</label>
                  </li>
                </ul>
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
                        $curort = array('','Анапа','Аналипси','Evason Ana Mandara','Hostal Santa Ana','Ana Mandara Hue','Apatrments Ana');
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
                <div class="form-group">
                  <a href="#" class="roundtour-date">
                    <span class="icon icons-calendar_orange"></span>
                    <span class="text">
                      <span class="roundtour-date--months">Выберите дату</span>
                      <span class="roundtour-date--nights">и количество ночей</span>
                    </span>
                  </a>
                </div>
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
                    <span class="text icons-plus_orange"></span>
                    <span class="icon icons-people-adult_orange hidden-xs hidden-sm"></span>
                    <span class="icon icons-people-adultsm_orange visible-sm visible-xs"></span>
                  </a>
                  <div class="roundtour-people--addchildrens-wrapper">
                    <a href="#" class="roundtour-people--addchildrens">
                      <span class="text icons-plus_orange"></span>
                      <span class="icon icons-people-children_orange hidden-xs hidden-sm"></span>
                      <span class="icon icons-people-childrensm_orange visible-sm visible-xs"></span>
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
                <div class="roundtour-price--wrapper">
                  <input type="text" class="roundtour-price" name="roundtour-price" value="" />
                </div>
                <div class="roundtour-button">
                  <button class="btn btn-black btn-block">
                    <span class="text">подобрать сейчас</span>
                    <span class="icon icons-search_white"></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
       </div>
       <div class="col-md-offset-1 col-md-6 col-sm-5">
         <div class="main-offer-wrapper">
           <h3 class="visible-xs">Готовые решения</h3>
           <div class="main-offer-slider">
             <?php
             $offerCountry = array('','Португалия','Россия','Япония','Индонезия','Япония','Венеция');
             $offerLabels = array('','red','green','pink','dark','blue','orange');
             for($i=1;$i<=6;$i++){ ?>
             <div class="slide">
               <?php for($j=1;$j<=2;$j++){ ?>
               <a href="#" class="ready-offer">
                 <div class="ready-offer--img"><img src="DEMO/offer<?php echo rand(1,6); ?>.jpg?ver=1.0" alt=""></div>
                 <div class="ready-offer--content">
                   <div class="ready-offer--sale">-<?php echo rand(1,50); ?>%</div>
                   <h4 class="ready-offer--title"><?php echo $offerCountry[rand(1,6)]; ?></h4>
                   <span class="ready-offer--price ready-offer--price_<?php echo $offerLabels[rand(1,6)]; ?>">от <?php echo rand(1,99) . ' ' . rand(1,9) * 100;  ?> <i class="fa fa-rub"></i></span>
                 </div>
               </a>
               <?php } ?>
             </div>
             <?php } ?>
           </div>
         </div>
       </div>
     </div>
  </div>
  <div class="roundtour-date--wrapper">
    <div class="container">
      <div class="col-md-offset-5 col-md-7">
        <div class="roundtour-date--content">
          <a href="#" class="roundtour-date--close"><span class="icons-close_grey"></span></a>
          <h4>Выберите количество ночей:</h4>
          <ul class="roundtour-date--night">
            <?php for($i=2;$i<=20;$i++){ ?>
            <li class="<?php if($i==7) {echo 'active';} ?>"><?php echo $i ?></li>
            <?php } ?>
            <li>более 20</li>
          </ul>
          <hr>
          <h4>Выберите период отдыха:</h4>
          <div class="roundtour-date--month"></div>
          <input type="hidden" class="select-date" value="">
          <div class="roundtour-date--save">
            <a href="#" class="btn btn-black roundtour-date--save">Сохранить</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


