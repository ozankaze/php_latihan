<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Siswa</title>
</head>
    <body class="container">
        <header>
            <h1>Belajar apa yang di pelajari ... Back-End DEV</h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <?php if( isset($_SESSION['email']) && admin_role($_SESSION['email'])  ) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="adminindex.php">Admin daftar santri</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Daftar santri</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-warning ml-3">Logout</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br>
