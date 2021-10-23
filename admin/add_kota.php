<?php include('header.php');?>
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
                <div class="container px-5">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable
                    </div>
                    <div class="card-body">
                    <form action="save_kota.php" method="POST"">
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="inputEmail4">Nama Kota</label>
                                <input type="text" class="form-control" id="nama_kota" name="nama_kota">
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
