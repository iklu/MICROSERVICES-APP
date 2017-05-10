'use strict';

angular.module('App')

  .controller('loginController', function($scope, $location, $mdToast) {
  $scope.username = '';
  $scope.password = '';

  $scope.message = '';

  $scope.login = function() {
    // login example function with ajax request and success/error promises
    myLogin($scope.username, $scope.password)
      .success(function() {
        $scope.message = 'Logged in!';
      })
      .error(function(errorMessage) {
        $scope.message = errorMessage;
      })
  }
  });
