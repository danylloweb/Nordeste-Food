(function(){ 'use strict';


  function FlashService($rootScope, $timeout, $cookieStore, $cookies) {
    return {
      show: function (msg, cls) {
        cls = cls!==undefined ? cls : 'info';
        var time = 2500;
        $rootScope.flash = {msg:msg, cls:cls}
        $timeout(function () {
          delete $rootScope.flash;
        }, time);
      },
      checkCookies: function () {
        if ($cookies.flashCookie) {
          console.log($cookies.flashCookie);
          var flashCookie = eval($cookies.flashCookie.replace(/\+/g,' '));
          if (flashCookie.length == 2) {
            this.show(flashCookie[0], flashCookie[1]);
            $cookieStore.remove('flashCookie');
          }
        }
      }
    };
  }

  FlashService.$inject = ['$rootScope', '$timeout', '$cookieStore','$cookies'];

  APP.service('FlashService', FlashService);

})();
