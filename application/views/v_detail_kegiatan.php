<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
                            <li><a href="index.html">Kegiatan</a></li>
							<li>Detail kegiatan</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
<!-- Blog -->

<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?= $kegiatan->nama_kegiatan?></div>
						<div class="blog_meta">
							<ul>
								<li>Tanggal Posting : <a href="#"><?= $kegiatan->tanggal?></a></li>
								<li>Di Posting Oleh <a href="#"><?= $kegiatan->nama_user?></a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="<?= base_url('foto_kegiatan/'.$kegiatan->foto_kegiatan)?>" alt=""></div>
						<p><?= $kegiatan->isi_kegiatan?></p>
					</div>

				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

	

						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">kegiatan Terbaru</div>
							<div class="sidebar_latest">
                            <?php foreach ($latest_kegiatan as $key => $value) { ?>
								
								
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="<?= base_url('foto_kegiatan/'.$value->foto_kegiatan)?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="<?= base_url('home/detail_kegiatan/'.$value->slug_kegiatan)?>"><?= $value->nama_kegiatan?></a></div>
										<div class="latest_price"><?= $value->tanggal?></div>
									</div>
								</div>
							<?php }?>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>