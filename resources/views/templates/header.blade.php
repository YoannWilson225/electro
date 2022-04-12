
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
                    @foreach (Cart::content() as $article)
                    <div class="widget-cart-item py-2 border-bottom">
                        <form action="{{route('cart.destroy', $article->rowId)}}" method="post">
                            @csrf
                            @method('DELETE')
                      <button class="btn-close text-danger" type="submit" aria-label="Remove"><span aria-hidden="true">&times;</span></button></form>
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
                    <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">500000<small>FCFA</small></span></div>
                  </div><a class="btn btn-primary btn-sm d-block w-100" href="{{route('cart.index')}}"><i class="bi-card me-2 fs-base align-middle"></i>Voir Panier</a>
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
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="{{route('boutique')}}"><img src="{{asset('produits/accs.jpg')}}" alt="Casques"></a>
                        <h6 class="fs-base mb-2">Casques</h6>
                      </div>
                    </div>
                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="{{route('boutique')}}"><img src="{{asset('produits/32.jpg')}}" alt="Manettes"></a>
                        <h6 class="fs-base mb-2">Consoles</h6>
                      </div>
                    </div>
                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="{{route('boutique')}}"><img src="{{asset('produits/lg03.jpg')}}" alt="Smartphones"></a>
                        <h6 class="fs-base mb-2">Accéssoires</h6>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap flex-sm-nowrap">
                    <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                      <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="{{route('boutique')}}"><img src="{{asset('produits/03.jpg')}}" alt="Playstations"></a>
                        <h6 class="fs-base mb-2">Ordinateurs</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Primary menu-->
            <ul class="navbar-nav">
              <li class="nav-item active"><a class="nav-link toggle" id="links" href="" data-bs-toggle="dropdown">Accueil</a>
              </li>
              <li class="nav-item"><a class="nav-link toggle" href="{{route('boutique')}}" data-bs-toggle="dropdown" id="links">Boutique</a>
                <div class="dropdown-menu p-0">
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
