(function(){ 'use strict';

/**
 * Config
 * @param {Object} $routeProvider
 * @param {Object} $locationProvider
 * @return {void}
 */
function appConfig($routeProvider, $locationProvider){

	var defaultUrl = '/';
	var routeParams = ['controller', 'controllerAs',
					   'template', 'templateUrl',
					   'resolve', 'redirectTo',
					   'title', 'isDefault',
					   'reloadOnSearch', 'caseInsensitiveMatch'];

	$locationProvider.html5Mode(true);

	angular.forEach(ROUTES, function(value, key){

		var route = {};

		angular.forEach(routeParams, function(item){
			if( value[item] ){
				route[item] = value[item];
			}
		});

		$routeProvider.when( String(value.url), route);

		if( value.isDefault ){
			defaultUrl = String(value.url);
		}

	});

	$routeProvider.otherwise({
		redirectTo: defaultUrl
	});

}
appConfig.$inject = ['$routeProvider', '$locationProvider'];

// Ready
window.ROUTES = [];
window.APP = angular.module('APP', ['ngLocale', 'ngResource', 'ngRoute', 'ui.bootstrap', 'angular-ui-confirm', 'ngCookies', 'MessageCenterModule', 'angucomplete-alt', 'angularFileUpload', 'slick']);

APP.config(appConfig);

angular.element(document).ready(function() {
	angular.bootstrap(document, ['APP']);
});

// APP.run(function ($rootScope, AuthService, FlashService) {
// 	$rootScope.$on('$locationChangeStart', function () {
// 		AuthService.me();
// 		FlashService.checkCookies();
// 		window.s = $rootScope;
// 	});
// });

})();
