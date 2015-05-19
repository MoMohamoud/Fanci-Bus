<?php get_header(); ?>

<div class="wrapper">
	<div class="row">
      <div class="info">
      <h1>Test</h1>
<p id="userdemo">Get User Location Demo:</p>
            <button onclick="getuserLocation()"> Test Location</button>
            <div id="mapholder"></div>
            <script>
                var x=document.getElementById("userdemo");
                function getuserLocation(){
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showuserPosition,showbrowserError);
                    }
                    else{
                        x.innerHTML="Geolocation is not supported by this browser.";
                    }
                }

                function showuserPosition(position) {
                    var latlon=position.coords.latitude+","+position.coords.longitude;
                    var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
                    +latlon+"&zoom=14&size=400x300&sensor=false";
                    document.getElementById("mapholder").innerHTML="<img src='"+img_url+"'>";
                }

                function showbrowserError(error){
                    switch(error.code)
                    {
                        case error.PERMISSION_DENIED:
                        x.innerHTML="User denied the request for Geolocation."
                        break;
                        case error.POSITION_UNAVAILABLE:
                        x.innerHTML="Location information is unavailable."
                        break;
                        case error.TIMEOUT:
                        x.innerHTML="The request to get user location timed out."
                        break;
                        case error.UNKNOWN_ERROR:
                        x.innerHTML="An unknown error occurred."
                        break;
                    }
                }
            </script>
            </script>

         </div>
         </div>
         </div>
            
<?php get_footer(); ?>