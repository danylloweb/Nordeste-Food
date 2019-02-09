(function(){ 'use strict';

function ToggleDirective(){

	return function($scope, element, attrs){

		$(element).on('click', function(event){

			var target = $(attrs.toggle);

			if( target.is(':visible') ){
				target.hide();
			}else{
				target.show();
			}

			event.preventDefault();
			return false;

		});

	}
};

APP.directive('toggle', ToggleDirective);

})();