<?php include 'header.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="mr-auto p-2 bd-highlight">
                                <h1 class="">Data Kota</h1>
                            </div>
                            <div class="p-2 bd-highlight">
                                <a href="add_kota.php" class="btn btn-primary"><i class="fas fa-plus-square"></i></a>
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
                                    <?php
                                        $query = "SELECT * FROM kota";
                                        $sql = mysqli_query($dbc,$query);
                                        $i = 1;
                                    ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                while($data = mysqli_fetch_array($sql))
                                                {
                                                echo "<tr>";
                                                    echo "<td>".$i."</td>";
                                                    echo "<td>".$data['nama_kota']."</td>";
                                                echo "</tr>";
                                                $i++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include 'footer.php';?>