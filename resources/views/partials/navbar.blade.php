<nav class="navbar" role="navigation" aria-label="Main navigation">
    <div class="navbar-inner">
        <a href="{{ route('home') }}" class="brand-logo" aria-label="BrandMantra Home">
            <span class="name">BRANDMANTRA</span>
            <span class="tagline-small">ब्रांड का मंत्र</span>
        </a>
        <ul class="nav-links" role="list">
            <li><a href="{{ route('home') }}" data-nav="home"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" data-nav="about"
                    class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('services') }}" data-nav="services"
                    class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="{{ route('portfolio') }}" data-nav="portfolio"
                    class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="{{ route('blog') }}" data-nav="blog"
                    class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Insights</a></li>
            <li><a href="{{ route('contact') }}" class="nav-cta">Let's Talk</a></li>
        </ul>
        <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>