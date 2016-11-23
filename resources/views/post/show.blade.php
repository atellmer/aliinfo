<?
header('Last-Modified: '.$post -> updated_at.' GMT');
?>

@extends('app.index') 

@section('content')

<article class="article" itemscope itemtype="http://schema.org/Article">
	@if (($post -> video) !== 'false')
		<iframe class="artcle__iframe" src="{{$post -> video}}" frameborder="0" allowfullscreen itemprop="video"></iframe>
	@endif
	<h1 class="artcle__title" itemprop="name">{{$post -> title}}</h1>

	<div class="social-share">
		<div class="pluso"
			data-background="transparent"
			data-options="big,square,line,horizontal,nocounter,theme=01"
			data-services="vkontakte,odnoklassniki,facebook,moimir"
			data-url="http://aliinfo.ru/post/{{$post -> id}}"
			data-title="{{$post -> title}}"
			data-description="{{$post -> anonce}}">
		</div>
	</div>

	<div class="article__text" itemprop="articleBody">{!!$post -> detail!!}</div>
	<div id="vk_comments"></div>
</article>

@endsection