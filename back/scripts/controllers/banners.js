(function(){ 'use strict';

function BannersController($scope, $http, $rootScope, $modal, $log, $location, AuthService, FlashService, messageCenterService, $timeout, $route){

  var view = this;

  view.name = 'Nordeste Food';

  view.imagens = [];

  AuthService.checkPermision();
  var me = AuthService.me();


  $scope.getBanners = function() {
    $http.get('/api/banners/list.json').then(function(response){
      view.imagens = response.data['banners'];
    });
  }

  $scope.deleteBanner = function($bannerId) {
    $log.log($bannerId);
    $http
      .delete('/api/banner/' + $bannerId, {banner: $bannerId})
        .success(function (r) {
          messageCenterService.add("success", r[0], { status: messageCenterService.status.unseen, timeout: 1000 });
          $route.reload();
        })
        .error(function (r) {
           messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent, timeout: 1000 });
        });
  }


  $scope.items = ['addbanner'];

  $scope.getBanners();
  $scope.open = function (size) {

    var modalInstance = $modal.open({
      animation: $scope.animationsEnabled,
      templateUrl: 'ModalAddBanner.html',
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

function ModalInstanceCtrl($scope, $http, $route, $rootScope, $modal, $log, $location, AuthService, FlashService, messageCenterService, $modalInstance, items, $timeout, $window, FileUploader){

  $scope.uploadedFile;


  var uploader = $scope.uploader = new FileUploader({
      url: '/api/upload'
  });

  // FILTERS

  uploader.filters.push({
      name: 'imageFilter',
      fn: function(item /*{File|FileLikeObject}*/, options) {
          var type = '|' + item.type.slice(item.type.lastIndexOf('/') + 1) + '|';
          return '|jpg|png|jpeg|bmp|gif|'.indexOf(type) !== -1;
      }
  });

  // CALLBACKS


  uploader.onSuccessItem = function(fileItem, response, status, headers) {
    $scope.uploadedFile = response[0];
    messageCenterService.add("success", "Imagem enviada, agora salve o banner.", { status: messageCenterService.status.unseen, timeout: 1000 });
  };
  uploader.onErrorItem = function(fileItem, response, status, headers) {
      messageCenterService.add("danger", "Erro ao fazer upload tente novamente.", { status: messageCenterService.status.permanent, timeout: 1000 });
  };

  $scope.addBanner = function() {
    $http
    .post('/api/banners/new', {banner_name: $scope.title, filename: $scope.uploadedFile})
      .success(function (r) {
        messageCenterService.add("success", r[0], { status: messageCenterService.status.unseen, timeout: 2000 });
        $route.reload();
      })
      .error(function (r) {
         messageCenterService.add("danger", r[0], { status: messageCenterService.status.permanent, timeout: 2000 });
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

}



APP.controller('BannersController', BannersController);
APP.controller('ModalInstanceCtrl', ModalInstanceCtrl);

ROUTES.push({
  url: '/dashboard/banners',
  isDefault: false,
  templateUrl: 'partials/list_banners.html',
  controller: 'BannersController',
  controllerAs: 'banners'
});

})();
