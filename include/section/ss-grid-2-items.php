  <?php
        $news = [
            [
            "title"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            "image" => "assets/photos/news/01.jpg",
            "date" => "May 01 2019",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"
            ],
             [
            "title"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            "image" => "assets/photos/news/01.jpg",
             "date" => "May 01 2019",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"
            ]
            
          ];
    ?>


<section class="section list-news block-2">
  <div class="container">

   <div class="row  grid-space-40">
       <?php foreach ($news as $key => $value) :
          $image = $value["image"];
          $title = $value["title"];
          $desc = $value["desc"];
          $date = $value["date"];
          ?>
  	
        <div class="item col-sm-6" >
        	<div class="thumb">
  	        <a href="single.php" class="tRes_75">
  	          <img height="370" class="lazy lazy-hidden " data-lazy-type="image" src="assets/images/lazy.png" 
  	          data-lazy-src="<?php echo $image; ?>" alt="">
  	        </a>
          </div>
          <div class="bottom">
  	        <div class="text">
  	          <a href="single.php" class="title"><?php echo $title; ?></a>
  	          <div class="meta"><?php echo $date; ?></div>
  	          <div class="desc"><?php echo $desc ;?></div>
  	         </div>
           </div>
        </div>

    
     <?php endforeach ?>
  </div>




  </div>

</section>