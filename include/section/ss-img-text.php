<section   class="section img-text" >
  <div class="row grid-space-120 block_1 style_1 followHeight">
    <div class="col-sm-6 thumb equal2" >
      <div class="img-bg-rect bottom">
        <?php if(isset($ss_title)): ?>
          <div class='tRes_68' >
             <img class="lazy lazy-hidden " data-lazy-type="image" src="assets/images/lazy.png" 
          data-lazy-src="<?php echo $ss_img;?>" alt="">
        </div>
        <?php else:?>
          <div class='tRes_68' >
            <img class="lazy lazy-hidden " data-lazy-type="image" src="assets/images/lazy.png" 
        data-lazy-src="assets/photos/facility/02.jpg" alt="">
          </div>
        <?php endif?>
      </div>
     
    </div>
     <div class="col-sm-6">
      <div class="text equal1">
        <div class="display-table">
          <div class="table-cell" >
            <h2 class="section-title">
              <?php if(isset($ss_title)){echo $ss_title; } else echo 'Lorem ipsum dolor sit ame'; ?>
            </h2>
            <p> 
               <?php if(isset($ss_desc)){echo $ss_desc; } else echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'; ?>
            
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>