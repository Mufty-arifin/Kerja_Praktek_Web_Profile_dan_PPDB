<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        Edit Data
        </div>
        <div class="panel-body">
        <?php
        echo validation_errors('<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
            
        if (isset($error_upload)){
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }
        echo form_open_multipart('guru/edit/'.$guru->id_guru);
        ?>

        <div class="form-group">
            <label>NIP</label>
            <input class="form-control" value="<?= $guru->nip_guru?>" name="nip_guru" placeholder="NIP" required>
        </div>
        <div class="form-group">
            <label>Nama Guru</label>
            <input class="form-control" value="<?= $guru->nama_guru?>" name="nama_guru" placeholder="Nama Guru" required>
        </div>
        <div class="form-group">
                <label>Jenis Kelamin</label>
                  <?php if ($guru->jk_guru == 'Laki-laki') : ?>
                      <label class="radio-inline"for="inlineRadio1"> 
                      <input type="radio" id="inlineRadio1" value="Laki-laki" name="jk_guru" checked>Laki-Laki 
                      </label>
                      <label  class="radio-inline" for="inlineRadio2"> 
                      <input type="radio" id="inlineRadio1" value="Perempuan" name="jk_guru">Perempuan 
                      </label>
                  <?php else : ?>          
                      <label class="radio-inline" for="inlineRadio1">
                      <input type="radio" id="inlineRadio1" value="Laki-laki" name="jk_guru">Laki-Laki 
                      </label>
                      <label class="radio-inline" for="inlineRadio2"> 
                      <input type="radio" id="inlineRadio1" value="Perempuan" name="jk_guru" checked>Perempuan
                      </label>
                  <?php endif; ?>
              </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" value="<?= $guru->tempat_lahir?>" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" value="<?= $guru->tgl_lahir?>" id="tanggal" name="tgl_lahir" placeholder="Tanggal Lahir">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Mata Pelajaran</label>
            <input class="form-control" value="<?= $guru->mapel_guru?>" name="mapel_guru" placeholder="Mata Pelajaran">
        </div>
        <div class="form-group">
        <label>Foto Guru</label>
        <br>
            <img src="<?= base_url('foto_guru/'.$guru->foto_guru) ?>" width="200px">
        </div>
        <div class="form-group">
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