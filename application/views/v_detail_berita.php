<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
                            <li><a href="index.html">Berita</a></li>
							<li>Detail Berita</li>
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
						<div class="blog_title"><?= $berita->judul_berita?></div>
						<div class="blog_meta">
							<ul>
								<li>Post on <a href="#"><?= $berita->tgl_berita?></a></li>
								<li>By <a href="#"><?= $berita->nama_user?></a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="<?= base_url('gambar_berita/'.$berita->gambar_berita)?>" alt=""></div>
						<p><?= $berita->isi_berita?></p>
					</div>

				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

	

						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita Terbaru</div>
							<div class="sidebar_latest">
                            <?php foreach ($latest_berita as $key => $value) { ?>
								
								
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="<?= base_url('gambar_berita/'.$value->gambar_berita)?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita)?>"><?= $value->judul_berita?></a></div>
										<div class="latest_price"><?= $value->tgl_berita?></div>
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