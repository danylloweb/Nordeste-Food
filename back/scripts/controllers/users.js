(function(){ 'use strict';

function UsersController($scope, $http, $rootScope, $modal, $log, $location, AuthService, FlashService, messageCenterService, $timeout, $route){

	var view = this;

	view.name = 'Nordeste Food';

	view.usuarios = [];

	AuthService.checkPermision();
	var me = AuthService.me('admin');

	me.then(function (r) {
    $scope.id = r[0].id;
    $scope.name = r[0].name;
    $scope.login = r[0].email;
    $scope.role = r[0].role;
  });

	$scope.getUsers = function() {
		$http.get('/api/users/list.json').then(function(response){
		  view.usuarios = response.data['users'];
		});
	}

  $scope.deleteUser = function($userId) {
    $http
      .delete('/api/user/' + $userId, {usuario: $userId})
        .success(function (r) {
          messageCenterService.add("success", r[0], { status: messageCenterService.status.unseen, timeout: 1000 });
          $route.reload();
        })
        .error(function (r) {
           messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent, timeout: 1000 });
        });
  }


	$scope.items = ['adduser'];

	$scope.getUsers();
	$scope.open = function (size) {

	  var modalInstance = $modal.open({
	    animation: $scope.animationsEnabled,
	    templateUrl: 'ModalAddUser.html',
	    controller: 'ModalInstanceCtrl',
	    size: size,
	    resolve: {
	      items: function () {
	        return $scope.items;
	      }
	    }
	  });

	  modalInstance.result.then(function (selectedItem) {
	    $scope.selected = selectedItem;
	  }, function () {

	  });
	};


}

function ModalInstanceCtrl($scope, $http, $rootScope, $modal, $log, $location, AuthService, FlashService, messageCenterService, UsersService, $modalInstance, items){

	$scope.addUser = function() {
		$http
    .post('/api/users/new', {name: $scope.name, login: $scope.login, role: $scope.roleOption, password: $scope.password})
      .success(function (r) {
        messageCenterService.add("success", r[0], { status: messageCenterService.status.unseen, timeout: 1000 });
        $route.reload();
      })
	    .error(function (r) {
	       messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent, timeout: 1000 });
	    });
	};

	$scope.items = items;
  $scope.selected = {
    item: $scope.items[0]
  };

  $scope.ok = function () {
    $modalInstance.close($scope.selected.item);
  };

  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };

  $scope.roleOptions = [{
    "name": "admin",
    "label": "Administrador"
  },{
    "name": "users",
    "label": "Usuário"
  }
  ];

}



APP.controller('UsersController', UsersController);
APP.controller('ModalInstanceCtrl', ModalInstanceCtrl);

ROUTES.push({
	url: '/dashboard/users',
	isDefault: false,
	templateUrl: 'partials/list_users.html',
	controller: 'UsersController',
	controllerAs: 'users'
});

})();
