<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
       	<link rel="stylesheet" type="text/css" href="Style2.css">
        <title>GBAF, inscription des adhérents</title>
    </head>

    <body>
        
        
         <!-- -->
        <header id="header_form">
            <a href="#"><img src="C:/Users/Benoit/Openclassrooms/openclassroomsProject/Logo_GBAF.jpg" class="logo_petit" alt="logo de GBAF" /></a>
            
        </header>
                
        
    <section class="form">
        <h1>Inscription</h1>
        <form action="accueil-GBAF.php" method="POST">
            <input type="hidden" name="register_form" value="register" />

            <p><label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" value="" required /></p>
            <p class="error"></p>

            <p><label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" value=""required /></p>
            <p class="error"></p>

            <p><label for="username">Nom d'utilisateur : </label><input type="text" name="username" id="username" value="" required /></p>
            <p class="error"></p>

            <p><label for="pass">Mot de passe :</label><input type="password" name="pass" id="pass" required /></p>
            <p class="error"></p>

            <p><label for="checkpass">Confirmation du Mot de passe :</label><input type="password" name="checkpass" id="checkpass" required /></p>
            <p class="error"></p>

            <p><label for="question">Question secrète : </label><input type="text" name="question" id="question" value="" required /></p>
            <p class="error"></p>

            <p><label for="answer">Réponse à la question secrète : </label><input type="text" name="answer" id="answer" value="" required /></p>
            <p class="error"></p>

            <p><input type="submit" value="Valider" /></p>
        </form>
    </section>

        <footer class="site-footer">
            <p class="mentions">Mentions légales | Contact</p>
        </footer>
    </body>
</html>
