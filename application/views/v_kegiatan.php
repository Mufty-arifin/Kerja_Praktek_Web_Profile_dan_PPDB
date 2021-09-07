<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Kegiatan</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Kegiatan</h2>
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->
				<?php foreach ($kegiatan as $key => $value) { ?>
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><img src="<?= base_url('foto_kegiatan/'.$value->foto_kegiatan)?>" alt=""></div>
						<div class="about_item_title"><a href="<?= base_url('home/detail_kegiatan/'.$value->slug_kegiatan)?>"><?= substr(strip_tags($value->nama_kegiatan),0,25)?>.....</a></div>
						<div class="event_info">Di Post Oleh : <?= $value->nama_user?></div>
                      	<div class="event_info"><i class="fa fa-calendar" aria-hidden="true"></i><span><?= $value->tanggal?></div>
						<div class="about_item_text">
							<p><?= substr(strip_tags($value->isi_kegiatan),0,100)?>.....</p>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
			<div class="row pagination_row ">
							<div class="col">
								
									<?php 
										if (isset($paginasi)) {
											echo $paginasi;
										}
									?>
								
							</div>
						</div>
		</div>
	</div>