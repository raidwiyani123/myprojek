<!DOCTYPE html>
<html lang="en">

<head>
</head>
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert lert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <button type="button"  onclick="location.href='<?php echo site_url('pegawai_controller/')?>'">Back<i class="icon-arrow-right14 position-right"></i></button>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="PG_ID" value="<?php echo $pegawai->PG_ID?>" />
            <div class="form-group">
                <label for="name">Nama*</label>
                <input class="form-control <?php echo form_error('PG_NAMA') ? 'is-invalid':'' ?>"
                type="text" name="PG_NAMA" placeholder="<?php echo $pegawai->PG_NAMA?>" />
                <div class="invalid-feedback">
                    <?php echo form_error('PG_NAMA') ?>
                </div>
                <div class="form-group">
                    <label for="name">Jenis Kelamin*</label>
                    <input class="form-control <?php echo form_error('PG_JENISKELAMIN') ? 'is-invalid':'' ?>"
                    type="text" name="PG_JENISKELAMIN" placeholder="<?php echo $pegawai->PG_JENISKELAMIN?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('PG_JENISKELAMIN') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">Alamat*</label>
                    <input class="form-control <?php echo form_error('PG_ALAMAT') ? 'is-invalid':'' ?>"
                    type="text" name="PG_ALAMAT" placeholder="<?php echo $pegawai->PG_ALAMAT?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('PG_ALAMAT') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">No Tlp*</label>
                    <input class="form-control <?php echo form_error('PG_TLP') ? 'is-invalid':'' ?>"
                    type="text" name="PG_TLP" placeholder="<?php echo $pegawai->PG_TLP?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('PG_TLP') ?>
                    </div>
                
                    
                
                
                

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
            <div class="card-footer small text-muted">
            * required fields 
            </div>
        </body>
    </html>