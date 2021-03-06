<?php include('header.php');?>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Jadwal Keberangkatan</h2>
             
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="https://themewagon.com/theme_tag/free/" target="_blank" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">More Templates Here</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    <!-- <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Jadwal Keberangkatan</h2>
          </div>
        </div>
        <div class="row mb-4">
        <table class="table table-dark table-hover" style="color:black;">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Bus</th>
              <th scope="col">Dari</th>
              <th scope="col">Tujuan</th>
              <th scope="col">Harga/kursi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
          </tbody>
      </table>
        </div>
    </section> -->
    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Bus dan Travel</h2>
          </div>
        </div>
        <div class="row mb-4">
        <?php
        $query = "SELECT * FROM bus LEFT JOIN kota on bus.tujuan = kota.id_kota LEFT JOIN keberangkatan on bus.dari = keberangkatan.id_keberangkatan";
        $sql = mysqli_query($dbc,$query);
        while($data = mysqli_fetch_array($sql))
        {
        ?>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="pemesanan.php?id=<?php echo $data['id_bus'];?>" class="probootstrap-thumbnail">
              <img src="assets/bus/<?php echo $data['foto_bus'] ?>" alt="" style="width:255px;height:255px;" class="img-fluid">
              <div class="probootstrap-text">
                <h3><?php echo $data['kendaraan'];?></h3>
              </div>
              <div class="probootstrap-text">
                <p>Keberangkatan : <?php echo $data['nama_terminal'] ?></p>
                <p>Tujuan : <?php echo $data['nama_kota'] ?></p>
              </div>
            </a>
          </div>
        <?php } ?>
        </div>

        <div class="row justify-content-center probootstrap-animate">
          <div class="col-md-3"><a href="https://themewagon.com/theme_tag/free/" target="_blank" class="btn btn-primary">More Templates Here</a></div>
        </div>

      </div>
    </section>

    <!-- END section -->

<?php include('footer.php');?>