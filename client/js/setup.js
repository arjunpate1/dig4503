var setupSlide = 1,
    setupValues = {
        birthday: undefined,
        location: undefined,
        
    };

function changeSetupSlide(direction) {
    
    console.log("current slide " + setupSlide);
    
    $(".setup__slide--" + setupSlide).fadeOut(500);
    
    if (direction) {
        
        setupSlide++;
        
    }
    
    else {
        
        setupSlide--;
        
    }
    
    
    setTimeout(function(){
        
        console.log("next slide " + setupSlide);
        
        $(".setup__slide--" + setupSlide).fadeIn(500);
        
        $(".setup__progress-bar--inner").css("width", "calc(" + (20 * setupSlide) + "%)");
        
    }, 500);
    
}


// Click Event Handlers
$(".setup__next").click(function(){
    
    changeSetupSlide(true);
    
});

$(".setup__back").click(function(){
    
    changeSetupSlide(false);
    
});

$(".setup__submit").click(function(){
    
    $(".setup").css("transform", "translateX(-100vw)");
    
});