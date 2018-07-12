<?php

require_once('core/init.php');
require_once('view/header.php');

if( isset($_POST['submit']) ) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // cek login email kembar
    // if( login_cek_nama($email) ) {

        
    // } else {
    //     echo 'email sudah ada';
    // }

    // cek data
    if( cek_data($email, $pass) ) {
        echo 'berhasil';
    } else {
        echo 'gagal';
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
        </div>
    </div>
</div>


<?php require_once('view/footer.php') ?>
