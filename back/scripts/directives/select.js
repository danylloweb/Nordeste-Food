(function(){ 'use strict';

function SelectWrapperDirective(){

	return {
		restrict: 'A',
		require: '?ngModel',
		link: function($scope, element, attrs, controller){

			if( !controller ){
				return;
			}

			var parent = $(element).parent('.select');

			controller.$validators.selectWrapper = function(value) {

				var isValid = !attrs.required || !controller.$isEmpty(value);

				if( !isValid ){
					parent.addClass('invalid');
				}else{
					parent.removeClass('invalid');
				}

				return isValid;
			};

			attrs.$observe('required', function() {
				controller.$validate();
			});

		}
	}
};

APP.directive('selectWrapper', SelectWrapperDirective);

})();