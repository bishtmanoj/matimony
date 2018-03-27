var app = angular.module('MainApp',['ngSanitize']);
app.filter('unsafe', function($sce) {
    return function(val) {
        return $sce.trustAsHtml(val);
    };
});
app.factory('api', function ($http) {
    return {
        request: function (url, data, method, headers) {
            return $http({
                method: method ? method : 'GET',
                url: baseUrl + url,
                data: data,
               // headers:  {'Content-Type': 'application/x-www-form-urlencoded'}//headers ?headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        }
    };
});