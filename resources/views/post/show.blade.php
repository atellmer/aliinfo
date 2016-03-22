@extends('app/index')

@section('content')

	<article class="article">
		<iframe class="artcle__iframe" src="{{$post -> video}}" frameborder="0" allowfullscreen></iframe>
		<h1 class="artcle__title">{{$post -> title}}</h1>
		<div class="article__text" style="font-weight: 300;">{!!$post -> detail!!}</div>
	</article>
	
@endsection