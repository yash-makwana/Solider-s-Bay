app.controller('myctrl', function($http,$scope) 
{             
                select();
              $scope.addbtn = true;

                $scope.insert=function()
                {
                    $http.post("insert.php",{name: $scope.name, email: $scope.email, password: $scope.password}).
                    success(function(data, status, headers, config) 
                      {
                           select();
                      }).error(function(data, status, headers, config) {
                      console.log(data);
              });
                      $scope.name = "";
                      $scope.email = "";
                      $scope.password = "";
    }

                       function select() {
                        $http.get("select.php").success(function(data) {
                        $scope.items = data;
                        }).error(function(data, status, headers, config) {
                      console.log(data);
            })
            }
});