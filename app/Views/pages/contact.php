<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Contact us</h2>
                            <p>Home<span>/<span>Contact us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section"  style="padding-top: 65px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="<?php echo base_url("contact_datails"); ?>" method="POST">
            <?php 
              // Display Response
              if(session()->has('message'))
              {
                ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                    <?= session()->getFlashdata('message') ?>
                    </div>
                <?php
              }
            ?>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text"  placeholder = 'Enter Subject'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">

                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder = 'Enter Message'></textarea>
                </div>
              </div>

            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Khardekar Stop, Ausa Road, Latur - 413512</h3>
              <p>Maharashtra, India</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+91 8237022009</h3>
              <!-- <p>Mon to Fri 9am to 6pm</p> -->
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>info@seoneacademy.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
            <div class="media contact-info">
              <div class="media-body" style="padding-left: 15%;">
                <div class="social_icon">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100077529884971" style="padding-right: 5%;color: #000;"> <i class="ti-facebook"></i> </a>
                    <a target="_blank" href="https://www.instagram.com/seoneacademy/" style="padding-right: 5%;color: #000;"> <i class="ti-instagram"></i> </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCAESqcun45mA7cGbh2BU7Yg" style="padding-right: 5%;color: #000;"> <i class="ti-youtube"></i> </a>
                    <a target="_blank" href="https://twitter.com/Seoneacademy" style="padding-right: 5%;color: #000;"> <i class="ti-twitter-alt"></i> </a>
                 </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="feature_part" style="padding-bottom: 65px;">
        <div class="container">
           <div class="row">
                <div class="col-sm-6 col-xl-5">
                    <div class="single_feature"style="background-color: #fff;border-radius: 30px;">
                        <div class="single_feature_part" style="border-radius: 30px;" >
                            <h4><u style="color:#000;">Weekday Batch</u></h4>
                            <p style="color:#262626;">4 Days in a week(Mon - Thu)</p>
                            <h4><u style="color:#000;">Time</u></h4>
                            <p style="color:#262626;">08:00 PM - Onwords - Live Class</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-2">
                    <div class="single_feature"style="background-color: #fff;border-radius: 30px;">
                        <div class="single_feature_part" style="border-radius: 30px;" >
                            <img src="<?php echo base_url(); ?>/public/assets/img/Home/batch.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-5">
                    <div class="single_feature" style="background-color: #fff;border-radius: 30px;">
                        <div class="single_feature_part single_feature_part_2" style="border-radius: 30px;" >
                            <h4><u style="color:#000;">Weekend Batch</u></h4>
                            <p style="color:#262626;">Saturday - Sunday</p>
                            <h4><u style="color:#000;">Time</u></h4>
                            <p style="color:#262626;">02:00 PM - Onwords - Live Class</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- ================ contact section end ================= -->
