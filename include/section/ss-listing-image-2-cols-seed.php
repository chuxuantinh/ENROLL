  <?php
        $listing_socialfeed = [
            [
            "title"=> "Title",
            "image" => "assets/photos/seed/01.png",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."
            ],
            [
            "title"=> "Title 2",
            "image" => "assets/photos/seed/02.png",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."
            ],
            [
            "title"=> "Title 3",
            "image" => "assets/photos/seed/03.png",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."
            ],
            [
            "title"=> "Title 4",
            "image" => "assets/photos/seed/04.png",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."
            ],
          ];
    ?>


<section class="section listing-image top seed hidden-xs" >
 <div class="container">
      <h2 class="section-title page-title">Social feeds</h2>
    <div class="row grid-space-120">

        <div class="col-sm-6 text-right wow fadeInUp">
             <?php foreach ($listing_socialfeed as $key => $value) :
                if($key%2 == 0):
                  $image = $value["image"];
                  $title = $value["title"];
                  $desc = $value["desc"];
                  ?>
               <div class="item image-clip-mask">
                   <div class="img-thumb">
                      <div class="clip-wrap">
                        <div class='tRes_68' >
                          <img src="<?php echo $image; ?>" />
                        </div>
                      </div>
                   </div>
                   <div class="title leaf leaf<?php echo $key+1;?>">
                     <a href="#" class=""><?php echo $title; ?></a>
                   </div>
                   <div class="desc">
                     <?php echo $desc; ?>
                   </div>
                   <a href="#" class="see-more">See more</a>

               </div>

             <?php endif; ?>

            <?php endforeach ?>
        </div>
        
        <div class="col-sm-6 col-right text-left wow fadeInUp" style="margin-top:200px">
          <?php foreach ($listing_socialfeed as $key => $value) :
                if($key%2 != 0):
                  $image = $value["image"];
                  $title = $value["title"];
                  $desc = $value["desc"];
                  ?>
               <div class="item  image-clip-mask">
                   <div class="img-thumb ">
                      <div class="clip-wrap">
                        <div class='tRes_68' >
                          <img src="<?php echo $image; ?>" />
                        </div>
                      </div>
                   </div>
                   <div class="title leaf leaf<?php echo $key+1;?>">
                     <a href="#" class=""><?php echo $title; ?></a>
                   </div>
                   <div class="desc">
                    <?php echo $desc; ?>
                   </div>
                   <a href="#" class="see-more">See more</a>
               </div>

             <?php endif; ?>

            <?php endforeach ?>
        </div>


  </div>
</div>
</section>



<section class="section listing-image top seed hidden-sm visible-xs" >
 <div class="container">
      <h2 class="section-title page-title">Social feeds</h2>
    <div class="row grid-space-120">
          
           <div class="col-xs-12">
           <div class="owl-carousel s-dots s-lazy">

               <?php foreach ($listing_socialfeed as $key => $value) :
                 
                    $image = $value["image"];
                    $title = $value["title"];
                    $desc = $value["desc"];
                    ?>
                 <div class="item image-clip-mask">
                     <div class="img-thumb">
                        <div class="clip-wrap">
                          <div class='tRes_68' >
                            <img src="<?php echo $image; ?>" />
                          </div>
                        </div>
                     </div>
                     <div class="title leaf leaf<?php echo $key+1;?>">
                       <a href="#" class=""><?php echo $title; ?></a>
                     </div>
                     <div class="desc">
                       <?php echo $desc; ?>
                     </div>
                     <a href="#" class="see-more">See more</a>

                 </div>

              <?php endforeach ?>
            </div>
        </div>

  </div>
</div>
</section>
