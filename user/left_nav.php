
<?php
/*
 * left_nav.php
 * 
 * Copyright 2014 RADAVARAM <radavaram@radavaram>
 * 
 * This program is free software; you can redistribute it and/or modify
 */

?>

<div class="large-2 medium-3 columns">
              <div class="hide-for-small">
                <div class="sidebar">
  <nav>
    <ul class="side-nav">
      <li id="all_li" class="active"><a href="/RVR/user"><i class="step fi-home size-24"></i>&nbsp; All RAVORAs</a></li>
      <li id="rating_li"><a href="#" onclick="show_rating();"><i class="step fi-star size-24"></i>&nbsp; Rating</a></li>
      <li id="voting_li"><a href="#" onclick="show_voting();"><i class="step fi-like size-24"></i>&nbsp; Voting</a></li>
      <li id="ranking_li"><a href="#" onclick="show_ranking();"><i class="step fi-list-number size-26"></i>&nbsp; Ranking</a></li>

      

    </ul>
  </nav>

</div>
              </div>
            </div>
  <div id="show_ravora" class="large-10 medium-11 columns" >
     <?require('user_center.php')?>
     </div>
