<div class="home">
  <div class="home_slider_container">
          <!-- Home Slider -->
    <div class="owl-carousel owl-theme home_slider">
            <!-- Home Slider Item -->
      <div class="owl-item">
        <div class="home_slider_background" style="background-image: url(<?= base_url()?>template/front_end/images/01.png)"></div>
          <div class="home_slider_content">
            <div class="container">
              <div class="row">
                <div class="col text-center">
                  <div class="home_slider_title" style="color:#eaeaea ;text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5); ">Yayasan Pendidikan dan Dakwah Nurul Wathan</div>
                  <div class="home_slider_subtitle" style=" color:white; text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);">Terwujudnya lembaga pendidikan yang Islami, Favorit, Unggul, serta menjadi kebanggaan dan panutan umat Islam</div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- Home Slider Item -->
      <div class="owl-item">
        <div class="home_slider_background" style="background-image: url(<?= base_url()?>template/front_end/images/02.png)"></div>
          <div class="home_slider_content">
            <div class="container">
              <div class="row">
                <div class="col text-center">
                  <div class="home_slider_title" style="color:#eaeaea ;text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5); ">Yayasan Pendidikan dan Dakwah Nurul Wathan</div>
                  <div class="home_slider_subtitle" style=" color:white; text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);">Mewujudkan peserta didik yang peduli dan terbiasa terhadap perilaku hidup bersih.</div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- Home Slider Item -->
      <div class="owl-item">
        <div class="home_slider_background" style="background-image: url(<?= base_url()?>template/front_end/images/03.png)"></div>
          <div class="home_slider_content">
            <div class="container">
              <div class="row">
                <div class="col text-center">
                  <div class="home_slider_title" style="color:#eaeaea ;text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5); ">Yayasan Pendidikan dan Dakwah Nurul Wathan</div>
                  <div class="home_slider_subtitle" style=" color:white; text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);">Mewujudkan peserta didik yang memiliki budi pekerti luhur sebagai insan yang beriman dan bertakwa kepada allah SWT.</div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
    <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>
  <div class="features">
    <div class="container">
      <div class="row features_row">
        <div class="col-md-8">
              <h2>Welcome</h2>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit amet accusamus dolorem commodi maxime, illum tempora adipisci sunt alias magni ut perspiciatis rem temporibus quia officiis laudantium odit ipsam minima
                possimus exercitationem earum iusto. Sint id eius dolorem natus fuga quisquam tempore hic corporis consequatur! Eius, quisquam! Perferendis, eligendi animi.
              </p>
        </div>
        <div class="col-md-4">
          <div class="about1_img">
            <img style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5); " src="<?= base_url()?>template/front_end/images/welcome.png" class="rounded-circle" alt="#" />
              <h3 class="text-center">Kepala Yayasan</h3>
              <p>H. Dudun Abdullah</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team -->
<div class="team">
  <div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url()?>template/front_end/images/team_background.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title_container text-center">
            <h2 class="section_title">Guru</h2>
          </div>
        </div>
      </div>
      <div class="row team_row">
      <!-- Team Item -->
      <?php foreach ($guru as $key => $value) { ?>
        <div class="col-lg-3 col-md-6 team_col">
          <div class="team_item">
            <div class="team_image"><img src="<?= base_url('foto_guru/'.$value->foto_guru)?>" alt="" /></div>
              <div class="team_body">
                <div class="team_title"><a href="<?= base_url('home/guru')?>"><?= $value->nama_guru?></a></div>
                <div class="team_subtitle"><?= $value->tempat_lahir ?></div>
                    <div class="team_subtitle"><?= $value->mapel_guru ?></div>
                    <div class="social_list">
                      <ul>
                        <li>
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                      </ul>
                    </div>
              </div>
          </div>
        </div>
        <?php } ?>
      
      

      </div>
    </div>
