<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data faq</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data faq</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_faq/add') ?>" class="btn btn-primary mb-3">Add faq</a>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Question</th>
                    <th>answer</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($faqs as $faq) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $faq->question ?></td>
                        <td><?php echo $faq->answer ?></td>
                        <td colspan="2">
                            <a href="<?php echo base_url('admin/data_faq/update/') . $faq->id_faq ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_faq/delete/') . $faq->id_faq ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>