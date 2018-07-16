<?php

include_once('core/init.php');
include_once('view/header.php');

if( !isset( $_SESSION['email'] ) ) {
    header('Location: login.php');
}

$id = $_GET['id'];
$query = "SELECT * FROM murid WHERE id='$id'";
$murid = mysqli_query($link, $query);
$students = mysqli_fetch_assoc($murid); // keluarkan isinya yang ada di $murid


if( isset($_POST['submit']) ) {

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $_SESSION['msgupdateadmin'] = 'adaww';

    $query = "UPDATE `murid` SET nama='$_POST[nama]', umur='$_POST[umur]', alamat='$_POST[alamat]' WHERE id='$id'";

    // var_dump($query);
    if( mysqli_query($link, $query) ) {
        header('Location: index.php');
    } else {
        die('gagal');
    }

}

?>

<div class="container">
    <br>
        <form action="update.php?id=<?php echo $students['id'] ?>" method="post">
        <!-- mengirim ke latihan.php dengan mmebawa variabkle id yang mempunyai nilai $data["id"] -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $students['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Umur</label>
            <input type="text" name="umur" class="form-control" id="email" value="<?php echo $students['umur'] ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $students['alamat'] ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br>

<?php include_once('view/footer.php'); ?> 