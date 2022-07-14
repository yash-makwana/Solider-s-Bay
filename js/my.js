 app.controller('myctrl', function($scope, $http) 
{

 $scope.insert = function() {

        $http.post("process/insert.php", { name: $scope.name, email: $scope.email, password: $scope.password }).
        success(function(data, status, headers, config) {
            select(); //refresh all information
        }).error(function(data, status, headers, config) {
            console.log(data);
        });

        $scope.name = "";
        $scope.email = "";
        $scope.password = "";
    }
}