<section class="hero-section padding-top padding-bottom bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/hero-2.jpg">
    <div class="container">
        <div class="hero-area">
            <h2 class="title">Sign up</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Account</a>
                </li>
                <li>
                    Sign up
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero-Section Ends Here ========-->

<!-- ========Account-Section Starts Here ========-->
<section class="account-section padding-bottom padding-top">
    <div class="container">
        <div class="account-wrapper">
            <div class="login-area account-area change-form">
                <div class="row m-0">
                    <div class="col-lg-6 p-0">
                        <div class="change-catagory-area bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/account/account-bg.jpg">
                            <h4 class="title">
                                wellcome to BeLike
                            </h4>
                            <p>Nonummy massa quam nonummy fermentum in ipsum sit libero ac nisl vivamus porttitor
                            </p>
                            <a href="<?php echo base_url('u/login') ?>" class="custom-button account-control-button">Login Account</a>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="common-form-style bg-f8 create-account">
                            <h4 class="title">create your account</h4>
                            <p>you can create 100% free & secure account , we hope you all like our website</p>
                            <form class="create-account-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name" id="name" name="name">
                                    <small class="text-danger"><?php form_error('name'); ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Email" name="email">
                                    <small class="text-danger"><?php form_error('email'); ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="myInput" placeholder="Password">
                                    <a href="#0" class="show-pass-one show-pass"><i class="fas fa-eye"></i></a>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="myInputTwo" placeholder="Confirm Password">
                                    <a href="#0" class="show-pass show-pass-two"><i class="fas fa-eye"></i></a>
                                </div>
                                <div class="form-group">
                                    <input type="number" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Create an Account">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signup-area account-area">
                <div class="row m-0 flex-wrap-reverse">
                    <div class="col-lg-6 p-0">
                        <div class="common-form-style bg-f8 login-account">
                            <h4 class="title">login account</h4>
                            <p class="mb-sm-4 mb-3">you can create 100% free & secure account , we hope you all
                                like our website</p>
                            <form class="create-account-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="myInputThree" placeholder="Password" required>
                                    <a href="#0" class="show-pass show-pass-three"><i class="fas fa-eye"></i></a>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login Account">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="change-catagory-area bg_img" data-background="<?php echo base_url('assets/frontend/') ?>images/account/account-bg.jpg">
                            <h4 class="title">
                                wellcome to Belike
                            </h4>
                            <p>Nonummy massa quam nonummy fermentum in ipsum sit libero ac nisl vivamus porttitor
                            </p>
                            <a href="" class="custom-button account-control-button">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>