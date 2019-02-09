(function(){ 'use strict';

function MaskZipDirective(Mask){

	return {
		require: 'ngModel',
		link: function($scope, element, attrs, controller){

			element
			.on('keyup blur', function(){

				var value = this.value;
					value = value.replace(/\D/g, "");

				var pattern = '99999-999';

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

MaskZipDirective.$inject = ['Mask'];

APP.directive('maskZip', MaskZipDirective);

})();