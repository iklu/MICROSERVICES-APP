'use strict';

angular.module('App')

  .controller('indexController', function($scope, $location, $mdToast) {

    // shows how to use angular material service
   // $mdToast.show($mdToast.simple({position: 'top'}).content('Welcome Back!'));

    // Use location to change page instead of a href in the template

  
    $scope.openMemory = function() {
      $location.path('/memory');
    };

    $scope.openCards = function() {
      $location.path('/cards');
    };
    
     $scope.showList = function() {
      $location.path('/list');
    };
    
     $scope.showRedis = function() {
      $location.path('/redis');
    };
       $scope.showMedis = function() {
      $location.path('/medis');
    };
  });
