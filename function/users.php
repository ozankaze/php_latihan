<?php

function daftar_user($nama, $email, $pass) {
    global $link;
    // mencegah sql injection
    $name = mysqli_real_escape_string($link, $nama);
    $email = mysqli_real_escape_string($link, $email);
    $pass = mysqli_real_escape_string($link, $pass);

    // enkripsi password
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";

    // var_dump($query);die();
    if( mysqli_query($link, $query) ) {
        return true;
    } else {
        return false;
    }
}

function register_cek_nama($nama) {
    global $link;
    $name = mysqli_real_escape_string($link, $nama);

    $query = "SELECT * FROM `users` WHERE `name` = '$name'";
    // var_dump($query);die();
    if( $riset = mysqli_query($link, $query) ) {
        if( mysqli_num_rows($riset) == 0 ) {
            return true;
        } else {
            return false;
        }
    }
}

function cek_data($email, $pass) {
    global $link;
    $email = mysqli_real_escape_string($link, $email);
    $pass = mysqli_real_escape_string($link, $pass);

    $query = "SELECT `password` FROM `users` WHERE `email` = '$email'";
    // print_r($query);die();
    $result = mysqli_query($link, $query);
    // var_dump($result);die();
    $hash = mysqli_fetch_assoc($result)['password'];
    // print_r($hash);die();

    if( password_verify($pass, $hash) ) {
        // die('Berhasil');
        return true; 
    } else {
        return false;
    }
}


?>