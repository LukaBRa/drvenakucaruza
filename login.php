<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    @require("php/models/administrator.php");

    var_dump(Administrator::validateAdministrator($username, $password));

    if(Administrator::validateAdministrator($username, $password)){
        $_SESSION['username'] = $username;
        header("Location: administracija.php");
    }else{
        header("Location: login.php?error=neispravni_podaci");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruža | Prijava</title>
    <link rel="shortcut icon" href="images/general/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/nav-footer.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/administracija.css">
</head>
<body>
    
        <div class="container-fluid nav-background">
            <div class="container-md">
                <nav>
                    <a href="index.php"><img src="images/general/logo.png" alt="Drvena kuća Ruža" width="80" height="80"></a>
                    <div class="nav-menu-lg">
                        <ul>
                            <li><a href="index.php">POČETNA</a></li>
                            <li><a href="apartmani.php">APARTMANI</a></li>
                            <li><a href="spacentar.html">SPA</a></li>
                            <li><a href="lokacija.html">LOKACIJA</a></li>
                            <li><a href="kontakt.html">KONTAKT</a></li>
                            <li>
                                <button class="drop-button">
                                    <i class="fa-solid fa-earth-europe"></i> LANGUAGE
                                </button>
                                <div class="drop-menu">
                                    <a href=""><img src="images/general/gb.svg" alt="" width="20" height="20"> English</a>
                                    <a href=""><img src="images/general/fr.svg" alt="" width="20" height="20"> Francais</a>
                                    <a href=""><img src="images/general/ru.svg" alt="" width="20" height="20"> Russian</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="kontakt.html" class="cta">REZERVIŠITE</a>
                    <button class="toggle"><i class="fa-solid fa-bars"></i></button>
                </nav>
    
                <div class="nav-menu-sm">
                    <ul>
                        <li><a href="index.php">POČETNA</a></li>
                        <li><a href="apartmani.php">APARTMANI</a></li>
                        <li><a href="spacentar.html">SPA</a></li>
                        <li><a href="lokacija.html">LOKACIJA</a></li>
                        <li><a href="kontakt.html">KONTAKT</a></li>
                        <li>
                            <button class="drop-button-sm">
                                <i class="fa-solid fa-earth-europe"></i> LANGUAGE
                            </button>
                            <div class="drop-menu-sm">
                                <a href=""><img src="images/general/gb.svg" alt="" width="20" height="20"> English</a>
                                <a href=""><img src="images/general/fr.svg" alt="" width="20" height="20"> Francais</a>
                                <a href=""><img src="images/general/ru.svg" alt="" width="20" height="20"> Russian</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-md">
            <form class="login-form" action="login.php" method="post">
                <?php
                    if(isset($_GET['error'])){
                        echo '<p class="error">Neispravno Korisničko ime ili lozinka</p>';
                    }
                ?>
                <label for="username">Korisničko ime</label>
                <input type="text" name="username" id="username">
                <label for="password">Lozinka</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Prijava">
            </form>
            
   
        </div>    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/dropdown.js"></script>
</body>
</html>