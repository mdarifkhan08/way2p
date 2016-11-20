<h3>index.php</h3><hr/>
<pre class="prettyprint">
&lt;DOCTYPE html>
&lt;html>
&lt;head>
&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">&lt;/script>
&lt;/head>
&lt;body>
&lt;div class="container">
&lt;div class="buttons" ng-app="checkboxExample" ng-controller="myController">
          &lt;div class="pull-right">
          &lt;span ng-bind-html="mess">&lt;/span>
           &lt;input type="checkbox" ng-model="checkboxModel" name="agree" value="1" ng-change="change()"/>
            &nbsp;
            &lt;input type="submit" value="Continue" ng-disabled="disBut" class="btn btn-primary" />
          &lt;/div>
&lt;/div>
&lt;/div>
&lt;script src="https://code.angularjs.org/1.5.7/angular.min.js">&lt;/script>
&lt;script src="https://code.angularjs.org/1.5.7/angular-sanitize.min.js">&lt;/script>
&lt;script>
angular.module('checkboxExample', ['ngSanitize'])
.controller('myController', ['$scope', function($scope) {
    $scope.checkboxModel = '';
    $scope.disBut = true;
    $scope.mess = '&lt;span class="alert alert-danger">I have read and agree to the &lt;b>&lt;a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions&lt;/a>&lt;/b>&lt;/span>';
    $scope.change = function() {
        if ($scope.checkboxModel == true) {
            $scope.disBut = false;
            $scope.mess = '&lt;span class="alert alert-success">I have read and agree to the &lt;b>&lt;a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions&lt;/a>&lt;/b>&lt;/span>';
        } else {
            $scope.disBut = true;
            $scope.mess = '&lt;span class="alert alert-danger">I have read and agree to the &lt;b>&lt;a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions&lt;/a>&lt;/b>&lt;/span>';
        }
    }
}]);
&lt;/script>
&lt;/body>
&lt;/html>
</pre>

<h3>Click On Checkbox to view output</h3>

<div class="buttons" ng-app="checkboxExample" ng-controller="myController">
          <div class="pull-right">
          <span ng-bind-html="mess"></span>
           <input type="checkbox" ng-model="checkboxModel" name="agree" value="1" ng-change="change()"/>
            &nbsp;
            <input type="submit" value="Continue" ng-disabled="disBut" class="btn btn-success" />
          </div>
</div>

<script src="<?php echo base_url();?>static/js/angularjs/angular.min.js"></script>
<script src="<?php echo base_url();?>static/js/angularjs/angular-sanitize.min.js"></script>
<script>
angular.module('checkboxExample', ['ngSanitize'])
.controller('myController', ['$scope', function($scope) {
    $scope.checkboxModel = '';
    $scope.disBut = true;
    $scope.mess = '<span class="alert alert-danger">I have read and agree to the <b><a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions</a></b></span>';
    $scope.change = function() {
        if ($scope.checkboxModel == true) {
            $scope.disBut = false;
            $scope.mess = '<span class="alert alert-success">I have read and agree to the <b><a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions</a></b></span>';
        } else {
            $scope.disBut = true;
            $scope.mess = '<span class="alert alert-danger">I have read and agree to the <b><a href="http://snaponshop.com/index.php?route=common/termsandcondition" target="_blank">Terms and Conditions</a></b></span>';
        }
    }
}]);
</script>
