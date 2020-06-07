<?php 
  $timeline = [
            [
            "title"=> "2015",
            "image" => "assets/photos/timeline/01.jpg",
            "desc" => "Founded in 2015, Aurora International Preschool Of The Arts (Aurora) is located in 13 Tran Ngoc Dien, Thao Dien Ward, District 2, Ho Chi Minh City, representing the fulfillment of a dream of a local mother end educators who have long envisioned a high-quality early years education and care environment for Vietnam’s youngest citizens.",
            "imgclass"=> 'to-bottom-left'
            ],
             [
            "title"=> "2016",
            "image" => "assets/photos/timeline/02.jpg",
            "desc" => "The founder of Aurora intentionally selected to open the preschool in a large villa as it embraced the concept of creating a special home-style, peaceful and comfortable environment for children to learn and grow in.  Aurora is built upon the idea that the environment should function as a “third teacher” and the design of the preschool is prepared accordingly. The environment is rich with engaging materials that offer limitless possibilities for young children."
            ,
            "imgclass"=> 'to-bottom-right'
            ],
             [
            "title"=> "2017",
            "image" => "assets/photos/timeline/03.jpg", 
            "desc" => "Starting with two age groups in the first year (infant/toddler and preschool ages) Aurora steadily grew and we opened the third group in April 2017. As we now stand, in the scholastic year 2019-2020, we have seven groups covering the age range from 12 months – 6 years old.",
            "imgclass"=> 'to-bottom-left'
            ]
            
            
          ];
?>

<section id="cd-timeline" class="">


       <?php foreach ($timeline as $key => $value) :
          $title = $value["title"];
          $desc = $value["desc"];
          $image = $value["image"];
          $class="left";
          $classimg="img-right";
          $classimgdotline="to-bottom-left";

          $classimgline="to-bottom-left";

          if($key%2!=0){  
            $class= 'right'; $classimg="img-left";
            $classimgline="to-bottom-right";
            $classimgdotline="to-bottom-right";
        }
          ?>

       <div class="cd-timeline-block <?php echo $class; ?>">
            <div class="cd-timeline-dot <?php echo $classimgdotline;?>">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content row">
                <div class='col-md-10 <?php if($key%2==0) echo "col-md-offset-2";?>'>
                  <h2><?php echo $title; ?></h2>
                  <p><?php echo $desc;?></p>
                </div>
            </div> 
            <!-- cd-timeline-content -->
             <div class="cd-timeline-content-img <?php echo $classimg; echo " ";  echo $classimgline;?> ">
                <div class='tRes_68' >
                    <img src="<?php echo $image;?>">
                </div>
            </div> 

        </div> <!-- cd-timeline-block -->
            
        
   <?php endforeach ?>

<!--     <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-picture.svg" alt="Picture">
        </div> 

        <div class="cd-timeline-content">
            <h2>Title of section 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
            <a href="#0" class="cd-read-more">Read more</a>
            <span class="cd-date">Jan 14</span>
        </div> 
    </div>  -->
   

  
</section> <!-- cd-timeline -->


