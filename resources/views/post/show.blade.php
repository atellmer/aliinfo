@extends('app.index') 

@section('content') 

<article class="article" itemscope itemtype="http://schema.org/Article">
	<iframe class="artcle__iframe" src="{{$post -> video}}" frameborder="0" allowfullscreen itemprop="video"></iframe>
	<h1 class="artcle__title" itemprop="name">{{$post -> title}}</h1>
	<div class="article__text" style="font-weight: 300;" itemprop="articleBody">{!!$post -> detail!!}</div>
</article>

@endsection