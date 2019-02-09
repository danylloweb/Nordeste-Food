(function(){ 'use strict';

function LoadingInterceptor($rootScope, $q){

	var interceptor = {};

	/**
	 * Request
	 * @param {Object} config
	 */
	interceptor.request = function(config){

		$rootScope.$emit('$loading', true);

		return config || $q.when(config);
	}

	/**
	 * Response
	 * @var {Object} response
	 * @return {Object}
	 */
	interceptor.response = function(response){

		$rootScope.$emit('$loading', false);

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

		$rootScope.$emit('$loading', false);

		return $q.reject(response);
	}

	return interceptor;
}
LoadingInterceptor.$inject = ['$rootScope', '$q'];

APP.factory('LoadingInterceptor', LoadingInterceptor);

APP.config(['$httpProvider', function($httpProvider) {
    $httpProvider.interceptors.push('LoadingInterceptor');
}]);

})();