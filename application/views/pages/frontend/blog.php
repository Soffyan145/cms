<section class="hero-section padding-top padding-bottom bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/hero-2.jpg">
    <div class="container">
        <div class="hero-area">
            <h2 class="title">blog grid</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    Blog grid
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero-Section Ends Here ========-->

<!-- ========Blog-Section Starts Here ========-->
<div class="blog-section-area padding-top padding-bottom">
    <div class="container">
        <div class="row mb-30-none">
            <?php foreach ($newses as $news) : ?>
                <div class="col-md-6 col-sm-10 col-lg-4">
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="blog-details.html"><img src="<?php echo base_url() . 'assets/backend/img/news/' . $news->img ?>" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                                <h4 class="title"><a href="blog-details.html"><?php echo substr($news->title, 0, 28) ?>...</a>
                                </h4>
                                <p><?php echo substr($news->body, 0, 35) ?>...</p>
                            </div>
                            <div class="meta-post d-flex flex-wrap justify-content-between">
                                <div class="meta-date">
                                    <a href="#0"><i class="far fa-calendar-alt"></i> <span><?= date($news->date); ?></span></a>
                                </div>
                                <div class="meta-comment">
                                    <a href="<?php echo base_url('user/blog/detail/') . $news->id ?>"><i class="fas fa-angle-double-right"></i> <span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="blog-pagination d-flex flex-wrap justify-content-center">
            <a href="#0" class="pagination-item"><i class="fas fa-angle-left"></i></a>
            <a href="#0" class="pagination-item active">02</a>
            <a href="#0" class="pagination-item">03</a>
            <a href="#0" class="pagination-item">04</a>
            <a href="#0" class="pagination-item">05</a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <a href="#0" class="pagination-item">85</a>
            <a href="#0" class="pagination-item"><i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</div>