  <?php
        $workBenefits = [
            [
            // "title"=> "Great Paid",
            "image" => "assets/images/icon/sun.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
            // "title"=> "Healthy Enviroment",
            "image" => "assets/images/icon/sun.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
            [
            // "title"=> "Annual Leaves",
            "image" => "assets/images/icon/sun.svg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ]
           
          ];
    ?>

<section class="section listing-icon style3 left" >
 <div class="container">
    <div class="row ">
      <h2 class="col-sm-offset-2 section-title">Your benefit</h2>

      <div class="col-sm-7 col-sm-offset-3">
      <?php foreach ($workBenefits as $key => $value) :
              $image = $value["image"];
              $title = $value["title"];
              $desc = $value["desc"];
              ?>
           
               <div class="item">
                 <div class="img-thumb">
                   <img src="<?php echo $image; ?>">
                 </div>
                <!--  <a href="#" class="title"><?php //echo $title; ?></a> -->
                 <div class="text"><?php echo $desc; ?></div>
               </div>
              
           
      <?php endforeach ?>
      </div>
 </div>
</section>
