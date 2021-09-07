<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        Edit Data Pengumuman
        </div>
        <div class="panel-body">
        <?php 
            if (isset($error_upload)){
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
            echo form_open_multipart('pengumuman/edit/'.$pengumuman->id_pengumuman);
        ?>

        <div class="form-group">
            <label>Judul pengumuman</label>
            <input class="form-control" value="<?= $pengumuman->judul_pengumuman?>" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
        </div>

        <div class="form-group">
            <label>Isi Pengumuman</label>
            <textarea class="form-control" name="isi_pengumuman" cols="30" rows="10"  required><?= $pengumuman->isi_pengumuman?></textarea>
        </div> 
       
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        <?php echo form_close() ?>
        </div>
    </div>
</div>