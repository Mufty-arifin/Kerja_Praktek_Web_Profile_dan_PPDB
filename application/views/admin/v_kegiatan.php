<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href='<?= base_url('kegiatan/tambah')?>' class="btn btn-primary btn-sm">Tambah Kegiatan</a>
        </div>
        <div class="panel-body">
        <?php 
            if ($this->session->flashdata('pesan')){
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
        ?>
            <div  class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Slug Kegiatan</th>
                        <th>Tanggal Posting</th>
                        <th>Nama User</th>  
                        <th>Foto Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($kegiatan as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nama_kegiatan?></td>
                        <td><?= $value->slug_kegiatan?></td>
                        <td><?= $value->tanggal?></td>
                        <td><?= $value->nama_user?></td>
                        <td><img src="<?= base_url('foto_kegiatan/'.$value->foto_kegiatan) ?>" width="69px"></td>
                        <td>
                            <a href="<?= base_url('kegiatan/edit/'.$value->id_kegiatan)?>" class="btn btn-xs btn-success">Edit</a>
                            <a href="<?= base_url('kegiatan/hapus/'.$value->id_kegiatan)?>" onclick="return confirm('Apakah Data Akan di Hapus...?')" class="btn btn-xs btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>