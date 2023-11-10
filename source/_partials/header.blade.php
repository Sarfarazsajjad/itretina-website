<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-elevation">
        <div class="container">
            <a class="navbar-brand logo-text" href="index.html"><span class="itr">ITR</span>etina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="itServicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            IT Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="itServicesDropdown">
                            <li><a class="dropdown-item" href="it-services.html">Overview</a></li>
                            <li><a class="dropdown-item" href="software-development.html">Software Development</a></li>
                            <li><a class="dropdown-item" href="web-scrapping.html">Web Scrapping and Data Collection</a>
                            </li>
                            <li><a class="dropdown-item" href="work-in-progress.html">ERP Next</a></li>
                            <li><a class="dropdown-item" href="cloud-services.html">Cloud Services</a></li>
                            <li><a class="dropdown-item" href="it-support.html">IT Support</a></li>
                            <li><a class="dropdown-item" href="integration-and-customization.html">Integration and
                                    Customization</a></li>
                            <li>
                                <a class="dropdown-item" href="it-products.html">
                                    Our Products &raquo;
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item" href="work-in-progress.html">Pizza App</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="work-in-progress.html">Burger App</a>
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
                            <li><a class="dropdown-item" href="billing-services.html">Overview</a></li>
                            <li><a class="dropdown-item" href="medical-billing.html">Medical Billing</a></li>
                            <li><a class="dropdown-item" href="dental-billing.html">Dental Billing</a></li>
                            <li><a class="dropdown-item" href="medical-billing-pricing.html">Pricing</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</html>