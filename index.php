<!DOCTYPE html>
<html lang="cs">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- link -->
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/style.css">

        <!-- title -->
        <title>MeDispatch</title>
    </head>
    <body>
        <!-- Header -->
        <header>
            <?php
                include "partials/header.php";
            ?>
        </header>

        <!-- Main --> 
        <main>
            <section class="mp-s1">
                <div class="mp-s1-container">
                    <h1>Informační systém</h1>
                    <h2>Záchranné služby</h2>
                    <h6>Na zemi, V horách, Ve vzduchu,  Na vodě.</h6>
                    <a href="#zjistit-vice" class="btn btn2 mp-s1-btn">Zjistit více</a>
                </div>
                <img src="./img/img/p1.svg" alt="p1" class="mp-s1-p1">
            </section>

            <hr>

            <section class="mp-s2">
                <div class="mp-s2-container">
                    <h3 id="zjistit-vice">Co to je MeDispatch?</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. In rutrum.</p>
                    <div class="btn-container">
                        <a href="#o-nas" class="btn btn2">O nás</a>
                        <a href="vyzkouset.php" class="btn">Vyzkoušet</a>
                    </div>  
                </div>
                <img src="./img/img/p2.svg" alt="p2" class="mp-s2-p2">
            </section>

            <hr>

            <section class="mp-s2">
                <div class="mp-s2-container">
                    <h3 id="o-nas">Kdo jsme?</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. In rutrum.</p>
                    <div class="btn-container">
                        <a href="kontakt.php" class="btn">Kontaktovat</a>
                    </div>  
                </div>
                <img src="./img/img/p2.svg" alt="p2" class="mp-s2-p2">
            </section>

            <hr>

            <section class="mp-s2">
                <div class="mp-s2-container">
                    <h3>Proč?</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. In rutrum.</p>
                </div>
                <img src="./img/img/p2.svg" alt="p2" class="mp-s2-p2">
            </section>

            <hr>

            <section class="mp-s3">
                <div class="mp-s3-container">
                    <h3 id="jak-to-funguje">Jak to funguje?</h3>
                    <div class="mp-s3-card-container">
                        <div class="mp-s3-card">
                            <img src="./img/img/gps.png" alt="poloha">
                            <h4>POLOHA</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. </div>
                        </div>

                        <div class="mp-s3-card">
                            <img src="./img/img/time-left.png" alt="čas">
                            <h4>ČAS</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. </div>
                        </div>

                        <div class="mp-s3-card">
                            <img src="./img/img/speedometer.png" alt="rychlost">
                            <h4>RYCHLOST</h4>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mp-s4">
                <div class="mp-s4-container">
                    
                    <div class="mp-s4-countdown-content">
                        <div class="mp-s4-hd">Do vydání aplikace zbývá:</div>
                        <div id="time" class="mp-s4-time"></div>
                    </div>
            
                </div>
            </section>

            <section class="mp-s5">
                <div class="mp-s5-container">
                    <h3>Zajišťuje komunikaci</h3>
                    <div class="mp-s5-cards">
                        <div class="mp-s5-card card-1">
                            <div class="mp-s5-card-hd">Na zemi</div>
                        </div>

                        <div class="mp-s5-card card-2">
                            <div class="mp-s5-card-hd">V horách</div>
                        </div>

                        <div class="mp-s5-card card-3">
                            <div class="mp-s5-card-hd">Na vodě</div>
                        </div>

                        <div class="mp-s5-card card-4">
                            <div class="mp-s5-card-hd">Ve vzduchu</div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <a href="vyzkouset.php" class="btn btn2">Vyzkoušet</a>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer>
            <?php
                include "partials/footer.php";
            ?>
        </footer>
    </body>

    <!-- Scripts -->
    <script src="./js/nav.js"></script>
    <script src="./js/countdown.js"></script>

</html>