var inOutServices = angular.module('inOutServices',[]);
inOutServices.factory('dataService',function(){
    //save global variables
    var dataJson = {"menuSelected": -1};
    return dataJson;
});

inOutServices.factory('activityService',['$http',function($http){
    var API_URI = '/public/index.php';
    return{
        get: function(){
            return $http.get(API_URI+'/activity');
        }

    };
}]);