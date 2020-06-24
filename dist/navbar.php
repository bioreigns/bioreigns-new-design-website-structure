<!-- NAVBAR -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand mr-5 d-none d-md-block" href="/">
                <img class="img-fluid" src="/img/bioreigns-logo.svg" style="width:200px" alt="">
            </a>
            <a class="navbar-brand d-block d-md-none" href="#">
                <img class="img-fluid" src="/img/logo-icon.png" style="width:50px" alt="">
            </a>
            <button class="navbar-toggler border-0 text-gold" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto text-uppercase" id="mainmenu" >
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between"
                           href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <span>about</span>
                            <i class="fas fa-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="technology.php">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center text-center justify-content-center">
                                        <span class="mr-2">Technology</span>
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="documentaton.php">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center text-center justify-content-center">
                                        <span class="mr-2">Documentation</span>
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="{{ url('/about/eeg-testing') }}">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center text-center justify-content-center">
                                        <span class="mr-2">EEG Testing</span>
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ config('bioreigns.shopping_cart_url') }}/auth/login?from={{ $rep_id }}" class="nav-link distributor-link">shop</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('products*') ? 'active' : '' }}">
                        <a href="/products" class="nav-link dropdown-toggle d-flex align-items-center justify-content-between"
                           href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <span>products</span>
                            <i class="fas fa-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu border-0 shadow-sm"
                             aria-labelledby="navbarDropdown">
                            <a class="dropdown-item mb-2" href="{{ url('/products') }}">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <img class="img-fluid" width="50px" src="/img/biodefense.png" alt="">
                                    </div>
                                    <div class="col-8 d-flex align-items-center">
                                        <div>
                                            <span>tinctures</span>
                                         </div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item mb-2" href="/products">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <img class="img-fluid" width="50px" src="/img/RELIEF-LOTION.png" alt="">
                                    </div>
                                    <div class="col-8 d-flex align-items-center">
                                        <div>
                                            <span>relief</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item mb-2" href="/products">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <img class="img-fluid" width="50px" src="/img/GUMMY-REGULAR.png" alt="">
                                    </div>
                                    <div class="col-8 d-flex align-items-center">
                                        <div>
                                            <span>gummies</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider mx-2"></div>
                            <a class="dropdown-item mb-2" href="{{ url('/products') }}">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center text-center justify-content-center">
                                        <span class="mr-2">see all products</span>
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">faqs</a>
                    </li>
                </ul>
                <hr>
                <ul class="navbar-nav text-uppercase ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" id="login-button" href="">login</a>
                    </li>
                    <li class="nav-item sign-up-btn">
                        <a class="nav-link distributor-link" href="{{ url('/rep-signup') }}/{{ $rep_id }}">sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>