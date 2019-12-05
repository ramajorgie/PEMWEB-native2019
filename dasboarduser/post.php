
<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Pendaftaran KOLU</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../cssdas/dasboard/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../cssdas/dasboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../cssdas/dasboard/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../cssdas/dasboard/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../cssdas/dasboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="../dashboarduser.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Dashboard  Pendaftaran </span><strong> KLU </strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <!-- Messages                        -->


                <!-- Logout    -->
                <li class="nav-item"><a href="../logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center"><a href="pages-profile.html">
              </a>
            <div class="title">
              <h1 class="h4">Sistem Pendataan</h1>
              <p>Komunitas Linux UPNV JATIM </p>
            </div>
          </div>
                    <!-- Sidebar Navidation Menus--><span class="heading">MENU</span>
          <ul class="list-unstyled">
            <li class=""><a href="status.php"> <i><img src="../cssdas/dasboard/icon/home.png"></i>Publis Pendaftaran </a></li>
            <li class=""><a href="biodatapendaftaran.php"> <i><img src="../cssdas/dasboard/icon/accspv.png"></i>Biodata Pendaftaran</a></li>

            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="../cssdas/dasboard/icon/history.png"></i>List Data Pendaftaran</a>
              <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="tahunan.php">Pendaftaran Pertahun</a></li>
                <li ><a class="active" href="semuadatabackup.php">Semua Data Backup</a></li>
              </ul>
            </li>

              <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="../cssdas/dasboard/icon/history.png"></i>Data Anggota Devisi</a>
              <ul id="formsDropdown" class="collapse list-unstyled ">
                <li><a href="devisiweb.php">Daftar devisi Web</a></li>
                <li><a href="devisijaringan.php">Daftar devisi Jaringan</a></li>
                <li><a href="devisidos.php">Daftar devisi Dos</a></li>
                <li><a href="devisidistro.php">Daftar devisi Distro</a></li>
                <li><a href="devisiall.php">Daftar Backup semua Devisi</a></li>
              </ul>
            </li>
            </li>

            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="../cssdas/dasboard/icon/rangking.png"></i>Komentar</a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="komentar.php">Tampilkan Komentar</a></li>
                <li><a href="#">lain-lain</a></li>
              </ul>
            </li>

                      <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="../cssdas/dasboard/icon/dasboard.png"></i>Tampilan Web</a>
              <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li><a href="post.php">Tambah Post</a></li>
                <li><a href="#">lain-lain</a></li>
              </ul>
            </li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">POST</h2>
            </div>
          </header>          </header>          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
             
            </ul>
          </div>
          <section>
            <div class="container-fluid">
              <div class="card">
                <div class="card-header">
              
                </div>
                <div class="card-body">
                  <div class="row">
                   
                  </div>
                  <form method="post" action="../prosespost.php">
                      <h2 class="K3JSBVB-R-k"> 
                      <span class="K3JSBVB-R-r blogg-title">Entri</span> Judul </h2> 
                      <input type="text" class="" name="judul" size="60" dir="ltr"><br><br>
                      <p>
                      <h2 class="K3JSBVB-R-k"> 
                      <span class="K3JSBVB-R-r blogg-title">Isi</span> Berita </h2>   
                      <textarea name="isi" style="width:450px; height:80px"></textarea>    
                      </p> 
                      <div>
                       <button class="btn btn--radius-2 btn--red" type="submit">Post Now</button>
                      </div>
                </form>



                  </div>
                </div>

                <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <div class="row">
                   
                  </div>
  
<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:100%; height:475px;">
  <form action="../deletepost.php" method="POST">
<table  class="flat-table flat-table-2" width="100%" border="3" align="center" cellpadding="1" cellspacing="8">
 <thead align="center">
    <th>No</td> 
    <th >Action</td>
    <th >Id_Posting</td> 
    <th width="200">Judul</td> 
    <th width="200">Isi</td>       
    <th width="200">Tanggal</td> 
     
 </thead>
 <?php
    include "../connectdb.php";

    $Cari="SELECT * FROM post ORDER BY tgl DESC";
    $Tampil = $link->query($Cari);
    $nomer=0;
     foreach( $Tampil as $hasil) {
            $id_post   = stripslashes ($hasil['id_post']);
            $judul     = stripslashes ($hasil['judul']);
            $isi       = stripslashes ($hasil['isi']);
            $tgl       = stripslashes ($hasil['tgl']);
            
        {
    $nomer++;
?>
 <tbody>
  <tr align="center">
        <td><?=$nomer?></td>
        <td><button type="sumbit" name="yoi" value="<?=$id_post?>">Hapus</button></td>
        <td><?=$id_post?></td>
        <td><?=$judul?></td>
        <td><?=$isi?></td>
        <td><?=$tgl?></td>
        <
  </tr>
  <?php  
        }
    }

?>
 </tbody>
</table>
</form>


</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <!-- JavaScript files-->
    <script src="../cssdas/dasboard/vendor/jquery/jquery.min.js"></script>
    <script src="../cssdas/dasboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../cssdas/dasboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../cssdas/dasboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../cssdas/dasboard/vendor/chart.js/Chart.min.js"></script>
    <script src="../cssdas/dasboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../cssdas/dasboard/js/charts-home.js"></script>
    <!-- Notifications-->
<!--     <script src="cssdas/dasboard/vendor/messenger-hubspot/build/js/messenger.min.js">   </script>
    <script src="cssdas/dasboard/vendor/messenger-hubspot/build/js/messenger-theme-flat.js">       </script> -->
    <script src="../cssdas/dasboard/js/home-premium.js"> </script>
    <!-- Main File-->
    <script src="../cssdas/dasboard/js/front.js"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:27 GMT -->
</html>