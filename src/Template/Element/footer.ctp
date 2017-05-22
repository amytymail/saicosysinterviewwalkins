<footer class="footer">
      <div class="footer__block">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <h4>Client zone</h4>
              <ul>
				<li><?= $this->Html->link('Login or Register', ['prefix' => 'admin', 'controller' => 'Users', 'action' => 'login']);?></li>
				<li><?= $this->Html->link('Dashboard', ['prefix' => 'admin', 'controller' => 'Dashboard', 'action' => 'index']);?></li>
				<li><?= $this->Html->link('Applicants', ['prefix' => 'admin', 'controller' => 'Dashboard', 'action' => 'addPost']);?></li>
				<li><?= $this->Html->link('Post a new job', ['prefix' => 'admin', 'controller' => 'Dashboard', 'action' => 'addPost']);?></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6">
              <h4>Let's be Friends</h4>
              <p class="social"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
            </div>
            <div class="col-md-4 col-sm-12">
              <h4>News and Updates</h4>
              <p>Sign up to get weekly portion of fresh jobs and news from us.</p>
              <form class="footer__newsletter">
                <div class="input-group">
                  <input type="text" placeholder="Enter your email address" class="form-control"><span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2017 Interview Walkins</p>
            </div>
<!--            <div class="col-md-6">
              <p class="credit pull-right">Theme by <a href="https://ondrejsvestka.cz/">Ondrej Svestka</a></p>
            </div>-->
          </div>
        </div>
      </div>
    </footer>
<!--    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="margin-bottom">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">red</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="violet">violet</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><?= $this->Html->image('template-mac.png', ['alt'=> '', 'class' => 'img-responsive'])?></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>-->
    <!-- Javascript files-->
    <?php
        $this->Html->script([
            'jquery.min.js',
            'bootstrap.min.js',
            'jquery.cookie.js',
            'owl.carousel.min.js',
            'front.js'
        ]);
    ?>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>