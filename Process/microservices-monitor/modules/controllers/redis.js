'use strict';

// node module!
var util = require('util');

     angular.module('App').
      controller('redisController', ['$scope', function($scope){
          $scope.grid = Math.floor(Math.random() * 1000) +1;
          $scope.generate = function(){
              $scope.grid = Math.floor(Math.random() * 1000) +1;
      	}
      }]).directive('myTable', function(){
      	return{
              restrict: 'E',
              scope:{
                  grid: '='
          	},
              link:function(scope, el, attrs){
                  scope.$watch('grid', function(newValue, oldValue){
                      var MyComponent = React.createFactory(GRID);
                      ReactDOM.render(
                          MyComponent({grid:newValue}),
                          el[0]
                      );
              	})
          	}
      	}
      })