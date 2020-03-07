<section class="hero-section padding-top padding-bottom bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/hero-2.jpg">
    <div class="container">
        <div class="hero-area">
            <h2 class="title">about us</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    About Us
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero-Section Ends Here ========-->

<!-- ========About-Section Starts Here ========-->
<section class="about-us padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-header left-style">
                        <h2 class="title">why we are?</h2>
                        <p>
                            Rem ex quasi earum eum doloremque doloribus? odio tenetur labore optio quae ab!
                        </p>
                    </div>
                    <div class="content">
                        <p>
                            Facilis temporibus rem alias expedita tenetur esse molestias debitis facere animi enim,
                            praesentium totam obcaecati rerum dicta voluptatem ut reprehenderit culpa ex eos sequi
                            nostrum dolorem, aspernatur modi magni. Repudiandae.
                            Rem ex quasi earum eum, adipisci assumenda at totam libero nostrum cupiditate,
                            doloremque
                            doloribus? Nisi illum maxime, provident necessitatibus quos at reiciendis cum vel odio
                            tenetur labore optio quae ab!
                        </p>
                        <a href="#0" class="custom-button">
                            join us now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-thumb">
                    <img src="<?php echo base_url('assets/frontend/') ?>images/about/about02.png" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========About-Section Ends Here ========-->

<!-- ===========Overview-Section=========== -->
<section class="overview-section">
    <div class="overview-item bg-f8">
        <div class="container mw-lg-100 p-0">
            <div class="row m-0">
                <div class="col-lg-6 p-lg-0">
                    <div class="overview-contnent padding-bottom padding-top">
                        <div class="content">
                            <div class="section-header left-style">
                                <h2 class="title">our mission</h2>
                            </div>
                            <p>
                                excepturi eos omnis magni illo reprehenderit sunt amet quam ducimus nisi ipsum qui
                                cum. Commodi culpa tempora facere autem modi tempore maiores!
                                Totam sapiente omnis est autem, odit eius assumenda, molestiae, cupiditate nobis nam
                                voluptatem praesentium provident delectus. Atque porro quos quisquam, facilis nisi
                                repellat distinctio, laboriosam vitae praesentium placeat molestiae dolor!
                            </p>
                            <ul class="nulla-list">
                                <li>Duis gravida primis dictumst</li>
                                <li>Aenean suspendisse et rutrum</li>
                                <li>Marturient eget molestie</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-lg-0 bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/overview/overview01.jpg"></div>
            </div>
        </div>
    </div>
    <div class="overview-item bg-f8">
        <div class="container mw-lg-100 p-0">
            <div class="row m-0 flex-row-reverse">
                <div class="col-lg-6 p-lg-0">
                    <div class="overview-contnent padding-bottom padding-top">
                        <div class="content">
                            <div class="section-header left-style">
                                <h2 class="title">our vission</h2>
                            </div>
                            <p>
                                excepturi eos omnis magni illo reprehenderit sunt amet quam ducimus nisi ipsum qui
                                cum. Commodi culpa tempora facere autem modi tempore maiores!
                                Totam sapiente omnis est autem, odit eius assumenda, molestiae, cupiditate nobis nam
                                voluptatem praesentium provident delectus. Atque porro quos quisquam, facilis nisi
                                repellat distinctio, laboriosam vitae praesentium placeat molestiae dolor!
                            </p>
                            <ul class="nulla-list">
                                <li>Duis gravida primis dictumst</li>
                                <li>Aenean suspendisse et rutrum</li>
                                <li>Marturient eget molestie</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-lg-0 bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/overview/overview02.jpg"></div>
            </div>
        </div>
    </div>
</section>
<!-- ===========Overview-Section=========== -->

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
                                <a href="#0"><?php echo $team->name_team ?></a>
                            </h6>
                            <span class="info"><?php echo $team->name_position ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
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