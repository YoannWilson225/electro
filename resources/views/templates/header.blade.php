
<header class="shadow-sm">
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <div class="navbar-sticky bg-light">
      <div class="navbar navbar-expand-lg navbar-light" style="background-color: #000008;">
        <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0"><img src="{{asset('produits/logo-dark.png')}}" width="142" alt="GameCenter"></a>

          <div class="input-group d-none d-lg-flex mx-4">
            <input class="form-control rounded-end pe-5" type="text" placeholder="Recherche" style="border: 1px solid #BE4AFB;background-color: transparent;"><i class="bi-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
          </div>
          <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi-menu"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span class="navbar-tool-tooltip">Souhaits</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi-heart"></i></div></a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-person"></i></div>
              <div class="navbar-tool-text ms-n3"><small>Bonjour, Sign in</small>Mon Compte</div></a>
            <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">{{Cart::count()}}</span><i class="navbar-tool-icon bi-cart"></i></a><a class="navbar-tool-text" href="{{route('cart.index')}}"><small>Panier</small>$265.00</a>
              <!-- Cart dropdown-->
              <div class="dropdown-menu dropdown-menu-end">
                <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                  <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                    @foreach ($articles as $article)
                    <div class="widget-cart-item py-2 border-bottom">
                      <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                      <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="{{asset('produits/'.$article->photo_produit)}}" width="64" alt="Product"></a>
                        <div class="ps-2">
                          <h6 class="widget-product-title"><a href="shop-single-v1.html">{{$article->nom}}</a></h6>
                          <div class="widget-product-meta"><span class="text-accent me-2">{{$article->prix_ht}}<small>FCFA</small></span><span class="text-muted">x 1</span></div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                    <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart<i class="bi-arrow-right ms-1 me-n1"></i></a>
                  </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i class="bi-card me-2 fs-base align-middle"></i>Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2" style="background-color:#000008;">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Search-->
            <div class="input-group d-lg-none my-3"><i class="bi-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
              <input class="form-control rounded-start" type="text" placeholder="Search for products">
            </div>
            <!-- Departments menu-->
            <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" id="links" href="#" data-bs-toggle="dropdown"><i class="bi bi-grid me-2"></i>Catégorie</a>
                <div class="dropdown-menu px-2 pb-4">
                  <div class="d-flex flex-wrap flex-sm-nowrap">
                    <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="{{asset('produits/accs.jpg')}}" alt="Casques"></a>
                        <h6 class="fs-base mb-2">Casques</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Women's clothing</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Men's clothing</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's clothing</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="{{asset('produits/32.jpg')}}" alt="Manettes"></a>
                        <h6 class="fs-base mb-2">Consoles</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Women's shoes</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Men's shoes</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's shoes</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="{{asset('produits/lg03.jpg')}}" alt="Smartphones"></a>
                        <h6 class="fs-base mb-2">Accéssoires</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Smartphones &amp; Tablets</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Wearable gadgets</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">E-book readers</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap flex-sm-nowrap">
                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="{{asset('produits/03.jpg')}}" alt="Playstations"></a>
                        <h6 class="fs-base mb-2">Ordinateurs</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Home furniture</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Office furniture</a></li>
                          <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Lighting and decoration</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Primary menu-->
            <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link toggle" id="links" href="{{route('accueil')}}" data-bs-toggle="dropdown">Accueil</a>
              </li>
              <li class="nav-item"><a class="nav-link toggle" href="{{route('boutique')}}" data-bs-toggle="dropdown" id="links">Boutique</a>
                <div class="dropdown-menu p-0">
                  <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                    <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                      <div class="widget widget-links mb-4">
                        <h6 class="fs-base mb-3">Shop layouts</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                        </ul>
                      </div>
                      <div class="widget widget-links mb-4">
                        <h6 class="fs-base mb-3">Marketplace</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                        </ul>
                      </div>
                      <div class="widget widget-links">
                        <h6 class="fs-base mb-3">Grocery store</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item"><a class="widget-list-link" href="grocery-catalog.html">Product Catalog</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="grocery-single.html">Single Product Page</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="grocery-checkout.html">Checkout</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                      <div class="widget widget-links mb-4">
                        <h6 class="fs-base mb-3">Food Delivery</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-category.html">Category Page</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-single.html">Single Item (Restaurant)</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-cart.html">Cart (Your Order)</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-checkout.html">Checkout (Address &amp; Payment)</a></li>
                        </ul>
                      </div>
                      <div class="widget widget-links">
                        <h6 class="fs-base mb-3">NFT Marketplace<span class="badge bg-danger ms-1">NEW</span></h6>
                        <ul class="widget-list">
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-catalog-v1.html">Catalog v.1</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-catalog-v2.html">Catalog v.2</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-single-auction-live.html">Single Item - Auction Live</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-single-auction-ended.html">Single Item - Auction Ended</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-single-buy.html">Single Item - Buy Now</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-vendor.html">Vendor Page</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-connect-wallet.html">Connect Wallet</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="nft-create-item.html">Create New Item</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="mega-dropdown-column pt-1 pt-lg-4 px-2 px-lg-3">
                      <div class="widget widget-links mb-4">
                        <h6 class="fs-base mb-3">Shop pages</h6>
                        <ul class="widget-list">
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                          <li class="widget-list-item"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="links" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Compte</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utilisateur Compte</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                      <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                      <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                      <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                      <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                      <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                      <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                    </ul>
                  </li>


                  <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                  <li><a class="dropdown-item" href="account-password-recovery.html">Changer Mot de Passe</a></li>
                </ul>
              </li>
              </ul>
          </div>
        </div>
        </div>
      </div>
</header>
