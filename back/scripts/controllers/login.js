(function(){ 'use strict';

function LoginController($scope, $http, $window, $log, $timeout, $location, AuthService, FlashService, messageCenterService){

  var view = this;

  view.name = 'Nordeste Food - Login';

  AuthService.checkPermision('guest');
  var me = AuthService.me();


  if (me.$$state.status == 1) {
    $window.location.replace(URL + '/dashboard');
  }

  view.login = function () {

    $http
    .post('/api/login', {email: $scope.email, password: $scope.password})
      .success(function (r) {
        messageCenterService.add("success", r[0], { status: messageCenterService.status.unseen, timeout: 1000 });
        $timeout( function(){
          $window.location.replace(URL + '/dashboard');
        }, 1000);

      })
      .error(function (r) {
         messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent, timeout: 1000 });
      });
  };

}

APP.controller('LoginController', LoginController);

ROUTES.push({
  url: '/login',
  isDefault: false,
  templateUrl: 'partials/login.html',
  controller: 'LoginController',
  controllerAs: 'login'
});

})();
