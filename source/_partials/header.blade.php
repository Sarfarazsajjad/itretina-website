
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-elevation">
        <div class="container">
            <a class="navbar-brand logo-text" href="{{ $page->baseUrl }}/"><span class="itr">ITR</span>etina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page->baseUrl }}/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="itServicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            IT Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="itServicesDropdown">
                            <!-- <li><a class="dropdown-item" href="{{ $page->baseUrl }}/index">Overview</a></li> -->
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/services/software-development">Software Development</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/services/web-scrapping">Web Scrapping and Data Collection</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/services/erp-next">ERP Next</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/services/cloud-services">Cloud Services</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/services/it-support">IT Support</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/services/integration-and-customization">Integration and
                                    Customization</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ $page->baseUrl }}/services/it-products">
                                    Our Products &raquo;
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item" href="{{ $page->baseUrl }}/services/it-products/pizza-app">Pizza App</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ $page->baseUrl }}/work-in-progress">Burger App</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page->baseUrl }}/about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page->baseUrl }}/contact-us">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
