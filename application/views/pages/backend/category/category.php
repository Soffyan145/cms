<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data category</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_category/add') ?>" class="btn btn-primary mb-3">Add category</a>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($categories as $category) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $category->name_category ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_category/update/') . $category->id_category ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_category/delete/') . $category->id_category ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>