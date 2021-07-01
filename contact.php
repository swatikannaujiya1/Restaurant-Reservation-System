<?php
include"Includes/templates/header.php";
include"Includes/templates/navbar.php";

?>


<section class="contact-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>
                            Get in touch with us & 
                            <br>send us message today!
                        </h2>
                     <p>
                            FAMILY RESTAURANT
                       </p>
                        <h3>
                           10/11 Road No. 3, Bhuiyadih, Agrico, East Singhbhum, Jharkhand - 831009
                        </h3>
                        <h4>
                            <span>Email:</span> 
							swatikannaujiya82@gmail.com
                            <br> 
                            <span>Phone:</span> 
                            <?php echo "7654266906" ?>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                <form action="logic/contactlogic.php" method="POST" id="form1"> 
                    <div class="contact-form">
                        <div id="contact_ajax_form" class="contactForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name" required>
                                    <div class="invalid-feedback" id="invalid-name" style="display: block">
                                    	
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email" required>
                                    <div class="invalid-feedback" id="invalid-email" style="display: block">
                                    	
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject" required>
                                    <div class="invalid-feedback" id="invalid-subject" style="display: block">
                                    	
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" class="form-control message" placeholder="Message"></textarea>
                                    <div class="invalid-feedback" id="invalid-message" style="display: block">
                                    	
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="contact_send" class="bttn_style_2" name="submit" id="submitAlert">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function()
    {
        $("#submitAlert").on('click', function()
			{
               alert("Thanks for subscribed");
            });
    });
    </script>
<?php
include"Includes/templates/footer.php";
?>

