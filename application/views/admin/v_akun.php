<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           
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
                        <th>Nama</th>
                        <th>Username</th>

                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($akun as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nama_user?></td>
                        <td><?= $value->username?></td>
                        <td>
                            <a href="<?= base_url('akun/edit/'.$value->id_user)?>" class="btn btn-xs btn-success">Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>