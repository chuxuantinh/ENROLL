  <?php
        $listing_socialfeed = [
            [
            "title"=> "1. THE PRINCIPAL",
            "image" => "assets/photos/people/01.jpg",
            "desc" => "The Principal of Aurora has the responsibility to coordinate with the teachers and other team members to ensure the Reggio-Inspired philosophy is followed through pedagogy, daily practices, projects and classroom environments. The Principal works with teachers through professional development and coordinates with experts in The Arts to participate in the growth of Aurora children and staff. The Principal is also a reference person for families wanting to discuss issues that may arise."
            ],
            [
            "title"=> "2. EDUCATORS",
            "image" => "assets/photos/people/02.jpg",
            "desc" => "Each room has a differing number of adults depending on the age and number of children in each class. In charge of pedagogy in each class is the Lead Teacher or the Co-Lead Teachers, who head the projects, documentation and are the first point of contact for communication with families. The Teachers in each class support the Lead Teachers with their duties, documentation and care of the children."
            ],
            [
            "title"=> "3. ATELIERISTA",
            "image" => "assets/photos/people/03.jpg",
            "desc" => "With a deep understanding and knowledge of tools, materials and mediums used in Reggio Emilia schools, our Atelierista helps the children and teachers to realize their long-term projects, making them become real, effective, with a high sense of aesthetic, and tri-dimensional"
            ],
            [
            "title"=> "4. KITCHEN TEAM",
            "image" => "assets/photos/people/04.jpg",
            "desc" => "Our team of Cooks prepares the food consumed at Aurora, every day in our onsite kitchen. From the early hours of the morning until the end of the school day, the team works together to ensure the children and staff at Aurora eat healthy, well-balanced meals."
            ],
             [
            "title"=> "5. SUPPORTING STAFF",
            "image" => "assets/photos/people/05.jpg",
            "desc" => "Aurora’s Support Staff work through the day to maintain the premises and ensure a hygienic environment for everybody."
            ],
             [
            "title"=> "6. DIRECTOR",
            "image" => "assets/photos/people/06.jpg",
            "desc" => "Overseeing the operation of Aurora is our Director. The Director has responsibilities for the overall running of the school and its functions. "
            ],
             [
            "title"=> "7. ADMISSIONS TEAM",
            "image" => "assets/photos/people/07.jpg",
            "desc" => "The Admissions Team oversees the process of enrolling a new child through to their settling into the Aurora classes. They are accessible to prospective parents to answer queries about the school and pedagogy and also to current Aurora families to discuss any issues should they arise."
            ],
             [
            "title"=> "8. MARKETING TEAM",
            "image" => "assets/photos/people/08.jpg",
            "desc" => "Developing a thriving Aurora community is driven by our Marketing Team who conceptualise, plan and implement events for the preschool. They also make sure our social media accounts are up to date and represent the true spirit of Aurora."
            ],
          ];
    ?>


<section class="section listing-image top seed team hidden-xs" >
 <div class="container">
      <h2 class="section-title page-title small">OUR TEAM</h2>
      <div class="row">
           <div class="col-xs-12 col-sm-8 col-sm-offset-2 mb-50">
             <p> We fully understand that the quality of education and care that your child receives each day rests on the shoulders of these very special people. Indeed, all educators are carefully selected based on their experience, personal qualities and overall commitment to meeting Aurora’s standard of care and professionalism.</p>
            <p>Aurora teachers hold a wide range of qualifications in education, and their expertise is highly respected within the educational community. Aurora teachers receive on-going professional development and its commitment to a quality PYP learning environment means that parents can feel confident and secure that their child is in professional caring hands.</p>
                  </div>
      </div>
      
    <div class="row grid-space-120">

        <div class="col-sm-6 text-right wow fadeInUp">
             <?php foreach ($listing_socialfeed as $key => $value) :
                if($key%2 == 0):
                  $image = $value["image"];
                  $title = $value["title"];
                  $desc = $value["desc"];
                  ?>
               <div class="item image-clip-mask">
                   <div class="img-thumb">
                      <div class="clip-wrap">
                        <div class='tRes_69' >
                          <img src="<?php echo $image; ?>" />
                        </div>
                      </div>
                   </div>
                   <div class="title">
                     <a href="#" class=""><?php echo $title; ?></a>
                   </div>
                   <div class="desc">
                     <?php echo $desc; ?>
                   </div>
                   

               </div>

             <?php endif; ?>

            <?php endforeach ?>
        </div>
        
        <div class="col-sm-6 col-right text-left wow fadeInUp" style="margin-top:200px">
          <?php foreach ($listing_socialfeed as $key => $value) :
                if($key%2 != 0):
                  $image = $value["image"];
                  $title = $value["title"];
                  $desc = $value["desc"];
                  ?>
               <div class="item  image-clip-mask">
                   <div class="img-thumb ">
                      <div class="clip-wrap">
                        <div class='tRes_69' >
                          <img src="<?php echo $image; ?>" />
                        </div>
                      </div>
                   </div>
                   <div class="title ">
                     <a href="#" class=""><?php echo $title; ?></a>
                   </div>
                   <div class="desc">
                    <?php echo $desc; ?>
                   </div>
                   <!-- <a href="#" class="see-more">See more</a> -->
               </div>

             <?php endif; ?>

            <?php endforeach ?>
        </div>


  </div>
</div>
</section>



<section class="section listing-image top seed team hidden-sm visible-xs" >
 <div class="container">
      <h2 class="section-title page-title">OUR TEAM</h2>
      <div>
       <p> We fully understand that the quality of education and care that your child receives each day rests on the shoulders of these very special people. Indeed, all educators are carefully selected based on their experience, personal qualities and overall commitment to meeting Aurora’s standard of care and professionalism.</p>
<p>Aurora teachers hold a wide range of qualifications in education, and their expertise is highly respected within the educational community. Aurora teachers receive on-going professional development and its commitment to a quality PYP learning environment means that parents can feel confident and secure that their child is in professional caring hands.</p>

      </div>
    <div class="row grid-space-120">
          
           <div class="col-xs-12">
           <div class="owl-carousel s-dots s-lazy">

               <?php foreach ($listing_socialfeed as $key => $value) :
                 
                    $image = $value["image"];
                    $title = $value["title"];
                    $desc = $value["desc"];
                    ?>
                 <div class="item image-clip-mask">
                     <div class="img-thumb">
                        <div class="clip-wrap">
                          <div class='tRes_69' >
                            <img src="<?php echo $image; ?>" />
                          </div>
                        </div>
                     </div>
                     <div class="title">
                       <a href="#" class=""><?php echo $title; ?></a>
                     </div>
                     <div class="desc">
                       <?php echo $desc; ?>
                     </div>

                 </div>

              <?php endforeach ?>
            </div>
        </div>

  </div>
</div>
</section>
