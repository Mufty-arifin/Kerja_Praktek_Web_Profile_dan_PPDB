<!DOCTYPE html>
<html><head>
<title>Bukti Pembayaran Sekolah Agama</title>
<style>
.head_title h2, h5{
    text-align: center;
    margin-top: 5px;
}
.table {
  width: auto;
  margin-top: 30px;
  margin-bottom: 30px;
}
.table td{
    padding: 6px;
}
.footer_title  h4{
    text-align: center;
}
.footer_title  hr{
    color: black;

  width: 500px;
}

</style>
</head><body>
<div class="head_title" >
<h2 >YAYASAN PENDIDIKAN DAN DAKWAH NURUL WATHAN</h2>
<h5 >Jl. Halte Maleber No. 31 Rt 02 Rw 12 Bojong, Sabandar, Karangtengah</h5>
</div>

<hr>
<table class="table">
   
    <tr>
        <td >Nik  </td>
        <td>: <?=$nik?></td>
    </tr>
    <tr>
        <td>Nama  </td>
        <td>: <?=$nama?></td>
    </tr>
    <tr>
        <td>Tanggal Pembayaran  </td>
        <td>: <?=$tgl_pembayaran?></td>
    </tr>
    <tr>
        <td>Total Pembayaran  </td>
        <td>: <?=$total_bayar?></td>
    </tr>
    <tr>
        <td>Status Pembayaran  </td>
        <td>: <?=$status_bayar?></td>
    </tr>
</table>

<div class="footer_title">
<hr>
<h4>TERIMAKASIH TELAH MELAKUKAN PEMBAYARAN TK </h4>
<hr>
</div>
</div>

</body></html>