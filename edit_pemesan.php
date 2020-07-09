<!DOCTYPE html>
<html lang="en">

<head>
</head>
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert lert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>
    <button type="button"  onclick="location.href='<?php echo site_url('pemesan_controller/')?>'">Back<i class="icon-arrow-right14 position-right"></i></button>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="PMSN_ID" value="<?php echo $pemesan->PMSN_ID?>" />
            <div class="form-group">
                <label for="name">Id Reservasi*</label>
                <input class="form-control <?php echo form_error('RSV_ID') ? 'is-invalid':'' ?>"
                type="text" name="RSV_ID" placeholder="<?php echo $pemesan->RSV_ID?>" />
                <div class="invalid-feedback">
                    <?php echo form_error('RSV_ID') ?>
                </div>
                <div class="form-group">
                    <label for="name">Guess*</label>
                    <input class="form-control <?php echo form_error('GUESS') ? 'is-invalid':'' ?>"
                    type="text" name="GUESS" placeholder="<?php echo $pemesan->GUESS?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('GUESS') ?>
                    </div>

                 
                
                

            <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
            <div class="card-footer small text-muted">
            * required fields 
            </div>
        </body>
    </html>