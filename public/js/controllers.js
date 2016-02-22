var inOutControllers = angular.module('inOutControllers',[]);

inOutControllers.controller('homeController',['$scope','activityService',function($scope,activityService){
  /*
    $scope.activityArr = [
    {"startTime": "10:37am","endTime": "12:37pm","user": "Ben","userId": 1,"group": "test group","description":"this is a test activity","status":"Completed","duration": "2 hours"},
    {"startTime": "11:37am","endTime": "01:37pm","user": "Ben","userId": 1,"group": "test group","description":"this is a test activity","status":"Completed","duration": "2 hours"},
    {"startTime": "09:37am","endTime": "11:37am","user": "Ben","userId": 1,"group": "test group","description":"this is a test activity","status":"Completed","duration": "2 hours"},
    {"startTime": "02:37pm","endTime": "05:37pm","user": "Ben","userId": 1,"group": "test group","description":"this is a test activity","status":"Completed","duration": "3 hours"}
  ];
  */
    activityService.get().success(function(data){
        $scope.activityArr = data
    });

}]);

inOutControllers.controller('newActivityController',['$scope',function($scope){
  $scope.message = 'This is the home page';
}]);

inOutControllers.controller('headerController',['$scope','dataService',function($scope,dataService){

  dataService.menuSelected = 0;
  $scope.menuArr = [
    {"name" : "Home","href" : "#/activity","iconClass" : "glyphicon glyphicon-home"},
    {"name" : "New Activity","href" : "#/new_activity","iconClass" : "glyphicon glyphicon-plus-sign"},
    {"name" : "Groups","href" : "#/","iconClass" : "glyphicon glyphicon-th-large"},
    {"name" : "Xiaoming Yang","href" : "#/","iconClass" : "glyphicon glyphicon-user"},
    {"name" : "Logout","href" : "#/","iconClass" : "glyphicon glyphicon-log-out"}
  ];
  $scope.select= function(item) {
         dataService.menuSelected = item; 
  };
  $scope.isActive = function(item) {
         return dataService.menuSelected === item;
  };

}]);

inOutControllers.controller('userController',['$scope','$routeParams','dataService',function($scope,$routeParams,dataService){
  dataService.menuSelected = -1;
  $scope.userId = $routeParams.userId;

}]);
