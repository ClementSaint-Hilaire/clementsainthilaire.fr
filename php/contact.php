<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/contact.css">  
    <title>cards - csh</title>
</head>
<body>

    <?php include './navbar.php'; ?>

    <section class="contact">
        <form action="../configuration/mailer.php" method="post" class="formulaireDeContact">
            <div class="formulaireDeContactHead">
                <div class="feurouge"></div>
                <div class="feuorange"></div>
                <div class="feuvert"></div>
                <h1>Nouveau message</h1>
            </div>
            <div class="formulaireDeContactInfo">
                <div class="formulaireDeContactInfoContainer">
                    <div class="formulaireDeContactInfoEmail">
                        <label for="email"><h1>Email :</h1></label>
                        <input type="email" name="email" placeholder="Entrez votre email" required>
                    </div>
                    <span class="ligne"></span>
                    <div class="formulaireDeContactInfoNom">
                        <label for="nom"><h1>Nom :</h1></label>
                        <input type="text" name="nom" placeholder="Entrez votre nom">
                    </div>
                    <span class="ligne"></span>
                    <div class="formulaireDeContactInfoSujet">
                        <label for="sujet"><h1>Sujet :</h1></label>
                        <input type="text" name="sujet" placeholder="Entrez votre sujet">
                    </div>
                </div>
            </div>
            <div class="formulaireDeContactMessage">
                <div class="formulaireDeContactMessageBox">
                    <label for="message"></label>
                    <textarea name="message" placeholder="Entrez votre message..." required></textarea>
                </div>
            </div>
            <button class="boutonEnvoyer">Envoyer</button>
        </form>
    </section>

</body>
</html>