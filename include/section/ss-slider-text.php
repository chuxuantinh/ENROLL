  <?php
        $sliderFacility1 = [
            [
            "title"=> "Social 1",
            "image" => "assets/photos/sliders/history/01.jpg"
            ],
            [
            "title"=> "Social 2",
            "image" => "assets/photos/sliders/history/02.jpg"
            ],
            
          ];
    ?>

<section class="section">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-sm-offset-2">
        <h1 class="page-title left small">PHILOSOPHY</h1>
      </div>
    </div>
  
    <div class="row grid-space-0">
      
      <div class="col-sm-10 col-sm-offset-2 mb-50">
         <div class="owl-small-left-big-right owl-per owl-carousel s-width s-nav s-loop s-auto">

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


    <div class="container">
     
      <div class="row grid-space-0 mb-50">
        <div class="col-sm-10 col-sm-offset-2">
          <div class="text">
            <div class="display-table">
              <div class="table-cell" >
                <p>
                  <?php if(isset($ss_desc)){echo $ss_desc; } else echo $lorem200 ;?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

</section>

