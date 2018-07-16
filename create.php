<?php

include_once('core/init.php');
include_once('view/header.php');

if( !isset( $_SESSION['email'] ) ) {
    header('Location: login.php');
}

if( isset($_POST['submit']) ) {

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $_SESSION['msgcreateadmin'] = 'adaww';

    $query = "INSERT INTO `murid` (`nama`, `umur`, `alamat`) VALUES ('$nama', '$umur', '$alamat')";

    if( mysqli_query($link, $query) ) {
        // echo 'berhasil';
        header('Location: index.php');
    } else {
        echo 'gagal';
    }

}

?>

<div class="container">
    <br>
        <form action="create.php" method="post">
        <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Umur</label>
            <input type="text" name="umur" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br>

<?php include_once('view/footer.php'); ?> 