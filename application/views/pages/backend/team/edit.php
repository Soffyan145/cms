<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/data_team') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit team</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_team') ?>">Data team</a></div>
                <div class="breadcrumb-item">Edit team</div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit team</h4>
                </div>
                <div class="card-body">
                    <?php foreach ($teams as $team) : ?>
                        <form method="post" action="<?php echo site_url('admin/data_team/update_action') ?>" enctype="multipart/form-data">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="hidden" class="form-control" name="id_team" value="<?php echo $team->id_team ?>">
                                    <input type="text" name="name_team" value="<?php echo $team->name_team ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Position</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="name_position">
                                        <?php foreach ($positions as $position) : ?>
                                            <option value="<?php echo $position->name_position ?>"><?php echo $position->name_position ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                <div class="col-sm-12 col-md-7">
                                    <img src="<?php echo base_url() . 'assets/backend/img/team/' . $team->img ?>" witeamh="200px" height="100">
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
                                    <a href="<?php echo base_url('admin/data_team') ?>" class="btn btn-danger ml-4">Back</a>
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