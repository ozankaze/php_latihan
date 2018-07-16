<?php

require_once('core/init.php');
require_once('view/header.php');

$id = $_GET['id'];
$_SESSION['msgdeleteadmin'] = 'adaww';

$query = "DELETE FROM `murid` WHERE id='$id'";

if( mysqli_query($link, $query) ) {
    // echo 'berhasil';
    header('Location: index.php');
} else {
    echo 'gagal';
}

?>




<?php require_once('view/footer.php') ?>