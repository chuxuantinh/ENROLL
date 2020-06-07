(function($){
    $(document).ready(function(){

        myJson = vnJson;
        function checkSelect(id,value,active){
            slug = value.slug;
            name = value.name2;
            if(slug == active){
                $(id).append('<option value="'+slug+'" selected="selected"  >'+name+'</option>');
            }else{
                $(id).append('<option value="'+slug+'"   >'+name+'</option>');
            }            
        }

        // load Tinh
        id = $("#your_fields_tinh");
        active = $(id).attr('data-active');      
        $(id).html('<option value="000">-Chọn Tỉnh/Thành-</option>');
        $.each(myJson.country, function (index, value) {
            checkSelect(id,value,active);
        });

        // load Quan
        for(var i = 0; i < myJson.country.length; i++)
        {
          if(myJson.country[i].slug == $("#your_fields_tinh").val())
          {
            
            id = $("#your_fields_quan");
            active = $(id).attr('data-active');         
            $(id).html('<option value="000">-Chọn Quận/Huyện-</option>'); 

            $.each(myJson.country[i].qh, function (index, value) {
                checkSelect(id,value,active);                    
            });
          }
        }

        // load Quan
        for(var i = 0; i < myJson.country.length; i++)
        {
            for(var j = 0; j < myJson.country[i].qh.length; j++) {
                if(myJson.country[i].qh[j].slug == $("#your_fields_quan").val())
                {
                    id = $("#your_fields_phuong");
                    active = $(id).attr('data-active');         
                    $(id).html('<option value="000">-Chọn Quận/Huyện-</option>'); 
                    $.each(myJson.country[i].qh[j].px, function (index, value) {
                        checkSelect(id,value,active);   
                    });
                }
            }
        }

        // Change Tinh
        $('#your_fields_tinh').on('change', function(){
            $('#your_fields_phuong').html('<option value="000">-Chọn Phường/Xã-</option>');    
            if($(this).val() == '000') {
                $('#your_fields_quan').html('<option value="000">-Chọn Phường/Xã-</option>');       
            }else{
                for(var i = 0; i < myJson.country.length; i++)
                {
                  if(myJson.country[i].slug == $(this).val())
                  {
                     $('#your_fields_quan').html('<option value="000">-Chọn Quận/Huyện-</option>');
                     $.each(myJson.country[i].qh, function (index, value) {
                        $("#your_fields_quan").append('<option value="'+value.slug+'">'+value.name2+'</option>');
                    });
                  }
                }
            }
            // $('[id*="your_fields_quan"] span.select2-chosen').html('Chọn Quận/Huyện');
            // $('[id*="your_fields_phuong"] span.select2-chosen').html('Chọn Phường/Xã');            
        });

        // Change Quan
        $('#your_fields_quan').on('change', function(){
            if($(this).val() == '000') {
                $('#your_fields_phuong').html('<option value="000">-Chọn Phường/Xã-</option>');     
            }else{
              for(var i = 0; i < myJson.country.length; i++)
                {
                    for(var j = 0; j < myJson.country[i].qh.length; j++) {
                        if(myJson.country[i].qh[j].slug == $(this).val())
                        {
                           $('#your_fields_phuong').html('<option value="000">-Chọn Phường/Xã-</option>');
                           $.each(myJson.country[i].qh[j].px, function (index, value) {
                              $("#your_fields_phuong").append('<option value="'+value.slug+'">'+value.name2+'</option>');
                            });
                        }
                    }
                }               
            }
            //$('[id*="your_fields_phuong"] span.select2-chosen').html('Chọn Phường/Xã');    
        });


        //Select 2     
        $(".select2-single").select2( { 
            theme: "bootstrap",
            placeholder: "Select a State",
            maximumSelectionSize: 6,
            containerCssClass: ':all:'
        } );
    }); 

})(jQuery); 