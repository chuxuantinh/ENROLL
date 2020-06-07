  <?php
        $sliderBanner = [
            [
            "title"=> "AURORA INTERNATIONAL <br> PRESCHOOL OF THE ARTS",
            "subtitle"=> "Welcome to ",
            "desc"=> "A Reggio-Inspired school offers for children <br> from 12 months to 6 years of age",
            "image" => "assets/photos/banner/02.png"
            ],
             [
            "title"=> "AURORA INTERNATIONAL <br> PRESCHOOL OF THE ARTS 2",
            "subtitle"=> "Welcome to ",
            "desc"=> "A Reggio-Inspired school offers for children <br> from 12 months to 6 years of age",
            "image" => "assets/photos/banner/02.png"
            ],
          ];
    ?>

<div class="container">
<section class="section owl-per owl-carousel s-dots home-banner wow fadeInUp" data-autospeed="2000" data-res="1,1,1,1,1" data-margin="0">
	
		<?php foreach ($sliderBanner as $key => $value) :
		    $image = $value["image"];
		    $title = $value["title"];
		    $subtitle = $value["subtitle"];
		    $desc = $value["desc"];
		    ?>
			
				
						
			<div class="row">
				<div class="item text col-md-12"  style="background-image:url(<?php echo $image;?>);">
				  <div class="display-table">
				    <div class="table-cell" >
				    	<h3 class="subheading"><?php echo $subtitle; ?></h3>
				      <h1 class="section-title"><?php echo $title; ?></h1>
				      <p><?php echo $desc; ?></p>
				    </div>
				  </div>
				</div>
			</div>

						
				



		<?php endforeach ?>
	</div>
</section>
</div>


