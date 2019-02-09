(function(){ 'use strict';

function PaginationDirective(){

	var TEMPLATE = '<a class="{CLASS}" title="{TITLE}" href="{HREF}">{NUMBER}</a>';

	return {
		restrict: 'A',
		link: function(scope, element, attrs, controller){

			scope.$watch('view.pagination', function(pagination){

				if( !pagination || pagination.total == 1 || !pagination.total ){
					return;
				}

				var items = [];
				var total = pagination.total;
				var current = pagination.current;
				var url = pagination.url;

				var addItem = function(itemClass, itemHref, itemTitle, itemNumber){
					items.push(
						TEMPLATE.replace('{CLASS}', itemClass)
							    .replace('{HREF}', itemHref)
							    .replace('{TITLE}', itemTitle)
							    .replace('{NUMBER}', itemNumber)
					);
				}

				// Página anterior
				if( current != 1 ){
					addItem('', url + (current - 1), 'Página Anterior', '&laquo;');
				}

				// Primeira página
				if( current >= 4 ){
					addItem('', url + 1, 'Primeira Página', '1');

					if( current > 4 ){
						addItem('disabled dots', '#', '...', '...');
					}
				}

				// Paginação
				var i = ( current > 3 ) ? current - 2 : 1;
				var max = current + 3;

				if( max > total ){
					max = total;
				}

				for( i; i <= max; i++ ){

					var itemClass = (i == current) ? 'disabled' : '';
					var itemHref = url + i;
					var itemTitle = 'Página ' + i;

					addItem(itemClass, itemHref, itemTitle, i);

				};

				// Última página
				if( current + 3 < total ){

					if( current + 4 != total ){
						addItem('disabled dots', '#', '...', '...');
					}

					addItem('', url + total, 'Última Página', total);
				}

				// Próxima página
				if( current != total ){
					addItem('', url + (current + 1), 'Próxima Página', '&raquo;');
				}

				$(element).html( items.join('') );

			});

		}
	}
};

APP.directive('pagination', PaginationDirective);

})();