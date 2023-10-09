<!DOCTYPE html>
<html lang="en">
   <?php include_once("head.php");?>
   <body>
      <div data-barba="wrapper">
         <!-- PAGE PRELOADER -->
         <div class="preloader text-center bg-dark-2" id="js-preloader" data-arts-theme-text="light">
            <div class="preloader__content">
               <!-- header -->
               <div class="preloader__header mt-auto">
                  <div class="preloader__heading h2"><img src="img/assets/projects/preloader.png" width="50%"></div>
                  <!-- <div class="preloader__subline small-caps mt-1">Wolf Surety </div> -->
               </div>
               <!-- - header -->
               <!-- counter -->
               <div class="preloader__counter h5"><span class="preloader__counter-number preloader__counter-current">0</span><span class="preloader__counter-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class="preloader__counter-number preloader__counter-total">100</span></div>
               <!-- - counter -->
               <!-- circle holder -->
               <div class="preloader__circle"></div>
               <!-- - circle holder -->
            </div>
         </div>
         <!-- - PAGE PRELOADER -->
         <!-- Loading Spinner -->
         <svg class="spinner d-lg-none" id="js-spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="spinner__path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
         </svg>
         <!-- - Loading Spinner -->
         <!-- Transition Curtain-->
         <!-- TRANSITION CURTAINS -->
         <!-- page curtain AJAX transition -->
         <div class="curtain transition-curtain" id="js-page-transition-curtain">
            <div class="curtain__wrapper-svg">
               <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Default Rectangle -->
                  <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
                  <!-- - Default Rectangle -->
                  <!-- Curve Top -->
                  <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
                  <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
                  <!-- - Curve Top -->
                  <!-- Curve Bottom -->
                  <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
                  <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
                  <!-- - Curve Bottom -->
               </svg>
            </div>
         </div>
         <!-- - page curtain AJAX transition -->
         <!-- header curtain show/hide -->
         <div class="header-curtain curtain" id="js-header-curtain">
            <div class="curtain__wrapper-svg">
               <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Default Rectangle -->
                  <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
                  <!-- - Default Rectangle -->
                  <!-- Curve Top -->
                  <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
                  <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
                  <!-- - Curve Top -->
                  <!-- Curve Bottom -->
                  <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
                  <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
                  <!-- - Curve Bottom -->
               </svg>
            </div>
         </div>
         <!-- - header curtain show/hide -->
         <!-- header curtain AJAX transition -->
         <div class="header-curtain header-curtain_transition curtain" id="js-header-curtain-transition">
            <div class="curtain__wrapper-svg">
               <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Default Rectangle -->
                  <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
                  <!-- - Default Rectangle -->
                  <!-- Curve Top -->
                  <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
                  <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
                  <!-- - Curve Top -->
                  <!-- Curve Bottom -->
                  <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
                  <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
                  <!-- - Curve Bottom -->
               </svg>
            </div>
         </div>
         <!-- - header curtain AJAX transition -->
         <!-- - TRANSITION CURTAINS -->
         <!-- Cursor Follower-->
         <div class="cursor" id="js-cursor">
            <div class="cursor__wrapper">
               <!-- circles -->
               <div class="cursor__follower">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                     <circle id="inner" cx="25" cy="25" r="24" style="opacity: 0.6;"></circle>
                     <circle id="outer" cx="25" cy="25" r="24" style="stroke-dashoffset: 252.327; stroke-dasharray: 0px, 999999px;"></circle>
                  </svg>
               </div>
               <!-- - circles -->
               <!-- arrows -->
               <div class="cursor__arrows">
                  <div class="cursor__arrow cursor__arrow_up material-icons">keyboard_arrow_up</div>
                  <div class="cursor__arrow cursor__arrow_down material-icons">keyboard_arrow_down</div>
                  <div class="cursor__arrow cursor__arrow_left material-icons">keyboard_arrow_left</div>
                  <div class="cursor__arrow cursor__arrow_right material-icons">keyboard_arrow_right</div>
               </div>
               <!-- - arrows -->
               <!-- label holder -->
               <div class="cursor__label"></div>
               <!-- - label holder -->
               <!-- icon holder -->
               <div class="cursor__icon material-icons"></div>
               <!-- - icon holder -->
            </div>
         </div>
         <!-- - Cursor Follower-->
         <!-- PAGE HEADER -->
         <header class="header header_menu-right header_fixed container-fluid js-header-sticky" id="page-header" data-arts-theme-text="light" data-arts-header-sticky-theme="bg-dark-2" data-arts-header-logo="secondary" data-arts-header-sticky-logo="secondary" data-arts-header-overlay-theme="dark" data-arts-header-overlay-background="#000">
            <!-- top bar -->
            <div class="header__container header__controls">
               <div class="row justify-content-between align-items-center">
                  <!-- logo -->
                  <div class="col-auto header__col header__col-left">
                     <a class="logo" href="" target="_blank">
                        <div class="logo__wrapper-img">
                           <img class="logo__img-primary" src="img/assets/projects/logo-w.png" alt="Wolf Surety" style="height:100px;">
                           <img class="logo__img-secondary" src="img/assets/projects/logo-w.png" alt="Wolf Surety"  style="height:100px;">
                        </div>
                     </a>
                  </div>
                  <!-- - logo -->
                  <!-- burger icon -->
                  <div class="col-auto header__col">
                     <div class="header__burger" id="js-burger" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">
                        <div class="header__burger-line"></div>
                        <div class="header__burger-line"></div>
                        <div class="header__burger-line"></div>
                     </div>
                  </div>
                  <!-- - burger icon -->
                  <!-- "back" button for submenu nav -->
                  <div class="header__overlay-menu-back" id="js-submenu-back">
                     <div class="arrow arrow-left js-arrow arrow_mini" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                        <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                        </svg>
                        <div class="arrow__pointer arrow-left__pointer"></div>
                        <div class="arrow__triangle"></div>
                     </div>
                  </div>
                  <!-- - "back" button for submenu nav -->
               </div>
            </div>
            <!-- - top bar -->
            <!-- fullscreen overlay container -->
            <div class="header__wrapper-overlay-menu container-fluid container-fluid_paddings">
               <!-- fullscreen menu -->
               <?php 
                  require_once('navbar.php');
                  ?>
               <!-- - fullscreen widgets -->
            </div>
            <!-- - fullscreen overlay container -->
         </header>
         <!-- - PAGE HEADER -->
         <!-- PAGE MAIN -->
         <div class="js-smooth-scroll bg-dark-1" id="page-wrapper" data-barba="container">
            <main class="page-wrapper__content">
               <!-- section MASTHEAD -->
               <section class="section section-masthead d-none" data-background-color="var(--color-dark-1)"></section>
               <!-- - section MASTHEAD -->
               <!-- section PROJECTS SLIDER FULLSCREEN -->
               <section class="section section-fullheight section-projects section-projects-slider bg-dark-1 overflow" data-arts-theme-text="light" data-arts-os-animation>
                  <div class="section-fullheight__inner section-fullheight__inner_mobile">
                     <div class="slider slider_reveal slider-fullscreen-projects js-slider-fullscreen-projects js-slider-reveal js-slider text-center">
                        <!-- slider CONTENT -->
                        <div class="slider-fullscreen-projects__content swiper-container js-slider-fullscreen-projects__content">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide" data-category="marketing">
                                 <a class="d-inline-block" href="real_estate.php" data-pjax-link="fullscreenSlider">
                                    <h2 class="h1 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Real Estate</h2>
                                 </a>
                              </div>
                              <div class="swiper-slide" data-category="finance">
                                 <a class="d-inline-block" href="mortage.php" data-pjax-link="fullscreenSlider">
                                    <h2 class="h1 slider__heading js-split-text split-text" data-split-text-type="lines, words, chars" data-split-text-set="chars">Mortgage</h2>
                                 </a>
                              </div>
                              
                           </div>
                        </div>
                        <!-- - slider CONTENT -->
                        <!-- slider FOOTER -->
                        <div class="container-fluid slider-fullscreen-projects__footer">
                           <div class="row justify-content-between">
                              <div class="col-lg-4 d-none d-lg-block" style="text-align: left">
                                 <a href="https://www.linkedin.com/in/kennywolf/" target="balnk">  	<img class="" src="img/assets/projects/kw-w.png" alt="Kw" style="height: 40px; text-align: left;"></a>
                              </div>
                              <div class="col-lg-4 text-center text-lg-right order-lg-2">
                                 <!-- slider CATEGORIES -->
                                  <!-- <a href="https://licenseesearch.fldfs.com/Licensee/2164015" target="balnk">  	<img class="" src="img/assets/projects/cfo.png" alt="Kw" style="height: 70px; text-align: left;"></a> -->
                                 <!-- - slider CATEGORIES -->
                              </div>
                              <div class="col-lg-4 order-lg-1">
                                 <!-- slider DOTS -->
                                 <div class="slider__dots js-slider__dots">
                                    <div class="slider__dot slider__dot_active">
                                       <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                       </svg>
                                    </div>
                                    <div class="slider__dot">
                                       <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                       </svg>
                                    </div>
                                    <div class="slider__dot">
                                       <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                       </svg>
                                    </div>
                                 </div>
                                 <!-- - slider DOTS -->
                              </div>
                           </div>
                        </div>
                        <!-- - slider FOOTER -->
                        <!-- slider COUNTER -->
                        <div class="slider__wrapper-counter slider-fullscreen-projects__counter slider-fullscreen-projects__counter_centered">
                           <div class="slider__counter slider__counter_current slider__counter_current-huge">
                              <div class="js-slider-fullscreen-projects__counter-current swiper-container">
                                 <div class="swiper-wrapper"></div>
                              </div>
                           </div>
                        </div>
                        <!-- - slider COUNTER -->
                        <!-- slider IMAGES -->
                        <div class="slider-fullscreen-projects__images swiper-container js-slider-fullscreen-projects__images" data-mousewheel-enabled="data-mousewheel-enabled" data-direction="horizontal" data-speed="800" data-autoplay-enabled="true" data-autoplay-delay="6000">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide overflow">
                                 <div class="slider__images-slide-inner js-transition-img overflow">
                                    <div class="slider__bg swiper-lazy js-transition-img__transformed-el" data-background="img/assets/real_estate/main.gif"></div>
                                 </div>
                              </div>
                              <div class="swiper-slide overflow">
                                 <div class="slider__images-slide-inner js-transition-img overflow">
                                    <div class="slider__bg swiper-lazy js-transition-img__transformed-el" data-background="img/assets/mortage/main.jpg"></div>
                                 </div>
                              </div>
                             
                           </div>
                           <!-- overlay-->
                           <div class="slider__overlay overlay overlay_circle-dark overlay_deither"></div>
                           <div class="slider__circle"></div>
                           <!-- - overlay -->
                        </div>
                        <!-- - slider IMAGES -->
                        <!-- slider ARROWS -->
                        <div class="slider__arrow slider__arrow_left slider__arrow_absolute js-slider__arrow-prev">
                           <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                              </svg>
                              <div class="arrow__pointer arrow-left__pointer"></div>
                              <div class="arrow__triangle"></div>
                           </div>
                        </div>
                        <div class="slider__arrow slider__arrow_right slider__arrow_absolute js-slider__arrow-next">
                           <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                              </svg>
                              <div class="arrow__pointer arrow-right__pointer"></div>
                              <div class="arrow__triangle"></div>
                           </div>
                        </div>
                        <!-- - slider ARROWS -->
                     </div>
                  </div>
               </section>
               <!-- - section PROJECTS SLIDER FULLSCREEN -->
            </main>
            <!-- PAGE FOOTER -->
            <!-- - PAGE FOOTER -->
         </div>
         <!-- - PAGE MAIN -->
      </div>
      <canvas id="js-webgl"></canvas>
      <!-- PhotoSwipe -->
      <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" data-arts-theme-text="light">
         <!-- background -->
         <div class="pswp__bg"></div>
         <!-- - background -->
         <!-- slider wrapper -->
         <div class="pswp__scroll-wrap">
            <!-- slides holder (don't modify)-->
            <div class="pswp__container">
               <div class="pswp__item">
                  <div class="pswp__img pswp__img--placeholder"></div>
               </div>
               <div class="pswp__item"></div>
               <div class="pswp__item"></div>
            </div>
            <!-- - slides holder (don't modify)-->
            <!-- UI -->
            <div class="pswp__ui pswp__ui--hidden">
               <!-- top bar -->
               <div class="pswp__top-bar">
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" title="Close (Esc)" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
                  <div class="pswp__preloader">
                     <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                           <div class="pswp__preloader__donut"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- - top bar -->
               <!-- left arrow -->
               <div class="pswp__button pswp__button--arrow--left">
                  <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                     <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                     </svg>
                     <div class="arrow__pointer arrow-left__pointer"></div>
                     <div class="arrow__triangle"></div>
                  </div>
               </div>
               <!-- - left arrow -->
               <!-- right arrow -->
               <div class="pswp__button pswp__button--arrow--right">
                  <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                     <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                     </svg>
                     <div class="arrow__pointer arrow-right__pointer"></div>
                     <div class="arrow__triangle"></div>
                  </div>
               </div>
               <!-- - right arrow -->
               <!-- slide caption holder (don't modify) -->
               <div class="pswp__caption">
                  <div class="pswp__caption__center text-center"></div>
               </div>
               <!-- - slide caption holder (don't modify) -->
            </div>
            <!-- - UI -->
         </div>
         <!-- slider wrapper -->
      </div>
      <!-- - PhotoSwipe -->
      <!-- List Hover Shaders -->
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script id="list-hover-vs" type="x-shader/x-vertex">
         uniform vec2 uOffset;
         
         varying vec2 vUv;
         
         vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
           float M_PI = 3.1415926535897932384626433832795;
           position.x = position.x + (sin(uv.y * M_PI) * offset.x);
           position.y = position.y + (sin(uv.x * M_PI) * offset.y);
           return position;
         }
         
         void main() {
           vUv =  uv + (uOffset * 2.);
           vec3 newPosition = position;
           newPosition = deformationCurve(position,uv,uOffset);
           gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
         }
      </script>
      <script id="list-hover-fs" type="x-shader/x-fragment">
         uniform sampler2D uTexture;
         uniform float uAlpha;
         uniform float uScale;
         
         varying vec2 vUv;
         
         vec2 scaleUV(vec2 uv,float scale) {
           float center = 0.5;
           return ((uv - center) * scale) + center;
         }
         
         void main() {
           vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
           gl_FragColor = vec4(color,uAlpha);
         }
         
      </script>
      <!-- - List Hover Shaders -->
      <!-- Slider Textures Shaders -->
      <script id="slider-textures-vs" type="x-shader/x-vertex">
         varying vec2 vUv;
         void main() {
           vUv = uv;
           gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
         }
      </script>
      <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
         varying vec2 vUv;
         
         uniform sampler2D texture;
         uniform sampler2D texture2;
         uniform sampler2D disp;
         
         uniform float dispFactor;
         uniform float effectFactor;
         
         void main() {
         
           vec2 uv = vUv;
         
           vec4 disp = texture2D(disp, uv);
         
           vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
           vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
         
           vec4 _texture = texture2D(texture, distortedPosition);
           vec4 _texture2 = texture2D(texture2, distortedPosition2);
         
           vec4 finalTexture = mix(_texture, _texture2, dispFactor);
         
           gl_FragColor = finalTexture;
         
         }
      </script>
      <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
         varying vec2 vUv;
         
         uniform sampler2D texture;
         uniform sampler2D texture2;
         uniform sampler2D disp;
         
         uniform float dispFactor;
         uniform float effectFactor;
         
         void main() {
         
           vec2 uv = vUv;
         
           vec4 disp = texture2D(disp, uv);
         
           vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
           vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
         
           vec4 _texture = texture2D(texture, distortedPosition);
           vec4 _texture2 = texture2D(texture2, distortedPosition2);
         
           vec4 finalTexture = mix(_texture, _texture2, dispFactor);
         
           gl_FragColor = finalTexture;
         
         }
         
      </script>
      <!-- - Slider Textures Shaders -->
      <!-- VENDOR SCRIPTS -->
      <script src="js/vendor.js"></script>
      <!-- - VENDOR SCRIPTS -->
      <!-- COMPONENTS -->
      <script src="js/components.js"></script>
      <!-- - COMPONENTS -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwR_TrF6h7-pMxkKv_q2t8BXX3w6QuFOc" async></script>
   </body>
</html>