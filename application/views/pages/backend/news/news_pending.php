<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data news</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data news</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_news_pending/add') ?>" class="btn btn-primary mb-3">Add news</a>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurnalis</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($newses as $news) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $news->id_user ?></td>
                        <td><?php echo $news->name_category ?></td>
                        <td><?php echo $news->title ?></td>
                        <td><?php if ($news->status == "0") {
                                echo "<span class='badge badge-danger'>Not Allready</span>";
                            } else {
                                echo "<span class='badge badge-primary'>Allready</span>";
                            } ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url('admin/data_news_pending/detail/') . $news->id ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/data_news_pending/update/') . $news->id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_news_pending/delete/') . $news->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>