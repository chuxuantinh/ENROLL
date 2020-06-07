  <?php
        $listing_heath = [
            [
            "title"=> "Lorem ipsum dolor sit 1",
            "image" => "assets/photos/health/01.png"
            ],
            [
            "title"=> "Lorem ipsum dolor sit 2",
            "image" => "assets/photos/health/02.png"
            ],
             [
            "title"=> "Lorem ipsum dolor sit 3",
            "image" => "assets/photos/health/03.png"
            ],
             [
            "title"=> "Lorem ipsum dolor sit 4",
            "image" => "assets/photos/health/04.png"
            ]
          ];
    ?>



<section class="section listing-image top seed style3" >
 <div class="container">
    <div class="row grid-space-120">
        <div class="col-xs-12"><h1 class="page-title text-center small">Health</h1></div>
        <div class="col-xs-12 col-sm-9">
           <div class="owl-carousel s-lazy s-nav s-width" >
             <?php foreach ($listing_heath as $key => $value) :
                 
                    $image = $value["image"];
                    $title = $value["title"];
                    $desc = $value["desc"];
                    ?>
             
                 <div class="item image-clip-mask">
                     <div class="img-thumb">
                        <div class="clip-wrap">
                          <div class='tRes_89' >
                            <img src="<?php echo $image; ?>" />
                          </div>
                        </div>
                     </div>
                     <div class="title">
                       <a href="#" class=""><?php echo $title; ?></a>
                     </div>
                 </div>

               <?php endforeach ?>
             
            </div>
        </div>

  </div>
</div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
       <div class="col-xs-12">
         <p> We are very conscious of the community we live in the growing consideration of the environment we live here in Ho Chi Minh City. As such, we now monitor the air quality at intervals during the day. The air monitor is available for the teachers to check as and when they need to. If the air is considered unhealthy for the children, the teachers will limit the amount of time spent outside doing physical activity and will alter the activities to indoor time. </p>
        <p>The AQI is a USA national index (Air Quality Index) established by the US EPA (Environmental Protection Agency which we use as our guide, so the values and colours are used to show local air quality, the levels of health concern and Aurora’s associated actions. The readings will be taken each day between 8-9am and then again at 3pm before the children come outside. The teachers will take the time to check the reading before they start their outdoor activities. They will then adjust the day’s activities accordingly. </p>
        <p>Additionally, Aurora has air purifiers installed in all rooms and are from the reputable Swiss brand IQAir with the aim to immensely improve the quality of the internal air during operating times of the day when children are in attendance. The installment of the air purifiers in our spaces ensures that the children have clean air during daytime activities, whilst eating and during naptime. Whilst being confined to indoors is not preferable, the teachers will use those opportunities to allow the children to visit other spaces and classrooms. This will still give them variety in the indoor spaces.</p>
        </div>
    </div>
      <div class="row">
      <div class="col-sm-3 col-sm-offset-7">
        <div class='tRes_100' >
          <img src="assets/images/decors/chicken.svg">
        </div>
      </div>
    </div>

  </div>

</section>

