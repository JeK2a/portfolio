<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<title>JeK2a</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="/css/style.css"/>
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
                    <p>
                        <a href=""><img src="../images/logo.jpg"  width="180" " alt="lorem"></a>
                    </p>
<!--					<a href="/">JeK2a</span> <span class="cms">Компани</span></a>-->
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Услуги</a></li>
						<li><a href="/portfolio">Портфолио</a></li>
                        <li><a href="/video">Видео</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
					</ul>
					<br class="clearfix"/>
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/services">Услуги</a></li>
							<li><a href="/portfolio">Примеры работ</a></li>
                            <li><a href="/video">Видео</a></li>
							<li class="last"><a href="/contacts">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix"/>
				</div>
				<br class="clearfix"/>
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
                        <li class="first">Телефоны для связи:</li>
                        <li class="last">+7(978)263-0-264 (Viber, WhatsApp, Telegram)</li>
					</ul>
				</div>
				<br class="clearfix"/>
			</div>
		</div>
		<div id="footer">
			<a href="/">JeK2a</a>2018</a>
		</div>
	</body>
</html>