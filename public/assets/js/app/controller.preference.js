app.controller('PreferenceController', function($scope, api){

    $scope.editBox = 'basic';
    $('#preference-box').modal();
    $scope.edit = function(event){        
        event.preventDefault();
        $scope.editBox = event.target.id;
        $('#preference-box').modal();
        api.request(event.target.href, {},'GET', {}, true).then(function(response){
            console.log(response);
        });
    }
});