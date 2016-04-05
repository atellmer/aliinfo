<div class="form-group">
	{!!Form::label('Заголовок')!!}
	{!!Form::text('title', $post -> title, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Анонс')!!}
	{!!Form::textarea('anonce', $post -> anonce, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Статья')!!}
	{!!Form::textarea('detail', $post -> detail, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Ссылка на видео')!!}
	{!!Form::text('video', $post -> video, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('Картинка превью')!!}
	<input type="file" name="photo"  accept="image/*">
</div>
<div class="form-group">
	{!!Form::label('SEO: Title')!!}
	{!!Form::text('seo_title', $post -> seo_title, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('SEO: Description')!!}
	{!!Form::text('seo_description', $post -> seo_description, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('SEO: keywords (через запятую)')!!}
	{!!Form::text('seo_keywords', $post -> seo_keywords, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::submit('Сохранить', ['class' => 'btn btn-primary btn-main'])!!}
</div>