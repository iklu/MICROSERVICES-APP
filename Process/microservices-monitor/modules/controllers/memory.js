'use strict';

// node module!
var util = require('util');

angular.module('App')
  .controller('memoryController', function($scope, $interval) {
    console.log('memo');
    $scope.version = process.version;
    $scope.arch = process.arch;

    $interval(function() {
      $scope.memory = util.inspect(process.memoryUsage());
    }, 1000);
  });
