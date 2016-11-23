@extends('admin.app.index')

@section('content')

	<article class="article">
		@if (($post -> video) !== 'false')
			<iframe class="artcle__iframe" src="{{$post -> video}}" frameborder="0" allowfullscreen itemprop="video"></iframe>
		@endif
		<h1 class="artcle__title">{{$post -> title}}</h1>
		<div class="article__text" style="font-weight: 300;">{!!$post -> detail!!}</div>
	</article>
	
@endsection