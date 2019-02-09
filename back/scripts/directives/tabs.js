(function(){ 'use strict';

function TabsDirective(){

	return function($scope, element, attrs){

		$(element).find('li a').on('click', function(event){

			var target = $(this).attr('href');

			$('.tab.in').removeClass('in');
			$(target).addClass('in');

			$(element).find('li.active').removeClass('active');
			$(this).parent('li').addClass('active');

			return false;
		});

	}
};

APP.directive('tabs', TabsDirective);

})();