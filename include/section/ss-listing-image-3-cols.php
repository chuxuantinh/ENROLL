  <?php
        $workLists = [
            [
            "title"=> "HR DEPARTMENT",
            "image" => "assets/photos/works/01.jpg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
             [
            "title"=> "SUPERVISOR",
            "image" => "assets/photos/works/01.jpg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ],
             [
            "title"=> "ACCOUNTANT",
            "image" => "assets/photos/works/01.jpg",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            ]
            
          ];
    ?>

<section class="section listing-image style2 top center hidden-xs" >
 <div class="container">
    <h2 class="section-title max-width-380">Lorem ipsum dolor sit amet</h2>
    <div class="row">

      <?php foreach ($workLists as $key => $value) :
              $image = $value["image"];
              $title = $value["title"];
              $desc = $value["desc"];
              ?>
           <div class="col-sm-6 col-md-4">
               <div class="item">
                 <div class="img-thumb">
                  <div class="img-bg-rect-full">
                    <!-- <div class='tRes_94' > -->
                      <img src="<?php echo $image; ?>">
                    <!-- </div> -->
                   </div>
                 </div>
                 <a href="#" class="title"><?php echo $title; ?></a>
                 <div class="text">
                    <div class="desc"><?php //echo $desc; ?>
                      
                     <ul class="list-icon-right">
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet </a></li>
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet</a></li>
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet</a></li>
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet</a></li>
                     </ul>

                    </div>
                 </div>
               </div>
              
           </div>
      <?php endforeach ?>
 </div>
</section>


<section class="section listing-image style2 top center visible-xs hidden-sm" >
 <div class="container">
    <div class="row">
      <h2 class="section-title max-width-380">Lorem ipsum dolor sit amet</h2>

       <div class="owl-carousel s-dots s-lazy">
      <?php foreach ($workLists as $key => $value) :
              $image = $value["image"];
              $title = $value["title"];
              $desc = $value["desc"];
              ?>
           <div class="col-sm-12">

               <div class="item">
                 <div class="img-thumb">
                  <div class="img-bg-rect-full">
                      <img src="<?php echo $image; ?>">
                   </div>
                 </div>
                 <a href="#" class="title"><?php echo $title; ?></a>
                 <div class="text">
                    <div class="desc">
                     <ul class="list-icon-right">
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet </a></li>
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet</a></li>
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet</a></li>
                       <li><a href="10-workwithus-details.php">Lorem ipsum dolor sit amet</a></li>
                     </ul>

                    </div>
                 </div>
               </div>
              
           </div>
      <?php endforeach ?>
      </div>
 </div>
</section>
