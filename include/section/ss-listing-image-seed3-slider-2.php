  <?php
        $listing_nutrition = [
            [
            "title"=> "Lorem ipsum dolor sit 1",
            "image" => "assets/photos/health/03.png"
            ],
            [
            "title"=> "Lorem ipsum dolor sit 2",
            "image" => "assets/photos/health/04.png"
            ],
             [
            "title"=> "Lorem ipsum dolor sit 3",
            "image" => "assets/photos/health/01.png"
            ],
             [
            "title"=> "Lorem ipsum dolor sit 4",
            "image" => "assets/photos/health/02.png"
            ]
          ];
    ?>

<div class="container">     
 
</div>

<section class="section listing-image top seed style3" >
 <div class="container">

   
    <div class="row grid-space-120 mb-100">
        <div class="col-xs-12">
          <h1 class="page-title text-center small">Nutrition</h1>
        </div>
        <div class="col-xs-12 col-sm-offset-2 col-sm-9">
           <div class="owl-carousel s-lazy s-nav s-width">
             <?php foreach ($listing_nutrition as $key => $value) :
                 
                    $image = $value["image"];
                    $title = $value["title"];
                    $desc = $value["desc"];
                    ?>
               
                 <div class="item  image-clip-mask">
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

  <div class="row text-left">
     <div class="col-xs-12 col-sm-10 col-sm-offset-2">
      <p>At Aurora, proper nutrition is a priority. Our children are fed with wholesome healthy food alternatives whenever possible, with a diet consisting of fresh fruits, organic vegetables, lean meats and whole grains which are recommended for optimum growth and brain development. Wherever possible we follow these procedures:</p>
      <ul>
        <li>All meals for children are made by Aurora’s chefs</li>
        <li>All fresh milk is from organic seeds and natural cereal is cooked daily for children such as almond, chestnut, walnut, green beans, pumpkin, black beans, red beans...</li>
        <li>We use organic and safe vegetables from MM Market, Vinmart, Organica and Organik.</li>
        <li>We refrain from using artificial flavorings and seasonings in our cooking, instead we use the natural flavors from vegetables, sugar cane, salt, seaweed etc.</li>
        <li>The fish sauce used in our cooking is natural.</li>
        <li>None of the food we serve is GMO</li>
      </ul>
      <p>Breakfast, lunch and afternoon are included in tuition. If the organic version of a certain food item is unavailable, we do our best to provide the most natural alternative possible.</p>
      <p>Our menu was carefully created with just the right nutritional balance and variety in accordance with dietary guidelines and recommendations for a young developing child.</p>
      <p>Our beverage choices are water, homemade nut milk and an afternoon fruit/vegetable smoothie. We occasionally serve fresh, raw juices but do not serve processed, bottled juices or any other sugary drinks. Although our food is rich in flavor, we strive to keep our meals low in sodium and sugar.
        Meal times are another important educational moment here at Aurora. The children will learn from the first autonomies to an independency able to improve their sense of ownership of the place where they stay during the day, as an inhabitant.</p>

      </div>
  </div>



</div>

</section>

