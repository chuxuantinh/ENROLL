  <?php
        $coreValues = [
            [
            "title"=> "Great Paid",
            "image" => "assets/images/icon/dollar.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
            "title"=> "Healthy Enviroment",
            "image" => "assets/images/icon/leaf.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
            "title"=> "Annual Leaves",
            "image" => "assets/images/icon/sun.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
            "title"=> "Travelling",
            "image" => "assets/images/icon/plane.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
            "title"=> "Health Care",
            "image" => "assets/images/icon/beat.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
            "title"=> "Funny Children",
            "image" => "assets/images/icon/faces.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
          ];
    ?>

<section class="section listing-icon style2 top center" >
 <div class="container">
   <h2 class="section-title page-title">Our Benefit</h2>
    <div class="row grid-space-200">

      <?php foreach ($coreValues as $key => $value) :
              $image = $value["image"];
              $title = $value["title"];
              $desc = $value["desc"];
              ?>
           <div class="col-xs-6 col-sm-4 wow fadeInUp">
               <div class="item">
                 <div class="img-thumb">
                   <img src="<?php echo $image; ?>">
                 </div>
                 <a href="#" class="title"><?php echo $title; ?></a>
                 <div class="text">
                   
                    <div class="desc"><?php echo $desc; ?></div>
                 </div>
               </div>
              
           </div>
      <?php endforeach ?>
 </div>
</section>
