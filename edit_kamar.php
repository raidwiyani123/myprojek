<!DOCTYPE html>
<html lang="en">

<head>
</head>
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert lert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <button type="button"  onclick="location.href='<?php echo site_url('kamar_controller/')?>'">Back<i class="icon-arrow-right14 position-right"></i></button>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="KM_ID" value="<?php echo $kamar->KM_ID?>" />
            <div class="form-group">
                <label for="name">No Kamar*</label>
                <input class="form-control <?php echo form_error('KM_NO') ? 'is-invalid':'' ?>"
                type="text" name="KM_NO" placeholder="<?php echo $kamar->KM_NO?>" />
                <div class="invalid-feedback">
                    <?php echo form_error('KM_NO') ?>
                </div>
                <div class="form-group">
                    <label for="name">Lokasi*</label>
                    <input class="form-control <?php echo form_error('KM_LOKASI') ? 'is-invalid':'' ?>"
                    type="text" name="KM_LOKASI" placeholder="<?php echo $kamar->KM_LOKASI?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('KM_LOKASI') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">Fasilitas*</label>
                    <input class="form-control <?php echo form_error('FASILITAS') ? 'is-invalid':'' ?>"
                    type="text" name="FASILITAS" placeholder="<?php echo $kamar->FASILITAS?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('FASILITAS') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">Harga*</label>
                    <input class="form-control <?php echo form_error('HARGA') ? 'is-invalid':'' ?>"
                    type="text" name="HARGA" placeholder="<?php echo $kamar->HARGA?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('HARGA') ?>
                    </div>
                
                    <div class="form-group">
                    <label for="name">Kapasitas*</label>
                    <input class="form-control <?php echo form_error('KM_KAPASITAS') ? 'is-invalid':'' ?>"
                    type="text" name="KM_KAPASITAS" placeholder="<?php echo $kamar->KM_KAPASITAS?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('KM_KAPASITAS') ?>
                    </div>
                
                
                
                

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
            <div class="card-footer small text-muted">
            * required fields 
            </div>
        </body>
    </html>