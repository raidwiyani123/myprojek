<!DOCTYPE html>
<html lang="en">

<head>
</head>
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert lert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <button type="button"  onclick="location.href='<?php echo site_url('reservasi_controller/')?>'">Back<i class="icon-arrow-right14 position-right"></i></button>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="RSV_ID" value="<?php echo $reservasi->RSV_ID?>" />
            <div class="form-group">
                <label for="name">Id Tamu*</label>
                <input class="form-control <?php echo form_error('TM_ID') ? 'is-invalid':'' ?>"
                type="text" name="TM_ID" placeholder="<?php echo $reservasi->TM_ID?>" />
                <div class="invalid-feedback">
                    <?php echo form_error('TM_ID') ?>
                </div>
                <div class="form-group">
                    <label for="name">Id Kamar*</label>
                    <input class="form-control <?php echo form_error('KM_ID') ? 'is-invalid':'' ?>"
                    type="text" name="KM_ID" placeholder="<?php echo $reservasi->KM_ID?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('KM_ID') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">Checkin*</label>
                    <input class="form-control <?php echo form_error('TGL_CHECKIN') ? 'is-invalid':'' ?>"
                    type="text" name="TGL_CHECKIN" placeholder="<?php echo $reservasi->TGL_CHECKIN?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('TGL_CHECKIN') ?>
                    </div>

                    <div class="form-group">
                    <label for="name">Checkout*</label>
                    <input class="form-control <?php echo form_error('TGL_CHECKOUT') ? 'is-invalid':'' ?>"
                    type="text" name="TGL_CHECKOUT" placeholder="<?php echo $reservasi->TGL_CHECKOUT?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('TGL_CHECKOUT') ?>
                    </div>
                
                    <div class="form-group">
                    <label for="name">Tgl Pesan*</label>
                    <input class="form-control <?php echo form_error('TGL_PESAN') ? 'is-invalid':'' ?>"
                    type="text" name="TGL_PESAN" placeholder="<?php echo $reservasi->TGL_PESAN?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('TGL_PESAN') ?>
                    </div>
                
                    <div class="form-group">
                    <label for="name">Lama Menginap*</label>
                    <input class="form-control <?php echo form_error('LAMA_MENGINAP') ? 'is-invalid':'' ?>"
                    type="text" name="LAMA_MENGINAP" placeholder="<?php echo $reservasi->LAMA_MENGINAP?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('LAMA_MENGINAP') ?>
                    </div>
                
                
                
                

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
            <div class="card-footer small text-muted">
            * required fields 
            </div>
        </body>
    </html>