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
	<h3><img src="img/flags/abhz.gif" alt=""> Шри-Ланка</h3>
</div>

<div class="tour-filter-height"></div>
<div class="tour-filter">
	<a href="#" class="tour-filter--show"><span>Развернуть фильтр <i class="icons-arrow-down_white"></i></span></a>
	<div class="tour-filter--container">
		<div class="container">
			<form action="" class="form-tourfilter">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<h4 class="tour-filter--header">
							<span class="icon icons-filter-eat"></span>
							<span class="text">Питание</span>
						</h4>
						<div class="tour-filter--inputs">
							<ul class="tour-filter--checkboxs">
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" checked name="eat1">
										<span>Завтраки</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" checked name="eat2">
										<span>Двухразовое</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" checked name="eat3">
										<span>Трёхразовое</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" checked name="eat4">
										<span>Всё включено</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" name="eat5">
										<span>Без питания</span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6" style="min-height:196px">
						<h4 class="tour-filter--header">
							<span class="icon icons-filter-class"></span>
							<span class="text">Класс отеля</span>
						</h4>
						<div class="tour-filter--inputs">
							<ul class="tour-filter--checkboxs">
								<li>
									<label class="custom-checkbox filter-checkbox_class">
										<input type="checkbox" name="class1" checked>
										<span>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox filter-checkbox_class">
										<input type="checkbox" name="class2">
										<span>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox filter-checkbox_class">
										<input type="checkbox" name="class3">
										<span>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" name="class4">
										<span>
											Аппартаменты / Виллы
										</span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<h4 class="tour-filter--header">
							<span class="icon icons-filter-price"></span>
							<span class="text">Цена в рублях</span>
						</h4>
						<div class="tour-filter--inputs">
							<div class="tour-filter--price">
								<div class="row">
									<div class="col-md-5 col-sm-5 col-xs-5">
										<input type="text" class="form-control tourFilterPriceMin" name="priceMin" value="10 000">
									</div>
									<div class="col-md-2 col-sm-2 col-xs-2 no-leftpadding no-rightpadding">
										<span class="sep"></span>
									</div>
									<div class="col-md-5 col-sm-5 col-xs-5">
										<input type="text" class="form-control tourFilterPriceMax" name="priceMax" value="15 000 000">
									</div>
								</div>
								<div class="tour-filter--price-slider">
									<input type="text" class="tour-filter-price" name="filter-price" value="" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<h4 class="tour-filter--header">
							<span class="icon icons-filter-beach"></span>
							<span class="text">Пляж</span>
						</h4>
						<div class="tour-filter--inputs">
							<ul class="tour-filter--checkboxs">
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" name="beach1">
										<span>Первая пляжная линия</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" name="beach2">
										<span>Вторая пляжная линия</span>
									</label>
								</li>
								<li>
									<label class="custom-checkbox">
										<input type="checkbox" name="beach3">
										<span>Третья пляжная линия</span>
									</label>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="tour-filter--line">
			<a href="#" class="tour-filter--hide"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</div>
	</div>
</div>

<div class="container" id="tour-filtered">
	<div class="tour-search-preload">
		<div class="tour-search-preload--spinner">
			<span class="icon"></span>
			<span class="text">Загружаем туры на двоих</span>
		</div>
		<br>
		<div class="tour-search-preload--advertising">
			<img src="DEMO/preload-banner.png" alt="">
		</div>
		<br>
		<div class="tour-search-preload--advertising video">
			<iframe src="https://www.youtube.com/embed/F9B7g9-PkB8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="row">
		<h2 class="col-xs-12 roboto-light tour-filtered--header">Найдено 28 отелей</h2>
	</div>

	<div class="row">

		<?php for($i=1;$i<=9;$i++){ ?>
		<div class="col-xs-12 col-sm-6 col-md-6 col-large-4 tour-column">
			<div class="tour-block tour-block-new">
        <div class="tour-header row">
          <div class="col-md-7">
	          <h2>
	            <?php
	            if(rand(0,1)){
	            	$header = "SIGMA RESORT";
	            }else{
	            	$header = "PORTO AZZURRO CLUB MARE Отели Австрия PORTO AZZURRO CLUB MARE Отели Австрия";
	            }
	            ?>
		          <a href="#" title="<?php echo $header; ?>"><?php echo $header; ?></a>
	          </h2>
          </div>
          <div class="tour-rating col-md-5">
            <div class="tour-rating--star"><img src="img/tour-rating.png" width="59" height="12" alt=""></div>
            <span class="tour-rating--num">~ 4,2</span>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="tour-desc">Таиланд, Паттайя, пляж Джомтьен, 1 линия, Песок, Оборудованный</div>
				<div class="thumb">
					<a href="#" class="thumb-link"><img src="/DEMO/tour-item-1.jpg"></a>
					<a href="#" class="like like-left"></a>
				</div>
				<div class="tour-footer">
					<div class="col-sm-5">
						<div class="tour-eat">
						  <span>Завтраки</span>
						  19 ноября на 6 ночей
						</div>
					</div>
					<div class="col-sm-7">
						<div class="text-right">
							<a href="#" class="tour-commentlink">Отзывы (14)</a>
						</div>
						<div class="text-right">
							<a href="#" class="tour-price">
								<?php echo rand(1,50) . '&nbsp;' . rand(100,999); ?>&nbsp;200&nbsp;<i class="fa fa-rub"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php } ?>

	</div>
</div>
<div class="more">
	<a href="#">Загрузить еще</a>
</div>
