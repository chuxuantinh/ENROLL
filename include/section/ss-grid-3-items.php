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
            ],
             [
            "title"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            "image" => "assets/photos/news/01.jpg", 
            "date" => "May 01 2019",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"
            ]
            
          ];
    ?>


<section class="section list-news block-3">
  <div class="container">

     <div class="row grid-space-40">
         <?php foreach ($news as $key => $value) :
            $image = $value["image"];
            $title = $value["title"];
            $desc = $value["desc"];
            $date = $value["date"];
            ?>
    	
          <div class="item col-xs-12 col-sm-4" >
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

    <!-- pagination -->

    <?php if(isset($show_paging) && $show_paging):?>

    <div class="wrap-page-numbers">
      <ul class="page-numbers">
        <li><a class="prev page-numbers" href="#"> <i class="icon-arrow-5"></i> </a></li>
        <li><a class="page-numbers" href="#">1</a></li>
        <li><span class="page-numbers current">2</span></li>
        <li><a class="page-numbers" href="#">3</a></li>
        <li><span class="page-numbers dots">…</span></li>
        <li><a class="page-numbers" href="#">21</a></li>
        <li><a class="next page-numbers" href="#"> <i class="icon-arrow-6"></i> </a></li>
      </ul>
    </div>

  <?php endif;?>

  </div>


</section>