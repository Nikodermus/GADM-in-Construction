//How many time gets all your javascript to run, including plugin and external files
var start = new Date();
var startTime = start.getTime();

//Resizing
$(window).load(function () {
    $(window).resize(function () {
        var elem = $(this);
        var elemAncho = $(this).width();
        var elemAlto = $(this).height();
        
        //For all sizes
        $('.youtubeBox').css('height', elemAlto * 80 / 100);

        if (elemAncho <= 900) { //Mobile
            $('.mainFrame').css('height', elemAncho - 21);

        } else { //Desktop 
            $('.mainFrame').css('height', elemAncho - 21);
        }
    });
    $(window).resize();
});