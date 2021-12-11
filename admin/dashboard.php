<?php include('header.php');
$query = "SELECT COUNT(id_bus) as total from bus";
$sql = mysqli_query($dbc,$query);
$count_bus = mysqli_fetch_array($sql);
$query1 = "SELECT COUNT(id_kota) as total from kota";
$sql1 = mysqli_query($dbc,$query1);
$count_kota = mysqli_fetch_array($sql1);
$query2 = "SELECT COUNT(id) as total from kontak";
$sql2 = mysqli_query($dbc,$query2);
$count_contact = mysqli_fetch_array($sql2);
$query5 = "SELECT COUNT(id_keberangkatan) as total from keberangkatan";
$sql5 = mysqli_query($dbc,$query5);
$count_keberangkatan = mysqli_fetch_array($sql5);
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-center text-white mb-4">
                                    <div class="card-body">
                                        <span style="">Bus</span>
                                        <br>
                                        <span>Total : <?php echo $count_bus['total']; ?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="bus.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-center text-white mb-4">
                                    <div class="card-body">
                                        <span>Kota Tujuan</span>
                                        <br>
                                        <span>Total : <?php echo $count_kota['total']; ?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kota.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-center text-white mb-4">
                                    <div class="card-body">
                                        <span>Keberangkatan</span>
                                        <br>
                                        <span>Total : <?php echo $count_keberangkatan['total']; ?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="contact.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-center text-white mb-4">
                                    <div class="card-body">
                                        <span>Kontak</span>
                                        <br>
                                        <span>Total : <?php echo $count_contact['total']; ?></span>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="contact.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </main>
<?php include('footer.php');?>
