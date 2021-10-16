<?php include('header.php');?>
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Get In Touch</h2>
             
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="https://themewagon.com/theme_tag/free/" target="_blank" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">More Templates Here</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    
    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="row">
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-paper-airplane"></span> Email</span>
                    you_mail@gmail.com
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Phone</span>
                    +30 976 1382 9921
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span> Fax</span>
                    +30 976 1382 9922
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-location"></span> Address</span>
                    San Francisco, CA <br>
                    4th Floor8 Lower  <br>
                    San Francisco street, M1 50F
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6  probootstrap-animate">
            <form action="save_contact.php" method="post" class="probootstrap-form probootstrap-form-box mb60">
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname" class="sr-only sr-only-focusable">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname" class="sr-only sr-only-focusable">Last Name</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only sr-only-focusable">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only sr-only-focusable">Pesan</label>
                <textarea cols="30" rows="10" class="form-control" id="pesan" name="pesan" placeholder="Tulis Pesan Anda"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Kirim Pesan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Why we Love Places</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class="probootstrap-author">
                <a href="https://probootstrap.com/" target="_blank">
                  <img src="assets/images/person_1.jpg" alt="Free Template by ProBootstrap.com" class="rounded-circle">
                  <span class="probootstrap-name">James Smith</span>
                  <span class="probootstrap-title">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->
  
<?php include('footer.php');?>