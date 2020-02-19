<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data testimonial</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data testimonial</div>
            </div>
        </div>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Testimonial</th>
                    <th>star</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($testimonials as $testimonial) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $testimonial->name_user ?></td>
                        <td><?php echo $testimonial->say ?></td>
                        <td><?php echo $testimonial->star ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_testimonial/update_status/') . $testimonial->id_testimonial ?>" class="btn btn-success" onclick="javascript: return confirm('Are you sure item already  ?')"><i class="fas fa-check-circle"></i></a>
                            <a href="<?php echo base_url('admin/data_testimonial/delete/') . $testimonial->id_testimonial ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>