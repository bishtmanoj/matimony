
app.controller('MainController',function($scope, api){
  console.log(baseUrl);

  api.request('/listing',{}).then(function(r){
      console.log(r);
  });
});