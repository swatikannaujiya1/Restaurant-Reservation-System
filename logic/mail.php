<style>
 body {
  font-size: 16px;
  color: #fff;
  background-color: #61122f;
  font-family: 'Oxygen', sans-serif;
}

/** HEADER **/
#header-nav {
  background-color: #f6b319;
  border-radius: 0;
  border: 0;
}

#logo-img {
  background: url('https://usmile581.github.io/Bistro_Restaurant/images/restaurant-logo_large.png') no-repeat;
  width: 150px;
  height: 150px;
  margin: 10px 15px 10px 0;
}

.navbar-brand {
  padding-top: 25px;
}

.navbar-brand h1 { /* Restaurant name */
  font-family: 'Lora', serif;
  color: #557c3e;
  font-size: 1.5em;
  text-transform: uppercase;
  font-weight: bold;
  text-shadow: 1px 1px 1px #222;
  margin-top: 0;
  margin-bottom: 0;
  line-height: .75;
}
.navbar-brand a:hover, .navbar-brand a:focus {
  text-decoration: none;
}
.navbar-brand p { /* Kosher cert */
  color: #000;
  text-transform: uppercase;
  font-size: .7em;
  margin-top: 15px;
}
.navbar-brand p span { /* Star-K */
  vertical-align: middle;
}

#nav-list {
  margin-top: 10px;
}
#nav-list a {
  color: #951C49;
  text-align: center;
}
#nav-list a:hover {
  background: #E7E7E7;
}
#nav-list a span {
  font-size: 1.8em;
}

#phone {
  margin-top: 5px;
}
#phone a { /* Phone number */
  text-align: right;
  padding-bottom: 0;
}
#phone div { /* We Deliver */
  color: #557c3e;
  text-align: right;
  padding-right: 15px;
}

.navbar-header button.navbar-toggle, .navbar-header .icon-bar {
  border: 1px solid #61122f;
}
.navbar-header button.navbar-toggle {
  clear: both;
  margin-top: -30px;
}
/* END HEADER */
/* FOOTER */
/* overwrite bootstrap */
.panel-footer {
  margin-top: 30px;
  padding-top: 35px;
  padding-bottom: 30px;
  background-color: #222;
  border-top: 0;
}
.panel-footer div.row {
  margin-bottom: 35px;
}
#hours, #address {
  line-height: 2;
}
#hours > span, #address > span {
  font-size: 1.3em; /*"Hours", "Address" are bigger */
}
#address p {
  color: #557c3e; /*green*/
  font-size: .8em;
  line-height: 1.8;
}
#testimonials {
  font-style: italic;
}
#testimonials p:nth-child(2) {
  margin-top: 25px;
}
/* END FOOTER */


/* HOME PAGE */
.container .jumbotron {
  box-shadow: 0 0 50px #3F0C1F;
  border: 2px solid #3F0C1F;
}

#menu-tile, #specials-tile, #map-tile {
  height: 250px;
  width: 100%;
  margin-bottom: 15px;
  position: relative;
  border: 2px solid #3F0C1F;
  overflow: hidden; /* for map: to not stick out */
}
#menu-tile:hover, #specials-tile:hover, #map-tile:hover {
  box-shadow: 0 1px 5px 1px #cccccc;
}

#menu-tile {
  background: url('https://usmile581.github.io/Bistro_Restaurant/images/menu-tile.jpg') no-repeat;
  background-position: center;
}
#specials-tile {
  background: url('https://usmile581.github.io/Bistro_Restaurant/images/specials-tile.jpg') no-repeat;
  background-position: center;
}

#menu-tile span, #specials-tile span, #map-tile span {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  text-align: center;
  font-size: 1.6em;
  text-transform: uppercase;
  background-color: #000;
  color: #fff;
  opacity: .8; 
}


