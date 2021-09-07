<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        <a href="<?= base_url('pembayaran_sa/bayar_sa')?>"  class="btn btn-xs btn-success">Bayar</a>
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
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Total bayar</th>
                        <th>Status Bayar</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($pembayaran_sa as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nik?></td>
                        <td><?= $value->nama?></td>
                        <td><?= $value->total_bayar?></td>
                        <td><?= $value->status_bayar?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>