(function(){ 'use strict';

function SlickBannerClientesDirective(){

  return function($scope, element, attrs){

    element.length > 0 && element.slick({
        slidesToShow: 5,
        slodesToScroll: 5,
        autoplay: !0,
        autoplaySpeed: 7e3,
        speed: 300,
        arrows: !0,
        dots: !1
    })

  }
};

APP.directive('slickbannerclientes', SlickBannerClientesDirective);

})();
