(function(){ 'use strict';

function SlickBannerDirective($timeout){

  return {
    restrict: "A",
    link: function($scope, element, attrs) {
      $timeout((function() {
        $timeout((function() {
          element.length > 0 && element.slick({
            slidesToShow: 1,
            slodesToScroll: 1,
            autoplay: !0,
            autoplaySpeed: 5e3,
            speed: 300,
            arrows: !0,
            dots: !1
          })
        }), 100)
      }), 100)
    }
  }

};

APP.directive('slickbannerhome', SlickBannerDirective);

})();
