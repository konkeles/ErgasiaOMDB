/*jslint browser: true*/
/*global $, jQuery*/


function omdbApi() {
    "use strict";
    var title, x, image, searchValue;
    
    title = document.getElementById("searchTitle").value;
    searchValue = title.replace(/ /g, "+");
   
    $.getJSON('http://www.omdbapi.com/?t=' + searchValue + '&apikey=5b0f2222', (response =>{
        /*console.log(response);*/
        image = response.Poster;
        if (image !== "N/A") {
            $('img').attr('src', image);
        }
    }));
  
    x = ('http://www.omdbapi.com/?t=' + searchValue + '&apikey=5b0f2222');
    document.getElementById("demo").innerHTML = x;
    
   
    
}