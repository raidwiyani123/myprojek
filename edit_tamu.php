<!DOCTYPE html>
<html lang="en">

<head>
</head>
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert lert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <button type="button"  onclick="location.href='<?php echo site_url('tamu_controller/')?>'">Back<i class="icon-arrow-right14 position-right"></i></button>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="TM_ID" value="<?php echo $tamu->TM_ID?>" />
            <div class="form-group">
                <label for="name">Pegawai*</label>
                <input class="form-control <?php echo form_error('PG_ID') ? 'is-invalid':'' ?>"
                type="text" name="PG_ID" placeholder="<?php echo $tamu->PG_ID?>" />
                <div class="invalid-feedback">
                    <?php echo form_error('PG_ID') ?>
                </div>
                <div class="form-group">
                    <label for="name">Nama Tamu*</label>
                    <input class="form-control <?php echo form_error('TM_NAMA') ? 'is-invalid':'' ?>"
                    type="text" name="TM_NAMA" placeholder="<?php echo $tamu->TM_NAMA?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('TM_NAMA') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">Alamat*</label>
                    <input class="form-control <?php echo form_error('TM_ALAMAT') ? 'is-invalid':'' ?>"
                    type="text" name="TM_ALAMAT" placeholder="<?php echo $tamu->TM_ALAMAT?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('TM_ALAMAT') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">Jenis Kelamin*</label>
                    <input class="form-control <?php echo form_error('TM_JK') ? 'is-invalid':'' ?>"
                    type="text" name="TM_JK" placeholder="<?php echo $tamu->TM_JK?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('TM_JK') ?>
                    </div>
                
                    <div class="form-group">
                    <label for="name">No Tlp*</label>
                    <input class="form-control <?php echo form_error('TM_NOTLP') ? 'is-invalid':'' ?>"
                    type="text" name="TM_NOTLP" placeholder="<?php echo $tamu->TM_NOTLP?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('TM_NOTLP') ?>
                    </div>
                
                
                

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
            <div class="card-footer small text-muted">
            * required fields 
            </div>
        </body>
    </html>