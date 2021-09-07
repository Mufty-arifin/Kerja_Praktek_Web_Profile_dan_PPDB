<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        Edit Akun
        </div>
        <div class="panel-body">
        <?php 
            if (isset($error_upload)){
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
            echo form_open_multipart('akun/edit/'.$akun->id_user);
        ?>

        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" value="<?= $akun->nama_user?>" name="nama_user"  required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" value="<?= $akun->username?>" name="username"  required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" value="<?= $akun->password?>" name="password"  required>
        </div>
       
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        <?php echo form_close() ?>
        </div>
    </div>
</div>