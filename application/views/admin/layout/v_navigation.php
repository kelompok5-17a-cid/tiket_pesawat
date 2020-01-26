    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li class="sidebar-search">
                                    <div class="input-group custom-search-form">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </li>
                                <li>
                                    <a href="<?= base_url('admin')?>"><i class="fa fa-home fa-fw"></i> Beranda</a>

                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i> Konsumen<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?= base_url('konsumen/add/') ?>">Data Konsumen</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('konsumen') ?>">Lihat Data Konsumen</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                <!-- </li>
                                <li>
                                    <a href="<?= base_url('admin') ?>"><i class="fa fa-table fa-fw"></i> Tables</a>
                                </li>
                                <li> -->
                                    <!-- <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a> -->
                                
                                <li>
                                    <a href="#"><i class="fa fa-table fa-fw"></i> Tujuan<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?= base_url('tujuan/add/') ?>">Data Tujuan</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('tujuan') ?>">Lihat Data Tujuan</a>
                                        </li>
                                        
                                    </ul>
                                    <li>
                                    <a href="#"><i class="fa fa-ticket"></i> Tiket<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="panels-wells.html">Data Tiket</a>
                                        </li>
                                        <li>
                                            <a href="buttons.html">Lihat Data Tiket</a>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-money"></i> Pembayaran<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#">Data Pembayaran</a>
                                        </li>
                                        <li>
                                            <a href="#">Lihat Data Pembayaran</a>
                                        </li>
                                        
                                            </ul>


                                            <!-- <a href="#">Third Level <span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                            </ul> -->
                                            <!-- /.nav-third-level -->
                                        
                                    
                                    <!-- /.nav-second-level -->
                                </li>
                                <li class="active">
                                    <a href="<?= base_url('login/logout')?>"><i class="fa fa-sign-out"></i> Logout</a>
                               <!--      <ul class="nav nav-second-level">
                                        <li>
                                            <a class="active" href="blank.html">Data Pembayaran</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Lihat Data Pembayaran</a>
                                        </li>
                                    </ul>
                                     /.nav-second-level -->
                                </li>
                            </ul>
                            </li>
                               
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
                                <h1 class="page-header"><?= $title2 ?></h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>