<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data position</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data position</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_position/add') ?>" class="btn btn-primary mb-3">Add position</a>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($positions as $position) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $position->name_position ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_position/update/') . $position->id_position ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_position/delete/') . $position->id_position ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>