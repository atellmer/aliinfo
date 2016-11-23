;
(function() {
	if (document.querySelector('#editor-form')) {
		var form = document.querySelector('#editor-form');
		var editorContainer = document.querySelector('#editor-container');
		var editorInput = document.querySelector('#editor-input');

		editorContainer.innerHTML = editorInput.value;

		var editor = new Quill('#editor-container', {
			modules: {
				toolbar: [
					['bold', 'italic'],
					['link', 'blockquote'],
					[{ list: 'ordered' }, { list: 'bullet' }]
				]
			},
			placeholder: 'Введите текст...',
			theme: 'snow'
		});

		form.addEventListener('submit', function() {
			editorInput.value = editor.root.innerHTML;
		});
	}
})();