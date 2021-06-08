<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-custom py-3 px-3">
    <a href="<?php echo url('/'); ?>">
        <img src="{{ asset('assets/img/logohorizontal.png') }}" width="110" height="40" alt="image">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="col-lg-12">
            <div class="row justify-content-end navbar-nav">
                <li class="col-lg-auto {{ Request::is('about') ? 'active' : '' }}">
                    <a href="<?php echo url('about'); ?>" class="navbar-text-style">
                        About Us
                    </a>
                </li>
                <li class="col-lg-auto {{ Request::is('service') ? 'active' : '' }}">
                    <a href="<?php echo url('service'); ?>" class="navbar-text-style">
                        Service
                    </a>
                </li>
                <li class="col-lg-auto {{ Request::is('location') ? 'active' : '' }}">
                    <a href="<?php echo url('location'); ?>" class="navbar-text-style">
                        Location
                    </a>
                </li>
                <li class="col-lg-auto {{ Request::is('ourteam') ? 'active' : '' }}">
                    <a href="<?php echo url('ourteam'); ?>" class="navbar-text-style">
                        Our Team
                    </a>
                </li>
                <li class="col-lg-auto {{ Request::is('contact') ? 'active' : '' }}">
                    <a href="<?php echo url('contact'); ?>" class="navbar-text-style">
                        Contact
                    </a>
                </li>
            </div>
        </div>
    </div>
</nav>
