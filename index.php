<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="indexx.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">  
    
    <style type ="text/css">
        * {
            font-family: "Montserrat", sans-serif;
            box-sizing: border-box;
        }
        
        
        
        button{
            background-color: #f70067;
            border:none;
            color:white;
            width:100px;
            margin-top:10px;
            margin-left:10px;
            height:50px;
        }
        
        
    </style>

  </head>
  <body style="margin-left: 0px; margin-right: 0px;margin-bottom: 0px;">

    <!-- NAV BAR -->
    <div class="nav" style="z-index:1000000;">
      <div class="logo">
        <img src="logo.png" alt="" style="width: 30px;">
        <h2>STRAY CARE</h3>
      </div>
      <div class="nav-links">
        <a onclick="onNav('home')" href="#" id="nav-home" class = "nav-main">Home</a>
        <a onclick="onNav('features')" id="nav-features" href="#features">Features</a>
        <a onclick="onNav('contact')" id="nav-contact" href="#contact">Contact us</a>
        <a onclick="onNav('about')" id="nav-about" href="#about">About us</a>

        <div class="nav-login-button" onclick="onLoginClick(event)">
            Login
        </div>
      </div>
    </div>


    

    <!-- UPPER PAGE -->
    <div class="landing-main">
        <div class="landing-texts">
            <div class="landing-title">
                <h2>
                    <span style="color: #f70067;">Upload</span> a pic of an injured animal
                </h2>
            </div>
            <div class="landing-subtitle">
                <h2>
                    and the nearby doctor will contact you
                </h2>
            </div>
            <div class="landing-button" onclick="onUploadClick()">
                + &nbsp &nbsp &nbsp Upload a pic
            </div>
        </div>

        <div class="landing-image">
          <!-- <img src="bg_image.png" alt=""> -->
        </div>
    </div>

    <a name="features">
      <div class="features-div" style="background-color: #003379; margin-top: 80px;padding-bottom: 20px;">
        <div class="features-title">
          Features
        </div>
        <div class="features">
          <div class="feature-1">
            <img src="free.png" alt="" height="70px" width="70px">
            <h3 style="margin: 0px; color: white; margin-top: 20px;">Completely free</h3>
            <h4 style="margin-top: 10px; color: rgb(185, 194, 255); text-align: center;">All of the service, completely free.</h4>
          </div>
          <div class="feature-2">
            <img src="fast.png" alt="" height="70px" width="70px">
            <h3 style="margin: 0px; color: white; margin-top: 20px;">Fast service</h3>
            <h4 style="margin-top: 10px; color: rgb(185, 194, 255); text-align: center;">Gauranteed doctor appointments<br> within 48 hours</h4>
          </div>
        </div>
      </div>
    </a>

    <a name="contact">
      <div class="features-div" style="background-color: #001738;padding-bottom: 20px;">
        <div class="features-title" style="margin-bottom: 0px;">
          Contact us
        </div>
        <h5 style="margin-top: 10px; color: rgb(185, 194, 255); text-align: center;">Have any suggestions ? Have any doubts?<br>We would love to hear from you <br><br><br>Feel free to contact us at straycare@gmail.com</h5>
        <div id="mapid"></div>
      </div>
    </a>
    
    <a name="about">
      <div class="features-div" style="background-color: #000f24;padding-bottom: 20px;">
        <div class="features-title" style="margin-bottom: 0px;">
          About us
        </div>
        <div class="features">
            <div style="display:flex;margin-top:20px; flex-direction:column; align-items:center; justify-content: center;">
            	<img src="av.png" width:"100px" height="100px" alt="Avatar" >
                <h4 style="color:white;margin-bottom:10px;"> Akash Khatkale</h4>
                <h5 style="color:white;margin-top:0px;"> IT engineer</h5>
            </div>
            <div class="feature-1" style="display:flex; flex-direction:column; align-items:center; justify-content: center;">
                
            	<img src="av.png" width:"100px" height="100px" alt="Avatar" >
                <h4 style="color:white;margin-bottom:10px;"> Aditya Prakash</h4>
                <h5 style="color:white;margin-top:0px;"> IT engineer</h5>
            </div>
            <div class="feature-1" style="display:flex; flex-direction:column; align-items:center; justify-content: center;">
            	<img src="av.png" width:"100px" height="100px" alt="Avatar" >
                <h4 style="color:white;margin-bottom:10px;"> Kiran Kumawat</h4>
                <h5 style="color:white;margin-top:0px;"> IT engineer</h5>
            </div>
            <div class="feature-1" style="display:flex; flex-direction:column; align-items:center; justify-content: center;">
            	<img src="av.png" width:"100px" height="100px" alt="Avatar" >
                <h4 style="color:white;margin-bottom:10px;"> Rohit Chaudhari</h4>
                <h5 style="color:white;margin-top:0px;"> IT engineer</h5>
            </div>
        </div>
        
        <div class="about-other">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6694342833935!2d73.1254814144276!3d18.990200987137236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1602920513708!5m2!1sen!2sin" class="google-map" height="400" frameborder="3" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div style="display:flex;margin-left:100px;align-items:center; flex-direction:column">
                <video id="video1" width="450px" >
                    <source src="movie.mp4" type="video/mp4">
                </video>
                  <div style="display:flex;">
                      <button  onclick="playPause()">Play/pause</button> 
                      <button  onclick="makeBig()">Big</button>
                      
                      <button onclick="makeNormal()">Normal</button>
                  </div>
                  
            </div>
        </div>
        
      </div>
    </a>



    <a name="footer">
      <div class="footer-div" style="padding-bottom: 40px;padding-top: 40px;background-color: #000916;">
        <div>
          <div class="logo">
            <img src="logo.png" alt="" style="width: 30px;">
            <h2>STRAY CARE</h3>
          </div>
          <div style="margin-top: 20px;justify-content: space-around;display: flex;">
            <img src="insta.png" alt="" onclick="window.location.href='https://instagram.com/pillaiscollege?igshid=137tejm02410l'" height="40px" width="40px">
            <img src="twit.png" onclick="window.location.href='https://twitter.com/pillaicollege?s=21'" height="40px" width="40px">
            <img src="fb.png" onclick="window.location.href='https://www.facebook.com/pillaicollege/'" height="40px" width="40px">
          </div>
        </div>
          
        <div style="margin-left: 150px; display: flex; flex-direction: column; align-items: flex-start;">
          <div style="display: flex;margin-top: 20px; align-items: center; justify-content: center;">
            <img src="phone.png" alt="" width="40px" height="40px">
            <h4 style="margin-left: 10px; color: white;">+9999999</h4>
          </div>
          <div style="display: flex; align-items: center; justify-content: center;">
            <img src="email.png" alt="" width="40px" height="40px">
            <h4 style="margin-left: 10px; color: white;">straycare@gmail.com</h4>
          </div>
        </div>
      
      </div>
    </a>

 


  </body>
  <script>
         // Creating map options
         var mapOptions = {
            center: [18.98912, 73.11976],
            zoom: 10
         }
         
         // Creating a map object
         var map = new L.map('mapid', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         map.addLayer(layer);

         var marker = L.marker([18.98936, 73.11926]).addTo(map);
         marker.bindPopup("<b>Panvel.").openPopup();
         
         var myVideo = document.getElementById("video1"); 
        function playPause() { 
          if (myVideo.paused) 
            myVideo.play(); 
          else 
            myVideo.pause(); 
        } 
        
        function makeBig() { 
            myVideo.width = 760; 
        } 
        
        function makeNormal() { 
            myVideo.width = 450; 
        } 
  </script>
  <script src="index.js"></script>

</html>
