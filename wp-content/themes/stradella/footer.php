<footer class="t-footer">

        <div class="container-lg">
          <div class="t-footer-top">
            <div class="container-lg">

              <div class="subscribe">
                <h4 class="subscribe-title">
                  Enter Your Email Address to receive <span>news and offers from us</span>
                </h4>  
                <form action="" class="subscribe">
                  <div class="form-inline">
                    <div class="form-group">
                      <input type="text" class="form-control input-subscribe">
                    </div>
                    <button type="submit" class="btn btn-subscribe">Subscribe</button>
                  </div>
                </form>
              </div>

            </div>
          </div><!-- /.t-footer-top -->
          <div class="t-footer-bottom">

              <div class="row">
                <div class="col-sm-3">
                  <div class="logo logo-footer">
                    <a href="index.html"><img src="<?php echo IMG; ?>/footer-logo.png" class="footer-logo" alt="footer logo"></a>
                  </div>
                </div>

                <div class="col-sm-3">
                  <ul class="list-block list-block-inverted">
                    <li>Stradella Hotel</li>
                    <li>Felix avenue, cainta, rizal</li>
                    <li>Philippines</li>
                    <li class="text-danger">+63 32.238.6592</li>
                  </ul>
                </div>

                <div class="col-sm-3">
                  <ul class="list-block list-block-inverted">
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Stradellahotel.com</a></li>
                  </ul>
                </div>

                <div class="col-sm-3">
                  <ul class="social social-inline">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fa fa-rss"></i></a></li>  
                  </ul>
                  <p>Design and develop by Philwebservices</p>
                </div>

              </div>><!-- /.row -->

          </div><!--/.t-footer-bottom -->
        </div><!--/.container-lg -->
      </footer>
      
      <?php wp_footer(); ?>

      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>
      
       <!-- Galllery Lightbox -->
        <script>
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
        </script>

        <script>
        blueimp.Gallery(
            document.getElementById('links').getElementsByTagName('a'),
            {
                container: '#blueimp-gallery-carousel',
                carousel: true
            }
        );
        </script>
    </body>
</html>
