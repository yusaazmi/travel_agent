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
                            <?php 
                            $query = "SELECT * FROM keberangkatan";
                            $query2 = "SELECT * FROM kota";
                            $sql = mysqli_query($dbc,$query);
                            $sql2 = mysqli_query($dbc,$query2);
                            ?>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Dari</label>
                                <select name="dari" id="dari" class="form-select">
                                    <option value="">Pilih Keberangkatan</option>
                                <?php
                                while($data = mysqli_fetch_array($sql))
                                {
                                    echo "<option value='$data[id_keberangkatan]'>$data[nama_terminal]</option>";
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Tujuan</label>
                                <select name="tujuan" id="tujuan" class="form-select">
                                    <option value="">Pilih kota tujuan</option>
                                <?php
                                    while($data2 = mysqli_fetch_array($sql2))
                                    {
                                    echo "<option value='$data2[id_kota]'>$data2[nama_kota]</option>";
                                    }
                                ?>
                                </select>
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
