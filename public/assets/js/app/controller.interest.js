app.controller('InterestsController', function($scope, api){
$scope.create = function(url, data){
api.request(url, data,{},true).then(function(response){});
}
});