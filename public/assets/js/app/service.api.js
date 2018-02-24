var app = angular.module('MainApp',[]);
app.factory('api', function ($http) {
    return {
        request: function (url, data, method, headers) {
            return $http({
                method: method ? method : 'GET',
                url: baseUrl + url,
                data: data,
                headers: headers | {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        }
    };
});