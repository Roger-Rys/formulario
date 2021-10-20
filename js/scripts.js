$(document).ready(function(){
    
    //var root = window.location.href;
    
    var widthScreen = $(window).width();
    $(":root").css("--width",(widthScreen));

    var height = $(window).height();
    $(":root").css('--height', height);

    console.log("width: "+widthScreen+"\nheight: "+height);



        

       
   
});