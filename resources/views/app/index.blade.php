<?
header('Last-Modified: '.$lastModified);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui"> 
	{!!$title -> render()!!} 
	{!!$description -> render()!!} 
	{!!$keywords -> render()!!}
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Aliinfo">
	<meta name="application-name" content="Aliinfo">
	<link rel="apple-touch-icon" sizes="57x57" href="/public/client/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/public/client/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/public/client/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/public/client/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/public/client/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/public/client/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/public/client/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/public/client/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/public/client/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/public/client/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/public/client/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/public/client/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/public/client/img/favicon/favicon-16x16.png">
	<link rel="icon" type="image/x-icon" href="http://aliinfo.ru/favicon.ico">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/public/client/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="HandheldFriendly" content="true">
	<meta property="vk:app_id" content="5735284">
	{!!$openGraph -> render()!!}
	{!!$card -> render()!!}
	<meta name="google-site-verification" content="sMId6075Lhfx7m3mcawI3iPvIBv-B3v4Fw3HHzPXClg">
	<meta name="yandex-verification" content="4553400a3501f9a4">
	<meta name="wmail-verification" content="c5afbdfdf4781d0b73dae0d4bef811d7">
	<link rel="stylesheet" href="/public/client/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="/public/client/dist/bundle.css">
</head>

<body>
	<div class="container-fluid">
		<header class="header">
			<h1 class="header__title"><a href="/" class="title-link">Что я нашел на Алиэкспресс</a></h1>
		</header>
		<div class="container container-margin">
			@yield('content')
		</div>
	</div>

	<script src="//vk.com/js/api/openapi.js?136"></script>
	<script src="/public/client/dist/pluso.js"></script>
	<script src="/public/client/dist/metrics.js"></script>
	<script src="/public/client/dist/bundle.js"></script>
	<noscript>
		<div>
			<img src="https://mc.yandex.ru/watch/36426255" style="position:absolute; left:-9999px;" alt="" />
		</div>
	</noscript>
</body>

</html>
