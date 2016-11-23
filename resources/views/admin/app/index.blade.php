<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
	<title>ЧТО Я НАШЕЛ НА АЛИЭКСПРЕСС | Режим администратора</title>
	<link rel="stylesheet" href="/public/client/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdn.quilljs.com/1.0.0/quill.snow.css">
	<link rel="stylesheet" href="/public/client/dist/bundle.css">
</head>

<body>
	<div class="container-fluid">
		<header class="header">
			<h1 class="header__title"><a href="/admin" class="title-link">Что я нашел на Алиэкспресс</a></h1>
		</header>
		<div class="container container-margin">
			@yield('content')
		</div>
	</div>

	<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
	<script src="/public/client/dist/bundle.admin.js"></script>

</body>

</html>