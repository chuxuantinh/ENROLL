  <?php
        $sliderFacility1 = [
            [
            "title"=> "Social 1",
            "image" => "assets/photos/sliders/style1/01.png"
            ],
            [
            "title"=> "Social 2",
            "image" => "assets/photos/facility/01.jpg"
            ]
          ];
    ?>

<div id="slider-fixed" class="slider-fixed">
    <div class="owl-per owl-carousel s-dots" > <!--  data-autospeed="2000" data-res="1,1,1,1,1" data-margin="0"> -->

    <?php foreach ($sliderFacility1 as $key => $value) :
            $image = $value["image"];
            $title = $value["title"];
            ?>

        <div class="item image-clip-mask curve">
            <div class="img-thumb">
              <div class="clip-wrap">
                <div class='tRes_140' >
                  <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                </div>
              </div>
           </div>
       </div>

    <?php endforeach ?>
    </div>

    <a href="./" class="logo-absolute"> 
      <img src="assets/images/logo-white.svg" alt="logo">
    </a>
    		
</div>