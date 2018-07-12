<?php

require_once('core/init.php');
require_once('view/header.php');

if( !isset( $_SESSION['email'] ) ) {
    header('Location: login.php');
}

if( isset($_POST['submit']) ) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // var_dump($_POST['submit']);die();

    if( !empty($nama) && !empty($email) && !empty($pass) ) {
        
        // cek nama kalau sudah ada
        if( register_cek_nama($nama) ) {
            // daftar user
            if( daftar_user($nama, $email, $pass) ) {
                echo 'berhasil';
            } else {
                echo 'gagal';
            }
        } else {
            echo 'Nama Sudah Ada';
        }

    } else {
        echo 'Nama Tidak Boleh Kosong';
    }
}

?>

<div class="card text-white bg-primary mb-3" style="max-width: 40rem; margin: 0 auto;">
    <div class="card-header">Register</div>
        <div class="card-body">
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" name="submit" class="btn btn-warning">Register</button>
            </form>
        </div>
    </div>
</div>


<?php require_once('view/footer.php') ?>
