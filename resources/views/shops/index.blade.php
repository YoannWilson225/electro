<!DOCTYPE html>
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
    @extends ('Accueil')
    @section('content')
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document" >
          <div class="modal-content" >
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
        <!-- Hero slider-->
        <section class="tns-carousel tns-controls-lg mb-4 mb-lg-5">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #000008;">
              <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="produits/02.jpg" alt="Summer Collection">
                <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                  <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                    <h3 class="h2 text-light fw-light pb-1 from-start">Ça vient d'arriver !</h3>
                    <h2 class="text-light display-5 from-start delay-1"><span style="color:#BE4AFB">Manettes Customisables</span></h2>
                    <p class="fs-lg text-light pb-3 from-start delay-2">Ps5, Ps4, Xbox one, Xbox série X &amp; ...</p>
                    <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary"  style="background-color:transparent;border: 1px solid #BE4AFB;border-radius: 15px;" href="{{route('boutique')}}"><span style="color:#BE4AFB">Acheter</span><i class="bi-arrow-right ms-2 me-n1" style="color:#BE4AFB;"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
             <!-- Item-->
            <div class="px-lg-5" style="background-color: #000008;">
              <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="produits/03.jpg" alt="Men Accessories">
                <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                  <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                    <h3 class="h2 text-light fw-light pb-1 from-top">Soit performant</h3>
                    <h2 class="text-light display-5 from-top delay-1"><span style="color:#BE4AFB">Alien est chez nous</span></h2>
                    <p class="fs-lg text-light pb-3 from-top delay-2">Core i9 &amp; Invidia GT Force...</p>
                    <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary"  style="background-color:transparent;border: 1px solid #BE4AFB;border-radius: 15px;" href="{{route('boutique')}}"><span style="color:#BE4AFB">Acheter</span><i class="bi-arrow-right ms-2 me-n1" style="color:#BE4AFB;"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="px-lg-5" style="background-color: #000008;">
              <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="produits/01.jpg" alt="Women Sportswear">
                <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
                  <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                    <h3 class="h2 text-light fw-light pb-1 from-bottom">Super ! Découvrer nos nouveaux casques.</h3>
                    <h2 class="text-light display-5 from-bottom delay-1"><span style="color:#BE4AFB">Casque VR</span></h2>
                    <p class="fs-lg text-light pb-3 from-bottom delay-2">HDMI, Port Usb, Ps5, Ps4 &amp; ...</p>
                    <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary"  style="background-color:transparent;border: 1px solid #BE4AFB;border-radius: 15px;" href="{{route('boutique')}}"><span style="color:#BE4AFB">Acheter</span><i class="bi-arrow-right ms-2 me-n1" style="color:#BE4AFB;"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Category (Casque)-->
        @foreach ($categories as $category)
        <section class="container pt-lg-3 mb-4 mb-sm-5">
            <div class="row">
              <!-- Banner with controls-->
              <div class="col-md-5">
                <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #381F45;">
                  <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div>
                      <h3 class="mb-1" style="color: #fff;">{{$category->nom}}</h3><a class="fs-md" href="shop-grid-ls.html" style="color:#6B6BDD;">Casques<i class="bi-arrow-right fs-xs align-middle ms-1"></i></a>
                    </div>
                    <div class="tns-carousel-controls" id="for-women">
                      <button type="button"><i class="bi-arrow-left"></i></button>
                      <button type="button"><i class="bi-arrow-right"></i></button>
                    </div>
                  </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="produits/cat-lg02.jpg" alt="For Women"></a>
                </div>
              </div>
              <!-- Product grid (carousel)-->
              <div class="col-md-7 pt-4 pt-md-0">
                <div class="tns-carousel">
                  <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-women&quot;}">
                    <!-- Carousel item-->
                    <div>
                      <div class="row mx-n2">
                        @foreach ($articles as $article)
                        <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                          <div class="card product-card card-static">
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit)}}"  alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom)}}</a>
                              <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description)}}</a></h3>
                              <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @break
                        @endforeach
                        @foreach ($articles as $article)
                        <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="26.jpg")}}"  alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                  <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @break
                        @endforeach
                        @foreach ($articles as $article)
                        <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="08.jpg")}}"  alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                  <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @break
                        @endforeach
                        @foreach ($articles as $article)
                        <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="05.jpg")}}"  alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                  <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @break
                        @endforeach
                        @foreach ($articles as $article)
                        <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="06.jpg")}}"  alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                  <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @break
                        @endforeach
                        @foreach ($articles as $article)
                        <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="07.jpg")}}"  alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                  <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @break
                        @endforeach
                      </div>
                    </div>
                    <!-- Carousel item-->
                    <div>
                        <div class="row mx-n2">
                            @foreach ($articles as $article)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                              <div class="card product-card card-static">
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit)}}"  alt="Product"></a>
                                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom)}}</a>
                                  <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description)}}</a></h3>
                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                    <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @break
                            @endforeach
                            @foreach ($articles as $article)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static">
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="26.jpg")}}"  alt="Product"></a>
                                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                      <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @break
                            @endforeach
                            @foreach ($articles as $article)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static">
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="08.jpg")}}"  alt="Product"></a>
                                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                      <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @break
                            @endforeach
                            @foreach ($articles as $article)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static">
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="05.jpg")}}"  alt="Product"></a>
                                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                      <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @break
                            @endforeach
                            @foreach ($articles as $article)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static">
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="06.jpg")}}"  alt="Product"></a>
                                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                      <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @break
                            @endforeach
                            @foreach ($articles as $article)
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static">
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href=""{{route('voir_produits_par_cat', ['id'=> $article->category->id=1])}}"><img src="{{asset('produits/'.$article->photo_produit="07.jpg")}}"  alt="Product"></a>
                                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">{{($article->nom="Casque VR simple")}}</a>
                                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{($article->description="Un premier casque idéal pour commencer")}}</a></h3>
                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text-accent">{{($article->prix_ht)}}<small>FCFA</small></span></div>
                                      <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @break
                            @endforeach
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </section>
        @break
        @endforeach

        <!-- Category (Console)-->
        @foreach ($categories as $category)
        <section class="container pt-lg-4 mb-4 mb-sm-5">
          <div class="row">
            <!-- Banner with controls-->
            <div class="col-md-5 order-md-2">
              <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #381F45;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                  <div class="order-md-2">
                    <h3 class="mb-1" style="color: #fff;">{{$category->nom="Consoles"}}</h3><a class="fs-md" style="color:#6B6BDD;" href="shop-grid-ls.html">Ps4, Ps5, Xbox,...<i class="bi-arrow-right fs-xs align-middle ms-1"></i></a>
                  </div>
                  <div class="tns-carousel-controls order-md-1" id="for-men">
                    <button type="button"><i class="bi-arrow-left"></i></button>
                    <button type="button"><i class="bi-arrow-right"></i></button>
                  </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="produits/lg01.png" alt="For Men"></a>
              </div>
            </div>
            <!-- Product grid (carousel)-->
            <div class="col-md-7 pt-4 pt-md-0 order-md-1">
              <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-men&quot;}">
                  <!-- Carousel item-->
                  <div>
                    <div class="row mx-n2">
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/32.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cap with Appliqué</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/33.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Regular Fit Cotton Shirt</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$19.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/34.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$37.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/35.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Leather Men’s Sneakers</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$45.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static"><span class="badge badge-info badge-shadow">Popular</span>
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/36.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Bags</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Swedish Backpack</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$68.<small>95</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/37.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Stainless Steel Watches</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$542.<small>80</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Carousel item-->
                  <div>
                    <div class="row mx-n2">
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/11.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sandals</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/38.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Silver Ringe Cargo Short</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$45.<small>00</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/10.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Multicolor Bracelets</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/39.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3-pack T-shirts Slim Fit</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$21.<small>70</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/12.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$25.<small>9</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/06.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Bags</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">TH Jeans bity Backpack</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @break
        @endforeach

        <!-- Category (Accessoire)-->
        @foreach ($categories as $category)
        <section class="container pt-lg-4 mb-4 mb-md-5">
          <div class="row">
            <!-- Banner with controls-->
            <div class="col-md-5">
              <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #381F45;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                  <div>
                    <h3 class="mb-1" style="color: #fff;">{{$category->nom="Accéssoires"}}</h3><a class="fs-md" style="color:#6B6BDD;" href="shop-grid-ls.html">Manettes, Fauteille, chargeur, ...<i class="bi-arrow-right fs-xs align-middle ms-1"></i></a>
                  </div>
                  <div class="tns-carousel-controls" id="for-kids">
                    <button type="button"><i class="bi-arrow-left"></i></button>
                    <button type="button"><i class="bi-arrow-right"></i></button>
                  </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="produits/lg03.jpg" alt="For Kids"></a>
              </div>
            </div>
            <!-- Product grid (carousel)-->
            <div class="col-md-7 pt-4 pt-md-0">
              <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-kids&quot;}">
                  <!-- Carousel item-->
                  <div>
                    <div class="row mx-n2">
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/40.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Clothing</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Girl’s Denim Jacket</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static"><span class="badge badge-success badge-shadow">Trending</span>
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/41.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Textile Ballet Flats</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$16.<small>50</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/42.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Boys T-shirt with Motif</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$17.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/43.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Dotted Shoulder Bag</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$23.<small>00</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/44.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">2-pack Cotton Sun Hats</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$18.<small>00</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/08.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Toys</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Soft Panda Teddy Bear</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$14.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Carousel item-->
                  <div>
                    <div class="row mx-n2">
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/45.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Outlined Star Chevron Tee</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$10.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/46.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Banana Embroidery Cap</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/47.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Big Kid Sneakers</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$42.<small>50</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/48.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Clothing</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Boy's Printed Shorts</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/49.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Toys</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Unicorn Soft Toy</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$22.<small>50</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/50.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Swimwear</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Pool Santorini Tankini</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$20.<small>00</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @break
        @endforeach

        <!-- Category (Ordinateur)-->
        @foreach ($categories as $category)
        <section class="container pt-lg-4 mb-4 mb-sm-5">
          <div class="row">
            <!-- Banner with controls-->
            <div class="col-md-5 order-md-2">
              <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #381F45;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                  <div class="order-md-2">
                    <h3 class="mb-1" style="color: #fff;">{{$category->nom="Ordinateurs"}}</h3><a class="fs-md" style="color:#6B6BDD;" href="shop-grid-ls.html">Alien, Predator, DEL,...<i class="bi-arrow-right fs-xs align-middle ms-1"></i></a>
                  </div>
                  <div class="tns-carousel-controls" id="for-kids">
                    <button type="button"><i class="bi-arrow-left"></i></button>
                    <button type="button"><i class="bi-arrow-right"></i></button>
                  </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100" src="produits/lg01.png" alt="For Men"></a>
              </div>
            </div>
            <!-- Product grid (carousel)-->
            <div class="col-md-7 pt-4 pt-md-0 order-md-1">
              <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#for-men&quot;}">
                  <!-- Carousel item-->
                  <div>
                    <div class="row mx-n2">
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/32.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cap with Appliqué</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/33.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Regular Fit Cotton Shirt</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$19.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/34.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$37.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/35.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shoes</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Leather Men’s Sneakers</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$45.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static"><span class="badge badge-info badge-shadow">Popular</span>
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/36.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Bags</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Swedish Backpack</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$68.<small>95</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/37.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Accessories</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Stainless Steel Watches</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$542.<small>80</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Carousel item-->
                  <div>
                    <div class="row mx-n2">
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/11.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sandals</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/38.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Silver Ringe Cargo Short</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$45.<small>00</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/10.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Shorts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Multicolor Bracelets</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/39.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">T-shirts</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3-pack T-shirts Slim Fit</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$21.<small>70</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/12.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Hats &amp; Caps</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$25.<small>9</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-half active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                        <div class="card product-card card-static">
                          <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="bi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="produits/shop/catalog/06.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Bags</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">TH Jeans bity Backpack</a></h3>
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                              <div class="star-rating"><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star-filled active"></i><i class="star-rating-icon bi-star"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @break
        @endforeach
      </main>
      @endsection
</body>
</html>
