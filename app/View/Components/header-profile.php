<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="hamburger-menu" onclick="toggleSidebar()">
            <div></div>
            <div></div>
            <div></div>
        </div>
<!--        <h1 class="logo"><a href="/">Rakat.</a></h1>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#visi">Vision & Mission</a></li>
                <li><a class="nav-link scrollto " href="#profile">Profile</a></li>
                <li><a class="nav-link scrollto " href="#services">Service</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
                <li><a class="getstarted scrollto" href="/auth/login"><?php echo isset($models['username']) ? $models['username'] : "Login/Register"?></a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>

    <?php if (\clubMotor\Helper\SessionHelper::getFlash('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account has been created. Please login to continue.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</header>
<!-- End Header -->