<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href='<?= base_url('guru/tambah')?>' class="btn btn-primary btn-sm"> Tambah Guru</a>
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
                        <th>NIP</th>
                        <th>Nama Guru</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Mata Pelajaran</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($guru as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nip_guru?></td>
                        <td><?= $value->nama_guru?></td>
                        <td><?= $value->jk_guru?></td>
                        <td><?= $value->tempat_lahir?></td>
                        <td><?= $value->tgl_lahir?></td>
                        <td><?= $value->mapel_guru?></td>
                        <td><img src="<?= base_url('foto_guru/'.$value->foto_guru) ?>" width="69px"></td>
                        <td>
                            <a href="<?= base_url('guru/edit/'.$value->id_guru)?>" class="btn btn-xs btn-success">Edit</a>
                            <a href="<?= base_url('guru/delete/'.$value->id_guru)?>" onclick="return confirm('Apakah Data Akan di Hapus...?')" class="btn btn-xs btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>