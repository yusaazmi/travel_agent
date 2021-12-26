<?php include('header.php');?>
    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Cari tiket sekarang juga!</h2>
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="registration.php" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Daftar</a> 
            </p>
          </div> 
          <div class="col-md probootstrap-animate">
            <form action="search.php" method="POST" class="probootstrap-form">
              <div class="form-group">
                <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">Dari</label>

                      <label for="id_label_single" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" name="dari" id="id_label_single" style="width: 100%;">
                          <?php
                          $query = "SELECT * FROM keberangkatan";
                          $sql = mysqli_query($dbc,$query);
                          while($data = mysqli_fetch_array($sql))
                          {
                            echo "<option value='$data[id_keberangkatan]'>".$data['nama_terminal']."</option>";
                          }
                          ?>
                        </select>
                      </label>


                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">Tujuan</label>
                      <div class="probootstrap_select-wrap">
                        <label for="id_label_single2" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" name="tujuan" id="id_label_single2" style="width: 100%;">
                        <?php
                        $query2 = "SELECT * FROM kota";
                        $sql2 = mysqli_query($dbc,$query2);
                          while($data2 = mysqli_fetch_array($sql2))
                          {
                            echo "<option value='$data2[id_kota]'>".$data2['nama_kota']."</option>";
                          }
                        ?>
                        </select>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class="row mb-5">
                  <!-- <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-departure">Tanggal Berangkat</label>
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="date" id="probootstrap-date-departure" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-arrival">Arrival</label>
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="text" id="probootstrap-date-arrival" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- END row -->
                <div class="row">
                  <div class="col-md">
                    <input type="submit" value="Cari Tiket" class="btn btn-primary btn-block">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    
    </section>
    <!-- END section -->
    

   
    <!-- END section -->

<?php include ('footer.php');?>