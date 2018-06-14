<?php require_once "header.php"?>

    <section id="content">
      <div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div>

      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Get in touch with us by filling contact form below</h4>

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="span4 form-group field">
                  <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <input type="text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme btn-medium margintop10" type="submit">Send a message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <address>
                  <strong>Head Office & Workshop</strong><br>
                  Jl. Blimbing VI No. 6, Pondok Chandra Indah Sidoarjo 61256 <br>
                  <i class="icon-phone"></i> (031) 9968 1464 / (031) 9968 1464 <br><br>
                  <strong>Branch Office </strong> <br>
                  Jl. W. Monginsidi Perum Jatikusuma No. 9, Pedurungan Tengah Semarang 50192 <br>
                  Jl. Timor No. 92 Makassar 90174  <br>
                  <i class="icon-phone"></i> (0411) 365 2676 <br><br>
                  <strong>Workshop</strong><br>
                  Jl. Ry Lengkong No. 2 Km. 9, Trowulan, Mojokerto <br>
                  Jl. Kertarajasa No. 54, Singosari, Malang. <br>
                </address>
                <p>
                  <i class="icon-envelope-alt"></i> pt.warak@gmail.com
                </p>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

<?php require_once "footer.php"?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>