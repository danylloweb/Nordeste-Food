(function(){ 'use strict';

function ModalDirective($timeout){

	return {
		restrict: 'A',
		link: function($scope, element, attrs, controller){

			if( $('.modal-backdrop').length == 0 ){
				$('body').append('<div class="modal-backdrop fade hide" id="modal-backdrop-modal"></div>');
			}

			element
			.attr('target', '_self')
			.on('click', function(){

				var modalBackdrop = $('#modal-backdrop-modal');
				var modal = angular.element(attrs.href);
				var controllerModal = modal.scope();
				var controller = modal.controller();

				/**
				 * Show the modal
				 * @return {void}
				 */
				controllerModal.show = function() {

					modalBackdrop.removeClass('hide');
					modal.removeClass('hide');

					$timeout(function(){
						modalBackdrop.addClass('in');
						modal.addClass('in');
					}, 150);

				};

				/**
				 * Close the modal
				 * @return {void}
				 */
				controllerModal.dismiss = function(){

					modalBackdrop.removeClass('in');
					modal.removeClass('in');

					$timeout(function(){
						modalBackdrop.addClass('hide');
						modal.addClass('hide');
					}, 150);

				};

				if( angular.isFunction(controller.setModel) ){
					controller.setModel( $scope.$eval(attrs.modal) );
				}

				controllerModal.show();

				return false;
			});

		}
	};

};
ModalDirective.$inject = ['$timeout'];

APP.directive('modal', ModalDirective);

})();