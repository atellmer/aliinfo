<div class="form-group">
	{!!Form::label('Заголовок')!!}
	{!!Form::text('title', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Анонс')!!}
	{!!Form::textarea('anonce', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Статья')!!}
	{!!Form::textarea('detail', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Ссылка на видео')!!}
	{!!Form::text('video', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Картинка превью')!!}
	<input type="file" name="photo"  accept="image/*">
</div>
<div class="form-group">
	{!!Form::submit('Опубликовать', ['class' => 'btn btn-primary btn-main'])!!}
</div>