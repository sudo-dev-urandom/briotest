<nav class="navbar navbar-expand-lg text-center justify-content-center fixed-top navbar-custom py-3 px-3">
    <div class="row w-100 justify-content-between align-items-center">
        <div class="col-lg-2 text-left">
            <a href="<?php echo url('/'); ?>">
                <img src="{{ asset('assets/img/logo.png') }}" width="40" height="40" alt="image">
            </a>
        </div>
        <div class="col-lg-6">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <a href="<?php echo url('about'); ?>" class="navbar-text-style">
                            About Us
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo url('service'); ?>"
                            class="navbar-text-style">
                            Service
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo url('location'); ?>"
                            class="navbar-text-style">
                            Location
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo url('ourteam'); ?>"
                            class="navbar-text-style">
                            Our Team
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo url('contact'); ?>"
                            class="navbar-text-style">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
