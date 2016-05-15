needieHave.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('front');

    $stateProvider
        .state('front', {
            url: '/front',
            templateUrl: '../templates/_partialFront.html'
        })
        .state('home', {
            url: '/home',
            templateUrl: '../templates/_partialHome.html'
        })
}]);
