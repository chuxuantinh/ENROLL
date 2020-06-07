(function ($) {
    $(document).ready(function () {

        function itemOwl(owl,responsive,margin,autospeed,dataout,datain) {
            owl.owlCarousel({
                // navText: ["<i class='icon-arrow-1'></i>","<i class='icon-arrow-2'></i>"],
                navText: ['<div class="arrow"></div>','<div class="arrow"></div>'],
                nav:(owl.hasClass('s-nav') ? true : false),
                dots:(owl.hasClass('s-dots') ? true : false),
                loop: owl.hasClass('s-loop') ? true : false,
                autoplay: owl.hasClass('s-auto') ? true : false,
                autoplayHoverPause:true,
                center: owl.hasClass('s-center') ? true : false,
                autoWidth: (owl.hasClass('s-width') ? true : false),
                autoHeight: (owl.hasClass('s-height') ? true : false),
                lazyLoad:true,
                video:(owl.hasClass('s-video') ? true : false),
                mouseDrag:(owl.hasClass('s-drag') ? false :true),                
                autoplayTimeout: (autospeed ? parseInt(autospeed) : 5000),                
                animateOut: dataout,
                animateIn: datain,
                smartSpeed: 450,
                responsiveClass:true,
                responsive:{
                    0:{
                        margin: parseInt(margin[4]),
                        items:parseInt(responsive[4]),
                    },
                    480:{
                        margin: parseInt(margin[3]),
                        items:parseInt(responsive[3]),
                    },
                    768:{
                        margin: parseInt(margin[2]),
                        items:parseInt(responsive[2]),
                    },
                    992:{
                        margin: parseInt(margin[1]),
                        items:parseInt(responsive[1]),
                    },
                    1200:{
                        margin: parseInt(margin[0]),
                        items:parseInt(responsive[0]),
                    }
                }
            })            
        }
        // Responsive OWL    
        function ResOwlSlider() {
            $(".owl-carousel").each(function () {
                var owl = $(this),
                    responsive =  owl.attr('data-res'),
                    margin =  owl.attr('data-margin'),  
                    autospeed = owl.attr('data-autospeed'), 
                    dataout = owl.attr('data-out'),
                    datain = owl.attr('data-in'); 
                if(!responsive) { responsive = '1,1,1,1,1'; }
                responsive = responsive.split(',');
                if(!margin) { margin = '0,0,0,0,0'; }
                margin = margin.split(',');

                owl.imagesLoaded(function(){    
                    itemOwl(owl,responsive,margin,autospeed,dataout,datain);
                });


                // add animate.css class(es) to the elements to be animated

                /*
                  function setAnimation ( _elem, _InOut ) {
                    // Store all animationend event name in a string.
                    // cf animate.css documentation
                    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                    _elem.each ( function () {
                      var $elem = $(this);
                      var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                      $elem.addClass($animationType).one(animationEndEvent, function () {
                        $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                      });
                    });
                  }

                // Fired before current slide change
                  owl.on('change.owl.carousel', function(event) {
                      var $currentItem = $('.owl-item', owl).eq(event.item.index);
                      var $elemsToanim = $currentItem.find("[data-animation-out]");
                      setAnimation ($elemsToanim, 'out');
                  });

                // Fired after current slide has been changed
                  var round = 0;
                  owl.on('changed.owl.carousel', function(event) {

                      var $currentItem = $('.owl-item', owl).eq(event.item.index);
                      var $elemsToanim = $currentItem.find("[data-animation-in]");
                    
                      setAnimation ($elemsToanim, 'in');
                  })
                  
                  owl.on('translated.owl.carousel', function(event) {
                    console.log (event.item.index, event.page.count);
                    
                      if (event.item.index == (event.page.count - 1))  {
                        if (round < 1) {
                          round++
                          console.log (round);
                        } else {
                          owl.trigger('stop.owl.autoplay');
                          var owlData = owl.data('owl.carousel');
                          owlData.settings.autoplay = false; //don't know if both are necessary
                          owlData.options.autoplay = false;
                          owl.trigger('refresh.owl.carousel');
                        }
                      }
                  });
                  */

                  // end animtion

            });    
        }        
        ResOwlSlider();    


        // Responsive OWL    
        function SynOwlSlider() {
            $(".wrap-syn-owl").each(function () {
                var $this = $(this);
                var sync1 = $this.find(".syn-slider-1");
                var sync2 = $this.find(".syn-slider-2");
                var syncedSecondary = true;
                  sync1.on('changed.owl.carousel', syncPosition);
                  sync2.on('initialized.owl.carousel', function () {
                      sync2.find(".owl-item").eq(0).addClass("current");
                    }).on('changed.owl.carousel', syncPosition2);
                  function syncPosition(el) {
                    var count = el.item.count-1;
                    var current = Math.round(el.item.index - (el.item.count/2) - .5);
                    
                    if(current < 0) {
                      current = count;
                    }
                    if(current > count) {
                      current = 0;
                    }
                    //end block
                    sync2
                      .find(".owl-item")
                      .removeClass("current")
                      .eq(current)
                      .addClass("current");
                    var onscreen = sync2.find('.owl-item.active').length - 1;
                    var start = sync2.find('.owl-item.active').first().index();
                    var end = sync2.find('.owl-item.active').last().index();
                    
                    if (current > end) {
                      sync2.data('owl.carousel').to(current, 100, true);
                    }
                    if (current < start) {
                      sync2.data('owl.carousel').to(current - onscreen, 100, true);
                    }
                  }
                  
                  function syncPosition2(el) {
                    if(syncedSecondary) {
                      var number = el.item.index;
                      sync1.data('owl.carousel').to(number, 100, true);
                    }
                  }
                  sync2.on("click", ".owl-item", function(e){
                    e.preventDefault();
                    var number = $(this).index();
                    sync1.data('owl.carousel').to(number, 300, true);
                  });
            });    
        }        
        $(window).bind("load", function() {
           SynOwlSlider();    
        });

        //   var owl = $('.custom1').owlCarousel({
        //     animateOut: 'slideOutDown',
        //     animateIn: 'flipInX',
        //     items:3,
        //     margin:30,
        //     stagePadding:30,
        //     smartSpeed:450,
           
        // });

          
    });
})(jQuery); 