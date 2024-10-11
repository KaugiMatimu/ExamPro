<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">ExamPro</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">ATI TEAS Test</a></li>
                <li><a class="nav-link scrollto" href="#services">TEAS Practice Test</a></li>
                <li><a class="nav-link scrollto" href="#study-guide">TEAS TEST Study Guide</a></li>
                <li><a class="nav-link scrollto" href="#prep-course">TEAS Prep Course</a></li>
                <li><a class="nav-link scrollto" href="#cart">Cart 
                    <span class="badge" id="cart-count"><sup>0</sup></span></a></li>
                <li><a class="nav-link scrollto" id="blogscss" href="#blogs">Blogs</a></li>

                @if (Route::has('login'))
                    @auth
                        <li><a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Order Now</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Sign In</a></li>
                        <li><a class="btn btn-success" id="signupcss" href="{{ route('register') }}">Sign Up</a></li>
                    @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
