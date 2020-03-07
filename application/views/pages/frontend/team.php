<section class="hero-section padding-top padding-bottom bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/hero-2.jpg">
    <div class="container">
        <div class="hero-area">
            <h2 class="title">our expert Team</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    Team
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero-Section Ends Here ========-->

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
<!-- ========Team-Section Ends Here ========-->

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