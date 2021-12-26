<?php 
include('connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Mahesa Putra Travel</title>
		<meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/select2.css">
    <link rel="icon" href="assets/images/logo.png">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato:400,500,600,700&display=swap');
.wrapper{
  display: inline-flex;
  height: 100px;
  width: 400px;
  align-items: center;
  justify-content: space-evenly;
  padding: 20px 15px;
}
.wrapper .option{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  margin: 0 10px;
  border-radius: 5px;
  cursor: pointer;
  padding: 0 10px;
  border: 2px solid lightgrey;
  transition: all 0.3s ease;
}
.wrapper .option .dot{
  height: 20px;
  width: 20px;
  background: #d9d9d9;
  border-radius: 50%;
  position: relative;
}
.wrapper .option .dot::before{
  position: absolute;
  content: "";
  top: 4px;
  left: 4px;
  width: 12px;
  height: 12px;
  background: #0069d9;
  border-radius: 50%;
  opacity: 0;
  transform: scale(1.5);
  transition: all 0.3s ease;
}
input[type="radio"]{
  display: none;
}
#option-1:checked:checked ~ .option-1,
#option-2:checked:checked ~ .option-2,
#option-3:checked:checked ~ .option-3,
#option-4:checked:checked ~ .option-4,
#option-5:checked:checked ~ .option-5,
#option-6:checked:checked ~ .option-6,
#option-7:checked:checked ~ .option-7,
#option-8:checked:checked ~ .option-8
{
  border-color: #0069d9;
  background: #0069d9;
}
#option-1:checked:checked ~ .option-1 .dot,
#option-2:checked:checked ~ .option-2 .dot,
#option-3:checked:checked ~ .option-3 .dot,
#option-4:checked:checked ~ .option-4 .dot,
#option-5:checked:checked ~ .option-5 .dot,
#option-6:checked:checked ~ .option-6 .dot,
#option-7:checked:checked ~ .option-7 .dot,
#option-8:checked:checked ~ .option-8 .dot
{
  background: #fff;
}
#option-1:checked:checked ~ .option-1 .dot::before,
#option-2:checked:checked ~ .option-2 .dot::before,
#option-3:checked:checked ~ .option-3 .dot::before,
#option-4:checked:checked ~ .option-4 .dot::before,
#option-5:checked:checked ~ .option-5 .dot::before,
#option-6:checked:checked ~ .option-6 .dot::before,
#option-7:checked:checked ~ .option-7 .dot::before,
#option-8:checked:checked ~ .option-8 .dot::before
{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 20px;
  color: #808080;
}
#option-1:checked:checked ~ .option-1 span,
#option-2:checked:checked ~ .option-2 span,
#option-3:checked:checked ~ .option-3 span,
#option-4:checked:checked ~ .option-4 span,
#option-5:checked:checked ~ .option-5 span,
#option-6:checked:checked ~ .option-6 span,
#option-7:checked:checked ~ .option-7 span,
#option-8:checked:checked ~ .option-8 span
{
  color: #fff;
}
        </style>
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">Places</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
            <?php
            if(!isset($_SESSION['username']))
            {
            ?>
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="jadwal_bus.php">Jadwal Bus</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="travel.php">Travel</a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pemesanan</a></li> -->
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <!-- Example single danger button -->
            <?php } 
            else{
            ?>
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="jadwal_bus.php">Jadwal Bus</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="travel.php">Travel</a></li> -->
                <!-- <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pemesanan</a></li> -->
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['username'];?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item" href="profile.php">Profil</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Log out</a>
                    </div>
                </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Travel With Us</h2>
            <p class="lead mb-5 probootstrap-animate">
  

            </p>
              <!-- <a href="https://themewagon.com/theme_tag/free/" target="_blank" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">More Templates Here</a>  -->
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    <?php
      $query = "SELECT * FROM bus WHERE id_bus = $_GET[id]";
      $sql = mysqli_query($dbc,$query);
      $data = mysqli_fetch_array($sql);
    ?>
    <section class="probootstrap-section-half d-md-flex" id="section-about">
      <div class="probootstrap-text">
        <form action="simpan_pemesanan.php" method="POST">
        <div class="probootstrap-inner probootstrap-animate px-0" data-animate-effect="fadeIn">
          <h2 class="heading mb-4 ml-3">Pilih Kursi</h2>
          <input type="hidden" name="id_bus" value="<?php echo $data['id_bus']; ?>">
          <input type="hidden" name="total_bayar" value="<?php echo $data['harga']; ?>">
          <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="card text-center justify-content-start shaodw-lg card-1 border-0 bg-white px-sm-2">
                            <div class="card-body show ">
                                <div class="row">
                                    <div class="col">
                                        <h5><b><?php echo $data['kendaraan']?></b></h5>
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <input type="radio" name="no_kursi" id="option-1" value="1" checked>
                                    <input type="radio" name="" id="option-2" disabled>
                                    <label for="option-1" class="option option-1">
                                        <span>1</span>
                                        </label>
                                    <label for="option-2" class="option option-2">
                                        <span>Supir</span>
                                    </label>
                                </div>
                                <div class="wrapper">
                                    <input type="radio" name="no_kursi" value="2" id="option-3" >
                                    <input type="radio" name="no_kursi" value="3" id="option-4">
                                    <input type="radio" name="no_kursi" value="4" id="option-5">
                                    <label for="option-3" class="option option-3">
                                        <span>2</span>
                                        </label>
                                    <label for="option-4" class="option option-4">
                                        <span>3</span>
                                    </label>
                                    <label for="option-5" class="option option-5">
                                        <span>4</span>
                                    </label>
                                </div>
                                <div class="wrapper">
                                    <input type="radio" name="no_kursi" value="5" id="option-6" >
                                    <input type="radio" name="no_kursi" value="6" id="option-7">
                                    <input type="radio" name="no_kursi" value="7" id="option-8">
                                    <label for="option-6" class="option option-6">
                                        <span>5</span>
                                        </label>
                                    <label for="option-7" class="option option-7">
                                        <span>6</span>
                                    </label>
                                    <label for="option-8" class="option option-8">
                                        <span>7</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInRight">
          <h2 class="heading mb-4">Customer Service</h2>
          <p><?php echo $data['deskripsi']?></p>
          <p><button type="submit" class="btn btn-primary">Pesan Sekarang</button></p>
        </div>
      </div>
      </form>
    </section>
    <!-- END section -->

    <footer class="probootstrap_section probootstrap-border-top">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://probootstrap.com/" target="_blank">ProBootstrap</a><small> (Don't remove credit link on this footer. See <a href="https://probootstrap.com/license/">license</a>)</small></p>
            <p class="probootstrap_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
        $('.radio-group .radio').click(function () {
        $('.selected .fa').removeClass('fa-check');
        $('.radio').removeClass('selected');
        $(this).addClass('selected');
        });
        });
    </script>
	</body>
</html>