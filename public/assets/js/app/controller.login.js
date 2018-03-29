app.controller('LoginController', function ($scope, api) {
    $scope.loginData = {'ltype':'ajax'};
    $scope.loginProcessing = false;
    $scope.loginResponse = {};
    $scope.errors  = {};
    $scope.login = function (url) {
        $scope.loginProcessing = true;
        $scope.errors = {};
        $scope.loginResponse = {};
        api.request(url,$scope.loginData,'POST',{},true).then(function(response){
            
            $scope.loginResponse = response.data;
            if(response.data.alert == 'success'){
                window.location.reload();
            }
            $scope.loginProcessing = false;
        },function(error){ 
            $scope.loginProcessing = false;

            if(typeof(error.data.errors) != 'undefined' && error.data.errors.hasOwnProperty('password')){
                $scope.errors.password = error.data.errors.password[0];
            }
            if(typeof(error.data.errors) != 'undefined' && error.data.errors.hasOwnProperty('email')){
                $scope.errors.email = error.data.errors.email[0];
            }
        });
    }
})