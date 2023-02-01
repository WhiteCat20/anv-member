<nav class="navbar navbar-expand-lg bg-dark text-white custom-toggler">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img width="96px" height="48px" src="{{ asset('image/brand-white.png') }}" class="custom-logo" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        GENERAL
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/#about">ABOUT</a></li>
                        <li><a class="dropdown-item" href="/#committee">COMMITTEE</a></li>
                        <!-- <li><a class="dropdown-item" href="/#keynote">KEYNOTE SPEAKERS</a></li> -->
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        AUTHORS
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="/#dates">IMPORTANT DATES</a></li> -->
                        <li><a class="dropdown-item" href="/#cfp">CALL FOR PAPER</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           GUIDELINE
         </a>
         <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="#">INFORMATION</a></li>
           <li><a class="dropdown-item" href="#">ATTENDEES</a></li>
           <li><a class="dropdown-item" href="#">FOR SESSION CHAIRS</a></li>
           <li><a class="dropdown-item" href="#">PRESENTERS</a></li>
         </ul>
       </li> -->
                <!-- <li class="nav-item">
         <a class="nav-link" href="#">SUBMITTED ABSTRACT</a>
       </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="/login">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
