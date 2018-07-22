<?php

require_once('core/init.php');
require_once('view/header.php');

if( !isset( $_SESSION['email'] ) ) {
  $_SESSION['msglogin'] = 'anda harus login dulu gan';
  header('Location: login.php');
}

if( admin_role($_SESSION['email']) == 1 ) {
  header('Location: adminindex.php');
}

$query = "SELECT * FROM `murid`";

$students = mysqli_query($link, $query);
// var_dump($a);
// var_dump($student);die();

if( isset($_GET['search']) ) {
  $cari = $_GET['search'];
  $students = cari_data($cari);
}

?>

<div class="container">
<table class="table">
  <h2>Daftar Nama Santri QODR</h2>
  <!-- <a href="create.php" class="btn btn-success mb-3">Create</a> -->
  <!-- <a href="logout.php" class="btn btn-warning mb-3 ml-3">Logout</a> -->
  <thead class="table-primary">
    <th scope="row">1</th>
    <th scope="row">Nama</th>
    <th scope="row">Umur</th>
    <th scope="row">Alamat</th>
    <!-- <th scope="row">Action</th> -->
  </thead>
  <tbody>
    <?php foreach( $students as $student ) : ?>
        <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['nama'] ?></td>
            <td><?php echo $student['umur'] ?></td>
            <td><?php echo $student['alamat'] ?></td>
            <!-- <td>
              <a href="update.php?id=<?php echo $student['id'] ?>" class="btn btn-info">update</a>
              <a href="delete.php?id=<?php echo $student['id'] ?>" class="btn btn-danger">delete</a>
            </td> -->
        </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>

<?php require_once('view/footer.php');?>