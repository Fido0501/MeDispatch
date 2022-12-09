<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- link -->
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/style.css">

        <!-- title -->
        <title>Žluty Dežo</title>
    </head>
    <body>
        <!-- Header -->
        <header>
            <?php
                include "partials/header.php";
            ?>
        </header>

        <!-- Main -->
        <section>
            <div class="s1">
                <div class="dev"></div>
                <h1>WEBDESIGNER</h1>
                <h1>WEBDEVELPOER</h1>
                <div class="dev"></div>
                <div class="scroll-container">
                    <div class="scroll">Scroll down</div>
                    <div class="scroll-icon"></div>
                </div>
            </div>
        </section>

        <section class="s2">
            <div class="s2-container">
                <div class="s2-content">
                    <h6>About me</h6>
                    <div class="dev2"></div>
                    <div class="s2-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam ornare wisi eu metus. Etiam bibendum elit eget erat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="button-container">
                        <div class="pri-btn">Projects</div>
                        <div class="sec-btn">Contact me</div>
                    </div>
                </div>
                <img class="s2-img" src="/img/picture.png" alt="">
            </div>
        </section>

        <section>
            <div class="s3">
                <div class="s3-hd">SKILLZ</div>
                <div class="dev3"></div>
                <div class="s3-container">
                    <div class="s3-column">
                        <div class="item">cd</div>

                    </div>
                    <div class="s3-column">
                        <div class="item">cd</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <?php
                include "partials/footer.php";
            ?>
        </footer>
    </body>
</html>