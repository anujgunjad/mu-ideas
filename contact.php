<?php include 'includes/mainHeader.php' ?>


<!-- Header Start -->
<div class="container-fluid bg-primary mb-5" data-aos="zoom-out">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white" data-aos="fade-up">Contact Us</h3>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container" style="margin-top: 50px;" data-aos="fade-up">
        <div class="text-center pb-2" data-aos="fade-up">
            <p class="section-title px-5"><span class="px-2">Get In Touch</span></p>
            <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-5" data-aos="fade-up">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4 btn-community" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 mb-5" data-aos="fade-up">
                <div class="d-flex">
                    <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary rounded-circle" style="min-width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>Address</h5>
                        <p>MU Ideas Foundation</p>
                        <p>Green Technology Building
                            Vidyanagari Campus,University of Mumbai
                            Santacruz East, Mumbai 400 098</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary rounded-circle" style="min-width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>Email</h5>
                        <p>incubation@mu.ac.in</p>
                    </div>
                </div>
                <!-- <div class="d-flex">
                    <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary rounded-circle" style="min-width: 45px; height: 45px;"></i>
                    <div class="pl-3">
                        <h5>Phone</h5>
                        <p>+012 345 67890</p>
                    </div>
                </div> -->
                <!-- <div class="d-flex">
                    <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary rounded-circle" style="min-width: 45px; height: 45px;"></i>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php include 'includes/mainFooter.php' ?>