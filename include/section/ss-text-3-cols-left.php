  <?php
        $listing_texts = [
            [
            "title"=> "Lorem ipsum dolor sit amet",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
            ],
             [
            "title"=> "Lorem ipsum dolor sit amet",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ],
             [
            "title"=> "Lorem ipsum dolor sit amet",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam"
            ]
            
          ];
    ?>

<section class="section text-col three-col">
	<div class="container">
		<div class="row grid-space-80">
			<?php foreach ($listing_texts as $key => $value) :
		            $title = $value["title"];
		            $desc = $value["desc"];
		            ?>
		          <div class="item col-xs-12 col-sm-4">
	    	          <a href="#" class="title"><?php echo $title; ?></a>
	    	          <div class="desc"><?php echo $desc ;?></div>
		          </div>
		      
		     <?php endforeach ?>
		</div>
	</div>

</section>



