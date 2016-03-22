@extends('admin/app/index')

@section('content')	

	<div class="edit-block">
		<h3>Редактирование карточки...</h3>
		<br>
		{!!Form::open(array('route' => array('admin.post.update', $post -> id), 'method' => 'put', 'files' => true))!!}
			@include('admin/post/_form-edit')
		{!!Form::close()!!}
		{{Form::open(array('route' => array('admin.post.destroy', $post -> id), 'method' => 'delete'))}}
			<button type="submit" class="btn btn-danger btn-mini btn-main">Удалить</button>
		{{Form::close()}}   
	</div>
	
@endsection