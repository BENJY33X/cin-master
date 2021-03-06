<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="../style/login.css">
    <title>cine_master</title>
</head>

<body>
    <section class="DROITE">
        <img class="DROITE__image" src="../img/Movie Night-amico.png" alt="">
    </section>
    <section class="GAUCHE">
        <div class="GAUCHE__Title">s’identifier dans&nbsp; <span class="GAUCHE__Spa">cine master</span> </div>
        <img class="GAUCHE__Logo" src="../img/OIP-removebg-preview 1.png" alt="">
        <form action="../../app/controllers/Login.php" class="GAUCHE__Form" method="POST">
            <input type="email" name="Gmail" class="GAUCHE__input" placeholder="Entrer your Email" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$">
            <input type="password" name="Password" class="GAUCHE__input" placeholder="Entrer your Password" required>
            <input type="submit" name="submit" value="Login" class="GAUCHE__input GAUCHE__input--sub">
            <a href="./singUp.php" class="GAUCHE__creer">
                <div>creer un compte</div>
            </a>
        </form>
    </section>
</body>

</html>