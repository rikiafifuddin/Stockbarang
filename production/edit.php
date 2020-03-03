<?php 
include("connection.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Ignore this just for WEB TEMPLATE-->
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
    <!-- END OF WEB TEMPLATE -->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <div class="site_title"><span></span></div>
            </div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">

              <div class="profile_info">
                <span>Code By,</span>
                <h2>Riki Nur Afifuddin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu"> 
                <li><a><i class="fa fa-spinner"></i> Menu Stock <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="stock.php">Stok Barang</a></li>
                    <li><a href="tambah.php">Tambah Barang</a></li>
                  </ul>
                </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="x_title">
        <h2><small>Tambah Barang</small></h2>
        </div>
            <!-- INPUT -->
            <div class="x_content">
            <?php
                    include("connection.php");

                    if( isset($_GET['id']) ){
                    }
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM stok WHERE id=$id";
                    $query = mysqli_query($db, $sql);
                    $stock = mysqli_fetch_assoc($query);
            ?>
              <form action="querry.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                  </br>
                  <input type="hidden" name="id" value="<?php echo $stock['id'] ?>" />
                  <label  class="control-label col-md-2" for="Account">Account<span></span>
                  </label>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                    <input name="Account" type="text" id="Account" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $stock['Account'] ?>">
                  </div>
              </div>

              <div class="form-group">
                  </br>
                  <label  class="control-label col-md-2" for="NamaBarang">Nama Barang<span></span>
                  </label>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                   <input name="NamaBarang" type="text" id="NamaBarang" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $stock['NamaBarang'] ?>">
                  </div>
              </div>

              <div class="form-group">
                  </br>
                  <label  class="control-label col-md-2" for="SAT">SAT<span></span>
                  </label>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                  <input name="SAT" type="text" id="SAT" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $stock['SAT'] ?>">
                  </div>
              </div>
              
              <div class="form-group">
                  </br>
                  <label  class="control-label col-md-2" for="SaldoAwal">Saldo Awal<span></span>
                  </label>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                  <input name="SaldoAwal" type="text" id="SaldoAwal" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $stock['SaldoAwal'] ?>">
                  </div>
              </div>

              <div class="form-group">
                  </br>
                  <label  class="control-label col-md-2" for="LPB">Qty Masuk (LPB)<span></span>
                  </label>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                  <input name="LPB" type="text" id="LPB" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $stock['LPB'] ?>">
                  </div>
              </div>

              <div class="form-group">
                  </br>
                  <label  class="control-label col-md-2" for="BKB">Qty Keluar (BKB)<span></span>
                  </label>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                  <input name="BKB" type="text" id="BKB" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $stock['BKB'] ?>">
                  </div>
              </div>

              <div class="form-group">
                  </br>
                  <label  class="control-label col-md-2" for="SaldoAkhir">Saldo Akhir<span></span>
                  </label>
                  <div class="col-md-5 col-sm-6 col-xs-12">
                  <input name="SaldoAkhir" type="text" id="SaldoAkhir" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $stock['SaldoAkhir'] ?>">
                  </div>
              </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-4">
                  <button name="simpanedit" type="submit" class="btn btn-success">Save</button>
                </div>
              </div>

              </form>
              </div>
            </div>
            <!-- INPUT -->

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Test code 03 Maret 2020
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Ignore this just for WEB TEMPLATE-->
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <!-- END OF WEB TEMPLATE SCRIPT -->
  </body>
</html>
