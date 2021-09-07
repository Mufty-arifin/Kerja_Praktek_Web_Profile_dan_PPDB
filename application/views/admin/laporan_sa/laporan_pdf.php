<!DOCTYPE html>
<html lang="en"><head>
<link rel="stylesheet" href="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
      .line-title{
            border:0;
            border-style: inset;
            border-top: 1px solid #000;
            
      }
</style>
  <title>Laporan</title>
</head><body>
      <img src="">
      <table style="width: 100%;">
      <tr>
            <td align="center">
                  <span style="line-height: 1.6; font-weight: bold;">
                  YYASAN PENDIDIKAN DAN DAKWAH NURUL WATHAN
                  <br> <small><center><i class="fa fa-home"> DS. Bojong, Kec. Karang Tengah Kab. Cianjur</i></center></small>
            </td>
      </tr>
</table>
      <hr class="line-title">
      <p align="center">
    LAPORAN Pembayaran Sekolah Agama <br>
  </p>
  <table class="table table-bordered">
<table class="table table-bordered">
      <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Total Bayar</th>
            <th>Tanggal Bayar</th>
            <th>Status Bayar</th>
            
      </tr>
      <?php $no = 1;
                  foreach($row as $key => $data) { ?>

                  <tr>
                        <td><?=$no++?></td>
				<td><?=$data->nik?></td>
                        <td><?=$data->nama?></td>
                        <td><?=$data->total_bayar?></td>
                        <td><?=$data->tgl_pembayaran?></td>
                        <td><?=$data->status_bayar?></td>
                        </td>
                  </tr>
                  <?php 
                  } ?>
</table>
</body></html>
