app.directive('fileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var model = $parse(attrs.fileModel);
            var modelSetter = model.assign;

            element.bind('change', function () {
                scope.$apply(function () {
                    modelSetter(scope, element[0].files[0]);
                });
            });
        }
    };
}]);

app.service('fileUpload', ['$http', function ($http) {
    this.uploadFileToUrl = function (file, uploadUrl) {
        var fd = new FormData();
        fd.append('file', file);

        $http.post(uploadUrl, fd, {
                transformRequest: angular.identity,
                headers: {
                    'Content-Type': undefined
                }
            })

            .success(function () {})

            .error(function () {});
    }
}]);

app.controller('UploadController', function ($scope, api) {
    $scope.invalidFile = true;
    $scope.processing = false;
    $scope.response = {};
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#upload').on('change', function () {
        $scope.response = {};
        if (this.files[0].type.match(/image.*/)) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function () {});
            }
            reader.readAsDataURL(this.files[0]);
        } else {
            angular.element("input[type='file']").val(null);
            $scope.$apply(function () {
                $scope.response = {alert:'danger','flash':'File type not allowed'};
            });
        }

    });
    $uploadCrop = $('#upload-demo').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'circle'
        },
        boundary: {
            width: 300,
            height: 300
        }
    });

    $scope.uploadFile = function (url) {
        $scope.processing = true;
        var file = $scope.file;
        if (typeof (file) == 'undefined') {
            $scope.processing = false;
            return false;
        }

        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    "image": resp
                },
                success: function (data) {
                    $scope.processing = false;
                    $scope.file = '';
                },
                complete: function (response) {

                    if (JSON.parse(response.responseText).success == 'done') {
                        window.location.reload();
                    }
                    angular.element("input[type='file']").val(null);
                    $scope.$apply(function () {
                        $scope.processing = false;
                    });

                }
            });
        });
    };

});