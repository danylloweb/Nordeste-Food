(function(){ 'use strict';

function MessagesInterceptor($rootScope, $q){

	var interceptor = {};

	/**
	 * Response
	 * @var {Object} response
	 * @return {Object}
	 */
	interceptor.response = function(response){

		$rootScope.$emit('$addErrorMessages', response.data.errorMessages);
		$rootScope.$emit('$addSuccessMessages', response.data.successMessages);
		$rootScope.$emit('$addInfoMessages', response.data.infoMessages);

		if( response.data.error ){
			return $q.reject(response);
		}

		return response || $q.when(response);

	}

	/**
	 * Response error
	 * @var {Object} response
	 * @return {Object}
	 */
	interceptor.responseError = function(response){

		$rootScope.$emit('$addErrorMessages', response.data.errorMessages);
		$rootScope.$emit('$addSuccessMessages', response.data.successMessages);
		$rootScope.$emit('$addInfoMessages', response.data.infoMessages);

		return $q.reject(response);
	}

	return interceptor;
}
MessagesInterceptor.$inject = ['$rootScope', '$q'];

APP.factory('MessagesInterceptor', MessagesInterceptor);

APP.config(['$httpProvider', function($httpProvider) {
    $httpProvider.interceptors.push('MessagesInterceptor');
}]);

})();