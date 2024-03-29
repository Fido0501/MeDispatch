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
        <link rel="icon" type="image/x-icon" href="./img/icons/icon.svg">

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
            <section class="v-s1">
                <div class="v-s1-container">
                    <h3>Varování</h3>
                    <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Et harum quidem rerum facilis est et expedita distinctio. Nam quis nulla. Integer in sapien. </div>
                </div>
            </section>

            <img src="" alt="">
            
            <img src="./img/img/v1.svg" alt="v1" class="mp-s2-p2">

            <section class="form">
                <form action="">
                    <label for="name">Jméno a příjmení</label>
                    <input type="text" id="fname" name="name" placeholder="Vaše jméno a příjmení" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Váš email" required>

                    <label for="phone">Telefonní číslo</label>
                    <input type="number" id="phone" name="phone" placeholder="XXXXXXXXX" required>

                    <div class="btn-container">
                        <a id="modal-btn" class="btn">Potvrdit</a>
                    </div>  
                </form>
            </section>

            <div id="modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h3>Potvrzeno!</h3>
                    <div class="text">Vaše údaje byly odeslány. Vyčkejte na potvrzovací email, který vám zpřístupní aplikaci.</div>
                    <div class="btn-container">
                        <a href="http://app.medispatch.cz" class="btn">Přejít na přihlášení do aplikace</a>
                    </div>  
                </div>
            </div>

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
    <script src="./js/modal.js"></script>

</html>