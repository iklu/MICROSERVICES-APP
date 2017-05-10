'use strict';

angular.module('App')
  .directive('homeButton', function($location) {
    return {
      templateUrl: 'templates/components/home-button.html',
      restrict: 'E',
      link: function($scope) {
        $scope.goHome = function() {
          $location.path('/');
        };
      }
    };
  });
