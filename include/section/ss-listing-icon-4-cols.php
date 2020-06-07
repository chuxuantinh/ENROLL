  <?php
        $coreValues = [
            [
            "title"=> "Nurturing the whole child",
            "image" => "assets/images/icon/flower.svg",
            "icon" => "icon-flower"
            ],
            [
            "title"=> "Fostering life-long learning",
            "image" => "assets/images/icon/board.svg",
            "icon" => "icon-board"
            ],
            [
            "title"=> "Sparkling curiosity and creativity",
            "image" => "assets/images/icon/zoom.svg",
            "icon" => "icon-zoom"
            ],
            [
            "title"=> "Supporting self-discovery and imagination",
            "image" => "assets/images/icon/bulb.svg",
            "icon" => "icon-bulb"
            ],
          ];
    ?>

<section class="section listing-icon top center" >
 <div class="container">
      <h2 class="section-title page-title">Core Values</h2>

    <div class="row grid-space-40">

      <?php foreach ($coreValues as $key => $value) :
              $image = $value["image"];
              $title = $value["title"];
              ?>
           <div class="col-xs-6 col-sm-3 wow fadeInUp">
               <div class="img-thumb">

                 <img src="<?php echo $image; ?>">
               </div>
               <div class="text">
                 <a href="#" class=""><?php echo $title; ?></a>
               </div>
              
           </div>
      <?php endforeach ?>
 </div>
</section>
