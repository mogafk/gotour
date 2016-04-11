<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: HukpoFuJl
	 * File: blog.php
	 * Project: TOUR
	 * Date: 17.10.2015
	 * Feedback: support@devorans.com
	 ************************************/?>

<div id="sub-header" style="background-image:url('/DEMO/sh-blog.jpg')">
	<h3>Пишем обо всем</h3>
</div>
<h1 class="text-center blog">Интересные статьи</h1>
<div class="blog-categories container-fluid text-center">
	<div class="hidden-xxs row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
			<a class="active" href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="*">Все</a>
			<a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="aqua">Аквапарки</a>
			<a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="busn">Бизнес</a>
			<a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="gstr">Гастротуризм</a>
			<a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="grek">Греция</a>
			<a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="chld">Дети</a>
			<a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="egip">Египет</a>
			<a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="intr">Интересное</a>
		</div>
	</div>

	<div class="btn-group">
		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>Все</button>
		<ul class="dropdown-menu">
			<li><a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="aqua">Аквапарки</a></li>
			<li><a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="busn">Бизнес</a></li>
			<li><a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="gstr">Гастротуризм</a></li>
			<li><a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="grek">Греция</a></li>
			<li><a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="chld">Дети</a></li>
			<li><a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="egip">Египет</a></li>
			<li><a href="#" data-filter-by="category" data-target=".blog-list .filtered" data-value="intr">Интересное</a></li>
		</ul>
	</div>
</div>

<div class="container">
	<div class="row blog-list">

		<div data-category="aqua chld intr" class="filtered col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<a href="/?p=blog-item" class="blog-list-item">
				<div class="blog-item-thumb"><img src="/DEMO/blog-item-1.jpg"></div>
				<h2>Конструктивный комму­на­ль­ный модернизм</h2>
				<div class="blog-item-date">10.05.2015</div>
			</a>
		</div>

		<div data-category="busn gstr grek" class="filtered col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<a href="/?p=blog-item" class="blog-list-item">
				<div class="blog-item-thumb"><img src="/DEMO/blog-item-2.jpg"></div>
				<h2>Конструктивный комму­на­ль­ный модернизм: гипотеза и теории</h2>
				<div class="blog-item-date">10.05.2015</div>
			</a>
		</div>

		<div data-category="chld egip intr" class="filtered col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<a href="/?p=blog-item" class="blog-list-item">
				<div class="blog-item-thumb"><img src="/DEMO/blog-item-3.jpg"></div>
				<h2>Отличные отели для семейного отдыха</h2>
				<div class="blog-item-date">10.05.2015</div>
			</a>
		</div>

		<div data-category="aqua gstr grek" class="filtered col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<a href="/?p=blog-item" class="blog-list-item">
				<div class="blog-item-thumb"><img src="/DEMO/blog-item-4.jpg"></div>
				<h2>Отличные отели для семейного отдыха</h2>
				<div class="blog-item-date">10.05.2015</div>
			</a>
		</div>

		<div data-category="busn chld egip" class="filtered col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<a href="/?p=blog-item" class="blog-list-item">
				<div class="blog-item-thumb"><img src="/DEMO/blog-item-5.jpg"></div>
				<h2>Конструктивный комму­на­ль­ный модернизм</h2>
				<div class="blog-item-date">10.05.2015</div>
			</a>
		</div>

		<div data-category="aqua grek intr" class="filtered col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<a href="/?p=blog-item" class="blog-list-item">
				<div class="blog-item-thumb"><img src="/DEMO/blog-item-6.jpg"></div>
				<h2>Конструктивный комму­на­ль­ный модернизм: гипотеза и теории</h2>
				<div class="blog-item-date">10.05.2015</div>
			</a>
		</div>

		<div class="clearfix"></div>
		<div class="text-center">
			<button class="btn-more">Показать еще</button>
		</div>
	</div>
</div>