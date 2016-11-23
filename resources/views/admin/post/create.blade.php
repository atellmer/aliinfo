@extends('admin.app.index')

@section('content')	

<div class="edit-block">
	<h3>Создание новой карточки...</h3>
	<br>
	{!!Form::open(['route' => 'admin.post.store', 'files' => true, 'id' => 'editor-form'])!!}
		@include('admin/post/_form-create')
	{!!Form::close()!!}	
</div>
	
@endsection