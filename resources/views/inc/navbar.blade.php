<link href="{{ asset('css/nav.css') }}" rel="stylesheet">

<nav id="nav" class="navbar fixed-top navbar-expand-sm navbar-light shadow navbar-laravel bg-white">
    <div class="no_wrap container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item main-nav-item">
                    <a id="nav-logo" class="navbar-brand hide" href="/">
                        <img src="{{ URL::to('imgs/logo 1.png') }}" 
                            alt="image not found" class="" style="width:114.7px; height:35.5px">
                    </a>
                </li>
            </ul>
                
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/">Home</a>
                    <div class="line"></div>
                </li>
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/about_us">About Us</a>
                    <div class="line"></div>
                </li>
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/news">News</a>
                    <div class="line"></div>
                </li>
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/jobs">Jobs</a>
                    <div class="line"></div>
                </li>  
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link main-nav-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Projects
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-right" aria-labelledby="navbarDropdown" style="">
                        <a class="dropdown-item nav-link" href="/interior_projects">
                            Interior
                        </a>
                        <a class="dropdown-item nav-link" href="/exterior_projects">
                            Exterior
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link main-nav-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Services
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-right" aria-labelledby="navbarDropdown" style="">
                        <a class="dropdown-item nav-link" href="/interior_service">
                            Interior
                        </a>
                        <a class="dropdown-item nav-link" href="/rendering_service">
                            3D-Rendering
                        </a>
                        <a class="dropdown-item nav-link" href="/architecture_secvice">
                            Architecture
                        </a>
                        <a class="dropdown-item nav-link" href="/animation_service">
                            3D-Animation
                        </a>                            
                    </div>
                </li>
                <li class="nav-item main-nav-item">
                    <a class="nav-link" href="/contact_us">Contact Us</a>
                    <div class="line"></div>
                </li>
            </ul>
        </div>
    </div>
</nav>