
        <!-- Header Content -->
        <div class="header_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                  <div class="logo_container">
                    <a href="<?= base_url()?>">
                      <div class="logo_text">YPD<span>NW</span></div>
                    </a>
                  </div>
                  <nav class="main_nav_contaner ml-auto">
                    <ul class="main_nav">
                      <li><a href="<?= base_url()?>">Home</a></li>
                      <li><a href="<?= base_url('home/visimisi')?>">Visi Misi</a></li>
                      <li><a href="<?= base_url('home/guru')?>">Guru</a></li>
                      <li><a href="<?= base_url('home/berita')?>">Berita</a></li>
                      <li><a href="<?= base_url('home/pengumuman')?>">Pengumuman</a></li>
                      <li><a href="<?= base_url('home/kegiatan')?>">Kegiatan</a></li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pendaftaran </a>
                        <div class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?= base_url('home/pendaftaran_tk')?>">Daftar Tk</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="<?= base_url('home/pendaftaran_sa')?>">Daftar Sekolah Agama</a>
                         
                        </div>
                      </li>
                    </ul>

                    <!-- Hamburger -->

                    <div class="hamburger menu_mm">
                      <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Header Search Panel -->
        <div class="header_search_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                  <form action="#" class="header_search_form">
                    <input type="search" class="search_input" placeholder="Search" required="required" />
                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
       <!-- Menu -->

       <div class="menu d-flex flex-column align-items-end text-right menu_mm trans_400">
        <div class="menu_close_container">
          <div class="menu_close">
            <div></div>
            <div></div>
          </div>
        </div>
        <nav class="menu_nav">
          <ul class="menu_mm">
            <li class="menu_mm"><a href="<?= base_url()?>">Home</a></li>
            <li class="menu_mm"><a href="<?= base_url('home/visimisi')?>">Visi Misi</a></li>
            <li class="menu_mm"><a href="<?= base_url('home/guru')?>">Guru</a></li>
            <li class="menu_mm"><a href="<?= base_url('home/berita')?>">Berita</a></li>
            <li class="menu_mm"><a href="<?= base_url('home/pengumuman')?>">Pengumuman</a></li>
            <li class="menu_mm"><a href="<?= base_url('home/kegiatan')?>">Kegiatan</li>
            <li class="hamburger-dropdown nav-item dropdown text-dark" >
              <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
              <ul class="dropdown-menu-right hamburger-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item menu_mm" href="<?= base_url('home/pendaftaran_tk')?>">Pendaftaran TK</a></li>
                <li><a class="dropdown-item menu_mm" href="<?= base_url('home/pendaftaran_sa')?>">Pendaftaran Sekolah Agama</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>