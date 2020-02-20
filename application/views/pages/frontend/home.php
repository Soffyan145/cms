<section class="banner-section padding-top padding-bottom">
    <div class="container">
        <div class="banner-wrapper">
            <div class="banner-content">
                <span class="welcome">welcome to <span>BeLike</span></span>
                <h2 class="title">are you looking for increase your Followers?</h2>
                <p>Quasi necessitatibus sunt beatae assumenda repellendus, nihil quisquam impedit eaque velit ullam, totam itaque? Tempore, iusto deserunt quae odio velit corporis illum!</p>
                <div class="button-group">
                    <a href="service.html" class="custom-button">View Service</a>
                    <a href="get-service.html" class="custom-button">Get Service</a>
                </div>
            </div>
            <div class="banner-thumb d-none d-lg-block">
                <div class="man">
                    <img src="<?php echo base_url('assets/frontend/') ?>images/banner/man.png" alt="man">
                </div>
                <div class="woman">
                    <img src="<?php echo base_url('assets/frontend/') ?>images/banner/woman.png" alt="man">
                </div>
                <div class="main-thumb">
                    <img src="<?php echo base_url('assets/frontend/') ?>images/banner/banner03.png" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Banner-Section Ends Here ========-->

<!-- ========How-To-Section Starts Here ========-->
<section class="how-to-section padding-top padding-bottom bg-f8">
    <div class="container">
        <div class="section-header">
            <h2 class="title">how we works</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae corrupti laudantium at assumenda
                amet, culpa voluptatibus ducimus sed
            </p>
        </div>
        <div class="flow-wrapper mb-40-none">
            <div class="flow-item one">
                <div class="flow-thumb">
                    <div class="thumb">
                        01
                    </div>
                </div>
                <h5 class="title">Get Order</h5>
            </div>
            <div class="flow-item two">
                <div class="flow-thumb">
                    <div class="thumb">
                        02
                    </div>
                </div>
                <h5 class="title">Marketing</h5>
            </div>
            <div class="flow-item three">
                <div class="flow-thumb">
                    <div class="thumb">
                        03
                    </div>
                </div>
                <h5 class="title">Finish Work</h5>
            </div>
            <div class="flow-item four">
                <div class="flow-thumb">
                    <div class="thumb">
                        04
                    </div>
                </div>
                <h5 class="title">delivery</h5>
            </div>
        </div>
    </div>
</section>
<!-- ========How-To-Section Ends Here ========-->

<!-- ========Team-Section Starts Here ========-->
<section class="team-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header">
            <h2 class="title">our expert team</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae corrupti laudantium at assumenda
                amet, culpa voluptatibus ducimus sed</p>
        </div>
        <div class="row mb-30-none justify-content-center">
            <?php foreach ($teams as $team) : ?>
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="team-item">
                        <div class="team-thumb">
                            <a href="#0">
                                <img src="<?= base_url() ?>assets/backend/img/team/<?= $team->img; ?>" alt="team">
                            </a>
                        </div>
                        <div class="team-content">
                            <h6 class="title">
                                <a href="#0">Sumon Mia</a>
                            </h6>
                            <span class="info">SEO Expert</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========Team-Section Ends Here ========-->

<!-- ========Coverage-Section Ends Here ========-->
<section class="our-coverage-section padding-bottom padding-top bg_img bg-fixed" data-background="<?php echo base_url('assets/frontend/') ?>images/coverage/coverage-bg.jpg">
    <div class="container">
        <div class="row justify-content-center mb-40-none">
            <div class="counter-item">
                <div class="counter-thumb">
                    <h2 class="odometer title" data-odometer-final="99">0</h2>
                    <h2 class="title">k</h2>
                </div>
                <div class="counter-content">
                    <h6 class="title">happy user</h6>
                </div>
            </div>
            <div class="counter-item two">
                <div class="counter-thumb">
                    <h2 class="odometer title" data-odometer-final="23">0</h2>
                </div>
                <div class="counter-content">
                    <h6 class="title">Services</h6>
                </div>
            </div>
            <div class="counter-item three">
                <div class="counter-thumb">
                    <h2 class="odometer title" data-odometer-final="17">0</h2>
                    <h2 class="title">y</h2>
                </div>
                <div class="counter-content">
                    <h6 class="title">Experience</h6>
                </div>
            </div>
            <div class="counter-item four">
                <div class="counter-thumb">
                    <h2 class="odometer title" data-odometer-final="120">0</h2>
                </div>
                <div class="counter-content">
                    <h6 class="title">team member</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Coverage-Section Ends Here ========-->

<!-- ========Client-Section Starts Here ========-->
<section class="client-section padding-top padding-bottom bg-f8">
    <div class="container">
        <div class="section-header">
            <h2 class="title">happy clients say</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae corrupti laudantium at assumenda
                amet, culpa voluptatibus ducimus sed</p>
        </div>
        <div class="client-slider">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $testimonial) : ?>
                    <div class="swiper-slide">
                        <div class="client-item">
                            <div class="client-thumb">
                                <a href="#0">
                                    <img src="<?php echo base_url('assets/frontend/') ?>images/client/client01.jpg" alt="client">
                                </a>
                            </div>
                            <div class="client-content">
                                <h5 class="title"><?php echo $testimonial->name_user ?></h5>
                                <span class="info">User</span>
                                <p><?php echo $testimonial->say ?></p>
                                <div class="ratings">
                                    <i class="flaticon-pointed-star"></i>
                                    <i class="flaticon-pointed-star"></i>
                                    <i class="flaticon-pointed-star"></i>
                                    <i class="flaticon-pointed-star"></i>
                                    <i class="flaticon-pointed-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- ========Client-Section Ends Here ========-->

<!-- ========Sponsor-Section Starts Here ========-->
<div class="sponsor-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">our regular partners</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae corrupti laudantium at assumenda
                amet, culpa voluptatibus ducimus sed</p>
        </div>
        <div class="sponsor-slider">
            <div class="swiper-wrapper">
                <?php foreach ($partners as $partner) : ?>
                    <div class="swiper-slide">
                        <div class="sponsor-thumb">
                            <img src="<?= base_url() ?>assets/backend/img/partner/<?= $partner->img; ?>" alt="sponsor">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>