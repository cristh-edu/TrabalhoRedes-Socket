<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>shree</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end header inner -->
    </div>
  </header>



  <!-- about  -->
  <div id="about" class="about">
    <div class="container-fluid">
      <br>
      <div class="row">
        <?php
        $protocolo = $_POST['protocolo'];
        if ($protocolo === "SOL_TCP"){
          include 'cliente-tcp.php';
        }else{
          include 'cliente-udp.php';
        }
        ?>
      </div>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="about-box">
            <h2><?php echo $banco->time->nome; ?></h2>
            <div class="row">
              <ul class="col-xl-9 col-lg-9 col-md-9 col-sm-6">
                <li><b>Partidas Jogadas > </b></li>
                <li><b>Vitórias > </b></li>
                <li><b>Derrotas > </b></li>
                <li><b>Sets > </b></li>
                <li><b>Pontos > </b></li>
              </ul>
              <ul class="col-xl-3 col-lg-3 col-md-3 col-sm-6 text-right">
                <?php
                echo "<li> {$banco->time->partidasJogadas} </li>
                        <li> {$banco->time->partidasVencidas} </li>
                        <li> {$banco->time->partidasPerdidas} </li>
                        <li> {$banco->time->sets} </li>
                        <li> {$banco->time->pontos} </li>";
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
          <div class="about-box_img">
            <figure><img src="images/times/sada.png" alt="#" /></figure>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- end abouts -->


  <br>

  <!--  footer -->
  <footr>
    <div>
      <div class="copyright">
        <div class="container">
          <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
        </div>
      </div>
    </div>
  </footr>
  <!-- end footer -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>