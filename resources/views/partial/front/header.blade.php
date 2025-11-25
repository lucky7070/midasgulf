<div class="top-bar" id="topBar">
    <div class="TopRight">
        <span><i class="fas fa-clock"></i> Working Days: Monday - Friday</span>
    </div>
    <div class="TopLeft">
        <a class="text-white text-decoration-none" href="mailto:help@midasgulf.com"><i class="fas fa-envelope"></i> help@midasgulf.com</a>|
        <a class="text-white text-decoration-none" href="tel:04-566-5861"><i class="fas fa-phone"></i> 04-566-5861</a>|
        <span><i class="fas fa-phone-volume"></i> Toll Free (UAE Only): 800MIDASGULF (800-643274853)</span>
        <a class="text-white text-decoration-none" href="https://www.linkedin.com/in/kingmidas/" target="_blank"><i class="fab fa-linkedin"></i></a>
    </div>
</div>

<nav class="navbar" id="navbar">
    <a class="logo" href="{{ route('home') }}">
        <img src="{{ asset('front/images/af9840d5-copy.jpg') }}" alt="Company Logo">
    </a>
    <ul class="nav-links hamburger">
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('our-services') }}">OUR SERVICES</a></li>
        <li class="Nav-btn"><a href="{{ route('contact') }}">CONTACT US</a></li>
    </ul>
</nav>