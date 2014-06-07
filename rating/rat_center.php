
<?php
/*
 * rat_center.php
 * 
 * Copyright 2014 RADAVARAM <radavaram@radavaram>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
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
    <li><a href="#" data-reveal-id="myModal" class="tiny button secondary [disabled]"><b>Preview</b></a></li>
<!--preview starts-->
<div id="myModal" class="reveal-modal" data-reveal>
  <h2>legen...Wait for it..</h2>
  <p class="lead">This going to be epic wesite...dary</p>
  <p></p>
  <a class="close-reveal-modal">&#215;</a>
</div>
    <!--preview ends-->
    
    <li><a href="#" class="tiny button secondary [disabled]"><b>Get Rated</b></a></li>
  </ul>
</div>
			</div>
		</div>
		<hr></hr>
		<span class="divider"></span>
		 <div class="row">
			
			<div class="large-7 columns">
			<label><a href="#">Rating Title</a></label><br>
				<input type="text" >
				</div>
			<div class="large-3 columns">	

			<!-- number of rows starts here -->
				<div class="row">
				     <div class="large-6 columns">
					      <!--<div class="range-slider radius" data-options="display_selector:#sliderOutput1;start: 1; end: 10;" data-slider="1">
                             <span class="range-slider-handle" style="transform: translateX(-1px);"></span>
                              <span class="range-slider-active-segment" style="width: 0%;"></span>
                           </div>-->
                     					<label><a href="#">
 Rows</a>
						</label>      <br> 
        <select id="sliderOutput1" style="width:55px; height:32px;" ng-model="rows">
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
                           	<label><a href="#">
 Columns</a>
						</label> <br>
                            <select id="sliderOutput2" style="width:55px; height:32px;" ng-model="cols">
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
			
			<div class="large-2 columns">
				<button class="tiny primary" onclick="display_matrix();" style="margin-top: 10px;"><b>Good to go</b></button><br>
				<a href="#" data-tooltip="" class="has-tip tip-right" data-selector="tooltip-hw3l0t4g0" title="Give number of rows and columns of the rating matrix">What is this?</a>
				</div>
		
			</div>
				
	<!-- sub questions division starts-->			
		<div class="row panel radius">
			<label><a href="#">Sub Questions</a></label></br>
		<!--questions field-->
		<div id="matrix">
	

</div>

				</div>		
		</div>		
		</div>
	<!-- sub questions division stops-->	
	
	<br>		
		</div>
	</div>
