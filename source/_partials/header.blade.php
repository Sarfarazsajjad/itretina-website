<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-elevation">
        <div class="container">
            <a class="navbar-brand logo-text" href="{{ $page->baseUrl }}/index"><span class="itr">ITR</span>etina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page->baseUrl }}/index">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="itServicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            IT Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="itServicesDropdown">
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/it-services">Overview</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/software-development">Software Development</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/web-scrapping">Web Scrapping and Data Collection</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/ERP-Next">ERP Next</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/cloud-services">Cloud Services</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/it-support">IT Support</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/integration-and-customization">Integration and
                                    Customization</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ $page->baseUrl }}/it-products">
                                    Our Products &raquo;
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item" href="{{ $page->baseUrl }}/pizza-app">Pizza App</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ $page->baseUrl }}/work-in-progress">Burger App</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="billingServicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Billing Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="billingServicesDropdown">
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/billing-services">Overview</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/medical-billing">Medical Billing</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/dental-billing">Dental Billing</a></li>
                            <li><a class="dropdown-item" href="{{ $page->baseUrl }}/medical-billing-pricing">Pricing</a></li>
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

</html>