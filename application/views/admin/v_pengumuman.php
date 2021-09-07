<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href='<?= base_url('pengumuman/tambah')?>' class="btn btn-primary btn-sm"> Tambah Pengumuman</a>
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
                        <th>Judul Pengumuman</th>
                        <th>Isi Pengumuman</th>
                        <th>Tanggal Pengumuman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($pengumuman as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_pengumuman?></td>
                        <td><?= $value->isi_pengumuman?></td>
                        <td><?= $value->tgl_pengumuman?></td>
                        <td>
                            <a href="<?= base_url('pengumuman/edit/'.$value->id_pengumuman)?>"  class="btn btn-xs btn-success">Edit</a>
                            <a href="<?= base_url('pengumuman/hapus/'.$value->id_pengumuman)?>" onclick="return confirm('Apakah Data Akan di Hapus...?')" class="btn btn-xs btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>