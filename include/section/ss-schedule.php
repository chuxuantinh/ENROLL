  <?php
        $schedule1 = [
            [
            "title"=> "07:45 AM – 08:30 AM",
            "image" => "assets/photos/news/01.jpg",
            "desc" => "Morning arrival – this is the time for the children to arrive at school. Arriving during this time ensures the children start the routines of the day together and fosters a sense of belonging."
            ],
             [
            "title"=> "08:30 AM – 09:00 AM",
            "image" => "assets/photos/news/01.jpg",
            "desc" => "Breakfast"
            ],
             [
            "title"=> "09:00 AM",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Assembly – a time to gather together and introduce daily routines and plan the morning."
            ]
            ,
             [
            "title"=> "09:00 AM – 11:00 AM",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Reggio inspired time – possibilities include the following: <br> Dramatic play/ Construction/ Project time/ Outdoor time/ Swimming/ Expert-led workshops/ Light- table investigations"
            ]
             ,
             [
            "title"=> "11:00 AM – 11:15 AM",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Recognition time – a time for reflection of the morning and to prepare for the next stage in the day’s routine"
            ],
             [
            "title"=> "11:15 AM ",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Lunch – The children sit in the piazza and eat in small groups."
            ],
            [
            "title"=> "11:45 AM – 12:00 PM",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Children who attend in the morning only prepare to go home and are picked up. Full day children change clothes and prepare to nap."
            ]
            
          ];


          $schedule2 = [
            [
            "title"=> "12:00 PM – 02:15 PM",
            "image" => "assets/photos/news/01.jpg",
            "desc" => "Nap time – the children sleep in the cool, darkened space on the top floor with beds provided by the school."
            ],
             [
            "title"=> "02:15 PM – 02:30 PM",
            "image" => "assets/photos/news/01.jpg",
            "desc" => "Wake up – the children slowly rise from their nap and prepare themselves for the afternoon by washing faces and changing clothes."
            ],
             [
            "title"=> "02:30 PM – 02:45 PM ",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Afternoon tea"
            ]
            ,
             [
            "title"=> "02:45 PM - 04:00 PM",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Reggio inspired time"
            ],
             [
            "title"=> "04:00 PM – 04:15 PM",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "Departure – parents are invited to begin picking up their children during this time"
            ],
             [
            "title"=> "04:30 PM",
            "image" => "assets/photos/news/01.jpg", 
            "desc" => "School closes  "
            ]
            
          ];
    ?>


<section class="section daily-schedule">
  <div class="container">
    <div class="row grid-space-0">
       <div class="col-xs-12"><h1 class="page-title text-center">DAILY SCHEDULE</h1></div>
      <div class="col-sm-6 col-left">
         <div class="col-xs-12">
          <div class="col-title">MORNING</div>
        </div>
           <?php foreach ($schedule1 as $key => $value) :
                  $title = $value["title"];
                  $desc = $value["desc"];
                  $image = $value["image"];
                  ?>

                <div class="item col-xs-12">
                    <a href="#" class="title"><?php echo $title; ?></a>
                    <div class="desc"><?php echo $desc ;?></div>
                    <div class="thumb">
                      <a href="#" class="tRes_75">
                        <img height="370" class="lazy lazy-hidden " data-lazy-type="image" src="assets/images/lazy.png" 
                        data-lazy-src="<?php echo $image; ?>" alt="">
                      </a>
                    </div>
                    
                </div>
           <?php endforeach ?>
      </div>
      <div class="col-sm-6 col-right">
        <div class="col-xs-12">
          <div class="col-title">AFTERNOON</div>
        </div>
           <?php foreach ($schedule2 as $key => $value) :
                  $title = $value["title"];
                  $image = $value["image"];
                  $desc = $value["desc"];
                  ?>
                <div class="item col-xs-12">
                    <a href="#" class="title"><?php echo $title; ?></a>
                     <div class="desc"><?php echo $desc ;?></div>
                     <div class="thumb">
                      <a href="#" class="tRes_75">
                        <img height="370" class="lazy lazy-hidden " data-lazy-type="image" src="assets/images/lazy.png" 
                        data-lazy-src="<?php echo $image; ?>" alt="">
                      </a>
                    </div>
                   
                </div>
           <?php endforeach ?>
      </div>
     
    </div>
  </div>

</section>

