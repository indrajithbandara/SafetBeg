<?php include("includes/head.php"); ?>
<?php include("includes/preloader.php"); ?>
<?php include("includes/main_menu.php"); ?>
<?php include("includes/mobile.php"); ?>
<?php include("includes/header.php"); ?>

  <section class="mastwrap">

 <section class="innerwrap">

<section class="inner-page-wrap">


<div class="container-fluid">
    <div class="row">
        <article class="col-md-4 fullheight sidestamp contact-bg img-bg">
            <div class="valign">
                <h6 class="font4black color">@</h6>
                <h2 class="font4black black"><span class="font4bold white">safetbeg2@gmail.com</span></h2>
            </div>
        </article>
        <article class="col-md-8 common-content fullheight white-bg">
            <div class="valign">



          <div class="contact-item">
            <div class="alert alert-error error white-bg" id="fname">
              <p class="dark">Please enter your name.</p>
            </div>
            <div class="alert alert-error  error white-bg" id="fmail">
              <p class="dark">Please provide a valid email.</p>
            </div>
             <div class="alert alert-error  error white-bg" id="fmsg">
               <p class="dark">Please enter your message.</p>
             </div>
              <form name="myform" id="contactForm" action="sendcontact.php" enctype="multipart/form-data" method="post">
                <article>
                  <input type="text" placeholder="Your Name" id="name" name="name" size="100" class="border-form dark">
                </article>
                <article>
                   <input type="text" placeholder="Valid email ID" name="email" id="email" size="30" class="border-form dark">
                 </article>
                 <article>
                  <textarea placeholder="Your Message" name="message" cols="40" rows="5" id="msg" class="border-form dark"></textarea>
                  <div class="btn-wrap  text-left">
                    <button class="btn btn-logic btn-logic-dark" id="submit" name="submit" type="submit">Send Message</button>
                  </div>
                </article>
             </form>
          </div>


            </div>
        </article>
    </div>
</div>


<div class="container-fluid about-bg">
    <div class="row">
        <article class="col-md-4 fullheight sidestamp white-bg">
            <div class="valign">
                <h6 class="font4thin dark"><span class="thumb-icon ion-ios-location-outline color"></span></h6>
                <h4 class="font4light dark contact-address">SafetBeg, <br/>Gandijeva, Sarajevo, BA<br/><br/>Phone: +387.062.123.123</h4>
            </div>
        </article>
        <article class="col-md-8 color-bg fullheight no-pad">

            <section class="map-wrap">
                    <div id="map" class="fullwidth fullheight"></div>
            </section>

        </article>
    </div>
</div>

</section>

 </section>

  <?php include("includes/footer.php"); ?>


  </section>

  <script src="javascripts/custom/form-validation.js" ></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1zOBJmyHVLOxY91W3c1M1Mr4hjDayLm4&callback=initMap"></script>

<script type="text/javascript">
            //This is my Google maps API key: AIzaSyB1zOBJmyHVLOxY91W3c1M1Mr4hjDayLm4
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(43.829098, 18.357394), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#005dff"},{"lightness":0}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#005dff"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#0044E6"},{"lightness":1}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"color":"#005dff"},{"lightness":20}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#005dff"},{"lightness":25}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#005dff"},{"lightness":25}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#005dff"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"saturation":0},{"color":"#ffffff"},{"lightness":0}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#005dff"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#005dff"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#005dff"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>

</body>
</html>
