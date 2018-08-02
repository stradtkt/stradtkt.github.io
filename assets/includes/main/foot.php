
<section class="footer-container" data-type="background" data-speed="3">
<div class=" text-white text-center">
  <div class="container u-space-2">
    <span class="h6 d-block d-lg-inline-block font-weight-light mb-lg-0">
      <span class="font-weight-bold">Complete Credit Repair Services</span> - If you are having trouble, we would love to help turn your life around!
    </span>
            <!-- Button trigger modal -->
        <button type="button" class="btn subscribe" data-toggle="modal" data-target="#exampleModalLong">
        Subscribe
    </button>
    <!-- Modal -->
  </div>
</div>
<div class="modal fade modal-style" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-inner-style" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">Subscribe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
          <p class="lead text-white">Send us your information and we will get back to you as soon as possible</p>
          <small>Your information will be secure and will not be public to anyone</small>
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="number" name="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea name="msg" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary btn-block subscribe-submit">
        </form>
        </div>          
      </div>
    </div>
  </div>
</div>
</section>


<!-- ========== FOOTER ========== -->
<footer id="subscribeModalAnchor" class="footer-style">
  <div class="container text-center u-space-2">
    <!-- Logo -->
    <a class="d-inline-block mb-4" href="#" aria-label="CCRS">
      <img src="assets/img/logo_new_2.png" alt="Logo" style="width: 40px;">
    </a>
    <!-- End Logo -->

    <!-- Copyright -->
    <p class="small text-white">&copy; Complete Credit Repair Services</p>
    <!-- End Copyright -->
    <div class="row">
        <div class="col-sm-6 offset-3">
            <ul class="nav">
                <li class="nav-item"><a href="privacy.php" class="nav-link text-center">Privacy Policy</a></li>
                <li class="nav-item"><a href="faq.php" class="nav-link text-center">FAQ</a></li>
                <li class="nav-item"><a href="ccrs-location.php" class="nav-link text-center">Our Location</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-3">
            <ul class="nav">
                <li class="nav-item"><a href="mailto:completecreditrepairservices@gmail.com" class="nav-link text-center">completecreditrepairservices@gmail.com</a></li>
                <li class="nav-item"><a href="tel:2482600" class="nav-link text-center"><i class="far fa-phone"></i> Call Us Here</a></li>
            </ul>
        </div>
    </div>
    
  </div>
</footer>
<!-- ========== END FOOTER ========== -->


  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="assets/theme/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/theme/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/theme/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/theme/assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/theme/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/theme/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/theme/assets/vendor/gmaps/gmaps.min.js"></script>
  <script src="assets/js/remodal/dist/remodal.min.js"></script>
  <script src="assets/js/my-remodal.js"></script>

  <!-- JS Front -->
  <script src="assets/theme/assets/js/hs.core.js"></script>
  <script src="assets/theme/assets/js/components/hs.validation.js"></script>
  <script src="assets/theme/assets/js/components/hs.fancybox.js"></script>
  <script src="assets/theme/assets/js/components/hs.go-to.js"></script>
  <script src="assets/theme/assets/vendor/typed.js/lib/typed.min.js"></script>
  <script src="assets/js/parallax.js"></script>
  <script>
      var map;
      function initMap() {
          var myLatLng = {lat: 39.176787, lng: -84.292260};
          var bygolly = {lat: 39.176498, lng:-84.286220}
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 10
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Complete Credit Repair Services'
        });
        var marker1 = new google.maps.Marker({
            position: bygolly,
            map: map,
            title: 'By Golly\'s'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWi3mIfX7sENvBCYlniuf80Emkq3iZyEQ&callback=initMap"
    async defer></script>
    <script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.home-block", {
            strings: ["simple", " more organized", "much easier"],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
  <script>
  $(document).on('ready', function () {
    // initialization of text animation (typing)
    var typed = new Typed(".u-text-animation.u-text-animation--typing.home", {
      strings: ["enjoy life again.", "breathe again.", "buy the things you want."],
      typeSpeed: 60,
      loop: true,
      backSpeed: 25,
      backDelay: 1500
    });
  });
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.testimonials", {
        strings: ["is true.", "is from actual customers we have helped.", "will be everything for you."],
        typeSpeed: 60,
        loop: true,
        backSpeed: 25,
        backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.services", {
            strings: ["is for you.", "to build your credit.", "to change your lives."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.plans", {
            strings: ["are the best in town.", "will be worth your money.", "have cheaper rates than competitors."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.contact", {
            strings: ["and we will get back to you quick.", "and we will show you the ways of credit repair.", "and we will tend to your every need."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.about", {
            strings: ["us, and what we offer.", "a growing business striving to be the best.", "our goals and how we plan to help you."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.blog", {
            strings: ["you can learn ways to build your credit.", "find the best ways to save your money.", "learn from other peoples stories."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
  <!-- JS Plugins Init. -->
  <script>

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
