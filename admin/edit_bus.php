<?php include('header.php');
$id = $_GET['id'];
$bus = "SELECT * from bus LEFT JOIN kota k1 on bus.dari = k1.id_kota LEFT JOIN kota k2 on bus.tujuan = k2.id_kota where id_bus = $id";
$sql_bus = mysqli_query($dbc,$bus);
$data_bus = mysqli_fetch_array($sql_bus);
?>
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
                    <form action="save_edit_bus.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group col-lg-4">
                                <label for="inputEmail4">Kendaraan</label>
                                <input type="text" class="form-control" id="kendaraan" value="<?php echo $data_bus['kendaraan']; ?>" name="kendaraan">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Plat Nomor</label>
                                <input type="text" class="form-control" value="<?php echo $data_bus['plat_nomor'];?>" name="plat_nomor" id="plat_nomor">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Jumlah Kursi</label>
                                <input type="number" class="form-control" value="<?php echo $data_bus['jumlah_kursi']; ?>" name="jumlah_kursi" id="jumlah_kursi">
                            </div>
                        </div>
                        <div class="form-row">
                            <?php 
                            $query = "SELECT * FROM kota";
                            $query2 = "SELECT * FROM kota";
                            $sql = mysqli_query($dbc,$query);
                            $sql2 = mysqli_query($dbc,$query2);
                            ?>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Dari</label>
                                <select name="dari" id="dari" class="form-select">
                                    <option value="<?php echo $data_bus['dari'];?>"><?php echo $data_bus[9]; ?></option>
                                <?php
                                while($data = mysqli_fetch_array($sql))
                                {
                                    echo "<option value='$data[id_kota]'>$data[nama_kota]</option>";
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Tujuan</label>
                                <select name="tujuan" id="tujuan" class="form-select">
                                    <option value="<?php echo $data_bus['tujuan']; ?>"><?php echo $data_bus['nama_kota']; ?></option>
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
                                <input type="number" class="form-control" value="<?php echo $data_bus['harga']; ?>" name="harga" id="harga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Foto Bus</label>
                                <input type="file" class="form-control" name="foto_bus" id="foto_bus">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </main>
<?php include('footer.php');?>
