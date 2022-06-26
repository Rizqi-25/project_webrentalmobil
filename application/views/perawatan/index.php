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
                <h3 class="card-title">Data Perawatan Mobil Rental</h3>

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
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NOPOL</th>
                            <th>MERK</th>
                            <th>PRODUK</th>
                            <th>JENIS PERAWATAN</th>
                            <th>TANGGAL PERAWATAN</th>
                            <th>BIAYA PERAWATAN</th>
                            <th>KM MOBIL</th>
                            <th>DESKRIPSI PERAWATAN</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_perawatan as $obj) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $obj->nopol ?></td>
                                <td><?= $obj->merk ?></td>
                                <td><?= $obj->produk ?></td>
                                <td><?= $obj->jenis_perwatan ?></td>
                                <td><?= $obj->tanggal   ?></td>
                                <td><?= $obj->biaya_perawatan?></td>
                                <td><?= $obj-> km_mobil ?></td>
                                <td ><?= $obj->deskripsi ?> </td>
                                <td style="width: 25%">
                                <a class="btn btn-warning" href="<?= (base_url() . 'index.php/perawatan/do_perawatan?id='); ?><?= $obj->nopol ?>" >Lakukan Perawatan</a>
                                    <!-- UNTUK LOGIC ROLE -->
                                    <a class="btn btn-success" href="<?= (base_url() . 'index.php/perawatan/edit?id='); ?><?= $obj->nopol ?>">Edit</a>
                                    <a class="btn btn-danger" href="<?= (base_url() . 'index.php/perawatan/delete?id='); ?><?= $obj->nopol ?>" onclick="if(!confirm('Anda Yakin Hapus Daftar Perawatan Mobil dengan NOPOL <?= $obj->nopol ?>?')) {return false}">Delete</a>
                                    <!-- UNTUK LOGIC ROLE -->
                                </td>
                            </tr>
                        <?php
                            $nomor++;
                        } ?>
                    </tbody>
                </table>
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