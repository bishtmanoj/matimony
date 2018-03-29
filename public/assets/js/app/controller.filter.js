app.controller('FilterController', function (api, $scope, $sce) {
    $scope.users = '';
    $scope.filters = [];
    $scope.formData = [];

    $scope.searchData = [];
    $scope.$parent.overlay = true;
    $scope.hasMore = false;
    $scope.page = 1;
    $scope.loading = true;
    api.request('/filters', {}).then(function (response) {
        $scope.filters = response.data;
        $scope.filterUsers();
    });

    $scope.filterUsers = function (type) {
        $scope.loading = true;
        api.request('/listing?page='+$scope.page, {
            stype: 'ajax',
            'data': $scope.formData.search
        }, 'POST').then(function (response) {
            $scope.loading = false;
            var response = response.data;
            if($scope.users && type != 'search'){
               $scope.users += $sce.trustAsHtml(response.content);// $scope.users.concat($sce.trustAsHtml(response.content));
            } else {
                $scope.users = $sce.trustAsHtml(response.content);
            }
       
            $scope.$parent.overlay = false;
            $scope.page += 1;
            
            $scope.hasMore = response.hasMore;
        });
    }

    $scope.toggleSelect = function (key, item) {
        if (typeof ($scope.searchData[key]) == 'undefined') {
            $scope.searchData[key] = [];
        }

        if ($scope.formData.search[key][item.id] == true) {
            $scope.searchData[key].push(item.id);
            $scope.searchData[key].join();
        } else {
            var index = $scope.searchData[key].indexOf(item.id);
            $scope.searchData[key].splice(index, 1);
        }
        $scope.page = 1;
        $scope.filterUsers('search');
    }

});