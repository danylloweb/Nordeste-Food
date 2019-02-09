(function(){ 'use strict';

function ScrollToDirective(){

	return function($scope, element, attrs){

		$(element).on('click', function(event){

			var target = $(attrs.scrollTo);

			$('html, body').animate({
				scrollTop: target.offset().top
			}, 600);

			event.preventDefault();
			return false;

		});

	}
};

APP.directive('scrollTo', ScrollToDirective);

})();