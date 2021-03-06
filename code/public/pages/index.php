<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once "../../app/controllers/dashbord.php";
if (count($_SESSION) == 0) {
    header("location:./login.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>cine master</title>
</head>

<body>
    <header>
        <div class="nav-bar">
            <div class="nav-bar__logo">
                <img class="nav-bar__img" src="../img/OIP-removebg-preview 1.png" alt="">
                <p>ciné<span>Master</span></p>
            </div>
            <div class="nav-bar__profil">
                <img src="<?= "../../app/prophile_img/" . $_SESSION['img'] ?>" class="ab">
                <p><a><?= $_SESSION["nom"] . " " . $_SESSION["prenom"] ?></a></p>
            </div>
        </div>
        <div class="nav-choix">
            <div class="nav-bar__icon">
                <a href="./index.php">
                    <i class='bx bxs-film' style='color:#ffffff'></i>
                </a>
                <p>Film</p>
            </div>
            <div class="nav-bar__icon">
                <a href="./post.php">
                    <i class='bx bxs-carousel' style='color:#ffffff'></i>
                </a>
                <p>Post</p>
            </div>
            <div class="nav-bar__icon">
                <a href="./admin.php">
                    <i class='bx bx-shield-alt' style='color:#ffffff'></i>
                </a>
                <p>Admin</p>
            </div>
            <div class="nav-bar__icon">
                <a href="../../app/controllers/logout.php">
                    <i class='bx bx-log-out' style='color:#ffffff'></i>
                </a>
                <a href="../../app/controllers/logout.php"> Quiter</a>
            </div>
        </div>
    </header>
    <main class="film">
        <?php foreach ($filmdb as $fil) : ?>
            <div class="film__post">
                <img src="../../app/image_user/<?= $fil['image_url'] ?>" alt="">
                <h3><?= $fil["Nam"]; ?></h3>
            </div>
        <?php endforeach; ?>
    </main>
    <footer class="py-3 mt-2" id="respo">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="./index.php" class="nav-link px-2 text-light">Film</a></li>
            <li class="nav-item"><a href="./post.php" class="nav-link px-2 text-light">Post</a></li>
            <li class="nav-item"><a href="./admin.php" class="nav-link px-2 text-light ">Admin</a></li>
            <li class="nav-item"><a href="./login.php" class="nav-link px-2 text-light">Quitter</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li>
        </ul>
        <p class="text-center text-light">© 2021 Company, Inc</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>