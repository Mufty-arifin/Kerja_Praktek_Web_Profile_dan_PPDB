<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        Tambah Data
        </div>
        <div class="panel-body">
        <?php 
            if (isset($error_upload)){
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
            echo form_open_multipart('guru/tambah');
        ?>

        <div class="form-group">
            <label>NIP</label>
            <input class="form-control" name="nip_guru" placeholder="NIP" required>
        </div>
        <div class="form-group">
            <label>Nama Guru</label>
            <input class="form-control" name="nama_guru" placeholder="Nama Guru" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <label class="radio-inline">
                <input type="radio" name="jk_guru"  value="Laki-laki" checked required>Laki-laki
            </label>
            <label class="radio-inline">
                <input type="radio" name="jk_guru"  value="Perempuan" required>Perempuan
            </label>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" id="tanggal" name="tgl_lahir" placeholder="Tanggal Lahir">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Mata Pelajaran</label>
            <input class="form-control" name="mapel_guru" placeholder="Mata Pelajaran">
        </div>
        <div class="form-group">
        <label>Foto Guru</label>
            <input type="file" name="foto_guru">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        <?php echo form_close() ?>
        </div>
    </div>
</div>