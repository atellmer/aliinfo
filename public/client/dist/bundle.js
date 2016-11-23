;(function() {
	'use strict';

	if (document.querySelector('#vk_comments')) {
		VK.init({apiId: 5735284, onlyWidgets: true});
		VK.Widgets.Comments('vk_comments', {limit: 10, width: 'auto', attach: '*'}, '{{$post -> id}}');
	}
})();