<?php
/***********************************
 * Created by Devorans.com
 * Author: HukpoFuJl
 * File: _head.php
 * Project: TOUR
 * Date: 16.10.2015
 * Feedback: support@devorans.com
 ************************************/ ?>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Поедем в тур</title>

<!-- PRELOADER -->
<style>
	@-webkit-keyframes square-spin {
		25% {
			-webkit-transform: perspective(100px) rotateX(180deg) rotateY(0deg);
			transform: perspective(100px) rotateX(180deg) rotateY(0deg);
			background:#ddd;
		}

		50% {
			-webkit-transform: perspective(100px) rotateX(180deg) rotateY(180deg);
			transform: perspective(100px) rotateX(180deg) rotateY(180deg);
			background:#365;
		}

		75% {
			-webkit-transform: perspective(100px) rotateX(0deg) rotateY(180deg);
			transform: perspective(100px) rotateX(0deg) rotateY(180deg);
			background:#954;
		}

		100% {
			-webkit-transform: perspective(100px) rotateX(0deg) rotateY(0deg);
			transform: perspective(100px) rotateX(0deg) rotateY(0deg);
			background:#456;
		}
	}

	@keyframes square-spin {
		25% {
			-webkit-transform: perspective(100px) rotateX(180deg) rotateY(0deg);
			transform: perspective(100px) rotateX(180deg) rotateY(0deg);
			background:#ddd;
		}

		50% {
			-webkit-transform: perspective(100px) rotateX(180deg) rotateY(180deg);
			transform: perspective(100px) rotateX(180deg) rotateY(180deg);
			background:#365;
		}

		75% {
			-webkit-transform: perspective(100px) rotateX(0deg) rotateY(180deg);
			transform: perspective(100px) rotateX(0deg) rotateY(180deg);
			background:#954;
		}

		100% {
			-webkit-transform: perspective(100px) rotateX(0deg) rotateY(0deg);
			transform: perspective(100px) rotateX(0deg) rotateY(0deg);
			background:#456;
		}
	}

	#preloader{
		display:block;
		position:fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		background:#fff;
		z-index:9999999;
		visibility:visible;
		-webkit-transition: visibility .3s;
		-moz-transition: visibility .3s;
		-ms-transition: visibility .3s;
		-o-transition: visibility .3s;
		transition: visibility .3s;
	}
	#preloader > div {
		position:absolute;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:auto;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both;
		width: 50px;
		height: 50px;
		background:#456;
		-webkit-animation: square-spin 2s 0s cubic-bezier(.09, .57, .49, .9) infinite;
		animation: square-spin 2s 0s cubic-bezier(.09, .57, .49, .9) infinite; }
</style>
<script>
	window.onload = function(){document.getElementById('preloader').style.display='none'};
	window.onbeforeunload  = function(){document.getElementById('preloader').style.display='block'};
</script>
<!-- /PRELOADER -->

<!-- Bootstrap -->
<link href="css/lib/bootstrap.min.css?ver=1.0" rel="stylesheet">
<link href="css/lib/jasny-bootstrap.min.css?ver=1.0" rel="stylesheet">
<link href="css/lib/bootstrap-datetimepicker.css?ver=1.0" rel="stylesheet">
<link href="css/lib/selectize.bootstrap3.css?ver=1.0" rel="stylesheet">
<link href="css/fonts.css?ver=1.0" rel="stylesheet">
<link href="css/header.css" rel="stylesheet">
<link href="css/footer.css?ver=1.0" rel="stylesheet">
<link href="css/x-input.css?ver=1.0" rel="stylesheet">
<link href="css/site.css?ver=1.0" rel="stylesheet">
<link href="css/lib/font-awesome.min.css?ver=1.0" rel="stylesheet">
<link href="css/lib/slick.css?ver=1.0" rel="stylesheet">
<link href="css/lib/jquery.fancybox.css?ver=1.0" rel="stylesheet">
<link href="css/lib/ion.rangeSlider.css?ver=1.0" rel="stylesheet">
<link href="css/lib/datepicker.css?ver=1.0" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">
<link href="css/new.css" rel="stylesheet">
<link href="css/tour-page.css" rel="stylesheet">
<link href="css/tour-search-preload.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>var ready=function(){function g(){if(!a.isReady){try{document.documentElement.doScroll("left")}catch(b){setTimeout(g,1);return}a.ready()}}var e,c,n={"[object Boolean]":"boolean","[object Number]":"number","[object String]":"string","[object Function]":"function","[object Array]":"array","[object Date]":"date","[object RegExp]":"regexp","[object Object]":"object"},a={isReady:!1,readyWait:1,holdReady:function(b){b?a.readyWait++:a.ready(!0)},ready:function(b){if(!0===b&&!--a.readyWait||!0!==b&&!a.isReady){if(!document.body)return setTimeout(a.ready,1);a.isReady=!0;!0!==b&&0<--a.readyWait||e.resolveWith(document,[a])}},bindReady:function(){if(!e){e=a._Deferred();if("complete"===document.readyState)return setTimeout(a.ready,1);if(document.addEventListener)document.addEventListener("DOMContentLoaded",c,!1),window.addEventListener("load",a.ready,!1);else if(document.attachEvent){document.attachEvent("onreadystatechange",c);window.attachEvent("onload",a.ready);var b=!1;try{b=null==window.frameElement}catch(f){}document.documentElement.doScroll&&b&&g()}}},_Deferred:function(){var b=[],f,c,e,h={done:function(){if(!e){var c=arguments,d,g,k,m,l;f&&(l=f,f=0);d=0;for(g=c.length;d<g;d++)k=c[d],m=a.type(k),"array"===m?h.done.apply(h,k):"function"===m&&b.push(k);l&&h.resolveWith(l[0],l[1])}return this},resolveWith:function(a,d){if(!e&&!f&&!c){d=d||[];c=1;try{for(;b[0];)b.shift().apply(a,d)}finally{f=[a,d],c=0}}return this},resolve:function(){h.resolveWith(this,arguments);return this},isResolved:function(){return!(!c&&!f)},cancel:function(){e=1;b=[];return this}};return h},type:function(a){return null==a?String(a):n[Object.prototype.toString.call(a)]||"object"}};document.addEventListener?c=function(){document.removeEventListener("DOMContentLoaded",c,!1);a.ready()}:document.attachEvent&&(c=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",c),a.ready())});return function(b){a.bindReady();a.type(b);e.done(b)}}();</script>