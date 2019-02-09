(function(){ 'use strict';

function MaskDateDirective(Mask){

	return {
		require: 'ngModel',
		link: function($scope, element, attrs, controller){

			element
			.on('keyup blur', function(){

				var value = this.value;
					value = value.replace(/\D/g, "");

				var pattern = '99/99/9999';

				value = Mask.formatToPattern(pattern, value);

				if( this.value != value ){
					this.value = value;
					controller.$setViewValue( value );
				}

			});

			controller.$render = function(){

				var value = (controller.$viewValue != undefined) ? controller.$viewValue : '';

				if( value ){
					element.val(value);
					element.trigger('keyup');
				}

			};

		}

	}
};

MaskDateDirective.$inject = ['Mask'];

APP.directive('maskDate', MaskDateDirective);

})();