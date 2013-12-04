function slider() {
        
    function animate_slider(){
        //Fade in and out the images
        $('.slider #'+shown).animate({opacity:0},2000);
        $('.slider #'+next_slide).animate({opacity:1.0},2000);
        
        //Fade in and out the image captions
        $('.slider .caption .content').html($('.slider .slider-img#'+shown).attr('alt')).animate({opacity: 0}, 0);
        $('.slider .caption .content').html($('.slider .slider-img#'+next_slide).attr('alt')).animate({opacity: 0.7}, 2500);
        
        shown = next_slide;
    }

    function choose_next() {
        next_slide = (shown == sc)? 1:shown+1;
        animate_slider();
    }

    $('.slider #1').css({opacity:1}); //show 1st image
    var shown = 1;
    var next_slide;
    
    //Set the caption background and text to semi-transparent
    $('.slider .caption').css({opacity: 0.7});
    
    //Animating the first caption
    $('.slider .caption .content').html($('.slider .slider-img#1').attr('alt')).css({opacity: 0.7});
    
    var sc = $('.slider .slider-img').length; // total images
    var iv = setInterval(choose_next,6000);
    $('.slider_nav').hover(function(){
        clearInterval(iv); // stop animation
    }, function() {
        iv = setInterval(choose_next,6000); // resume animation
    });
    $('.slider_nav img').click(function(e){
        var n = e.target.getAttribute('name');
        if (n=='prev') {
            next_slide = (shown == 1)? sc:shown-1;
        } else if(n=='next') {
            next_slide = (shown == sc)? 1:shown+1;
        } else {
            return;
        }
        animate_slider();
    });
}

window.onload = slider;