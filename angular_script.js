var app = angular.module("TaskManager",[]);  
app.controller("taskController", function($scope, $http){  
     $scope.refresh = function() {
         $scope.displayData();
     }
    $scope.displayData = function(){  
        $http.get("select_category.php")  
        .success(function(data){  
             $scope.taskItem = data;  
        })
   } ;
});  