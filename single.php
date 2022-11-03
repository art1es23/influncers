<?php get_header(); ?> 

<?php ?>
<div 
<?php if(get_field('banner_img')){  ?>
style="background-image: linear-gradient( to right, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0.65) 100% ), url(<?php echo get_field('banner_img'); ?>);"
<?php }?>
class="top_banner">
   <div class="container">
      <h1><?php the_title() ?></h1>
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
   </div> 
</div>

<div class="banner">
   <div class="banner--wrapper container">
      <!-- <div class="post-navigation">
         <?php previous_post_link('<div class="prev-post">%link</div>', __('<span class="prew-arrow"></span><span class="prev-title">%title</span>') ); ?>
         <?php next_post_link('<div class="next-post">%link</div>', __('<span class="next-arrow"></span> <span class="next-title">%title</span>') ); ?>
      </div> -->

      <div class="influencer">
         <div class="influncer__item influencer-img">
               <div class="slider_images">
                  <?php if(get_field('img-1')){  ?>
                     <div class="img_item">
                        <img src="<?php echo get_field('img-1')?>">
                     </div>
                  <?php }?>
                  <?php if(get_field('img-2')){  ?>
                     <div class="img_item">
                        <img src="<?php echo get_field('img-2')?>">
                     </div>
                  <?php }?>
                  <?php if(get_field('img-3')){  ?>
                     <div class="img_item">
                        <img src="<?php echo get_field('img-3')?>">
                     </div>
                  <?php }?>
                  <?php if(get_field('img-4')){  ?>
                     <div class="img_item">
                        <img src="<?php echo get_field('img-4')?>">
                     </div>
                  <?php }?>
                  <?php if(get_field('img-5')){  ?>
                     <div class="img_item">
                        <img src="<?php echo get_field('img-5')?>">
                     </div>
                  <?php }?>
               </div>
            </div>
         <div class="influncer__item influencer-info">
            <h2 class="influencer__name"><?php the_title() ?></h2>
            <?php if(get_field('small_description_')){ ?>
               <p class="influencer__description"><?php echo get_field('small_description_'); ?></p>
            <?php }?>

            <?php if(get_field('influencer_tel') || get_field('influencer_email')  ){  ?>
               <!-- <div class="influencer__contacts"> -->
                  <a class="influencer__contacts" href="tel:<?php echo get_field('influencer_tel'); ?>"><?php echo get_field('influencer_tel'); ?></a> 
                  <!-- <br>  -->
                  <a class="influencer__contacts" href="mailto:<?php echo get_field('influencer_email'); ?>"><?php echo get_field('influencer_email'); ?></a> 
               <!-- </div> -->
            <?php }?>

            <?php if(get_field('location')){ ?>
               <div class="influencer__location"><?php echo get_field('location'); ?></div>
            <?php }?>

            <?php if(get_field('influencer_equipment')){ ?>
               <div class="influencer_equipment"><?php echo get_field('influencer_equipment'); ?></div>
            <?php }?>

            <?php if(get_field('influencer_url')){  ?>
               <a href="<?php echo get_field('influencer_url'); ?>" class="influencer-btn learn-more-btn button" target="_blank">LEARN MORE</a>      
            <?php }?>
         </div>
      </div>
   </div>
</div>

<div class="contact-form">
   <div class="contact-form--wrapper container">
      <div class="contact-form__item contact-form--left">
         <p class="contact-form__legend">Do you relate to <?php the_title() ?> journey?</p>
         <p class="contact-form__legend">Think following a simiar path might be the best way forward for your business?</p>
      </div>

      <div class="contact-form__item contact-form--right">
         <h3 class="contact-form_title">Contact us today and let's talk</h3>
         
         <form action="">
            <div class="form-row">
               <div class="half">
                  <label>First Name<span class="field_required">*</span></label>
                  <input type="text" name="firstname" placeholder="First Name*" required="">
               </div>
               <div class="half">
                  <label>Last Name<span class="field_required">*</span></label>
                  <input type="text" name="lastname" placeholder="Last Name*" required="">
               </div>
            </div>

            <div class="form-row">
               <div class="half">
                  <label>Phone Number<span class="field_required">*</span></label>
                  <input type="tel" name="phone" placeholder="Phone Number*" maxlength="18" id="tel" required="">
               </div>
               <div class="half">
                  <label>Email<span class="field_required">*</span></label>
                  <input type="Email" name="email" placeholder="Email*" required="">
               </div>
            </div>

            <div class="form-row">
               <div class="field_full">
                  <label>Additional Info</label>
                  <textarea class="" name="description" placeholder="Additional Info"></textarea>
               </div>
            </div>

            <div class="form-row text-center">
               <input id="my_form_send" type="submit" name="submit_web_form" value="Get a Quote" class="button">
            </div>
         </form>

      </div>
   </div>
</div>


<div class="slider_section">
   <div class="slider_section--wrapper container">
      <div class="slider_text">
      <?php if(get_field('big_description_title')){  ?>
            <div class="slider_title">
               <?php echo get_field('big_description_title'); ?>
            </div>
         <?php }?>
         <?php if(get_field('big_description')){  ?>
         <div class="slider_description">
            <?php echo get_field('big_description'); ?>
         </div>
         <?php }?>
      </div>
      <div class="slider_slider">
         <div class="sliderr">
         <?php if(get_field('video_1_img') && get_field('video_1_url')){  ?>
            <div class="slick_item">
               <img src="<?php echo get_field('video_1_img'); ?>" alt="<?php echo get_field('video_1_url'); ?>">
               <div class="slick_wrapper">
                  <div class="slick_circle">
                     <div class="play_btn"></div>
                  </div>
               </div>
            </div>
         <?php }?>
         <?php if(get_field('video_2_img') && get_field('video_2_url')){  ?>
            <div class="slick_item">
               <img src="<?php echo get_field('video_2_img'); ?>" alt="<?php echo get_field('video_2_url'); ?>">
               <div class="slick_wrapper">
                  <div class="slick_circle">
                     <div class="play_btn"></div>
                  </div>
               </div>
            </div>
         <?php }?>
         <?php if(get_field('video_3_img') && get_field('video_3_url')){  ?>
            <div class="slick_item">
               <img src="<?php echo get_field('video_3_img'); ?>" alt="<?php echo get_field('video_3_url'); ?>">
               <div class="slick_wrapper">
                  <div class="slick_circle">
                     <div class="play_btn"></div>
                  </div>
               </div>
            </div>
         <?php }?>
         <?php if(get_field('video_4_img') && get_field('video_4_url')){  ?>
            <div class="slick_item">
               <img src="<?php echo get_field('video_4_img'); ?>" alt="<?php echo get_field('video_4_url'); ?>">
               <div class="slick_wrapper">
                  <div class="slick_circle">
                     <div class="play_btn"></div>
                  </div>
               </div>
            </div>
         <?php }?>
         </div>
      </div>
   </div>
</div>


		
<div class="related-section">

      <div class="container related-container">
               <div class="section_title">
                  <h2 class="related-title">More Success Stories</h2>
               </div>

   <?php
   $categories = get_the_category($post->ID);
   if ($categories) {
      $category_ids = array();
      foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
   
         $args=array(
            'category__in' => $category_ids, 
            'post__not_in' => array($post->ID), 
            'showposts'=>5, 
            'caller_get_posts'=>1
         );
         $my_query = new wp_query($args);
         if( $my_query->have_posts() ) {
            echo '<div class="related_post_slider">';
            while ($my_query->have_posts()) {
               $my_query->the_post();
   ?>
         <div class="item_wrap">
         <a href="<?php the_permalink(); ?>">
               <img src="<?php echo get_field('img_influencer'); ?>" alt="">
         
      <?php the_title(); ?></a></div>
   <?php
            }
            echo '</div>';
         }
         wp_reset_query();
      }
   ?>	
   <div class="sl_navi"><div class="sl_prev"></div><div class="sl_next"></div></div>


   </div>
</div>

