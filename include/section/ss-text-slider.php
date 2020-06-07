  <?php
        $sliderFacility1 = [
            [
            "title"=> "Social 1",
            "image" => "assets/photos/sliders/01.jpg"
            ],
            [
            "title"=> "Social 2",
            "image" => "assets/photos/sliders/02.jpg"
            ],
            [
            "title"=> "Social 3",
            "image" => "assets/photos/sliders/03.jpg"
            ]
            ,[
            "title"=> "Social 4",
            "image" => "assets/photos/sliders/02.jpg"
            ],
            [
            "title"=> "Social 5",
            "image" => "assets/photos/sliders/01.jpg"
            ],
            [
            "title"=> "Social 6",
            "image" => "assets/photos/sliders/02.jpg"
            ]
          ];
    ?>

<section class="section">

   <div class="container">
    <div class="row grid-space-0 mb-50">
      <div class="col-sm-9 col-sm-offset-3 " >
        <div class="text img-bg-line-top">
          <div class="display-table">
            <div class="table-cell" >
              <h2 class="section-title">Lorem ipsum</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  
  
    <div class="row grid-space-0">
      <div class="col-sm-9 col-sm-offset-3">
         <div class="owl-small-left-big-right owl-per owl-carousel s-width s-nav">

            <?php foreach ($sliderFacility1 as $key => $value) :
                    $image = $value["image"];
                    $title = $value["title"];
                    ?>
               <div class="item"> 
                <div class='<?php if($key%2==0){echo "tRes_1_2"; } else {echo "tRes_70";}?>' >
                  <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                </div>
            </div> <!-- end item -->
          <?php endforeach ?>
        </div>
      </div>
    </div>
   </div>

</section>

