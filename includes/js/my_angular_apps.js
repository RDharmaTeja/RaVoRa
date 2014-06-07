//printing the star box starts in ratings page
var app1 = angular.module('app1', []);
 
app1.controller("printmatrix", function($scope){
 
                   $scope.rows=1;
                   $scope.cols=5;
//function triggerd when rows or columns are changed 
		       $scope.preview="havd";
		$scope.matrix_change= function(){
			
		// matrix printing starts.....	
			var i,j,content="";
		  for (i=1;i<=$scope.rows;i++){
	  content+="<div class='row'><div class='large-5 columns'><input ng-model='rating_subq_"+i+"' id='rating_subq_"+i+"' type='text'></div><div class='large-6 columns'><span class='rating'>";
			  for(j=1;j<=$scope.cols;j++){
				content+="    <input type='radio' class='rating-input'><label class='rating-star'></label>";  
				  }
				  content+="</span></div></div>";  
				
			  }
			  	 document.getElementById("matrix").innerHTML=content;	
	  // matrix printing ends............		  	 

			}

 //preview function
		$scope.preview=function(){
			 var sub_question,i,preview_content="";
			 for (i=1;i<=$scope.rows;i++){
				 var input_id="rating_subq_"+i.toString();
				  sub_question=document.getElementById(input_id).value;
	preview_content+="<div class='row panel callout'><div class='large-6 columns'><h5>Q"+i+".&nbsp; "+sub_question+"</h5></div><div class='large-6 columns'><span class='rating'>";
			  for(j=1;j<=$scope.cols;j++){
				preview_content+="    <input type='radio' class='rating-input'><label class='rating-star'></label>";  
				  }
				  preview_content+="</span></div></div>";  								  
				 }
				 document.getElementById("preview").innerHTML=preview_content;
			}
 
 
 //add new row...
 $scope.add_row=function(){
	 var existing_cont=document.getElementById("matrix").innerHTML;
	 	  existing_cont+="<div class='row'><div class='large-5 columns'><input ng-model='rating_subq_"+($scope.rows+1)+"' id='rating_subq_"+($scope.rows+1)+"' type='text'></div><div class='large-6 columns'><span class='rating'>";
			  for(j=1;j<=$scope.cols;j++){
				existing_cont+="    <input type='radio' class='rating-input'><label class='rating-star'></label>";  
				  }
				  existing_cont+="</span></div></div>"; 
				  $scope.rows++;
	 document.getElementById("matrix").innerHTML=existing_cont;
	 }
                   
 
});
//printing the star box ends

