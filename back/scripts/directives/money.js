(function(){ 'use strict';

function MaskMoneyDirective(){

	return {
		require: 'ngModel',
		link: function($scope, element, attrs, controller){

			element
			.on('keyup blur', function(){

				var value = this.value;
					value = value.replace(/\D/g,"");
					value = value.replace(/(\d{2})$/,",$1");
					value = value.replace(/(\d+)(\d{3},\d{2})$/g,"$1.$2");

				var a = (value.length - 3) / 3;
				var b = 0;

				while( a > b ){
					b++;
					value = value.replace(/(\d+)(\d{3}.*)/,"$1.$2")
				}

				value = value.replace(/^(0)(\d)/g,"$2");

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

APP.directive('maskMoney', MaskMoneyDirective);

})();