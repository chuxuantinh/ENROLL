

<div id="footer">
	<div class="container">
		<div class="row">
			

			<div class="col-xs-12 col-sm-3 col-md-2 col-2">
				<ul class="menu">
					<li class=""><a href="#">Home</a></li>
			          <li class=""><a href="#">Our Philosophy</a></li>
			          <li><a href="#">School Offering</a></li>
			          <li><a href="#">Summer Camp 2019</a></li>
			          <li><a href="#">News</a></li>
			          <li><a href="#">Contacts</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4 col-3">
				<div class="col-sm-12 ">
					<form class="form-subscribe" action="#">
						<h3 class="title">SUBCRIBE US <span>to our letters</span>
						</h3>
						<input class="input" id="email" type="text" name="email" placeholder="Input your email">
						<button type="submit" class="btn btn-default">Subcribe</button>
					</form>
				</div>
				<div class="col-sm-12">
					<ul class=" social list-inline text-center">
						<li><a href="#"><i class="icon icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon icon-instagram"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-12 ">
					<div class="copyright">
						© 2019 by Bachkhoasoft. <br> All rights reserved.
					</div>
				</div>
			</div>
		</div>

	</div>
</div>




<div id="back-top" class="">
	<!-- <i class="icon icon-arrow3"></i> -->
	<img src="assets/images/btn-back-top.svg">
	<span>Back to top<span>
</div>


<!-- <script type='text/javascript' src='assets/js/wow/wow.min.js'></script> 
<script type='text/javascript' src='assets/js/owl.carousel.min.js'></script> 

<script type='text/javascript' src='assets/js/imagesloaded.pkgd.min.js'></script> 
<script type='text/javascript' src='assets/js/script.js'></script> 
<script type='text/javascript' src='assets/js/script_owl.js'></script> 
 -->
<script type='text/javascript' src='dist/assets/js/app.js'></script> 

<?php if($pagefacility):?>


<script src="assets/js/image-map-pro.min.js"></script>
<script type="text/javascript">
        ;(function ($, window, document, undefined) {
            $(document).ready(function() {


            var online = 'http://bachkhoasoft.com/html-aurora/src/data/imagemap-1.json';
            var local = 'http://localhost:8898/aurora/src/data/imagemap-1.json';
		    $.getJSON(online, function(data) {         
			    // alert(data);
			    // init_data(data);

			    var settings = data;
			    var Facility = $('#image-map-pro-container').imageMapPro(settings);

			     // $('.imp-tooltips-container.imp-sticky-tooltips .imp-tooltip')[0].addClass('imp-tooltip-visible');
			});

			$.imageMapProInitialized = function(imageMapName) {
				  $.imageMapProOpenTooltip('facility-imap', '1');
				  // $('.imp-tooltips-container.imp-sticky-tooltips .imp-tooltip')[0].addClass('imp-tooltip-visible');

				  // var p = $($('.imp-tooltip')[0]).position();
				  // $('.imp-tooltip').each(function(){
				  // 	$(this).css({ top: p.top+'px', left: p.left+'px'});
				  // });
			}


		  	$('.squares-element img').each(function() {
               // w = $(this).attr('width');
               // h = $(this).attr('height');
               // w = $(this).width();
               // h = $(this).height();
               w = 360; h=242;

               if(w && h) {
                   d = $(this).attr('data-display');
                   if(d){
                    s = 'display: block; max-width:'+w+'px';
                   }else{
                    s = 'display: inline-block; width:'+w+'px; max-width:100%';
                   }
                   $(this).wrap('<span class="imgres" style="'+s+'; "></span>');
                   pr = $(this).parent();
                   sp = $('<span style="padding-top:'+(h/w*100)+'%;">');
                   pr.prepend(sp);
               }
            });
            	
         });
        })(jQuery, window, document);
    </script>
<?php endif ?>

<?php if($timeline):?>

<script type="text/javascript">
	jQuery(document).ready(function($){
		var $timeline_block = $('.cd-timeline-block');

		//hide timeline blocks which are outside the viewport
		$timeline_block.each(function(){
			if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
			}
		});

		//on scolling, show/animate timeline blocks when enter the viewport
		$(window).on('scroll', function(){
			$timeline_block.each(function(){
				if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
					$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
				}
			});
		});
	});
</script>

<?php endif;?>

</body></html>
