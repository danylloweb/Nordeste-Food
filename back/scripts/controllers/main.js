(function(){ 'use strict';

function MainController($rootScope, $scope, $log, $timeout, $http, $window, $location, AuthService, FlashService, messageCenterService){

	var view = this;

  $scope.imagens = [];

  $scope.getBanners = function() {
    $http.get('/api/banners/list_active.json').then(function(response){
      $scope.imagens = response.data['banners'];
    });
  };

  $scope.getBanners();

	view.loading = true;
	NProgress.set(0.0);
	NProgress.set(0.4);
	NProgress.set(1.0);
	view.messages = [];

	$scope.status = {
    isopenMessage: false,
    isopenUser: false
  };

  var me = AuthService.me();

  me.then(function (r) {
    $scope.CurrentUserId = r[0].id;
    $scope.CurrentUserName = r[0].name;
    $scope.CurrentUserLogin = r[0].email;
    $scope.CurrentUserRole = r[0].role;
  });

  $scope.isAdmin = function() {
    if($scope.CurrentUserRole == 'admin') {
      return true;
    }else{
      return false;
    }
  };

  view.userLogout = function() {
    $http.get('/api/logout').
    success(function(data, status, headers, config) {
      messageCenterService.add("success", data[0], { status: messageCenterService.status.unseen});
        $timeout( function(){
          $window.location.replace(URL);
        }, 300);
    }).
    error(function(data, status, headers, config) {
      $log.log("Error");
    });
	}

  $scope.userStatus = function(value) {

  	if (value) {
  		return true;
  	} else {
  		return false;
  	}
  };

  $scope.toggled = function(open) {

  };

  $scope.toggleDropdown = function($event) {
    $event.preventDefault();
    $event.stopPropagation();
    $scope.status.isopen = !$scope.status.isopen;
  };

	/**
	 * Remove one message from list
	 * @param {Object} message
	 * @return {void}
	 */
	view.removeMessage = function(message){

		var i = view.messages.indexOf(message);

		if(i != -1){
			view.messages.splice(i, 1);
		}

	}

	/**
	 * Remove all messages from list
	 * @return {void}
	 */
	view.removeMessages = function(){
		view.messages = [];
	}

	/**
	 * Add message(s) to list
	 * @param {String} type
	 * @param {Array} messages
	 * @return {void}
	 */
	view.addMessages = function(type, messages){

		if( messages == undefined || !messages.length ){
			return;
		}

		if( angular.isString(messages) ){
			messages = [messages];
		}

		angular.forEach(messages, function(message, index){
			view.messages.push({ type: type, text: message });
		});

	}

	/**
	 * Add error(s) message(s) to list
	 * @param {Array} messages
	 * @return {void}
	 */
	view.addErrorMessages = function(messages){
		view.addMessages('error', messages);
	}

	/**
	 * Add success message(s) to list
	 * @param {Array} messages
	 * @return {void}
	 */
	view.addSuccessMessages = function(messages){
		view.addMessages('success', messages);
	}

	/**
	 * Add info message(s) to list
	 * @param {Array} messages
	 * @return {void}
	 */
	view.addInfoMessages = function(messages){
		view.addMessages('info', messages);
	}

	/**
	 * Test if can has value on item
	 * @param {mixed} item
	 * @return {Boolean}
	 */
	view.hasValue = function(item){

		var ret = !!item;

		if( ret && angular.isObject(item) ){
			ret = ret && Object.keys(item).length;
		}else if( ret && angular.isNumber(item) ){
			ret = ret;
		}else{
			ret = ret && item.length;
		}

		return ret;
	};

	// Broadcast
	$rootScope.$on('$addErrorMessages', function(event, messages){
		return view.addErrorMessages(messages);
	});

	$rootScope.$on('$addSuccessMessages', function(event, messages){
		return view.addSuccessMessages(messages);
	});

	$rootScope.$on('$addInfoMessages', function(event, messages){
		return view.addInfoMessages(messages);
	});

	$rootScope.$on('$loading', function(event, value){
		NProgress.configure({ easing: 'ease', speed: 500 });
		NProgress.set(0.0);
		NProgress.set(0.4);
		NProgress.set(0.8);
		view.loading = value;
		NProgress.done();
	});

}
MainController.$inject = ['$rootScope', '$scope', '$log', '$timeout', '$http', '$window', '$location', 'AuthService', 'FlashService', 'messageCenterService'];

APP.controller('MainController', MainController);

})();
