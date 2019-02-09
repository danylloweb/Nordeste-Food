(function(){ 'use strict';

function PasswordConfirmDirective(){

	return {
		require: 'ngModel',
		scope:{
			confirm: '=passwordConfirm'
		},
		link: function($scope, element, attrs, controller){

			var validate = function(){

				if( !element.val() || !$scope.confirm ){
					return;
				}

				if( element.val() == $scope.confirm ){
					controller.$setValidity('password-confirm', true);
				}else{
					controller.$setValidity('password-confirm', false);
				}

			};

			$scope.$watch('confirm', function(value){
				validate();
			});

			$scope.$watch(attrs.ngModel, function(value){
				validate();
			});

			element.on('keyup blur', function(){
				validate();
			});

		}
	}
};

APP.directive('passwordConfirm', PasswordConfirmDirective);

})();