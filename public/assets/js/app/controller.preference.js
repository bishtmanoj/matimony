app.controller('PreferenceController', function($scope, $timeout, api){
    
    $scope.userData = [];
$scope.formData = {};
    $scope.editBox = 'basic';
    $scope.processing = false;
$scope.response = {};

    $scope.edit = function(event){        
        event.preventDefault();
        $scope.response = {};
        $scope.editBox = event.target.id;
        $scope.processing = true;
        $('#preference-box').modal();
        api.request(event.target.href, {},'GET', {}, true).then(function(response){
            $scope.userData = response.data;
            var preference = response.data.preference;
            $scope.processing = false;
            if(preference){
                $scope.formData.language = preference.language_id;
                $scope.formData.userHeight = preference.user_height_id;
                $scope.formData.religion = preference.religion_id;
                $scope.formData.country = preference.country_id;
                $scope.formData.state = preference.state_id;
                $scope.formData.state = preference.state_id;
                $scope.formData.city = preference.city_id;
                $scope.formData.education = preference.education_id;
                $scope.formData.employment = preference.employer_id;
                $scope.formData.profile = preference.profile_post_id;
            }
        });
    } 

    $scope.save = function(event){
        event.preventDefault();
        $scope.processing = true;
  
        $scope.formData.preferenceType = $scope.editBox;
        api.request(event.target.action, $scope.formData,'POST',{},true).then(function(response){
            $scope.response = response.data;
            $timeout(function(){ $scope.response = {}; }, 3000);
            if(response.data.alert == 'success')
            window.location.reload();
            $scope.processing = false;
        },function(){
            $scope.processing = false; 
        });
    }
});