<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vlad
 */
?>
<!DOCTYPE html>

<html lang="en" class=" desktop landscape">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta property="og:type" content="website">
   <meta property="og:url" content="<?php bloginfo('url'); ?>">
   <meta property="og:title" content="Influencer Anatol Equipment Manufacturing Co.">
   <meta property="og:image" content="<?php bloginfo('url'); ?>/wp-content/themes/vlad/images/fon6.jpg">
   <meta property="og:image:width" content="200">
   <meta property="og:image:height" content="200">
   <meta property="og:image:type" content="image/jpeg">
   <meta property="og:site_name" content="Influencers choose Anatol">
   <meta property="og:image:alt" content="Anatol">
   <meta name="description" content="Customers choose screen printing equipment from Anatol">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/images/favicon.ico"/>
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css" />
   <meta name="keywords" content="Anatol, Solution Mini,screen printing,printing equipmen, Venus Led Light Table, Quik-kote Mini, Washout Booth, Formulator And Formulator Mini, Screen printing ink mixers, Screen printing, automatic emulsion coating machine, led light table, electric conveyor dryer, conveyor dryer">
	<title>Anatol Influencers</title>
	
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div class="wrapper">
      <div class="header">
            <div class="header--wrapper container">
               <!-- <div class="header__item logo"> -->
                  <a class="header__item logo" href="<?php bloginfo('url'); ?>">
                     <img src="<?php bloginfo('template_url'); ?>/images/anatol-logo-red.svg" alt="">
                  </a>
               <!-- </div> -->
               <div class="header__item burger">
                  <span></span>
               </div>
               <div class="header__item wrapper_header_btn">
                  <a href="#scroll" class="get_a_quote">Get a quote</a>
                     <!-- <div class="get_a_quote ">
                     </div></a> -->
               </div>
            </div>

            <nav class="main_menu">
               <ul class="main_menu_ul">
                  <li class="main_menu_li"></li>
                  <li class="main_menu_li"></li>
                  <li class="main_menu_li"><a href="<?php bloginfo('url'); ?>/contact-us/">Contact us<span class="menu-line"></span></a></li>
                  <li class="main_menu_li"><a href="<?php bloginfo('url'); ?>/about-us/">About Anatol<span class="menu-line"></span></a></li>
                  <li class="main_menu_li"><a href="<?php bloginfo('url'); ?>/influencers/">More Success Stories<span class="menu-line"></span></a></li>
                  <li class="main_menu_li"><a target="_blank" href="https://volt.anatol.com/">View anatol volt<span class="menu-line"></span></a></li>
                  <li class="main_menu_li"><a target="_blank" href="https://anatol.com/">visit main site<span class="menu-line"></span></a></li>
                  <li class="main_menu_li"></li>
                  <li class="main_menu_li"></li>
                  <li class="main_menu_li">
                     <!-- <div class="social"> -->
                        <ul class="social">
                           <li>
                              <a target="_blank" href="https://www.facebook.com/AnatolEquipment/">
                                 <!--?xml version="1.0"?-->
                                 <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                                    <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h10v-9h-3v-3h3v-1.611C16,9.339,17.486,8,20.021,8 c1.214,0,1.856,0.09,2.16,0.131V11h-1.729C19.376,11,19,11.568,19,12.718V14h3.154l-0.428,3H19v9h5c1.105,0,2-0.895,2-2V6 C26,4.895,25.104,4,24,4z"></path>
                                 </svg>
                              </a>
                           </li>
                           <li>
                              <a target="_blank" href="https://www.instagram.com/anatolequipment/">
                                 <!--?xml version="1.0"?-->
                                 <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                                    <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
                                 </svg>
                              </a>
                           </li>
                           <li>
                              <a target="_blank" href="https://www.linkedin.com/company/anatol-equipment-manufacturing-co">
                                 <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                    <path d="M 8.6425781 4 C 7.1835781 4 6 5.181625 6 6.640625 C 6 8.099625 7.182625 9.3085938 8.640625 9.3085938 C 10.098625 9.3085938 11.283203 8.099625 11.283203 6.640625 C 11.283203 5.182625 10.101578 4 8.6425781 4 z M 21.535156 11 C 19.316156 11 18.0465 12.160453 17.4375 13.314453 L 17.373047 13.314453 L 17.373047 11.310547 L 13 11.310547 L 13 26 L 17.556641 26 L 17.556641 18.728516 C 17.556641 16.812516 17.701266 14.960938 20.072266 14.960938 C 22.409266 14.960937 22.443359 17.145609 22.443359 18.849609 L 22.443359 26 L 26.994141 26 L 27 26 L 27 17.931641 C 27 13.983641 26.151156 11 21.535156 11 z M 6.3632812 11.310547 L 6.3632812 26 L 10.923828 26 L 10.923828 11.310547 L 6.3632812 11.310547 z"></path>
                                 </svg>
                              </a>
                           </li>
                           <li>
                              <a target="_blank" href="https://twitter.com/anatolequipment">
                                 <!--?xml version="1.0"?-->
                                 <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                                    <path d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z"></path>
                                 </svg>
                              </a>
                           </li>
                           <li>
                              <a target="_blank" href="https://www.youtube.com/channel/UCcmF2LudDzC1MJyD2d7U2OA">
                                 <!--?xml version="1.0"?-->
                                 <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                                    <path d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
                                 </svg>
                              </a>
                           </li>
                        </ul>
                     <!-- </div> -->
                  </li>
               </ul>
            </div>
         </nav>

         