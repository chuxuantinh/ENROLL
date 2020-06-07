  <?php
        $listing_schoollife = [
            [
            "title"=> "Philosophy",
            "image" => "assets/photos/oval/01.png",
            "desc" => "We aim to “inspire brave learners to shape the future” through the unique combination of the Reggio Emilia philosophy, the rigorous IB framework and Vietnamese's cultural immersion."
            ],
            [
            "title"=> "Environment",
            "image" => "assets/photos/oval/02.png",
            "desc" => "We pride ourselves on creating an authentic valuing of Vietnamese culture, through the environment, the introduction of locally sourced materials and resources, language learning, explorations in Vietnamese arts, literature, cuisine, etc."
            ],
            [
            "title"=> "Health",
            "image" => "assets/photos/oval/03.png",
            "desc" => "We strictly follow hygiene principles, appropriate cleaning procedures and monitoring the air quality using the US AQI pollution guidelines with installed IQAir air purifiers around the school."
            ],
            [
            "title"=> "Nutrition",
            "image" => "assets/photos/oval/04.png",
            "desc" => "We feed our children with wholesome healthy food alternatives whenever possible, with a diet consisting of fresh fruits, organic vegetables, lean meats and whole grains which are recommended for optimum growth and brain development."
            ],
          ];
    ?>


<section class="section listing-image top center oval hidden-xs" >
 <div class="container">
    <div class="row grid-space-120">
      <h2 class="section-title page-title">School Life</h2>

      <div class="row">
        <div class="col-sm-6 col-text ">
             <?php foreach ($listing_schoollife as $key => $value) :
                if($key%2 == 0):
                  $image = $value["image"];
                  $title = $value["title"];
                  $desc = $value["desc"];
                  ?>
               <div class="item image-clip-mask wow fadeInUp">
                    <div class="img-thumb">
                      <div class="clip-wrap">
                         <div class='tRes_94' >
                            <img src="<?php echo $image; ?>" />
                         </div>
                      </div>
                   </div>
                   <div class="title">
                     <a href="#" class=""><?php echo $title; ?></a>
                   </div>
                   <div class="desc">
                     <a href="#" class=""><?php echo $desc; ?></a>
                   </div>
               </div>

             <?php endif; ?>

            <?php endforeach ?>
        </div>
        
        <div class="col-sm-6 col-right" style="margin-top:200px">
          <?php foreach ($listing_schoollife as $key => $value) :
                if($key%2 != 0):
                  $image = $value["image"];
                  $title = $value["title"];
                  $desc = $value["desc"];
                  ?>
               <div class="item image-clip-mask wow fadeInUp">
                   <div class="img-thumb">
                      <div class="clip-wrap">
                         <div class='tRes_94' >
                          <img src="<?php echo $image; ?>" />
                        </div>
                      </div>
                   </div>
                   <div class="title">
                     <a href="#" class=""><?php echo $title; ?></a>
                   </div>
                   <div class="desc">
                     <a href="#" class=""><?php echo $desc; ?></a>
                   </div>
               </div>

             <?php endif; ?>

            <?php endforeach ?>
        </div>
      </div>
 </div>
</section>

<!-- mobile -->


<section class="section listing-image top center oval visible-xs hidden-sm" >
 <div class="container">
    <div class="row grid-space-120">
      <h2 class="section-title page-title">School Life</h2>

      <div class="row">
        <div class="col-xs-12 col-text ">

          <div class="owl-carousel s-dots s-lazy">
             <?php foreach ($listing_schoollife as $key => $value) :
                
                  $image = $value["image"];
                  $title = $value["title"];
                  $desc = $value["desc"];
                  ?>
               <div class="item image-clip-mask">
                    <div class="img-thumb">
                      <div class="clip-wrap">
                         <div class='tRes_94' >
                            <img src="<?php echo $image; ?>" />
                         </div>
                      </div>
                   </div>
                   <div class="title">
                     <a href="#" class=""><?php echo $title; ?></a>
                   </div>
                   <div class="desc">
                     <a href="#" class=""><?php echo $desc; ?></a>
                   </div>
               </div>

            <?php endforeach ?>
          </div>

        </div>
      
 </div>
</section>







