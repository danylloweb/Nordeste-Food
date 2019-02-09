(function(){ 'use strict';
  function AuthService($http, $location, $rootScope, $q, $log, SessionService){

    var routesThatDontRequireAuth = ['/'];

    var adminRoles = ['admin'];
    var routesForAdmin = ['/dashboard/users'];

    // check if current location matches route
    var routeClean = function (route) {
      return _.find(routesThatDontRequireAuth,
        function (noAuthRoute) {
          return _.str.startsWith(route, noAuthRoute);
        });
    };

    var validateRoleAdmin = function (currentUser) {
      return currentUser ? _.contains(adminRoles, currentUser.role) : false;
    }

    var routeAdmin = function (route) {
      return _.find(routesForAdmin,
        function (noAuthRoute) {
        $log.log(noAuthRoute);
          return _.str.startsWith(route, noAuthRoute);
        });
    };

    return {
      me: function () {
        var deferred = $q.defer();
        $http
          .get('/api/me')
          .success(function (r) {
            deferred.resolve(r);
            $rootScope.me = r;
          })
          .error(function (r) {
            delete $rootScope.me;
          })
        ;
        return deferred.promise;
      },
      checkPermision: function (expectedRole, e) {
        var expectedRole = expectedRole !== undefined ? expectedRole : 'users';
        var userRole = 'guest';
        $http
          .get('/api/me')
          .success(function (r) {
            if (r[0].role) userRole = r[0].role;
            if ($location.url() == '/dashboard/users' && userRole != 'admin') {
              $location.path('/dashboard');
              return false;
            }
          })
          .error(function (r) {
            if (userRole != expectedRole) $location.path('/dashboard');
          })
        ;
      }
    };
  }
  AuthService.$inject = ['$http', '$location', '$rootScope', '$q', '$log'];

  APP.service('AuthService', AuthService);
})();
