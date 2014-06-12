<div class="row" ng-controller="rat_center">
	<div class="large-12 columns">
		<div class="row"><!--top nav bar starts-->
	       		<div class="large-6 columns"><h3>Ne1w Rating</h3></div>
			<!--TOP menu bar for -->
			     <div class="large-6 columns">
			           <div class="button-bar">
                           <ul class="button-group ">
                            <li><a href="#" class="tiny button primary"><b>Design Question</b></a></li>
                            <li><a href="#" class="tiny button secondary disabled"><b>Styles</b></a></li>
                            <li><a href="#" data-reveal-id="myModal" ng-click="preview();" class="tiny button secondary disabled"><b>Preview</b></a></li>
                                 <!--preview starts-->
                                 <div id="myModal" class="reveal-modal" data-reveal>
                                     <center><h3><a href="#">{{rating_title}}</a></h3></center>
                                     <div id="preview"></div>
                                     <a class="close-reveal-modal">&#215;</a>
                                 </div>
                                 <!--preview ends-->
                            <li><a href="#" class="tiny button secondary disabled"><b>Publish</b></a></li>
                           </ul>
                       </div>
                 </div>
		 </div> <!--top nav ends-->
                <form action="#" method="get">		
              <!--top title box starts-->  
	    <div class="row panel callout radius">
			<div class="large-8 columns">
		   	    <label><a href="#">Rating Title</a></label><br>
				<input type="text" required ng-model="rating_title" name="rating_title" required placeholder="Title">
			</div>
			<div class="large-3 columns">	
				<div class="row">
				    <div class="large-6 columns">
                       <label><a href="#" data-tooltip="1" class="has-tip tip-left" data-selector="tooltip" title="Number of Questions">Questions</a></label><br> 
                       <select name="rating_questions" id="sliderOutput2" style="width:55px; height:32px;" ng-model="rows" ng-change="matrix_change()">
                              <option selected value="1">1</option>
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
					    <label><a href="#" data-tooltip="2" class="has-tip tip-right" data-selector="tooltip" title="Number of Stars">Stars</a></label><br>
                            <select id="sliderOutput2" name="rating_stars" style="width:55px; height:32px;" ng-model="cols" ng-change="matrix_change()">
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
            </div>
		    <div class="large-1 columns"></div>
		</div><!--top tilte box endss-->
				
	<!-- sub questions box starts-->			
		<div class="row panel callout radius">
			<label><a href="#">Sub Questions</a></label></br>
		<!--questions field starts-->
		    <div id="matrix">
			   <div id="row_id_1">
			     <div class='row'>
					 <div class='large-5 columns'><input ng-model='rating_subq_1' id="rating_subq_1" type='text'></div>
					 <div class='large-6 columns'>
						 <span class='rating'>
				           <input type='radio' class='rating-input'><label class='rating-star'></label>
				           <input type='radio' class='rating-input'><label class='rating-star'></label>
				           <input type='radio' class='rating-input'><label class='rating-star'></label>
				           <input type='radio' class='rating-input'><label class='rating-star'></label>
				           <input type='radio' class='rating-input'><label class='rating-star'></label>
				         </span>
				     </div>
				     <div class="large-1 columns"><span onclick="delete_row('row_id_1');" class="error">Delete</span></div>
				 </div>
               </div>
            </div>
            <!--questions field ends-->
            <center><a href="#" ng-click="add_row();">Add New Question</a></center>
	     </div>	
	     <!-- sub questions box ends--><br>	

      <!--Bottom div for customizing stars starts-->
 
          <div class="row">
		<center><a class="button small" >Cancel</a> <button type="submit" class="button secondary small" type="submit">Save Questions</button></center>
			  <!---    <a href="#" data-reveal-id="starbox" class="button small">Stars' Text</a>
            <div id="starbox" class="reveal-modal radius" data-reveal style="width:500px;">
		         <h5>Customize your stars' label</h5>
		         <div class="row">
			        <div class="large-6 columns">
			             <label>First Star</label>
			             <input type="text" name='star_1'>
			             <label>Second Star</label>
			             <input type="text" name="star_2">
			             <label>Third Star</label>
			             <input type="text" name="star_3">
			             <label>Fourth Star</label>
			             <input type="text" name="star_4">
			             <label>Fifth Star</label>
			             <input type="text" name="star_5">
			        </div>
	                <div class="large-6 columns">		
			             <label>Sixth Star</label>
			             <input type="text" name="star_6">
			             <label>Seventh Star</label>
			             <input type="text" name="star_7">
			             <label>Eight Star</label>
			             <input type="text" name="star_8">
			             <label>Ninth Star</label>
			             <input type="text" name="star_9">
			             <label>Tenth Star</label>
			             <input type="text" name="star_10">
		            </div>
                 </div>
                 <a class="close-reveal-modal">&#215;</a>
            </div>-->
          </div>
    </form>	
    <!--Bottom div for customizing stars ends-->	
		
		</div>
	</div>
