
<?php
/*
 * rat_center.php
 * 
 * Copyright 2014 RADAVARAM <radavaram@radavaram>
 */

?>
<div class="row" ng-controller="printmatrix">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-6 columns"><h3>New Rating</h3></div>
			<!--TOP menu bar for -->
			<div class="large-6 columns">
			<div class="button-bar">
  <ul class="button-group ">
    <li><a href="#" class="tiny button primary"><b>Designing Widget</b></a></li>
    <li><a href="#" data-reveal-id="myModal" ng-click="preview();" class="tiny button secondary [disabled]"><b>Preview</b></a></li>
<!--preview starts-->
<div id="myModal" class="reveal-modal" data-reveal>
  <center><h3><a href="#">{{rating_title}}</a></h3></center>
<div id="preview">
	</div>
  <a class="close-reveal-modal">&#215;</a>
</div>
    <!--preview ends-->
    
    <li><a href="#" class="tiny button secondary [disabled]"><b>Get Rated</b></a></li>
  </ul>
</div>
			</div>
		</div>
<form>		
		 <div class="row panel callout radius">
			
			<div class="large-8 columns">
			<label><a href="#">Rating Title</a></label><br>
				<input type="text" ng-model="rating_title" name="rating_title" required placeholder="New Question">
				</div>
			<div class="large-3 columns">	

			<!-- number of rows starts here -->
				<div class="row">
				     <div class="large-6 columns">
					      <!--<div class="range-slider radius" data-options="display_selector:#sliderOutput1;start: 1; end: 10;" data-slider="1">
                             <span class="range-slider-handle" style="transform: translateX(-1px);"></span>
                              <span class="range-slider-active-segment" style="width: 0%;"></span>
                           </div>-->
             <label><a href="#" data-tooltip="1" class="has-tip tip-left" data-selector="tooltip" title="Number of Questions">
 Rows</a>
						</label>      <br> 
        <select id="sliderOutput1" style="width:55px; height:32px;" ng-model="rows" ng-change="matrix_change()">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
                       </div>
                        <div class="large-6 columns">
					      <!--<div class="range-slider radius" data-options="display_selector:#sliderOutput2;start: 1; end: 10;" data-slider="5">
                             <span class="range-slider-handle" style="transform: translateX(-1px);"></span>
                              <span class="range-slider-active-segment" style="width: 0%;"></span>
                           </div>-->
           <label><a href="#" data-tooltip="2" class="has-tip tip-right" data-selector="tooltip" title="Number of Stars">
 Columns</a>
						</label> <br>
                            <select id="sliderOutput2" style="width:55px; height:32px;" ng-model="cols" ng-change="matrix_change()">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5" selected>5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
                       </div>
                  
                </div>
                
                <!-- number of columns starts here -->
                
                
			</div>
			
			<div class="large-1 columns">
				
				</div>
		
			</div>
				
	<!-- sub questions division starts-->			
		<div class="row panel callout radius">
			<label><a href="#">Sub Questions</a></label></br>
		<!--questions field-->
		<div id="matrix">
			<div class='row'><div class='large-5 columns'><input ng-model='rating_subq_1' id="rating_subq_1" type='text'></div><div class='large-6 columns'><span class='rating'>
				 <input type='radio' class='rating-input'><label class='rating-star'></label>
				  <input type='radio' class='rating-input'><label class='rating-star'></label>
				   <input type='radio' class='rating-input'><label class='rating-star'></label>
				    <input type='radio' class='rating-input'><label class='rating-star'></label>
				     <input type='radio' class='rating-input'><label class='rating-star'></label>
				     </span></div></div>


</div>
<center><a href="#" ng-click="add_row();">Add New Row</a></center>
				</div>	
				</form>	
		</div>		
		</div>
	<!-- sub questions division stops-->	
	
	<br>		
		</div>
	</div>
