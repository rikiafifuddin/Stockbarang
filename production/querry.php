 <?php	
include("connection.php");
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $Account = $_POST['Account'];
    $NamaBarang = $_POST['NamaBarang'];
    $SAT = $_POST['SAT'];
    $SaldoAwal = $_POST['SaldoAwal'];
    $LPB = $_POST['LPB'];
    $BKB = $_POST['BKB'];
    $SaldoAkhir = $_POST['SaldoAkhir'];

    // query Insert data to database
    $sql = "INSERT INTO stok (Account, NamaBarang, SAT, SaldoAwal, LPB, BKB, SaldoAkhir) VALUE ('$Account', '$NamaBarang', '$SAT', '$SaldoAwal','$LPB','$BKB','$SaldoAkhir')";
    $query = mysqli_query($db, $sql);
	    header("location:Stock.php");
}
else if( isset($_GET['id']) ){

    $stock = $_GET['id'];
    $sql = "DELETE FROM stok WHERE id ='$stock'";
    $query = mysqli_query($db, $sql);
    header("location:stock.php");
} 
else if(isset($_POST['simpanedit'])){
    $id= $_POST['id'];
    $Account = $_POST['Account'];
    $NamaBarang = $_POST['NamaBarang'];
    $SAT = $_POST['SAT'];
    $SaldoAwal = $_POST['SaldoAwal'];
    $LPB = $_POST['LPB'];
    $BKB = $_POST['BKB'];
    $SaldoAkhir = $_POST['SaldoAkhir'];
    

    $sqlupdate = "UPDATE stok SET Account='$Account', NamaBarang='$NamaBarang', SAT='$SAT', SaldoAwal='$SaldoAwal', LPB='$LPB', BKB='$BKB', SaldoAkhir='$SaldoAkhir' WHERE id=$id";
    $queryupdate = mysqli_query($db, $sqlupdate);

    header("location:stock.php");
}
else{
   header("location:stock.php");
}
?>
