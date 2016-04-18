<?php
/***********************************
* Created by Devorans.com
* Author: HukpoFuJl
* File: index.php
* Project: TOUR
* Date: 14.10.2015
* Feedback: support@devorans.com
************************************/
error_reporting(E_ALL);
ini_set ( 'error_reporting' , E_ALL);
ini_set ( 'display_errors' , 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<? include '_head.php'; ?>
	<?
		if(isset($_GET['p']) && file_exists('css/'.$_GET['p'].'.css')){
			echo "<link href='css/{$_GET['p']}.css' rel='stylesheet'>";
		}
		elseif(!isset($_GET['p'])){
			echo "<link href='css/main.css' rel='stylesheet'>";
		}
	?>
</head>
<body class="<?
		if(isset($_GET['p']) && file_exists($_GET['p'].'.php')){

		}
		else{
			echo 'body-main';
		}
	?>" style="">
<script>document.write('<div id="preloader"><div></div></div>')</script>
<div class="canvas" id="site-wrap">
	<div id="site-overlay"></div>
	<?
    if(isset($_GET['p']) && file_exists($_GET['p'].'.php')){
      include '_header.php';
    }
    else{
      include '_header-main.php';
    }
  ?>

	<?
		if(isset($_GET['p']) && file_exists($_GET['p'].'.php')){
			include $_GET['p'].'.php';
		}
		else{
			include 'main.php';
		}
	?>
	<? !isset($footer)||$footer!='hide'?include '_footer.php':null; ?>
</div>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/js/jquery.mobile.custom.min.js?ver=1.0"></script>
<script src="js/bootstrap.min.js?ver=1.0"></script>
<script src="js/jasny-bootstrap.min.js?ver=1.0"></script>
<script src="js/moment.js?ver=1.0"></script>
<script src="js/ru.js?ver=1.0"></script>
<script src="js/jquery.easing.js?ver=1.0"></script>
<script src="js/bootstrap-datetimepicker.min.js?ver=1.0"></script>
<script src="js/selectize.min.js?ver=1.0"></script>
<script src="js/jquery.quicksand.js?ver=1.0"></script>
<script src="js/slick.min.js?ver=1.0"></script>
<script src="js/jquery.fancybox.pack.js?ver=1.0"></script>
<script src="js/ion.rangeSlider.min.js?ver=1.0"></script>
<script src="js/jquery.scrollbar.min.js?ver=1.0"></script>
<script src="js/datepicker.js?ver=1.0"></script>
<script src="js/base.js"></script>
<script src="js/hotel.js"></script>

<script src="js/main.js"></script>
<script src="js/tour-filter.js"></script>
<script src="js/tour-page.js"></script>
<?if(!isset($_GET['p'])):?>
<script>
	/*  FOOTER SCROLLSPY  */
	(function(){
	  if(!$('body').hasClass('body-main')){
  		$footer = $('footer');

  		$(window).scroll(footerCuCu);
  		$(window).resize(footerCuCu);
  		footerCuCu();

  		function footerCuCu(){
  			var fheight = $footer.outerHeight();
  			var wheight = $(window).height();

  			if(wheight>fheight){
  				$('body').css('margin-bottom',fheight);
  				var scroll = $(window).scrollTop()+wheight;
  				var fscroll = scroll - ($(document).outerHeight(true)-fheight);
  				$footer.addClass('fixed');
  				if(fscroll >= 0){
  					$footer.removeClass('transparent');
  				}
  				else{
  					$footer.addClass('transparent');
  				}
  			}
  			else{
  				$footer.removeClass('fixed').removeClass('transparent');
  				$('body').css('margin-bottom',0);
  			}




  		}
    }
	})($);
</script>
<?endif?>
</body>
</html>