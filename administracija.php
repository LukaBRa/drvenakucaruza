<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

@require("php/models/apartman.php");
@require("php/models/ponuda.php");
@require("php/models/cenovnik.php");

$ap1 = Apartman::getApartman("1");
$ap2 = Apartman::getApartman("2");
$ap3 = Apartman::getApartman("3");
$ap4 = Apartman::getApartman("4");
$spa = Apartman::getApartman("5");
$pocetna = Apartman::getApartman("0");
$ponuda = Ponuda::getPonuda();
$ap1Cena = Cenovnik::getCena("1");
$ap2Cena = Cenovnik::getCena("2");
$ap3Cena = Cenovnik::getCena("3");
$ap4Cena = Cenovnik::getCena("4");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruža | Početna</title>
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
                    <a href="index.html"><img src="images/general/logo.png" alt="Drvena kuća Ruža" width="80" height="80"></a>
                    <div class="nav-menu-lg">
                        <ul>
                            <li><a href="index.html">POČETNA</a></li>
                            <li><a href="apartmani.html">APARTMANI</a></li>
                            <li><a href="spacentar.html">SPA</a></li>
                            <li><a href="lokacija.html">LOKACIJA</a></li>
                            <li><a href="kontakt.html">KONTAKT</a></li>
                            <li>
                                <button class="drop-button">
                                    <i class="fa-solid fa-earth-europe"></i> LANGUAGE
                                </button>
                                <div class="drop-menu">
                                    <a href=""><img src="images/general/gb.svg" alt="English" width="20" height="20"> English</a>
                                    <a href=""><img src="images/general/fr.svg" alt="Francais" width="20" height="20"> Francais</a>
                                    <a href=""><img src="images/general/ru.svg" alt="Russian" width="20" height="20"> Russian</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="cta">REZERVIŠITE</a>
                    <button class="toggle"><i class="fa-solid fa-bars"></i></button>
                </nav>
    
                <div class="nav-menu-sm">
                    <ul>
                        <li><a href="">POČETNA</a></li>
                        <li><a href="">APARTMANI</a></li>
                        <li><a href="">SPA</a></li>
                        <li><a href="">LOKACIJA</a></li>
                        <li><a href="">KONTAKT</a></li>
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

    
        
       <div class="container-md pt-5 pb-5">
            <div class="button-group mb-5">
                <button class="active" id="togglePocetna">Početna</button>
                <button class="" id="toggleApartmani">Apartmani</button>
                <button class="" id="toggleSpa">Spa</button>
            </div>

            <!-- Div za podesavanja pocetne strane -->
            
                <div id="pocetna">
                    <!-- Izmena specijalne ponude -->
                        <form action="php/controllers/setPonuda.php" method="post">
                            <label for="specijalnaPonuda">Specijalna ponuda: </label>
                            <input type="text" name="specijalnaPonuda" id="specijalnaPonuda" value="<?php echo $ponuda[0]['ponuda']; ?>">
                            <label for="linkPonuda">Link ka specijalnoj ponudi</label>
                            <input type="text" name="linkPonuda" id="linkPonuda" value="<?php echo $ponuda[0]['link']; ?>">
                            <input type="submit" value="Izmeni">
                        </form>
                        <hr>
                    <!-- X -->

                    <!-- Pocetna album -->
                    <div class="album">
                        <h1>Album pocetna</h1>
                        <form action="php/controllers/addImages.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="img">
                            <input type="text" name="apartmanNum" value="0" hidden>
                            <input type="submit" value="Dodaj slike">
                        </form>
                        <form class="mt-5" action="php/controllers/deleteImages.php" method="post">
                            <h3>Slike</p>
                            <div class="slike">
                                <?php foreach($pocetna as $p) { ?>
                                    <div class="slika">
                                        <label for="<?php echo $p['id']; ?>">
                                            <img src="images/album/<?php echo $p['filename'] ; ?>" alt="Album" width="200" height="200">
                                        </label>
                                        <input type="checkbox" name="pocetnaSlika[]" id="<?php echo $p['id']; ?>" value="<?php echo $p['filename']; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <input type="text" name="apartmanNum" value="0" hidden>
                            <input type="submit" value="Obrisi izabrane slike">
                        </form>
                    </div>
                    <!-- X -->
                </div>
            
            <!-- X -->

            <!-- Podesavanje apartmana -->
                <div id="apartmani">
                    <div class="apartman">
                        <h1>Apartman 1</h1>
                        <form action="php/controllers/addImages.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="img">
                            <input type="text" name="apartmanNum" value="1" hidden>
                            <input type="submit" value="Dodaj slike">
                        </form>
                        <form class="mt-5" action="php/controllers/deleteImages.php" method="post">
                            <h3>Slike</p>
                            <div class="slike">
                                <?php foreach($ap1 as $apartman) { ?>
                                    <div class="slika">
                                        <label for="<?php echo $apartman['id']; ?>">
                                            <img src="images/ap1/<?php echo $apartman['filename'] ; ?>" alt="Apartman 1" width="200" height="200">
                                        </label>
                                        <input type="checkbox" name="ap1slika[]" id="<?php echo $apartman['id'] ?>" value="<?php echo $apartman['filename']; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <input type="text" name="apartmanNum" value="1" hidden>
                            <input type="submit" value="Obrisi izabrane slike">
                        </form>
                        <form class="mt-5" action="php/controllers/setApartmanCena.php" method="post">
                            <label for="cena">Cena apartmana:</label>
                            <input type="text" name="cena" id="cena" value="<?php echo $ap1Cena; ?>">
                            <input type="text" name="brojApartmana" value="1" hidden>
                            <input type="submit" value="Izmeni cenu">
                        </form>
                    </div>
                    <hr>
                    <div class="apartman">
                        <h1>Apartman 2</h1>
                        <form action="php/controllers/addImages.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="img">
                            <input type="text" name="apartmanNum" value="2" hidden>
                            <input type="submit" value="Dodaj slike">
                        </form>
                        <form class="mt-5" action="php/controllers/deleteImages.php" method="post">
                            <h3>Slike</p>
                            <div class="slike">
                            <?php foreach($ap2 as $apartman) { ?>
                                    <div class="slika">
                                        <label for="<?php echo $apartman['id']; ?>">
                                            <img src="images/ap2/<?php echo $apartman['filename'] ; ?>" alt="Apartman 2" width="200" height="200">
                                        </label>
                                        <input type="checkbox" name="ap2slika[]" id="<?php echo $apartman['id'] ?>" value="<?php echo $apartman['filename']; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <input type="text" name="apartmanNum" value="2" hidden>
                            <input type="submit" value="Obrisi izabrane slike">
                        </form>
                        <form class="mt-5" action="php/controllers/setApartmanCena.php" method="post">
                            <label for="cena">Cena apartmana:</label>
                            <input type="text" name="cena" id="cena" value="<?php echo $ap2Cena; ?>">
                            <input type="text" name="brojApartmana" value="2" hidden>
                            <input type="submit" value="Izmeni cenu">
                        </form>
                    </div>
                    <hr>
                    <div class="apartman">
                        <h1>Apartman 3</h1>
                        <form action="php/controllers/addImages.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="img">
                            <input type="text" name="apartmanNum" value="3" hidden>
                            <input type="submit" value="Dodaj slike">
                        </form>
                        <form class="mt-5" action="php/controllers/deleteImages.php" method="post">
                            <h3>Slike</p>
                            <div class="slike">
                                <?php foreach($ap3 as $apartman) { ?>
                                    <div class="slika">
                                        <label for="<?php echo $apartman['id']; ?>">
                                            <img src="images/ap3/<?php echo $apartman['filename'] ; ?>" alt="Apartman 3" width="200" height="200">
                                        </label>
                                        <input type="checkbox" name="ap3slika[]" id="<?php echo $apartman['id'] ?>" value="<?php echo $apartman['filename']; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <input type="text" name="apartmanNum" value="3" hidden>
                            <input type="submit" value="Obrisi izabrane slike">
                        </form>
                        <form class="mt-5" action="php/controllers/setApartmanCena.php" method="post">
                            <label for="cena">Cena apartmana:</label>
                            <input type="text" name="cena" id="cena" value="<?php echo $ap3Cena; ?>">
                            <input type="text" name="brojApartmana" value="3" hidden>
                            <input type="submit" value="Izmeni cenu">
                        </form>
                    </div>
                    <hr>
                    <div class="apartman">
                        <h1>Apartman 4</h1>
                        <form action="php/controllers/addImages.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="img">
                            <input type="text" name="apartmanNum" value="4" hidden>
                            <input type="submit" value="Dodaj slike">
                        </form>
                        <form class="mt-5" action="php/controllers/deleteImages.php" method="post">
                            <h3>Slike</p>
                            <div class="slike">
                                <?php foreach($ap3 as $apartman) { ?>
                                    <div class="slika">
                                        <label for="<?php echo $apartman['id']; ?>">
                                            <img src="images/ap4/<?php echo $apartman['filename'] ; ?>" alt="Apartman 4" width="200" height="200">
                                        </label>
                                        <input type="checkbox" name="ap4slika[]" id="<?php echo $apartman['id'] ?>" value="<?php echo $apartman['filename']; ?>">
                                    </div>
                                <?php } ?>
                            </div>
                            <input type="text" name="apartmanNum" value="4" hidden>
                            <input type="submit" value="Obrisi izabrane slike">
                        </form>
                        <form class="mt-5" action="php/controllers/setApartmanCena.php" method="post">
                            <label for="cena">Cena apartmana:</label>
                            <input type="text" name="cena" id="cena" value="<?php echo $ap4Cena; ?>">
                            <input type="text" name="brojApartmana" value="4" hidden>
                            <input type="submit" value="Izmeni cenu">
                        </form>
                    </div>
                </div>
            <!-- X -->

            <!-- Podesavanja spa centra -->
            <div id="spa">
                <h1>Spa</h1>
                <form action="php/controllers/addImages.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="img">
                            <input type="text" name="apartmanNum" value="5" hidden>
                            <input type="submit" value="Dodaj slike">
                        </form>
                <form class="mt-5" action="php/controllers/deleteImages.php" method="post">
                    <h3>Slike</p>
                    <div class="slike">
                                <?php foreach($spa as $s) { ?>
                                    <div class="slika">
                                        <label for="<?php echo $s['id']; ?>">
                                            <img src="images/spa/<?php echo $s['filename'] ; ?>" alt="Spa" width="200" height="200">
                                        </label>
                                        <input type="checkbox" name="spa[]" id="<?php echo $s['id'] ?>" value="<?php echo $s['filename']; ?>">
                                    </div>
                                <?php } ?>
                    </div>
                    <input type="text" name="apartmanNum" value="5" hidden>
                    <input type="submit" value="Obrisi izabrane slike">
                </form>
            </div>
            <!-- X -->

       </div>
    

    <footer>
        <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,50L10,46.7C20,43,40,37,60,33.3C80,30,100,30,120,35C140,40,160,50,180,45C200,40,220,20,240,16.7C260,13,280,27,300,26.7C320,27,340,13,360,10C380,7,400,13,420,23.3C440,33,460,47,480,53.3C500,60,520,60,540,53.3C560,47,580,33,600,31.7C620,30,640,40,660,50C680,60,700,70,720,66.7C740,63,760,47,780,38.3C800,30,820,30,840,31.7C860,33,880,37,900,36.7C920,37,940,33,960,40C980,47,1000,63,1020,58.3C1040,53,1060,27,1080,15C1100,3,1120,7,1140,11.7C1160,17,1180,23,1200,31.7C1220,40,1240,50,1260,46.7C1280,43,1300,27,1320,26.7C1340,27,1360,43,1380,48.3C1400,53,1420,47,1430,43.3L1440,40L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
        <div class="container-md">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h1>Drvena kuća <span class="accent" style="font-family: 'Allura';">RUŽA</span></h1>
                    <p>Možete nas pratiti na našim društvenim mrežama na linkovima ispod
                        i nikada ne propustite naše nove objave</p>
                    <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a><a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="col-lg-6 col-12 text-end d-flex flex-column">
                    <a href="#" class="footer-link">KONTAKT</a>
                    <a href="mailto:drvenakucaruza@gmail.com" class="footer-link">drvenakucaruza@gmail.com</a>
                    <a href="tel:+381641533372" class="footer-link">064/15-333-72</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/dropdown.js"></script>
    <script src="script/administracija.js"></script>
</body>
</html>