<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: HukpoFuJl
	 * File: _footer.php
	 * Project: TOUR
	 * Date: 17.10.2015
	 * Feedback: support@devorans.com
	 ************************************/?>


<div class="container-fluid footer-container">
	<footer class="row">
    <?php
    if(isset($_GET['p']) && file_exists($_GET['p'].'.php')){

  		}
  		else{?>
      <div class="footer-main-top"><img src="img/footer-main-top.png?ver=1.0" alt=""></div>
      <?php
  		}
    ?>
		<a href="tel:88005553535" class="col-xs-12 footer-phone visible-xs">8 800 555 35 35</a>
		<div class="clearfix visible-xs"></div>
		<div class="col-md-5 col-md-offset-1 col-sm-12">
			<div class="row">
				<div class="footer-out-pages col-sm-2 col-xs-2 pull-right visible-sm visible-xs">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-vk"></a>
				</div>
				<div class="col-md-6 col-sm-5 col-xs-10">
					<ul class="nav-footer">
						<li><a href="#">О компании</a></li>
						<li><a href="#">Точки оформления</a></li>
						<li><a href="#">Туроператоры</a></li>
						<li><a href="#">Отели по странам</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-sm-5 col-xs-10">
					<ul class="nav-footer">
						<li><a href="#">Туры по странам</a></li>
						<li><a href="#">Отзывы клиентов</a></li>
						<li><a href="#">Частные вопросы</a></li>
						<li><a href="#">Блог</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix visible-sm"></div>
		<div class="col-md-5">
			<hr class="visible-xs">
			<div class="copyright">
				<p>&copy; <?=date('Y')?> PoedemVtur</p>
				<p>Вся информация, размещенная на сайте, носит исключительно информационный характер и не является рекламой и публичной офертой</p>
			</div>
			<a href="tel:88005553535" class="footer-phone hidden-xs">8 800 555 35 35</a>
			<div class="footer-out-pages hidden-sm hidden-xs">
				<a href="#" class="fa fa-facebook">

					<svg width="140%" height="140%">
						<circle class="path" r="22" cx="25" cy="24" fill="transparent" stroke-width="3"></circle>
					</svg>

				</a>
				<a href="#" class="fa fa-youtube">
					<svg width="140%" height="140%">
						<circle class="path" r="22" cx="25" cy="24" fill="transparent" stroke-width="3"></circle>
					</svg>
				</a>
				<a href="#" class="fa fa-instagram">
					<svg width="140%" height="140%">
						<circle class="path" r="22" cx="25" cy="24" fill="transparent" stroke-width="3"></circle>
					</svg>
				</a>
				<a href="#" class="fa fa-vk">
					<svg width="140%" height="140%">
						<circle class="path" r="22" cx="25" cy="24" fill="transparent" stroke-width="3"></circle>
					</svg>
				</a>
			</div>
		</div>
		<div id="design-copy" class="hidden-xs">Дизайн сайта - OPENPIXEL</div>
		<div id="stt"></div>
	</footer>
</div>