<div class="another_equipment ">
   <div class="container">
      <div class="another_equipment_title">View our
         full product line</div>
   </div>
   <div  class="section-wrap">
      <div class="caterpillar">
         <div class="block_press block_presss">
            <div class="back">
            </div>
            <div class="front">
               <div class="image">
                  <a href="/screen-printing-presses/" class="draw-border">
                     <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 552 552"
                        width="150" height="150">
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.4 -2270.4L502.8 -2270.4C527.68 -2270.4 547.8 -2250.28 547.8 -2225.4L547.8 -1768.05C547.8 -1743.16 527.68 -1723.05 502.8 -1723.05L45.4 -1723.05C20.51 -1723.05 0.4 -1743.16 0.4 -1768.05L0.4 -2225.4C0.4 -2250.28 20.51 -2270.4 45.4 -2270.4Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" class="shp1"
                                    d="M274.1 -1927.8C236 -1927.8 205.2 -1958.6 205.2 -1996.7C205.2 -2034.8 236 -2065.6 274.1 -2065.6C312.2 -2065.6 343 -2034.8 343 -1996.7C343 -1958.6 312.2 -1927.8 274.1 -1927.8Z">
                                 </path>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -2204.4L280.8 -2204.4L280.8 -2044.53L267.4 -2044.53L267.4 -2204.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -1948.9L280.8 -1948.9L280.8 -1789.03L267.4 -1789.03L267.4 -1948.9Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M196.73 -2189.61L209.32 -2194.19L264 -2043.96L251.4 -2039.38L196.73 -2189.61Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M284.08 -1949.45L296.67 -1954.03L351.35 -1803.8L338.76 -1799.22L284.08 -1949.45Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M135.51 -2151.48L145.78 -2160.09L248.54 -2037.63L238.28 -2029.01L135.51 -2151.48Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M299.69 -1955.81L309.96 -1964.42L412.72 -1841.96L402.45 -1833.34L299.69 -1955.81Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M90.87 -2094.8L97.57 -2106.4L236.02 -2026.47L229.32 -2014.86L90.87 -2094.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M312.15 -1966.96L318.85 -1978.57L457.3 -1898.63L450.6 -1887.03L312.15 -1966.96Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M68.38 -2026.14L70.71 -2039.33L228.15 -2011.57L225.82 -1998.37L68.38 -2026.14Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M319.98 -1981.7L322.3 -1994.9L479.75 -1967.14L477.42 -1953.94L319.98 -1981.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M70.73 -1954.08L68.41 -1967.27L225.85 -1995.03L228.17 -1981.84L70.73 -1954.08Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M322.34 -1998.34L320.01 -2011.54L477.45 -2039.3L479.78 -2026.11L322.34 -1998.34Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M97.65 -1887.1L90.95 -1898.7L229.4 -1978.64L236.1 -1967.03L97.65 -1887.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M318.77 -2014.76L312.07 -2026.37L450.52 -2106.3L457.22 -2094.7L318.77 -2014.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M145.68 -1833.32L135.41 -1841.93L238.17 -1964.4L248.44 -1955.78L145.68 -1833.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M309.96 -2029.02L299.7 -2037.64L402.46 -2160.1L412.73 -2151.49L309.96 -2029.02Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M209.4 -1799.27L196.81 -1803.85L251.48 -1954.08L264.08 -1949.5L209.4 -1799.27Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M296.78 -2039.3L284.19 -2043.88L338.86 -2194.11L351.46 -2189.53L296.78 -2039.3Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.2 -2195.5L286.9 -2195.5C289.66 -2195.5 291.9 -2193.26 291.9 -2190.5L291.9 -2133.66C291.9 -2130.89 289.66 -2128.66 286.9 -2128.66L261.2 -2128.66C258.43 -2128.66 256.2 -2130.89 256.2 -2133.66L256.2 -2190.5C256.2 -2193.26 258.43 -2195.5 261.2 -2195.5Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.2 -2202.6L291.9 -2202.6L291.9 -2197.7L256.2 -2197.7L256.2 -2202.6Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M287 -1798.4L261.3 -1798.4C258.53 -1798.4 256.3 -1800.63 256.3 -1803.4L256.3 -1860.24C256.3 -1863.01 258.53 -1865.24 261.3 -1865.24L287 -1865.24C289.76 -1865.24 292 -1863.01 292 -1860.24L292 -1803.4C292 -1800.63 289.76 -1798.4 287 -1798.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M292 -1791.4L256.3 -1791.4L256.3 -1796.3L292 -1796.3L292 -1791.4Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M354.02 -1814.54L329.86 -1805.75C327.27 -1804.8 324.4 -1806.14 323.46 -1808.74L304.02 -1862.15C303.07 -1864.75 304.41 -1867.61 307 -1868.56L331.15 -1877.35C333.75 -1878.29 336.62 -1876.96 337.56 -1874.36L357 -1820.95C357.95 -1818.35 356.61 -1815.48 354.02 -1814.54Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.15 -1809.67L327.6 -1797.46L325.93 -1802.07L359.47 -1814.28L361.15 -1809.67Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M194.07 -2178.9L218.22 -2187.69C220.82 -2188.63 223.68 -2187.3 224.63 -2184.7L244.07 -2131.29C245.02 -2128.69 243.68 -2125.83 241.08 -2124.88L216.93 -2116.09C214.33 -2115.14 211.47 -2116.48 210.52 -2119.08L191.08 -2172.49C190.14 -2175.09 191.47 -2177.95 194.07 -2178.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.91 -2183.85L220.46 -2196.06L222.14 -2191.46L188.59 -2179.25L186.91 -2183.85Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.47 -1908.6L439.62 -1886.34C438.24 -1883.95 435.18 -1883.13 432.79 -1884.51L383.57 -1912.93C381.17 -1914.31 380.35 -1917.37 381.74 -1919.76L394.59 -1942.02C395.97 -1944.41 399.02 -1945.23 401.42 -1943.85L450.64 -1915.43C453.03 -1914.05 453.85 -1910.99 452.47 -1908.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.12 -1909.44L443.27 -1878.52L439.03 -1880.97L456.88 -1911.89L461.12 -1909.44Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.65 -2084.87L108.5 -2107.13C109.88 -2109.52 112.93 -2110.34 115.33 -2108.96L164.55 -2080.54C166.95 -2079.15 167.77 -2076.1 166.38 -2073.71L153.53 -2051.45C152.15 -2049.05 149.1 -2048.24 146.7 -2049.62L97.48 -2078.04C95.08 -2079.42 94.27 -2082.47 95.65 -2084.87Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.09 -2084.05L104.94 -2114.96L109.18 -2112.51L91.33 -2081.6L87.09 -2084.05Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M471.9 -1974.95L467.43 -1949.64C466.95 -1946.92 464.36 -1945.1 461.64 -1945.58L405.66 -1955.45C402.94 -1955.93 401.13 -1958.52 401.61 -1961.24L406.07 -1986.55C406.55 -1989.28 409.14 -1991.09 411.86 -1990.61L467.84 -1980.74C470.56 -1980.26 472.38 -1977.67 471.9 -1974.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.72 -1978.57L473.52 -1943.41L468.7 -1944.26L474.9 -1979.42L479.72 -1978.57Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M72.4 -2015.68L76.77 -2040.87C77.24 -2043.58 79.81 -2045.39 82.52 -2044.92L138.23 -2035.26C140.94 -2034.79 142.75 -2032.22 142.28 -2029.51L137.91 -2004.32C137.44 -2001.61 134.87 -1999.8 132.16 -2000.27L76.45 -2009.93C73.74 -2010.41 71.93 -2012.98 72.4 -2015.68Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.55 -2014.75L74.75 -2049.91L79.58 -2049.06L73.38 -2013.9L68.55 -2014.75Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M467.4 -2043.88L471.87 -2018.57C472.35 -2015.84 470.53 -2013.25 467.81 -2012.77L411.83 -2002.9C409.11 -2002.42 406.52 -2004.24 406.04 -2006.96L401.58 -2032.27C401.1 -2034.99 402.91 -2037.58 405.63 -2038.06L461.61 -2047.93C464.33 -2048.41 466.92 -2046.6 467.4 -2043.88Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M473.42 -2050.03L479.62 -2014.88L474.79 -2014.02L468.59 -2049.18L473.42 -2050.03Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M80.8 -1949.51L76.33 -1974.82C75.85 -1977.55 77.67 -1980.14 80.39 -1980.62L136.37 -1990.49C139.09 -1990.97 141.68 -1989.15 142.16 -1986.43L146.62 -1961.12C147.1 -1958.4 145.29 -1955.81 142.57 -1955.33L86.59 -1945.46C83.87 -1944.98 81.28 -1946.79 80.8 -1949.51Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M74.71 -1943.39L68.51 -1978.55L73.33 -1979.4L79.53 -1944.24L74.71 -1943.39Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.65 -2107.15L452.5 -2084.89C453.88 -2082.5 453.07 -2079.44 450.67 -2078.06L401.45 -2049.64C399.05 -2048.26 396 -2049.08 394.62 -2051.47L381.77 -2073.73C380.38 -2076.12 381.2 -2079.18 383.6 -2080.56L432.82 -2108.98C435.22 -2110.36 438.27 -2109.54 439.65 -2107.15Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.21 -2114.99L461.06 -2084.07L456.82 -2081.62L438.97 -2112.54L443.21 -2114.99Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.63 -1886.32L95.78 -1908.58C94.4 -1910.97 95.22 -1914.02 97.61 -1915.41L146.83 -1943.83C149.23 -1945.21 152.28 -1944.39 153.66 -1942L166.51 -1919.74C167.9 -1917.34 167.08 -1914.29 164.68 -1912.91L115.46 -1884.49C113.07 -1883.11 110.01 -1883.92 108.63 -1886.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M106.51 -1881.43L88.66 -1912.49L92.92 -1914.94L110.77 -1883.88L106.51 -1881.43Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M391.83 -2157.1L411.52 -2140.58C413.64 -2138.8 413.91 -2135.65 412.13 -2133.54L375.6 -2089.99C373.82 -2087.88 370.67 -2087.6 368.55 -2089.38L348.87 -2105.9C346.75 -2107.67 346.47 -2110.82 348.25 -2112.94L384.79 -2156.48C386.56 -2158.6 389.71 -2158.88 391.83 -2157.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.61 -2165.69L419.96 -2142.74L416.81 -2138.98L389.46 -2161.93L392.61 -2165.69Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M156.35 -1836.41L136.66 -1852.93C134.54 -1854.71 134.27 -1857.86 136.05 -1859.97L172.58 -1903.52C174.36 -1905.63 177.51 -1905.91 179.63 -1904.13L199.31 -1887.61C201.43 -1885.84 201.71 -1882.69 199.93 -1880.57L163.39 -1837.03C161.62 -1834.91 158.47 -1834.63 156.35 -1836.41Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.68 -1827.69L128.33 -1850.64L131.48 -1854.39L158.83 -1831.44L155.68 -1827.69Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M329.95 -2187.69L354.1 -2178.9C356.7 -2177.95 358.04 -2175.09 357.09 -2172.49L337.65 -2119.08C336.71 -2116.48 333.84 -2115.14 331.24 -2116.09L307.09 -2124.88C304.5 -2125.83 303.16 -2128.69 304.1 -2131.29L323.55 -2184.7C324.49 -2187.3 327.36 -2188.63 329.95 -2187.69Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M327.61 -2196.06L361.16 -2183.85L359.48 -2179.25L325.94 -2191.46L327.61 -2196.06Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M218.36 -1805.75L194.21 -1814.54C191.61 -1815.48 190.28 -1818.35 191.22 -1820.95L210.66 -1874.36C211.61 -1876.96 214.47 -1878.29 217.07 -1877.35L241.22 -1868.56C243.82 -1867.61 245.15 -1864.75 244.21 -1862.15L224.77 -1808.74C223.82 -1806.14 220.96 -1804.8 218.36 -1805.75Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M220.62 -1797.46L187.07 -1809.67L188.75 -1814.28L222.3 -1802.07L220.62 -1797.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M411.53 -1852.95L391.85 -1836.43C389.73 -1834.66 386.58 -1834.93 384.8 -1837.05L348.27 -1880.59C346.49 -1882.71 346.76 -1885.86 348.88 -1887.64L368.57 -1904.16C370.69 -1905.93 373.84 -1905.66 375.61 -1903.54L412.15 -1860C413.93 -1857.88 413.65 -1854.73 411.53 -1852.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M419.96 -1850.76L392.62 -1827.81L389.47 -1831.57L416.82 -1854.51L419.96 -1850.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M136.59 -2140.56L156.27 -2157.08C158.39 -2158.85 161.54 -2158.58 163.32 -2156.46L199.85 -2112.92C201.63 -2110.8 201.36 -2107.65 199.24 -2105.87L179.55 -2089.35C177.43 -2087.58 174.28 -2087.85 172.51 -2089.97L135.97 -2133.51C134.19 -2135.63 134.47 -2138.78 136.59 -2140.56Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M128.24 -2142.71L155.59 -2165.66L158.74 -2161.91L131.39 -2138.96L128.24 -2142.71Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <g id="Layer">
                              <path id="Layer" class="shp1"
                                 d="M276 345C237.9 345 207.1 314.2 207.1 276.1C207.1 238 237.9 207.2 276 207.2C314.1 207.2 344.9 238 344.9 276.1C344.9 314.2 314.1 345 276 345Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M269.3 68.5L282.7 68.5L282.7 228.37L269.3 228.37L269.3 68.5Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M269.3 323.9L282.7 323.9L282.7 483.77L269.3 483.77L269.3 323.9Z"></path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M166.39 99.59L178 92.89L257.93 231.34L246.33 238.04L166.39 99.59Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M294.09 320.81L305.69 314.11L385.62 452.56L374.02 459.26L294.09 320.81Z"></path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M92.74 178.09L99.44 166.48L237.89 246.42L231.19 258.02L92.74 178.09Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M314.06 305.83L320.76 294.23L459.21 374.17L452.51 385.77L314.06 305.83Z"></path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M68.4 282.8L68.4 269.4L228.27 269.4L228.27 282.8L68.4 282.8Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M323.8 282.8L323.8 269.4L483.67 269.4L483.67 282.8L323.8 282.8Z"></path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M99.56 385.8L92.86 374.19L231.31 294.26L238.01 305.86L99.56 385.8Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M320.77 258.08L314.07 246.48L452.52 166.55L459.22 178.15L320.77 258.08Z"></path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M174.63 455.35L162.97 448.65L242.91 309.56L254.57 316.26L174.63 455.35Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M301.87 235L290.21 228.3L370.15 89.22L381.81 95.92L301.87 235Z"></path>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M263.1 77.4L288.8 77.4C291.57 77.4 293.8 79.64 293.8 82.4L293.8 139.24C293.8 142.01 291.57 144.24 288.8 144.24L263.1 144.24C260.34 144.24 258.1 142.01 258.1 139.24L258.1 82.4C258.1 79.64 260.34 77.4 263.1 77.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M258.1 70.3L293.8 70.3L293.8 75.2L258.1 75.2L258.1 70.3Z"></path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M288.8 474.4L263.1 474.4C260.33 474.4 258.1 472.16 258.1 469.4L258.1 412.56C258.1 409.79 260.33 407.56 263.1 407.56L288.8 407.56C291.56 407.56 293.8 409.79 293.8 412.56L293.8 469.4C293.8 472.16 291.56 474.4 288.8 474.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M293.8 481.5L258.1 481.5L258.1 476.6L293.8 476.6L293.8 481.5Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M386.45 441.56L364.2 454.41C361.8 455.8 358.75 454.98 357.37 452.58L328.95 403.36C327.56 400.96 328.38 397.91 330.78 396.53L353.03 383.68C355.43 382.3 358.48 383.11 359.86 385.51L388.28 434.73C389.67 437.13 388.85 440.18 386.45 441.56Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M394.29 445.28L363.37 463.13L360.92 458.88L391.84 441.03L394.29 445.28Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M165.57 110.6L187.82 97.75C190.22 96.37 193.27 97.19 194.65 99.58L223.07 148.81C224.46 151.2 223.64 154.26 221.24 155.64L198.99 168.49C196.59 169.87 193.54 169.05 192.16 166.66L163.74 117.43C162.35 115.04 163.17 111.99 165.57 110.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M157.78 106.97L188.7 89.12L191.15 93.36L160.23 111.21L157.78 106.97Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M454.44 364.29L441.59 386.55C440.2 388.94 437.15 389.76 434.76 388.38L385.53 359.96C383.14 358.58 382.32 355.52 383.7 353.13L396.55 330.87C397.93 328.48 400.99 327.66 403.38 329.04L452.61 357.46C455 358.84 455.82 361.9 454.44 364.29Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M463.03 363.54L445.18 394.46L440.94 392.01L458.79 361.09L463.03 363.54Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M97.83 188.06L110.68 165.8C112.07 163.4 115.12 162.59 117.51 163.97L166.74 192.39C169.13 193.77 169.95 196.82 168.57 199.22L155.72 221.48C154.34 223.87 151.28 224.69 148.89 223.31L99.66 194.89C97.27 193.5 96.45 190.45 97.83 188.06Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M89.14 188.91L106.99 158L111.23 160.45L93.38 191.36L89.14 188.91Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M474.6 263.2L474.6 288.9C474.6 291.67 472.36 293.9 469.6 293.9L412.76 293.9C409.99 293.9 407.76 291.67 407.76 288.9L407.76 263.2C407.76 260.43 409.99 258.2 412.76 258.2L469.6 258.2C472.36 258.2 474.6 260.43 474.6 263.2Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M481.6 258.3L481.6 294L476.7 294L476.7 258.3L481.6 258.3Z"></path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M77.5 289.1L77.5 263.4C77.5 260.63 79.73 258.4 82.5 258.4L139.34 258.4C142.1 258.4 144.34 260.63 144.34 263.4L144.34 289.1C144.34 291.87 142.1 294.1 139.34 294.1L82.5 294.1C79.73 294.1 77.5 291.87 77.5 289.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M70.4 294L70.4 258.3L75.3 258.3L75.3 294L70.4 294Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M441.45 165.8L454.3 188.06C455.69 190.46 454.87 193.51 452.47 194.89L403.25 223.31C400.85 224.69 397.8 223.88 396.42 221.48L383.57 199.22C382.19 196.83 383 193.78 385.4 192.39L434.62 163.97C437.02 162.59 440.07 163.41 441.45 165.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M445.01 157.87L462.86 188.78L458.62 191.23L440.77 160.32L445.01 157.87Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M110.43 386.63L97.58 364.37C96.2 361.98 97.01 358.92 99.41 357.54L148.63 329.12C151.03 327.74 154.08 328.56 155.46 330.95L168.31 353.21C169.7 355.6 168.88 358.66 166.48 360.04L117.26 388.46C114.86 389.84 111.81 389.02 110.43 386.63Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M106.83 394.54L88.98 363.62L93.22 361.17L111.07 392.09L106.83 394.54Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M364.23 97.88L386.49 110.73C388.89 112.11 389.7 115.16 388.32 117.56L359.9 166.78C358.52 169.18 355.47 169.99 353.07 168.61L330.81 155.76C328.42 154.38 327.6 151.33 328.98 148.93L357.4 99.71C358.79 97.31 361.84 96.49 364.23 97.88Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M363.54 89.29L394.46 107.14L392.01 111.39L361.09 93.54L363.54 89.29Z"></path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M188.1 454.58L165.84 441.73C163.45 440.35 162.63 437.29 164.01 434.9L192.43 385.67C193.81 383.28 196.87 382.46 199.26 383.84L221.52 396.69C223.91 398.07 224.73 401.13 223.35 403.52L194.93 452.75C193.54 455.14 190.49 455.96 188.1 454.58Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M188.83 463.24L157.91 445.39L160.36 441.14L191.28 458.99L188.83 463.24Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 570.4L502.7 570.4C527.59 570.4 547.7 590.51 547.7 615.4L547.7 1072.75C547.7 1097.64 527.59 1117.75 502.7 1117.75L45.3 1117.75C20.41 1117.75 0.3 1097.64 0.3 1072.75L0.3 615.4C0.3 590.51 20.41 570.4 45.3 570.4Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M434.1 714.2L419.6 772.5L275.8 772.5L282.3 708.5C282.3 708.5 287.6 692.6 303.9 692.6L421.1 692.6C421.1 692.6 437.5 692.6 434.1 714.2ZM432.2 712.5C432.2 712.5 433 694.7 421.3 697C409.6 699.3 410.4 769 410.4 769L418.2 769L432.2 712.5Z">
                              </path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M510.1 736.1L374 955.9L38 942.6L268.2 736.1L274 736.1L271.6 759.5L92.5 919L111.5 919L272.4 779.4L266.8 804.3L416.2 806.8L425.3 770.8L464.9 770.8L473.8 754.3L430.4 754.3L434.6 736.1L510.1 736.1ZM410.4 814.7L260.2 810.7L144.3 921.4L327.5 930L410.4 814.7Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M38 946.5L42.2 977.9L382.3 995.6L375.5 961.9L38 946.5L38 946.5Z"></path>
                           </g>
                        </g>
                     </svg>
                  </a>
               </div>
               <h4>Screen Printing Presses</h4>
               <div class="descr_to_item">
                  <ul>
                     <li>Automatic Presses</li>
                     <li>Manual Presses</li>
                     <li>Specialty Automatic Presses</li>
                  </ul>
               </div>
               <div class="link_to_item"><a  target="_blank" href="https://anatol.com//screen-printing-presses"
                     class="btn button_go button red-button draw-red">Learn More</a></div>
            </div>
         </div>
         <div class="block_press block_dryers" >
            <div class="back">
            </div>
            <div class="front">
               <div class="image">
                  <a href="/products-category/screen-printing-conveyor-dryers/">
                     <svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny-ps" viewBox="0 0 552 552"
                        width="150" height="150">

                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.4 -2270.4L502.8 -2270.4C527.68 -2270.4 547.8 -2250.28 547.8 -2225.4L547.8 -1768.05C547.8 -1743.16 527.68 -1723.05 502.8 -1723.05L45.4 -1723.05C20.51 -1723.05 0.4 -1743.16 0.4 -1768.05L0.4 -2225.4C0.4 -2250.28 20.51 -2270.4 45.4 -2270.4Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" class="shp1"
                                    d="M274.1 -1927.8C236 -1927.8 205.2 -1958.6 205.2 -1996.7C205.2 -2034.8 236 -2065.6 274.1 -2065.6C312.2 -2065.6 343 -2034.8 343 -1996.7C343 -1958.6 312.2 -1927.8 274.1 -1927.8Z">
                                 </path>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -2204.4L280.8 -2204.4L280.8 -2044.53L267.4 -2044.53L267.4 -2204.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -1948.9L280.8 -1948.9L280.8 -1789.03L267.4 -1789.03L267.4 -1948.9Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M196.73 -2189.61L209.32 -2194.19L264 -2043.96L251.4 -2039.38L196.73 -2189.61Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M284.08 -1949.45L296.67 -1954.03L351.35 -1803.8L338.76 -1799.22L284.08 -1949.45Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M135.51 -2151.48L145.78 -2160.09L248.54 -2037.63L238.28 -2029.01L135.51 -2151.48Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M299.69 -1955.81L309.96 -1964.42L412.72 -1841.96L402.45 -1833.34L299.69 -1955.81Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M90.87 -2094.8L97.57 -2106.4L236.02 -2026.47L229.32 -2014.86L90.87 -2094.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M312.15 -1966.96L318.85 -1978.57L457.3 -1898.63L450.6 -1887.03L312.15 -1966.96Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M68.38 -2026.14L70.71 -2039.33L228.15 -2011.57L225.82 -1998.37L68.38 -2026.14Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M319.98 -1981.7L322.3 -1994.9L479.75 -1967.14L477.42 -1953.94L319.98 -1981.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M70.73 -1954.08L68.41 -1967.27L225.85 -1995.03L228.17 -1981.84L70.73 -1954.08Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M322.34 -1998.34L320.01 -2011.54L477.45 -2039.3L479.78 -2026.11L322.34 -1998.34Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M97.65 -1887.1L90.95 -1898.7L229.4 -1978.64L236.1 -1967.03L97.65 -1887.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M318.77 -2014.76L312.07 -2026.37L450.52 -2106.3L457.22 -2094.7L318.77 -2014.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M145.68 -1833.32L135.41 -1841.93L238.17 -1964.4L248.44 -1955.78L145.68 -1833.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M309.96 -2029.02L299.7 -2037.64L402.46 -2160.1L412.73 -2151.49L309.96 -2029.02Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M209.4 -1799.27L196.81 -1803.85L251.48 -1954.08L264.08 -1949.5L209.4 -1799.27Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M296.78 -2039.3L284.19 -2043.88L338.86 -2194.11L351.46 -2189.53L296.78 -2039.3Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.2 -2195.5L286.9 -2195.5C289.66 -2195.5 291.9 -2193.26 291.9 -2190.5L291.9 -2133.66C291.9 -2130.89 289.66 -2128.66 286.9 -2128.66L261.2 -2128.66C258.43 -2128.66 256.2 -2130.89 256.2 -2133.66L256.2 -2190.5C256.2 -2193.26 258.43 -2195.5 261.2 -2195.5Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.2 -2202.6L291.9 -2202.6L291.9 -2197.7L256.2 -2197.7L256.2 -2202.6Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M287 -1798.4L261.3 -1798.4C258.53 -1798.4 256.3 -1800.63 256.3 -1803.4L256.3 -1860.24C256.3 -1863.01 258.53 -1865.24 261.3 -1865.24L287 -1865.24C289.76 -1865.24 292 -1863.01 292 -1860.24L292 -1803.4C292 -1800.63 289.76 -1798.4 287 -1798.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M292 -1791.4L256.3 -1791.4L256.3 -1796.3L292 -1796.3L292 -1791.4Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M354.02 -1814.54L329.86 -1805.75C327.27 -1804.8 324.4 -1806.14 323.46 -1808.74L304.02 -1862.15C303.07 -1864.75 304.41 -1867.61 307 -1868.56L331.15 -1877.35C333.75 -1878.29 336.62 -1876.96 337.56 -1874.36L357 -1820.95C357.95 -1818.35 356.61 -1815.48 354.02 -1814.54Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.15 -1809.67L327.6 -1797.46L325.93 -1802.07L359.47 -1814.28L361.15 -1809.67Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M194.07 -2178.9L218.22 -2187.69C220.82 -2188.63 223.68 -2187.3 224.63 -2184.7L244.07 -2131.29C245.02 -2128.69 243.68 -2125.83 241.08 -2124.88L216.93 -2116.09C214.33 -2115.14 211.47 -2116.48 210.52 -2119.08L191.08 -2172.49C190.14 -2175.09 191.47 -2177.95 194.07 -2178.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.91 -2183.85L220.46 -2196.06L222.14 -2191.46L188.59 -2179.25L186.91 -2183.85Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.47 -1908.6L439.62 -1886.34C438.24 -1883.95 435.18 -1883.13 432.79 -1884.51L383.57 -1912.93C381.17 -1914.31 380.35 -1917.37 381.74 -1919.76L394.59 -1942.02C395.97 -1944.41 399.02 -1945.23 401.42 -1943.85L450.64 -1915.43C453.03 -1914.05 453.85 -1910.99 452.47 -1908.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.12 -1909.44L443.27 -1878.52L439.03 -1880.97L456.88 -1911.89L461.12 -1909.44Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.65 -2084.87L108.5 -2107.13C109.88 -2109.52 112.93 -2110.34 115.33 -2108.96L164.55 -2080.54C166.95 -2079.15 167.77 -2076.1 166.38 -2073.71L153.53 -2051.45C152.15 -2049.05 149.1 -2048.24 146.7 -2049.62L97.48 -2078.04C95.08 -2079.42 94.27 -2082.47 95.65 -2084.87Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.09 -2084.05L104.94 -2114.96L109.18 -2112.51L91.33 -2081.6L87.09 -2084.05Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M471.9 -1974.95L467.43 -1949.64C466.95 -1946.92 464.36 -1945.1 461.64 -1945.58L405.66 -1955.45C402.94 -1955.93 401.13 -1958.52 401.61 -1961.24L406.07 -1986.55C406.55 -1989.28 409.14 -1991.09 411.86 -1990.61L467.84 -1980.74C470.56 -1980.26 472.38 -1977.67 471.9 -1974.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.72 -1978.57L473.52 -1943.41L468.7 -1944.26L474.9 -1979.42L479.72 -1978.57Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M72.4 -2015.68L76.77 -2040.87C77.24 -2043.58 79.81 -2045.39 82.52 -2044.92L138.23 -2035.26C140.94 -2034.79 142.75 -2032.22 142.28 -2029.51L137.91 -2004.32C137.44 -2001.61 134.87 -1999.8 132.16 -2000.27L76.45 -2009.93C73.74 -2010.41 71.93 -2012.98 72.4 -2015.68Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.55 -2014.75L74.75 -2049.91L79.58 -2049.06L73.38 -2013.9L68.55 -2014.75Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M467.4 -2043.88L471.87 -2018.57C472.35 -2015.84 470.53 -2013.25 467.81 -2012.77L411.83 -2002.9C409.11 -2002.42 406.52 -2004.24 406.04 -2006.96L401.58 -2032.27C401.1 -2034.99 402.91 -2037.58 405.63 -2038.06L461.61 -2047.93C464.33 -2048.41 466.92 -2046.6 467.4 -2043.88Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M473.42 -2050.03L479.62 -2014.88L474.79 -2014.02L468.59 -2049.18L473.42 -2050.03Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M80.8 -1949.51L76.33 -1974.82C75.85 -1977.55 77.67 -1980.14 80.39 -1980.62L136.37 -1990.49C139.09 -1990.97 141.68 -1989.15 142.16 -1986.43L146.62 -1961.12C147.1 -1958.4 145.29 -1955.81 142.57 -1955.33L86.59 -1945.46C83.87 -1944.98 81.28 -1946.79 80.8 -1949.51Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M74.71 -1943.39L68.51 -1978.55L73.33 -1979.4L79.53 -1944.24L74.71 -1943.39Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.65 -2107.15L452.5 -2084.89C453.88 -2082.5 453.07 -2079.44 450.67 -2078.06L401.45 -2049.64C399.05 -2048.26 396 -2049.08 394.62 -2051.47L381.77 -2073.73C380.38 -2076.12 381.2 -2079.18 383.6 -2080.56L432.82 -2108.98C435.22 -2110.36 438.27 -2109.54 439.65 -2107.15Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.21 -2114.99L461.06 -2084.07L456.82 -2081.62L438.97 -2112.54L443.21 -2114.99Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.63 -1886.32L95.78 -1908.58C94.4 -1910.97 95.22 -1914.02 97.61 -1915.41L146.83 -1943.83C149.23 -1945.21 152.28 -1944.39 153.66 -1942L166.51 -1919.74C167.9 -1917.34 167.08 -1914.29 164.68 -1912.91L115.46 -1884.49C113.07 -1883.11 110.01 -1883.92 108.63 -1886.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M106.51 -1881.43L88.66 -1912.49L92.92 -1914.94L110.77 -1883.88L106.51 -1881.43Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M391.83 -2157.1L411.52 -2140.58C413.64 -2138.8 413.91 -2135.65 412.13 -2133.54L375.6 -2089.99C373.82 -2087.88 370.67 -2087.6 368.55 -2089.38L348.87 -2105.9C346.75 -2107.67 346.47 -2110.82 348.25 -2112.94L384.79 -2156.48C386.56 -2158.6 389.71 -2158.88 391.83 -2157.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.61 -2165.69L419.96 -2142.74L416.81 -2138.98L389.46 -2161.93L392.61 -2165.69Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M156.35 -1836.41L136.66 -1852.93C134.54 -1854.71 134.27 -1857.86 136.05 -1859.97L172.58 -1903.52C174.36 -1905.63 177.51 -1905.91 179.63 -1904.13L199.31 -1887.61C201.43 -1885.84 201.71 -1882.69 199.93 -1880.57L163.39 -1837.03C161.62 -1834.91 158.47 -1834.63 156.35 -1836.41Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.68 -1827.69L128.33 -1850.64L131.48 -1854.39L158.83 -1831.44L155.68 -1827.69Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M329.95 -2187.69L354.1 -2178.9C356.7 -2177.95 358.04 -2175.09 357.09 -2172.49L337.65 -2119.08C336.71 -2116.48 333.84 -2115.14 331.24 -2116.09L307.09 -2124.88C304.5 -2125.83 303.16 -2128.69 304.1 -2131.29L323.55 -2184.7C324.49 -2187.3 327.36 -2188.63 329.95 -2187.69Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M327.61 -2196.06L361.16 -2183.85L359.48 -2179.25L325.94 -2191.46L327.61 -2196.06Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M218.36 -1805.75L194.21 -1814.54C191.61 -1815.48 190.28 -1818.35 191.22 -1820.95L210.66 -1874.36C211.61 -1876.96 214.47 -1878.29 217.07 -1877.35L241.22 -1868.56C243.82 -1867.61 245.15 -1864.75 244.21 -1862.15L224.77 -1808.74C223.82 -1806.14 220.96 -1804.8 218.36 -1805.75Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M220.62 -1797.46L187.07 -1809.67L188.75 -1814.28L222.3 -1802.07L220.62 -1797.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M411.53 -1852.95L391.85 -1836.43C389.73 -1834.66 386.58 -1834.93 384.8 -1837.05L348.27 -1880.59C346.49 -1882.71 346.76 -1885.86 348.88 -1887.64L368.57 -1904.16C370.69 -1905.93 373.84 -1905.66 375.61 -1903.54L412.15 -1860C413.93 -1857.88 413.65 -1854.73 411.53 -1852.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M419.96 -1850.76L392.62 -1827.81L389.47 -1831.57L416.82 -1854.51L419.96 -1850.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M136.59 -2140.56L156.27 -2157.08C158.39 -2158.85 161.54 -2158.58 163.32 -2156.46L199.85 -2112.92C201.63 -2110.8 201.36 -2107.65 199.24 -2105.87L179.55 -2089.35C177.43 -2087.58 174.28 -2087.85 172.51 -2089.97L135.97 -2133.51C134.19 -2135.63 134.47 -2138.78 136.59 -2140.56Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M128.24 -2142.71L155.59 -2165.66L158.74 -2161.91L131.39 -2138.96L128.24 -2142.71Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -1702.6L502.7 -1702.6C527.59 -1702.6 547.7 -1682.49 547.7 -1657.6L547.7 -1200.25C547.7 -1175.37 527.59 -1155.25 502.7 -1155.25L45.3 -1155.25C20.41 -1155.25 0.3 -1175.37 0.3 -1200.25L0.3 -1657.6C0.3 -1682.49 20.41 -1702.6 45.3 -1702.6Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" class="shp1"
                                 d="M274 -1360C235.9 -1360 205.1 -1390.8 205.1 -1428.9C205.1 -1467 235.9 -1497.8 274 -1497.8C312.1 -1497.8 342.9 -1467 342.9 -1428.9C342.9 -1390.8 312.1 -1360 274 -1360Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -1636.5L280.7 -1636.5L280.7 -1476.63L267.3 -1476.63L267.3 -1636.5Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -1381.1L280.7 -1381.1L280.7 -1221.23L267.3 -1221.23L267.3 -1381.1Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M164.39 -1605.41L176 -1612.11L255.93 -1473.66L244.33 -1466.96L164.39 -1605.41Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M292.09 -1384.19L303.69 -1390.89L383.62 -1252.44L372.02 -1245.74L292.09 -1384.19Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M90.74 -1526.91L97.44 -1538.52L235.89 -1458.58L229.19 -1446.98L90.74 -1526.91Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M312.06 -1399.17L318.76 -1410.77L457.21 -1330.83L450.51 -1319.23L312.06 -1399.17Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M66.4 -1422.2L66.4 -1435.6L226.27 -1435.6L226.27 -1422.2L66.4 -1422.2Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M321.8 -1422.2L321.8 -1435.6L481.67 -1435.6L481.67 -1422.2L321.8 -1422.2Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M97.56 -1319.2L90.86 -1330.81L229.31 -1410.74L236.01 -1399.14L97.56 -1319.2Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M318.77 -1446.92L312.07 -1458.52L450.52 -1538.45L457.22 -1526.85L318.77 -1446.92Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M172.63 -1249.65L160.97 -1256.35L240.91 -1395.44L252.57 -1388.74L172.63 -1249.65Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M299.87 -1470L288.21 -1476.7L368.15 -1615.78L379.81 -1609.08L299.87 -1470Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.1 -1627.6L286.8 -1627.6C289.57 -1627.6 291.8 -1625.36 291.8 -1622.6L291.8 -1565.76C291.8 -1562.99 289.57 -1560.76 286.8 -1560.76L261.1 -1560.76C258.34 -1560.76 256.1 -1562.99 256.1 -1565.76L256.1 -1622.6C256.1 -1625.36 258.34 -1627.6 261.1 -1627.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.1 -1634.7L291.8 -1634.7L291.8 -1629.8L256.1 -1629.8L256.1 -1634.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M286.8 -1230.6L261.1 -1230.6C258.33 -1230.6 256.1 -1232.84 256.1 -1235.6L256.1 -1292.44C256.1 -1295.21 258.33 -1297.44 261.1 -1297.44L286.8 -1297.44C289.56 -1297.44 291.8 -1295.21 291.8 -1292.44L291.8 -1235.6C291.8 -1232.84 289.56 -1230.6 286.8 -1230.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M291.8 -1223.5L256.1 -1223.5L256.1 -1228.4L291.8 -1228.4L291.8 -1223.5Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M384.45 -1263.44L362.2 -1250.59C359.8 -1249.2 356.75 -1250.02 355.37 -1252.42L326.95 -1301.64C325.56 -1304.04 326.38 -1307.09 328.78 -1308.47L351.03 -1321.32C353.43 -1322.7 356.48 -1321.89 357.86 -1319.49L386.28 -1270.27C387.67 -1267.87 386.85 -1264.82 384.45 -1263.44Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.29 -1259.72L361.37 -1241.87L358.92 -1246.12L389.84 -1263.97L392.29 -1259.72Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M163.57 -1594.4L185.82 -1607.25C188.22 -1608.63 191.27 -1607.81 192.65 -1605.42L221.07 -1556.19C222.46 -1553.8 221.64 -1550.74 219.24 -1549.36L196.99 -1536.51C194.59 -1535.13 191.54 -1535.95 190.16 -1538.34L161.74 -1587.57C160.35 -1589.96 161.17 -1593.01 163.57 -1594.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.78 -1598.03L186.7 -1615.88L189.15 -1611.64L158.23 -1593.79L155.78 -1598.03Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.44 -1340.71L439.59 -1318.45C438.2 -1316.06 435.15 -1315.24 432.76 -1316.62L383.53 -1345.04C381.14 -1346.42 380.32 -1349.48 381.7 -1351.87L394.55 -1374.13C395.93 -1376.52 398.99 -1377.34 401.38 -1375.96L450.61 -1347.54C453 -1346.16 453.82 -1343.1 452.44 -1340.71Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.03 -1341.46L443.18 -1310.54L438.94 -1312.99L456.79 -1343.91L461.03 -1341.46Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.83 -1516.94L108.68 -1539.2C110.07 -1541.6 113.12 -1542.41 115.51 -1541.03L164.74 -1512.61C167.13 -1511.23 167.95 -1508.18 166.57 -1505.78L153.72 -1483.52C152.34 -1481.13 149.28 -1480.31 146.89 -1481.69L97.66 -1510.11C95.27 -1511.5 94.45 -1514.55 95.83 -1516.94Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.14 -1516.09L104.99 -1547L109.23 -1544.55L91.38 -1513.64L87.14 -1516.09Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M472.6 -1441.8L472.6 -1416.1C472.6 -1413.33 470.36 -1411.1 467.6 -1411.1L410.76 -1411.1C407.99 -1411.1 405.76 -1413.33 405.76 -1416.1L405.76 -1441.8C405.76 -1444.57 407.99 -1446.8 410.76 -1446.8L467.6 -1446.8C470.36 -1446.8 472.6 -1444.57 472.6 -1441.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.6 -1446.7L479.6 -1411L474.7 -1411L474.7 -1446.7L479.6 -1446.7Z"></path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M75.5 -1415.9L75.5 -1441.6C75.5 -1444.37 77.73 -1446.6 80.5 -1446.6L137.34 -1446.6C140.1 -1446.6 142.34 -1444.37 142.34 -1441.6L142.34 -1415.9C142.34 -1413.13 140.1 -1410.9 137.34 -1410.9L80.5 -1410.9C77.73 -1410.9 75.5 -1413.13 75.5 -1415.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.4 -1411L68.4 -1446.7L73.3 -1446.7L73.3 -1411L68.4 -1411Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.45 -1539.2L452.3 -1516.94C453.69 -1514.54 452.87 -1511.49 450.47 -1510.11L401.25 -1481.69C398.85 -1480.31 395.8 -1481.12 394.42 -1483.52L381.57 -1505.78C380.19 -1508.17 381 -1511.22 383.4 -1512.61L432.62 -1541.03C435.02 -1542.41 438.07 -1541.59 439.45 -1539.2Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.01 -1547.13L460.86 -1516.22L456.62 -1513.77L438.77 -1544.68L443.01 -1547.13Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.43 -1318.37L95.58 -1340.63C94.2 -1343.02 95.01 -1346.08 97.41 -1347.46L146.63 -1375.88C149.03 -1377.26 152.08 -1376.44 153.46 -1374.05L166.31 -1351.79C167.7 -1349.4 166.88 -1346.34 164.48 -1344.96L115.26 -1316.54C112.86 -1315.16 109.81 -1315.98 108.43 -1318.37Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M104.83 -1310.46L86.98 -1341.38L91.22 -1343.83L109.07 -1312.91L104.83 -1310.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M362.23 -1607.12L384.49 -1594.27C386.89 -1592.89 387.7 -1589.84 386.32 -1587.44L357.9 -1538.22C356.52 -1535.82 353.47 -1535.01 351.07 -1536.39L328.81 -1549.24C326.42 -1550.62 325.6 -1553.67 326.98 -1556.07L355.4 -1605.29C356.79 -1607.69 359.84 -1608.51 362.23 -1607.12Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.54 -1615.71L392.46 -1597.86L390.01 -1593.61L359.09 -1611.46L361.54 -1615.71Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M186.1 -1250.42L163.84 -1263.27C161.45 -1264.65 160.63 -1267.71 162.01 -1270.1L190.43 -1319.33C191.81 -1321.72 194.87 -1322.54 197.26 -1321.16L219.52 -1308.31C221.91 -1306.93 222.73 -1303.87 221.35 -1301.48L192.93 -1252.25C191.54 -1249.86 188.49 -1249.04 186.1 -1250.42Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.83 -1241.76L155.91 -1259.61L158.36 -1263.86L189.28 -1246.01L186.83 -1241.76Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -1136.8L502.7 -1136.8C527.59 -1136.8 547.7 -1116.68 547.7 -1091.8L547.7 -634.45C547.7 -609.56 527.59 -589.45 502.7 -589.45L45.3 -589.45C20.41 -589.45 0.3 -609.56 0.3 -634.45L0.3 -1091.8C0.3 -1116.68 20.41 -1136.8 45.3 -1136.8Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" fill-rule="evenodd" class="shp2"
                                    d="M512.4 -950.6L503.7 -844.3L269.3 -785.1C268.91 -785.19 268.53 -785.3 268.15 -785.43C267.78 -785.56 267.41 -785.71 267.05 -785.88C266.69 -786.05 266.34 -786.24 265.99 -786.44C265.65 -786.64 265.32 -786.86 265 -787.1L175.2 -859.3L164.9 -857.1L71 -934.7L69.6 -950.4L72 -954.4L246.2 -977.3L264.4 -970L458.7 -997.4L512.4 -950.6ZM438.6 -920.8C438.6 -920.8 442.9 -909.4 443.3 -905C443.3 -905 446.7 -919.2 449.6 -922.9L438.6 -920.8ZM411.4 -916.1C403 -907.8 401 -887.7 399.7 -882.1C398.4 -876.5 402.3 -876.2 402.3 -876.2C402.3 -876.2 430.3 -881.3 436.8 -883.5C443.3 -885.7 438.5 -904.9 436.8 -912.1C435.1 -919.3 431.4 -919.7 431.4 -919.7L411.4 -916.1ZM392.3 -912.2C392.3 -911.4 397.8 -900.3 397.8 -895.8C397.8 -895.8 400.9 -912.2 404.4 -914.2L392.3 -912.2ZM362 -906.7C355.8 -898.8 352.5 -877.8 351.6 -871.8C350.7 -865.8 354.9 -866.2 354.9 -866.2L391.4 -874.2C397.4 -875.9 392 -899.4 390 -905.2C388 -911 385 -910.9 385 -910.9L362 -906.7ZM343.8 -903.3C343.71 -903.2 343.63 -903.08 343.58 -902.95C343.53 -902.82 343.5 -902.69 343.5 -902.55C343.5 -902.41 343.53 -902.28 343.58 -902.15C343.63 -902.02 343.71 -901.9 343.8 -901.8C345 -900.6 349.3 -886.3 349.3 -886.3C349.3 -893.3 355.7 -905.2 355.7 -905.2L343.8 -903.3ZM343.8 -886C343.8 -886 340.7 -895.9 337 -901.5L300.1 -895C300.1 -895 295.1 -892.4 295.1 -889.5L295.1 -857.9C295.1 -857.9 295.5 -853.2 300.5 -854.4L343.3 -863.8C343.3 -863.8 350 -866.9 343.8 -886ZM248.9 -881.3L223.9 -897.4L222.6 -896.2L223.2 -875.5L248.9 -858L248.9 -881.3ZM314.2 -937.1C316.7 -937.6 317.1 -938.9 317.1 -938.9L317.1 -941C317.1 -941.1 317.1 -941.2 317.08 -941.3C317.06 -941.4 317.04 -941.49 317 -941.59C316.97 -941.68 316.93 -941.77 316.88 -941.86C316.83 -941.94 316.77 -942.03 316.7 -942.1L295.1 -966.8C294.82 -967.12 294.5 -967.41 294.15 -967.66C293.8 -967.91 293.42 -968.11 293.02 -968.27C292.62 -968.42 292.21 -968.53 291.78 -968.59C291.36 -968.64 290.93 -968.65 290.5 -968.6L236.8 -961.1C233.5 -960.8 233.4 -959.3 233.4 -959.3L233.4 -956.2L253.2 -930.8C253.5 -930.33 253.87 -929.9 254.3 -929.54C254.72 -929.17 255.2 -928.88 255.71 -928.65C256.23 -928.43 256.77 -928.29 257.33 -928.23C257.89 -928.17 258.45 -928.19 259 -928.3L314.2 -937.1ZM335.1 -818.6C341.5 -825 346 -854.2 346 -854.2C346 -857.8 341.7 -858 341.7 -858L298.7 -848.9C294.9 -847.9 295.1 -846 295.1 -846L295.1 -812.9C296.4 -809.4 299.2 -809.8 299.2 -809.8L335.1 -818.6ZM353.7 -822.6C353.7 -822.6 347.9 -834.2 348.3 -837.8C348.3 -837.8 343.6 -823.3 342.1 -819.7L353.7 -822.6ZM383.2 -830.2C390.1 -839 394.1 -864 394.1 -864C394.1 -869.4 389.3 -868.4 389.3 -868.4L355.1 -861.1C348.5 -858.4 351.6 -845.1 351.6 -845.1C355.7 -825.9 360.9 -824.8 360.9 -824.8L383.2 -830.2ZM400.7 -834C400.7 -834 395.7 -844.8 395.7 -849C395.7 -850.4 391.6 -833.3 389.6 -831.2L400.7 -834ZM427.7 -840.5C433.5 -844.8 439.4 -868.7 439.4 -873.8C439.4 -878.9 435.2 -878.2 435.2 -878.2L403.3 -871.4C399.7 -869.8 398.5 -868.5 399.5 -855.8C400.5 -843.1 407 -835.8 407 -835.8L427.7 -840.5ZM445.5 -844.4C445.5 -844.4 441 -857.4 441 -859C441 -859 436.2 -843.2 435.3 -842.3L445.5 -844.4ZM484 -858C484 -858 485.9 -882.9 485.9 -885.9C485.9 -888.9 482.5 -888.3 482.5 -888.3L448.1 -881.1C437.8 -877.3 450.2 -846.2 450.2 -846.2C450.2 -846.2 476 -852.2 479.4 -852.8C482.8 -853.4 484 -858 484 -858ZM488.9 -924.7C489.02 -925.25 489.02 -925.82 488.91 -926.38C488.8 -926.93 488.58 -927.46 488.26 -927.92C487.94 -928.39 487.54 -928.79 487.06 -929.09C486.59 -929.4 486.06 -929.6 485.5 -929.7L456.6 -924.4C451.6 -922.3 445.4 -894.7 444.8 -889.9C444.2 -885.1 447.4 -886 447.4 -886L482.6 -893C486.4 -893.7 486.9 -898 486.9 -898L488.9 -924.7Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M243.3 -955.7C243.3 -955.7 242 -955 242.8 -954.2L255.8 -938.1C255.8 -938.1 256.1 -937.2 258.6 -937.6L307.5 -945.2C307.5 -945.2 309.1 -945.3 307.8 -946.6L293.8 -962.4C293.8 -962.4 293.5 -963 291.4 -962.6L243.6 -955.7">
                                 </path>
                              </g>
                              <path id="Layer" class="shp2"
                                 d="M45.9 -932.9C45.9 -932.9 9.1 -923.3 27.6 -904.8L268.5 -704.1C268.5 -704.1 289.8 -690.1 346.4 -704.1L496 -752.8L350 -697.9C350 -697.9 319.9 -676.1 264.3 -693.5L22.4 -898.4C22.4 -898.4 6.3 -926.2 45.9 -932.9Z">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M83.7 -868.7C87.1 -871.9 90.9 -876.7 90.1 -881.8C89.3 -886.9 84.9 -888.2 83.4 -893.1C82.3 -896.5 82.5 -901.9 89.1 -910.1">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M116.2 -842.3C119.6 -845.6 123.5 -850.4 122.6 -855.5C121.7 -860.6 117.4 -861.8 115.9 -866.7C114.4 -871.6 115.1 -875.6 121.7 -883.7">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M148.9 -817.1C152.3 -820.4 156.1 -825.2 155.2 -830.3C154.3 -835.4 150.1 -836.7 148.6 -841.5C147.1 -846.3 147.7 -850.4 154.3 -858.5">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M207.7 -775.7C211.1 -779 214.9 -783.8 214.1 -788.9C213.3 -794 208.9 -795.3 207.4 -800.1C205.9 -804.9 206.6 -809 213.2 -817.1">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M177.3 -796.4C180.7 -799.7 184.6 -804.5 183.7 -809.6C182.8 -814.7 178.6 -816 177 -820.8C175.4 -825.6 176.2 -829.7 182.8 -837.8">
                              </path>
                           </g>
                        </g>
                        <g id="Layer">
                           <g id="Layer">
                              <path id="Layer" class="shp2"
                                 d="M49.3 154.7L51 169.1L82 168.4L80.6 154.2L49.3 154.7L49.3 154.7Z"></path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M513.1 288.1L508.9 309.3L499.8 310.7L494.9 308.3C494.9 308.3 505.5 292.9 488.1 284.5L481.1 284.8L344.4 227.1L111.5 245.3L121.2 344.2L124.7 373.6L126.2 398.7L121.9 399.4L126.4 447.8L418.1 383.1L423.3 325.7L445.1 322.3L432.5 394.9L427.1 396.1L425.1 394.3L128 463.6L128 465.9L118.4 467L111.7 401.6L110 402.1L107.9 392.2L103.2 347.1L102.9 336.7L60.8 342.7L35 148.7L51.9 141.6L49 116.4L57.7 116.4L54.8 89.9C54.8 89.9 73.4 87.8 82.6 90.3C82.6 90.3 83.7 89.9 84.1 94.9L86 116.6L91.7 116.6L93.4 118.2L94.8 136.4L240.5 136.2L377.8 149.9L373.8 199.5L371.1 230.4L512.6 286.6C512.6 286.6 513.3 286.6 513.1 288.1ZM83.1 170.5L81.5 152.8C81.49 152.7 81.47 152.6 81.44 152.5C81.4 152.41 81.35 152.32 81.29 152.24C81.23 152.16 81.15 152.09 81.07 152.03C80.99 151.97 80.9 151.93 80.8 151.9L49.6 152.2C47.7 152.2 47.7 152.8 47.7 152.8C47.7 152.8 49.9 168.7 49.9 170.1C49.9 171.5 50.7 171.3 50.7 171.3L82.3 170.7C83.1 170.7 83.1 170.5 83.1 170.5ZM370.5 222C370.5 222 371.2 222 371.4 220.9L373.3 197C373.3 197 373.4 196.2 372.3 196.2L99.5 210C99.33 210.05 99.17 210.12 99.02 210.22C98.88 210.33 98.76 210.45 98.66 210.6C98.56 210.74 98.48 210.91 98.44 211.08C98.4 211.25 98.38 211.42 98.4 211.6L101.1 240.8C101.1 240.8 101 241.8 102.9 241.8L370.5 222Z">
                              </path>
                              <path id="Layer" class="shp4" d="M106.4 212L109 238.5"></path>
                              <path id="Layer" class="shp5" d="M367.7 198.2L365.9 220.3"></path>
                              <g id="Layer">
                                 <path id="Layer" class="shp6"
                                    d="M130.4 247.2L153.3 336.4C153.3 336.4 157.4 363.1 154.3 366.2L484.3 311.9C484.3 311.9 494.5 298.3 479.7 287.6L346.7 230.5L130.4 247.2Z">
                                 </path>
                              </g>
                              <path id="Layer" class="shp2"
                                 d="M147.6 332L130.8 334.5L131.5 343.3L119.6 345.1L121.3 360.4L132.8 358.7L133.9 368.6L151.4 365.8C151.4 365.8 154.6 339.8 147.6 332Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M480.7 285.3L487.2 284.8C487.2 284.8 503.5 290.7 493.9 308.3L488.8 309.2C488.8 309.2 496.8 296.6 480.7 285.3Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp7"
                                    d="M179.3 117.3C183.5 112.8 188.2 106.3 187.2 99.3C186.2 92.3 180.8 90.6 178.9 83.9C177.6 79.2 177.9 71.8 186.1 60.7">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M218.1 117.3C222.3 112.8 227 106.3 225.9 99.3C224.8 92.3 219.6 90.6 217.7 83.9C216.4 79.2 216.7 71.8 224.8 60.7">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M260.5 117.3C264.7 112.8 269.4 106.3 268.4 99.3C267.4 92.3 262 90.6 260.1 83.9C258.8 79.2 259.1 71.8 267.2 60.7">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M300 117.3C304.2 112.8 308.9 106.3 307.9 99.3C306.9 92.3 301.5 90.6 299.6 83.9C298.3 79.2 298.6 71.8 306.8 60.7">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M340.1 117.3C344.3 112.8 349 106.3 348 99.3C347 92.3 341.6 90.6 339.8 83.9C338.4 79.2 338.7 71.8 346.9 60.7">
                                 </path>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 570.4L502.7 570.4C527.59 570.4 547.7 590.51 547.7 615.4L547.7 1072.75C547.7 1097.64 527.59 1117.75 502.7 1117.75L45.3 1117.75C20.41 1117.75 0.3 1097.64 0.3 1072.75L0.3 615.4C0.3 590.51 20.41 570.4 45.3 570.4Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M434.1 714.2L419.6 772.5L275.8 772.5L282.3 708.5C282.3 708.5 287.6 692.6 303.9 692.6L421.1 692.6C421.1 692.6 437.5 692.6 434.1 714.2ZM432.2 712.5C432.2 712.5 433 694.7 421.3 697C409.6 699.3 410.4 769 410.4 769L418.2 769L432.2 712.5Z">
                              </path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M510.1 736.1L374 955.9L38 942.6L268.2 736.1L274 736.1L271.6 759.5L92.5 919L111.5 919L272.4 779.4L266.8 804.3L416.2 806.8L425.3 770.8L464.9 770.8L473.8 754.3L430.4 754.3L434.6 736.1L510.1 736.1ZM410.4 814.7L260.2 810.7L144.3 921.4L327.5 930L410.4 814.7Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M38 946.5L42.2 977.9L382.3 995.6L375.5 961.9L38 946.5L38 946.5Z"></path>
                           </g>
                        </g>
                     </svg>
                  </a>
               </div>
               <h4>Conveyor Dryers</h4>
               <div class="descr_to_item">
                  <ul>
                     <li>Ultra Electric Dryer</li>
                     <li>Solutions Electric Dryer</li>
                     <li>Vulcan Gas Conveyor Dryers</li>
                  </ul>
               </div>
               <div class="link_to_item"><a  target="_blank" href="https://anatol.com//products-category/screen-printing-conveyor-dryers/"
                     class="btn button_go button red-button draw-red">Learn More</a></div>
            </div>
         </div>
         <div class="block_press block_flash">
            <div class="back">

            </div>
            <div class="front">
               <div class="image">
                  <a href="/products-category/flash-cure-units/">
                     <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 552 552"
                        width="150" height="150">
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.4 -2270.4L502.8 -2270.4C527.68 -2270.4 547.8 -2250.28 547.8 -2225.4L547.8 -1768.05C547.8 -1743.16 527.68 -1723.05 502.8 -1723.05L45.4 -1723.05C20.51 -1723.05 0.4 -1743.16 0.4 -1768.05L0.4 -2225.4C0.4 -2250.28 20.51 -2270.4 45.4 -2270.4Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" class="shp1"
                                    d="M274.1 -1927.8C236 -1927.8 205.2 -1958.6 205.2 -1996.7C205.2 -2034.8 236 -2065.6 274.1 -2065.6C312.2 -2065.6 343 -2034.8 343 -1996.7C343 -1958.6 312.2 -1927.8 274.1 -1927.8Z">
                                 </path>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -2204.4L280.8 -2204.4L280.8 -2044.53L267.4 -2044.53L267.4 -2204.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -1948.9L280.8 -1948.9L280.8 -1789.03L267.4 -1789.03L267.4 -1948.9Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M196.73 -2189.61L209.32 -2194.19L264 -2043.96L251.4 -2039.38L196.73 -2189.61Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M284.08 -1949.45L296.67 -1954.03L351.35 -1803.8L338.76 -1799.22L284.08 -1949.45Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M135.51 -2151.48L145.78 -2160.09L248.54 -2037.63L238.28 -2029.01L135.51 -2151.48Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M299.69 -1955.81L309.96 -1964.42L412.72 -1841.96L402.45 -1833.34L299.69 -1955.81Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M90.87 -2094.8L97.57 -2106.4L236.02 -2026.47L229.32 -2014.86L90.87 -2094.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M312.15 -1966.96L318.85 -1978.57L457.3 -1898.63L450.6 -1887.03L312.15 -1966.96Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M68.38 -2026.14L70.71 -2039.33L228.15 -2011.57L225.82 -1998.37L68.38 -2026.14Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M319.98 -1981.7L322.3 -1994.9L479.75 -1967.14L477.42 -1953.94L319.98 -1981.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M70.73 -1954.08L68.41 -1967.27L225.85 -1995.03L228.17 -1981.84L70.73 -1954.08Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M322.34 -1998.34L320.01 -2011.54L477.45 -2039.3L479.78 -2026.11L322.34 -1998.34Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M97.65 -1887.1L90.95 -1898.7L229.4 -1978.64L236.1 -1967.03L97.65 -1887.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M318.77 -2014.76L312.07 -2026.37L450.52 -2106.3L457.22 -2094.7L318.77 -2014.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M145.68 -1833.32L135.41 -1841.93L238.17 -1964.4L248.44 -1955.78L145.68 -1833.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M309.96 -2029.02L299.7 -2037.64L402.46 -2160.1L412.73 -2151.49L309.96 -2029.02Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M209.4 -1799.27L196.81 -1803.85L251.48 -1954.08L264.08 -1949.5L209.4 -1799.27Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M296.78 -2039.3L284.19 -2043.88L338.86 -2194.11L351.46 -2189.53L296.78 -2039.3Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.2 -2195.5L286.9 -2195.5C289.66 -2195.5 291.9 -2193.26 291.9 -2190.5L291.9 -2133.66C291.9 -2130.89 289.66 -2128.66 286.9 -2128.66L261.2 -2128.66C258.43 -2128.66 256.2 -2130.89 256.2 -2133.66L256.2 -2190.5C256.2 -2193.26 258.43 -2195.5 261.2 -2195.5Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.2 -2202.6L291.9 -2202.6L291.9 -2197.7L256.2 -2197.7L256.2 -2202.6Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M287 -1798.4L261.3 -1798.4C258.53 -1798.4 256.3 -1800.63 256.3 -1803.4L256.3 -1860.24C256.3 -1863.01 258.53 -1865.24 261.3 -1865.24L287 -1865.24C289.76 -1865.24 292 -1863.01 292 -1860.24L292 -1803.4C292 -1800.63 289.76 -1798.4 287 -1798.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M292 -1791.4L256.3 -1791.4L256.3 -1796.3L292 -1796.3L292 -1791.4Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M354.02 -1814.54L329.86 -1805.75C327.27 -1804.8 324.4 -1806.14 323.46 -1808.74L304.02 -1862.15C303.07 -1864.75 304.41 -1867.61 307 -1868.56L331.15 -1877.35C333.75 -1878.29 336.62 -1876.96 337.56 -1874.36L357 -1820.95C357.95 -1818.35 356.61 -1815.48 354.02 -1814.54Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.15 -1809.67L327.6 -1797.46L325.93 -1802.07L359.47 -1814.28L361.15 -1809.67Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M194.07 -2178.9L218.22 -2187.69C220.82 -2188.63 223.68 -2187.3 224.63 -2184.7L244.07 -2131.29C245.02 -2128.69 243.68 -2125.83 241.08 -2124.88L216.93 -2116.09C214.33 -2115.14 211.47 -2116.48 210.52 -2119.08L191.08 -2172.49C190.14 -2175.09 191.47 -2177.95 194.07 -2178.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.91 -2183.85L220.46 -2196.06L222.14 -2191.46L188.59 -2179.25L186.91 -2183.85Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.47 -1908.6L439.62 -1886.34C438.24 -1883.95 435.18 -1883.13 432.79 -1884.51L383.57 -1912.93C381.17 -1914.31 380.35 -1917.37 381.74 -1919.76L394.59 -1942.02C395.97 -1944.41 399.02 -1945.23 401.42 -1943.85L450.64 -1915.43C453.03 -1914.05 453.85 -1910.99 452.47 -1908.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.12 -1909.44L443.27 -1878.52L439.03 -1880.97L456.88 -1911.89L461.12 -1909.44Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.65 -2084.87L108.5 -2107.13C109.88 -2109.52 112.93 -2110.34 115.33 -2108.96L164.55 -2080.54C166.95 -2079.15 167.77 -2076.1 166.38 -2073.71L153.53 -2051.45C152.15 -2049.05 149.1 -2048.24 146.7 -2049.62L97.48 -2078.04C95.08 -2079.42 94.27 -2082.47 95.65 -2084.87Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.09 -2084.05L104.94 -2114.96L109.18 -2112.51L91.33 -2081.6L87.09 -2084.05Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M471.9 -1974.95L467.43 -1949.64C466.95 -1946.92 464.36 -1945.1 461.64 -1945.58L405.66 -1955.45C402.94 -1955.93 401.13 -1958.52 401.61 -1961.24L406.07 -1986.55C406.55 -1989.28 409.14 -1991.09 411.86 -1990.61L467.84 -1980.74C470.56 -1980.26 472.38 -1977.67 471.9 -1974.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.72 -1978.57L473.52 -1943.41L468.7 -1944.26L474.9 -1979.42L479.72 -1978.57Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M72.4 -2015.68L76.77 -2040.87C77.24 -2043.58 79.81 -2045.39 82.52 -2044.92L138.23 -2035.26C140.94 -2034.79 142.75 -2032.22 142.28 -2029.51L137.91 -2004.32C137.44 -2001.61 134.87 -1999.8 132.16 -2000.27L76.45 -2009.93C73.74 -2010.41 71.93 -2012.98 72.4 -2015.68Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.55 -2014.75L74.75 -2049.91L79.58 -2049.06L73.38 -2013.9L68.55 -2014.75Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M467.4 -2043.88L471.87 -2018.57C472.35 -2015.84 470.53 -2013.25 467.81 -2012.77L411.83 -2002.9C409.11 -2002.42 406.52 -2004.24 406.04 -2006.96L401.58 -2032.27C401.1 -2034.99 402.91 -2037.58 405.63 -2038.06L461.61 -2047.93C464.33 -2048.41 466.92 -2046.6 467.4 -2043.88Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M473.42 -2050.03L479.62 -2014.88L474.79 -2014.02L468.59 -2049.18L473.42 -2050.03Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M80.8 -1949.51L76.33 -1974.82C75.85 -1977.55 77.67 -1980.14 80.39 -1980.62L136.37 -1990.49C139.09 -1990.97 141.68 -1989.15 142.16 -1986.43L146.62 -1961.12C147.1 -1958.4 145.29 -1955.81 142.57 -1955.33L86.59 -1945.46C83.87 -1944.98 81.28 -1946.79 80.8 -1949.51Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M74.71 -1943.39L68.51 -1978.55L73.33 -1979.4L79.53 -1944.24L74.71 -1943.39Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.65 -2107.15L452.5 -2084.89C453.88 -2082.5 453.07 -2079.44 450.67 -2078.06L401.45 -2049.64C399.05 -2048.26 396 -2049.08 394.62 -2051.47L381.77 -2073.73C380.38 -2076.12 381.2 -2079.18 383.6 -2080.56L432.82 -2108.98C435.22 -2110.36 438.27 -2109.54 439.65 -2107.15Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.21 -2114.99L461.06 -2084.07L456.82 -2081.62L438.97 -2112.54L443.21 -2114.99Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.63 -1886.32L95.78 -1908.58C94.4 -1910.97 95.22 -1914.02 97.61 -1915.41L146.83 -1943.83C149.23 -1945.21 152.28 -1944.39 153.66 -1942L166.51 -1919.74C167.9 -1917.34 167.08 -1914.29 164.68 -1912.91L115.46 -1884.49C113.07 -1883.11 110.01 -1883.92 108.63 -1886.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M106.51 -1881.43L88.66 -1912.49L92.92 -1914.94L110.77 -1883.88L106.51 -1881.43Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M391.83 -2157.1L411.52 -2140.58C413.64 -2138.8 413.91 -2135.65 412.13 -2133.54L375.6 -2089.99C373.82 -2087.88 370.67 -2087.6 368.55 -2089.38L348.87 -2105.9C346.75 -2107.67 346.47 -2110.82 348.25 -2112.94L384.79 -2156.48C386.56 -2158.6 389.71 -2158.88 391.83 -2157.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.61 -2165.69L419.96 -2142.74L416.81 -2138.98L389.46 -2161.93L392.61 -2165.69Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M156.35 -1836.41L136.66 -1852.93C134.54 -1854.71 134.27 -1857.86 136.05 -1859.97L172.58 -1903.52C174.36 -1905.63 177.51 -1905.91 179.63 -1904.13L199.31 -1887.61C201.43 -1885.84 201.71 -1882.69 199.93 -1880.57L163.39 -1837.03C161.62 -1834.91 158.47 -1834.63 156.35 -1836.41Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.68 -1827.69L128.33 -1850.64L131.48 -1854.39L158.83 -1831.44L155.68 -1827.69Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M329.95 -2187.69L354.1 -2178.9C356.7 -2177.95 358.04 -2175.09 357.09 -2172.49L337.65 -2119.08C336.71 -2116.48 333.84 -2115.14 331.24 -2116.09L307.09 -2124.88C304.5 -2125.83 303.16 -2128.69 304.1 -2131.29L323.55 -2184.7C324.49 -2187.3 327.36 -2188.63 329.95 -2187.69Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M327.61 -2196.06L361.16 -2183.85L359.48 -2179.25L325.94 -2191.46L327.61 -2196.06Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M218.36 -1805.75L194.21 -1814.54C191.61 -1815.48 190.28 -1818.35 191.22 -1820.95L210.66 -1874.36C211.61 -1876.96 214.47 -1878.29 217.07 -1877.35L241.22 -1868.56C243.82 -1867.61 245.15 -1864.75 244.21 -1862.15L224.77 -1808.74C223.82 -1806.14 220.96 -1804.8 218.36 -1805.75Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M220.62 -1797.46L187.07 -1809.67L188.75 -1814.28L222.3 -1802.07L220.62 -1797.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M411.53 -1852.95L391.85 -1836.43C389.73 -1834.66 386.58 -1834.93 384.8 -1837.05L348.27 -1880.59C346.49 -1882.71 346.76 -1885.86 348.88 -1887.64L368.57 -1904.16C370.69 -1905.93 373.84 -1905.66 375.61 -1903.54L412.15 -1860C413.93 -1857.88 413.65 -1854.73 411.53 -1852.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M419.96 -1850.76L392.62 -1827.81L389.47 -1831.57L416.82 -1854.51L419.96 -1850.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M136.59 -2140.56L156.27 -2157.08C158.39 -2158.85 161.54 -2158.58 163.32 -2156.46L199.85 -2112.92C201.63 -2110.8 201.36 -2107.65 199.24 -2105.87L179.55 -2089.35C177.43 -2087.58 174.28 -2087.85 172.51 -2089.97L135.97 -2133.51C134.19 -2135.63 134.47 -2138.78 136.59 -2140.56Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M128.24 -2142.71L155.59 -2165.66L158.74 -2161.91L131.39 -2138.96L128.24 -2142.71Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -1702.6L502.7 -1702.6C527.59 -1702.6 547.7 -1682.49 547.7 -1657.6L547.7 -1200.25C547.7 -1175.37 527.59 -1155.25 502.7 -1155.25L45.3 -1155.25C20.41 -1155.25 0.3 -1175.37 0.3 -1200.25L0.3 -1657.6C0.3 -1682.49 20.41 -1702.6 45.3 -1702.6Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" class="shp1"
                                 d="M274 -1360C235.9 -1360 205.1 -1390.8 205.1 -1428.9C205.1 -1467 235.9 -1497.8 274 -1497.8C312.1 -1497.8 342.9 -1467 342.9 -1428.9C342.9 -1390.8 312.1 -1360 274 -1360Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -1636.5L280.7 -1636.5L280.7 -1476.63L267.3 -1476.63L267.3 -1636.5Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -1381.1L280.7 -1381.1L280.7 -1221.23L267.3 -1221.23L267.3 -1381.1Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M164.39 -1605.41L176 -1612.11L255.93 -1473.66L244.33 -1466.96L164.39 -1605.41Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M292.09 -1384.19L303.69 -1390.89L383.62 -1252.44L372.02 -1245.74L292.09 -1384.19Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M90.74 -1526.91L97.44 -1538.52L235.89 -1458.58L229.19 -1446.98L90.74 -1526.91Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M312.06 -1399.17L318.76 -1410.77L457.21 -1330.83L450.51 -1319.23L312.06 -1399.17Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M66.4 -1422.2L66.4 -1435.6L226.27 -1435.6L226.27 -1422.2L66.4 -1422.2Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M321.8 -1422.2L321.8 -1435.6L481.67 -1435.6L481.67 -1422.2L321.8 -1422.2Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M97.56 -1319.2L90.86 -1330.81L229.31 -1410.74L236.01 -1399.14L97.56 -1319.2Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M318.77 -1446.92L312.07 -1458.52L450.52 -1538.45L457.22 -1526.85L318.77 -1446.92Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M172.63 -1249.65L160.97 -1256.35L240.91 -1395.44L252.57 -1388.74L172.63 -1249.65Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M299.87 -1470L288.21 -1476.7L368.15 -1615.78L379.81 -1609.08L299.87 -1470Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.1 -1627.6L286.8 -1627.6C289.57 -1627.6 291.8 -1625.36 291.8 -1622.6L291.8 -1565.76C291.8 -1562.99 289.57 -1560.76 286.8 -1560.76L261.1 -1560.76C258.34 -1560.76 256.1 -1562.99 256.1 -1565.76L256.1 -1622.6C256.1 -1625.36 258.34 -1627.6 261.1 -1627.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.1 -1634.7L291.8 -1634.7L291.8 -1629.8L256.1 -1629.8L256.1 -1634.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M286.8 -1230.6L261.1 -1230.6C258.33 -1230.6 256.1 -1232.84 256.1 -1235.6L256.1 -1292.44C256.1 -1295.21 258.33 -1297.44 261.1 -1297.44L286.8 -1297.44C289.56 -1297.44 291.8 -1295.21 291.8 -1292.44L291.8 -1235.6C291.8 -1232.84 289.56 -1230.6 286.8 -1230.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M291.8 -1223.5L256.1 -1223.5L256.1 -1228.4L291.8 -1228.4L291.8 -1223.5Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M384.45 -1263.44L362.2 -1250.59C359.8 -1249.2 356.75 -1250.02 355.37 -1252.42L326.95 -1301.64C325.56 -1304.04 326.38 -1307.09 328.78 -1308.47L351.03 -1321.32C353.43 -1322.7 356.48 -1321.89 357.86 -1319.49L386.28 -1270.27C387.67 -1267.87 386.85 -1264.82 384.45 -1263.44Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.29 -1259.72L361.37 -1241.87L358.92 -1246.12L389.84 -1263.97L392.29 -1259.72Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M163.57 -1594.4L185.82 -1607.25C188.22 -1608.63 191.27 -1607.81 192.65 -1605.42L221.07 -1556.19C222.46 -1553.8 221.64 -1550.74 219.24 -1549.36L196.99 -1536.51C194.59 -1535.13 191.54 -1535.95 190.16 -1538.34L161.74 -1587.57C160.35 -1589.96 161.17 -1593.01 163.57 -1594.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.78 -1598.03L186.7 -1615.88L189.15 -1611.64L158.23 -1593.79L155.78 -1598.03Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.44 -1340.71L439.59 -1318.45C438.2 -1316.06 435.15 -1315.24 432.76 -1316.62L383.53 -1345.04C381.14 -1346.42 380.32 -1349.48 381.7 -1351.87L394.55 -1374.13C395.93 -1376.52 398.99 -1377.34 401.38 -1375.96L450.61 -1347.54C453 -1346.16 453.82 -1343.1 452.44 -1340.71Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.03 -1341.46L443.18 -1310.54L438.94 -1312.99L456.79 -1343.91L461.03 -1341.46Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.83 -1516.94L108.68 -1539.2C110.07 -1541.6 113.12 -1542.41 115.51 -1541.03L164.74 -1512.61C167.13 -1511.23 167.95 -1508.18 166.57 -1505.78L153.72 -1483.52C152.34 -1481.13 149.28 -1480.31 146.89 -1481.69L97.66 -1510.11C95.27 -1511.5 94.45 -1514.55 95.83 -1516.94Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.14 -1516.09L104.99 -1547L109.23 -1544.55L91.38 -1513.64L87.14 -1516.09Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M472.6 -1441.8L472.6 -1416.1C472.6 -1413.33 470.36 -1411.1 467.6 -1411.1L410.76 -1411.1C407.99 -1411.1 405.76 -1413.33 405.76 -1416.1L405.76 -1441.8C405.76 -1444.57 407.99 -1446.8 410.76 -1446.8L467.6 -1446.8C470.36 -1446.8 472.6 -1444.57 472.6 -1441.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.6 -1446.7L479.6 -1411L474.7 -1411L474.7 -1446.7L479.6 -1446.7Z"></path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M75.5 -1415.9L75.5 -1441.6C75.5 -1444.37 77.73 -1446.6 80.5 -1446.6L137.34 -1446.6C140.1 -1446.6 142.34 -1444.37 142.34 -1441.6L142.34 -1415.9C142.34 -1413.13 140.1 -1410.9 137.34 -1410.9L80.5 -1410.9C77.73 -1410.9 75.5 -1413.13 75.5 -1415.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.4 -1411L68.4 -1446.7L73.3 -1446.7L73.3 -1411L68.4 -1411Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.45 -1539.2L452.3 -1516.94C453.69 -1514.54 452.87 -1511.49 450.47 -1510.11L401.25 -1481.69C398.85 -1480.31 395.8 -1481.12 394.42 -1483.52L381.57 -1505.78C380.19 -1508.17 381 -1511.22 383.4 -1512.61L432.62 -1541.03C435.02 -1542.41 438.07 -1541.59 439.45 -1539.2Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.01 -1547.13L460.86 -1516.22L456.62 -1513.77L438.77 -1544.68L443.01 -1547.13Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.43 -1318.37L95.58 -1340.63C94.2 -1343.02 95.01 -1346.08 97.41 -1347.46L146.63 -1375.88C149.03 -1377.26 152.08 -1376.44 153.46 -1374.05L166.31 -1351.79C167.7 -1349.4 166.88 -1346.34 164.48 -1344.96L115.26 -1316.54C112.86 -1315.16 109.81 -1315.98 108.43 -1318.37Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M104.83 -1310.46L86.98 -1341.38L91.22 -1343.83L109.07 -1312.91L104.83 -1310.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M362.23 -1607.12L384.49 -1594.27C386.89 -1592.89 387.7 -1589.84 386.32 -1587.44L357.9 -1538.22C356.52 -1535.82 353.47 -1535.01 351.07 -1536.39L328.81 -1549.24C326.42 -1550.62 325.6 -1553.67 326.98 -1556.07L355.4 -1605.29C356.79 -1607.69 359.84 -1608.51 362.23 -1607.12Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.54 -1615.71L392.46 -1597.86L390.01 -1593.61L359.09 -1611.46L361.54 -1615.71Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M186.1 -1250.42L163.84 -1263.27C161.45 -1264.65 160.63 -1267.71 162.01 -1270.1L190.43 -1319.33C191.81 -1321.72 194.87 -1322.54 197.26 -1321.16L219.52 -1308.31C221.91 -1306.93 222.73 -1303.87 221.35 -1301.48L192.93 -1252.25C191.54 -1249.86 188.49 -1249.04 186.1 -1250.42Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.83 -1241.76L155.91 -1259.61L158.36 -1263.86L189.28 -1246.01L186.83 -1241.76Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" fill-rule="evenodd" class="shp2"
                                    d="M512.4 190.4L503.7 296.7L269.3 355.9C268.91 355.81 268.53 355.7 268.15 355.57C267.78 355.44 267.41 355.29 267.05 355.12C266.69 354.95 266.34 354.76 265.99 354.56C265.65 354.36 265.32 354.14 265 353.9L175.2 281.7L164.9 283.9L71 206.3L69.6 190.6L72 186.6L246.2 163.7L264.4 171L458.7 143.6L512.4 190.4ZM438.6 220.2C438.6 220.2 442.9 231.6 443.3 236C443.3 236 446.7 221.8 449.6 218.1L438.6 220.2ZM411.4 224.9C403 233.2 401 253.3 399.7 258.9C398.4 264.5 402.3 264.8 402.3 264.8C402.3 264.8 430.3 259.7 436.8 257.5C443.3 255.3 438.5 236.1 436.8 228.9C435.1 221.7 431.4 221.3 431.4 221.3L411.4 224.9ZM392.3 228.8C392.3 229.6 397.8 240.7 397.8 245.2C397.8 245.2 400.9 228.8 404.4 226.8L392.3 228.8ZM362 234.3C355.8 242.2 352.5 263.2 351.6 269.2C350.7 275.2 354.9 274.8 354.9 274.8L391.4 266.8C397.4 265.1 392 241.6 390 235.8C388 230 385 230.1 385 230.1L362 234.3ZM343.8 237.7C343.71 237.8 343.63 237.92 343.58 238.05C343.53 238.18 343.5 238.31 343.5 238.45C343.5 238.59 343.53 238.72 343.58 238.85C343.63 238.98 343.71 239.1 343.8 239.2C345 240.4 349.3 254.7 349.3 254.7C349.3 247.7 355.7 235.8 355.7 235.8L343.8 237.7ZM343.8 255C343.8 255 340.7 245.1 337 239.5L300.1 246C300.1 246 295.1 248.6 295.1 251.5L295.1 283.1C295.1 283.1 295.5 287.8 300.5 286.6L343.3 277.2C343.3 277.2 350 274.1 343.8 255ZM248.9 259.7L223.9 243.6L222.6 244.8L223.2 265.5L248.9 283L248.9 259.7ZM314.2 203.9C316.7 203.4 317.1 202.1 317.1 202.1L317.1 200C317.1 199.9 317.1 199.8 317.08 199.7C317.06 199.6 317.04 199.51 317 199.41C316.97 199.32 316.93 199.23 316.88 199.14C316.83 199.06 316.77 198.97 316.7 198.9L295.1 174.2C294.82 173.88 294.5 173.59 294.15 173.34C293.8 173.09 293.42 172.89 293.02 172.73C292.62 172.58 292.21 172.47 291.78 172.41C291.36 172.36 290.93 172.35 290.5 172.4L236.8 179.9C233.5 180.2 233.4 181.7 233.4 181.7L233.4 184.8L253.2 210.2C253.5 210.67 253.87 211.1 254.3 211.46C254.72 211.83 255.2 212.12 255.71 212.35C256.23 212.57 256.77 212.71 257.33 212.77C257.89 212.83 258.45 212.81 259 212.7L314.2 203.9ZM335.1 322.4C341.5 316 346 286.8 346 286.8C346 283.2 341.7 283 341.7 283L298.7 292.1C294.9 293.1 295.1 295 295.1 295L295.1 328.1C296.4 331.6 299.2 331.2 299.2 331.2L335.1 322.4ZM353.7 318.4C353.7 318.4 347.9 306.8 348.3 303.2C348.3 303.2 343.6 317.7 342.1 321.3L353.7 318.4ZM383.2 310.8C390.1 302 394.1 277 394.1 277C394.1 271.6 389.3 272.6 389.3 272.6L355.1 279.9C348.5 282.6 351.6 295.9 351.6 295.9C355.7 315.1 360.9 316.2 360.9 316.2L383.2 310.8ZM400.7 307C400.7 307 395.7 296.2 395.7 292C395.7 290.6 391.6 307.7 389.6 309.8L400.7 307ZM427.7 300.5C433.5 296.2 439.4 272.3 439.4 267.2C439.4 262.1 435.2 262.8 435.2 262.8L403.3 269.6C399.7 271.2 398.5 272.5 399.5 285.2C400.5 297.9 407 305.2 407 305.2L427.7 300.5ZM445.5 296.6C445.5 296.6 441 283.6 441 282C441 282 436.2 297.8 435.3 298.7L445.5 296.6ZM484 283C484 283 485.9 258.1 485.9 255.1C485.9 252.1 482.5 252.7 482.5 252.7L448.1 259.9C437.8 263.7 450.2 294.8 450.2 294.8C450.2 294.8 476 288.8 479.4 288.2C482.8 287.6 484 283 484 283ZM488.9 216.3C489.02 215.75 489.02 215.18 488.91 214.62C488.8 214.07 488.58 213.54 488.26 213.08C487.94 212.61 487.54 212.21 487.06 211.91C486.59 211.6 486.06 211.4 485.5 211.3L456.6 216.6C451.6 218.7 445.4 246.3 444.8 251.1C444.2 255.9 447.4 255 447.4 255L482.6 248C486.4 247.3 486.9 243 486.9 243L488.9 216.3Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M243.3 185.3C243.3 185.3 242 186 242.8 186.8L255.8 202.9C255.8 202.9 256.1 203.8 258.6 203.4L307.5 195.8C307.5 195.8 309.1 195.7 307.8 194.4L293.8 178.6C293.8 178.6 293.5 178 291.4 178.4L243.6 185.3">
                                 </path>
                              </g>
                              <path id="Layer" class="shp2"
                                 d="M45.9 208.1C45.9 208.1 9.1 217.7 27.6 236.2L268.5 436.9C268.5 436.9 289.8 450.9 346.4 436.9L496 388.2L350 443.1C350 443.1 319.9 464.9 264.3 447.5L22.4 242.6C22.4 242.6 6.3 214.8 45.9 208.1Z">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M83.7 272.3C87.1 269.1 90.9 264.3 90.1 259.2C89.3 254.1 84.9 252.8 83.4 247.9C82.3 244.5 82.5 239.1 89.1 230.9">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M116.2 298.7C119.6 295.4 123.5 290.6 122.6 285.5C121.7 280.4 117.4 279.2 115.9 274.3C114.4 269.4 115.1 265.4 121.7 257.3">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M148.9 323.9C152.3 320.6 156.1 315.8 155.2 310.7C154.3 305.6 150.1 304.3 148.6 299.5C147.1 294.7 147.7 290.6 154.3 282.5">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M207.7 365.3C211.1 362 214.9 357.2 214.1 352.1C213.3 347 208.9 345.7 207.4 340.9C205.9 336.1 206.6 332 213.2 323.9">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M177.3 344.6C180.7 341.3 184.6 336.5 183.7 331.4C182.8 326.3 178.6 325 177 320.2C175.4 315.4 176.2 311.3 182.8 303.2">
                              </path>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 570.4L502.7 570.4C527.59 570.4 547.7 590.51 547.7 615.4L547.7 1072.75C547.7 1097.64 527.59 1117.75 502.7 1117.75L45.3 1117.75C20.41 1117.75 0.3 1097.64 0.3 1072.75L0.3 615.4C0.3 590.51 20.41 570.4 45.3 570.4Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M434.1 714.2L419.6 772.5L275.8 772.5L282.3 708.5C282.3 708.5 287.6 692.6 303.9 692.6L421.1 692.6C421.1 692.6 437.5 692.6 434.1 714.2ZM432.2 712.5C432.2 712.5 433 694.7 421.3 697C409.6 699.3 410.4 769 410.4 769L418.2 769L432.2 712.5Z">
                              </path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M510.1 736.1L374 955.9L38 942.6L268.2 736.1L274 736.1L271.6 759.5L92.5 919L111.5 919L272.4 779.4L266.8 804.3L416.2 806.8L425.3 770.8L464.9 770.8L473.8 754.3L430.4 754.3L434.6 736.1L510.1 736.1ZM410.4 814.7L260.2 810.7L144.3 921.4L327.5 930L410.4 814.7Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M38 946.5L42.2 977.9L382.3 995.6L375.5 961.9L38 946.5L38 946.5Z"></path>
                           </g>
                        </g>
                     </svg>
                  </a>
               </div>
               <h4>Flash Cure Units</h4>
               <div class="descr_to_item">
                  <ul>
                     <li>Comet Light Flash Cure Unit</li>
                     <li>Pilot Flash Cure Unit</li>
                     <li>Rapid Wave Flash Cure Unit</li>
                  </ul>
               </div>
               <div class="link_to_item"><a  target="_blank" href="https://anatol.com//products-category/flash-cure-units/"
                     class="btn button_go button red-button draw-red">Learn More</a></div>
            </div>
         </div>
         <div class="block_press block_pre-press">
            <div class="back">

            </div>
            <div class="front">
               <div class="image">
                  <a href="/products-category/flash-cure-units/">
                     <svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny-ps" viewBox="0 0 552 552"
                        width="150" height="150">
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.4 -2270.4L502.8 -2270.4C527.68 -2270.4 547.8 -2250.28 547.8 -2225.4L547.8 -1768.05C547.8 -1743.16 527.68 -1723.05 502.8 -1723.05L45.4 -1723.05C20.51 -1723.05 0.4 -1743.16 0.4 -1768.05L0.4 -2225.4C0.4 -2250.28 20.51 -2270.4 45.4 -2270.4Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" class="shp1"
                                    d="M274.1 -1927.8C236 -1927.8 205.2 -1958.6 205.2 -1996.7C205.2 -2034.8 236 -2065.6 274.1 -2065.6C312.2 -2065.6 343 -2034.8 343 -1996.7C343 -1958.6 312.2 -1927.8 274.1 -1927.8Z">
                                 </path>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -2204.4L280.8 -2204.4L280.8 -2044.53L267.4 -2044.53L267.4 -2204.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -1948.9L280.8 -1948.9L280.8 -1789.03L267.4 -1789.03L267.4 -1948.9Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M196.73 -2189.61L209.32 -2194.19L264 -2043.96L251.4 -2039.38L196.73 -2189.61Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M284.08 -1949.45L296.67 -1954.03L351.35 -1803.8L338.76 -1799.22L284.08 -1949.45Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M135.51 -2151.48L145.78 -2160.09L248.54 -2037.63L238.28 -2029.01L135.51 -2151.48Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M299.69 -1955.81L309.96 -1964.42L412.72 -1841.96L402.45 -1833.34L299.69 -1955.81Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M90.87 -2094.8L97.57 -2106.4L236.02 -2026.47L229.32 -2014.86L90.87 -2094.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M312.15 -1966.96L318.85 -1978.57L457.3 -1898.63L450.6 -1887.03L312.15 -1966.96Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M68.38 -2026.14L70.71 -2039.33L228.15 -2011.57L225.82 -1998.37L68.38 -2026.14Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M319.98 -1981.7L322.3 -1994.9L479.75 -1967.14L477.42 -1953.94L319.98 -1981.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M70.73 -1954.08L68.41 -1967.27L225.85 -1995.03L228.17 -1981.84L70.73 -1954.08Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M322.34 -1998.34L320.01 -2011.54L477.45 -2039.3L479.78 -2026.11L322.34 -1998.34Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M97.65 -1887.1L90.95 -1898.7L229.4 -1978.64L236.1 -1967.03L97.65 -1887.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M318.77 -2014.76L312.07 -2026.37L450.52 -2106.3L457.22 -2094.7L318.77 -2014.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M145.68 -1833.32L135.41 -1841.93L238.17 -1964.4L248.44 -1955.78L145.68 -1833.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M309.96 -2029.02L299.7 -2037.64L402.46 -2160.1L412.73 -2151.49L309.96 -2029.02Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M209.4 -1799.27L196.81 -1803.85L251.48 -1954.08L264.08 -1949.5L209.4 -1799.27Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M296.78 -2039.3L284.19 -2043.88L338.86 -2194.11L351.46 -2189.53L296.78 -2039.3Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.2 -2195.5L286.9 -2195.5C289.66 -2195.5 291.9 -2193.26 291.9 -2190.5L291.9 -2133.66C291.9 -2130.89 289.66 -2128.66 286.9 -2128.66L261.2 -2128.66C258.43 -2128.66 256.2 -2130.89 256.2 -2133.66L256.2 -2190.5C256.2 -2193.26 258.43 -2195.5 261.2 -2195.5Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.2 -2202.6L291.9 -2202.6L291.9 -2197.7L256.2 -2197.7L256.2 -2202.6Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M287 -1798.4L261.3 -1798.4C258.53 -1798.4 256.3 -1800.63 256.3 -1803.4L256.3 -1860.24C256.3 -1863.01 258.53 -1865.24 261.3 -1865.24L287 -1865.24C289.76 -1865.24 292 -1863.01 292 -1860.24L292 -1803.4C292 -1800.63 289.76 -1798.4 287 -1798.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M292 -1791.4L256.3 -1791.4L256.3 -1796.3L292 -1796.3L292 -1791.4Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M354.02 -1814.54L329.86 -1805.75C327.27 -1804.8 324.4 -1806.14 323.46 -1808.74L304.02 -1862.15C303.07 -1864.75 304.41 -1867.61 307 -1868.56L331.15 -1877.35C333.75 -1878.29 336.62 -1876.96 337.56 -1874.36L357 -1820.95C357.95 -1818.35 356.61 -1815.48 354.02 -1814.54Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.15 -1809.67L327.6 -1797.46L325.93 -1802.07L359.47 -1814.28L361.15 -1809.67Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M194.07 -2178.9L218.22 -2187.69C220.82 -2188.63 223.68 -2187.3 224.63 -2184.7L244.07 -2131.29C245.02 -2128.69 243.68 -2125.83 241.08 -2124.88L216.93 -2116.09C214.33 -2115.14 211.47 -2116.48 210.52 -2119.08L191.08 -2172.49C190.14 -2175.09 191.47 -2177.95 194.07 -2178.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.91 -2183.85L220.46 -2196.06L222.14 -2191.46L188.59 -2179.25L186.91 -2183.85Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.47 -1908.6L439.62 -1886.34C438.24 -1883.95 435.18 -1883.13 432.79 -1884.51L383.57 -1912.93C381.17 -1914.31 380.35 -1917.37 381.74 -1919.76L394.59 -1942.02C395.97 -1944.41 399.02 -1945.23 401.42 -1943.85L450.64 -1915.43C453.03 -1914.05 453.85 -1910.99 452.47 -1908.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.12 -1909.44L443.27 -1878.52L439.03 -1880.97L456.88 -1911.89L461.12 -1909.44Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.65 -2084.87L108.5 -2107.13C109.88 -2109.52 112.93 -2110.34 115.33 -2108.96L164.55 -2080.54C166.95 -2079.15 167.77 -2076.1 166.38 -2073.71L153.53 -2051.45C152.15 -2049.05 149.1 -2048.24 146.7 -2049.62L97.48 -2078.04C95.08 -2079.42 94.27 -2082.47 95.65 -2084.87Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.09 -2084.05L104.94 -2114.96L109.18 -2112.51L91.33 -2081.6L87.09 -2084.05Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M471.9 -1974.95L467.43 -1949.64C466.95 -1946.92 464.36 -1945.1 461.64 -1945.58L405.66 -1955.45C402.94 -1955.93 401.13 -1958.52 401.61 -1961.24L406.07 -1986.55C406.55 -1989.28 409.14 -1991.09 411.86 -1990.61L467.84 -1980.74C470.56 -1980.26 472.38 -1977.67 471.9 -1974.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.72 -1978.57L473.52 -1943.41L468.7 -1944.26L474.9 -1979.42L479.72 -1978.57Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M72.4 -2015.68L76.77 -2040.87C77.24 -2043.58 79.81 -2045.39 82.52 -2044.92L138.23 -2035.26C140.94 -2034.79 142.75 -2032.22 142.28 -2029.51L137.91 -2004.32C137.44 -2001.61 134.87 -1999.8 132.16 -2000.27L76.45 -2009.93C73.74 -2010.41 71.93 -2012.98 72.4 -2015.68Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.55 -2014.75L74.75 -2049.91L79.58 -2049.06L73.38 -2013.9L68.55 -2014.75Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M467.4 -2043.88L471.87 -2018.57C472.35 -2015.84 470.53 -2013.25 467.81 -2012.77L411.83 -2002.9C409.11 -2002.42 406.52 -2004.24 406.04 -2006.96L401.58 -2032.27C401.1 -2034.99 402.91 -2037.58 405.63 -2038.06L461.61 -2047.93C464.33 -2048.41 466.92 -2046.6 467.4 -2043.88Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M473.42 -2050.03L479.62 -2014.88L474.79 -2014.02L468.59 -2049.18L473.42 -2050.03Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M80.8 -1949.51L76.33 -1974.82C75.85 -1977.55 77.67 -1980.14 80.39 -1980.62L136.37 -1990.49C139.09 -1990.97 141.68 -1989.15 142.16 -1986.43L146.62 -1961.12C147.1 -1958.4 145.29 -1955.81 142.57 -1955.33L86.59 -1945.46C83.87 -1944.98 81.28 -1946.79 80.8 -1949.51Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M74.71 -1943.39L68.51 -1978.55L73.33 -1979.4L79.53 -1944.24L74.71 -1943.39Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.65 -2107.15L452.5 -2084.89C453.88 -2082.5 453.07 -2079.44 450.67 -2078.06L401.45 -2049.64C399.05 -2048.26 396 -2049.08 394.62 -2051.47L381.77 -2073.73C380.38 -2076.12 381.2 -2079.18 383.6 -2080.56L432.82 -2108.98C435.22 -2110.36 438.27 -2109.54 439.65 -2107.15Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.21 -2114.99L461.06 -2084.07L456.82 -2081.62L438.97 -2112.54L443.21 -2114.99Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.63 -1886.32L95.78 -1908.58C94.4 -1910.97 95.22 -1914.02 97.61 -1915.41L146.83 -1943.83C149.23 -1945.21 152.28 -1944.39 153.66 -1942L166.51 -1919.74C167.9 -1917.34 167.08 -1914.29 164.68 -1912.91L115.46 -1884.49C113.07 -1883.11 110.01 -1883.92 108.63 -1886.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M106.51 -1881.43L88.66 -1912.49L92.92 -1914.94L110.77 -1883.88L106.51 -1881.43Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M391.83 -2157.1L411.52 -2140.58C413.64 -2138.8 413.91 -2135.65 412.13 -2133.54L375.6 -2089.99C373.82 -2087.88 370.67 -2087.6 368.55 -2089.38L348.87 -2105.9C346.75 -2107.67 346.47 -2110.82 348.25 -2112.94L384.79 -2156.48C386.56 -2158.6 389.71 -2158.88 391.83 -2157.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.61 -2165.69L419.96 -2142.74L416.81 -2138.98L389.46 -2161.93L392.61 -2165.69Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M156.35 -1836.41L136.66 -1852.93C134.54 -1854.71 134.27 -1857.86 136.05 -1859.97L172.58 -1903.52C174.36 -1905.63 177.51 -1905.91 179.63 -1904.13L199.31 -1887.61C201.43 -1885.84 201.71 -1882.69 199.93 -1880.57L163.39 -1837.03C161.62 -1834.91 158.47 -1834.63 156.35 -1836.41Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.68 -1827.69L128.33 -1850.64L131.48 -1854.39L158.83 -1831.44L155.68 -1827.69Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M329.95 -2187.69L354.1 -2178.9C356.7 -2177.95 358.04 -2175.09 357.09 -2172.49L337.65 -2119.08C336.71 -2116.48 333.84 -2115.14 331.24 -2116.09L307.09 -2124.88C304.5 -2125.83 303.16 -2128.69 304.1 -2131.29L323.55 -2184.7C324.49 -2187.3 327.36 -2188.63 329.95 -2187.69Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M327.61 -2196.06L361.16 -2183.85L359.48 -2179.25L325.94 -2191.46L327.61 -2196.06Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M218.36 -1805.75L194.21 -1814.54C191.61 -1815.48 190.28 -1818.35 191.22 -1820.95L210.66 -1874.36C211.61 -1876.96 214.47 -1878.29 217.07 -1877.35L241.22 -1868.56C243.82 -1867.61 245.15 -1864.75 244.21 -1862.15L224.77 -1808.74C223.82 -1806.14 220.96 -1804.8 218.36 -1805.75Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M220.62 -1797.46L187.07 -1809.67L188.75 -1814.28L222.3 -1802.07L220.62 -1797.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M411.53 -1852.95L391.85 -1836.43C389.73 -1834.66 386.58 -1834.93 384.8 -1837.05L348.27 -1880.59C346.49 -1882.71 346.76 -1885.86 348.88 -1887.64L368.57 -1904.16C370.69 -1905.93 373.84 -1905.66 375.61 -1903.54L412.15 -1860C413.93 -1857.88 413.65 -1854.73 411.53 -1852.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M419.96 -1850.76L392.62 -1827.81L389.47 -1831.57L416.82 -1854.51L419.96 -1850.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M136.59 -2140.56L156.27 -2157.08C158.39 -2158.85 161.54 -2158.58 163.32 -2156.46L199.85 -2112.92C201.63 -2110.8 201.36 -2107.65 199.24 -2105.87L179.55 -2089.35C177.43 -2087.58 174.28 -2087.85 172.51 -2089.97L135.97 -2133.51C134.19 -2135.63 134.47 -2138.78 136.59 -2140.56Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M128.24 -2142.71L155.59 -2165.66L158.74 -2161.91L131.39 -2138.96L128.24 -2142.71Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -1702.6L502.7 -1702.6C527.59 -1702.6 547.7 -1682.49 547.7 -1657.6L547.7 -1200.25C547.7 -1175.37 527.59 -1155.25 502.7 -1155.25L45.3 -1155.25C20.41 -1155.25 0.3 -1175.37 0.3 -1200.25L0.3 -1657.6C0.3 -1682.49 20.41 -1702.6 45.3 -1702.6Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" class="shp1"
                                 d="M274 -1360C235.9 -1360 205.1 -1390.8 205.1 -1428.9C205.1 -1467 235.9 -1497.8 274 -1497.8C312.1 -1497.8 342.9 -1467 342.9 -1428.9C342.9 -1390.8 312.1 -1360 274 -1360Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -1636.5L280.7 -1636.5L280.7 -1476.63L267.3 -1476.63L267.3 -1636.5Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -1381.1L280.7 -1381.1L280.7 -1221.23L267.3 -1221.23L267.3 -1381.1Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M164.39 -1605.41L176 -1612.11L255.93 -1473.66L244.33 -1466.96L164.39 -1605.41Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M292.09 -1384.19L303.69 -1390.89L383.62 -1252.44L372.02 -1245.74L292.09 -1384.19Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M90.74 -1526.91L97.44 -1538.52L235.89 -1458.58L229.19 -1446.98L90.74 -1526.91Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M312.06 -1399.17L318.76 -1410.77L457.21 -1330.83L450.51 -1319.23L312.06 -1399.17Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M66.4 -1422.2L66.4 -1435.6L226.27 -1435.6L226.27 -1422.2L66.4 -1422.2Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M321.8 -1422.2L321.8 -1435.6L481.67 -1435.6L481.67 -1422.2L321.8 -1422.2Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M97.56 -1319.2L90.86 -1330.81L229.31 -1410.74L236.01 -1399.14L97.56 -1319.2Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M318.77 -1446.92L312.07 -1458.52L450.52 -1538.45L457.22 -1526.85L318.77 -1446.92Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M172.63 -1249.65L160.97 -1256.35L240.91 -1395.44L252.57 -1388.74L172.63 -1249.65Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M299.87 -1470L288.21 -1476.7L368.15 -1615.78L379.81 -1609.08L299.87 -1470Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.1 -1627.6L286.8 -1627.6C289.57 -1627.6 291.8 -1625.36 291.8 -1622.6L291.8 -1565.76C291.8 -1562.99 289.57 -1560.76 286.8 -1560.76L261.1 -1560.76C258.34 -1560.76 256.1 -1562.99 256.1 -1565.76L256.1 -1622.6C256.1 -1625.36 258.34 -1627.6 261.1 -1627.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.1 -1634.7L291.8 -1634.7L291.8 -1629.8L256.1 -1629.8L256.1 -1634.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M286.8 -1230.6L261.1 -1230.6C258.33 -1230.6 256.1 -1232.84 256.1 -1235.6L256.1 -1292.44C256.1 -1295.21 258.33 -1297.44 261.1 -1297.44L286.8 -1297.44C289.56 -1297.44 291.8 -1295.21 291.8 -1292.44L291.8 -1235.6C291.8 -1232.84 289.56 -1230.6 286.8 -1230.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M291.8 -1223.5L256.1 -1223.5L256.1 -1228.4L291.8 -1228.4L291.8 -1223.5Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M384.45 -1263.44L362.2 -1250.59C359.8 -1249.2 356.75 -1250.02 355.37 -1252.42L326.95 -1301.64C325.56 -1304.04 326.38 -1307.09 328.78 -1308.47L351.03 -1321.32C353.43 -1322.7 356.48 -1321.89 357.86 -1319.49L386.28 -1270.27C387.67 -1267.87 386.85 -1264.82 384.45 -1263.44Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.29 -1259.72L361.37 -1241.87L358.92 -1246.12L389.84 -1263.97L392.29 -1259.72Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M163.57 -1594.4L185.82 -1607.25C188.22 -1608.63 191.27 -1607.81 192.65 -1605.42L221.07 -1556.19C222.46 -1553.8 221.64 -1550.74 219.24 -1549.36L196.99 -1536.51C194.59 -1535.13 191.54 -1535.95 190.16 -1538.34L161.74 -1587.57C160.35 -1589.96 161.17 -1593.01 163.57 -1594.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.78 -1598.03L186.7 -1615.88L189.15 -1611.64L158.23 -1593.79L155.78 -1598.03Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.44 -1340.71L439.59 -1318.45C438.2 -1316.06 435.15 -1315.24 432.76 -1316.62L383.53 -1345.04C381.14 -1346.42 380.32 -1349.48 381.7 -1351.87L394.55 -1374.13C395.93 -1376.52 398.99 -1377.34 401.38 -1375.96L450.61 -1347.54C453 -1346.16 453.82 -1343.1 452.44 -1340.71Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.03 -1341.46L443.18 -1310.54L438.94 -1312.99L456.79 -1343.91L461.03 -1341.46Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.83 -1516.94L108.68 -1539.2C110.07 -1541.6 113.12 -1542.41 115.51 -1541.03L164.74 -1512.61C167.13 -1511.23 167.95 -1508.18 166.57 -1505.78L153.72 -1483.52C152.34 -1481.13 149.28 -1480.31 146.89 -1481.69L97.66 -1510.11C95.27 -1511.5 94.45 -1514.55 95.83 -1516.94Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.14 -1516.09L104.99 -1547L109.23 -1544.55L91.38 -1513.64L87.14 -1516.09Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M472.6 -1441.8L472.6 -1416.1C472.6 -1413.33 470.36 -1411.1 467.6 -1411.1L410.76 -1411.1C407.99 -1411.1 405.76 -1413.33 405.76 -1416.1L405.76 -1441.8C405.76 -1444.57 407.99 -1446.8 410.76 -1446.8L467.6 -1446.8C470.36 -1446.8 472.6 -1444.57 472.6 -1441.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.6 -1446.7L479.6 -1411L474.7 -1411L474.7 -1446.7L479.6 -1446.7Z"></path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M75.5 -1415.9L75.5 -1441.6C75.5 -1444.37 77.73 -1446.6 80.5 -1446.6L137.34 -1446.6C140.1 -1446.6 142.34 -1444.37 142.34 -1441.6L142.34 -1415.9C142.34 -1413.13 140.1 -1410.9 137.34 -1410.9L80.5 -1410.9C77.73 -1410.9 75.5 -1413.13 75.5 -1415.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.4 -1411L68.4 -1446.7L73.3 -1446.7L73.3 -1411L68.4 -1411Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.45 -1539.2L452.3 -1516.94C453.69 -1514.54 452.87 -1511.49 450.47 -1510.11L401.25 -1481.69C398.85 -1480.31 395.8 -1481.12 394.42 -1483.52L381.57 -1505.78C380.19 -1508.17 381 -1511.22 383.4 -1512.61L432.62 -1541.03C435.02 -1542.41 438.07 -1541.59 439.45 -1539.2Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.01 -1547.13L460.86 -1516.22L456.62 -1513.77L438.77 -1544.68L443.01 -1547.13Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.43 -1318.37L95.58 -1340.63C94.2 -1343.02 95.01 -1346.08 97.41 -1347.46L146.63 -1375.88C149.03 -1377.26 152.08 -1376.44 153.46 -1374.05L166.31 -1351.79C167.7 -1349.4 166.88 -1346.34 164.48 -1344.96L115.26 -1316.54C112.86 -1315.16 109.81 -1315.98 108.43 -1318.37Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M104.83 -1310.46L86.98 -1341.38L91.22 -1343.83L109.07 -1312.91L104.83 -1310.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M362.23 -1607.12L384.49 -1594.27C386.89 -1592.89 387.7 -1589.84 386.32 -1587.44L357.9 -1538.22C356.52 -1535.82 353.47 -1535.01 351.07 -1536.39L328.81 -1549.24C326.42 -1550.62 325.6 -1553.67 326.98 -1556.07L355.4 -1605.29C356.79 -1607.69 359.84 -1608.51 362.23 -1607.12Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.54 -1615.71L392.46 -1597.86L390.01 -1593.61L359.09 -1611.46L361.54 -1615.71Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M186.1 -1250.42L163.84 -1263.27C161.45 -1264.65 160.63 -1267.71 162.01 -1270.1L190.43 -1319.33C191.81 -1321.72 194.87 -1322.54 197.26 -1321.16L219.52 -1308.31C221.91 -1306.93 222.73 -1303.87 221.35 -1301.48L192.93 -1252.25C191.54 -1249.86 188.49 -1249.04 186.1 -1250.42Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.83 -1241.76L155.91 -1259.61L158.36 -1263.86L189.28 -1246.01L186.83 -1241.76Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -1136.8L502.7 -1136.8C527.59 -1136.8 547.7 -1116.68 547.7 -1091.8L547.7 -634.45C547.7 -609.56 527.59 -589.45 502.7 -589.45L45.3 -589.45C20.41 -589.45 0.3 -609.56 0.3 -634.45L0.3 -1091.8C0.3 -1116.68 20.41 -1136.8 45.3 -1136.8Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" fill-rule="evenodd" class="shp2"
                                    d="M512.4 -950.6L503.7 -844.3L269.3 -785.1C268.91 -785.19 268.53 -785.3 268.15 -785.43C267.78 -785.56 267.41 -785.71 267.05 -785.88C266.69 -786.05 266.34 -786.24 265.99 -786.44C265.65 -786.64 265.32 -786.86 265 -787.1L175.2 -859.3L164.9 -857.1L71 -934.7L69.6 -950.4L72 -954.4L246.2 -977.3L264.4 -970L458.7 -997.4L512.4 -950.6ZM438.6 -920.8C438.6 -920.8 442.9 -909.4 443.3 -905C443.3 -905 446.7 -919.2 449.6 -922.9L438.6 -920.8ZM411.4 -916.1C403 -907.8 401 -887.7 399.7 -882.1C398.4 -876.5 402.3 -876.2 402.3 -876.2C402.3 -876.2 430.3 -881.3 436.8 -883.5C443.3 -885.7 438.5 -904.9 436.8 -912.1C435.1 -919.3 431.4 -919.7 431.4 -919.7L411.4 -916.1ZM392.3 -912.2C392.3 -911.4 397.8 -900.3 397.8 -895.8C397.8 -895.8 400.9 -912.2 404.4 -914.2L392.3 -912.2ZM362 -906.7C355.8 -898.8 352.5 -877.8 351.6 -871.8C350.7 -865.8 354.9 -866.2 354.9 -866.2L391.4 -874.2C397.4 -875.9 392 -899.4 390 -905.2C388 -911 385 -910.9 385 -910.9L362 -906.7ZM343.8 -903.3C343.71 -903.2 343.63 -903.08 343.58 -902.95C343.53 -902.82 343.5 -902.69 343.5 -902.55C343.5 -902.41 343.53 -902.28 343.58 -902.15C343.63 -902.02 343.71 -901.9 343.8 -901.8C345 -900.6 349.3 -886.3 349.3 -886.3C349.3 -893.3 355.7 -905.2 355.7 -905.2L343.8 -903.3ZM343.8 -886C343.8 -886 340.7 -895.9 337 -901.5L300.1 -895C300.1 -895 295.1 -892.4 295.1 -889.5L295.1 -857.9C295.1 -857.9 295.5 -853.2 300.5 -854.4L343.3 -863.8C343.3 -863.8 350 -866.9 343.8 -886ZM248.9 -881.3L223.9 -897.4L222.6 -896.2L223.2 -875.5L248.9 -858L248.9 -881.3ZM314.2 -937.1C316.7 -937.6 317.1 -938.9 317.1 -938.9L317.1 -941C317.1 -941.1 317.1 -941.2 317.08 -941.3C317.06 -941.4 317.04 -941.49 317 -941.59C316.97 -941.68 316.93 -941.77 316.88 -941.86C316.83 -941.94 316.77 -942.03 316.7 -942.1L295.1 -966.8C294.82 -967.12 294.5 -967.41 294.15 -967.66C293.8 -967.91 293.42 -968.11 293.02 -968.27C292.62 -968.42 292.21 -968.53 291.78 -968.59C291.36 -968.64 290.93 -968.65 290.5 -968.6L236.8 -961.1C233.5 -960.8 233.4 -959.3 233.4 -959.3L233.4 -956.2L253.2 -930.8C253.5 -930.33 253.87 -929.9 254.3 -929.54C254.72 -929.17 255.2 -928.88 255.71 -928.65C256.23 -928.43 256.77 -928.29 257.33 -928.23C257.89 -928.17 258.45 -928.19 259 -928.3L314.2 -937.1ZM335.1 -818.6C341.5 -825 346 -854.2 346 -854.2C346 -857.8 341.7 -858 341.7 -858L298.7 -848.9C294.9 -847.9 295.1 -846 295.1 -846L295.1 -812.9C296.4 -809.4 299.2 -809.8 299.2 -809.8L335.1 -818.6ZM353.7 -822.6C353.7 -822.6 347.9 -834.2 348.3 -837.8C348.3 -837.8 343.6 -823.3 342.1 -819.7L353.7 -822.6ZM383.2 -830.2C390.1 -839 394.1 -864 394.1 -864C394.1 -869.4 389.3 -868.4 389.3 -868.4L355.1 -861.1C348.5 -858.4 351.6 -845.1 351.6 -845.1C355.7 -825.9 360.9 -824.8 360.9 -824.8L383.2 -830.2ZM400.7 -834C400.7 -834 395.7 -844.8 395.7 -849C395.7 -850.4 391.6 -833.3 389.6 -831.2L400.7 -834ZM427.7 -840.5C433.5 -844.8 439.4 -868.7 439.4 -873.8C439.4 -878.9 435.2 -878.2 435.2 -878.2L403.3 -871.4C399.7 -869.8 398.5 -868.5 399.5 -855.8C400.5 -843.1 407 -835.8 407 -835.8L427.7 -840.5ZM445.5 -844.4C445.5 -844.4 441 -857.4 441 -859C441 -859 436.2 -843.2 435.3 -842.3L445.5 -844.4ZM484 -858C484 -858 485.9 -882.9 485.9 -885.9C485.9 -888.9 482.5 -888.3 482.5 -888.3L448.1 -881.1C437.8 -877.3 450.2 -846.2 450.2 -846.2C450.2 -846.2 476 -852.2 479.4 -852.8C482.8 -853.4 484 -858 484 -858ZM488.9 -924.7C489.02 -925.25 489.02 -925.82 488.91 -926.38C488.8 -926.93 488.58 -927.46 488.26 -927.92C487.94 -928.39 487.54 -928.79 487.06 -929.09C486.59 -929.4 486.06 -929.6 485.5 -929.7L456.6 -924.4C451.6 -922.3 445.4 -894.7 444.8 -889.9C444.2 -885.1 447.4 -886 447.4 -886L482.6 -893C486.4 -893.7 486.9 -898 486.9 -898L488.9 -924.7Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M243.3 -955.7C243.3 -955.7 242 -955 242.8 -954.2L255.8 -938.1C255.8 -938.1 256.1 -937.2 258.6 -937.6L307.5 -945.2C307.5 -945.2 309.1 -945.3 307.8 -946.6L293.8 -962.4C293.8 -962.4 293.5 -963 291.4 -962.6L243.6 -955.7">
                                 </path>
                              </g>
                              <path id="Layer" class="shp2"
                                 d="M45.9 -932.9C45.9 -932.9 9.1 -923.3 27.6 -904.8L268.5 -704.1C268.5 -704.1 289.8 -690.1 346.4 -704.1L496 -752.8L350 -697.9C350 -697.9 319.9 -676.1 264.3 -693.5L22.4 -898.4C22.4 -898.4 6.3 -926.2 45.9 -932.9Z">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M83.7 -868.7C87.1 -871.9 90.9 -876.7 90.1 -881.8C89.3 -886.9 84.9 -888.2 83.4 -893.1C82.3 -896.5 82.5 -901.9 89.1 -910.1">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M116.2 -842.3C119.6 -845.6 123.5 -850.4 122.6 -855.5C121.7 -860.6 117.4 -861.8 115.9 -866.7C114.4 -871.6 115.1 -875.6 121.7 -883.7">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M148.9 -817.1C152.3 -820.4 156.1 -825.2 155.2 -830.3C154.3 -835.4 150.1 -836.7 148.6 -841.5C147.1 -846.3 147.7 -850.4 154.3 -858.5">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M207.7 -775.7C211.1 -779 214.9 -783.8 214.1 -788.9C213.3 -794 208.9 -795.3 207.4 -800.1C205.9 -804.9 206.6 -809 213.2 -817.1">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M177.3 -796.4C180.7 -799.7 184.6 -804.5 183.7 -809.6C182.8 -814.7 178.6 -816 177 -820.8C175.4 -825.6 176.2 -829.7 182.8 -837.8">
                              </path>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -569.7L502.7 -569.7C527.59 -569.7 547.7 -549.59 547.7 -524.7L547.7 -67.35C547.7 -42.46 527.59 -22.35 502.7 -22.35L45.3 -22.35C20.41 -22.35 0.3 -42.46 0.3 -67.35L0.3 -524.7C0.3 -549.59 20.41 -569.7 45.3 -569.7Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" class="shp2"
                                 d="M49.3 -419.3L51 -404.9L82 -405.6L80.6 -419.8L49.3 -419.3L49.3 -419.3Z"></path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M513.1 -285.9L508.9 -264.7L499.8 -263.3L494.9 -265.7C494.9 -265.7 505.5 -281.1 488.1 -289.5L481.1 -289.2L344.4 -346.9L111.5 -328.7L121.2 -229.8L124.7 -200.4L126.2 -175.3L121.9 -174.6L126.4 -126.2L418.1 -190.9L423.3 -248.3L445.1 -251.7L432.5 -179.1L427.1 -177.9L425.1 -179.7L128 -110.4L128 -108.1L118.4 -107L111.7 -172.4L110 -171.9L107.9 -181.8L103.2 -226.9L102.9 -237.3L60.8 -231.3L35 -425.3L51.9 -432.4L49 -457.6L57.7 -457.6L54.8 -484.1C54.8 -484.1 73.4 -486.2 82.6 -483.7C82.6 -483.7 83.7 -484.1 84.1 -479.1L86 -457.4L91.7 -457.4L93.4 -455.8L94.8 -437.6L240.5 -437.8L377.8 -424.1L373.8 -374.5L371.1 -343.6L512.6 -287.4C512.6 -287.4 513.3 -287.4 513.1 -285.9ZM83.1 -403.5L81.5 -421.2C81.49 -421.3 81.47 -421.4 81.44 -421.5C81.4 -421.59 81.35 -421.68 81.29 -421.76C81.23 -421.84 81.15 -421.91 81.07 -421.97C80.99 -422.03 80.9 -422.07 80.8 -422.1L49.6 -421.8C47.7 -421.8 47.7 -421.2 47.7 -421.2C47.7 -421.2 49.9 -405.3 49.9 -403.9C49.9 -402.5 50.7 -402.7 50.7 -402.7L82.3 -403.3C83.1 -403.3 83.1 -403.5 83.1 -403.5ZM370.5 -352C370.5 -352 371.2 -352 371.4 -353.1L373.3 -377C373.3 -377 373.4 -377.8 372.3 -377.8L99.5 -364C99.33 -363.95 99.17 -363.88 99.02 -363.78C98.88 -363.67 98.76 -363.55 98.66 -363.4C98.56 -363.26 98.48 -363.09 98.44 -362.92C98.4 -362.75 98.38 -362.58 98.4 -362.4L101.1 -333.2C101.1 -333.2 101 -332.2 102.9 -332.2L370.5 -352Z">
                              </path>
                              <path id="Layer" class="shp4" d="M106.4 -362L109 -335.5"></path>
                              <path id="Layer" class="shp5" d="M367.7 -375.8L365.9 -353.7"></path>
                              <g id="Layer">
                                 <path id="Layer" class="shp6"
                                    d="M130.4 -326.8L153.3 -237.6C153.3 -237.6 157.4 -210.9 154.3 -207.8L484.3 -262.1C484.3 -262.1 494.5 -275.7 479.7 -286.4L346.7 -343.5L130.4 -326.8Z">
                                 </path>
                              </g>
                              <path id="Layer" class="shp2"
                                 d="M147.6 -242L130.8 -239.5L131.5 -230.7L119.6 -228.9L121.3 -213.6L132.8 -215.3L133.9 -205.4L151.4 -208.2C151.4 -208.2 154.6 -234.2 147.6 -242Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M480.7 -288.7L487.2 -289.2C487.2 -289.2 503.5 -283.3 493.9 -265.7L488.8 -264.8C488.8 -264.8 496.8 -277.4 480.7 -288.7Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp7"
                                    d="M179.3 -456.7C183.5 -461.2 188.2 -467.7 187.2 -474.7C186.2 -481.7 180.8 -483.4 178.9 -490.1C177.6 -494.8 177.9 -502.2 186.1 -513.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M218.1 -456.7C222.3 -461.2 227 -467.7 225.9 -474.7C224.8 -481.7 219.6 -483.4 217.7 -490.1C216.4 -494.8 216.7 -502.2 224.8 -513.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M260.5 -456.7C264.7 -461.2 269.4 -467.7 268.4 -474.7C267.4 -481.7 262 -483.4 260.1 -490.1C258.8 -494.8 259.1 -502.2 267.2 -513.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M300 -456.7C304.2 -461.2 308.9 -467.7 307.9 -474.7C306.9 -481.7 301.5 -483.4 299.6 -490.1C298.3 -494.8 298.6 -502.2 306.8 -513.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M340.1 -456.7C344.3 -461.2 349 -467.7 348 -474.7C347 -481.7 341.6 -483.4 339.8 -490.1C338.4 -494.8 338.7 -502.2 346.9 -513.3">
                                 </path>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <g id="Layer">
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M204.3 149.4C205.25 149.4 206.18 149.59 207.06 149.95C207.93 150.31 208.72 150.84 209.39 151.51C210.06 152.18 210.59 152.97 210.95 153.84C211.31 154.72 211.5 155.65 211.5 156.6L211.5 407.4C211.5 408.34 211.31 409.27 210.95 410.14C210.59 411.01 210.06 411.8 209.39 412.46C208.72 413.12 207.92 413.64 207.05 413.99C206.17 414.34 205.24 414.51 204.3 414.5L131.2 414.5L99.7 446.1L88.6 446.1L55.4 415.6L55.4 398.5L85.8 370.3L85.8 183.7L50.9 151.6L50.9 105.1L97.4 105.1L137.8 149.4L204.3 149.4ZM110.7 316.6L118.8 316.6L138.4 277.1L118.1 237.6L110.7 237.6L110.7 316.6ZM155.6 302.2L146.1 302.2L110.7 373L110.7 381.9L155.6 381.9L155.6 302.2ZM155.6 170.4L110.7 170.4L110.7 179.3L146.1 250.1L155.6 250.1L155.6 170.4Z">
                              </path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M486.3 115.6C487.72 115.6 489.12 115.88 490.43 116.42C491.74 116.96 492.93 117.76 493.94 118.76C494.94 119.77 495.74 120.96 496.28 122.27C496.82 123.58 497.1 124.98 497.1 126.4L497.1 424.8C497.1 426.22 496.82 427.62 496.28 428.93C495.74 430.24 494.94 431.43 493.94 432.44C492.93 433.44 491.74 434.24 490.43 434.78C489.12 435.32 487.72 435.6 486.3 435.6L251.5 435.6C250.09 435.6 248.69 435.32 247.38 434.78C246.08 434.23 244.89 433.43 243.9 432.43C242.9 431.43 242.12 430.24 241.59 428.93C241.05 427.62 240.79 426.21 240.8 424.8L240.8 126.4C240.79 124.99 241.05 123.58 241.59 122.27C242.12 120.96 242.9 119.77 243.9 118.77C244.89 117.77 246.08 116.97 247.38 116.42C248.69 115.88 250.09 115.6 251.5 115.6L486.3 115.6ZM475.5 137.8L451.1 137.8L451.1 151.1L264 151.1L264 416.2L475.5 416.2L475.5 137.8Z">
                              </path>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 570.4L502.7 570.4C527.59 570.4 547.7 590.51 547.7 615.4L547.7 1072.75C547.7 1097.64 527.59 1117.75 502.7 1117.75L45.3 1117.75C20.41 1117.75 0.3 1097.64 0.3 1072.75L0.3 615.4C0.3 590.51 20.41 570.4 45.3 570.4Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M434.1 714.2L419.6 772.5L275.8 772.5L282.3 708.5C282.3 708.5 287.6 692.6 303.9 692.6L421.1 692.6C421.1 692.6 437.5 692.6 434.1 714.2ZM432.2 712.5C432.2 712.5 433 694.7 421.3 697C409.6 699.3 410.4 769 410.4 769L418.2 769L432.2 712.5Z">
                              </path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M510.1 736.1L374 955.9L38 942.6L268.2 736.1L274 736.1L271.6 759.5L92.5 919L111.5 919L272.4 779.4L266.8 804.3L416.2 806.8L425.3 770.8L464.9 770.8L473.8 754.3L430.4 754.3L434.6 736.1L510.1 736.1ZM410.4 814.7L260.2 810.7L144.3 921.4L327.5 930L410.4 814.7Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M38 946.5L42.2 977.9L382.3 995.6L375.5 961.9L38 946.5L38 946.5Z"></path>
                           </g>
                        </g>
                     </svg>
                  </a>
               </div>
               <h4>Pre-Press Equipment</h4>
               <div class="descr_to_item">
                  <ul>
                     <li>Aurora UV LED Exposure Unit</li>
                     <li>Cube – Screen Drying Cabinet</li>
                     <li>Formulator Screen Printing Ink Mixer</li>
                  </ul>
               </div>
               <div class="link_to_item"><a  target="_blank" href="https://anatol.com//products-category/pre-press-equipment/"
                     class="btn button_go button red-button draw-red">Learn More</a></div>
            </div>
         </div>
         <div class="block_press block_accessories">
            <div class="back">

            </div>
            <div class="front">
               <div class="image">
                  <a href="/products-category/flash-cure-units/">
                     <svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny-ps" viewBox="0 0 552 552"
                        width="150" height="150">
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.4 -2843.4L502.8 -2843.4C527.68 -2843.4 547.8 -2823.28 547.8 -2798.4L547.8 -2341.05C547.8 -2316.16 527.68 -2296.05 502.8 -2296.05L45.4 -2296.05C20.51 -2296.05 0.4 -2316.16 0.4 -2341.05L0.4 -2798.4C0.4 -2823.28 20.51 -2843.4 45.4 -2843.4Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" class="shp1"
                                    d="M274.1 -2500.8C236 -2500.8 205.2 -2531.6 205.2 -2569.7C205.2 -2607.8 236 -2638.6 274.1 -2638.6C312.2 -2638.6 343 -2607.8 343 -2569.7C343 -2531.6 312.2 -2500.8 274.1 -2500.8Z">
                                 </path>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -2777.4L280.8 -2777.4L280.8 -2617.53L267.4 -2617.53L267.4 -2777.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M267.4 -2521.9L280.8 -2521.9L280.8 -2362.03L267.4 -2362.03L267.4 -2521.9Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M196.73 -2762.61L209.32 -2767.19L264 -2616.96L251.4 -2612.38L196.73 -2762.61Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M284.08 -2522.45L296.67 -2527.03L351.35 -2376.8L338.76 -2372.22L284.08 -2522.45Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M135.51 -2724.48L145.78 -2733.09L248.54 -2610.63L238.28 -2602.01L135.51 -2724.48Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M299.69 -2528.81L309.96 -2537.42L412.72 -2414.96L402.45 -2406.34L299.69 -2528.81Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M90.87 -2667.8L97.57 -2679.4L236.02 -2599.47L229.32 -2587.86L90.87 -2667.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M312.15 -2539.96L318.85 -2551.57L457.3 -2471.63L450.6 -2460.03L312.15 -2539.96Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M68.38 -2599.14L70.71 -2612.33L228.15 -2584.57L225.82 -2571.37L68.38 -2599.14Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M319.98 -2554.7L322.3 -2567.9L479.75 -2540.14L477.42 -2526.94L319.98 -2554.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M70.73 -2527.08L68.41 -2540.27L225.85 -2568.03L228.17 -2554.84L70.73 -2527.08Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M322.34 -2571.34L320.01 -2584.54L477.45 -2612.3L479.78 -2599.11L322.34 -2571.34Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M97.65 -2460.1L90.95 -2471.7L229.4 -2551.64L236.1 -2540.03L97.65 -2460.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M318.77 -2587.76L312.07 -2599.37L450.52 -2679.3L457.22 -2667.7L318.77 -2587.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M145.68 -2406.32L135.41 -2414.93L238.17 -2537.4L248.44 -2528.78L145.68 -2406.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M309.96 -2602.02L299.7 -2610.64L402.46 -2733.1L412.73 -2724.49L309.96 -2602.02Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M209.4 -2372.27L196.81 -2376.85L251.48 -2527.08L264.08 -2522.5L209.4 -2372.27Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M296.78 -2612.3L284.19 -2616.88L338.86 -2767.11L351.46 -2762.53L296.78 -2612.3Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.2 -2768.5L286.9 -2768.5C289.66 -2768.5 291.9 -2766.26 291.9 -2763.5L291.9 -2706.66C291.9 -2703.89 289.66 -2701.66 286.9 -2701.66L261.2 -2701.66C258.43 -2701.66 256.2 -2703.89 256.2 -2706.66L256.2 -2763.5C256.2 -2766.26 258.43 -2768.5 261.2 -2768.5Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.2 -2775.6L291.9 -2775.6L291.9 -2770.7L256.2 -2770.7L256.2 -2775.6Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M287 -2371.4L261.3 -2371.4C258.53 -2371.4 256.3 -2373.63 256.3 -2376.4L256.3 -2433.24C256.3 -2436.01 258.53 -2438.24 261.3 -2438.24L287 -2438.24C289.76 -2438.24 292 -2436.01 292 -2433.24L292 -2376.4C292 -2373.63 289.76 -2371.4 287 -2371.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M292 -2364.4L256.3 -2364.4L256.3 -2369.3L292 -2369.3L292 -2364.4Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M354.02 -2387.54L329.86 -2378.75C327.27 -2377.8 324.4 -2379.14 323.46 -2381.74L304.02 -2435.15C303.07 -2437.75 304.41 -2440.61 307 -2441.56L331.15 -2450.35C333.75 -2451.29 336.62 -2449.96 337.56 -2447.36L357 -2393.95C357.95 -2391.35 356.61 -2388.48 354.02 -2387.54Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.15 -2382.67L327.6 -2370.46L325.93 -2375.07L359.47 -2387.28L361.15 -2382.67Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M194.07 -2751.9L218.22 -2760.69C220.82 -2761.63 223.68 -2760.3 224.63 -2757.7L244.07 -2704.29C245.02 -2701.69 243.68 -2698.83 241.08 -2697.88L216.93 -2689.09C214.33 -2688.14 211.47 -2689.48 210.52 -2692.08L191.08 -2745.49C190.14 -2748.09 191.47 -2750.95 194.07 -2751.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.91 -2756.85L220.46 -2769.06L222.14 -2764.46L188.59 -2752.25L186.91 -2756.85Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.47 -2481.6L439.62 -2459.34C438.24 -2456.95 435.18 -2456.13 432.79 -2457.51L383.57 -2485.93C381.17 -2487.31 380.35 -2490.37 381.74 -2492.76L394.59 -2515.02C395.97 -2517.41 399.02 -2518.23 401.42 -2516.85L450.64 -2488.43C453.03 -2487.05 453.85 -2483.99 452.47 -2481.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.12 -2482.44L443.27 -2451.52L439.03 -2453.97L456.88 -2484.89L461.12 -2482.44Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.65 -2657.87L108.5 -2680.13C109.88 -2682.52 112.93 -2683.34 115.33 -2681.96L164.55 -2653.54C166.95 -2652.15 167.77 -2649.1 166.38 -2646.71L153.53 -2624.45C152.15 -2622.05 149.1 -2621.24 146.7 -2622.62L97.48 -2651.04C95.08 -2652.42 94.27 -2655.47 95.65 -2657.87Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.09 -2657.05L104.94 -2687.96L109.18 -2685.51L91.33 -2654.6L87.09 -2657.05Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M471.9 -2547.95L467.43 -2522.64C466.95 -2519.92 464.36 -2518.1 461.64 -2518.58L405.66 -2528.45C402.94 -2528.93 401.13 -2531.52 401.61 -2534.24L406.07 -2559.55C406.55 -2562.28 409.14 -2564.09 411.86 -2563.61L467.84 -2553.74C470.56 -2553.26 472.38 -2550.67 471.9 -2547.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.72 -2551.57L473.52 -2516.41L468.7 -2517.26L474.9 -2552.42L479.72 -2551.57Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M72.4 -2588.68L76.77 -2613.87C77.24 -2616.58 79.81 -2618.39 82.52 -2617.92L138.23 -2608.26C140.94 -2607.79 142.75 -2605.22 142.28 -2602.51L137.91 -2577.32C137.44 -2574.61 134.87 -2572.8 132.16 -2573.27L76.45 -2582.93C73.74 -2583.41 71.93 -2585.98 72.4 -2588.68Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.55 -2587.75L74.75 -2622.91L79.58 -2622.06L73.38 -2586.9L68.55 -2587.75Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M467.4 -2616.88L471.87 -2591.57C472.35 -2588.84 470.53 -2586.25 467.81 -2585.77L411.83 -2575.9C409.11 -2575.42 406.52 -2577.24 406.04 -2579.96L401.58 -2605.27C401.1 -2607.99 402.91 -2610.58 405.63 -2611.06L461.61 -2620.93C464.33 -2621.41 466.92 -2619.6 467.4 -2616.88Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M473.42 -2623.03L479.62 -2587.88L474.79 -2587.02L468.59 -2622.18L473.42 -2623.03Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M80.8 -2522.51L76.33 -2547.82C75.85 -2550.55 77.67 -2553.14 80.39 -2553.62L136.37 -2563.49C139.09 -2563.97 141.68 -2562.15 142.16 -2559.43L146.62 -2534.12C147.1 -2531.4 145.29 -2528.81 142.57 -2528.33L86.59 -2518.46C83.87 -2517.98 81.28 -2519.79 80.8 -2522.51Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M74.71 -2516.39L68.51 -2551.55L73.33 -2552.4L79.53 -2517.24L74.71 -2516.39Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.65 -2680.15L452.5 -2657.89C453.88 -2655.5 453.07 -2652.44 450.67 -2651.06L401.45 -2622.64C399.05 -2621.26 396 -2622.08 394.62 -2624.47L381.77 -2646.73C380.38 -2649.12 381.2 -2652.18 383.6 -2653.56L432.82 -2681.98C435.22 -2683.36 438.27 -2682.54 439.65 -2680.15Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.21 -2687.99L461.06 -2657.07L456.82 -2654.62L438.97 -2685.54L443.21 -2687.99Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.63 -2459.32L95.78 -2481.58C94.4 -2483.97 95.22 -2487.02 97.61 -2488.41L146.83 -2516.83C149.23 -2518.21 152.28 -2517.39 153.66 -2515L166.51 -2492.74C167.9 -2490.34 167.08 -2487.29 164.68 -2485.91L115.46 -2457.49C113.07 -2456.11 110.01 -2456.92 108.63 -2459.32Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M106.51 -2454.43L88.66 -2485.49L92.92 -2487.94L110.77 -2456.88L106.51 -2454.43Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M391.83 -2730.1L411.52 -2713.58C413.64 -2711.8 413.91 -2708.65 412.13 -2706.54L375.6 -2662.99C373.82 -2660.88 370.67 -2660.6 368.55 -2662.38L348.87 -2678.9C346.75 -2680.67 346.47 -2683.82 348.25 -2685.94L384.79 -2729.48C386.56 -2731.6 389.71 -2731.88 391.83 -2730.1Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.61 -2738.69L419.96 -2715.74L416.81 -2711.98L389.46 -2734.93L392.61 -2738.69Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M156.35 -2409.41L136.66 -2425.93C134.54 -2427.71 134.27 -2430.86 136.05 -2432.97L172.58 -2476.52C174.36 -2478.63 177.51 -2478.91 179.63 -2477.13L199.31 -2460.61C201.43 -2458.84 201.71 -2455.69 199.93 -2453.57L163.39 -2410.03C161.62 -2407.91 158.47 -2407.63 156.35 -2409.41Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.68 -2400.69L128.33 -2423.64L131.48 -2427.39L158.83 -2404.44L155.68 -2400.69Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M329.95 -2760.69L354.1 -2751.9C356.7 -2750.95 358.04 -2748.09 357.09 -2745.49L337.65 -2692.08C336.71 -2689.48 333.84 -2688.14 331.24 -2689.09L307.09 -2697.88C304.5 -2698.83 303.16 -2701.69 304.1 -2704.29L323.55 -2757.7C324.49 -2760.3 327.36 -2761.63 329.95 -2760.69Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M327.61 -2769.06L361.16 -2756.85L359.48 -2752.25L325.94 -2764.46L327.61 -2769.06Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M218.36 -2378.75L194.21 -2387.54C191.61 -2388.48 190.28 -2391.35 191.22 -2393.95L210.66 -2447.36C211.61 -2449.96 214.47 -2451.29 217.07 -2450.35L241.22 -2441.56C243.82 -2440.61 245.15 -2437.75 244.21 -2435.15L224.77 -2381.74C223.82 -2379.14 220.96 -2377.8 218.36 -2378.75Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M220.62 -2370.46L187.07 -2382.67L188.75 -2387.28L222.3 -2375.07L220.62 -2370.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M411.53 -2425.95L391.85 -2409.43C389.73 -2407.66 386.58 -2407.93 384.8 -2410.05L348.27 -2453.59C346.49 -2455.71 346.76 -2458.86 348.88 -2460.64L368.57 -2477.16C370.69 -2478.93 373.84 -2478.66 375.61 -2476.54L412.15 -2433C413.93 -2430.88 413.65 -2427.73 411.53 -2425.95Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M419.96 -2423.76L392.62 -2400.81L389.47 -2404.57L416.82 -2427.51L419.96 -2423.76Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M136.59 -2713.56L156.27 -2730.08C158.39 -2731.85 161.54 -2731.58 163.32 -2729.46L199.85 -2685.92C201.63 -2683.8 201.36 -2680.65 199.24 -2678.87L179.55 -2662.35C177.43 -2660.58 174.28 -2660.85 172.51 -2662.97L135.97 -2706.51C134.19 -2708.63 134.47 -2711.78 136.59 -2713.56Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M128.24 -2715.71L155.59 -2738.66L158.74 -2734.91L131.39 -2711.96L128.24 -2715.71Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -2275.6L502.7 -2275.6C527.59 -2275.6 547.7 -2255.49 547.7 -2230.6L547.7 -1773.25C547.7 -1748.37 527.59 -1728.25 502.7 -1728.25L45.3 -1728.25C20.41 -1728.25 0.3 -1748.37 0.3 -1773.25L0.3 -2230.6C0.3 -2255.49 20.41 -2275.6 45.3 -2275.6Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" class="shp1"
                                 d="M274 -1933C235.9 -1933 205.1 -1963.8 205.1 -2001.9C205.1 -2040 235.9 -2070.8 274 -2070.8C312.1 -2070.8 342.9 -2040 342.9 -2001.9C342.9 -1963.8 312.1 -1933 274 -1933Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -2209.5L280.7 -2209.5L280.7 -2049.63L267.3 -2049.63L267.3 -2209.5Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M267.3 -1954.1L280.7 -1954.1L280.7 -1794.23L267.3 -1794.23L267.3 -1954.1Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M164.39 -2178.41L176 -2185.11L255.93 -2046.66L244.33 -2039.96L164.39 -2178.41Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M292.09 -1957.19L303.69 -1963.89L383.62 -1825.44L372.02 -1818.74L292.09 -1957.19Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M90.74 -2099.91L97.44 -2111.52L235.89 -2031.58L229.19 -2019.98L90.74 -2099.91Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M312.06 -1972.17L318.76 -1983.77L457.21 -1903.83L450.51 -1892.23L312.06 -1972.17Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M66.4 -1995.2L66.4 -2008.6L226.27 -2008.6L226.27 -1995.2L66.4 -1995.2Z"></path>
                                 <path id="Layer" class="shp2"
                                    d="M321.8 -1995.2L321.8 -2008.6L481.67 -2008.6L481.67 -1995.2L321.8 -1995.2Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M97.56 -1892.2L90.86 -1903.81L229.31 -1983.74L236.01 -1972.14L97.56 -1892.2Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M318.77 -2019.92L312.07 -2031.52L450.52 -2111.45L457.22 -2099.85L318.77 -2019.92Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <path id="Layer" class="shp2"
                                    d="M172.63 -1822.65L160.97 -1829.35L240.91 -1968.44L252.57 -1961.74L172.63 -1822.65Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M299.87 -2043L288.21 -2049.7L368.15 -2188.78L379.81 -2182.08L299.87 -2043Z">
                                 </path>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M261.1 -2200.6L286.8 -2200.6C289.57 -2200.6 291.8 -2198.36 291.8 -2195.6L291.8 -2138.76C291.8 -2135.99 289.57 -2133.76 286.8 -2133.76L261.1 -2133.76C258.34 -2133.76 256.1 -2135.99 256.1 -2138.76L256.1 -2195.6C256.1 -2198.36 258.34 -2200.6 261.1 -2200.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M256.1 -2207.7L291.8 -2207.7L291.8 -2202.8L256.1 -2202.8L256.1 -2207.7Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M286.8 -1803.6L261.1 -1803.6C258.33 -1803.6 256.1 -1805.84 256.1 -1808.6L256.1 -1865.44C256.1 -1868.21 258.33 -1870.44 261.1 -1870.44L286.8 -1870.44C289.56 -1870.44 291.8 -1868.21 291.8 -1865.44L291.8 -1808.6C291.8 -1805.84 289.56 -1803.6 286.8 -1803.6Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M291.8 -1796.5L256.1 -1796.5L256.1 -1801.4L291.8 -1801.4L291.8 -1796.5Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M384.45 -1836.44L362.2 -1823.59C359.8 -1822.2 356.75 -1823.02 355.37 -1825.42L326.95 -1874.64C325.56 -1877.04 326.38 -1880.09 328.78 -1881.47L351.03 -1894.32C353.43 -1895.7 356.48 -1894.89 357.86 -1892.49L386.28 -1843.27C387.67 -1840.87 386.85 -1837.82 384.45 -1836.44Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M392.29 -1832.72L361.37 -1814.87L358.92 -1819.12L389.84 -1836.97L392.29 -1832.72Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M163.57 -2167.4L185.82 -2180.25C188.22 -2181.63 191.27 -2180.81 192.65 -2178.42L221.07 -2129.19C222.46 -2126.8 221.64 -2123.74 219.24 -2122.36L196.99 -2109.51C194.59 -2108.13 191.54 -2108.95 190.16 -2111.34L161.74 -2160.57C160.35 -2162.96 161.17 -2166.01 163.57 -2167.4Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M155.78 -2171.03L186.7 -2188.88L189.15 -2184.64L158.23 -2166.79L155.78 -2171.03Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M452.44 -1913.71L439.59 -1891.45C438.2 -1889.06 435.15 -1888.24 432.76 -1889.62L383.53 -1918.04C381.14 -1919.42 380.32 -1922.48 381.7 -1924.87L394.55 -1947.13C395.93 -1949.52 398.99 -1950.34 401.38 -1948.96L450.61 -1920.54C453 -1919.16 453.82 -1916.1 452.44 -1913.71Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M461.03 -1914.46L443.18 -1883.54L438.94 -1885.99L456.79 -1916.91L461.03 -1914.46Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M95.83 -2089.94L108.68 -2112.2C110.07 -2114.6 113.12 -2115.41 115.51 -2114.03L164.74 -2085.61C167.13 -2084.23 167.95 -2081.18 166.57 -2078.78L153.72 -2056.52C152.34 -2054.13 149.28 -2053.31 146.89 -2054.69L97.66 -2083.11C95.27 -2084.5 94.45 -2087.55 95.83 -2089.94Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M87.14 -2089.09L104.99 -2120L109.23 -2117.55L91.38 -2086.64L87.14 -2089.09Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M472.6 -2014.8L472.6 -1989.1C472.6 -1986.33 470.36 -1984.1 467.6 -1984.1L410.76 -1984.1C407.99 -1984.1 405.76 -1986.33 405.76 -1989.1L405.76 -2014.8C405.76 -2017.57 407.99 -2019.8 410.76 -2019.8L467.6 -2019.8C470.36 -2019.8 472.6 -2017.57 472.6 -2014.8Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M479.6 -2019.7L479.6 -1984L474.7 -1984L474.7 -2019.7L479.6 -2019.7Z"></path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M75.5 -1988.9L75.5 -2014.6C75.5 -2017.37 77.73 -2019.6 80.5 -2019.6L137.34 -2019.6C140.1 -2019.6 142.34 -2017.37 142.34 -2014.6L142.34 -1988.9C142.34 -1986.13 140.1 -1983.9 137.34 -1983.9L80.5 -1983.9C77.73 -1983.9 75.5 -1986.13 75.5 -1988.9Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M68.4 -1984L68.4 -2019.7L73.3 -2019.7L73.3 -1984L68.4 -1984Z"></path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M439.45 -2112.2L452.3 -2089.94C453.69 -2087.54 452.87 -2084.49 450.47 -2083.11L401.25 -2054.69C398.85 -2053.31 395.8 -2054.12 394.42 -2056.52L381.57 -2078.78C380.19 -2081.17 381 -2084.22 383.4 -2085.61L432.62 -2114.03C435.02 -2115.41 438.07 -2114.59 439.45 -2112.2Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M443.01 -2120.13L460.86 -2089.22L456.62 -2086.77L438.77 -2117.68L443.01 -2120.13Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M108.43 -1891.37L95.58 -1913.63C94.2 -1916.02 95.01 -1919.08 97.41 -1920.46L146.63 -1948.88C149.03 -1950.26 152.08 -1949.44 153.46 -1947.05L166.31 -1924.79C167.7 -1922.4 166.88 -1919.34 164.48 -1917.96L115.26 -1889.54C112.86 -1888.16 109.81 -1888.98 108.43 -1891.37Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M104.83 -1883.46L86.98 -1914.38L91.22 -1916.83L109.07 -1885.91L104.83 -1883.46Z">
                                    </path>
                                 </g>
                              </g>
                              <g id="Layer">
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M362.23 -2180.12L384.49 -2167.27C386.89 -2165.89 387.7 -2162.84 386.32 -2160.44L357.9 -2111.22C356.52 -2108.82 353.47 -2108.01 351.07 -2109.39L328.81 -2122.24C326.42 -2123.62 325.6 -2126.67 326.98 -2129.07L355.4 -2178.29C356.79 -2180.69 359.84 -2181.51 362.23 -2180.12Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M361.54 -2188.71L392.46 -2170.86L390.01 -2166.61L359.09 -2184.46L361.54 -2188.71Z">
                                    </path>
                                 </g>
                                 <g id="Layer">
                                    <path id="Layer" class="shp2"
                                       d="M186.1 -1823.42L163.84 -1836.27C161.45 -1837.65 160.63 -1840.71 162.01 -1843.1L190.43 -1892.33C191.81 -1894.72 194.87 -1895.54 197.26 -1894.16L219.52 -1881.31C221.91 -1879.93 222.73 -1876.87 221.35 -1874.48L192.93 -1825.25C191.54 -1822.86 188.49 -1822.04 186.1 -1823.42Z">
                                    </path>
                                    <path id="Layer" class="shp2"
                                       d="M186.83 -1814.76L155.91 -1832.61L158.36 -1836.86L189.28 -1819.01L186.83 -1814.76Z">
                                    </path>
                                 </g>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -1709.8L502.7 -1709.8C527.59 -1709.8 547.7 -1689.68 547.7 -1664.8L547.7 -1207.45C547.7 -1182.56 527.59 -1162.45 502.7 -1162.45L45.3 -1162.45C20.41 -1162.45 0.3 -1182.56 0.3 -1207.45L0.3 -1664.8C0.3 -1689.68 20.41 -1709.8 45.3 -1709.8Z">
                           </path>
                           <g id="Layer">
                              <g id="Layer">
                                 <path id="Layer" fill-rule="evenodd" class="shp2"
                                    d="M512.4 -1523.6L503.7 -1417.3L269.3 -1358.1C268.91 -1358.19 268.53 -1358.3 268.15 -1358.43C267.78 -1358.56 267.41 -1358.71 267.05 -1358.88C266.69 -1359.05 266.34 -1359.24 265.99 -1359.44C265.65 -1359.64 265.32 -1359.86 265 -1360.1L175.2 -1432.3L164.9 -1430.1L71 -1507.7L69.6 -1523.4L72 -1527.4L246.2 -1550.3L264.4 -1543L458.7 -1570.4L512.4 -1523.6ZM438.6 -1493.8C438.6 -1493.8 442.9 -1482.4 443.3 -1478C443.3 -1478 446.7 -1492.2 449.6 -1495.9L438.6 -1493.8ZM411.4 -1489.1C403 -1480.8 401 -1460.7 399.7 -1455.1C398.4 -1449.5 402.3 -1449.2 402.3 -1449.2C402.3 -1449.2 430.3 -1454.3 436.8 -1456.5C443.3 -1458.7 438.5 -1477.9 436.8 -1485.1C435.1 -1492.3 431.4 -1492.7 431.4 -1492.7L411.4 -1489.1ZM392.3 -1485.2C392.3 -1484.4 397.8 -1473.3 397.8 -1468.8C397.8 -1468.8 400.9 -1485.2 404.4 -1487.2L392.3 -1485.2ZM362 -1479.7C355.8 -1471.8 352.5 -1450.8 351.6 -1444.8C350.7 -1438.8 354.9 -1439.2 354.9 -1439.2L391.4 -1447.2C397.4 -1448.9 392 -1472.4 390 -1478.2C388 -1484 385 -1483.9 385 -1483.9L362 -1479.7ZM343.8 -1476.3C343.71 -1476.2 343.63 -1476.08 343.58 -1475.95C343.53 -1475.82 343.5 -1475.69 343.5 -1475.55C343.5 -1475.41 343.53 -1475.28 343.58 -1475.15C343.63 -1475.02 343.71 -1474.9 343.8 -1474.8C345 -1473.6 349.3 -1459.3 349.3 -1459.3C349.3 -1466.3 355.7 -1478.2 355.7 -1478.2L343.8 -1476.3ZM343.8 -1459C343.8 -1459 340.7 -1468.9 337 -1474.5L300.1 -1468C300.1 -1468 295.1 -1465.4 295.1 -1462.5L295.1 -1430.9C295.1 -1430.9 295.5 -1426.2 300.5 -1427.4L343.3 -1436.8C343.3 -1436.8 350 -1439.9 343.8 -1459ZM248.9 -1454.3L223.9 -1470.4L222.6 -1469.2L223.2 -1448.5L248.9 -1431L248.9 -1454.3ZM314.2 -1510.1C316.7 -1510.6 317.1 -1511.9 317.1 -1511.9L317.1 -1514C317.1 -1514.1 317.1 -1514.2 317.08 -1514.3C317.06 -1514.4 317.04 -1514.49 317 -1514.59C316.97 -1514.68 316.93 -1514.77 316.88 -1514.86C316.83 -1514.94 316.77 -1515.03 316.7 -1515.1L295.1 -1539.8C294.82 -1540.12 294.5 -1540.41 294.15 -1540.66C293.8 -1540.91 293.42 -1541.11 293.02 -1541.27C292.62 -1541.42 292.21 -1541.53 291.78 -1541.59C291.36 -1541.64 290.93 -1541.65 290.5 -1541.6L236.8 -1534.1C233.5 -1533.8 233.4 -1532.3 233.4 -1532.3L233.4 -1529.2L253.2 -1503.8C253.5 -1503.33 253.87 -1502.9 254.3 -1502.54C254.72 -1502.17 255.2 -1501.88 255.71 -1501.65C256.23 -1501.43 256.77 -1501.29 257.33 -1501.23C257.89 -1501.17 258.45 -1501.19 259 -1501.3L314.2 -1510.1ZM335.1 -1391.6C341.5 -1398 346 -1427.2 346 -1427.2C346 -1430.8 341.7 -1431 341.7 -1431L298.7 -1421.9C294.9 -1420.9 295.1 -1419 295.1 -1419L295.1 -1385.9C296.4 -1382.4 299.2 -1382.8 299.2 -1382.8L335.1 -1391.6ZM353.7 -1395.6C353.7 -1395.6 347.9 -1407.2 348.3 -1410.8C348.3 -1410.8 343.6 -1396.3 342.1 -1392.7L353.7 -1395.6ZM383.2 -1403.2C390.1 -1412 394.1 -1437 394.1 -1437C394.1 -1442.4 389.3 -1441.4 389.3 -1441.4L355.1 -1434.1C348.5 -1431.4 351.6 -1418.1 351.6 -1418.1C355.7 -1398.9 360.9 -1397.8 360.9 -1397.8L383.2 -1403.2ZM400.7 -1407C400.7 -1407 395.7 -1417.8 395.7 -1422C395.7 -1423.4 391.6 -1406.3 389.6 -1404.2L400.7 -1407ZM427.7 -1413.5C433.5 -1417.8 439.4 -1441.7 439.4 -1446.8C439.4 -1451.9 435.2 -1451.2 435.2 -1451.2L403.3 -1444.4C399.7 -1442.8 398.5 -1441.5 399.5 -1428.8C400.5 -1416.1 407 -1408.8 407 -1408.8L427.7 -1413.5ZM445.5 -1417.4C445.5 -1417.4 441 -1430.4 441 -1432C441 -1432 436.2 -1416.2 435.3 -1415.3L445.5 -1417.4ZM484 -1431C484 -1431 485.9 -1455.9 485.9 -1458.9C485.9 -1461.9 482.5 -1461.3 482.5 -1461.3L448.1 -1454.1C437.8 -1450.3 450.2 -1419.2 450.2 -1419.2C450.2 -1419.2 476 -1425.2 479.4 -1425.8C482.8 -1426.4 484 -1431 484 -1431ZM488.9 -1497.7C489.02 -1498.25 489.02 -1498.82 488.91 -1499.38C488.8 -1499.93 488.58 -1500.46 488.26 -1500.92C487.94 -1501.39 487.54 -1501.79 487.06 -1502.09C486.59 -1502.4 486.06 -1502.6 485.5 -1502.7L456.6 -1497.4C451.6 -1495.3 445.4 -1467.7 444.8 -1462.9C444.2 -1458.1 447.4 -1459 447.4 -1459L482.6 -1466C486.4 -1466.7 486.9 -1471 486.9 -1471L488.9 -1497.7Z">
                                 </path>
                                 <path id="Layer" class="shp2"
                                    d="M243.3 -1528.7C243.3 -1528.7 242 -1528 242.8 -1527.2L255.8 -1511.1C255.8 -1511.1 256.1 -1510.2 258.6 -1510.6L307.5 -1518.2C307.5 -1518.2 309.1 -1518.3 307.8 -1519.6L293.8 -1535.4C293.8 -1535.4 293.5 -1536 291.4 -1535.6L243.6 -1528.7">
                                 </path>
                              </g>
                              <path id="Layer" class="shp2"
                                 d="M45.9 -1505.9C45.9 -1505.9 9.1 -1496.3 27.6 -1477.8L268.5 -1277.1C268.5 -1277.1 289.8 -1263.1 346.4 -1277.1L496 -1325.8L350 -1270.9C350 -1270.9 319.9 -1249.1 264.3 -1266.5L22.4 -1471.4C22.4 -1471.4 6.3 -1499.2 45.9 -1505.9Z">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M83.7 -1441.7C87.1 -1444.9 90.9 -1449.7 90.1 -1454.8C89.3 -1459.9 84.9 -1461.2 83.4 -1466.1C82.3 -1469.5 82.5 -1474.9 89.1 -1483.1">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M116.2 -1415.3C119.6 -1418.6 123.5 -1423.4 122.6 -1428.5C121.7 -1433.6 117.4 -1434.8 115.9 -1439.7C114.4 -1444.6 115.1 -1448.6 121.7 -1456.7">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M148.9 -1390.1C152.3 -1393.4 156.1 -1398.2 155.2 -1403.3C154.3 -1408.4 150.1 -1409.7 148.6 -1414.5C147.1 -1419.3 147.7 -1423.4 154.3 -1431.5">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M207.7 -1348.7C211.1 -1352 214.9 -1356.8 214.1 -1361.9C213.3 -1367 208.9 -1368.3 207.4 -1373.1C205.9 -1377.9 206.6 -1382 213.2 -1390.1">
                              </path>
                              <path id="Layer" class="shp3"
                                 d="M177.3 -1369.4C180.7 -1372.7 184.6 -1377.5 183.7 -1382.6C182.8 -1387.7 178.6 -1389 177 -1393.8C175.4 -1398.6 176.2 -1402.7 182.8 -1410.8">
                              </path>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -1142.7L502.7 -1142.7C527.59 -1142.7 547.7 -1122.59 547.7 -1097.7L547.7 -640.35C547.7 -615.46 527.59 -595.35 502.7 -595.35L45.3 -595.35C20.41 -595.35 0.3 -615.46 0.3 -640.35L0.3 -1097.7C0.3 -1122.59 20.41 -1142.7 45.3 -1142.7Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" class="shp2"
                                 d="M49.3 -992.3L51 -977.9L82 -978.6L80.6 -992.8L49.3 -992.3L49.3 -992.3Z"></path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M513.1 -858.9L508.9 -837.7L499.8 -836.3L494.9 -838.7C494.9 -838.7 505.5 -854.1 488.1 -862.5L481.1 -862.2L344.4 -919.9L111.5 -901.7L121.2 -802.8L124.7 -773.4L126.2 -748.3L121.9 -747.6L126.4 -699.2L418.1 -763.9L423.3 -821.3L445.1 -824.7L432.5 -752.1L427.1 -750.9L425.1 -752.7L128 -683.4L128 -681.1L118.4 -680L111.7 -745.4L110 -744.9L107.9 -754.8L103.2 -799.9L102.9 -810.3L60.8 -804.3L35 -998.3L51.9 -1005.4L49 -1030.6L57.7 -1030.6L54.8 -1057.1C54.8 -1057.1 73.4 -1059.2 82.6 -1056.7C82.6 -1056.7 83.7 -1057.1 84.1 -1052.1L86 -1030.4L91.7 -1030.4L93.4 -1028.8L94.8 -1010.6L240.5 -1010.8L377.8 -997.1L373.8 -947.5L371.1 -916.6L512.6 -860.4C512.6 -860.4 513.3 -860.4 513.1 -858.9ZM83.1 -976.5L81.5 -994.2C81.49 -994.3 81.47 -994.4 81.44 -994.5C81.4 -994.59 81.35 -994.68 81.29 -994.76C81.23 -994.84 81.15 -994.91 81.07 -994.97C80.99 -995.03 80.9 -995.07 80.8 -995.1L49.6 -994.8C47.7 -994.8 47.7 -994.2 47.7 -994.2C47.7 -994.2 49.9 -978.3 49.9 -976.9C49.9 -975.5 50.7 -975.7 50.7 -975.7L82.3 -976.3C83.1 -976.3 83.1 -976.5 83.1 -976.5ZM370.5 -925C370.5 -925 371.2 -925 371.4 -926.1L373.3 -950C373.3 -950 373.4 -950.8 372.3 -950.8L99.5 -937C99.33 -936.95 99.17 -936.88 99.02 -936.78C98.88 -936.67 98.76 -936.55 98.66 -936.4C98.56 -936.26 98.48 -936.09 98.44 -935.92C98.4 -935.75 98.38 -935.58 98.4 -935.4L101.1 -906.2C101.1 -906.2 101 -905.2 102.9 -905.2L370.5 -925Z">
                              </path>
                              <path id="Layer" class="shp4" d="M106.4 -935L109 -908.5"></path>
                              <path id="Layer" class="shp5" d="M367.7 -948.8L365.9 -926.7"></path>
                              <g id="Layer">
                                 <path id="Layer" class="shp6"
                                    d="M130.4 -899.8L153.3 -810.6C153.3 -810.6 157.4 -783.9 154.3 -780.8L484.3 -835.1C484.3 -835.1 494.5 -848.7 479.7 -859.4L346.7 -916.5L130.4 -899.8Z">
                                 </path>
                              </g>
                              <path id="Layer" class="shp2"
                                 d="M147.6 -815L130.8 -812.5L131.5 -803.7L119.6 -801.9L121.3 -786.6L132.8 -788.3L133.9 -778.4L151.4 -781.2C151.4 -781.2 154.6 -807.2 147.6 -815Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M480.7 -861.7L487.2 -862.2C487.2 -862.2 503.5 -856.3 493.9 -838.7L488.8 -837.8C488.8 -837.8 496.8 -850.4 480.7 -861.7Z">
                              </path>
                              <g id="Layer">
                                 <path id="Layer" class="shp7"
                                    d="M179.3 -1029.7C183.5 -1034.2 188.2 -1040.7 187.2 -1047.7C186.2 -1054.7 180.8 -1056.4 178.9 -1063.1C177.6 -1067.8 177.9 -1075.2 186.1 -1086.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M218.1 -1029.7C222.3 -1034.2 227 -1040.7 225.9 -1047.7C224.8 -1054.7 219.6 -1056.4 217.7 -1063.1C216.4 -1067.8 216.7 -1075.2 224.8 -1086.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M260.5 -1029.7C264.7 -1034.2 269.4 -1040.7 268.4 -1047.7C267.4 -1054.7 262 -1056.4 260.1 -1063.1C258.8 -1067.8 259.1 -1075.2 267.2 -1086.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M300 -1029.7C304.2 -1034.2 308.9 -1040.7 307.9 -1047.7C306.9 -1054.7 301.5 -1056.4 299.6 -1063.1C298.3 -1067.8 298.6 -1075.2 306.8 -1086.3">
                                 </path>
                                 <path id="Layer" class="shp7"
                                    d="M340.1 -1029.7C344.3 -1034.2 349 -1040.7 348 -1047.7C347 -1054.7 341.6 -1056.4 339.8 -1063.1C338.4 -1067.8 338.7 -1075.2 346.9 -1086.3">
                                 </path>
                              </g>
                           </g>
                        </g>
                        <g id="Layer">
                           <path id="Layer" class="shp0"
                              d="M45.3 -571.1L502.7 -571.1C527.59 -571.1 547.7 -550.99 547.7 -526.1L547.7 -68.75C547.7 -43.86 527.59 -23.75 502.7 -23.75L45.3 -23.75C20.41 -23.75 0.3 -43.86 0.3 -68.75L0.3 -526.1C0.3 -550.99 20.41 -571.1 45.3 -571.1Z">
                           </path>
                           <g id="Layer">
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M204.3 -423.6C205.25 -423.6 206.18 -423.41 207.06 -423.05C207.93 -422.69 208.72 -422.16 209.39 -421.49C210.06 -420.82 210.59 -420.03 210.95 -419.16C211.31 -418.28 211.5 -417.35 211.5 -416.4L211.5 -165.6C211.5 -164.66 211.31 -163.73 210.95 -162.86C210.59 -161.99 210.06 -161.2 209.39 -160.54C208.72 -159.88 207.92 -159.36 207.05 -159.01C206.17 -158.66 205.24 -158.49 204.3 -158.5L131.2 -158.5L99.7 -126.9L88.6 -126.9L55.4 -157.4L55.4 -174.5L85.8 -202.7L85.8 -389.3L50.9 -421.4L50.9 -467.9L97.4 -467.9L137.8 -423.6L204.3 -423.6ZM110.7 -256.4L118.8 -256.4L138.4 -295.9L118.1 -335.4L110.7 -335.4L110.7 -256.4ZM155.6 -270.8L146.1 -270.8L110.7 -200L110.7 -191.1L155.6 -191.1L155.6 -270.8ZM155.6 -402.6L110.7 -402.6L110.7 -393.7L146.1 -322.9L155.6 -322.9L155.6 -402.6Z">
                              </path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M486.3 -457.4C487.72 -457.4 489.12 -457.12 490.43 -456.58C491.74 -456.04 492.93 -455.24 493.94 -454.24C494.94 -453.23 495.74 -452.04 496.28 -450.73C496.82 -449.42 497.1 -448.02 497.1 -446.6L497.1 -148.2C497.1 -146.78 496.82 -145.38 496.28 -144.07C495.74 -142.76 494.94 -141.57 493.94 -140.56C492.93 -139.56 491.74 -138.76 490.43 -138.22C489.12 -137.68 487.72 -137.4 486.3 -137.4L251.5 -137.4C250.09 -137.4 248.69 -137.68 247.38 -138.22C246.08 -138.77 244.89 -139.57 243.9 -140.57C242.9 -141.57 242.12 -142.76 241.59 -144.07C241.05 -145.38 240.79 -146.79 240.8 -148.2L240.8 -446.6C240.79 -448.01 241.05 -449.42 241.59 -450.73C242.12 -452.04 242.9 -453.23 243.9 -454.23C244.89 -455.23 246.08 -456.03 247.38 -456.58C248.69 -457.12 250.09 -457.4 251.5 -457.4L486.3 -457.4ZM475.5 -435.2L451.1 -435.2L451.1 -421.9L264 -421.9L264 -156.8L475.5 -156.8L475.5 -435.2Z">
                              </path>
                           </g>
                        </g>
                        <g id="Layer">
                           <g id="Layer">
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M436.1 148.2L421.6 206.5L277.8 206.5L284.3 142.5C284.3 142.5 289.6 126.6 305.9 126.6L423.1 126.6C423.1 126.6 439.5 126.6 436.1 148.2ZM434.2 146.5C434.2 146.5 435 128.7 423.3 131C411.6 133.3 412.4 203 412.4 203L420.2 203L434.2 146.5Z">
                              </path>
                              <path id="Layer" fill-rule="evenodd" class="shp2"
                                 d="M512.1 170.1L376 389.9L40 376.6L270.2 170.1L276 170.1L273.6 193.5L94.5 353L113.5 353L274.4 213.4L268.8 238.3L418.2 240.8L427.3 204.8L466.9 204.8L475.8 188.3L432.4 188.3L436.6 170.1L512.1 170.1ZM412.4 248.7L262.2 244.7L146.3 355.4L329.5 364L412.4 248.7Z">
                              </path>
                              <path id="Layer" class="shp2"
                                 d="M40 380.5L44.2 411.9L384.3 429.6L377.5 395.9L40 380.5L40 380.5Z"></path>
                           </g>
                        </g>
                     </svg>
                  </a>
               </div>
               <h4>Printing Accessories</h4>
               <div class="descr_to_item">
                  <ul>
                     <li>Screen Printing Press Pallets</li>
                     <li>Big Forge – In-line Heat Press</li>
                     <li>Cooling Fan module</li>
                  </ul>
               </div>
               <div class="link_to_item"><a  target="_blank"  href="https://anatol.com//products-category/screen-printing-accessories/"
                     class="btn button_go button red-button draw-red">Learn More</a></div>
            </div>
         </div>
      </div>
   </div>

