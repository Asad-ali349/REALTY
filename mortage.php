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
      <header class="header header_menu-right header_fixed container-fluid js-header-sticky" id="page-header" data-arts-theme-text="dark" data-arts-header-sticky-theme="bg-white" data-arts-header-logo="primary" data-arts-header-sticky-logo="primary" data-arts-header-overlay-theme="light" data-arts-header-overlay-background="#ffffff">
         <!-- top bar -->
         <div class="header__container header__controls">
            <div class="row justify-content-between align-items-center">
               <!-- logo -->
               <div class="col-auto header__col header__col-left">
                  <a class="logo" href="index.php" >
                     <div class="logo__wrapper-img">
                        <img class="logo__img-primary" src="img/assets/projects/logo.png" alt="Wolf Surety" style="height:100px;">
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
      <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
         <main class="page-wrapper__content">
            <!-- section MASTHEAD -->
            <section class="section section-masthead section-fullheight text-center text-lg-right pt-large pt-md-0" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
               <div class="section-masthead__inner section-fullheight__inner section-fullheight__inner_mobile-auto">
                  <div class="row no-gutters h-100 align-items-center">
                     <div class="col-lg-6 h-100">
                        <div class="container-fluid container-fluid_paddings h-100 container_py-xs-0">
                           <div class="row align-items-center h-100">
                              <div class="col">
                                 <header class="section-masthead__header justify-content-center">
                                    <div class="section-masthead__subheading small-caps mt-0 mb-1 mb-md-2 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><span>info@re4lty.com</span></div>
                                    <div class="w-100"></div>
                                    <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                                       <h1 class="h1 mt-0 mb-0">Mortgage</h1>
                                    </div>
                                 </header>
                              </div>
                           </div>
                           <div class="section-masthead__wrapper-scroll-down section-masthead__wrapper-scroll-down_right d-none d-lg-block">
                              <div class="circle-button js-circle-button" data-arts-os-animation="true">
                                 <!-- curved label -->
                                 <div class="circle-button__outer">
                                    <div class="circle-button__wrapper-label">
                                       <div class="circle-button__label small-caps">Scroll Down</div>
                                    </div>
                                 </div>
                                 <!-- - curved label -->
                                 <!-- geometry wrapper -->
                                 <div class="circle-button__inner">
                                    <div class="circle-button__circle" data-arts-scroll-down="data-arts-scroll-down" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0">
                                       <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                       </svg>
                                    </div>
                                    <!-- browsers with touch support -->
                                    <div class="circle-button__icon circle-button__icon-touch">
                                       <svg enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
                                          <path d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z"></path>
                                       </svg>
                                    </div>
                                    <!-- - browsers with touch support -->
                                    <!-- - browsers without touch support -->
                                    <div class="circle-button__icon circle-button__icon-mouse">
                                       <svg class="svg-mouse" width="23px" height="35px" viewBox="0 0 23 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                          <!-- border -->
                                          <path class="svg-mouse__border" d="M11.5,0 C5.15875132,0 0,5.23135343 0,11.6610111 L0,23.3396542 C0,29.7691456 5.15875132,35 11.5,35 C17.8412487,35 23,29.7693119 23,23.3396542 L23,11.6610111 C23,5.23135343 17.8410847,0 11.5,0 Z M21.7222404,23.3396542 C21.7222404,29.0545544 17.136538,33.7037222 11.5,33.7037222 C5.86346203,33.7037222 1.27775956,29.0545544 1.27775956,23.3396542 L1.27775956,11.6610111 C1.27775956,5.946111 5.86346203,1.29627781 11.5,1.29627781 C17.136538,1.29627781 21.7222404,5.94594466 21.7222404,11.6610111 L21.7222404,23.3396542 Z"></path>
                                          <!-- - border -->
                                          <!-- wheel -->
                                          <path class="svg-mouse__wheel" d="M11.5,4 C11.2238902,4 11,4.28321727 11,4.63321727 L11,10.3667827 C11,10.7167827 11.2238902,11 11.5,11 C11.7761098,11 12,10.7167827 12,10.3667827 L12,4.63321727 C11.9998717,4.28321727 11.7761098,4 11.5,4 Z"></path>
                                          <!-- - wheel -->
                                       </svg>
                                    </div>
                                    <!-- - browsers without touch support -->
                                 </div>
                                 <!-- - geometry wrapper -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 align-self-stretch">
                        <div class="section-image section-masthead__background section-masthead__background_halfscreen section-masthead__background_halfscreen-gutters mt-small mt-md-0">
                           <div class="section-image__wrapper js-transition-img" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                              <div class="js-transition-img__transformed-el">
                                 <div class="lazy-bg" data-src="img/assets/mortage/main.jpg" style="width: 450px; height: 450px;"></div>
                              </div>
                           </div>
                           <div class="section-masthead__bg bg-white"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- - section MASTHEAD -->

            <section class="section section-masthead pt-large pb-small text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
              <header class="row section-masthead__header justify-content-center">
                <div class="col-lg-8">
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h1 mt-0 mb-0">Beware of Mortgage Closing Scams</h1>
                    <p>Scammers are targeting homebuyers, days before closing on their new home. A few simple steps can protect you and your life savings.</p>
                    <h1 class="h1 mt-0 mb-0">We Offer these types of loans: </h1>
                     <p>FHA </p>
                     <p>NON QM</p>
                     <p>FOREIGN NATIONAL</p>
                     <p>MEDICAL Professionals</p>
                     <p>HOMES FOR HEROES </p>
                     <p>PRIVATE hard Money </p>
                     <p>VA</p>
                     <p>JUMBO</p>
                     <p>COMMERCIAL</p>

                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
            <!-- section CONTENT #1 -->
            <section class="section section-services section-content mb-medium mt-medium" data-arts-os-animation="data-arts-os-animation">
            <div class="container-fluid no-gutters section-services__container">
              <div class="row no-gutters align-items-center">
                <div class="col-lg-7 order-lg-1">
                  <div class="section-content__image overflow">
                    <div class="section-content__image-inner">
                      <section class="section section-image">
                        <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                          <div class="lazy"><img data-src="img/mortgage/before.jpg" src="#" alt width="1920" height="1280"></div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 order-lg-2">
                  <div class="section-services__wrapper-content">
                    <section class="section section-content clearfix container-fluid pt-md-0 pb-md-0 pt-small" data-arts-os-animation="data-arts-os-animation">
                      <div class="section-content__inner">
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text mb-0-5" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="small-caps"></div>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <h2>Before you make an offer on a home</h2>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                          <p>1. Prepare to shop</p>
                          <ul>Not sure how to get started, how much you can afford, or what to expect when buying and financing a home? Set yourself up for success with a little bit of preparation.</ul>
                          <p>2. Explore loan choices</p>
                          <ul>Once you have a pretty good idea of your priorities and budget, you're ready to start home shopping in earnest. Now is also the time to start exploring loan choices and meeting with lenders.</ul>
                          <div class="section-content__button mt-2"><a class="d-inline-block no-highlight" href="contact.php">
                            <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                              </svg>
                              <div class="arrow__pointer arrow-right__pointer"></div>
                              <div class="arrow__triangle"></div>
                            </div></a>
                        </div>
                        </div>
                       
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="section-services__wrapper-letter section-services__wrapper-letter_right">
                <div class="section-services__letter" data-arts-parallax="element" data-arts-parallax-y="-30%">B</div>
              </div>
            </div>
          </section>
            <!-- - section CONTENT #1 -->

            <section id="disco" class="section section-services section-content mb-medium mt-medium" data-arts-os-animation="data-arts-os-animation">
            <div class="container section-services__container">
              <div class="row no-gutters align-items-center">
                <div class="col-lg-5 order-lg-2">
                  <div class="section-content__image overflow">
                    <div class="section-content__image-inner">
                      <section class="section section-image">
                        <div class="section-image__wrapper" data-arts-parallax="data-arts-parallax" data-arts-parallax-factor="0.15">
                          <div class="lazy"><img data-src="img/mortgage/after.jpg" src="#" alt width="1280" height="1920"></div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                  <div class="section-services__wrapper-content">
                    <section class="section section-content clearfix container-fluid pt-md-0 pb-md-0 pt-small pl-md-0" data-arts-os-animation="data-arts-os-animation">
                      <div class="section-content__inner">
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text mb-0-5" data-split-text-type="lines,words" data-split-text-set="words">
                          <div class="small-caps"></div>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                          <h2>After you make an offer on a home</h2>
                        </div>
                        <div class="w-100"></div>
                        <div class="section-content__text split-text js-split-text mt-1" data-split-text-type="lines" data-split-text-set="lines">
                         <p>Compare loan offers</p>
                         <ul>Once you’ve found the right home, it’s time to find the right mortgage. Get official loan offers from lenders, compare your options, and choose the loan offer that's right for you.</ul>
                         <p>Get ready to close</p>
                         <ul>Once you've chosen a mortgage loan, it’s time to focus on the closing process. There will be lots of paperwork to submit and things to keep track of. We lay it out for you step by step.</ul>
                         <div class="section-content__button mt-2"><a class="d-inline-block no-highlight" href="contact.php">
                            <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                              </svg>
                              <div class="arrow__pointer arrow-right__pointer"></div>
                              <div class="arrow__triangle"></div>
                            </div></a>
                        </div>
                        </div>
                        
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-services__wrapper-letter section-services__wrapper-letter_left">
              <div class="section-services__letter" data-arts-parallax="element" data-arts-parallax-y="-30%">A</div>
            </div>
          </section>
            <!-- section ALBUMS LIST COVERS -->
           
            <div class="card" style="width: 18rem;">
               <!-- - section ALBUMS LIST COVERS -->
         </main>
         <!-- PAGE FOOTER -->
         <?php 
            require_once('footer.php');
            ?>
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
   <!-- Mirrored from artemsemkin.com/rhye/html/page-inner-about-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 14:28:31 GMT -->
</html>