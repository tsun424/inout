var inOutApp = angular.module("inOutApp",['ngRoute','inOutControllers','inOutServices']);

inOutApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/activity', {
        templateUrl: 'tpl/activity.html',
        controller: 'homeController'
      }).when('/new_activity', {
        templateUrl: 'tpl/new_activity.html',
        controller: 'newActivityController'
      }).when('/user/:userId', {
        templateUrl: 'tpl/user_details.html',
        controller: 'userController'
      }).
      otherwise({
        redirectTo: '/activity'
      });
  }]);

