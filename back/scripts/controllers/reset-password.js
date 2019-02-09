(function(){ 'use strict';

function ResetPasswordController($scope, $http, $window, $log, $routeParams, $timeout, $location, AuthService, FlashService, messageCenterService){

  var view = this;

  view.name = 'Nordeste Food - Recuperar senha';

  AuthService.checkPermision('guest');

  var reset_email = $routeParams.email;
  var reset_token = $routeParams.token;

  if (reset_email != null && reset_token != null) {
    $http
      .post('/api/reset-password/reset', {email: reset_email, token: reset_token})
      .success(function (r) {
        messageCenterService.add("success", r[0], { status: messageCenterService.status.permanent });
      })
      .error(function (r) {
        messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent });
      })
    ;
  }

  $scope.reset = function () {
    $http
      .post('/api/reset-password', {email: $scope.email})
      .success(function (r) {
        messageCenterService.add("success", r[0], { status: messageCenterService.status.permanent });
      })
      .error(function (r) {
        messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent });
      })
    ;
  };

}

APP.controller('ResetPasswordController', ResetPasswordController);

ROUTES.push({
  url: '/login/reset-password',
  isDefault: false,
  templateUrl: 'partials/reset-password.html',
  controller: 'ResetPasswordController',
  controllerAs: 'resetPassword'
});

})();
