app.controller('FilterController', function (api, $scope) {
    $scope.users = [];
    $scope.filters = [];
    $scope.formData = [];

    $scope.searchData = [];
    $scope.$parent.overlay = true;
    $scope.hasMore = false;
    $scope.page = 1;

    api.request('/filters', {}).then(function (response) {
        $scope.filters = response.data;
        $scope.filterUsers();
    });

    $scope.filterUsers = function (type) {

        api.request('/listing?page='+$scope.page, {
            stype: 'ajax',
            'data': $scope.formData.search
        }, 'POST').then(function (response) {
            var response = response.data;
            if($scope.users.length && type != 'search'){
                $scope.users = $scope.users.concat(response.data);
            } else {
                $scope.users = response.data;
            }
            $scope.$parent.overlay = false;
            $scope.page += 1;
            $scope.hasMore = response.total > $scope.users.length;
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