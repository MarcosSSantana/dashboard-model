<!DOCTYPE html>
<html lang="pt">
<?php
	session_cache_expire(300);
	ob_start();
	session_start();

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	date_default_timezone_set("America/Sao_Paulo");

	// includes
	include_once("config/site.php");
?>

<?php include 'componentes/head.php';?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php include 'componentes/preloader.php';?>

    <?php include 'componentes/navbar.php';?>

    <?php include 'componentes/sidebar.php';?>

    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <?php
      
        $request = $_SERVER['REQUEST_URI'];
        // echo $request;
        $rota = explode(Site::FULLPATH,$request)[1];
        echo $rota;
        switch($rota){
          case " ":
             include 'views/inicio.php';
             break;
          case "Usuarios":
            echo "Users";
            break;
          default:
            include 'views/inicio.php';
        }
      ?>
    </div>
    <!-- /.content-wrapper -->

    <?php include 'componentes/footer.php';?>
  </div>
  <!-- ./wrapper -->

  <?php include 'componentes/scripts.php';?>
</body>

</html>