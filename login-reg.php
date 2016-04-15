<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: HukpoFuJl
	 * File: login.php
	 * Project: TOUR
	 * Date: 17.10.2015
	 * Feedback: support@devorans.com
	 ************************************/
	$footer = 'hide';
?>
<style>html,body,#site-wrap{height:100%}.container-fluid {padding-bottom: 25px;background-color: rgba(0,0,50,.1);}</style>

<div id="login-reg">
	<div id="lr-form">
		<a onclick="history.back(); return false;" href="#" class="fa fa-times close-back"></a>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#login" data-toggle="tab">Вход на сайт</a></li>
			<li><a href="#register" data-toggle="tab">Регистрация</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane fade in active" id="login">
				<form action="#">
					<input type="email" id="auth-login" placeholder="Электронная почта">
					<input type="password" id="auth-pass" placeholder="Пароль">
					<button type="submit" class="btn btn-green">Войти на сайт</button>
					<div class="or-soc"><span>или</span> при помощи социальных сетей</div>
					<div class="auth-soc">
						<a href="#" class="auth-vk"></a>
						<a href="#" class="auth-fb"></a>
						<a href="#" class="auth-ok"></a>
						<a href="#" class="auth-tw"></a>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="register">
				<form action="#">
					<input type="text" id="reg-subname" placeholder="Фамилия">
					<input type="text" id="reg-name" placeholder="Имя">
					<input type="email" id="reg-mail" placeholder="Электронная почта">
					<input type="text" id="reg-city" placeholder="Город">
					<button type="submit" class="btn btn-green">Зарегистрироваться</button>
					<div class="or-soc"><span>или</span> при помощи социальных сетей</div>
					<div class="auth-soc">
						<a href="#" class="auth-vk"></a>
						<a href="#" class="auth-fb"></a>
						<a href="#" class="auth-ok"></a>
						<a href="#" class="auth-tw"></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>