<?php

require_once('core/init.php');
require_once('view/header.php');

$query = "SELECT * FROM `murid`";

$students = mysqli_query($link, $query);
// var_dump($a);
// var_dump($student);die();

?>

<div class="container">
<table class="table">
  <h2>Daftar Nama Santri QODR</h2>
  <a href="create.php" class="btn btn-success mb-3">Create</a>
  <thead class="table-primary">
    <th scope="row">1</th>
    <th scope="row">Nama</th>
    <th scope="row">Umur</th>
    <th scope="row">Alamat</th>
    <th scope="row">Action</th>
  </thead>
  <tbody>
    <?php foreach( $students as $student ) : ?>
        <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['nama'] ?></td>
            <td><?php echo $student['umur'] ?></td>
            <td><?php echo $student['alamat'] ?></td>
            <td>
              <a href="#" class="btn btn-info">update</a>
              <a href="#" class="btn btn-danger">delete</a>
            </td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>

<?php require_once('view/footer.php');?>