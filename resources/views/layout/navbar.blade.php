<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-custom py-3 px-3">
    <a href="<?php echo url('/'); ?>">
        <img src="{{ asset('assets/img/logo.png') }}" width="40" height="40" alt="image">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="col-lg-12">
            <div class="row justify-content-end">
                <div class="col-lg-auto">
                    <a href="<?php echo url('about'); ?>" class="navbar-text-style">
                        About Us
                    </a>
                </div>
                <div class="col-lg-auto">
                    <a href="<?php echo url('service'); ?>" class="navbar-text-style">
                        Service
                    </a>
                </div>
                <div class="col-lg-auto">
                    <a href="<?php echo url('location'); ?>" class="navbar-text-style">
                        Location
                    </a>
                </div>
                <div class="col-lg-auto">
                    <a href="<?php echo url('ourteam'); ?>" class="navbar-text-style">
                        Our Team
                    </a>
                </div>
                <div class="col-lg-auto">
                    <a href="<?php echo url('contact'); ?>" class="navbar-text-style">
                        Contact
                    </a>
                </div>

            </div>
        </div>
        {{-- <ul>
            <li class="item"><a href="#">link 1</a></li>
            <li class="item"><a href="#">link 2</a></li>
            <li class="item"><a href="#">link 3</a></li>
            <li class="item"><a href="#">link 4</a></li>
            <li class="item"><a href="#">link 5</a></li>
        </ul> --}}
    </div>
</nav>
