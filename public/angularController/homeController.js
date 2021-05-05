app.controller("homeController", ['$scope', '$http', 
 function($scope, $http){
    
    
    /* $scope.usuarios = null;  */   
    $scope.getUsers = function(){
        $http({
			url: "/getUsersAll",
			method: "GET",
        })
		.success(function(data) {
            $scope.usuarios = data;    
            $scope.loading = true;
        })
		.error(function(data) {
            console.log('error');
        });
    };
    $scope.getLocales = function(){
        $http({
			url: "/getLocalesAll",
			method: "GET",
        })
		.success(function(data) {
            $scope.locales = data;    
     //       console.log(data);
            $scope.loading = true;
        })
		.error(function(data) {
            console.log('error');
        });
    };


    $scope.getRegistrosAll = function(){
        $http({
			url: "/getRegistros",
			method: "GET",
        })
		.success(function(data) {
            $scope.registros = data;    
     //       console.log(data);
            $scope.loading = true;
        })
		.error(function(data) {
            console.log('error');
        });
    };
    $scope.getLocalesUser = function(){
        $http({
			url: "/getLocalesUser",
			method: "GET",
        })
		.success(function(data) {
            $scope.localesU = data;    
     //       console.log(data);
            $scope.loading = true;
        })
		.error(function(data) {
            console.log('error');
        });
    };

    $scope.getBalance = function(){
        $http({
			url: "/getBalance",
			method: "GET",
        })
		.success(function(data) {
            $scope.balance = data;    
     //       console.log(data);
            $scope.loading = true;
        })
		.error(function(data) {
            console.log('error');
        });
    };

    //guaedar
    $scope.saveRegister = function(register){
      /*   console.log(register); */
                $http.post("/saveRegister",register)
                .then(function(response){
                    window.location.href="/home";
    //               $scope.idFile = '';            
                  /*  $(function() {
                       window.location.href = "/admin/register";
                   }, 2500); */
                }, function(response){
                    //Error
            console.log('MAlo');
                });
            };
            
}]);