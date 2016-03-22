@extends('admin/app/index')

@section('content')

	<div class="info">
		<div class="social">
			<a target="_blank" href="http://vk.com/cnaliexpress">
				<div class="social__item social__item--vk"></div>
			</a>
			<a target="_blank" href="http://www.youtube.com/channel/UCaCISDWNpCe7PpNviWMBP5A">
				<div class="social__item social__item--youtube"></div>
			</a>
			<a target="_blank" href="#">
				<div class="social__item social__item--instagram"></div>
			</a>
		</div>
		<div class="contest">
			<div class="contest__icon"></div>
			<div class="contest__title"><a href="#" class="title-link">Конкурсы</a></div>
			<div class="contest__links">
				<a href="#" class="links-item">Мужские часы</a>
				<a href="#" class="links-item">Мужские часы</a>
				<a href="#" class="links-item">Мужские часы</a>
				<a href="#" class="links-item">Мужские часы</a>
				<a href="#" class="links-item">Мужские часы</a>
				<a href="#" class="links-item">Мужские часы</a>
				<a href="#" class="links-item">Мужские часы</a>
				<a href="#" class="links-item">Мужские часы</a>
			</div>
		</div>
	</div>
	
	@foreach($posts as $post)
		<article>
			<div class="card">
				<div class="card__cover" style="background-image: url({{$post -> photo}});"></div>
				{{Form::open(array('route' => array('admin.post.edit', $post -> id), 'method' => 'get'))}}
        			<button type="submit" class="btn btn-primary btn-mini btn-main">Редактировать</button>
        		{{Form::close()}}	
				<div class="card__title">{{$post -> title}}</div>
				<div class="card__anonce">{{$post -> anonce}}</div>
				<div class="btn-container">
					<a href="admin/post/{{$post -> id}}">
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