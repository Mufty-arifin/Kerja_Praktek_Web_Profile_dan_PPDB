<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge"><?php echo $total_daftartk;?></div>
                      <div>Pendaftar TK</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-money fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">0</div>
                      <div>Pembayaran TK</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge"><?php echo $total_daftarsa;?></div>
                      <div>Pendaftar SA</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-money fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">0</div>
                      <div>Pembayaran SA</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-7">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h4>Berita Populer</h4>
            </div>
            <div class="panel-body">
            <table class="table">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Judul Berita</th>
                                                    <th>Tanggal Berita</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  foreach ($berita as $key => $value) { ?>
                                                <tr>
                                                    <td><?= substr(strip_tags($value->judul_berita),0,50)?>.....</td>
                                                    <td><?= $value->tgl_berita?></td>
                                                </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
            </div>
            <div class="panel-footer">
            </div>
        </div>
    </div>
    
    <div class="col-lg-5">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h4>Pengumuman</h4>
            </div>
            <div class="panel-body">
            <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Judul Pengumuman</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                            
                                            <?php foreach ($pengumuman as $key => $value) { ?>
                                                <tr>
                                                
                                                <td><?= substr(strip_tags($value->judul_pengumuman),0,30).'.....'?></td>
                                                <td><?= $value->tgl_pengumuman?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            
                                        </table>
            </div>
            <div class="panel-footer">
            </div>
        </div>
    </div>
</div>
