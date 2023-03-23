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
                    <a class="btn mp-s1-btn">Zjistit více</a>
                </div>
                <img src="./img/img/p1.svg" alt="p1" class="mp-s1-p1">
            </section>

            <hr>

            <section class="mp-s2">
                <div class="mp-s2-container">
                    <h3>Co to je MeDispatch?</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. In rutrum.</p>
                    <div class="btn-container">
                        <a class="btn btn2">O nás</a>
                        <a class="btn">Zjistit více</a>
                    </div>  
                </div>
                <img src="./img/img/p2.svg" alt="p2" class="mp-s2-p2">
            </section>

            <hr>

            <section>
                <div class="mp-s3-container">
                    <h3>Zajišťuje komunikaci</h3>
                    <div class="mp-s3-cards">
                        <div class="mp-s3-card card-1">
                            <div class="mp-s3-card-hd">Na zemi</div>
                        </div>

                        <div class="mp-s3-card card-2">
                            <div class="mp-s3-card-hd">V horách</div>
                        </div>

                        <div class="mp-s3-card card-3">
                            <div class="mp-s3-card-hd">Na vodě</div>
                        </div>

                        <div class="mp-s3-card card-4">
                            <div class="mp-s3-card-hd">Ve vzduchu</div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <a class="btn">Vyzkoušet</a>
                    </div>
                </div>
            </section>

            <section style="width:100%;">
                <div class="mp-s4-container">
                    <!--
                    <img src="./img/img/cd_l.png" alt="countdown_left" class="mp-s4-img">
                    -->
                    <div class="mp-s4-countdown-content">
                        <div class="mp-s4-hd">Už se to blíží</div>
                        <div id="demo" class="mp-s4-time"></div>
                    </div>
                    <!--
                    <img src="./img/img/cd_r.png" alt="countdown_right" class="mp-s4-img">  
                   -->
                </div>
            </section>

            <section>
                <div class="mp-s5-container">
                    <h3>Aktuálně</h3>
                    <div class="mp-s5-cards">
                        <div class="mp-s5-card">
                            <h5>Už to bude</h5>
                            <div id="letter">U</div>
                            <div class="btn-container">
                                <a class="btn">Více</a>
                            </div>
                        </div>

                        <div class="mp-s5-card">
                            <h5>Testuju písmenka</h5>
                            <div id="letter">T</div>
                            <div class="btn-container">
                                <a class="btn">Více</a>
                            </div>
                        </div>

                        <div class="mp-s5-card">
                            <h5>Snad to bude fungovat</h5>
                            <div id="letter">S</div>
                            <div class="btn-container">
                                <a class="btn">Více</a>
                            </div>
                        </div>

                        <div class="mp-s5-card">
                            <h5>Pomoc, já už to nezvládám</h5>
                            <div id="letter">P</div>
                            <div class="btn-container">
                                <a class="btn">Více</a>
                            </div>
                        </div>
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