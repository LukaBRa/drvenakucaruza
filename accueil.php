<?php

@require("php/models/ponuda.php");

$specijalnaPonuda = Ponuda::getPonuda();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruža | Accueil</title>
    <link rel="shortcut icon" href="images/general/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/nav-footer.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/carousel.css">
</head>
<body>
    <!-- <div id="snow-container"></div> -->
    <header>
        <!-- <div id="snow-container"></div> -->
        <div class="container-md">
            
            <nav>
                <a href="accueil.php"><img src="images/general/logo.png" alt="Drvena kuća Ruža" width="80" height="80"></a>
                <div class="nav-menu-lg">
                    <ul>
                        <li><a href="accueil.php">ACCUEIL</a></li>
                        <li><a href="appartements.php">APPARTEMENTS</a></li>
                        <li><a href="spaFR.html">SPA</a></li>
                        <li><a href="locationFR.html">LOCATION</a></li>
                        <li><a href="contactFR.html">CONTACT</a></li>
                        <li>
                            <button class="drop-button">
                                <i class="fa-solid fa-earth-europe"></i> LANGUAGE
                            </button>
                            <div class="drop-menu">
                                <a href="homeEng.php"><img src="images/general/gb.svg" alt="" width="20" height="20"> English</a>
                                <a href="index.php"><img src="images/general/rs.svg" alt="" width="20" height="20"> Srpski</a>
                                <a href=""><img src="images/general/ru.svg" alt="" width="20" height="20"> Russian</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="contactFR.html" class="cta">Reserve maintenant</a>
                <button class="toggle"><i class="fa-solid fa-bars"></i></button>
            </nav>

            <div class="nav-menu-sm">
                <ul>
                    <li><a href="accueil.php">ACCUEIL</a></li>
                    <li><a href="appartements.php">APPARTEMENTS</a></li>
                    <li><a href="spaFR.html">SPA</a></li>
                    <li><a href="locationFR.html">LOCATION</a></li>
                    <li><a href="contactFR.html">CONTACT</a></li>
                    <li>
                        <button class="drop-button-sm">
                            <i class="fa-solid fa-earth-europe"></i> LANGUAGE
                        </button>
                        <div class="drop-menu-sm">
                            <a href="homeEng.php"><img src="images/general/gb.svg" alt="" width="20" height="20"> English</a>
                            <a href="index.php"><img src="images/general/rs.svg" alt="" width="20" height="20"> Srpski</a>
                            <a href=""><img src="images/general/ru.svg" alt="" width="20" height="20"> Russian</a>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="margin-top">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="">
                            <div class="name">
                                <h1>CHALET</h1>
                                <h1 id="name-accent">RUZA(ROSE)</h1>
                            </div>
                            <p class="header-location"><i class="fa-solid fa-location-dot"></i> Vikend naselje, Kopaonik</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="background-transparent p-5" style="border-radius: 10px;">
                            <p class="fw-bold" style="color: white">OFFRE SPÉCIALE</p>
                            <h1 class="mb-5" style="color: #e8d469;"><?php echo $specijalnaPonuda[0]['ponuda']; ?></h1>
                            <a href="<?php echo $specijalnaPonuda[0]['link']; ?>" class="cta">PLUS EN DÉTAIL</a>
                            <p style="color: rgb(233, 233, 233);font-size: 1.2rem;" class="mt-4">Tel: 0641533372</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="background-primary pb-5">
        <div class="container-md">
            <div class="counters row">
                <div class="counter col-lg-2 col-md-3 col-6">
                    <p class="counter-accent">266</p>
                    <p>M<sup>2</sup></p>
                </div>
                <div class="counter col-lg-2 col-md-3 col-6">
                    <p class="counter-accent">4</p>
                    <p>APARTMANA</p>
                </div>
                <div class="counter col-lg-2 col-md-3 col-6">
                    <p class="counter-accent">1</p>
                    <p>JACUZZI EXTÉRIEUR</p>
                </div>
                <div class="counter col-lg-2 col-md-3 col-6">
                    <p class="counter-accent">1</p>
                    <p>GROTTE DE SEL</p>
                </div>
                <div class="counter col-lg-2 col-md-3 col-6">
                    <p class="counter-accent">1</p>
                    <p>SAUNA</p>
                </div>
                <div class="counter col-lg-2 col-md-3 col-6">
                    <p class="counter-accent">1</p>
                    <p>HAMMAM OU BAIN TURC</p>
                </div>
            </div>
        </div>
    </section>

    <section class="background-primary">
        <div class="container-md pt-5 pb-5 pb-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/pocetna/apartmani.jpeg" alt="Elegantno uredjeni apartmani" class="img-fluid">
                </div>
                <div class="col-lg-6 section-apartmani mt-lg-0 mt-sm-5 mt-5">
                    <p class="accent">CHALET ROSE</p>
                    <h1>APPARTEMENTS <br> ÉLÉGAMMENT  <br> MEUBLÉS</h1>
                    <p>Située dans un quartier calme du Weekend Village, la Ruža Wooden House se trouve à 500-600 m des premiers marchés et restaurants. L'arrêt de ski-bus le plus proche est à 100 m de la maison, et le transport en taxi est facile et disponible à tout moment.</p>
                    <p>L'établissement comprend 4 unités d'hébergement distinctes, un centre de spa, un jacuzzi extérieur et un parking couvert par vidéosurveillance. Au rez-de-chaussée de l'immeuble se trouvent un studio et un appartement avec une chambre séparée, tandis qu'au premier étage se trouvent deux appartements en duplex. Tous les appartements disposent de la télévision par câble et d'une connexion Internet illimitée.</p>
                </div>
            </div>
        </div>
        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,50L10,46.7C20,43,40,37,60,33.3C80,30,100,30,120,35C140,40,160,50,180,45C200,40,220,20,240,16.7C260,13,280,27,300,26.7C320,27,340,13,360,10C380,7,400,13,420,23.3C440,33,460,47,480,53.3C500,60,520,60,540,53.3C560,47,580,33,600,31.7C620,30,640,40,660,50C680,60,700,70,720,66.7C740,63,760,47,780,38.3C800,30,820,30,840,31.7C860,33,880,37,900,36.7C920,37,940,33,960,40C980,47,1000,63,1020,58.3C1040,53,1060,27,1080,15C1100,3,1120,7,1140,11.7C1160,17,1180,23,1200,31.7C1220,40,1240,50,1260,46.7C1280,43,1300,27,1320,26.7C1340,27,1360,43,1380,48.3C1400,53,1420,47,1430,43.3L1440,40L1440,100L1430,100C1420,100,1400,100,1380,100C1360,100,1340,100,1320,100C1300,100,1280,100,1260,100C1240,100,1220,100,1200,100C1180,100,1160,100,1140,100C1120,100,1100,100,1080,100C1060,100,1040,100,1020,100C1000,100,980,100,960,100C940,100,920,100,900,100C880,100,860,100,840,100C820,100,800,100,780,100C760,100,740,100,720,100C700,100,680,100,660,100C640,100,620,100,600,100C580,100,560,100,540,100C520,100,500,100,480,100C460,100,440,100,420,100C400,100,380,100,360,100C340,100,320,100,300,100C280,100,260,100,240,100C220,100,200,100,180,100C160,100,140,100,120,100C100,100,80,100,60,100C40,100,20,100,10,100L0,100Z"></path></svg>
    </section>

    <section>
        <div class="container-md">
            <div class="text-center pt-5">
                <p class="accent mb-4 fw-bold">SOULIGNÉ</p>
                <h1>ROSE SERVICES</h1>
            </div>

            <div class="row mt-5 g-3">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Téléphone</p>
                            <p>Nous sommes à votre service 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-hot-tub-person"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Jacuzzi extérieur</p>
                            <p>Conçoit spécialement des buses d'eau chaude</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-video"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Vidéosurveillance</p>
                            <p>Les caméras sont allumées 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-wind"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Climatiseurs</p>
                            <p>Chaque appartement dispose d'un chauffage à réglage individuel </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-wifi"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Gratuit WiFi</p>
                            <p>Surfez sur Internet en illimité</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-square-parking"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Terrain de stationnement</p>
                            <p>Disponible pour tous les invités</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-tv"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Smart TV</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-spa"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Spa center</p>
                            <p>C'est toujours le bon moment pour un spa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="facility">
                        <div class="icon"><i class="fa-solid fa-tv"></i></div>
                        <div class="facility-desc">
                            <p class="fw-bold">Câble TV</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/pocetna/ceo-objekat.png" alt="Drvena kuca Ruza" class="img-fluid w-100 objekat-ruza">
        </div>
    </section>

    <section class="background-lightbrown">
        <div class="container-md">
            <div class="text-center pt-5">
                <p class="accent mb-4 fw-bold">DÉTAILS ROSE</p>
                <h1>PLANS D'APPARTEMENT</h1>
            </div>

            <div class="button-row mt-5">
                <button class="active apartman-btn button-1">I</button>
                <button class="apartman-btn button-2" >II</button>
                <button class="apartman-btn button-3">III</button>
                <button class="apartman-btn button-4">IV</button>
            </div>

            <div class="row mt-5 pb-5">
                <div class="col-lg-6 col-12">
                    <div class="apartman-1">
                        <p class="apartman-povrsina">100 m<sup>2</sup></p>
                        <div class="apartman-row">
                            <p>Capacité d’hébergement 6+2</p>
                        </div>
                        <div class="apartman-row">
                            <p>Séjour, 3 chambres, 3 terrasses, sale de bain et wc</p>
                        </div>
                        <div class="apartman-row">
                            <p>2 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry.png" width="40" height="40">
                               2 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry-1.png" width="40" height="40">
                               1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30">
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Cuisine entièrement équipée</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (séjour et chambre)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Télévision par câble</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Chauffage + cheminée à réglage individuel</p>
                        </div>
                        <div class="apartman-row">
                            <p>Peignoirs, chaussons, serviettes</p>
                        </div>
                        <div class="apartman-row">
                            <p>Toilettes, sèche-cheveux, miroir cosmétique</p>
                        </div>
                        <div class="apartman-row">
                            <p>Utilisation du centre SPA (hammam, jacuzzi, sauna, grotte de sel)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Parking gratuit, vidéo surveillance</p>
                        </div>
                        <a href="apartmani.php" class="detaljnije mt-5">SLIKE</a>
                    </div>

                    <div class="apartman-2" style="display: none;">
                        <p class="apartman-povrsina">100 m<sup>2</sup></p>
                        <div class="apartman-row">
                            <p>Smeštajni kapacitet 6+2</p>
                        </div>
                        <div class="apartman-row">
                            <p>Dnevni boravak, 3 sobe, 3 terase, kupatilo i wc</p>
                        </div>
                        <div class="apartman-row">
                            <p>
                                3 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry.png" width="40" height="40">
                                1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30">
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Komplet opremljena kuhinja</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (dnevni boravak / spavaća soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Kablovska TV (dnevni boravak / spavaća soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Individualno kontrolisano grejanje + kamin</p>
                        </div>
                        <div class="apartman-row">
                            <p>Bademantili, papuče, peškiri</p>
                        </div>
                        <div class="apartman-row">
                            <p>Toaleterije, fen za kosu, kozmetičko ogledalo</p>
                        </div>
                        <div class="apartman-row">
                            <p>Korišćenje SPA centra (parno kupatilo, đakuzi, sauna, slana soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Besplatan parking pokriven video nadzorom</p>
                        </div>
                        <a href="apartmani.php" class="detaljnije mt-5">SLIKE</a>
                    </div>

                    <div class="apartman-3" style="display: none;">
                        <p class="apartman-povrsina">42 m<sup>2</sup></p>
                        <div class="apartman-row">
                            <p>Smeštajni kapacitet 4</p>
                        </div>
                        <div class="apartman-row">
                            <p>Dnevni boravak, 1 soba, kupatilo</p>
                        </div>
                        <div class="apartman-row">
                            <p>
                                1 x <img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/50/000000/external-bed-furniture-kiranshastry-solid-kiranshastry.png" width="40" height="40">,
                                1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30"> (francuski + ugaona garnitura na razvlačenje)
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Komplet opremljena kuhinja</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (dnevni boravak / spavaća soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Kablovska TV (dnevni boravak / spavaća soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Individualno kontrolisano grejanje + kamin</p>
                        </div>
                        <div class="apartman-row">
                            <p>Bademantili, papuče, peškiri</p>
                        </div>
                        <div class="apartman-row">
                            <p>Toaleterije, fen za kosu, kozmetičko ogledalo</p>
                        </div>
                        <div class="apartman-row">
                            <p>Korišćenje SPA centra (parno kupatilo, đakuzi, sauna, slana soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Besplatan parking pokriven video nadzorom</p>
                        </div>
                        <a href="apartmani.php" class="detaljnije mt-5">SLIKE</a>
                    </div>

                    <div class="apartman-4" style="display: none;">
                        <p class="apartman-povrsina">24 m<sup>2</sup></p>
                        <div class="apartman-row">
                            <p>Smeštajni kapacitet 3</p>
                        </div>
                        <div class="apartman-row">
                            <p>1 prostorija, kupatilo</p>
                        </div>
                        <div class="apartman-row">
                            <p>
                                1 x <img src="https://img.icons8.com/ios-glyphs/30/000000/sofa.png" width="30" height="30">,
                                1 x <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/000000/external-sofa-furniture-kmg-design-glyph-kmg-design.png" width="30" height="30"> (fotelja na razvlačenje + ugaona garnitura na razvlačenje)
                            </p>
                        </div>
                        <div class="apartman-row">
                            <p>Komplet opremljena kuhinja</p>
                        </div>
                        <div class="apartman-row">
                            <p>Smart TV (dnevni boravak / spavaća soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Kablovska TV (dnevni boravak / spavaća soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>WiFi</p>
                        </div>
                        <div class="apartman-row">
                            <p>Individualno kontrolisano grejanje + kamin</p>
                        </div>
                        <div class="apartman-row">
                            <p>Bademantili, papuče, peškiri</p>
                        </div>
                        <div class="apartman-row">
                            <p>Toaleterije, fen za kosu, kozmetičko ogledalo</p>
                        </div>
                        <div class="apartman-row">
                            <p>Korišćenje SPA centra (parno kupatilo, đakuzi, sauna, slana soba)</p>
                        </div>
                        <div class="apartman-row">
                            <p>Besplatan parking pokriven video nadzorom</p>
                        </div>
                        <a href="apartmani.php" class="detaljnije mt-5">SLIKE</a>
                    </div>
                    
                    </div>
                    <div class="col-lg-6 col-12 mt-lg-0 mt-sm-5 mt-5">
                        <img class="img-fluid" src="images/pocetna/plan.PNG" alt="Plan">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section>
        <div class="container-md pb-5">
            <div class="text-center pt-5 pb-5">
                <p class="accent mb-4 fw-bold">SLIKE I VIDEO SNIMCI</p>
                <h1>RUŽIN ALBUM</h1>
            </div>

            <!-- Carousel -->
            
            <div class="ccarousel">

                <button id="left-indicator" class="indicator"><i class="fa-solid fa-chevron-left"></i></button>
                <button id="right-indicator" class="indicator indicator-right"><i class="fa-solid fa-chevron-right"></i></button>

            </div>
            
            <!--End of carousel-->

        </div>
    </section>

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
                    <a href="login.php" class="footer-link">Administracija</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/bootstrap.js"></script>
    <script src="script/carousel.js"></script>
    <script src="script/apartmani-plan.js"></script>
    <script src="script/dropdown.js"></script>
    
    <!-- <script>
        const snowContainer = document.getElementById("snow-container");
const snowContent = ['&#10052', '&#10053', '&#10054']

const random = (num) => {
  return Math.floor(Math.random() * num);
}

const getRandomStyles = () => {
  const top = random(100);
  const left = random(100);
  const dur = random(10) + 10;
  const size = random(25) + 25;
  return `
    top: -${top}%;
    left: ${left}%;
    font-size: ${size}px;
    animation-duration: ${dur}s;
  `;
}

const createSnow = (num) => {
  for (var i = num; i > 0; i--) {
    var snow = document.createElement("div");
    snow.className = "snow";
    snow.style.cssText = getRandomStyles();
    snow.innerHTML = snowContent[random(3)]
    snowContainer.append(snow);
  }
}

/* const removeSnow = () => {
  snowContainer.style.opacity = "0";
  setTimeout(() => {
    snowContainer.remove()
  }, 500)
} */

window.addEventListener("load", () => {
  createSnow(30)
  setTimeout(removeSnow, (1000 * 60))
});

    </script> -->
</body>
</html>