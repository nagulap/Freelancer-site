needieHave.directive('loginForm', function () {

    return {
        restrict: 'EA',
        templateUrl: 'templates/_partialLoginForm.html',

    }
});

needieHave.directive('signUpModal', function () {
    return {
        restrict: 'EA',
        templateUrl: 'templates/_partialFormModal.html'
    }
});
