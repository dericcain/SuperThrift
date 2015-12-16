<?php 
get_header(); ?>
<main>
<section id="section-map">
  
  <div id="map-overlay">
    <div id="map-intro-background"></div>
    <div id="map-intro">
      <div id="map-intro-outer">
      <div id="map-intro-inner">
        <h1><?php
        $intro_title = get_theme_mod('intro_title');
        if (!empty($intro_title)) {
          echo $intro_title;
        } else {
        	echo 'Change a Life. Shop With Us!';
        }
        ?></h1>
        <p class="text-center">
          <button type="button" class="btn" id="map-intro-btn">Let's go!</button>
        </p>
        
          

        <div id="intro-arrow" class="text-center">
        <p>Enter your address below to find a store or dropbox nearby!</p>
        <svg class="animated pulse infinite icon-svg icon-long-arrow-down"><use xlink:href="#win10-long-arrow-down" /></svg></div>
      </div>
    </div>
    </div>
    <div id="map-search">
      <div class="text-center container">
        <form id="map-search-form">
          <h2 class="text-white">Find a Store or Dropbox</h2>
          <div id="map-search-group">
          <div class="input-group">
            <input type="text" id="map-search-input" class="form-control" placeholder="Enter address here...">



            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit" id="map-search-btn">Search <i class="fa fa-search"></i></button>
            </span>
          </div>
          <div id="map-not-found" class="text-left text-white"><small>Address not found</small></div>
          <div id="map-no-location" class="text-left text-white"><small>I apologize but we do not have a store or dropbox within 25 miles of you at this time</small></div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div id="map-legend"></div>
    
  <div id="map"></div>
  <?php 
  echo '<script>';
  echo 'gmapStoreData = '. json_encode(get_map_data_stores()) . ';';
  echo 'gmapDropboxData = '. json_encode(get_map_data_dropboxes()) . ';';
  echo '</script>';
  ?>
</section>


<section id="section-about" class="wide-img-showcase">

    <div class="row margin-0 wide-img-showcase-row">
        <div class="col-md-6 no-padding img col-half-background">

        </div>
        <div class="col-md-6 col-md-offset-6">
            <div class="no-padding-inner gray">

                <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-novel" /></svg></p>
                <h2 class="text-center">What We Are Doing</h2>
                <div class="row">
                  <div class="col-sm-12">
                    <p class="text-center">What if shopping changed lives? When you shop at SuperThrift, your every purchase makes a lifetime of difference for someone recovering from a life-controlling addiction.</p>
                    
                    <p class="text-center">Our chain of thrift stores across the southeast region of the United States provides quality goods to raise support for teens and adults enrolled in Teen Challenge - a non-profit specializing in the recovery and prevention of life-controlling issues. That means when you buy or donate, someone in need benefits!</p>

                    <p class="text-center"><strong>Shopping never felt so good.</strong></p>

                    <p class="text-center">
                    	<a href="<?php echo site_url(); ?>/why-superthrift" class="btn-3d btn btn-primary">Learn More</a>
                  	</p>
                  </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="section-goals">
  <div class="container">
    <h2 class="text-center text-white">Our Commitment</h2>
    <p class="text-center">We are committed to making your shopping experience a catalyst for change where it matters – in the lives of people, families, and communities across the globe suffering from the debilitating effects of addiction. There are three ways we do this:
    </p>
  
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-donate" /></svg></p>
        <h3 class="text-center">Raise Funds</h3>
        <p class="text-center">We give 100% of proceeds from store sales to Teen Challenge rehabilitation programs.</p>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-courses" /></svg></p>
        <h3 class="text-center">Provide Job Training</h3>
        <p class="text-center">We equip Teen Challenge students with the skills necessary to find a job and succeed in the workplace.</p>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-good-quality" /></svg></p>
        <h3 class="text-center">Deliver Quality Goods</h3>
        <p class="text-center">We provide customers with quality goods at a very affordable cost.</p>
      </div>
    </div>
    
    <p class="text-center">
      <a href="<?php echo site_url() ?>/find-a-store" class="btn btn-lg btn-danger btn-3d">Find a store!</a>
    </p>
  </div>        
</section>

<section id="section-testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center">Great Experiences. Great Stories.</h2>
        <p class="text-center fs-18">We have helped thousands of SuperThrift staff and Teen Challenge students. Hear their stories.</p>
        <div class="testi-slide">
          <ul class="slides">
          
            <?php 
              
              $testimonials = get_posts('post_type=testimonial&numberposts=6&orderby=rand');
              
              $testimoniesPageUrl = get_permalink( get_page_by_path( 'testimonies' ) );
              foreach ( $testimonials as $testimonial ) : 
               
                  $metas = get_post_meta( $testimonial->ID );
                  
                  $name = isset($metas['testimonial_name'][0]) ? $metas['testimonial_name'][0] : '';
                  $info = isset($metas['testimonial_sub'][0]) ? $metas['testimonial_sub'][0] : '';
                  $theContent = $testimonial->post_content;
                  $link = $testimonial->guid;
                  $excerpt = isset($metas['excerpt'][0]) ? $metas['excerpt'][0] : apply_filters('the_excerpt', $theContent);
                  $is_video = ($metas['is_video_testimony'][0]) ? true : false;

               ?>

                  <li>
                      <?php
                      if (has_post_thumbnail($testimonial->ID)) {
                          echo get_the_post_thumbnail( $testimonial->ID, 'identity' );
                      }
                      ?>
                      <h4 class="testi-author">
                      <?php echo $name; ?><small><?php echo $info; ?></small>
                      </h4>
                      <?php 
                      	$output =  '<p>' . $excerpt . '</p>';
                      	if($is_video) {
                      		$output .= '<a href="'. $link .'" class="btn btn-3d btn-sm btn-danger">Watch Video</a>';	
                      	} else {
                      		$output .= '<a href="'. $link .'" class="btn btn-3d btn-sm btn-danger">Read More</a>';
                      	}
                      	

                      	echo $output;
                      ?>
                              
                  </li>


              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</section>

<section id="section-pickup">
  <div class="container">
  
    <div class="row">
    
      <div class="col-md-6 col-left">
        <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-truck" /></svg></p>
        <h2 class="text-center text-white">Request Pickup for Donation</h2>
        <p class="text-center">We love to serve our customers! If you have an item that is too large to drop off at one of our drop-off locations, we can come pick it up. Please fill out the form below and we will coordinate a pick up as soon as we can.</p>
      </div>
      
      <div class="col-md-6 col-right">
      <div id="pickup-form">
      <?php
      $pickup_shortcode = get_theme_mod('pickup_shortcode');
      if (!empty($pickup_shortcode)) {
        echo do_shortcode($pickup_shortcode);
      }
      ?>
      </div>
      </div>
    </div>
    
    
  </div>
</section>

</main>

<?php 

wp_enqueue_script( 'flexslider' );
wp_enqueue_script( 'google-map-v3' );
wp_enqueue_script( 'gmaps' );
wp_enqueue_script( 'js-home' );
wp_enqueue_script( 'js-pickup' );
get_footer(); 

?>