</div>

            <!-- Features -->
        <div class="features courses">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section_title_container text-center">
                <h2 class="section_title">Pengumuman</h2>
              </div>
            </div>
          </div>
          <div class="row features_row">
            <!-- Features Item -->
            <?php foreach ($pengumuman as $key => $value) { ?>
            <div class="col-lg-3 feature_col">
              <div class="feature text-center trans_400">
                <div class="feature_icon"><img src="<?= base_url()?>template/front_end/images/icon_pengumuman.png" /></div>
                <h3 class="feature_title"> <a href="<?= base_url('home/pengumuman')?>"><?= substr(strip_tags($value->judul_pengumuman),0,20).'.....'?></a> </h3>
                <div class="feature_text"><p><?= substr(strip_tags($value->isi_pengumuman),0,100).'.....'?></p></div>
              </div>
            </div>
            <?php }?>

          </div>
        </div>
      </div>

      <!-- Popular Courses -->

      <div class="courses">
        <div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url()?>template/front_end/images/courses_background.jpg" data-speed="0.8"></div>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section_title_container text-center">
                <h2 class="section_title">Berita Terbaru</h2>
              </div>
            </div>
          </div>
          <div class="row courses_row">
            <!-- Course -->
            <?php foreach ($berita as $key => $value) { ?>
            <div class="col-lg-4 course_col">
              <div class="course">
                <div class="course_image"><img src="<?= base_url('gambar_berita/'.$value->gambar_berita)?>" height="220px" width="100%"/></div>
                <div class="course_body">
                  <h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita)?>"><?= substr(strip_tags($value->judul_berita),0,25)?>.....</a></h3>
                  <div class="course_teacher">Di Posting Oleh : <?= $value->nama_user?></div>
                  <div class="course_text">
                  <p><?= substr(strip_tags($value->isi_berita),0,100).'.............'?></p>
                  </div>
                </div>
                <div class="course_footer">
                  <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                    <div class="course_info">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
												<span><?= $value->tgl_berita?></span>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
              <?php } ?>
          </div>
          <div class="row">
            <div class="col">
              <div class="courses_button trans_200"><a href="<?= base_url('home/berita')?>">Baca Selengkapnya</a></div>
            </div>
          </div>
        </div>
      </div>



      <!-- Events -->

      <div class="events">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section_title_container text-center">
                <h2 class="section_title">Kegiatan</h2>
              </div>
            </div>
          </div>
          <div class="row events_row">
            <!-- Event -->
            <?php foreach ($kegiatan as $key => $value) { ?>
            <div class="col-lg-4 event_col">
              <div class="event event_left">
                <div class="event_image"><img src="<?= base_url('foto_kegiatan/'.$value->foto_kegiatan)?>" alt="" /></div>
                <div class="event_body d-flex flex-row align-items-start justify-content-start">
                  <div class="event_content">
                    <div class="event_title"><a href="<?= base_url('home/detail_kegiatan/'.$value->slug_kegiatan)?>"><?= substr(strip_tags($value->nama_kegiatan),0,25)?>.....</a></div>
                    <div class="event_info_container">
                      <div class="event_info">Di Posting Oleh :<span><?= $value->nama_user?></span></div>
                      <div class="event_info"><i class="fa fa-calendar" aria-hidden="true"></i><span><?= $value->tanggal?></div>
                      <div class="event_text">
                      <p><?= substr(strip_tags($value->isi_kegiatan),0,100)?>.....</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
          <div class="row">
            <div class="col">
              <div class="courses_button trans_200"><a href="<?= base_url('home/kegiatan')?>">Lihat Kegiatan</a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="about-us">
        <div class="container">
          <div class="row">
            <!-- Accordion Start -->
            <div class="accordion col-md-6">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">Jadwal</h4>
                    </div>
                  </a>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <p>Pendaftaran Mulai Tnggal 23 juli 2021</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">Persyaratan</h4>
                    </div>
                  </a>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <p>Fotocopy KK</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">Biaya</h4>
                    </div>
                  </a>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <p>Biaya Rp. 1.000.000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Accordion End -->

            <div class="col-md-6 wow fadeIn">
              <div class="heading-block">
                <h2>Informasi Pendaftaran</h2>
              </div>
              <p>Pendaftaran Mulai Tanggal 23 juli 2021</p>
              <p>Fotocopy KK</p>
              <p>Biaya Rp. 1.000.000</p>
            </div>
          </div>
        </div>
      </div>