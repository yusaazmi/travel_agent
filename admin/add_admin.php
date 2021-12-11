<?php include('header.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="d-flex bd-highlight mb-3">
                    <div class="mr-auto p-2 bd-highlight">
                        <h1 class="">Data Admin</h1>
                    </div>
                    <div class="p-2 bd-highlight">
                        <a href="add_bus.php" class="btn btn-primary"><i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="container px-5">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable
                    </div>
                    <div class="card-body">
                    <form action="save_admin.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="inputEmail4">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Nomor HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <!-- <label for="">Alamat</label> -->
                                <textarea name="alamat" id="alamat" cols="84" rows="5" placeholder="Alamat"></textarea>
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
