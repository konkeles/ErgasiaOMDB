/*jslint browser: true*/
/*global $, jQuery*/


function omdbApi() {
    "use strict";
    var title, x, image, searchValue, movieId, res;
    
    title = document.getElementById("searchTitle").value;
    searchValue = title.replace(/ /g, "+");
   
    $.getJSON('http://www.omdbapi.com/?t=' + searchValue + '&apikey=5b0f2222', (response =>{
            image = response.Poster;
            res=response.Response;
            if (image !== "N/A") {
                $('img').attr('src', image);
                $('img').attr('widht', '170');
                $('img').attr('height', '250px');
            }
            if (res == "False") {
                $('img').attr('src', 'search.png');
            }
        })
    );
  
    x = ('http://www.omdbapi.com/?t=' + searchValue + '&apikey=5b0f2222');
    document.getElementById("demo").innerHTML = x;
    
       
}


function check() {
    var choice = document.getElementsByName("choose");
    var k = choice.length;
  
    for(i=0; i<k; i++) {
        if(choice[i].checked){
          /*  document.getElementById("searchTitle").value=""; */
            console.log(choice[i].value);
            if (choice[i].value == "like") {
                document.getElementById("poster").style.borderColor="#00b10f";
            }
            if (choice[i].value == "nah") {
                document.getElementById("poster").style.borderColor="#b10000";
            }
            
        }
    }
    
            
    
    
}


function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getpref.php?q="+str,true);
        xmlhttp.send();
    }
}
