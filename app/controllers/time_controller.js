var app = angular.module("time-picker", []);
app.controller("controller", function ($scope, $http) {
  $scope.insert = function () {
    $http
      .post("http://localhost/time-picker/api/insert_time.php", {
        time: $scope.time,
      })
      .success(function (data) {
        $scope.time = null;
      });
  };
});
