'use strict';

 angular.module('App').
  controller('medisController', ['$scope',  '$timeout', function($scope,  $timeout){

    $timeout(function () {
        $scope.scripts = [
            "alert('Hello');",
            "alert('World');"
        ];
    }, 0);
  }]).directive('redis', function($timeout){
       var updateScripts = function (element) {
        return function (scripts) {
        var loadScript = function() {
    		        if(typeof myAppRun === "function"){
    			    myAppRun();
    			    return;
    			}    				
               		var s = document.createElement('script');
               	        s.src = './modules/models/redis.js';
               		document.body.appendChild(s);
           	    };
           		
                    $timeout(loadScript, 0);
        };
    };
 
    return {
        restrict: "EA",
        scope: {
          scripts: "=" 
        },
        link: function(scope,element) {
            scope.$watch("scripts", updateScripts(element));
        }
    };
  })