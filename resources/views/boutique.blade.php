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
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
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

<main class="page-wrapper">
        <!-- Page Title-->
        <div class="page-title-overlap bg-dark pt-4">
          <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="bi bi-house"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap"><a href="#">Boutique</a>
                  </li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">Grille Boutique</li>
                </ol>
              </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
              <h1 class="h3 text-light mb-0">Grille Boutique</h1>
            </div>
          </div>
        </div>
        <div class="container pb-5 mb-2 mb-md-4">
          <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4">
              <!-- Sidebar-->
              <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar" style="max-width: 22rem;">
                <div class="offcanvas-header align-items-center shadow-sm">
                  <h2 class="h5 mb-0">Filtres</h2>
                  <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                  <!-- Categories-->
                  <div class="widget widget-categories mb-4 pb-4 border-bottom">
                    <h3 class="widget-title">Catégories</h3>
                    <div class="accordion mt-n1" id="shop-categories">
                      <!-- Shoes-->
                      <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shoes" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shoes">Casques</a></h3>
                        <div class="accordion-collapse collapse" id="shoes" data-bs-parent="#shop-categories">
                          <div class="accordion-body">
                            <div class="widget widget-links widget-filter">
                              <div class="input-group input-group-sm mb-2">
                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="bi-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                              </div>
                              <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Tout</span><span class="fs-xs text-muted ms-3">12</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Casque VR pro</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Casque simple</span><span class="fs-xs text-muted ms-3">4</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Casque Futuriste</span><span class="fs-xs text-muted ms-3">1</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Casque d'aventure</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Casque directionnel</span><span class="fs-xs text-muted ms-3">1</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Casque Dimensionnel</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Clothing-->
                      <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button" href="#clothing" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="clothing">Consoles</a></h3>
                        <div class="accordion-collapse collapse show" id="clothing" data-bs-parent="#shop-categories">
                          <div class="accordion-body">
                            <div class="widget widget-links widget-filter">
                              <div class="input-group input-group-sm mb-2">
                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="bi-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                              </div>
                              <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Tout</span><span class="fs-xs text-muted ms-3">12</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">PS4</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">PS5</span><span class="fs-xs text-muted ms-3">3</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">PS3</span><span class="fs-xs text-muted ms-3">1</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Xbox One</span><span class="fs-xs text-muted ms-3">3</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Xbox série X</span><span class="fs-xs text-muted ms-3">1</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Nintendo</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Bags-->
                      <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed" href="#bags" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bags">Accéssoires</a></h3>
                        <div class="accordion-collapse collapse" id="bags" data-bs-parent="#shop-categories">
                          <div class="accordion-body">
                            <div class="widget widget-links widget-filter">
                              <div class="input-group input-group-sm mb-2">
                                <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="bi-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                              </div>
                              <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Tout</span><span class="fs-xs text-muted ms-3">27</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Manettes</span><span class="fs-xs text-muted ms-3">5</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Cable HDMI</span><span class="fs-xs text-muted ms-3">3</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Adaptateur</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Coq de Manette</span><span class="fs-xs text-muted ms-3">5</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Manette Casque VR</span><span class="fs-xs text-muted ms-3">3</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Chargeur de Manette</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Sunglasses-->
                      <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed" href="#sunglasses" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sunglasses">Ordinateurs</a></h3>
                        <div class="collapse" id="sunglasses" data-bs-parent="#shop-categories">
                          <div class="accordion-body">
                            <div class="widget widget-links">
                              <ul class="widget-list">
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Tout</span><span class="fs-xs text-muted ms-3">8</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Alien</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Hp</span><span class="fs-xs text-muted ms-3">4</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>DEL</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
              <!-- Toolbar-->
              <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
                <div class="d-flex flex-wrap">
                  <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                    <label class="text-light opacity-75 text-nowrap fs-sm me-2 d-none d-sm-block" for="sorting">Trillez par:</label>
                    <select class="form-select" id="sorting">
                      <option>Casques</option>
                      <option>Consoles</option>
                      <option>Accéssoires</option>
                      <option>Ordinateurs</option>
                    </select>
                  </div>
                </div>
                <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2" href="#"><i class="bi-grid"></i></a></div>
              </div>
              <!-- Products grid-->
              <div class="row mx-n2">
                <!-- Product-->
              @foreach ($articles as $article)
                <div class="col-md-4 col-sm-6 px-2 mb-4">
                  <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="{{ route('voir_produit',$article->id) }}">
                    <img src="{{asset('produits/'.$article->photo_produit)}}" alt="Product"></a>
                    <div class="card-body py-2">
                        <a class="product-meta d-block fs-xs pb-1" href="{{asset('produits/'.$article->photo_produit)}}">{{$article->nom}}</a>
                      <h3 class="product-title fs-sm"><a href="{{ route('voir_produit',$article->id) }}">{{$article->description}}</a></h3>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-muted fs-sm">{{$article->prix_ht}}</span></div>
                        <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i>
                        </div>
                      </div>
                    </div>

                    <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm d-block w-100 mb-2" href="{{ route('voir_produit',$article->id) }}">Voir Détails</a>
                    </div>

                  </div>
                  <hr class="d-sm-none">
                </div>
              @endforeach
              </div>
              <hr class="my-3">
            </section>
          </div>
        </div>
</main>


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

<div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar"><span class="handheld-toolbar-icon"><i class="bi bi-filter"></i></span><span class="handheld-toolbar-label">Filters</span></a><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="bi-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="bi-list"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="bi-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
</div>
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
