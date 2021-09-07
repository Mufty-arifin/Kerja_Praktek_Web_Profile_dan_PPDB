<html>
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
            <form action="<?php echo site_url('laporan_sa/pdf');?>" method="get">
            <div class="row">
            <div class="col-sm-4">
            <label for="">Dari Tanggal</label>
            <input type="date" class="form-control text-secondary"  name="dari" required>
            </div>
            <div class="col-sm-4">
            <label for="">Sampai Tanggal</label>
            <input type="date" class="form-control  text-secondary"  name="sampai" required>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>

            </div>
            </form>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Total bayar</th>
                        <th>Tanggal Bayar</th>
                        <th>Status Bayar</th>
                        
                    </tr>
                </thead>
               
                <tbody>
                <?php $no=1; foreach ($laporan_sa as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nik?></td>
                        <td><?= $value->nama?></td>
                        <td><?= $value->total_bayar?></td>
                        <td><?= $value->tgl_pembayaran?></td>
                        <td><?= $value->status_bayar?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</html>