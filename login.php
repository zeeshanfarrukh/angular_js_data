<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<html>
<h3>Current user in System</h3>
<div ng-app="dbusers" ng-controller="sysUsers">
<ul>
  <li ng-repeat="n in names">
    {{n}}
  </li>
</ul>
</div>

<script>
var app = angular.module('dbusers', []);0
app.controller('sysUsers', function($scope, $http) {
    $http.get("users.php")
    .success(function(res) {$scope.names = res;});
});
</script> 

