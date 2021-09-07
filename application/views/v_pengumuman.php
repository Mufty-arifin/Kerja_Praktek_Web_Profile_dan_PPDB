<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Pengumuman</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
<section class="order_paper">
      <div class="container">
        <div class="row">
		
          <div class="col-md-12">
            <h2 class="order_paper-title">Pengumuman</h2>
          </div>
        </div>
        <div class="row">
		<?php foreach ($pengumuman as $key => $value) { ?>
        <div class="col-md-12">
		  	<div class="row">
                <div class="col-md-2">
					<img src="<?= base_url()?>template/front_end/images/p.png" alt="">
                </div>
                <div class="col-md-10">
					<div class="event-heading ml-auto">
              			<h3><?= $value->judul_pengumuman ?></h3>
              			<p><?= $value->isi_pengumuman ?></p>
            		</div>
                </div>
            </div>
            <hr class="event-underline">
        </div>
		  
		  
		  <?php }?>
          </div>
          
        </div>
      </div>
    </section>