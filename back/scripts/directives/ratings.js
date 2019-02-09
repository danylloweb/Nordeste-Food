(function(){ 'use strict';

function RatingsDirective(){

	return {
		replace: true,
		require: 'ngModel',
		template: '<div class="ratings ratings-hover clearfix">' +
		'<label class="icon-star">' +
		'	<input type="radio" name="{{name}}" value="0.5" /></label>' +
		'<label class="icon-star icon-star-alt">' +
		'	<input type="radio" name="{{name}}" value="1" /></label>' +
		'<label class="icon-star">' +
		'	<input type="radio" name="{{name}}" value="1.5" /></label>' +
		'<label class="icon-star icon-star-alt">' +
		'	<input type="radio" name="{{name}}" value="2" /></label>' +
		'<label class="icon-star">' +
		'	<input type="radio" name="{{name}}" value="2.5" /></label>' +
		'<label class="icon-star icon-star-alt">' +
		'	<input type="radio" name="{{name}}" value="3" /></label>' +
		'<label class="icon-star">' +
		'	<input type="radio" name="{{name}}" value="3.5" /></label>' +
		'<label class="icon-star icon-star-alt">' +
		'	<input type="radio" name="{{name}}" value="4" /></label>' +
		'<label class="icon-star">' +
		'	<input type="radio" name="{{name}}" value="4.5" /></label>' +
		'<label class="icon-star icon-star-alt">' +
		'	<input type="radio" name="{{name}}" value="5" /></label>' +
		'</div>',
		link: function($scope, element, attrs, controller){

			$scope.name = attrs.id;

			controller.$render = function(){

				$('label', element)
				.on('mouseenter', function(){

					$('label.hover', element).removeClass('hover');
					$(this).prevAll('label').addClass('hover');
					$(this).addClass('hover');

					$('label.rated-hover', element).removeClass('rated-hover');
					$(this).nextAll('label.rated').addClass('rated-hover');

				})
				.on('mouseleave', function(){

					$('label.hover', element).removeClass('hover');
					$('label.rated-hover', element).removeClass('rated-hover');

				})
				.on('click', function(){

					var value = $('input', this).val();

					$('label.rated', element).removeClass('rated');
					$(this).prevAll('label').addClass('rated');
					$(this).addClass('rated');

					// $scope.$safeApply(function(){
						controller.$setViewValue( value );
					// });

				});

				var value = (controller.$viewValue != undefined) ? controller.$viewValue : '';
				element.val(value);

				$('input[value="' + value + '"]', element).parent().trigger('click');

			}

		}
	}

};

function RatingsListDirective(){

	return function($scope, element, attrs, controller){

		var values = [0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5];
		var value = attrs.ratingsList;

		if( !value ){
			return;
		}

		var html = '<span class="ratings ratings-list clearfix" title="' + value +' Estrelas">';

		angular.forEach(values, function(item){

			var rating = '<span class="icon-star ';

			if( item === parseInt(item) ){
				rating += 'icon-star-alt ';
			}

			if( item <= value ){
				rating += 'rated';
			}

			rating += '"></span>';
			html += rating;

		});

		html += '</span>';
		element.html(html);

	}
};

APP.directive('ratings', RatingsDirective);
APP.directive('ratingsList', RatingsListDirective);

})();