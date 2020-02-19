<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Partner</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data partner</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_partner/add') ?>" class="btn btn-primary mb-3">Add partner</a>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name partner</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($partners as $partner) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $partner->name_partner ?></td>
                        <td>
                            <img width="80px" src='<?= base_url() ?>assets/backend/img/partner/<?= $partner->img; ?>' height='80px'>
                        </td>
                        <td>
                            <a href="<?php echo base_url('admin/data_partner/update/') . $partner->id_partner ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_partner/delete/') . $partner->id_partner ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>