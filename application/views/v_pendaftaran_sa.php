<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Pendaftaran Sekolah Agama</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
<div class="container">
<div class="card bg-light mb-3 mt-5">
  <div class="card-body">
	<h2 class="card-title">Pendafataran Sekolah Agama</h2>
    <h5 class="card-title"> Panduan Pendaftaran:</h5>
    <p class="card-text">1. Isi seluruh formulir yang ditampilkan kemudian periksa kembali, pastikan tidak ada data yang salah.</p>
	<p class="card-text">2.	Klik kirim, kemudian klik cetak faktur Pendaftaran.</p>
	<p class="card-text">3.	Untuk melakukan pembayaran silahkan bawa bukti pendaftaran dan persyaratan 'Fotocopy KK' ke sekolah.</p>
  </div>
</div>
</div>


<div class="container">
<div class="card mb-5">
  <div class="card-header bg-light">
     <h3>Form Pendaftaran</h3>
	 <p>* Data yang telah diinput tidak dapat diubah kembali, harap isi dengan teliti dan benar</p>
  </div>
  <div class="card-body">
 
  <form action="<?php echo site_url('pendaftaran_sa/simpandaftarsa') ?>" method="POST">


  		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >NIK*</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="NIK" name="nik" required>
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >Nama* </label>
			<div class="col-sm-10">
				<input type="text" class="form-control text-secondary" placeholder="Nama Lengkap" name="nama" required>
			</div>
  		</div>
		<div class="form-group row">
				<label class="col-sm-2 text-dark">Jenis Kelamin*</label>
			<div class="col-sm-10 text-dark">
			<label for="">Laki-laki</label>
        		<input type="radio" name="jk" value="laki-laki" checked required>
        		<label for="">Perempuan</label>
        		<input type="radio" name="jk" value="perempuan" required>
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >Tempat Lahir* </label>
			<div class="col-sm-10">
				<input type="text" class="form-control text-secondary" name="tempat_lahir" placeholder="Tempat Lahir" required>	
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >Tanggal Lahir* </label>
			<div class="col-sm-10">
				<input type="date" class="form-control text-secondary" name="tanggal_lahir" placeholder="Tanggal Lahir" required>	
			</div>
  		</div>
		  <div class="form-group row">
    			<label class="col-sm-2 text-dark  " >Jenjang Sekolah*</label>
			<div class="col-sm-10">
				<select name="jenjang_sekolah" class="form-control text-secondary" id="">
					<option>- - - - Jenjang Sekolah - - - -</option>
            		<option value="TK">TK</option>
            		<option value="SD">SD</option>
					<option value="SMP">SMP</option>
        		</select>
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >Jumlah Saudara* </label>
			<div class="col-sm-10">
			<input type="number" class="form-control text-secondary" name="jml_saudara" placeholder="Jumlah Saudara" required>	
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >Alamat Lengkap*</label>
			<div class="col-sm-10">
			<textarea class="form-control text-secondary" type="text" name="alamat" placeholder="Alamat" rows="3" required></textarea>
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark  " >Status Anak*</label>
			<div class="col-sm-10">
				<select name="status" class="form-control text-secondary" id="">
					<option>- - - - Status Anak - - - -</option>
            		<option value="Anak Kandung">Anak Kandung</option>
            		<option value="Anak Angkat">Anak Angkat</option>
        		</select>
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >Nama Ayah*</label>
			<div class="col-sm-10">
			<input type="text" class="form-control text-secondary" placeholder="Nama Ayah" name="nama_ayah" required>
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >Nama Ibu*</label>
			<div class="col-sm-10">
			<input type="text" class="form-control text-secondary" placeholder="Nama Ibu" name="nama_ibu" required>
			</div>
  		</div>
		<div class="form-group row">
    			<label class="col-sm-2 text-dark" >No HP*</label>
			<div class="col-sm-10">
			<input type="text" class="form-control text-secondary" placeholder="No WhatsApp Aktif" name="telepon" required>
			</div>
  		</div>
        <button type="submit" class="btn btn-primary ">Simpan</button>
    </form>
  </div>
</div>
</div>
