(function(){ 'use strict';

function MaskPhoneDirective(Mask){

	return {
		require: 'ngModel',
		link: function($scope, element, attrs, controller){

			element
			.on('keyup blur', function(){

				var value = this.value;
					value = value.replace(/\D/g, "");

				var pattern = value.match(/^(\(?(1|2|9)[0-9]\)? ?9)/g) ?
							 '(99) 99999-9999' : '(99) 9999-9999';

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

MaskPhoneDirective.$inject = ['Mask'];

APP.directive('maskPhone', MaskPhoneDirective);

})();