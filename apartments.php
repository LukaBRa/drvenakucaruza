<?php

@require("php/models/cenovnik.php");

$ap1cena = Cenovnik::getCena("1");
$ap2cena = Cenovnik::getCena("2");
$ap3cena = Cenovnik::getCena("3");
$ap4cena = Cenovnik::getCena("4");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruža | Apartments</title>
    <link rel="shortcut icon" href="images/general/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/nav-footer.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/apartmanislider.css">
</head>
<body>
    
        <div class="container-fluid nav-background">
            <div class="container-md">
                <nav>
                    <a href="homeEng.php"><img src="images/general/logo.png" alt="Drvena kuća Ruža" width="80" height="80"></a>
                    <div class="nav-menu-lg">
                        <ul>
                            <li><a href="homeEng.php">HOME</a></li>
                            <li><a href="apartments.php">APARTMENTS</a></li>
                            <li><a href="spacenter.html">SPA</a></li>
                            <li><a href="location.html">LOCATION</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                            <li>
                                <button class="drop-button">
                                    <i class="fa-solid fa-earth-europe"></i> LANGUAGE
                                </button>
                                <div class="drop-menu">
                                    <a href="apartmani.php"><img src="images/general/rs.svg" alt="" width="20" height="20"> Serbian</a>
                                    <a href=""><img src="images/general/fr.svg" alt="" width="20" height="20"> Francais</a>
                                    <a href=""><img src="images/general/ru.svg" alt="" width="20" height="20"> Russian</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="contact.html" class="cta">REZERVIŠITE</a>
                    <button class="toggle"><i class="fa-solid fa-bars"></i></button>
                </nav>
    
                <div class="nav-menu-sm">
                    <ul>
                        <li><a href="homeEng.php">HOME</a></li>
                        <li><a href="apartmani.php">APARTMENTS</a></li>
                        <li><a href="spacenter.html">SPA</a></li>
                        <li><a href="location.html">LOCATION</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li>
                            <button class="drop-button-sm">
                                <i class="fa-solid fa-earth-europe"></i> LANGUAGE
                            </button>
                            <div class="drop-menu-sm">
                                <a href="apartmani.php"><img src="images/general/gb.svg" alt="" width="20" height="20"> English</a>
                                <a href=""><img src="images/general/fr.svg" alt="" width="20" height="20"> Francais</a>
                                <a href=""><img src="images/general/ru.svg" alt="" width="20" height="20"> Russian</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    
        <section class="background-lightbrown box-shadow">
            <div class="container-md">
                <div class="row mt-5 mb-5 background-lightbrown p-5">
                    <div class="col-lg-6 col-12">
                        <div class="apartman-1">
                            <h2>Apartment <span class="accent fw-bold">1</span></h2>
                            <p class="apartman-povrsina">100 m<sup>2</sup></p>
                            <div class="apartman-row">
                            <p>Accommodation capacity 6+2</p>
                        </div>
                        <div class="apartman-row">
                            <p>Living room, 3 rooms, 3 terrace, bathroom and wc</p>
                        </div>
                        <div class="apartman-row">
                            <p>2 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry.png" width="40" height="40">
                               2 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry-1.png" width="40" height="40">
                               1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30">
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Completely equipped kitchen</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (living room / bedroom)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Cable TV (dnevni boravak / spavaća soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Individually controlled heating + fireplace</p>
                        </div>
                        <div class="apartman-row">
                            <p>Bathrobes, slippers, towels</p>
                        </div>
                        <div class="apartman-row">
                            <p>Hairdryer, cosmetic mirror</p>
                        </div>
                        <div class="apartman-row">
                            <p>Use of the SPA center (steam bath, jacuzzi, sauna, salt room)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Free parking covered by video surveillance</p>
                        </div>
                            <div class="apartman-row">
                                <p><span class="fw-bold">Price:</span> <?php echo $ap1cena; ?></p>
                            </div>
                            <a href="kontakt.html" class="detaljnije mt-5">RESERVATION</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="slider" id="ap1">
                            <button id="ap1-left" class="slider-indicator slider-left-indicator"><i class="fa-solid fa-chevron-left"></i></button>
                            <button id="ap1-right" class="slider-indicator slider-right-indicator"><i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
    
            </section>

            <section class="background-lightbrown box-shadow">
                <div class="container-md">
                    <div class="row mt-5 mb-5 background-lightbrown p-5">
                        <div class="col-lg-6 col-12">
                            <div class="apartman-2">
                                <h2>Apartment <span class="accent fw-bold">2</span></h2>
                                <p class="apartman-povrsina">100 m<sup>2</sup></p>
                        <div class="apartman-row">
                            <p>Living room, 3 rooms, 3 terrace, bathroom and wc</p>
                        </div>
                        <div class="apartman-row">
                            <p>Accommodation capacity 6+2</p>
                        </div>
                        <div class="apartman-row">
                            <p>
                                3 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry.png" width="40" height="40">
                                1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30">
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Completely equipped kitchen</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (living room / bedroom)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Cable TV</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Individually controlled heating + fireplace</p>
                        </div>
                        <div class="apartman-row">
                            <p>Bathrobes, slippers, towels</p>
                        </div>
                        <div class="apartman-row">
                            <p>Hairdryer, cosmetic mirror</p>
                        </div>
                        <div class="apartman-row">
                            <p>Use of the SPA center (steam bath, jacuzzi, sauna, salt room)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Free parking covered by video surveillance</p>
                        </div>
                        <div class="apartman-row">
                            <p><span class="fw-bold">Price:</span> <?php echo $ap2cena; ?></p>
                        </div>
                        <a href="kontakt.html" class="detaljnije mt-5">RESERVATION</a>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="slider" id="ap2">
                                <button id="ap2-left" class="slider-indicator slider-left-indicator"><i class="fa-solid fa-chevron-left"></i></button>
                                <button id="ap2-right" class="slider-indicator slider-right-indicator"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="background-lightbrown box-shadow">
                    <div class="container-md">
                        <div class="row mt-5 mb-5 p-5">
                            <div class="col-lg-6 col-12">
                                <div class="apartman-3">
                                    <h2>Apartment <span class="accent fw-bold">3</span></h2>
                                    <p class="apartman-povrsina">42 m<sup>2</sup></p>
                        <div class="apartman-row">
                            <p>Accommodation capacity 4</p>
                        </div>
                        <div class="apartman-row">
                            <p>Living room, 1 room, bathroom</p>
                        </div>
                        <div class="apartman-row">
                            <p>
                                1 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry.png" width="40" height="40">,
                                1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30"> (francuski + ugaona garnitura na razvlačenje)
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Completely equipped kitchen</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (living room)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Cable TV</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Individually controlled heating</p>
                        </div>
                        <div class="apartman-row">
                            <p>Hairdryer, cosmetic mirror</p>
                        </div>
                        <div class="apartman-row">
                            <p>Bathrobes, slippers, towels</p>
                        </div>
                        <div class="apartman-row">
                            <p>Use of the SPA center (steam bath, jacuzzi, sauna, salt room)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Free parking covered by video surveillance</p>
                        </div>
                        <div class="apartman-row">
                            <p><span class="fw-bold">Price:</span> <?php echo $ap4cena; ?></p>
                        </div>
                        <a href="kontakt.html" class="detaljnije mt-5">RESERVATION</a>
                            </div>
                        </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="slider" id="ap3">
                                    <button id="ap3-left" class="slider-indicator slider-left-indicator"><i class="fa-solid fa-chevron-left"></i></button>
                                    <button id="ap3-right" class="slider-indicator slider-right-indicator"><i class="fa-solid fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>    
                </section>
    
            <section class="background-lightbrown box-shadow">
                <div class="container-md">
                    <div class="row mt-5 mb-5 background-lightbrown p-5">
                        <div class="col-lg-6 col-12">
                            <div class="apartman-4">
                                <h2>Apartment <span class="accent fw-bold">4</span></h2>
                                <p class="apartman-povrsina">24 m<sup>2</sup></p>
                        <div class="apartman-row">
                            <p>Accommodation capacity 3</p>
                        </div>
                        <div class="apartman-row">
                            <p>1 room, bathroom</p>
                        </div>
                        <div class="apartman-row">
                            <p>
                                1 x <img src="https://img.icons8.com/ios-glyphs/30/000000/sofa.png" width="30" height="30">,
                                1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30"> (fotelja na razvlačenje + ugaona garnitura na razvlačenje)
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Completely equipped kitchen</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (living room)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Cable TV</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Individually controlled heating</p>
                        </div>
                        <div class="apartman-row">
                            <p>Bathrobes, slippers, towels</p>
                        </div>
                        <div class="apartman-row">
                            <p>Hairdryer, cosmetic mirror</p>
                        </div>
                        <div class="apartman-row">
                            <p>Use of the SPA center (steam bath, jacuzzi, sauna, salt room)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Free parking covered by video surveillance</p>
                        </div>
                        <div class="apartman-row">
                            <p><span class="fw-bold">Price:</span> <?php echo $ap4cena; ?></p>
                        </div>
                        <a href="kontakt.html" class="detaljnije mt-5">RESERVATION</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="slider" id="ap4">
                                <button id="ap4-left" class="slider-indicator slider-left-indicator"><i class="fa-solid fa-chevron-left"></i></button>
                                <button id="ap4-right" class="slider-indicator slider-right-indicator"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    

    <footer>
        <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,50L10,46.7C20,43,40,37,60,33.3C80,30,100,30,120,35C140,40,160,50,180,45C200,40,220,20,240,16.7C260,13,280,27,300,26.7C320,27,340,13,360,10C380,7,400,13,420,23.3C440,33,460,47,480,53.3C500,60,520,60,540,53.3C560,47,580,33,600,31.7C620,30,640,40,660,50C680,60,700,70,720,66.7C740,63,760,47,780,38.3C800,30,820,30,840,31.7C860,33,880,37,900,36.7C920,37,940,33,960,40C980,47,1000,63,1020,58.3C1040,53,1060,27,1080,15C1100,3,1120,7,1140,11.7C1160,17,1180,23,1200,31.7C1220,40,1240,50,1260,46.7C1280,43,1300,27,1320,26.7C1340,27,1360,43,1380,48.3C1400,53,1420,47,1430,43.3L1440,40L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
        <div class="container-md">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h1>Wooden house <span class="accent" style="font-family: 'Allura';">ROSE</span></h1>
                    <p>You can follow us on our social networks at the links below and never miss our new posts</p>
                    <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a><a href="#" class="social"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="col-lg-6 col-12 text-end d-flex flex-column">
                    <a href="#" class="footer-link">CONTACT</a>
                    <a href="mailto:drvenakucaruza@gmail.com" class="footer-link">drvenakucaruza@gmail.com</a>
                    <a href="tel:+381641533372" class="footer-link">064/15-333-72</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/apartmanislider.js"></script>
    <script src="script/dropdown.js"></script>
    
</body>
</html>