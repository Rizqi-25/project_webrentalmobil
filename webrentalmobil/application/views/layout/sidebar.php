 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="<?php echo base_url('/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php
                                if($this->session->has_userdata("USERNAME")){
                                    echo  $this->session->userdata("USERNAME");
                                    echo " @ ". $this->session->userdata("ROLE");

                                }
                            ?>  
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <?php if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url("index.php/mahasiswa") ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-user-graduate"></i>
                                <p>
                                    Kelola Mobil
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url("index.php/dosen") ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-chalkboard-user"></i>
                                <p>
                                    Kelola Sewa
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="btn btn-success" href="<?= (base_url() . 'index.php/login/registrasi'); ?>" role="button">REGISTER ADMIN</a>
                        </li> -->
                        <br>
                        <li class="nav-item">
                            <a class="btn btn-danger" href="<?= (base_url() . 'index.php/login/logout'); ?>" role="button">LOGOUT</a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>