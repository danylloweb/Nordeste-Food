(function(){ 'use strict';

function HomeController($scope, $http, $rootScope, $log, $location, AuthService){

	var view = this;

	view.name = 'Nordeste Food';
  view.imagens = [];

	AuthService.checkPermision('guest');

}

APP.controller('HomeController', HomeController);

ROUTES.push({
	url: '/',
	isDefault: true,
	templateUrl: 'partials/home.html',
	controller: 'HomeController',
	controllerAs: 'home'
});

})();
