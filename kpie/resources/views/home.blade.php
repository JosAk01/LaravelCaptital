@extends('layouts.app')

@section('title', 'Capital International Group')

@section('content')
<div style="background-color:#1B1529;">
    <nav class="navbar">
        <div class="navbar-container">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <img src="{{ asset('img/Logo.svg') }}" alt="Capital Logo" class="navbar-logo">
            <ul class="navbar-nav" id="navbar-items">
                <li class="dropdown">
                    <a href="#"><span>Investment Services</span></a>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="#">Investment Platform</a></li>
                            <li><a href="#">Investment Management</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Investment Management</a></li>
                <li><a href="#">Banking</a></li>
                <li class="dropdown">
                    <a href="#"><span>Company</span></a>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Conscious Capital</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            
            <div class="cta-buttons">
                <a href="{{ route('login') }}" class="login">Login</a>
                <a href="#" class="get-started">Get started</a>
            </div>
      
            <span class="search-icon" id="search-icon" onclick="toggleSearch()">&#128269;</span>
            <!-- Search Bar Popup -->
            <div class="search-popup" id="searchPopup">
                <span class="icon">&#128269;</span>
                <input type="text" placeholder="Type your search">
                <button>Search</button>
            </div>
        </div>
    </nav>
    
    <div id="popup" class="popup">
        <div class="message">
            <p>We recently published our 2023 Conscious Capital Sustainability Report.</p>
            <p>Click <a href="#">here</a> to access it.</p>
            <span id="closePopup" class="close">&times;</span>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container-hero" data-aos="fade-up">
            <h1><span data-aos="fade-up" data-aos-delay="7000">Invest with us.</span> <span data-aos="fade-up" data-aos-delay="1000"> Bank with us.</span></h1>
            <h1 data-aos="fade-up" data-aos-delay="1500">Grow with us.</h1>
            <p data-aos="fade-up" data-aos-delay="2000">Explore the ultimate suite of financial services designed to simplify asset and cash management for businesses, intermediaries, and high net worth individuals.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container" data-aos="fade-up" data-aos-delay="1000">
            <div class="service-box">
                <h3>Investment Platform</h3>
                <p>Use our international investment platform to place your own trades across an almost unlimited universe of assets.</p>
                <button>Learn more</button>
            </div>
            <div class="service-box">
                <h3>Investment Management</h3>
                <p>Let us manage your investments and select the optimal discretionary strategy to meet your long-term financial goals.</p>
                <button>Learn more</button>
            </div>
            <div class="service-box">
                <h3>Banking</h3>
                <p>With competitive rates and fast account opening, we serve corporates, trusts, and high net worth individuals.</p>
                <button>Learn more</button>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <img src="{{ asset('img/Logo.svg') }}" alt="Capital Logo">
                <ul class="social-links">
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="footer-right">
                <div class="footer-column">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Investment </a></li>
                        <li><a href="#">Platform</a></li>
                        <li><a href="#">Investment</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Corporate</a></li>
                        <li><a href="#">Banking</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Platform Resources</a></li>
                        <li><a href="#">Management Resources</a></li>
                        <li><a href="#">Client Charter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full company details, website terms and privacy & cookie notice can be viewed <a href="#">here.</a></p>
            <p><a href="">Cookies preference</a></p>
            <p>&copy; Capital International Group, 2024</p>
        </div>
    </footer>

    <script src="{{ asset('scripts/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</div>
@endsection
