(function(){ 'use strict';

function EditUserController($scope, $http, $rootScope, $log, $route, $location, $routeParams, $window, AuthService, messageCenterService){

  var view = this;

  view.name = 'Nordeste Food';

  AuthService.checkPermision();
  var me = AuthService.me();

  me.then(function (r) {
    $scope.currentUserid = r[0].id;
    $scope.currentUsername = r[0].name;
    $scope.currentUserlogin = r[0].email;
  });

  $scope.getUser = function($idUsuario) {
    $http
      .get('/api/user/' + $idUsuario, {})
        .success(function (r) {
          var result = r;
          $log.log(result);
          $scope.id = result.id;
          $scope.login = result.email;
          $scope.name = result.name;
          $scope.roleOption = result.role;
          $scope.password;
        })
        .error(function (r) {
          messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent });
        })
      ;
  }

  $scope.getUser($routeParams.id);

  $scope.roleOptions = [{
    "name": "admin",
    "label": "Administrador"
  },{
    "name": "users",
    "label": "Usuário"
  }
  ];

  $scope.edit = function () {

      $http
        .put('/api/user/' + $scope.id, {id_: $scope.id, name: $scope.name, login: $scope.login, password: $scope.new_password, role: $scope.roleOption})
        .success(function (r) {
          messageCenterService.add("success", r[0], { status: messageCenterService.status.permanent });
          $route.reload();
        })
        .error(function (r) {
          messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent });
        })
      ;

  };



}

APP.controller('EditUserController', EditUserController);

ROUTES.push({
  url: '/dashboard/user/:id',
  isDefault: false,
  templateUrl: 'partials/edit_user.html',
  controller: 'EditUserController',
  controllerAs: 'editUser'
});

})();
