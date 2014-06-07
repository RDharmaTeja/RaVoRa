//printing the star box starts in ratings page
var app1 = angular.module('app1', []);
 
app1.controller("printmatrix", function($scope){
 
                   $scope.rows=1;
                   $scope.cols=5;
		$scope.change= function(){
			var i,j,content="";
		  for (i=1;i<=$scope.rows;i++){
	  content+="<div class='row'><div class='large-5 columns'><input type='text'></div><div class='large-6 columns'><span class='rating'>";
			  for(j=1;j<=$scope.cols;j++){
				content+="    <input type='radio' class='rating-input'><label class='rating-star'></label>";  
				  }
				  content+="</span></div></div>";  
				
			  }
			  	 document.getElementById("matrix").innerHTML=content;	
			
			}
		  
             
 
});
//printing the star box ends
