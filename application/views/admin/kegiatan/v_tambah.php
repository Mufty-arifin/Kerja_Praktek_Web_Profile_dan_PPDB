<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        Tambah Kegiatan
        </div>
        <div class="panel-body">
        <?php 
            if (isset($error_upload)){
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
            echo form_open_multipart('kegiatan/tambah');
        ?>

        <div class="form-group">
            <label>Nama Kegiatan</label>
            <input class="form-control" name="nama_kegiatan" placeholder="nama Kegiatan" required>
        </div>

        <div class="form-group">
            <label>Isi Kegiatan</label>
            <textarea name="isi_kegiatan" id="editor" required></textarea>
        </div> 
        <div class="form-group">
                    <label>Foto Kegiatan</label>
                    <input type="file" name="foto_kegiatan" required>
            </div>
            
              
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        <?php echo form_close() ?>
        </div>
    </div>
</div>