app.controller('InterestsController', function($scope, api){
$scope.create = function(url, data){
    api.request(url, data,'POST',{},true).then(function(response){
        console.log(response);
    });
}
});