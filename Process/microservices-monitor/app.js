'use strict';

var angular = require('angular');
require('angular-route');
require('angular-material');



var _templateBase = './templates';

var app = angular.module('App', ['ngRoute', 'ngAnimate', 'ngMaterial']);

var index = require('./modules/index');

app.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/', {
    templateUrl: _templateBase + '/index.html',
    controller: 'indexController',
  });

  $routeProvider.when('/memory', {
    templateUrl: _templateBase + '/memory.html',
    controller: 'memoryController',
  });
  
  $routeProvider.when('/list', {
    templateUrl: _templateBase + '/list.html',
    controller: 'listController',
  });
  
  $routeProvider.when('/redis', {
    templateUrl: _templateBase + '/redis.html',
    controller: 'redisController',
  });
  
  $routeProvider.when('/medis', {
    templateUrl: _templateBase + '/medis.html',
    controller: 'medisController',
  });

  $routeProvider.when('/cards', {
    // html alsoo works directly
    templateUrl: _templateBase + '/cards.html',
    controller: function($scope) {
      $scope.imagePath = 'https://material.angularjs.org/latest/img/washedout.png';
    }
  });

  $routeProvider.otherwise({ redirectTo: '/' });

}]);
