<body>
    <div class="preloader">
        <div class="preloader-inner">
            <img src="<?php echo base_url('assets/frontend/') ?>images/preloader-2.gif" alt="">
        </div>
    </div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="overlay"></div>


    <section class="hero-section padding-top padding-bottom bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/hero-2.jpg">
        <div class="container">
            <div class="hero-area">
                <h2 class="title">blog details</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="blog-grid.html">Blog</a>
                    </li>
                    <li>
                        Blog Details
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ========Hero-Section Ends Here ========-->

    <!-- ========Blog-Section Starts Here ========-->
    <div class="blog-section-area padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article>
                        <?php foreach ($detail as $dt) : ?>
                            <div class="post-item post-details">
                                <div class="post-thumb">
                                    <img src="<?php echo base_url() . 'assets/backend/img/news/' . $dt->img ?>" alt="blog">
                                </div>
                                <div class="post-content">
                                    <div class="post-header">
                                        <h4 class="title">
                                            <?php echo $dt->title ?>
                                        </h4>
                                        <p><?php echo $dt->body     ?></p>
                                    </div>
                                    <div class="meta-post d-flex flex-wrap justify-content-between">
                                        <div class="meta-date">
                                            <i class="far fa-calendar-alt"></i> <span>29 May
                                                2019</span>
                                        </div>
                                        <div class="meta-comment">
                                            <i class="fas fa-user-edit"></i> <span><?php echo $dt->id_user ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </article>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget widget-category">
                            <h6 class="title">News Categories</h6>
                            <ul>
                                <?php foreach ($categories as $category) : ?>
                                    <li>
                                        <a href="#0"><span><?php echo $category->name_category ?></span><span>(10)</span></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>