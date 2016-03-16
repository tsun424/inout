var inOutServices = angular.module('inOutServices',[]);
inOutServices.factory('dataService',function(){
    //save global variables
    var globalDataJson = {};
    return globalDataJson;
});

inOutServices.factory('activityService',['$http', '$httpParamSerializerJQLike', function($http, $httpParamSerializerJQLike){
    var API_URI = '/public/index.php';
    return{
        get: function(){
            return $http.get(API_URI+'/activity');
        },
        saveActivity:function(activityData){
            return $http({
                method: 'POST',
                url: API_URI+'/activity',
                data: $httpParamSerializerJQLike(activityData),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            });
        }

    };
}]);