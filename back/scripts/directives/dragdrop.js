(function(){ 'use strict';

function DraggableDirective(){

	return function($scope, element, attrs){

		$(element).addClass('draggable').attr('draggable', true);

		$(element).on('dragstart', function(e){

			var position = $scope.$eval(attrs.position);

			e.originalEvent.dataTransfer.effectAllowed = 'move';
			e.originalEvent.dataTransfer.setData('position', position);

			$(this).addClass('draggable-drag');
			e.originalEvent.stopPropagation();

		});

		$(element).on('dragend', function(e){
			$(this).removeClass('draggable-drag');
		});

	}
};

function DroppableDirective(){

	return{
		link: function($scope, element, attrs){

			$(element).addClass('droppable').attr('droppable', true);

			$(element).on('dragover', function(e){

				e.originalEvent.dataTransfer.dropEffect = 'move';

				if( e.originalEvent.preventDefault ){
					e.originalEvent.preventDefault();
				}

				e.originalEvent.stopPropagation();

				$('.droppable-over').removeClass('droppable-over');
				$(this).addClass('droppable-over');

			});

			$(element).on('dragenter dragleave', function(e){
				$(this).removeClass('droppable-over');
			});

			$(element).on('drop', function(e){

				if( e.originalEvent.stopPropagation ){
					e.originalEvent.stopPropagation();
				}

				$(this).removeClass('droppable-over');

				var from = e.originalEvent.dataTransfer.getData('position');
				var position = $scope.$eval(attrs.position);
				var func = $scope.$eval(attrs.droppabledrop);

				func.apply(this, [from, position]);

			});

		}
	}
};

APP.directive('draggable', DraggableDirective);
APP.directive('droppable', DroppableDirective);

})();