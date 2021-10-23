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
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kendaraan</th>
                                        <th>Dari</th>
                                        <th>Tujuan</th>
                                        <th>Jumlah Kursi</th>
                                        <th>Harga Per Kursi</th>
                                        <th>Gambar Bus</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $query = "SELECT * FROM bus LEFT JOIN kota k1 on bus.dari = k1.id_kota LEFT JOIN kota k2 on bus.tujuan = k2.id_kota";
                                    $sql = mysqli_query($dbc,$query);
                                    while($data = mysqli_fetch_array($sql))
                                    {
                                        // var_dump($data);
                                    ?>
                                    <tr>
                                        <td><?php echo $data['kendaraan']; ?></td>
                                        <td><?php echo $data[9]; ?></td>
                                        <td><?php echo $data['nama_kota']; ?></td>
                                        <td><?php echo $data['jumlah_kursi']; ?></td>
                                        <td>Rp.<?php echo number_format($data['harga']); ?></td>
                                        <!-- <td><img style="width:100px;height:100px;" src="../assets/bus/<?php echo $data['foto_bus']; ?>" alt=""></td> -->
                                        <td><a href="#" onclick="window.open('../assets/bus/<?php echo $data['foto_bus']; ?>')"><?php echo $data['foto_bus']; ?></a></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6 pr-1">
                                                    <!-- <button class="btn btn-success">Edit</button> -->
                                                    <a href="edit_bus.php?id=<?php echo $data['id_bus']; ?>" class="btn btn-success">Edit</a>
                                                </div>
                                                <div class="col-6 pl-1">
                                                    <!-- <button class="btn btn-danger">Delete</button> -->
                                                    <a href="delete_bus.php?id=<?php echo $data['id_bus']; ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php include('footer.php');?>
