<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/data_position') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit position</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_position') ?>">Data position</a></div>
                <div class="breadcrumb-item">Edit position</div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit position</h4>
                </div>
                <div class="card-body">
                    <?php foreach ($positions as $position) : ?>
                        <form method="post" action="<?php echo site_url('admin/data_position/update_action') ?>">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Position</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" class="form-control" name="id_position" value="<?php echo $position->id_position ?>">
                                    <input type="text" name="name_position" value="<?php echo $position->name_position ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <a href="<?php echo base_url('admin/data_position') ?>" class="btn btn-danger ml-4">Back</a>
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