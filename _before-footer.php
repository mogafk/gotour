<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: Admin
	 * File: _before-footer.php
	 * Project: tour
	 * Date: 10.11.2015
	 * Feedback: support@devorans.com
	 ************************************/ ?>

<nav id="selection-tour" class="navmenu navmenu-default navmenu-fixed-right offcanvas" role="navigation">
  <div class="hotel-addcomment-bar">
    <h3>Заполнить форму</h3>
    <form class="hotel-addcomment-form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Имя">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="E-mail">
      </div>
      <div class="form-group">
        <h4>Новости какой страны<br> хотели бы получать?</h4>
        <input type="text" class="form-control" placeholder="">
      </div>
      <div class="hotel-addcomment-btn">
        <button class="btn btn-orange btn-block">Отправить</button>
      </div>
    </form>
  </div>
</nav>
<div class="container-fluid" id="before-footer">
	<div class="row" style="height: 100%;">
		<div class="col-sm-12 col-md-8 col-lg-9" id="no-results">
			<h3>Не нашли подходящий тур?</h3>
			<div class="info">Оставьте заявку и мы подберем для Вас самые лучшие предложения</div>
			<div class="btn btn-blue" data-recalc="false" data-toggle="offcanvas" data-target="#selection-tour" data-canvas="#site-wrap">Заполнить</div>
		</div>
		<div class="hidden-xs hidden-sm col-md-4 col-lg-3 carousel slide" id="brand-slider" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#brand-slider" data-slide-to="0" class="active"></li>
				<li data-target="#brand-slider" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="brand">
						<div>
							<img src="/DEMO/brand-slide-1.png">
							<span class="c-name">Название компании</span>
						</div>
					</div>
					<div class="brand">
						<div>
							<span class="c-name">Название компании</span>
							<img src="/DEMO/brand-slide-2.png">
						</div>
					</div>
					<div class="brand">
						<div>
							<img src="/DEMO/brand-slide-3.png">
							<span class="c-name">Название компании</span>
						</div>
					</div>
					<div class="brand">
						<div>
							<img src="/DEMO/brand-slide-4.png">
							<span class="c-name">Название компании</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="brand">
						<div>
							<img src="/DEMO/brand-slide-1.png">
							<span class="c-name">Название компании</span>
						</div>
					</div>
					<div class="brand">
						<div>
							<span class="c-name">Название компании</span>
							<img src="/DEMO/brand-slide-2.png">
						</div>
					</div>
					<div class="brand">
						<div>
							<img src="/DEMO/brand-slide-3.png">
							<span class="c-name">Название компании</span>
						</div>
					</div>
					<div class="brand">
						<div>
							<img src="/DEMO/brand-slide-4.png">
							<span class="c-name">Название компании</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
