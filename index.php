<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include 'Includes/functions/functions.php';
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";
	


    //Getting website settings

    $stmt_web_settings = $con->prepare("SELECT * FROM website_settings");
    $stmt_web_settings->execute();
    $web_settings = $stmt_web_settings->fetchAll();

    $restaurant_name = "";
    $restaurant_email = "";
    $restaurant_address = "";
    $restaurant_phonenumber = "";

    foreach ($web_settings as $option)
    {
        if($option['option_name'] == 'restaurant_name')
        {
            $restaurant_name = $option['option_value'];
        }

        elseif($option['option_name'] == 'restaurant_email')
        {
            $restaurant_email = $option['option_value'];
        }

        elseif($option['option_name'] == 'restaurant_phonenumber')
        {
            $restaurant_phonenumber = $option['option_value'];
        }
        elseif($option['option_name'] == 'restaurant_address')
        {
            $restaurant_address = $option['option_value'];
        }
    }

?>

	<!-- HOME SECTION -->

	<section class="home-section" id="home">
		<div class="container">
			<div class="row" style="flex-wrap: nowrap;">
				<div class="col-md-6 home-left-section">
					<div style="padding: 100px 0px; color: white;">
						<h1>
							Family Restaurant.
						</h1>
						<h2>
							MAKING PEOPLE HAPPY
						</h2>
						<hr>
						<p>
							Indian Food With Cherry Tomatoes and Green Basil  
						</p>
						<div style="display: flex;">
							<a href="order_food.php" target="_blank" class="bttn_style_1" style="margin-right: 10px; display: flex;justify-content: center;align-items: center;">
								Order Now
								<i class="fas fa-angle-right"></i>
							</a>
							<a href="menu.php" class="bttn_style_2" style="display: flex;justify-content: center;align-items: center;">
								VIEW MENU
								<i class="fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- OUR QUALITIES SECTION -->

	<section class="our_qualities" style="padding:100px 0px;">
	 <div class="container">
	       <div class="row">
				<div class="col-md-4">
					<div class="our_qualities_column">
	                    <img src="Design/images/quality_food_img.png" >
	                    <div class="caption">
	                        <h3>
	                            Quality Foods
	                        </h3>
	                        <p>
							A good restaurant sets a high standard for its food quality and ensures that guests receive the same quality with every meal. Serving quality food can earn your restaurant a good reputation and compel your guests to return for repeat visits. High-quality ingredients and an experienced cook are important to serving good food consistently. A good cook understands your guests' needs and works well with the kitchen staff to ensure that guests receive their meal the way they ordered it every time.
	                        </p>
	                    </div>
	                </div>
				</div>
				<div class="col-md-4">
					<div class="our_qualities_column">
	                    <img src="Design/images/fast_delivery_img.png" >
	                    <div class="caption">
	                        <h3>
	                            Quality Foods
	                        </h3>
	                        <p>
							A good restaurant sets a high standard for its food quality and ensures that guests receive the same quality with every meal. Serving quality food can earn your restaurant a good reputation and compel your guests to return for repeat visits. High-quality ingredients and an experienced cook are important to serving good food consistently. A good cook understands your guests' needs and works well with the kitchen staff to ensure that guests receive their meal the way they ordered it every time.
	                        </p>
	                    </div>
	                </div>
				</div>
				<div class="col-md-4">
					<div class="our_qualities_column">
	                    <img src="Design/images/original_taste_img.png" >
	                    <div class="caption">
	                        <h3>
	                            Quality Foods
	                        </h3>
	                        <p>
							A good restaurant sets a high standard for its food quality and ensures that guests receive the same quality with every meal. Serving quality food can earn your restaurant a good reputation and compel your guests to return for repeat visits. High-quality ingredients and an experienced cook are important to serving good food consistently. A good cook understands your guests' needs and works well with the kitchen staff to ensure that guests receive their meal the way they ordered it every time.
	                        </p>
	                    </div>
	                </div>
				</div>

			</div>
		</div>
	</section>

	<!-- OUR MENUS SECTION -->

	
	<!-- IMAGE GALLERY -->

	<section class="section-team">
		<div class="container">
			<!-- Start Header Section -->
			<div class="row justify-content-center text-center">
			<h2 class="">Family Restaurent Team</h2>
				<div class="col-md-8 col-lg-6">
					<div class="header-section">
						<h3 class="small-title">Our Experts</h3>
						<h2 class="title">Let's meet with our team members</h2>
					</div>
				</div>
			</div>
			<!-- / End Header Section -->
			<div class="row">
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/G2CBWvb/person1.jpg" alt="">
							
						</div>
						<div class="person-info">
							<h3 class="full-name">John Doe</h3>
							<span class="speciality">Web Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/nbpNr4r/person2.jpg" alt="">
							
						</div>
						<div class="person-info">
							<h3 class="full-name">Robert Smith</h3>
							<span class="speciality">WordPress Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/25zdRMr/person3.jpg" alt="">
							
						</div>
						<div class="person-info">
							<h3 class="full-name">John Doe</h3>
							<span class="speciality">Angular Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/w0ynr2Q/person4.jpg" alt="">
							<!-- <span class="icon">
								<i class="fab fa-js"></i>
							</span> -->
						</div>
						<div class="person-info">
							<h3 class="full-name">John Smith</h3>
							<span class="speciality">Javascript Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
			</div>
		</div>
	</section>

	

	<!-- OUR QUALITIES SECTION -->
	
	<section class="our_qualities_v2">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="padding: 10px;">
					<div class="quality quality_1">
						<div class="text_inside_quality">
							<h5>Quality Foods</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="padding: 10px;">
					<div class="quality quality_2">
						<div class="text_inside_quality">
							<h5>Fastest Delivery</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="padding: 10px;">
					<div class="quality quality_3">
						<div class="text_inside_quality">
							<h5>Original Recipes</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- WIDGET SECTION / FOOTER -->

    <section class="widget_section" style="background-color: #222227;padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <img src="Design/images/restaurant-logo1.png" alt="Restaurant Logo" style="width: 170px;margin-top: -135px;">
                        <p>
                            Our Restaurnt is one of the bests, provide tasty Menus and Dishes. You can reserve a table or Order food.
                        </p>
                        <ul class="widget_social">
                            <li><a href="https://www.facebook.com" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="https://www.twitter.com" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                            <li><a href="https://www.linkedin.com" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Headquarters</h3>
                        <p>
						10/11 Road No. 3, Bhuiyadih, Agrico, East Singhbhum, Jharkhand - 831009
                        </p>
                        <p>
						swatikannaujiya82@gmail.com
                            <br>
                            7654266906
                        </p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Opening Hours
                        </h3>
                        <ul class="opening_time">
                            <li>Monday - Friday 10:00am - 8:00pm</li>
                            <li>Saturday - Sunday - Closed</li>
                            
                        </ul>
						
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="logic/subscribe.php" method="POST" id="form1" class="subscribe_form" novalidate="true">
					     		<input type="name" name="name" id="subs-name" class="form_input" placeholder="Your Name" required>
                                <input type="email" name="email" id="subs-email" class="form_input" placeholder="Email Address" required>
                                <button type="submit" name="submit" class="submit" id="submitAlert">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER BOTTOM  -->

    <?php include "Includes/templates/footer.php"; ?>

    <script type="text/javascript">

	    $(document).ready(function()
	    {
	        $('#contact_send').click(function()
	        {
	            var contact_name = $('#contact_name').val();
	            var contact_email = $('#contact_email').val();
	            var contact_subject = $('#contact_subject').val();
	            var contact_message = $('#contact_message').val();

	            var flag = 0;

	            if($.trim(contact_name) == "")
	            {
	            	$('#invalid-name').text('This is a required field!');
	            	flag = 1;
	            }
	            else
	            {
	            	if(contact_name.length < 5)
	            	{
	            		$('#invalid-name').text('Length is less than 5 letters!');
	            		flag = 1;
	            	}
	            }

	            if(!ValidateEmail(contact_email))
	            {
	            	$('#invalid-email').text('Invalid e-mail!');
	            	flag = 1;
	            }

	            if($.trim(contact_subject) == "")
	            {
	            	$('#invalid-subject').text('This is a required field!');
	            	flag = 1;
	            }

	            if($.trim(contact_message) == "")
	            {
	            	$('#invalid-message').text('This is a required field!');
	            	flag = 1;
	            }

	            if(flag == 0)
	            {
	            	$('#sending_load').show();

		            $.ajax({
		                url: "Includes/php-files-ajax/contact.php",
		                type: "POST",
		                data:{contact_name:contact_name, contact_email:contact_email, contact_subject:contact_subject, contact_message:contact_message},
		                success: function (data) 
		                {
		                	$('#contact_status_message').html(data);
		                },
		                beforeSend: function()
		                {
					        $('#sending_load').show();
					    },
					    complete: function()
					    {
					        $('#sending_load').hide();
					    },
		                error: function(xhr, status, error) 
		                {
		                    alert("Internal ERROR has occured, please, try later!");
		                }
		            });
	            }
	            
	        });
			$("#submitAlert").on('click', function()
			{
               alert("Thanks for subscribed");
            });
	    }); 
	    
	</script>