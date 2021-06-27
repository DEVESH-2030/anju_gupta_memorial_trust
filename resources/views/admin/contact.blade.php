<?php include('header-inner.php'); ?>

<main id="main">

    
<!--==========================
      Contact Section
    ============================-->
<section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Please contact us if you have any questions about the Anju Gupta Memorial Trust. We look forward to hearing from you!</p>
        </div>

        <div class="row contact-info justify-content-center">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>246, 2nd Floor, Sukhdev Vihar, <br> New Delhi-110025. India    </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="javascript:void(0);">+91 9910012626</a></p>
    <!--  <p><a href="tel:+919891929399">+91 9891929399</a></p> -->
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
            <p><a href="mailto:anjuguptatrust@gmail.com">anjuguptatrust@gmail.com</a></p>
       <!--  <p><a href="contact@premjainmemorialtrust.com">contact@anjuguptamemorialtrust.com</a></p> -->
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
      <form action="mail_contact.php" method="post" id="contact-form" name="form1" class="contactForm"> 
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="" required />
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value="" required />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" value="" required />
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="" required />
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" value="" required ></textarea>
            </div>
            <div class="text-center"><button type="submit" name="button">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <?php include('footer.php'); ?>