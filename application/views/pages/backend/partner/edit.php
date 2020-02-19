<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/data_partner') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit partner</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_partner') ?>">Data partner</a></div>
                <div class="breadcrumb-item">Edit partner</div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit partner</h4>
                </div>
                <div class="card-body">
                    <?php foreach ($partners as $partner) : ?>
                        <form method="post" action="<?php echo site_url('admin/data_partner/update_action') ?>" enctype="multipart/form-data">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name partner</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" class="form-control" name="id_partner" value="<?php echo $partner->id_partner ?>">
                                    <input type="text" name="name_partner" value="<?php echo $partner->name_partner ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                <div class="col-sm-12 col-md-7">
                                    <img src="<?php echo base_url() . 'assets/backend/img/partner/' . $partner->img ?>" wipartnerh="200px" height="100">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Choose To Update Images</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control" name="img">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <a href="<?php echo base_url('admin/data_partner') ?>" class="btn btn-danger ml-4">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


</div>