<?php

require_once('core/init.php');
require_once('view/header.php');

if( isset($_POST['submit']) ) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if( admin_role($email) ) {
        // echo 'berhasil';
        $_SESSION['email'] = $email; 
        header('Location: adminindex.php');
    } else {
        // cek data
        if( cek_data($email, $pass) ) {
            $_SESSION['email'] = $email; 
            header('Location: index.php');
        } else {
            echo 'gagal';
        }
    }
}

?>

<div class="card text-white bg-primary mb-3" style="max-width: 40rem; margin: 0 auto;">
    <div class="card-header">Login</div>
        <div class="card-body">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" name="submit" class="btn btn-info">Login</button>
            </form>
            <br>
            <div class="form-group">
                <a href="register.php" class="color: white;" style="color:  white;">Daftar gratis</a>
            </div>
        </div>
    </div>
</div>


<?php require_once('view/footer.php') ?>
