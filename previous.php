 <?php

/* front page which contains logo*/

?>
 <!-- Gallery -->
  <div id="gallery" class="gallery"> 
    <div class="container"> 
    
      <div class="row space90"></div> 
      
      <div class="row">  
        <div class="span12">
          <h2>Previously on Agnitus 2K13</h2>
          <!--<h4>There is something for everyone</h4>-->
        </div>
      </div>    
      
      <div class="row space30"></div> 
          
      <div class="row">
        <div class="span12">  

          <!-- portfolio filter -->	
          <!--<div class="portfolio-container">       
        		<ul id="portfolio-filter">
        			<li class="active"><a href="#" class="filter" data-filter="*">All</a></li>
        			<li><a href="#" class="filter" data-filter=".gifts">Gifts</a></li>
              <li><a href="#" class="filter" data-filter=".manners">Manners</a></li>
        			<li><a href="#" class="filter" data-filter=".decorations">Decorations</a></li>
              <li><a href="#" class="filter" data-filter=".celebration">Celebration</a></li>
              <li><a href="#" class="filter" data-filter=".dinner">Dinner</a></li>
        		</ul>
          </div>  -->
          
      		<section class="row" id="portfolio-items">
            <ul class="portfolio popup-gallery">
				<?php
						$yourStartingPath=ROOT.'gallery';
						$directories = glob($yourStartingPath . '/*' , GLOB_ONLYDIR);
						foreach($directories as $file) {
							$name=strtolower(str_replace(" ","-",$file));$name=strtolower(str_replace($yourStartingPath.'/',"",$name));
							$name1=str_replace($yourStartingPath.'/',"",$file);
							echo '  
							<li> 
							<!-- Gallery Item -->
							<article class="span4 project" data-tags="celebration,manners" id="gallery_"'.$name1.'>
							  <div class="img-container-image">
								<!-- Image -->
								<img src="gallery/'.$name1.'/thumb.jpg" alt="" />
								<!-- Item Link -->  
								  <a href="img/gallery/01b.jpg" title="some text">
								<!-- Icon -->  
								<i class="icon-zoom-in"></i>
								</a>
							</li>';
						}
				?>
            
                                  
              
            </ul> 
          </section>    
                         
          <div class="space100"></div>  
          
        </div>
      </div>
  
  
  
  
    </div>
  </div> 
  <!-- Gallery End -->
