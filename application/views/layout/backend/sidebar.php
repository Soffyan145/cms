<?php
$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
?>

<?php if ($this->session->userdata('role_id') === '1') {  ?>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="main-sidebar">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="index.html">Stisla</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="index.html">St</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">Dashboard reporter</li>
                            <li><a class="nav-link" href="<?php echo base_url('a/dashboard') ?>"><i class="fas fa-rocket"></i> <span>Dashboard</span></a></li>
                            <li class="menu-header">News & category</li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>News & Category</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?php echo base_url('admin/data_category') ?>">Category</a></li>
                                    <li><a class="nav-link" href="<?php echo base_url('admin/data_news') ?>">Data news</a></li>
                                    <li><a class="nav-link" href="<?php echo base_url('admin/data_news') ?>">Data news pending</a></li>
                                </ul>
                            </li>

                            <li class="menu-header">Team</li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data team</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?php echo base_url('a/team') ?>">Data team</a></li>
                                    <li><a class="nav-link" href="<?php echo base_url('a/position') ?>">Position</a></li>
                                </ul>
                            </li>

                            <li class="menu-header">Testimonial</li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Testimonial</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?php echo base_url('admin/data_testimonial') ?>">Testimonial</a></li>
                                    <li><a class="nav-link" href="<?php echo base_url('admin/data_testimonial/pending') ?>">Testimonial pending</a></li>
                                </ul>
                            </li>

                            <li class="menu-header">Partner & Faq</li>
                            <li><a class="nav-link" href="<?php echo base_url('a/partner') ?>"><i class="far fa-newspaper"></i> <span>Data Partner</span></a></li>
                            <li><a class="nav-link" href="<?php echo base_url('a/faq') ?>"><i class="far fa-newspaper"></i> <span>Data Faq</span></a></li>

                        </ul>

                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                                <i class="fas fa-rocket"></i> Documentation
                            </a>
                        </div>
                    </aside>
                </div>
            <?php } elseif ($this->session->userdata('role_id') === '2') { ?>

                <body>
                    <div id="app">
                        <div class="main-wrapper">
                            <div class="main-sidebar">
                                <aside id="sidebar-wrapper">
                                    <div class="sidebar-brand">
                                        <a href="index.html">Stisla</a>
                                    </div>
                                    <div class="sidebar-brand sidebar-brand-sm">
                                        <a href="index.html">St</a>
                                    </div>
                                    <ul class="sidebar-menu">
                                        <li class="menu-header">Dashboard Reporter</li>
                                        <li><a class="nav-link" href="<?php echo base_url('a/dashboard') ?>"><i class="fas fa-rocket"></i> <span>Dashboard</span></a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('a/pending') ?>"><i class="fas fa-rocket"></i> <span>Data News</span></a></li>
                                        <li><a class="nav-link" href="<?php echo base_url('a/profile') ?>"><i class="fas fa-rocket"></i> <span>Profile</span></a></li>
                                    </ul>

                                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                                            <i class="fas fa-rocket"></i> Documentation
                                        </a>
                                    </div>
                                </aside>
                            </div>
                        <?php }
                        ?>