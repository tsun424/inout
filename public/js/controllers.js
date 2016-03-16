var inOutControllers = angular.module('inOutControllers',[]);

inOutControllers.controller('bodyController',['$scope',function($scope){

  $scope.isLeftOpen = false;
  
  $scope.clickMenu= function() {
	$scope.isLeftOpen = !$scope.isLeftOpen;
  };
  
}]);

inOutControllers.controller('homeController',['$scope','activityService',function($scope,activityService){

    activityService.get().success(function(data){
        $scope.activityArr = data
    });

}]);

inOutControllers.controller('newActivityController',['$scope','activityService',function($scope,activityService){

    //record new activity data
    $scope.activityData = {};

    $scope.saveActivity = function(){
        //TODO: add loading effect during submit
        return;
        activityService.saveActivity($scope.activityData)
            .then(function successCallback(response) {
                alert('save successfully');
                console.log(response);
            }, function errorCallback(response) {
                console.log(response);
            });


    }


}]);

inOutControllers.controller('headerController',['$scope', function($scope){

	//menu can be generated danamically
	$scope.menuArr = [
	{"name" : "Dashboard","href" : "#/activity","iconClass" : "icon fa fa-tachometer"},
	{"name" : "New Activity","href" : "#/new_activity","iconClass" : "icon fa fa-desktop"},
	];
	$scope.isRightOpen = false;
	$scope.isMenuCollapsed = true;
	$scope.menuSelected = 0;
	$scope.breadcrumb = 'Dashboard';
	
	$scope.clickRight = function(){
		$scope.isRightOpen = !$scope.isRightOpen;
	};
	
	$scope.selectMenu = function(index){
		if(index === $scope.menuSelected){
			return;
		}else{
			$scope.menuSelected = index;
			$scope.breadcrumb = $scope.menuArr[index].name;
		}
	};
	
	$scope.isMenuActive = function(item) {
		return $scope.menuSelected == item;
	};
	

}]);
