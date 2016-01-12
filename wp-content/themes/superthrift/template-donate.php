<?php
/*
Template Name: How to Donate Template
*/
?>
<?php get_header(); ?>

<div id="content-body" class="hero">
  <div id="primary" class="content-area single-page page-testimonial">
    <main id="main" class="site-main" role="main">
      <div id="section-header">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h1 class="text-center">Give Big. Donate!</h1>
              <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-novel" /></p>
              <p class="text-center fs-18">Your donation to SuperThrift does more than a little good. It completely transforms lives of students in Teen Challenge recovery programs.</p>
            </div>
          </div>
        </div>
      </div>
      <section id="section-donate">
        <div class="container">
          <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center text-white">Ready to give? Here's how.</h2>
          </div>
            <div class="col-sm-4 col-sm-offset-1">
              <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-shop" /></p>
              <h4 class="text-center text-white">Donate To A Local SuperThrift</h4>
              <p class="text-center text-white">Donate your items by dropping them at a local SuperThrift store or dropbox location. To donate larger items, please contact your local store or <a href="<?php echo site_url() ?>/request-a-pickup">click here</a> to submit an online form.</p>
              <p class="text-center"><a href="<?php echo site_url(); ?>/find-a-store" class="btn btn-danger btn-3d">Find a store!</a></p>
            </div>
            <div class="col-sm-4 col-sm-offset-2">
              <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-donate" /></p>
              <h4 class="text-center text-white">Donate To A Local Teen Challenge</h4>
              <p class="text-center text-white">Skip right to the finish line. Make a cash donation and change lives at your local Teen Challenge. Every dollar counts in addiction recovery. Donate today.</p>
              <p class="text-center"><a href="http://teenchallenge.cc/donate" target="_blank" class="btn btn-danger btn-donate btn-3d">Donate!</a></p>
            </div>
            <div class="col-sm-1"></div>
          </div>
        </div>
      </section>
    </main><!-- #main -->
  </div><!-- #primary -->
</div>

<div id="page-cover">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
      <div id="donate-navigate">
        <div class="navigate-header">
            <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-east-direction" /></svg></p>
            <h2 class="text-center text-white">You are being redirected</h2>
          </div>
          <div class="navigate-body">
            <p>Thank you for donating to your local Teen Challenge! You are being redirected to the Teen Challenge website to complete your donation via a secure online donation form.</p>
            <a href="#" target="_blank" id="confirm-redirect" class="btn btn-danger btn-3d">Let's go!</a><a href="#" id="cancel-redirect" class="btn btn-default btn-3d">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
