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
            <section>
                <div class="a-s1-container">
                    <h3>Co se aktuálně děje?</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. </p>
                </div>
            </section>

            <section>
                <div class="mp-s5-container">
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

                        <div class="mp-s5-card">
                            <h5>Co se děje</h5>
                            <div id="letter">C</div>
                            <div class="btn-container">
                                <a class="btn">Více</a>
                            </div>
                        </div>

                        <div class="mp-s5-card">
                            <h5>Jebne mi</h5>
                            <div id="letter">J</div>
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

</html>