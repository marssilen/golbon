<?php ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search</title>
<script src="<?= URL ?>js/angular.min.js"></script>
</head>

<body>



<div ng-app="myApp" ng-controller="customersCtrl"> 
<input ng-model="ur" ng-keyup="myFunction()" type="text" ><br>
<ul>
  <li ng-repeat="x in myData">
    {{ x.id + ', ' + x.name }}
  </li>
</ul>
<p>{{myData}}</p>
</div>


<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {//
	 $scope.myFunction = function() {
		$http.get("search/get/"+$scope.ur).then(function(response) {//
        $scope.myData = response.data.records;
    });
    }
});
</script>



</body>
</html>