</div>
<div id="scroll" class="wrapper_form">
   <div class="container">
      <div class="form_title">Join us to become the best</div>
      <div class="form_description">Contact us today to learn how you can join the all-electric <br> screen printing revolution</div>
      <form id="__vtigerWebForm" name="Get a quote on Volt Landing" action="" method="post" accept-charset="utf-8" class="get_quote snapforms" enctype="multipart/form-data">
						<input type="hidden" name="SFWebFormTimer" value="4335">
						<input type="hidden" name="__vtrftk" value="sid:117320670c26be7435a870e1421555aa92ad29f6,1614093617">
						<input type="hidden" name="publicid" value="0aee4eda12acdaf163860fd64d6841da">
						<input type="hidden" name="urlencodeenable" value="1">
						<input type="hidden" name="name" value="Get a Quote on Volt Landing">
						<input type="text" name="leadsource" value="Web Site" style="display:none;">
						<input type="text" name="cf_979" value="Get a Quote on Volt Landing" style="display:none;">
						<div class="form-row">
							<div class="half">
								<label>First Name<span class="field_required">*</span></label>
								<input type="text" name="firstname" placeholder="First Name*" required="">
							</div>
							<div class="half">
								<label>Last Name<span class="field_required">*</span></label>
								<input type="text" name="lastname" placeholder="Last Name*" required="">
							</div>
						</div>

						<div class="form-row">
							<div class="half">
								<label>Phone Number<span class="field_required">*</span></label>
								<input type="tel" name="phone" placeholder="Phone Number*" maxlength="18" id="tel" required="">
							</div>
							<div class="half">
								<label>Email<span class="field_required">*</span></label>
								<input type="Email" name="email" placeholder="Email*" required="">
							</div>
						</div>


						<div class="form-row">
							<div class="half">
								<label>Company Name</label>
								<input type="text" name="company" placeholder="Company Name">
							</div>
							<div class="half">
								<label>Country</label>
								<select name="cf_1085" onchange="yesnoCheck(this);" required="">
									<option class="choose_elements" value="" selected="selected">Select Country*</option>
									<option class="elements" value="United States">United States</option>
									<option class="elements" value="United Kingdom">United Kingdom</option>
									<option class="elements" value="Afghanistan">Afghanistan</option>
									<option class="elements" value="Albania">Albania</option>
									<option class="elements" value="Algeria">Algeria</option>
									<option class="elements" value="American Samoa">American Samoa</option>
									<option class="elements" value="Andorra">Andorra</option>
									<option class="elements" value="Angola">Angola</option>
									<option class="elements" value="Anguilla">Anguilla</option>
									<option class="elements" value="Antarctica">Antarctica</option>
									<option class="elements" value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option class="elements" value="Argentina">Argentina</option>
									<option class="elements" value="Armenia">Armenia</option>
									<option class="elements" value="Aruba">Aruba</option>
									<option class="elements" value="Australia">Australia</option>
									<option class="elements" value="Austria">Austria</option>
									<option class="elements" value="Azerbaijan">Azerbaijan</option>
									<option class="elements" value="Bahamas">Bahamas</option>
									<option class="elements" value="Bahrain">Bahrain</option>
									<option class="elements" value="Bangladesh">Bangladesh</option>
									<option class="elements" value="Barbados">Barbados</option>
									<option class="elements" value="Belarus">Belarus</option>
									<option class="elements" value="Belgium">Belgium</option>
									<option class="elements" value="Belize">Belize</option>
									<option class="elements" value="Benin">Benin</option>
									<option class="elements" value="Bermuda">Bermuda</option>
									<option class="elements" value="Bhutan">Bhutan</option>
									<option class="elements" value="Bolivia">Bolivia</option>
									<option class="elements" value="Bonaire">Bonaire, Sint Eustatius and Saba</option>
									<option class="elements" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option class="elements" value="Botswana">Botswana</option>
									<option class="elements" value="Bouvet Island">Bouvet Island</option>
									<option class="elements" value="Brazil">Brazil</option>
									<option class="elements" value="British Indian Ocean Territory">British Indian Ocean
										Territory</option>
									<option class="elements" value="Brunei Darussalam">Brunei Darussalam</option>
									<option class="elements" value="Bulgaria">Bulgaria</option>
									<option class="elements" value="Burkina Faso">Burkina Faso</option>
									<option class="elements" value="Burundi">Burundi</option>
									<option class="elements" value="Cambodia">Cambodia</option>
									<option class="elements" value="Cameroon">Cameroon</option>
									<option class="elements" value="Canada">Canada</option>
									<option class="elements" value="Cape Verde">Cape Verde</option>
									<option class="elements" value="Cayman Islands">Cayman Islands</option>
									<option class="elements" value="Central African Republic">Central African Republic</option>
									<option class="elements" value="Chad">Chad</option>
									<option class="elements" value="Chile">Chile</option>
									<option class="elements" value="China">China</option>
									<option class="elements" value="Christmas Island">Christmas Island</option>
									<option class="elements" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option class="elements" value="Colombia">Colombia</option>
									<option class="elements" value="Comoros">Comoros</option>
									<option class="elements" value="Congo">Congo</option>
									<option class="elements" value="Cook Islands">Cook Islands</option>
									<option class="elements" value="Costa Rica">Costa Rica</option>
									<option class="elements" value="Cote D'ivoire">Cote D'ivoire</option>
									<option class="elements" value="Croatia">Croatia</option>
									<option class="elements" value="Cuba">Cuba</option>
									<option class="elements" value="Cyprus">Cyprus</option>
									<option class="elements" value="Czech Republic">Czech Republic</option>
									<option class="elements" value="Denmark">Denmark</option>
									<option class="elements" value="Djibouti">Djibouti</option>
									<option class="elements" value="Dominica">Dominica</option>
									<option class="elements" value="Dominican Republic">Dominican Republic</option>
									<option class="elements" value="Ecuador">Ecuador</option>
									<option class="elements" value="Egypt">Egypt</option>
									<option class="elements" value="El Salvador">El Salvador</option>
									<option class="elements" value="Equatorial Guinea">Equatorial Guinea</option>
									<option class="elements" value="Eritrea">Eritrea</option>
									<option class="elements" value="Estonia">Estonia</option>
									<option class="elements" value="Ethiopia">Ethiopia</option>
									<option class="elements" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
									</option>
									<option class="elements" value="Faroe Islands">Faroe Islands</option>
									<option class="elements" value="Fiji">Fiji</option>
									<option class="elements" value="Finland">Finland</option>
									<option class="elements" value="France">France</option>
									<option class="elements" value="French Guiana">French Guiana</option>
									<option class="elements" value="French Polynesia">French Polynesia</option>
									<option class="elements" value="French Southern Territories">French Southern Territories
									</option>
									<option class="elements" value="Gabon">Gabon</option>
									<option class="elements" value="Gambia">Gambia</option>
									<option class="elements" value="Georgia">Georgia</option>
									<option class="elements" value="Germany">Germany</option>
									<option class="elements" value="Ghana">Ghana</option>
									<option class="elements" value="Gibraltar">Gibraltar</option>
									<option class="elements" value="Greece">Greece</option>
									<option class="elements" value="Greenland">Greenland</option>
									<option class="elements" value="Grenada">Grenada</option>
									<option class="elements" value="Guadeloupe">Guadeloupe</option>
									<option class="elements" value="Guam">Guam</option>
									<option class="elements" value="Guatemala">Guatemala</option>
									<option class="elements" value="Guinea">Guinea</option>
									<option class="elements" value="Guinea-bissau">Guinea-bissau</option>
									<option class="elements" value="Guyana">Guyana</option>
									<option class="elements" value="Haiti">Haiti</option>
									<option class="elements" value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
										Islands</option>
									<option class="elements" value="Holy See (Vatican City State)">Holy See (Vatican City State)
									</option>
									<option class="elements" value="Honduras">Honduras</option>
									<option class="elements" value="Hong Kong">Hong Kong</option>
									<option class="elements" value="Hungary">Hungary</option>
									<option class="elements" value="Iceland">Iceland</option>
									<option class="elements" value="India">India</option>
									<option class="elements" value="Indonesia">Indonesia</option>
									<option class="elements" value="Iran">Iran, Islamic Republic of</option>
									<option class="elements" value="Iraq">Iraq</option>
									<option class="elements" value="Ireland">Ireland</option>
									<option class="elements" value="Israel">Israel</option>
									<option class="elements" value="Italy">Italy</option>
									<option class="elements" value="Jamaica">Jamaica</option>
									<option class="elements" value="Japan">Japan</option>
									<option class="elements" value="Jordan">Jordan</option>
									<option class="elements" value="Kazakhstan">Kazakhstan</option>
									<option class="elements" value="Kenya">Kenya</option>
									<option class="elements" value="Kiribati">Kiribati</option>
									<option class="elements" value="Democratic People's Republic of Korea">Korea, Democratic
										People's Republic of</option>
									<option class="elements" value="Republic of Korea">Korea, Republic of</option>
									<option class="elements" value="Kuwait">Kuwait</option>
									<option class="elements" value="Kyrgyzstan">Kyrgyzstan</option>
									<option class="elements" value="Lao People's Democratic Republic">Lao People's Democratic
										Republic</option>
									<option class="elements" value="Latvia">Latvia</option>
									<option class="elements" value="Lebanon">Lebanon</option>
									<option class="elements" value="Lesotho">Lesotho</option>
									<option class="elements" value="Liberia">Liberia</option>
									<option class="elements" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
									<option class="elements" value="Liechtenstein">Liechtenstein</option>
									<option class="elements" value="Lithuania">Lithuania</option>
									<option class="elements" value="Luxembourg">Luxembourg</option>
									<option class="elements" value="Macao">Macao</option>
									<option class="elements" value="Macedonia">Macedonia, the former Yugoslav Republic of
									</option>
									<option class="elements" value="Madagascar">Madagascar</option>
									<option class="elements" value="Malawi">Malawi</option>
									<option class="elements" value="Malaysia">Malaysia</option>
									<option class="elements" value="Maldives">Maldives</option>
									<option class="elements" value="Mali">Mali</option>
									<option class="elements" value="Malta">Malta</option>
									<option class="elements" value="Marshall Islands">Marshall Islands</option>
									<option class="elements" value="Martinique">Martinique</option>
									<option class="elements" value="Mauritania">Mauritania</option>
									<option class="elements" value="Mauritius">Mauritius</option>
									<option class="elements" value="Mayotte">Mayotte</option>
									<option class="elements" value="Mexico">Mexico</option>
									<option class="elements" value="Federated States of Micronesia">Micronesia, Federated States
										of</option>
									<option class="elements" value="Moldova">Moldova, Republic of</option>
									<option class="elements" value="Monaco">Monaco</option>
									<option class="elements" value="Mongolia">Mongolia</option>
									<option class="elements" value="Montserrat">Montserrat</option>
									<option class="elements" value="Morocco">Morocco</option>
									<option class="elements" value="Mozambique">Mozambique</option>
									<option class="elements" value="Myanmar">Myanmar</option>
									<option class="elements" value="Namibia">Namibia</option>
									<option class="elements" value="Nauru">Nauru</option>
									<option class="elements" value="Nepal">Nepal</option>
									<option class="elements" value="Netherlands">Netherlands</option>
									<option class="elements" value="Netherlands Antilles">Netherlands Antilles</option>
									<option class="elements" value="New Caledonia">New Caledonia</option>
									<option class="elements" value="New Zealand">New Zealand</option>
									<option class="elements" value="Nicaragua">Nicaragua</option>
									<option class="elements" value="Niger">Niger</option>
									<option class="elements" value="Nigeria">Nigeria</option>
									<option class="elements" value="Niue">Niue</option>
									<option class="elements" value="Norfolk Island">Norfolk Island</option>
									<option class="elements" value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option class="elements" value="Norway">Norway</option>
									<option class="elements" value="Oman">Oman</option>
									<option class="elements" value="Pakistan">Pakistan</option>
									<option class="elements" value="Palau">Palau</option>
									<option class="elements" value="Occupied Palestinian Territory">Palestinian Territory,
										Occupied</option>
									<option class="elements" value="Panama">Panama</option>
									<option class="elements" value="Papua New Guinea">Papua New Guinea</option>
									<option class="elements" value="Paraguay">Paraguay</option>
									<option class="elements" value="Peru">Peru</option>
									<option class="elements" value="Philippines">Philippines</option>
									<option class="elements" value="Pitcairn">Pitcairn</option>
									<option class="elements" value="Poland">Poland</option>
									<option class="elements" value="Portugal">Portugal</option>
									<option class="elements" value="Puerto Rico">Puerto Rico</option>
									<option class="elements" value="Qatar">Qatar</option>
									<option class="elements" value="Reunion">Reunion</option>
									<option class="elements" value="Romania">Romania</option>
									<option class="elements" value="Russian Federation">Russian Federation</option>
									<option class="elements" value="Rwanda">Rwanda</option>
									<option class="elements" value="Saint Helena">Saint Helena</option>
									<option class="elements" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option class="elements" value="Saint Lucia">Saint Lucia</option>
									<option class="elements" value="Saint Martin (French part)">Saint Martin (French part)
									</option>
									<option class="elements" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option class="elements" value="Saint Vincent and The Grenadines">Saint Vincent and The
										Grenadines</option>
									<option class="elements" value="Samoa">Samoa</option>
									<option class="elements" value="San Marino">San Marino</option>
									<option class="elements" value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option class="elements" value="Saudi Arabia">Saudi Arabia</option>
									<option class="elements" value="Senegal">Senegal</option>
									<option class="elements" value="Serbia and Montenegro">Serbia and Montenegro</option>
									<option class="elements" value="Seychelles">Seychelles</option>
									<option class="elements" value="Sierra Leone">Sierra Leone</option>
									<option class="elements" value="Singapore">Singapore</option>
									<option class="elements" value="Slovakia">Slovakia</option>
									<option class="elements" value="Slovenia">Slovenia</option>
									<option class="elements" value="Solomon Islands">Solomon Islands</option>
									<option class="elements" value="Somalia">Somalia</option>
									<option class="elements" value="South Africa">South Africa</option>
									<option class="elements" value="South Georgia and The South Sandwich Islands">South Georgia
										and The South Sandwich Islands</option>
									<option class="elements" value="Spain">Spain</option>
									<option class="elements" value="Sri Lanka">Sri Lanka</option>
									<option class="elements" value="Sudan">Sudan</option>
									<option class="elements" value="Suriname">Suriname</option>
									<option class="elements" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option class="elements" value="Swaziland">Swaziland</option>
									<option class="elements" value="Sweden">Sweden</option>
									<option class="elements" value="Switzerland">Switzerland</option>
									<option class="elements" value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option class="elements" value="Taiwan">Taiwan, Province of China</option>
									<option class="elements" value="Tajikistan">Tajikistan</option>
									<option class="elements" value="Tanzania, United Republic of">Tanzania, United Republic of
									</option>
									<option class="elements" value="Thailand">Thailand</option>
									<option class="elements" value="Timor-leste">Timor-leste</option>
									<option class="elements" value="Togo">Togo</option>
									<option class="elements" value="Tokelau">Tokelau</option>
									<option class="elements" value="Tonga">Tonga</option>
									<option class="elements" value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option class="elements" value="Tunisia">Tunisia</option>
									<option class="elements" value="Turkey">Turkey</option>
									<option class="elements" value="Turkmenistan">Turkmenistan</option>
									<option class="elements" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option class="elements" value="Tuvalu">Tuvalu</option>
									<option class="elements" value="Uganda">Uganda</option>
									<option class="elements" value="Ukraine">Ukraine</option>
									<option class="elements" value="United Arab Emirates">United Arab Emirates</option>
									<option class="elements" value="United Kingdom">United Kingdom</option>
									<option class="elements" value="United States">United States</option>
									<option class="elements" value="United States Minor Outlying Islands">United States Minor
										Outlying Islands</option>
									<option class="elements" value="Uruguay">Uruguay</option>
									<option class="elements" value="Uzbekistan">Uzbekistan</option>
									<option class="elements" value="Vanuatu">Vanuatu</option>
									<option class="elements" value="Venezuela">Venezuela</option>
									<option class="elements" value="Viet Nam">Viet Nam</option>
									<option class="elements" value="British Virgin Islands">Virgin Islands, British</option>
									<option class="elements" value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
									<option class="elements" value="Wallis and Futuna">Wallis and Futuna</option>
									<option class="elements" value="Western Sahara">Western Sahara</option>
									<option class="elements" value="Yemen">Yemen</option>
									<option class="elements" value="Zambia">Zambia</option>
									<option class="elements" value="Zimbabwe">Zimbabwe</option>
								</select>
							</div>
						</div>



						<div id="ifYes" class="form-row" style="display: none;">
							<div class="field_full">
								<label for="state_required">State/Region<span class="form-required">*</span></label>
								<select id="state_required" class="invalid error" name="cf_1093">
									<option class="choose_elements" value="" disabled="" selected="">Please Select State/Region*
									</option>
									<option class="usa_state elements" value="Alabama">Alabama</option>
									<option class="usa_state elements" value="Alaska">Alaska</option>
									<option class="usa_state elements" value="Arizona">Arizona</option>
									<option class="usa_state elements" value="Arkansas">Arkansas</option>
									<option class="usa_state elements" value="California">California</option>
									<option class="usa_state elements" value="Colorado">Colorado</option>
									<option class="usa_state elements" value="Connecticut">Connecticut</option>
									<option class="usa_state elements" value="Delaware">Delaware</option>
									<option class="usa_state elements" value="District of Columbia">District of Columbia</option>
									<option class="usa_state elements" value="Florida">Florida</option>
									<option class="usa_state elements" value="Georgia">Georgia</option>
									<option class="usa_state elements" value="Hawaii">Hawaii</option>
									<option class="usa_state elements" value="Idaho">Idaho</option>
									<option class="usa_state elements" value="Illinois">Illinois</option>
									<option class="usa_state elements" value="Indiana">Indiana</option>
									<option class="usa_state elements" value="Iowa">Iowa</option>
									<option class="usa_state elements" value="Kansas">Kansas</option>
									<option class="usa_state elements" value="Kentucky">Kentucky</option>
									<option class="usa_state elements" value="Louisiana">Louisiana</option>
									<option class="usa_state elements" value="Maine">Maine</option>
									<option class="usa_state elements" value="Maryland">Maryland</option>
									<option class="usa_state elements" value="Massachusetts">Massachusetts</option>
									<option class="usa_state elements" value="Michigan">Michigan</option>
									<option class="usa_state elements" value="Minnesota">Minnesota</option>
									<option class="usa_state elements" value="Mississippi">Mississippi</option>
									<option class="usa_state elements" value="Missouri">Missouri</option>
									<option class="usa_state elements" value="Montana">Montana</option>
									<option class="usa_state elements" value="Nebraska">Nebraska</option>
									<option class="usa_state elements" value="Nevada">Nevada</option>
									<option class="usa_state elements" value="New Hampshire">New Hampshire</option>
									<option class="usa_state elements" value="New Jersey">New Jersey</option>
									<option class="usa_state elements" value="New Mexico">New Mexico</option>
									<option class="usa_state elements" value="New York">New York</option>
									<option class="usa_state elements" value="North Carolina">North Carolina</option>
									<option class="usa_state elements" value="North Dakota">North Dakota</option>
									<option class="usa_state elements" value="Ohio">Ohio</option>
									<option class="usa_state elements" value="Oklahoma">Oklahoma</option>
									<option class="usa_state elements" value="Oregon">Oregon</option>
									<option class="usa_state elements" value="Pennsylvania">Pennsylvania</option>
									<option class="usa_state elements" value="Puerto Rico">Puerto Rico</option>
									<option class="usa_state elements" value="Rhode Island">Rhode Island</option>
									<option class="usa_state elements" value="South Carolina">South Carolina</option>
									<option class="usa_state elements" value="South Dakota">South Dakota</option>
									<option class="usa_state elements" value="Tennessee">Tennessee</option>
									<option class="usa_state elements" value="Texas">Texas</option>
									<option class="usa_state elements" value="Utah">Utah</option>
									<option class="usa_state elements" value="Vermont">Vermont</option>
									<option class="usa_state elements" value="Virginia">Virginia</option>
									<option class="usa_state elements" value="Washington">Washington</option>
									<option class="usa_state elements" value="West Virginia">West Virginia</option>
									<option class="usa_state elements" value="Wisconsin">Wisconsin</option>
									<option class="usa_state elements" value="Wyoming">Wyoming</option>

									<option class="canadian_province elements" value="Alberta">Alberta</option>
									<option class="canadian_province elements" value="British Columbia">British Columbia</option>
									<option class="canadian_province elements" value="Manitoba">Manitoba</option>
									<option class="canadian_province elements" value="New Brunswick">New Brunswick</option>
									<option class="canadian_province elements" value="Newfoundland and Labrador">Newfoundland and
										Labrador</option>
									<option class="canadian_province elements" value="Northwest Territories">Northwest
										Territories</option>
									<option class="canadian_province elements" value="Nova Scotia">Nova Scotia</option>
									<option class="canadian_province elements" value="Nunavut">Nunavut</option>
									<option class="canadian_province elements" value="Ontario">Ontario</option>
									<option class="canadian_province elements" value="Prince Edward Island">Prince Edward Island
									</option>
									<option class="canadian_province elements" value="Quebec">Quebec</option>
									<option class="canadian_province elements" value="Saskatchewan">Saskatchewan</option>
									<option class="canadian_province elements" value="Yukon Territories">Yukon Territories
									</option>
								</select>
							</div>
						</div>

						<div class="form-row">
							<div class="field_full">
								<label>Additional Info</label>
								<textarea class="" name="description" placeholder="Additional Info"></textarea>
							</div>
						</div>
						<div class="form-row text-center">
							<input id="my_form_send" type="submit" name="submit_web_form" value="Get a Quote" class="button">
						</div>
					</form>
   </div>

</div>
<div class="wrapper_popup_video wrapper_popup_video_disabled">
      <div class="popup_video">
      <iframe width="100%" id='Youtube' height="100%" src="<?php echo get_field('video_1_url'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>
<?php get_footer(); ?>
<script>
   wrapper_popup_video.addEventListener("click", function () {
  wrapper_popup_video.classList.add("wrapper_popup_video_disabled");
  youtube.setAttribute("src", "");
});
</script>