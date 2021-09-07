<!-- /.navbar-top-links -->
<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><h3>Halaman Admin</h3></li>
                            <li>
                                <a href="<?= base_url('admin')?>"><i class="fa fa-dashboard fa-fw"></i>Beranda</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-info"></i>Kelola Informasi<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('berita')?>">Kelola Berita</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('guru')?>">Kelola Guru</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('pengumuman')?>">Kelola Pengumuman</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('kegiatan')?>">Kelola Kegiatan</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-money"></i> Kelola Pembayaran<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('pembayaran_tk')?>">Pembayaran TK</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('pembayaran_sa')?>">Pembayaran Sekolah Agama</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-book"></i> Kelola Laporan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('laporan_tk')?>">Laporan TK</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('laporan_sa')?>">Laporan Sekolah Agama</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('akun')?>"><i class="fa fa-table fa-fw"></i> Kelola Akun</a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('login/logout')?>"><i class="fa fa-sign-out"></i>Logout</a>
                                
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header"><?= $title2 ?></h2>
                        

                