<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<html>
<h3>Current user in System</h3>
<script>
var app = angular.module('dbusers', []);
app.controller('sysUsers', function($scope, $http) {
    $http.get("users.php")
    .success(function(res) {$scope.names = res;});
});
</script> 
<div ng-app="dbusers" ng-controller="sysUsers">
<ul>
  <li ng-repeat="n in names track by $index">
    {{n}}
  </li>
</ul>
</div>



