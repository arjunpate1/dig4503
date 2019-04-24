var unsplashSearch = {
    APIkey: 'ebffa201a7d10119ea7b232582d312671b379691e32538daa3484790e959eda7',
    query: '',
    quantity: 20, // MAX of 30
    page: 1,
    status: false,
    success: false
};

var unsplashOutput = {
    height: 400,
    width: 400,
    list: undefined,
    image: undefined,
    url: undefined,
    urlFinal: undefined,
    totalLoaded: 0,
    outputArray: []
}

function searchUnsplash() {
    
    // AJAX Call To Unsplash API
    $.getJSON('https://api.unsplash.com/search/photos?query=' + unsplashSearch.query + '&page=' + unsplashSearch.page + '&per_page=' + unsplashSearch.quantity + '&client_id=' + unsplashSearch.APIkey, function(data) {
        
        // Log Data object to console
        console.log(data);
        
        // Store data object in a variable
        unsplashOutput.list = data.results; 
        
        
    }).done(function(){ // After Ajax call completes
        
        // Check to soo if results are empty
        if (unsplashOutput.list.length == 0) {
            
            unsplashSearch.success = false;
            
            displayUnsplashResults();
            
        }
        
        else {
            unsplashSearch.success = true;
        }
        
        // Loop through results
        $.each(unsplashOutput.list, function(i, val) {

            unsplashOutput.image = val;
            unsplashOutput.url = val.urls.full;

            unsplashOutput.url = unsplashOutput.url.replace(/\?.*$/g,"");
            console.log("The url is: " + unsplashOutput.url);
            
            unsplashOutput.urlFinal = unsplashOutput.url + '?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=crop&w=' + unsplashOutput.width + '&h=' + unsplashOutput.height + '&ixid=eyJhcHBfaWQiOjY0Mzc4fQ';
                
            unsplashOutput.outputArray[i] = '<div class="result-image"><a class="result-image-open" href="' + unsplashOutput.url + '"><i class="material-icons">open_in_new</i></a><a class="result-image-save" href="' + unsplashOutput.url + '"><i class="material-icons">check</i></a><img src="' + unsplashOutput.urlFinal + '"></div>';
                
            $('<img>').on('load', displayUnsplashResults).attr('src', unsplashOutput.urlFinal);
                
            unsplashSearch.status = true;
            
            console.log(unsplashOutput.outputArray[i]);
        
        });
        
    });
}

function displayUnsplashResults() {
    
    unsplashOutput.totalLoaded++;
    
    if (unsplashOutput.totalLoaded == unsplashOutput.list.length) {
        
        
        // FADE OUT LOADER
        $( "#loading" ).fadeOut(500);
        $( "#searchfailed" ).fadeOut(500);
        
        // Empty Parent Div
        setTimeout(function(){
            $( ".grid" ).empty();
            $( ".load-place" ).empty();
        }, 500);
        
        // DISPLAY RESULTS ON PAGE
        setTimeout(function(){
            
            for(var i = 0; i < unsplashOutput.outputArray.length; i++) {
                
                $(unsplashOutput.outputArray[i]).hide().appendTo(".grid").fadeIn(700);
                
            }
            
            // Reset Counter
            unsplashOutput.totalLoaded = 0;
            unsplashOutput.newSearchDelay = 1000;
            interactWithResults();
            
        }, 700);
        
    }
    
    else if (!unsplashSearch.success) {
        // FADE OUT LOADER
        $( "#loading" ).fadeOut(500);
        
        // Empty Parent Div
        setTimeout(function(){
            
            $( ".grid" ).empty();
            $( ".load-place" ).empty();
            var appendError = "<h2 id='searchfailed'>No Results Found</h2>";
            $(appendError).hide().appendTo(".load-place").fadeIn(500);
            
        }, 500); 
        
        
    }
    
}

