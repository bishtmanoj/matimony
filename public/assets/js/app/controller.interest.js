app.controller('InterestsController', function ($scope, api) {
    $scope.create = function (url, item) {
        item.addClass('interested');
        var uid = item.find('span').attr('class').split('-').reverse()[0];
        api.request(url, {uid:uid}, 'POST', {}, true);
    }
});