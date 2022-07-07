<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rental Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Perawatan Mobil Rental</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="booking" class="section">
                    <div class="section-center">
                        <div class="container">
                            <div class="row">
                                <div class=" col-sm-6">
                                    <div class="booking-form">
                                        <?php
                                        $hidden = ['edit' => $mbledit->nopol];
                                        ?>
                                        <?php echo form_open('perawatan/save','', $hidden) ?>
                                        <div class="form-group">
                                            <span class="form-label">Treatment Date</span>
                                            <input class="form-control" type="date" required name="tgl_perawatan">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <span class="form-label">Cost</span>
                                                    <input class="form-control" type="text" placeholder="Cost" name="biaya">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <span class="form-label">KM Mobil</span>
                                                    <input class="form-control" type="text" placeholder="KM MOBIL" name="km_mobil" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <span class="form-label">Description</span>
                                                    <input class="form-control" type="text" placeholder="Desc" name="deskripsi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <span class="form-label">Mobil ID</span>
                                                    <input class="form-control" type="text" placeholder="mobil id" name="mobil_id" value="<?=$mbledit->mobil_id?>"> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <span class="form-label">Jenis Perawatan ID</span>
                                                    <input class="form-control" type="text" placeholder="jenis perawatan id" name="jns_perawatan_id">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn">
                                            <button type="submit" class=" btn-light">Do Treatment</button>
                                        </div>
                                        <?php echo form_close() ?>
                                    </div>
                                </div>
                                <div class=" col-sm-6">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <th>ID</th>
                                            <th>Jenis Perawatan</th>
                                        </thead>

                                        <tbody>
                                            <?php
                                            foreach ($jns_perawatan as $jp) {
                                            ?>
                                                <tr>
                                                    <td><?= $jp->id ?></td>
                                                    <td><?= $jp->nama ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>