(function(){ 'use strict';

function SuggestDirective(){

	return {
		restrict: 'A',
		link: function($scope, element, attrs, controller){

			var isFocused = false;
			var search = $('.suggest-search', element);
			var list = $('.suggest-list', element);

			$(document).on('click touchend', function(e){

				if( !isFocused ){
					return;
				}

				if( e.target === list || e.target.parentNode === list ){
					return false;
				}

				if( !element.has(e.target).length && e.target !== element ){
					element.trigger('hideList');
				}

			});

			element.on('hideList', function(){

				search.trigger('blur');
				list.hide();
				isFocused = false;

			});

			search.on('focus', function(){

				list.show();
				isFocused = true;

				list.find('li.active').removeClass('active');
				list.find('li:visible').first().addClass('active');

			});

			search.on('keydown', function(e){

				var key = e.which ? e.which : e.keyCode;

				// Down
				if( key == 40 ){

					if( list.find('li.active').nextAll(':visible').length ){

						list
						.find('li.active').removeClass('active')
						.nextAll(':visible').first().addClass('active');

					}

					e.preventDefault();
					return false;
				}

				// Up
				if( key == 38 ){

					if( list.find('li.active').prevAll(':visible').length ){

						list
						.find('li.active').removeClass('active')
						.prevAll(':visible').first().addClass('active');

					}

					e.preventDefault();
					return false;
				}

			});

			search.on('keypress', function(e){

				var key = e.which ? e.which : e.keyCode;

				// Enter
				if( key == 13 ){
					list.find('li.active').trigger('click');
					e.preventDefault();
					return false;
				}

			});

			list.on('click', 'li', function(){

				element.trigger('hideList');
				search.val('');

			});

		}
	}

};

APP.directive('suggest', SuggestDirective);

})();