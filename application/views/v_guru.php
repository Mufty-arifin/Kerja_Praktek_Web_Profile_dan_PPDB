<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Guru</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
<div class="team">
		<div class="container">
			<div class="row">
                <div class="col-lg-12">
                <div class="section_title_container text-center">
						<h2 class="section_title mb-5">Guru Kami</h2>
					</div>
                </div>
<?php foreach ($guru as $key => $value) { ?>

                <div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('foto_guru/'.$value->foto_guru) ?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#"><?= $value->nama_guru ?></a></div>
							<div class="team_subtitle"><?= $value->tempat_lahir ?></div>
                            <div class="team_subtitle"><?= $value->mapel_guru ?></div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
	            </div>
<?php }?>
            </div>
		</div>
	
</div>