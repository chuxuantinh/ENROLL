// JavaScript Document
(function($){
    $(document).ready(function(){
        var $window = $(window);


       
        function imgres() {  

            $(".entry-content img").each(function() {
               w = $(this).attr('width');
               h = $(this).attr('height');
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

          
        }
        imgres();

        // WOW ANIMATION
        /*-----------------------------------------------------------------*/

            // wow = new WOW({
            //     boxClass:     'wow',      // default
            //     animateClass: 'animated', // default
            //     offset:       0,          // default
            //     mobile:       true,       // default
            //     live:         true        // default
            // })
            new WOW().init();        

        // FIXED HEADER
        /*-----------------------------------------------------------------*/
            function header() {   
                hd = $('#header');

                if ($('#panel').length >0){ hPanel = $('#panel').height(); }else{ hPanel = 0; }

                if(hd.hasClass('fixe')){
                    hh = hd.height();
                    afterHeader = $('<div class="afterHeader"> ');
                    hd.after(afterHeader.height(hh));  
                    $(window).scroll(function() {
                        if ($(window).scrollTop() > hPanel) {
                            hd.addClass('sticky');
                        }
                        else{
                            hd.removeClass('sticky');
                        }

                        // if($(window).scrollTop() + $(window).height() > $(document).height() - $('#footer').outerHeight() ) {
                        //    console.log("near bottom!");
                        //     $('#header').removeClass('sticky');
                        //     $('#slider-fixed').addClass('hide');
                        // }
                        // else{
                        //     $('#slider-fixed').removeClass('hide');
                        // }
                    });

                    // $(window).scroll(function() {
                    //    if($(window).scrollTop() + $(window).height() > $(document).height() - $('#footer').outerHeight()) {
                    //       console.log("near bottom!");
                    //         $('#header').removeClass('sticky');
                    //    }
                    // });
                }
            }
           
             header();


        // TOGGLECLASS
        /*-----------------------------------------------------------------*/
            $(".toggleClass > .toggle").each(function () {
                $(this).click(function(){
                    $(this).parent().toggleClass('active');
                }); 
            }); 
            
        // TAB 
        /*-----------------------------------------------------------------*/
            function cttab() {   
                $("[class*='cttab'] .tab-menu > div").each(function () {
                    $(this).click(function () {
                        index = $(this).index();
                        menu = $(this).parent();
                        content = menu.parent().children('.tab-content');
                        menu.children().removeClass('active');
                        content.children().removeClass('active');
                        $(this).addClass('active');
                        content.children(':eq('+index+')').addClass('active');
                        content.children(':eq('+index+')').find('.imglazy').each(function(){
                            var src = $(this).attr('data-src');
                            $(this).attr('src', src);
                            $(this).removeClass('imglazy').addClass('imgloaded');
                        });                
                    });
                });   
            }
            cttab();

        // ACORDION 
        /*-----------------------------------------------------------------*/


        $('.box-collapse > .tab > .tab-title').each(function() {
            var btnInfo = $(this).click(function() {
                btnInfo.next().slideToggle(300);
                btnInfo.parent().toggleClass('show');
            });
        });
        $('.box-acordion > .tab > .tab-title').each(function(){
            $(this).click(function(){ 
                parent = $(this).parent();
                acordion = $(this).parent().parent();
                tab = acordion.children('.tab');
                if (parent.hasClass('show')) {
                    $(this).next().slideToggle(300);
                    parent.removeClass('show'); 
                } else {
                    //hide
                    acordion.children('.tab').children('.tab-content').slideUp(300);
                    tab.removeClass('show');
                    //show
                    $(this).next().slideDown(300);
                    parent.addClass('show');
                };
            });
        });        
        $('.box-acordion-slide > .tab > .tab-title').each(function(){
            $(this).click(function(){ 
                parent = $(this).parent();
                acordion = $(this).parent().parent();
                tab = acordion.children('.tab');
                if (parent.hasClass('show')) {
                    parent.removeClass('show'); 
                } else {
                    //hide
                    tab.removeClass('show');
                    //show
                    parent.addClass('show');
                };
            });
        });   




        // MENU MOBILE 
        /*-----------------------------------------------------------------*/
            // $('.menu-btn').click(function(){
            //     $('body').toggleClass('showMenu'); 
            // }); 

            // const $menu = $('.menu.main-menu');

            // $(document).mouseup(function (e) {
            //    if (!$menu.is(e.target) // if the target of the click isn't the container...
            //    && $menu.has(e.target).length === 0) // ... nor a descendant of the container
            //    {
            //      $('body').removeClass('showMenu');
            //     }
            //     else{
            //     }
            //  });

            $('.menu-btn').click(function(){
                if($('body').hasClass('showMenu')){
                    $('body').removeClass('showMenu');
                }else{
                    $('body').addClass('showMenu');
                    //$('.flexMenuToggle:first').click();
                return false;
                }
            }); 


            $('.menu-top-header li[class*="children"]').each(function(){
                $(this).children('ul').wrap('<div class="wrapul"></div>');
            })

            
            $('ul.menu-taxonomy ul').each(function(){
                $(this).parent().addClass('children');
            })


            
            wrapmb = $('.wrap-menu-mb');
            smb = wrapmb.data('style');
            wrapmb.find('li[class*="children"]').each(function(){
                var 
                p = $(this),
                idli = p.attr('id'),
                ul = p.children('ul');
                btn = $('<span>',{'class':'showsubmenu icon-arrow-2', text : '' });
                p.children('ul').children('li').children('ul').attr("data-parent",idli);
                //a.addClass('outactive').attr("data-parent",id);

                if(smb == 1){
                    btn.click(function(){
                    if(p.hasClass('parent-showsub')){
                        ul.slideUp(300,function(){
                            p.removeClass('parent-showsub');
                        });                           
                    }else{
                        ul.slideDown(300,function(){
                            p.addClass('parent-showsub');
                        });                           
                    }  
                    }); p.prepend(btn);
                }else if(smb == 2){
                    btn.click(function(){
                        p.toggleClass('activesubmenu');
                    }); p.prepend(btn);
                    var text = p.children('a').html();
                    var head = $('<div class="menu-head"><h3>'+text+'</h3><span class="back"><i class="icon-arrow-3"></i></span></div>');

                    ul.wrap('<div class="wrapul"></div>');

                    p.children('.wrapul').prepend(head);                    
                    $('.back').click(function(){
                        $(this).parent().parent().parent().removeClass('activesubmenu');
                    });  
                }else {
                    var text = p.children('a').html();
                    var head = $('<div class="menu-head"><h3>'+text+'</h3><span class="back"><i class="icon-arrow-3"></i></span></div>');

                    id = p.attr('id');

                    ulp = ul.data('parent');
                    ul.wrap('<div id="w-'+id+'" data-parent="w-'+ulp+'"  class="wrapul"></div>');
                    var wrap = p.children('.wrapul');
                    wrap.prepend(head);  
                    

                    wrapmb.append(wrap);

                    btn.click(function(){
                        id = $(this).parent().attr('id');
                        a = p.closest(".wrapul");
                        if (a.hasClass('outactive')){
                            a.removeClass('outactive').addClass('outactive2');
                        }else{
                            a.addClass('outactive');
                        }
                        wrapmb.children('#w-'+id+'').addClass('outactive');
                    }); p.prepend(btn);
                    
             
                    $('.back').click(function(){
                        pr = $(this).parent().parent();
                        id = pr.data('parent');
                        pr.removeClass('outactive');
                        a = wrapmb.children('#'+id+'');
                        if (id=='w-undefined'){
                            $('.wrapul.main').removeClass('outactive');
                        }else{
                            a.addClass('outactive').removeClass('outactive2');
                        }                        
                        
                    });  
                }   
            });    // append - prepend - after - before



        // MODAL 
        /*-----------------------------------------------------------------*/
            getVideoUrl = function(id){
                return 'https://www.youtube.com/embed/' + id + '?rel=0&autoplay=1';
            }
            closeVideoUrl = function(id){
                return 'https://www.youtube.com/embed/' + id + '?rel=0';
            }
            showModal = function(id){
                $('body').addClass('show-modal');
                $('div#'+id).addClass('active');        
            }   
            closeModal = function(){
                $('body').removeClass('show-modal');
                $('.divmodal').removeClass('active');
            }    
            showModalV = function(id,v){
                showModal(id);   
                $('div#'+id).find('iframe.yt').attr('src', getVideoUrl(v));
            }   
            closeModalV = function(){
                closeModal();
                $('div#'+id).find('iframe.yt').attr('src', closeVideoUrl(v));
            }    

            $('.btn-modal').click(function(){
                a = $(this);
                id = a.data('modal');
                v = a.data('video');
                if(v) showModalV(id,v);
                else  showModal(id);
            }); 
            $('.close-modal').click(function(){
                closeModalV();
            }); 


            // add theme
            $('.item-video-popup').each(function(){
                $(this).click(function(){
                    id = a.data('modal');
                    t = $(this).find('.title').html();   
                    $('div#'+id).find('.title').html(t);
                }); 
            });   

        // VIDEO
        /*-----------------------------------------------------------------*/
            function createVideo(p,vid,l){
                p.addClass('active');
                return new YT.Player(l.children().get(0), {
                    height: '900',
                    width: '1600',
                    videoId: vid,
                    playerVars: {
                        autoplay: 1,
                        controls: 1,
                        disablekb: 1,
                        hl: "ru-ru",
                        loop: 0,
                        modestbranding: 1,
                        showinfo: 0,
                        autohide: 0,
                        color: "white",
                        iv_load_policy: 3,
                        theme: "light",
                        mute: 0,
                        rel: 0
                    }                    
                });
            }
            function resv(l) {   
                var w = parseInt(l.width()),
                    h = parseInt(l.height()),
                    f = l.children('iframe'),
                    dw = f.attr("width"),
                    dh = f.attr("height");
                    if(w>h && (h/w<dh/dw)){
                        hf = (w*dh)/dw;
                        tf = -((hf - h)/2);
                        f.css({'width': "",'height': hf, 'top': tf, 'left': ""});
                    }else{
                        wf = (h*dw)/dh;
                        lf = -((wf - w)/2);
                        f.css({'width': wf,'height': "", 'top': "", 'left': lf});                    
                    }                        
            }  


            function resVideo() {    
                $(".wrapVideoBg").each(function () {
                    resv($(this));
                }); 
            }
            resVideo();
            $window.resize(function(){
                resVideo();
            });            



            if ( $(".single_item_video").length > 0) {
                var t = document.createElement("script");
                t.src = "https://www.youtube.com/iframe_api";
                var a = document.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(t, a);
                var players = [];            
                $(".single_item_video").each(function() {
                    var p = $(this),
                        b = p.children('.btnvideo'),
                        l = p.children('.video'),
                        o = l.attr("data-video");
                        b.click(function() {
                            for(var i=0; i < players.length; i++){
                                players[i].pauseVideo();
                            }
                            if(l.children('iframe').length > 0){
                            }else{
                                players.push(createVideo(p,o,l));
                                resv(l);
                            }    
                        });                             

                        $(window).resize(function(){
                            resv(l);
                        });   
                })
            }  






        // ; HEIGHT
        /*-----------------------------------------------------------------*/

            function followequal() {        
                $(".followHeight").each(function () {
                    var $this = $(this),
                        $equal2 = $this.find(".equal2").height();
                    $this.find(".equal1").height($equal2);
                    //$this.find(".equal1").css("min-height", $equal2);

                });

                $(".followHeightAfter").each(function () {
                    var $this = $(this),
                        $equal2 = $this.find(".equal2After").height();
                    $this.find(".equal1After").height($equal2);
                    //$this.find(".equal1").css("min-height", $equal2);
                    
                });    
            }        

            // equalHeight
            function equal() {
                $(".equalHeight").each(function () {
                    var $this = $(this),
                        $equal = $this.find(".equal");
                    var padding = $this.attr('data-padding');                    
                    if(!padding)   padding = 0 ;
                    if ($this.length > 0) {
                      $equal.imagesLoaded(function () {
                        equalHeight($equal, parseInt(padding));
                      });
                    }
                });    
            }        

            /* Equal Height good*/
            function equalHeight(className, padding) {
              var tempHeight = 0;
              $(className).each(function () {
                current = $(this).height();
                if (parseInt(tempHeight) < parseInt(current)) {
                  tempHeight = current;
                }
              });
              $(className).css("height", tempHeight + padding + "px");
            }



        // CLICK SCROLL
        /*-----------------------------------------------------------------*/
            // Click scroll a
            $(".scroll").on('click', function (event) {
              event.preventDefault();
              // $('html,body').animate({scrollTop: 0 }, 1000);

              var dataDest = $(this).data('dest');

              var top = $('#' + dataDest).offset().top + 50;
              $('html,body').animate({scrollTop: top }, 1000);


            });

             

            // Back-top
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').addClass('show');
                } else {
                    $('#back-top').removeClass('show');
                }
            });
            $('#back-top').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });






        // LAZYLOAD
        /*-----------------------------------------------------------------*/
            "use strict";
            var BJLL_options = BJLL_options || {},
                BJLL = {
                    _ticking: !1,
                    check: function() {
                        if (!BJLL._ticking) {
                            BJLL._ticking = !0, void 0 === BJLL.threshold && (void 0 !== BJLL_options.threshold ? BJLL.threshold = parseInt(BJLL_options.threshold) : BJLL.threshold = 200);
                            var e = document.documentElement.clientHeight || body.clientHeight,
                                t = !1,
                                n = document.getElementsByClassName("lazy-hidden");
                            [].forEach.call(n, function(n, a, i) {
                                var s = n.getBoundingClientRect();
                                e - s.top + BJLL.threshold > 0 && (BJLL.show(n), t = !0)
                            }), BJLL._ticking = !1, t && BJLL.check()
                        }
                    },
                    show: function(e) {
                        e.className = e.className.replace(/(?:^|\s)lazy-hidden(?!\S)/g, ""), e.addEventListener("load", function() {
                            e.className += " lazy-loaded", BJLL.customEvent(e, "lazyloaded");
                            followequal();  
                        }, !1);
                        var t = e.getAttribute("data-lazy-type");
                        if ("image" == t) null != e.getAttribute("data-lazy-srcset") && e.setAttribute("srcset", e.getAttribute("data-lazy-srcset")), null != e.getAttribute("data-lazy-sizes") && e.setAttribute("sizes", e.getAttribute("data-lazy-sizes")), e.setAttribute("src", e.getAttribute("data-lazy-src"));

                        else if ("bg" == t) {
                            var n = e.getAttribute("data-lazy-src");
                            e.style.backgroundImage = 'url(' + n + ')';
                            e.className += ' lazy-loaded';
                            followequal();  
                        }
                        else if ("iframe" == t) {
                            var n = e.getAttribute("data-lazy-src"),
                                a = document.createElement("div");
                            a.innerHTML = n;
                            var i = a.firstChild;
                            e.parentNode.replaceChild(i, e);
                            followequal();  
                        }
                    },
                    customEvent: function(e, t) {
                        var n;
                        document.createEvent ? (n = document.createEvent("HTMLEvents")).initEvent(t, !0, !0) : (n = document.createEventObject()).eventType = t, n.eventName = t, document.createEvent ? e.dispatchEvent(n) : e.fireEvent("on" + n.eventType, n)
                    }
                };
            window.addEventListener("load", BJLL.check, !1), window.addEventListener("scroll", BJLL.check, !1), window.addEventListener("resize", BJLL.check, !1), document.getElementsByTagName("body").item(0).addEventListener("post-load", BJLL.check, !1);


        // RESPONSIVE
        /*-----------------------------------------------------------------*/
        
        $window.bind("load", function() {
            equal();
            isRes = function(){return $window.width() > 767};
            // followequal();  
            if(isRes()){ followequal();} 
        });        

        isRes = function(){return $window.width() > 767};
        $window.resize(function(){
            if(isRes()){ followequal();}
            // followequal();
            equal(); 
        });

        /*-----------------------------------------------------------------*/
         // THEME
        /*-----------------------------------------------------------------*/

        // menu




        $(".select2-single").each(function(){
            var placeholder = $(this).data('placeholder');
              $(this).select2({
                theme: "bootstrap",
                placeholder: placeholder,
                maximumSelectionSize: 6,
                containerCssClass: ':all:'
            });
        });

        // scroll to section
        $(".main-menu a").on('click', function(event) {

            $(this).parent().addClass('current').siblings().removeClass('current');

            if (this.hash !== "") {
              event.preventDefault();

              var hash = this.hash;

              $('html, body').animate({
                scrollTop: $(hash).offset().top - 200
              }, 800, function(){

                window.location.hash = hash;
                $('body').removeClass('showMenu');
              });
            }
        });


        /*-----------------------------------------------------------------*/
        // Modal handlebar
       
        var members = "";
        var img = "", title = "";

        $('.btn[data-dismiss="modal"]').click(function(e){
            e.preventDefault();
            members = $(this).next()[0];
            img = $(this).data('src');
            title = $(this).data('title');
             $("#myModal").modal("show");
        });
       
   
        $("#myModal").on('show.bs.modal', function(){
            $('#modal-body .text').html($(members).html());
            $('#modal-body #img').attr('src',img);
            $('#modal-body .title').html(title);
        });



        var dh = 
        [   
            // [
            //     { text: "Nhóm ngành Du lịch", children: [
            //         { id: "QTKS", text: "Quản trị khách sạn" },
            //         { id: "DL", text: "Du lịch" },
            //         { id: "QTDLLH", text: "Quản trị dịch vụ du lịch và lữ hành" },
            //         { id: "QTNHDV", text: "Quản trị nhà hàng và dịch vụ ăn uống" }
            //     ] },
            //     { text: "Nhóm ngành Kinh tế", children: [
            //         { id: "QTKD", text: "Quản trị kinh doanh" },
            //         { id: "TCNH", text: "Tài chính ngân hàng" },
            //         { id: "KT", text: "Kế toán" },
            //         { id: "QHCC", text: "Quan hệ công chúng" }

            //     ] },
            //     { text: "Nhóm ngành Ngoại ngữ", children: [
            //         { id: "NNA", text: "Ngôn ngữ Anh" },
            //         { id: "DPH", text: "Đông phương học (Tiếng Hàn, Tiếng Nhật, Tiếng Trung)" }
            //     ] },
            //      { text: "Nhóm ngành Nghệ thuật", children: [
            //         { id: "DVDA", text: "Diễn viên kịch điện ảnh – truyền hình" },
            //         { id: "DD", text: "Đạo diễn" },
            //         { id: "TN", text: "Thanh nhạc" }
            //     ] },
            //      { text: "Nhóm ngành Mỹ thuật công nghiệp", children: [
            //         { id: "TKDH", text: "Thiết kế đồ họa" },
            //         { id: "TKTT", text: "Thiết kế thời trang" }
            //     ] }
            // ],
            [
                { text: "Nhóm ngành Du lịch", children: [
                    { id: "QLVH", text: "Quản lý văn hóa" },
                    { id: "HDDL-TC", text: "Hướng dẫn du lịch" },
                    { id: "QTLH", text: "Quản trị lữ hành" },
                    { id: "NVNHKS", text: "Nghiệp vụ nhà hàng, khách sạn" }
                ] },
                { text: "Nhóm ngành Kinh tế", children: [
                    { id: "TCNH", text: "Tài chính – Ngân hàng" },
                    { id: "TCDN", text: "Tài chính doanh nghiệp" },
                    { id: "TKVP", text: "Thư ký văn phòng" },
                    { id: "PHXBP", text: "Phát hành xuất bản phẩm" }

                ] },
                { text: "Nhóm ngành Nghệ thuật", children: [
                    { id: "TN-TC", text: "Thanh nhạc" },
                    { id: "DVKDA", text: "Diễn viên kịch – điện ảnh" }
                ] },
                 { text: "Nhóm ngành Mỹ thuật công nghiệp", children: [
                    { id: "TKTT-TC", text: "Thiết kế thời trang" }
                ] }
            ],
            [
                { text: "Nhóm ngành Du lịch", children: [
                    { id: "QTLH-CD", text: "Quản trị lữ hành" },
                    { id: "QTDLDVLH", text: "Quản trị dịch vụ du lịch và lữ hành" },
                    { id: "QTKS-CD", text: "Quản trị khách sạn" },
                    { id: "HDDL-CD", text: "Hướng dẫn du lịch" }
                ] },
                { text: "Nhóm ngành Kinh tế", children: [
                    { id: "QTKD-CD", text: "Quản trị kinh doanh" },
                    { id: "TCNH-CD", text: "Tài chính – Ngân hàng" },
                    { id: "KT", text: "Kế toán" },
                    { id: "KTDN", text: "Kế toán doanh nghiệp" },
                    { id: "TK", text: "Thư ký" },
                    { id: "TKVP-CD", text: "Thư ký văn phòng" },
                    { id: "PHXBP-CD", text: "Phát hành xuất bản phẩm" }
                ] },
                { text: "Nhóm ngành Ngoại ngữ", children: [
                    { id: "TN", text: "Tiếng Nhật" },
                    { id: "THQ", text: "Tiếng Hàn Quốc" },
                    { id: "TA", text: "Tiếng Anh" },
                    { id: "TTQ", text: "Tiếng Trung Quốc" }
                ] },
                { text: "Nhóm ngành Nghệ thuật", children: [
                    { id: "TN-TC", text: "Thanh nhạc" },
                    { id: "DVKDA", text: "Diễn viên kịch – điện ảnh" }
                ] },
                 { text: "Nhóm ngành Mỹ thuật công nghiệp", children: [
                    { id: "TKDH-CD", text: "Thiết kế đồ họa" },
                    { id: "TKTT-CD", text: "Thiết kế thời trang" },
                    { id: "TKTT-CD", text: "May thời trang" }
                ] },
                 { text: "Nhóm Ngành Công nghệ thông tin", children: [
                    { id: "QTMMT", text: "Quản trị mạng máy tính" },
                    { id: "THUD", text: "Tin học ứng dụng" }
                ] }
            ]
            
        ];
      

        $('#selLevel').select2().on('change', function() {
            // var code = $(this).data('code');
            // $('#value').select2({ data:dh[$(this).val()] });

            // $('input[name="level"').val($(this).val());
            if($(this).select2('data')[0] != undefined){
                 $('input[name="level"]').val($(this).select2('data')[0].text);
          
                $('#selDep').empty();
                $('#selDep').select2({data:dh[$(this).val()]});
            }
           

        }).trigger('change');

        $('#selDep').select2().on('change', function() {
             // $('input[name="department"').val($(this).val());
            if($(this).select2('data')[0] != undefined){
                $('input[name="department"]').val($(this).select2('data')[0].text); 
            }

        });

        $('#form-register input[name="radioName"]').on('change', function() {
             $('input[name="gen"]').val($('input[name=radioName]:checked', '#form-register').val()); 
        });


        $('.article').readmore({
          speed: 100,
          collapsedHeight: 535,
          moreLink: '<a href="#" class="link">Xem thêm <i class="icon icon-chevron-down"></i></a>',
          lessLink: '<a href="#" class="link">Thu gọn  <i class="icon icon-chevron-up"></a>'

        });

        // var e=$("#form-register")[0];
        // $(e).mangosteen({alert:redirectToThankYou,key:"$2y$10$K0cWYd7Dptm60pY7hkzL/u4KOncoll2UC2rQBLHnIonlfFWdhQWmu"});


        // function redirectToThankYou(content, success) {
        //     console.log('success');
        // }


    }); 

})(jQuery); 


