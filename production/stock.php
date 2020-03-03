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

    <title>Stock Barang Test</title>

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
        <h2><small>Rincian Pemakaian Stock Material Gudang</small></h2>
        </div>
            <!-- INPUT -->
            <div class="x_content">
					            <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Account</th>
                          <th>Nama Barang</th>
                          <th>SAT</th>
						              <th>Saldo Awal</th>
                          <th>Qty Masuk (LPB)</th>
                          <th>Qty Keluar (BKB)</th>
                          <th>Saldo Akhir</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr class="even pointer">
                            <?php
                                $sql = "SELECT * FROM stok";	
                                $query = mysqli_query($db, $sql);
                                $i=1;
								
                                while($stock = mysqli_fetch_array($query)){
                                    echo "<tr>";
                                    echo "<td>".$i."</td>";
                                    echo "<td>".$stock['Account']."</td>";
                                    echo "<td>".$stock['NamaBarang']."</td>";
                                    echo "<td>".$stock['SAT']."</td>";
                                    echo "<td>".$stock['SaldoAwal']."</td>";
                                    echo "<td>".$stock['LPB']."</td>";
                                    echo "<td>".$stock['BKB']."</td>";
                                    echo "<td>".$stock['SaldoAkhir']."</td>";
                                    echo "<td>";
                                    echo "<a href='querry.php?id=".$stock['id']."'>Hapus | </a>";
                                    echo "<a href='edit.php?id=".$stock['id']."'>Edit</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                            ?>
                          </tr>
                      </tbody>
                    </table>
                  </div>
            <div class="x_content">
              <div class="form-group">
                <div class="col-md-12 col-sm-9 col-xs-12">
                  <button name="tambah" type="submit" class="btn btn-success" onclick="window.location.href = 'tambah.php';">Tambah</button>
                </div>
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