@media (min-width: 1200px) {
  .container .jumbotron {
    background: url('https://usmile581.github.io/Bistro_Restaurant/images/jumbotron_1200.jpg') no-repeat;
    height: 675px;
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  #logo-img {
    background: url('https://usmile581.github.io/Bistro_Restaurant/images/restaurant-logo_medium.png') no-repeat;
    width: 100px;
    height: 100px;
    margin: 5px 5px 5px 0;
  }
  .container .jumbotron {
    background: url('https://usmile581.github.io/Bistro_Restaurant/images/jumbotron_992.jpg') no-repeat;
    height: 558px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* Home Page */
  .container .jumbotron {
    background: url('https://usmile581.github.io/Bistro_Restaurant/images/jumbotron_768.jpg') no-repeat;
    height: 432px;
  }

}

@media (max-width: 767px) {
  /* Header */
  .navbar-brand {
    padding-top: 10px;
    height: 80px;
  }
  .navbar-brand h1 { 
    padding-top: 10px;
    font-size: 5vw; 
  }
  .navbar-brand p { 
    font-size: .6em;
    margin-top: 12px;
  }
  .navbar-brand p img { 
    height: 20px;
  }

  #collapsable-nav a { 
    font-size: 1.2em;
  }
  #collapsable-nav a span {
    font-size: 1em; 
    margin-right: 5px;
  }

  #xs-deliver {
    margin-top: 5px;
    font-size: .7em;
    letter-spacing: .1em;
    text-transform: uppercase;
  }
  /* End Header */
  /* Footer */
  .panel-footer section {
    margin-bottom: 30px; /*increase*/
    text-align: center;
  }
  .panel-footer section:nth-child(3) {
    margin-bottom: 0; /* margin already exists on the whole row */
  }
  .panel-footer section hr {
    width: 50%;
  }
  /* End Footer */

  /* Home Page */
  .container .jumbotron {
    margin-top: 30px;
    padding: 0;
  }

  #menu-tile, #specials-tile {
    width: 360px;
    margin: 0 auto 15px;
  }

}


@media (max-width: 479px) {
  .navbar-brand h1 {
    padding-top: 5px;
    font-size: 6vw; /* make it a little bit bigger */
  }
  
  #menu-tile, #specials-tile {
    width: 280px;
    margin: 0 auto 15px;
  }
}
  </style>
</style>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
            $mail = new PHPMailer(true);

            try {
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;        
                  //Enable verbose debug output
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.mailtrap.io';                     
                $mail->SMTPAuth   = true;                                  
                $mail->Username   = '99040fbfb13eec';                     
                $mail->Password   = '7d6110281cc6ea';                             
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                $mail->Port       = 465;                             
                $mail->setFrom('swatikannaujiya1@gmail.com', 'Mailer');
                $mail->addAddress('swatikannaujiya82@gmail.com', 'Joe User');     
                $mail->addAddress('swatikannaujiya82@gmail.com');              
                $mail->addReplyTo('swatikannaujiya82@gmail.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');
                $mail->isHTML(true);                                
                $mail->Subject = 'Thanks for Subscribed';
                $mail->Body    = ' <div id="main-content" class="container">
                                       <h2 style="text-align: center;">Family Restaurant</h2>
                                       <div class="jumbotron">
                                       <img src="https://usmile581.github.io/Bistro_Restaurant/images/jumbotron_768.jpg" alt="Picture of restaurant" class="img-responsive visible-xs">
                                    </div>
                  
                            <div id="home-tiles" class="row">
                               <div class="col-md-4 col-sm-6 col-xs-12">
                                 <a href="menu-categories.html"><div id="menu-tile"><span>menu</span></div></a>
                               </div>
                           <div class="col-md-4 col-sm-6 col-xs-12">
                       <a href="single-category.html"><div id="specials-tile"><span>specials</span></div></a>
                     </div>
                     <div class="col-md-4 col-sm-12 col-xs-12">
                       <a href="https://www.google.com/maps/place/La+Petite+Academy+of+Ballwin,+MO/@38.5754084,-90.5596239,17z/data=!3m1!4b1!4m5!3m4!1s0x87d8d42ef66f2903:0x535e4fff21ebf232!8m2!3d38.5754084!4d-90.5574406" target="_blank">
                         <div id="map-tile">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.1927732981785!2d-90.55962392028465!3d38.57540837972139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8d42ef66f2903%3A0x535e4fff21ebf232!2sLa+Petite+Academy+of+Ballwin%2C+MO!5e0!3m2!1sen!2sus!4v1485468189512" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                           <span>map</span>
                         </div>
                       </a>
                     </div>
                    </div>
                 </div>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

?>
 <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
  
  