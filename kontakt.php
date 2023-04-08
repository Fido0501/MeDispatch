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
            <section class="k-s1">
                <h3>Kontakt</h3>
                <div class="k-s1-container">
                    <div class="k-card">
                        <h3>Jakub Kohoutek</h3>
                        <h6>Student SPŠ Brno Purkyňova 97</h6>
                        <div class="k-card-text">+420 000 000 000</div>
                        <div class="k-card-text">kohoutek.jakub@purkynka.cz</div>
                        <img class="k-photo" src="./img/img/kuba.png" alt="">
                        <div class="btn-container">
                            <div class="btn btn2">Kontaktovat</div>
                        </div>
                    </div>

                    <div class="k-card">
                        <h3>Filip Křivánek</h3>
                        <h6>Student SPŠ Brno Purkyňova 97</h6>
                        <div class="k-card-text">+420 000 000 000</div>
                        <div class="k-card-text">krivanek.filip@purkynka.cz</div>
                        <img class="k-photo" src="./img/img/filip.jpg" alt="">
                        <div class="btn-container">
                            <div class="btn btn2">Kontaktovat</div>
                        </div>
                    </div>
                </div>
            </section>

            <img src="" alt="">

            <section class="form">
                <form action="">
                    <label for="name">Jméno a příjmení</label>
                    <input type="text" id="fname" name="name" placeholder="Vaše jméno a příjmení" >

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Váš email" >

                    <label for="text">Zpráva</label>
                    <textarea type="number" id="email" name="textarea" placeholder="Zde pište..." ></textarea>
                
                    <input value="Potvrdit" id="modal-btn">
                </form>
            </section>

            <div id="modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h3>Odesláno!</h3>
                    <div class="text">Vaše zpráva byla odeslána. Děkujeme.</div>
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