(function(){ 'use strict';

function DashboardController($scope, $http, $window, $log, $timeout, $location, AuthService, FlashService, messageCenterService){

  var view = this;

  view.name = 'Nordeste Food - Dashboard';

  AuthService.checkPermision();

  view.login = function () {

    $http
    .post('/api/login', {email: $scope.email, password: $scope.password})
      .success(function (r) {
        messageCenterService.add("success", r[0], { status: messageCenterService.status.unseen });
        $timeout( function(){
          $window.location.replace(URL + '/dashboard');
        }, 1000);

      })
      .error(function (r) {
         messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent });
      });
  };

}

APP.controller('DashboardController', DashboardController);

ROUTES.push({
  url: '/dashboard',
  isDefault: false,
  templateUrl: 'partials/dashboard.html',
  controller: 'DashboardController',
  controllerAs: 'dashboard'
});

})();
