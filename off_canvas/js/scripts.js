$(document).ready(function(){
    
	$('.menu2_open').click(function() {
        
        console.log(1, 'asdf');
        
		$('.menu').addClass('menu_opened');
		setTimeout(function() {
			$('.menu a.mn1').addClass('mn');
		}, 200);
		setTimeout(function() {
			$('.menu a.mn2').addClass('mn');
		}, 250);
		setTimeout(function() {
			$('.menu a.mn3').addClass('mn');
		}, 300);
		setTimeout(function() {
			$('.menu a.mn4').addClass('mn');
		}, 350);
	});
    
	$('.menu2_close, .menu a').click(function() {
		$('.menu a').removeClass('mn');
		$('.menu').removeClass('menu_opened');
	});
    
    
    
    
    
});//ready










(function(){
    
    
    $(document).ready(function(){


        //off_canvas
        $('#menu_button').click(function() {
            var $this = $(this);

            if ($this.hasClass('opened') ) {
                menu_close();
            } else {
                menu_open();
            }
        });


    });//ready
    
    function menu_open1(){
        //if(document.getElementById('off_canvas').style.marginLeft=="0px")
        if(document.getElementById('off_canvas').style.marginLeft=="0px")
        {
            menu_close();
        }
        else
        {
         //$("#off_canvas").css('margin-left','0px');
         $("#off_canvas").removeClass('opened');
         //$("#menu_button").css('margin','25px 0px 0px 280px');
         $("#menu_button").addClass('opened');
         $("#menu_button").css('transform','rotate(180deg)');	 

         $("#top_stick").addClass('stick_x_top');
         $("#center_stick").addClass('stick_x_center');
         $("#bottom_stick").addClass('stick_x_bottom');

         $("#menu_title").addClass('menu_title_x');
        }
    }



    function menu_open(){


        //$("#off_canvas").css('margin-left','0px');
        $("#off_canvas").addClass('opened');
        //$("#menu_button").css('margin','25px 0px 0px 280px');
        //$("#menu_button").css('transform','rotate(180deg)');	 
        $("#menu_button").addClass('opened');

    //	$("#top_stick").addClass('stick_x_top');
    //	$("#center_stick").addClass('stick_x_center');
    //	$("#bottom_stick").addClass('stick_x_bottom');

        $("#menu_title").addClass('menu_title_x');

        $(".off_canvas2").removeClass('opened');
    }
    function menu_close()
    {
        //$("#off_canvas").css('margin-left','-300px');
        $("#off_canvas").removeClass('opened');
        //$("#menu_button").css('margin','25px 0px 0px 45px');
        //$("#menu_button").css('transform','rotate(-180deg)');
        $("#menu_button").removeClass('opened');

        $("#top_stick").removeClass('stick_x_top');
        $("#center_stick").removeClass('stick_x_center');
        $("#bottom_stick").removeClass('stick_x_bottom');

        $("#menu_title").removeClass('menu_title_x');

        $(".off_canvas2").addClass('opened');
    }
    
    
}());