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
	<div class="container-fluid plr-0">
		<div class="row ">
			<div class="col-sm-8 col-sm-offset-4">
				 <div class="owl-small-left-big-right owl-per owl-carousel s-width s-nav" data-autospeed="2000" data-res="2,2,2,2,2" data-margin="10">

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
