(function(){ 'use strict';

function AddUserController($scope, $http, $rootScope, $log, $location, $routeParams, $window, AuthService, messageCenterService, $route){

  var view = this;

  view.name = 'Nordeste Food';

  AuthService.checkPermision();
  var me = AuthService.me();

  me.then(function (r) {
    $scope.currentUserid = r[0].id;
    $scope.currentUsername = r[0].name;
    $scope.currentUserlogin = r[0].email;
    $scope.currentUserpassword = '';
    $scope.currentUserconfirm_password = '';
  });


  $scope.roleOptions = [{
    "name": "admin",
    "label": "Administrador"
  },{
    "name": "users",
    "label": "Usuário"
  }
  ];

  view.addUser = function () {

      $http
        .post('/api/users/new', {name: $scope.name, login: $scope.login, role: $scope.roleOption, password: $scope.password})
        .success(function (r) {
          messageCenterService.add("success", r[0], { status: messageCenterService.status.unseen, timeout: 1000 });
          $route.reload();
        })
        .error(function (r) {
           messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent, timeout: 1000 });
        })
      ;

  };



}

APP.controller('AddUserController', AddUserController);

ROUTES.push({
  url: '/dashboard/users/new',
  isDefault: false,
  templateUrl: 'partials/add_user.html',
  controller: 'AddUserController',
  controllerAs: 'useradd'
});

})();
