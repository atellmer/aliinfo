@extends('app.index')

@section('content')
	
	<div class="info">
		<div class="social">
			<a target="_blank" href="http://vk.com/cnaliexpress">
				<div class="social__item social__item--vk"></div>
			</a>
			<a target="_blank" href="http://www.youtube.com/channel/UCaCISDWNpCe7PpNviWMBP5A?sub_confirmation=1">
				<div class="social__item social__item--youtube"></div>
			</a>
			<a target="_blank" href="https://www.instagram.com/aliexpressdarom/">
				<div class="social__item social__item--instagram"></div>
			</a>
		</div>
	</div>
		
	@foreach($posts as $post)
		<article itemscope itemtype="http://schema.org/Article">
			<div class="card">
				<a href="post/{{$post -> id}}" itemprop="url">
					<div class="card__cover" style="background-image: url({{$post -> photo}});" itemprop="image"></div>
				</a>
				<a href="post/{{$post -> id}}" itemprop="url">
					<h2 class="card__title" itemprop="name">{{$post -> title}}</h2>
				</a>
				<p class="card__anonce" itemprop="description">{{$post -> anonce}}</p>
				<div class="btn-container">
					<a href="post/{{$post -> id}}" itemprop="url">
						<div class="card-btn">Смотреть...</div>
					</a>
				</div>
			</div>
		</article>
	@endforeach

	<div class="ali-pagination">
		<?echo $posts -> render();?>
	</div>
	
@endsection