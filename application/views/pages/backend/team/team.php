<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data team</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data team</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_team/add') ?>" class="btn btn-primary mb-3">Add team</a>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Name position</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($teams as $team) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $team->name_team ?></td>
                        <td><?php echo $team->name_position ?></td>
                        <td>
                            <img width="80px" src='<?= base_url() ?>assets/backend/img/team/<?= $team->img; ?>' height='80px'>
                        </td>
                        <td>
                            <a href="<?php echo base_url('admin/data_team/update/') . $team->id_team ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_team/delete/') . $team->id_team ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>