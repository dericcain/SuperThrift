<?php
/**
 * The header for our theme.
 *
 * @package superthrift
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/img/favicon32x32.png'; ?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>

      
        <!--navigation -->
        <!-- Static navbar -->
        <header>
        <nav id="header" class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"></a></h2>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                            
                    $walker = new wp_bootstrap_navwalker();

                    wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'menu_id' => 'primary-menu',
                      'depth' => 2,
                      'container' => false,
                      'fallback_cb' => 'wp_page_menu',
                      'menu_class' => 'nav navbar-nav navbar-right',
                      'walker' => $walker)
                    );
                    
                    ?>
                </div>
            </div>
        </nav>
        </header>
        
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol viewBox="0 0 50 50" id="ios7-cancel" >
    <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 25 0 C 11.204726 0 0 11.204726 0 25 C 0 38.795274 11.204726 50 25 50 C 38.795274 50 50 38.795274 50 25 C 50 11.204726 38.795274 0 25 0 z M 25 2 C 37.714394 2 48 12.285606 48 25 C 48 37.714394 37.714394 48 25 48 C 12.285606 48 2 37.714394 2 25 C 2 12.285606 12.285606 2 25 2 z M 15.90625 14.96875 A 1.0001 1.0001 0 0 0 15.78125 15 A 1.0001 1.0001 0 0 0 15.28125 16.71875 L 23.5625 25 L 15.28125 33.28125 A 1.016466 1.016466 0 1 0 16.71875 34.71875 L 25 26.4375 L 33.28125 34.71875 A 1.016466 1.016466 0 1 0 34.71875 33.28125 L 26.4375 25 L 34.71875 16.71875 A 1.0001 1.0001 0 0 0 33.875 15 A 1.0001 1.0001 0 0 0 33.28125 15.28125 L 25 23.5625 L 16.71875 15.28125 A 1.0001 1.0001 0 0 0 15.90625 14.96875 z" color="#000" overflow="visible" enable-background="accumulate" font-family="Bitstream Vera Sans"></path>
</symbol><symbol viewBox="0 0 32 32" id="win10-long-arrow-down" >
    <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 15 4 L 15 24.0625 L 10.71875 19.78125 L 9.28125 21.1875 L 15.28125 27.1875 L 16 27.90625 L 16.71875 27.1875 L 22.71875 21.1875 L 21.28125 19.78125 L 17 24.0625 L 17 4 L 15 4 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
</symbol><symbol viewBox="0 0 24 24" id="android-shop" >
    <path d="M 1 0 L 1 2 L 22 2 L 22 0 L 1 0 z M 1 3 C 1 3 0 9.326 0 9.5 C 0 10.328 0.672 11 1.5 11 C 2.328 11 3 10.328 3 9.5 L 3 5 L 5.25 5 L 5.25 9.5 C 5.25 10.328 5.922 11 6.75 11 C 7.578 11 8.25 10.328 8.25 9.5 L 8.25 5 L 10.5 5 L 10.5 9.5 C 10.5 10.328 11.172 11 12 11 C 12.828 11 13.5 10.328 13.5 9.5 L 13.5 5 L 15.75 5 L 15.75 9.5 C 15.75 10.328 16.422 11 17.25 11 C 18.078 11 18.75 10.328 18.75 9.5 L 18.75 5 L 21 5 L 21 9.5 C 21 10.328 21.672 11 22.5 11 C 23.328 11 24 10.328 24 9.5 C 24 9.326 22 3 22 3 L 1 3 z M 4.125 10.5 C 3.613 11.423 2.628 12.0625 1.5 12.0625 C 1.329 12.0625 1.163 12.028 1 12 L 1 24 L 14 24 L 14 14 L 20 14 L 20 24 L 23 24 L 23 12 C 22.837 12.028 22.671 12.0625 22.5 12.0625 C 21.372 12.0625 20.388 11.422 19.875 10.5 C 19.363 11.422 18.378 12.0625 17.25 12.0625 C 16.122 12.0625 15.137 11.423 14.625 10.5 C 14.113 11.423 13.128 12.0625 12 12.0625 C 10.872 12.0625 9.887 11.423 9.375 10.5 C 8.863 11.423 7.878 12.0625 6.75 12.0625 C 5.622 12.0625 4.637 11.423 4.125 10.5 z M 4 14 L 11 14 L 11 20 L 4 20 L 4 14 z"></path>
</symbol><symbol viewBox="0 0 48 48" id="color-novel" >
<path fill="#B71C1C" d="M26,8c-2.9,0-5.4,1.4-7,3.7C17.4,9.4,14.8,8,12,8c-5,0-9,4-9,9c0,7,16,19.8,16,19.8S35,24,35,17
	C35,12,31,8,26,8z"></path>
<path fill="#F44336" d="M39.3,18.2c-2.3-0.5-4.6,0.1-6.4,1.6c-0.9-2.1-2.6-3.7-4.9-4.3c-4-0.9-8,1.5-8.9,5.5c-1.3,5.6,9.1,19,9.1,19
	s15.3-7.2,16.6-12.9C45.7,23.2,43.3,19.2,39.3,18.2z"></path>
</symbol><symbol viewBox="0 0 48 48" id="color-donate" >
<polygon fill="#E69329" points="11.7,21.6 16.8,31.5 26.3,27.6 30.7,14.9 15.9,15.7 "></polygon>
<circle fill="#546E7A" cx="15" cy="36" r="7.8"></circle>
<g>
	<path fill="#90A4AE" d="M15,27c-5,0-9,4-9,9c0,5,4,9,9,9s9-4,9-9C24,31,20,27,15,27z M15,43c-3.9,0-7-3.1-7-7c0-3.9,3.1-7,7-7
		s7,3.1,7,7C22,39.9,18.9,43,15,43z"></path>
	<rect x="14" y="33" fill="#90A4AE" width="2" height="8"></rect>
</g>
<g>
	<path fill="#FFB74D" d="M12.9,36L12.9,36c1,1.9,3.2,2.7,5.1,1.7l16.5-8.5c1-0.5,1.7-1.2,2.2-1.9c1.7-3.2,5.6-10.7,8.2-17.2
		l-18.2,8.7L21.9,26l-6.8,3.6C12.5,30.9,11.7,33.8,12.9,36z"></path>
	<path fill="#FFB74D" d="M30.2,3L13.7,9.3c-0.7,0.2-1.5,1-2.2,1.7l-5.6,7.5c-1,1.5-1.2,3.4-0.5,5.1c0.4,1,1.7,3.4,3.1,6.1
		c1.6-1.7,3.9-2.7,6.5-2.7c0.4,0,0.9,0,1.3,0.1l-2.1-4.2l4.6-4.1h8c0,0,15.5-2.2,18.2-8.7L30.2,3z"></path>
</g>
<path fill="#FFCDD2" d="M18.2,36c-1.3,0.6-2.8,0-3.3-1.3c-0.6-1.3,0-2.8,1.3-3.3C17.4,30.8,19.4,35.4,18.2,36z"></path>
</symbol><symbol viewBox="0 0 48 48" id="color-courses" >
<rect x="6" y="6" fill="#2E7D32" width="11" height="36"></rect>
<rect x="31" y="6" fill="#1565C0" width="11" height="36"></rect>
<rect x="19" y="11" fill="#FFC107" width="10" height="31"></rect>
<g>
	<rect x="6" y="12" fill="#7CB342" width="11" height="2"></rect>
	<rect x="6" y="34" fill="#7CB342" width="11" height="2"></rect>
	<rect x="10" y="17" fill="#7CB342" width="3" height="14"></rect>
</g>
<g>
	<rect x="31" y="12" fill="#64B5F6" width="11" height="2"></rect>
	<rect x="31" y="34" fill="#64B5F6" width="11" height="2"></rect>
	<rect x="35" y="17" fill="#64B5F6" width="3" height="14"></rect>
</g>
<g>
	<rect x="19" y="15" fill="#FF8F00" width="10" height="2"></rect>
	<rect x="19" y="36" fill="#FF8F00" width="10" height="2"></rect>
	<rect x="23" y="20" fill="#FF8F00" width="2" height="13"></rect>
</g>
</symbol><symbol viewBox="0 0 48 48" id="color-good-quality" >
<circle fill="#4CAF50" cx="24" cy="24" r="19"></circle>
<g>
	<path fill="#FFCC80" d="M16.6,18.8l5.6,2.8l1.8-3.2c0.9-1.6,1.4-3.5,1.4-5.4v-0.9c0-1.2-1-2.2-2.2-2.2h-0.5c-0.4,0-0.7,0.3-0.8,0.7
		l-0.5,2c-0.2,0.9-0.7,1.7-1.3,2.4L16.6,18.8z"></path>
	<path fill="#FFCC80" d="M29.8,34C29.1,34,19,34,19,34c-2.2,0-4-1.8-4-4v-8c0-2.2,1.8-4,4-4h13c1.1,0,2,0.9,2,2c0,1.1-0.5,1.5-0.5,2
		c0,0.5,0.5,0.9,0.5,2c0,1.1-0.8,1.8-0.9,2.3c-0.2,0.6,0.1,1.6-0.2,2.3c-0.3,0.7-0.9,1.1-1,1.8s0.3,1.5,0,2.3
		C31.5,33.3,30.8,34,29.8,34z"></path>
</g>
</symbol><symbol viewBox="0 0 24 24" id="androidL-marker" >
    <path d="M12,2C8.1,2,5,5.1,5,9c0,6,7,13,7,13s7-7.1,7-13C19,5.1,15.9,2,12,2z M12,11.5c-1.4,0-2.5-1.1-2.5-2.5 c0-1.4,1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5C14.5,10.4,13.4,11.5,12,11.5z"></path>
</symbol><symbol viewBox="0 0 24 24" id="androidL-user" >
    <path d="M 12 4 C 9.790861 4 8 5.790861 8 8 C 8 10.209139 9.790861 12 12 12 C 14.209139 12 16 10.209139 16 8 C 16 5.790861 14.209139 4 12 4 z M 12 14 C 5.9 14 4 18 4 18 L 4 20 L 20 20 L 20 18 C 20 18 18.1 14 12 14 z"></path>
</symbol><symbol viewBox="0 0 32 32" id="win10-email" >
    <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 16.1875 4 C 8.8227525 3.8922232 2.9146119 10.485994 4.15625 18.03125 C 4.9981586 23.151675 9.2050458 27.181379 14.34375 27.875 C 17.808627 28.342845 21.04781 27.343076 23.5 25.375 L 22.25 23.8125 C 20.20419 25.454424 17.512873 26.300405 14.59375 25.90625 C 10.338454 25.331871 6.8523414 21.952325 6.15625 17.71875 C 5.1078881 11.348006 9.9909975 5.9097768 16.15625 6 C 21.411045 6.077063 25.840449 10.43502 26 15.6875 C 26.0035 15.80006 26 15.909499 26 16.03125 C 25.992 18.234184 24.20805 20.000804 22 20 C 20.883008 19.999326 20 19.115742 20 18 L 20 17.5 L 20 14.5 L 20 10 L 18 10 L 18 10.78125 C 17.281448 10.294583 16.427539 10 15.5 10 C 13.026562 10 11 12.026562 11 14.5 L 11 17.5 C 11 19.973438 13.026562 22 15.5 22 C 16.847912 22 18.048165 21.385525 18.875 20.4375 C 19.60945 21.371627 20.728798 21.999233 22 22 C 25.28395 22.0012 27.988022 19.320316 28 16.03125 C 28 15.899001 28.0045 15.76844 28 15.625 C 27.807551 9.2894804 22.524705 4.0929369 16.1875 4 z M 15.5 12 C 16.892562 12 18 13.107438 18 14.5 L 18 17.5 C 18 18.892562 16.892562 20 15.5 20 C 14.107438 20 13 18.892562 13 17.5 L 13 14.5 C 13 13.107438 14.107438 12 15.5 12 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans"></path>
</symbol><symbol viewBox="0 0 24 24" id="androidL-phone" >
    <path d="M16,15l-2.6,2.6c-1.4,0-7-5.6-7-7L9,8V4c0-0.6-0.4-1-1-1H4C3.4,3,3,3.4,3,4v2c0,7,9,15,15,15h2c0.6,0,1-0.4,1-1v-4 c0-0.6-0.4-1-1-1H16z"></path>
</symbol><symbol viewBox="0 0 24 24" id="androidL-box" >
    <path d="M 6.09375 4 C 5.39375 4 4.80625 4.4 4.40625 5 L 2.1875 8.59375 C 2.0875 8.79375 2 9.2 2 9.5 L 2 20 C 2 21.1 2.9 22 4 22 L 20 22 C 21.1 22 22 21.1 22 20 L 22 16 L 22 9.5 C 22 9.2 21.9125 8.79375 21.8125 8.59375 L 19.59375 5 C 19.19375 4.4 18.60625 4 17.90625 4 L 6.09375 4 z M 5.90625 6 L 11 6 L 11 9 L 4.1875 9 L 5.90625 6 z M 13 6 L 18.09375 6 L 19.8125 9 L 13 9 L 13 6 z M 9 11 L 15 11 C 15.6 11 16 11.4 16 12 C 16 12.6 15.6 13 15 13 L 9 13 C 8.4 13 8 12.6 8 12 C 8 11.4 8.4 11 9 11 z"></path>
</symbol><symbol viewBox="0 0 24 24" id="androidL-calendar" >
    <path d="M 6 2 L 6 4 L 5 4 C 3.9 4 3 4.9 3 6 L 3 20 C 3 21.1 3.9 22 5 22 L 19 22 C 20.1 22 21 21.1 21 20 L 21 6 C 21 4.9 20.1 4 19 4 L 18 4 L 18 2 L 16 2 L 16 4 L 8 4 L 8 2 L 6 2 z M 5 9 L 19 9 L 19 20 L 5 20 L 5 9 z M 12 13 L 12 18 L 17 18 L 17 13 L 12 13 z" fill-rule="evenodd"></path>
</symbol><symbol viewBox="0 0 24 24" id="android-clock" >
    <path d="M 12 0 C 5.373 0 0 5.373 0 12 C 0 18.627 5.373 24 12 24 C 18.627 24 24 18.627 24 12 C 24 5.373 18.627 0 12 0 z M 12 2 C 17.523 2 22 6.477 22 12 C 22 17.523 17.523 22 12 22 C 6.477 22 2 17.523 2 12 C 2 6.477 6.477 2 12 2 z M 10.9375 3.875 L 10.5 12.0625 L 10.59375 12.9375 L 16.75 18.375 L 17.71875 17.375 L 12.625 11.96875 L 12.1875 3.875 L 10.9375 3.875 z"></path>
</symbol><symbol viewBox="0 0 48 48" id="color-truck" >
<path fill="#FFC107" d="M43,36H29V14h10.559c0.86,0,1.625,0.551,1.897,1.368L45,26v8C45,35.105,44.105,36,43,36"></path>
<path fill="#009688" d="M29,36H5c-1.105,0-2-0.895-2-2V9c0-1.105,0.895-2,2-2h22c1.105,0,2,0.895,2,2V36z"></path>
<g>
	<path fill="#5D4037" d="M42,36c0,2.761-2.238,5-5,5s-5-2.239-5-5s2.238-5,5-5S42,33.239,42,36"></path>
	<path fill="#5D4037" d="M18,36c0,2.761-2.239,5-5,5s-5-2.239-5-5s2.239-5,5-5S18,33.239,18,36"></path>
</g>
<g>
	<path fill="#BCAAA4" d="M39,36c0,1.105-0.895,2-2,2s-2-0.895-2-2s0.895-2,2-2S39,34.895,39,36"></path>
	<path fill="#BCAAA4" d="M15,36c0,1.105-0.895,2-2,2s-2-0.895-2-2s0.895-2,2-2S15,34.895,15,36"></path>
</g>
<path fill="#795548" d="M41,25h-7c-0.552,0-1-0.448-1-1v-7c0-0.552,0.448-1,1-1h5c0.432,0,0.813,0.275,0.949,0.684l2,6
	C41.982,22.786,42,22.893,42,23v1C42,24.552,41.552,25,41,25"></path>
<rect x="3" y="17" fill="#4DB6AC" width="26" height="8"></rect>
</symbol><symbol viewBox="0 0 48 48" id="color-price-tag-usd" >
<path fill="#4CAF50" d="M25,5L6.2,23.8c-1.6,1.6-1.6,4.1,0,5.7l12.3,12.3c1.6,1.6,4.1,1.6,5.7,0L43,23V9c0-2.2-1.8-4-4-4H25z M37,13
	c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C39,12.1,38.1,13,37,13z"></path>
<path fill="#FFFFFF" d="M26.2,30c-2.8,2.8-5.8,0.5-6.4,0l-1.6,1.6L17,30.4l1.6-1.6c-0.4-0.5-3.1-3.8,0.4-7.2l2.3,2.3
	c-0.4,0.4-2,2-0.2,3.7c1.5,1.5,2.7,0.3,2.9,0.1c2.5-2.5-3.6-6.6,0.4-10.6c2.4-2.4,5.4-1,6.4-0.1l1.7-1.7l1.3,1.3l-1.7,1.7
	c0.7,0.9,2.3,3.7-0.7,6.7l-2.3-2.3c0.6-0.6,1.7-2.1,0.5-3.4c-1.4-1.4-2.6-0.2-2.8,0C24.1,21.9,30.2,26,26.2,30z"></path>
</symbol><symbol viewBox="-79 0 340.3 500" id="drop-box" >
<style type="text/css">
	.st0{fill:#231F20;}
</style>
<path class="st0" d="M-71.6,0.7l331.5,170.1c0.8,0.4,1.1,1.4,0.7,2.2l-4.4,8.6c-0.4,0.8-1.4,1.1-2.2,0.7l-35.3-18.2v328.9
	c0,3.8-3.1,6.9-6.9,6.9H-36.1c-3.8,0-6.9-3.1-6.9-6.9V29.9l-34.5-17.7c-0.8-0.4-1.1-1.4-0.7-2.2l4.4-8.6
	C-73.4,0.7-72.4,0.3-71.6,0.7z M19.4,299.6h143.4c2.9,0,5.3-2.4,5.3-5.3V208c0-2.9-2.4-5.3-5.3-5.3H19.4c-2.9,0-5.3,2.4-5.3,5.3
	l0,86.3C14.1,297.2,16.5,299.6,19.4,299.6z"></path>
</symbol><symbol viewBox="0 0 48 48" id="color-speech-bubble" >
<path fill="#673AB7" d="M39,6H9C7.343,6,6,7.343,6,9v33l8.556-8H39c1.656,0,3-1.344,3-3V9C42,7.343,40.656,6,39,6z"></path>
<g>
	<rect x="10" y="14" fill="#D1C4E9" width="28" height="2"></rect>
	<rect x="10" y="19" fill="#D1C4E9" width="28" height="2"></rect>
	<rect x="10" y="24" fill="#D1C4E9" width="16" height="2"></rect>
</g>
</symbol><symbol viewBox="0 0 48 48" id="color-search" >
<g>
	
		<rect x="34.6" y="28.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -15.1544 36.5859)" fill="#616161" width="4" height="17"></rect>
	<circle fill="#616161" cx="20" cy="20" r="16"></circle>
</g>
<rect x="36.2" y="32.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -15.8392 38.2393)" fill="#37474F" width="4" height="12.3"></rect>
<circle fill="#64B5F6" cx="20" cy="20" r="13"></circle>
<path fill="#BBDEFB" d="M26.9,14.2c-1.7-2-4.2-3.2-6.9-3.2s-5.2,1.2-6.9,3.2c-0.4,0.4-0.3,1.1,0.1,1.4c0.4,0.4,1.1,0.3,1.4-0.1
	C16,13.9,17.9,13,20,13s4,0.9,5.4,2.5c0.2,0.2,0.5,0.4,0.8,0.4c0.2,0,0.5-0.1,0.6-0.2C27.2,15.3,27.2,14.6,26.9,14.2z"></path>
</symbol><symbol viewBox="0 0 48 48" id="color-aed" >
<path fill="#F44336" d="M34,6c-4.176,0-7.852,2.137-10,5.372C21.851,8.137,18.176,6,14,6C7.373,6,2,11.373,2,18
	c0,11.943,22,24,22,24s22-11.955,22-24C46,11.373,40.627,6,34,6"></path>
<polygon fill="#FFEBEE" points="30,24 24.814,24 28,15 22,15 19,27 23.75,27 21,37 "></polygon>
</symbol><symbol viewBox="0 0 48 48" id="color-shopping-cart-loaded" >
<rect x="25.6" y="7.6" transform="matrix(0.7071 0.7071 -0.7071 0.7071 19.2721 -18.5269)" fill="#F57C00" width="12.7" height="12.7"></rect>
<rect x="15.9" y="4.9" transform="matrix(0.7071 0.7071 -0.7071 0.7071 15.2218 -12.7487)" fill="#FF9800" width="14.1" height="14.1"></rect>
<g>
  <path fill="#009688" d="M18,32c-1.1,0-2-0.9-2-2l0-10l-4,0l0,10c0,3.3,2.7,6,6,6h19v-4H18z"></path>
  <path fill="#009688" d="M12.8,10l-0.4-1.3C11.8,7.1,10.3,6,8.6,6H5v4h3.6l5.5,16.6c0.3,0.8,1,1.4,1.9,1.4h19c0.8,0,1.5-0.5,1.8-1.2
    L44.4,10H12.8z"></path>
</g>
<circle fill="#00695C" cx="5" cy="8" r="2"></circle>
<g>
  <circle fill="#37474F" cx="34" cy="39" r="3"></circle>
  <circle fill="#37474F" cx="19" cy="39" r="3"></circle>
</g>
<g>
  <circle fill="#607D8B" cx="34" cy="39" r="1"></circle>
  <circle fill="#607D8B" cx="19" cy="39" r="1"></circle>
</g>
</symbol>
<symbol viewBox="0 0 48 48" id="color-shop" >
<rect x="5" y="19" fill="#CFD8DC" width="38" height="19"></rect>
<g>
  <rect x="5" y="38" fill="#B0BEC5" width="38" height="4"></rect>
</g>
<rect x="27" y="24" fill="#455A64" width="12" height="18"></rect>
<rect x="9" y="24" fill="#E3F2FD" width="14" height="11"></rect>
<rect x="10" y="25" fill="#1E88E5" width="12" height="9"></rect>
<path fill="#90A4AE" d="M36.5,33.5c-0.3,0-0.5,0.2-0.5,0.5v2c0,0.3,0.2,0.5,0.5,0.5S37,36.3,37,36v-2C37,33.7,36.8,33.5,36.5,33.5z"></path>
<g>
  <circle fill="#558B2F" cx="24" cy="19" r="3"></circle>
  <circle fill="#558B2F" cx="36" cy="19" r="3"></circle>
  <circle fill="#558B2F" cx="12" cy="19" r="3"></circle>
</g>
<g>
  <g>
    <path fill="#7CB342" d="M40,6H8C6.9,6,6,6.9,6,8v3h36V8C42,6.9,41.1,6,40,6z"></path>
  </g>
  <rect x="21" y="11" fill="#7CB342" width="6" height="8"></rect>
  <polygon fill="#7CB342" points="37,11 32,11 33,19 39,19   "></polygon>
  <polygon fill="#7CB342" points="11,11 16,11 15,19 9,19  "></polygon>
</g>
<g>
  <circle fill="#FFA000" cx="30" cy="19" r="3"></circle>
  <path fill="#FFA000" d="M45,19c0,1.7-1.3,3-3,3s-3-1.3-3-3s1.3-3,3-3L45,19z"></path>
  <circle fill="#FFA000" cx="18" cy="19" r="3"></circle>
  <path fill="#FFA000" d="M3,19c0,1.7,1.3,3,3,3s3-1.3,3-3s-1.3-3-3-3L3,19z"></path>
</g>
<g>
  <polygon fill="#FFC107" points="32,11 27,11 27,19 33,19   "></polygon>
  <polygon fill="#FFC107" points="42,11 37,11 39,19 45,19   "></polygon>
  <polygon fill="#FFC107" points="16,11 21,11 21,19 15,19   "></polygon>
  <polygon fill="#FFC107" points="6,11 11,11 9,19 3,19  "></polygon>
</g>
</symbol>
<symbol viewBox="0 0 48 48" id="color-east-direction" >
<path fill="#64B5F6" d="M24,6.001c8.697,0,15.973,6.202,17.64,14.415l-4.825-2.032c-2.169-4.929-7.093-8.383-12.814-8.383
  c-7.72,0-14,6.28-14,14s6.28,14,14,14c5.723,0,10.646-3.454,12.815-8.384l4.824-2.031C39.973,35.799,32.698,42.001,24,42.001
  c-9.925,0-18-8.075-18-18S14.075,6.001,24,6.001z"></path>
<g>
  <line fill="none" stroke="#2196F3" stroke-width="4" stroke-linecap="square" x1="24" y1="5" x2="24" y2="11"></line>
  <line fill="none" stroke="#2196F3" stroke-width="4" stroke-linecap="square" x1="24" y1="37" x2="24" y2="43"></line>
  <line fill="none" stroke="#2196F3" stroke-width="4" stroke-linecap="square" x1="11" y1="24" x2="5" y2="24"></line>
</g>
<polygon fill="#FF3D00" points="45,24.001 26,16 31,24 26,32 "></polygon>
</symbol>
<symbol viewBox="0 0 48 48" id="color-handshake" >
<path fill="#FFB74D" d="M36.8,28.2L25.5,16.9L28,15l-2-2H12.5L4,11v16l5.9,1l12,12.2c0.8,0.8,2,0.8,2.8,0l0,0c0.8-0.8,0.8-2,0-2.8
  l-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0l0,0l0,0c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0l0.8,0.8
  c0.8,0.8,2,0.8,2.8,0l0,0c0.8-0.8,0.8-2,0-2.8l-0.3-0.3c0,0,0,0,0,0c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c0,0,0,0,0,0l1,1
  c0.8,0.8,2,0.8,2.8,0l0,0c0.8-0.8,0.8-2,0-2.8c0,0-0.3-0.3-0.3-0.3c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c0,0,0,0,0,0
  l0.3,0.3c0.8,0.8,2,0.8,2.8,0l0,0C37.6,30.3,37.6,29,36.8,28.2z"></path>
<g>
  <path fill="#C77600" d="M27.4,18.9l-4.7,1.8c-2.8,1.1-5.9,0.4-7.9-1.8l0,0c-0.4-0.4-0.3-1.1,0.3-1.4l13.3-6.5
    c1.6-0.8,3.5-0.6,4.9,0.4l0.4,0.3c1.1,0.8,2.6,1,3.9,0.7L44,11v16l-5.9,1l-0.8,0.8L27.4,18.9z"></path>
  <path fill="#C77600" d="M18,39L18,39c0.8,0.8,2,0.8,2.8,0l0.7-0.7c0.8-0.8,0.8-2,0-2.8l0,0c-0.8-0.8-2-0.8-2.8,0L18,36.2
    C17.2,37,17.2,38.2,18,39z"></path>
  <path fill="#C77600" d="M15.1,36.2L15.1,36.2c0.8,0.8,2,0.8,2.8,0l0.7-0.7c0.8-0.8,0.8-2,0-2.8l0,0c-0.8-0.8-2-0.8-2.8,0l-0.7,0.7
    C14.4,34.1,14.4,35.4,15.1,36.2z"></path>
  <path fill="#C77600" d="M12.3,33.4L12.3,33.4c0.8,0.8,2,0.8,2.8,0l0.7-0.7c0.8-0.8,0.8-2,0-2.8l0,0c-0.8-0.8-2-0.8-2.8,0l-0.7,0.7
    C11.5,31.3,11.5,32.6,12.3,33.4z"></path>
  <path fill="#C77600" d="M9.5,30.5L9.5,30.5c0.8,0.8,2,0.8,2.8,0l0.7-0.7c0.8-0.8,0.8-2,0-2.8l0,0c-0.8-0.8-2-0.8-2.8,0l-0.7,0.7
    C8.7,28.5,8.7,29.7,9.5,30.5z"></path>
</g>
<g>
  <path fill="#EBAE55" d="M20.5,37.9L19,36.5l0.4-0.4c0.4-0.4,0.9-0.4,1.3,0l0.1,0.1c0.4,0.4,0.4,0.9,0,1.3L20.5,37.9z"></path>
  <path fill="#EBAE55" d="M17.6,35.1l-1.4-1.4l0.4-0.4c0.4-0.4,0.9-0.4,1.3,0l0.1,0.1c0.4,0.4,0.4,0.9,0,1.3L17.6,35.1z"></path>
  <path fill="#EBAE55" d="M14.8,32.3l-1.4-1.4l0.4-0.4c0.4-0.4,0.9-0.4,1.3,0l0.1,0.1c0.4,0.4,0.4,0.9,0,1.3L14.8,32.3z"></path>
  <path fill="#EBAE55" d="M12,29.5L10.6,28l0.4-0.4c0.4-0.4,0.9-0.4,1.3,0l0.1,0.1c0.4,0.4,0.4,0.9,0,1.3L12,29.5z"></path>
</g>
</symbol><symbol viewBox="0 0 48 48" id="color-hourglass" >
<g>
  <path fill="#BBDEFB" d="M33,34.251c0-4.972-9-12.376-9-12.376s-9,7.404-9,12.376s4.029,7.874,9,7.874S33,39.223,33,34.251z"></path>
  <g>
    <path fill="#BBDEFB" d="M33,13.75c0,4.973-9,12.376-9,12.376s-9-7.403-9-12.376c0-4.972,4.028-7.875,9-7.875S33,8.778,33,13.75z"></path>
  </g>
</g>
<g>
  <path fill="#FF9800" d="M17.699,16c1.235,2.373,3.906,5.313,6.301,7.481c2.395-2.169,5.065-5.108,6.301-7.481H17.699z"></path>
  <circle fill="#FF9800" cx="24" cy="26.001" r="1"></circle>
  <circle fill="#FF9800" cx="24" cy="29.001" r="1"></circle>
  <g>
    <path fill="#FF9800" d="M24,40.125c2.308,0,4.885-0.793,6.172-2.824C27.533,33.907,24,31,24,31s-3.533,2.907-6.171,6.301
      C19.115,39.332,21.692,40.125,24,40.125z"></path>
  </g>
</g>
<g>
  <path fill="#6D4C41" d="M33,39c0-0.553-0.447-1-1-1H16c-0.552,0-1,0.447-1,1v4c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1V39z"></path>
  <path fill="#6D4C41" d="M33,9c0,0.553-0.447,1-1,1H16c-0.552,0-1-0.447-1-1V5c0-0.553,0.448-1,1-1h16c0.553,0,1,0.447,1,1V9z"></path>
</g>
<g>
  <path fill="#8D6E63" d="M36,42c0-0.553-0.447-1-1-1H13c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1h22c0.553,0,1-0.447,1-1V42z"></path>
  <path fill="#8D6E63" d="M36,6c0,0.553-0.447,1-1,1H13c-0.552,0-1-0.447-1-1V5c0-0.553,0.448-1,1-1h22c0.553,0,1,0.447,1,1V6z"></path>
</g>
</symbol><symbol viewBox="0 0 48 48" id="color-clinic" >
<path fill="#EDE7F6" d="M24,7L4,18.89V43h40V18.89L24,7z"></path>
<path fill="#455A64" d="M45,22.048L24,10L3,22.048V17L24,5l0,0l21,12V22.048z"></path>
<g>
  <rect x="21" y="18" fill="#F44336" width="6" height="20"></rect>
  <rect x="14" y="25" fill="#F44336" width="20" height="6"></rect>
</g>
<rect x="4" y="41" fill="#B39DDB" width="40" height="2"></rect>
</symbol><symbol viewBox="0 0 48 48" id="color-globe-earth" >
<path fill="#5D4037" d="M26,33.499h-2c0,6-6,7-6,7v2h14v-2C32,40.499,26,39.499,26,33.499z"></path>
<circle fill="#90CAF9" cx="24.535" cy="17.963" r="11"></circle>
<line fill="none" stroke="#8D6E63" stroke-width="2" stroke-miterlimit="10" x1="11.572" y1="5" x2="39.316" y2="32.745"></line>
<g>
  <circle fill="none" stroke="#1E88E5" stroke-width="2" cx="24.535" cy="17.963" r="11"></circle>
  
    <ellipse transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 29.1811 48.0148)" fill="none" stroke="#1E88E5" stroke-width="2" stroke-miterlimit="10" cx="24.535" cy="17.963" rx="11" ry="5.499"></ellipse>
  
    <line fill="none" stroke="#1E88E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="27.129" y1="7.594" x2="14.165" y2="20.557"></line>
  
    <line fill="none" stroke="#1E88E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="34.906" y1="15.371" x2="21.943" y2="28.336"></line>
  <line fill="none" stroke="#1E88E5" stroke-width="2" stroke-miterlimit="10" x1="16.757" y1="25.742" x2="32.313" y2="10.185"></line>
  <line fill="none" stroke="#1E88E5" stroke-width="2" stroke-miterlimit="10" x1="16.757" y1="10.185" x2="32.313" y2="25.742"></line>
</g>
<g>
  <path fill="none" stroke="#795548" stroke-width="3" d="M16.566,5.253c-0.937,0.588-1.822,1.289-2.637,2.104
    c-5.858,5.86-5.858,15.356,0,21.214c5.857,5.857,15.354,5.858,21.212,0l0.718-0.681"></path>
  <rect x="18" y="40.499" fill="#795548" width="14" height="2"></rect>
</g>
</symbol><symbol viewBox="0 0 48 48" id="color-ask-question" >
<path fill="#2196F3" d="M39,6H9C7.343,6,6,7.343,6,9v33l8.556-8H39c1.656,0,3-1.344,3-3V9C42,7.343,40.656,6,39,6z"></path>
<path fill="#E3F2FD" d="M22.687,23.46c0-1.13,0.138-2.031,0.415-2.7c0.277-0.67,0.784-1.33,1.521-1.98
  c0.736-0.648,1.227-1.178,1.472-1.586c0.244-0.408,0.365-0.838,0.365-1.291c0-1.365-0.635-2.047-1.904-2.047
  c-0.603,0-1.084,0.184-1.446,0.551c-0.363,0.368-0.552,0.875-0.568,1.521H19c0.016-1.541,0.519-2.748,1.507-3.621
  C21.496,11.437,22.845,11,24.555,11c1.726,0,3.064,0.414,4.018,1.242C29.523,13.069,30,14.236,30,15.746
  c0,0.687-0.154,1.334-0.464,1.943c-0.31,0.61-0.851,1.286-1.624,2.029l-0.988,0.932c-0.619,0.59-0.973,1.279-1.063,2.071
  l-0.049,0.738H22.687z M22.333,27.167c0-0.538,0.186-0.981,0.556-1.333c0.371-0.349,0.844-0.524,1.422-0.524
  c0.578,0,1.052,0.176,1.422,0.524c0.371,0.352,0.557,0.795,0.557,1.333c0,0.53-0.182,0.969-0.544,1.313
  c-0.362,0.346-0.84,0.52-1.435,0.52s-1.072-0.174-1.435-0.52C22.514,28.136,22.333,27.697,22.333,27.167z"></path>
</symbol>
<symbol viewBox="0 0 48 48" id="color-heart-health" >
<path fill="#FF3D00" d="M42.5,12l-3.6-3.5C37.3,7.6,35.5,7,33.5,7c-4.2,0-7.8,2.5-9.5,6c-1.7-3.6-5.3-6-9.5-6C8.7,7,4,11.7,4,17.5
  c0,3,1.2,5.6,3.2,7.5L24,42l17.1-17.3c1.8-1.8,2.9-4.4,2.9-7.2C44,15.5,43.4,13.6,42.5,12z"></path>
<path fill="#62C7BE" d="M38.9,8.5L24,23.5l-7.2-7.2c-1-1-2.6-1-3.5,0c-1,1-1,2.6,0,3.5L24,30.5L42.5,12C41.6,10.6,40.4,9.4,38.9,8.5
  z"></path>
</symbol>
</svg>
        