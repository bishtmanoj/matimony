app.controller('UploadController', function($scope, api) { alert();
    $scope.name = 'World';
    $scope.files = []; 
    $scope.upload=function(){

        var fd = new FormData();
    fd.append("file", $scope.files);
    api.request('/offline_upload/file/?file=',fd,
    {
        withCredentials: true,
        headers: {'Content-Type': undefined },
        transformRequest: angular.identity
    }, 'POST')
    .then(function(data)
    {
        alert('Done');
    });

      alert($scope.files.length+" files selected ... Write your Upload Code"); 
  
    };
  });
  