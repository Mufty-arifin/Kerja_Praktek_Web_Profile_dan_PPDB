<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        Bayar Sekolah Agama
        </div>
        <div class="panel-body">
        <?php 
            if (isset($error_upload)){
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
            echo form_open_multipart('pembayaran_sa/tbayar_sa');
        ?>
        <div class="form-group">
            <label>NIK</label>
            <input class="form-control" name="nik" placeholder="NIK" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" name="nama" placeholder="Nama " required>
        </div>
        <div class="form-group">
            <label>Bayar</label>
            <input class="form-control" name="total_bayar" required>
        </div>
        <div class="form-group">
            <label>Status Pembayaran</label>
            <input class="form-control" name="status_bayar"  required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        <?php echo form_close() ?>
        </div>
    </div>
</div>