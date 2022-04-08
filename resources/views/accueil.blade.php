<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GameCenter</title>

        <meta name="description" content="GameCenter - Bootstrap E-commerce Template">
        <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
        <meta name="author" content="Createx Studio">
        <!-- Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon and Touch Icons-->
        <!-- <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff"> -->
        <!-- Vendor Styles including: Font Icons, Plugins, etc.-->


        <link href="{{asset('bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('boxicons/css/boxicons.css')}}" rel="stylesheet">

       <style>
         #links {
           color: #fff;
         }

         #links:hover {
           color: #BE4AFB;
           transition: all 1s;
         }
       </style>

        <link rel="stylesheet" media="screen" href="{{asset('css/simplebar.min.css')}}"/>
        <link rel="stylesheet" media="screen" href="{{asset('css/tiny-slider.css')}}"/>
        <!-- Main Theme Styles + Bootstrap-->
        <link rel="stylesheet" media="screen" href="{{asset('css/theme.min.css')}}">
        <!-- Google Tag Manager-->
        <script>
          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-WKV3GT5');
        </script>
      </head>

<body>

@include('templates.header')





@yield('content')


<footer class="footer bg-dark pt-5">
    <div class="container">
      <div class="row pb-2" >
        <div class="col-md-4 col-sm-6">
          <div class="widget widget-links widget-light pb-2 mb-4">
            <h3 class="widget-title text-light">Catégories</h3>
            <ul class="widget-list">
              <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="widget widget-links widget-light pb-2 mb-4">
            <h3 class="widget-title text-light">Account &amp; shipping info</h3>
            <ul class="widget-list">
              <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; polibies</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
            </ul>
          </div>
          <div class="widget widget-links widget-light pb-2 mb-4">
            <h3 class="widget-title text-light">About us</h3>
            <ul class="widget-list">
              <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
              <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="widget pb-2 mb-4">
            <h3 class="widget-title text-light pb-1">Stay informed</h3>
            <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
              <div class="input-group flex-nowrap"><i class="bi-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
              </div>
              <div class="form-text text-light opabity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
              <div class="subscription-status"></div>
            </form>
          </div>
          <div class="widget pb-2 mb-4">
            <h3 class="widget-title text-light pb-1">Download our app</h3>
            <div class="d-flex flex-wrap">
              <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
              <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

          </div>
          <div class="col-md-6 text-center text-md-end mb-4">
            <div class="mb-3"><a class="btn-sobial bs-light bs-twitter ms-2 mb-2" href="#"><i class="bi-twitter"></i></a><a class="btn-sobial bs-light bs-facebook ms-2 mb-2" href="#"><i class="bi-facebook"></i></a><a class="btn-sobial bs-light bs-instagram ms-2 mb-2" href="#"><i class="bi-instagram"></i></a><a class="btn-sobial bs-light bs-pinterest ms-2 mb-2" href="#"><i class="bi-pinterest"></i></a><a class="btn-sobial bs-light bs-youtube ms-2 mb-2" href="#"><i class="bi-youtube"></i></a></div>
          </div>
        </div>
        <div class="pb-4 fs-xs text-light opabity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
      </div>
    </div>
  </footer>

    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon bi-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/simplebar.min.js')}}"></script>
    <script src="{{asset('js/tiny-slider.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.polyfills.min.js')}}"></script>
    <!-- Main theme script-->
    <script src="{{asset('js/theme.min.js')}}"></script>
  </body>
</html>
