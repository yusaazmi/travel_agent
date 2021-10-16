<?php include('header.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="d-flex bd-highlight mb-3">
                    <div class="mr-auto p-2 bd-highlight">
                        <h1 class="">Data Kendaraan</h1>
                    </div>
                    <div class="p-2 bd-highlight">
                        <a href="add_bus.php" class="btn btn-primary"><i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="container px-5">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                    <form action="save_bus.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="inputEmail4">Kendaraan</label>
                                <input type="text" class="form-control" id="kendaraan" name="kendaraan">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Plat Nomor</label>
                                <input type="text" class="form-control" name="plat_nomor" id="plat_nomor">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Jumlah Kursi</label>
                                <input type="number" class="form-control" name="jumlah_kursi" id="jumlah_kursi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Dari</label>
                                <input type="text" class="form-control" id="dari" name="dari">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Tujuan</label>
                                <input type="text" class="form-control" name="tujuan" id="tujuan">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" name="harga" id="harga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Foto Bus</label>
                                <input type="file" class="form-control" name="foto_bus" id="foto_bus">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </main>
<?php include('footer.php');?>
