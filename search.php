<?php include('header.php');



?>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Jadwal Keberangkatan</h2>
             
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <!-- <a href="https://themewagon.com/theme_tag/free/" target="_blank" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">More Templates Here</a>  -->
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Bus dan Travel</h2>
          </div>
        </div>
        <?php
        $keberangkatan = $_POST['dari'];
        $kota = $_POST['tujuan'];
        $q1 = "SELECT * FROM keberangkatan where id_keberangkatan = $keberangkatan";
        $q2 = "SELECT * FROM kota where id_kota = $kota";
        $sql2 = mysqli_query($dbc,$q1);
        $sql3 = mysqli_query($dbc,$q2);
        $keberangkatan1 = mysqli_fetch_object($sql2);
        $kota2 = mysqli_fetch_object($sql3);
        
        echo "<h4>Menampilkan pencarian ".$keberangkatan1->nama_terminal." ke-".$kota2->nama_kota."</h4>";
        ?>
        <div class="row mb-4">
        <?php
        // $query = "SELECT * FROM bus,keberangkatan,kota WHERE bus.dari = $keberangkatan AND bus.kota = $kota";
        $query1 = "SELECT * FROM bus LEFT JOIN keberangkatan on bus.dari = keberangkatan.id_keberangkatan LEFT JOIN kota on bus.tujuan = kota.id_kota WHERE bus.dari = $keberangkatan AND bus.tujuan = $kota";
        $sql = mysqli_query($dbc,$query1);
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

        <!-- <div class="row justify-content-center probootstrap-animate">
          <div class="col-md-3"><a href="https://themewagon.com/theme_tag/free/" target="_blank" class="btn btn-primary">More Templates Here</a></div>
        </div> -->

      </div>
    </section>

    <!-- END section -->

<?php include('footer.php');?>