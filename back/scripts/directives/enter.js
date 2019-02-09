(function(){ 'use strict';

function OnEnterDirective(){

	return function($scope, element, attrs){

		$(element).on('keydown keypress', function(event){

			if( event.which === 13 ){

				$scope.$apply(function(){
					$scope.$eval(attrs.onEnter);
				});

				event.preventDefault();
				return false;

			}

		});

	}
};

APP.directive('onEnter', OnEnterDirective);

})();