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
            .btn-primary {
    background-color: #42A5F5 !important;
    border-color: #42A5F5 !important
}

.cursor-pointer {
    cursor: pointer;
    color: #42A5F5
}

.pic {
    margin-top: 15px;
    margin-bottom: 15px;
}

.card-block {
    width: 200px;
    border: 1px solid lightgrey;
    border-radius: 5px !important;
    background-color: #FAFAFA;
    margin-bottom: 30px
}

.card-body.show {
    display: block
}

.card {
    padding-bottom: 20px;
    box-shadow: 2px 2px 6px 0px rgb(200, 167, 216)
}

.radio {
    display: inline-block;
    border-radius: 0;
    box-sizing: border-box;
    cursor: pointer;
    color: #000;
    font-weight: 500;
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    filter: grayscale(100%)
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1)
}

.radio.selected {
    box-shadow: 0px 8px 16px 0px #EEEEEE;
    -webkit-filter: grayscale(0%);
    -moz-filter: grayscale(0%);
    -o-filter: grayscale(0%);
    -ms-filter: grayscale(0%);
    filter: grayscale(0%)
}

.selected {
    background-color: #E0F2F1
}

.a {
    justify-content: center !important
}

.btn {
    border-radius: 0px
}

.btn,
.btn:focus,
.btn:active {
    outline: none !important;
    box-shadow: none !important
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
        <div class="probootstrap-inner probootstrap-animate px-0" data-animate-effect="fadeIn">
          <h2 class="heading mb-4 ml-3">Pilih Kursi</h2>
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
                                <div class="radio-group row justify-content-between px-3 text-center a">
                                    <div class="row">
                                        <div class="col-auto mr-sm-2 mx-1 card-block py-0 text-center radio" style="width:120px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic"> 1</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-2 mx-1 card-block py-0 text-center "style="width:120px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic">Supir</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="radio-group row justify-content-between px-3 text-center a">
                                    <div class="row">
                                        <div class="col-auto mr-sm-2 mx-1 card-block py-0 text-center radio " style="width:100px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic"> 2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-2 mx-1 card-block py-0 text-center radio "style="width:100px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic">3</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-2 mx-1 card-block py-0 text-center radio "style="width:100px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic">4</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="radio-group row justify-content-between px-3 text-center a">
                                    <div class="row">
                                        <div class="col-auto mr-sm-2 mx-1 card-block py-0 text-center radio selected" style="width:100px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic">5</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-2 mx-1 card-block py-0 text-center radio "style="width:100px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic">6</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-2 mx-1 card-block py-0 text-center radio "style="width:100px;">
                                            <div class="flex-row">
                                                <div class="col">
                                                    <div class="pic">7</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
          <p><a href="#" class="btn btn-primary">Pesan Sekarang</a></p>
        </div>
      </div>
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