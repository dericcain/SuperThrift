<?php
/*
Template Name: Find a store
*/
?>
<?php get_header(); ?>

    <div id="content-body" class="hero page-find-store">
      <div id="primary" class="content-area single-page">
          <main id="main" class="site-main" role="main">
            <div id="section-header">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <h1 class="text-center">Change a Life Today. Come Shop With Us!</h1>
                    <p class="text-center"><svg class="icon-svg"><use xlink:href="#color-shopping-cart-loaded" /></svg></p>
                    <p class="text-center">Find quality goods at the best prices at SuperThrift, and change lives with your every purchase! By shopping and donating, <strong>you put hope within reach of a Teen Challenge student.</strong></p>
                  </div>
                </div>
              </div>
            </div>
            <?php 
            $stores = get_map_data_stores();
            echo '<script>';
            echo 'gmapStoreData = '. json_encode($stores) . ';';
            echo 'gmapDropboxData = '. json_encode(get_map_data_dropboxes()) . ';';
            echo '</script>';
            
            ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div id="page-find-store">
                <div id="map-search">
                  <div class="text-center container">
                    <form id="map-search-form">
                      <h1 class="text-white">Find a Store or Dropbox</h1>
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

                <div id="map-legend"></div>
                <div id="map"></div>
                
                <?php 
                echo '<script>';
                echo 'gmapStoreData = '. json_encode(get_map_data_stores()) . ';';
                echo 'gmapDropboxData = '. json_encode(get_map_data_dropboxes()) . ';';
                echo '</script>';
                ?>
              </div>
            
             
            <div class="divide30"></div>
            <div id="find-store-content">
              <div class="container">
                <div class="text-center"><svg class="icon-svg"><use xlink:href="#color-search" /></svg></div>
                  <h2 class="text-center">Our stores</h2>
                  <div class="mini-container">
                    <p class="text-center fs-18">We have <span class="text-red"><?php echo count($stores); ?> stores</span>.</p>
                  </div>
                  
                  <div id="store-list">
                  
                  <?php

                    
                    $days = array(
                      'sunday',
                      'monday',
                      'tuesday',
                      'wednesday',
                      'thursday',
                      'friday',
                      'saturday',
                    );
                    
                    $date = new DateTime();
                    $currentDay = strtolower($date->format('l'));
                    
                    $index = 0;

                    foreach ($stores as $store):
                    
                    if ($index % 4 == 0) {
                      echo '<div class="row equalize-row">';
                    }

                    $bg = wp_get_attachment_url(get_post_thumbnail_id($store['id'], 'large'))
                  ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="store-wrapper">
                      <div class="store-thumbnail" style="background-image: url(<?php echo $bg; ?>);">
                      </div>
                      <div class="store-item ">
                        <div class="store-item-inner  equalize-col">
                          <h4><?php echo $store['name']; ?></h4>
                          
                          <?php
                            echo '<dl class="opening-hours dl-horizontal">';
                            foreach ($days as $day) {
                              $theClass = $currentDay == $day ? 'current-day' : '';
                              echo '<dt class="' . $theClass . '">' . ucfirst($day) . '</dt><dd>' . $store[$day] . '</dd>';
                            }
                            echo '</dl>';
                            
                            echo '<div class="store-line-sep"></div>';
                          
                            echo '<dl class="dl-address">';
                            echo '<dt><i class="fa fa-map-marker"></i>Address:</dt><dd>' . $store['address'] . '<br>' . $store['city'] . ', ' . $store['state'] . ' ' . $store['zip'] . '</dd>';
                            echo '<dt><i class="fa fa-phone"></i>Phone Number:</dt><dd>' . $store['phone'] . '</dd>';
                            echo '<dt><i class="fa fa-at"></i>Email Address:</dt><dd><a href="mailto:' . $store['email'] . '"><small class="small-email">' . $store['email'] . '</small></a></dd>';
                            echo '<dt class="text-center"><i class="fa fa-truck text-orange"></i>We deliver!</dt>';
                            echo '</dl>';
                            
                            
                          ?>

                        </div>
                        <?php echo '<div class="store-donate"><a href="' . $store['donate_link'] . '" class="btn btn-danger btn-3d btn-donate">Donate</a></div>'; ?>
                      </div>
                       <?php  ?> 
                    </div>
                    </div>
                  <?php
                  
                    ++$index;
                    
                    if ($index % 4 == 0 && $index > 0) {
                      echo '</div>';
                    }
                    
                    endforeach;
                    
                    echo '</div>'; // close first or last row
                  ?>
                  </div>
              </div>
              </article>
            </div>
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
                <h2 class="text-center text-white">You are being redirected...</h2>
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
    
<?php
wp_enqueue_style( 'flexslider' );
wp_enqueue_script( 'flexslider' );
wp_enqueue_script( 'google-map-v3' );
wp_enqueue_script( 'gmaps' );
wp_enqueue_script( 'js-find-store' );
get_footer();

?>
