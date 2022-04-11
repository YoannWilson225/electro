<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GameCenter</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->

    <link href="{{asset('bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('boxicons/css/boxicons.css')}}" rel="stylesheet">

    <link rel="stylesheet" media="screen" href="{{asset('css/simplebar.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('css/tiny-slider.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('css/drift-basic.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('css/lightgallery.min.css')}}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('css/theme.min.css')}}">

    <style>
      #links {
        color: #fff;
      }

      #links:hover {
        color: #BE4AFB;
        transition: all 1s;
      }
    </style>

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

<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-secondary">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="bi-unlocked me-2 mt-n1"></i>Sign in</a></li>
            <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="bi-user me-2 mt-n1"></i>Sign up</a></li>
          </ul>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body tab-content py-4">
          <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
            <div class="mb-3">
              <label class="form-label" for="si-email">Email address</label>
              <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
              <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="si-password">Password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="si-password" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <div class="mb-3 d-flex flex-wrap justify-content-between">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="si-remember">
                <label class="form-check-label" for="si-remember">Remember me</label>
              </div><a class="fs-sm" href="#">Forgot password?</a>
            </div>
            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
          </form>
          <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
            <div class="mb-3">
              <label class="form-label" for="su-name">Full name</label>
              <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
              <div class="invalid-feedback">Please fill in your name.</div>
            </div>
            <div class="mb-3">
              <label for="su-email">Email address</label>
              <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
              <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="su-password">Password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="su-password-confirm">Confirm password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password-confirm" required>
                <label class="password-toggle-btn" aria-label="Show/hide password">
                  <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @foreach($articles as $article)
  <main class="page-wrapper">
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">

        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
          <h1 class="h3 text-light mb-0">{{$article->nom}}</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Gallery + details-->

      <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5">
        <div class="px-lg-3">
          <div class="row">
            {{-- <!-- Product gallery-->{{asset('produits/'.$article->photo_produit)}} --}}
            <div class="col-lg-7 pe-lg-0 pt-lg-4">
              <div class="product-gallery">
                <div class="product-gallery-preview order-sm-2">
                  <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="{{asset('produits/'.$article->photo_produit)}}" data-zoom="{{asset('produits/'.$article->photo_produit)}}" alt="Product image">
                    <div class="image-zoom-pane"></div>
                  </div>
                  <div class="product-gallery-preview-item" id="second"><img class="image-zoom" src="img/shop/single/gallery/02.jpg" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                        <div class="image-zoom-pane"></div>
                  </div>
                  <div class="product-gallery-preview-item" id="third"><img class="image-zoom" src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                    <div class="image-zoom-pane"></div>
                  </div>
                  <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom" src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                    <div class="image-zoom-pane"></div>
                  </div>
                </div>

              </div>
            </div>
            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0">
              <div class="product-details ms-auto pb-3">
                <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                    <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                    </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 étoiles</span></a>
                  <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip" title="Add to wishlist"><i class="bi-heart"></i></button>
                </div>
                <div class="mb-3"><span class="h3 fw-normal text-accent me-1"><small>{{$article->prix_ht}}</small></span>
                  <del class="text-muted fs-lg me-3">20 000<small>FCFA</small></del><span class="badge bg-danger badge-shadow align-middle mt-n2">Réduction</span>
                </div>

                <form  action="{{route('cart.store')}}" class="mb-grid-gutter" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$article->id}}">
                  <div class="mb-3 d-flex align-items-center">
                    <select class="form-select me-3" style="width: 5rem;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit" style="background-color:transparent;border: 1px solid #BE4AFB;border-radius: 15px;"><i class="bi-cart fs-lg me-2" style="color:#BE4AFB;"></i><span style="color:#BE4AFB">Ajouter au Panier</span></button>
                  </div>
                </form>
                <!-- Product panels-->
                <div class="accordion mb-4" id="productPanels">
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button" href="#productInfo" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="bi-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Infos de l'article</a></h3>
                    <div class="accordion-collapse collapse show" id="productInfo" data-bs-parent="#productPanels">
                      <div class="accordion-body">
                        <h6 class="fs-sm mb-2">Description</h6>
                        <ul class="fs-sm ps-4">
                          <p>{{$article->description}}</p>
                        </ul>

                      </div>
                    </div>
                  </div>


                </div>
                <!-- Sharing-->
                <label class="form-label d-inline-block align-middle my-2 me-3">Partagez avec:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="bi bi-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="bi bi-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="bi bi-facebook"></i>Facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- Reviews-->

  </main>
  @endforeach

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
  <!-- Toolbar for handheld devices (Default)-->
  <div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="bi-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="bi-list"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="bi-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
  </div>
  <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon bi-arrow-up"></i></a>
  <!-- Vendor scrits: js libraries and plugins-->
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/simplebar.min.js')}}"></script>
  <script src="{{asset('js/tiny-slider.js')}}"></script>
  <script src="{{asset('js/smooth-scroll.polyfills.min.js')}}"></script>
  <script src="{{asset('js/Drift.min.js')}}"></script>
  <script src="{{asset('js/lightgallery.min.js')}}"></script>
  <script src="{{asset('js/lg-video.min.js')}}"></script>
  <!-- Main theme script-->
  <script src="{{asset('js/theme.min.js')}}"></script>


</body>
</html>
