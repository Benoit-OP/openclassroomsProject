<?php
session_start(); // On démarre la session AVANT toute chose
?>
 



<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="Style2.css" />
        
        
        <title>Mon compte GBAF</title>
    </head>

    <body>
        
        
                        <header id="header">
            <a href="accueil-GBAF.php"><img id="logo" src="C:/Users/Benoit/Openclassrooms/openclassroomsProject/Logo_GBAF.jpg" class= "logo_petit" alt="logo de GBAF" /></a>
            <div id="user">
                <div class="fas fa-user-tie fa-2x"></div>
                <div id="userLink">
                    <p style="color: white;"> Utilisateur:<?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> </p> <br/>              
                    <p id="deco"><a href="GBAFconnexion?action=logout" style="color: white ; ">Se déconnecter</a></p>
                </div>
                
               
            </div>
        </header>
        
        <main id="account">
    

       
     
        
 

    <section class="form">
        <h2>Changer mon nom d'utilisateur</h2>
        <form method="post">
            <input type="hidden" name="account_form" value="username" />
            <p><label for="username">Nom d'utilisateur : </label><br /><input type="text" name="username" id="username" value="benoit14" /></p>
            <p class="error"></p>
            <p class="confirm"></p>
            <input type="submit" value="Valider les changements">
        </form>
    </section>

    <section class="form">
        <h2>Changer mon mot de passe</h2>
        <form method="post" novalidate>
            <input type="hidden" name="account_form" value="password" />
            <p><label for="newpass">Mon nouveau mot de passe : </label><br /><input type="password" name="newpass" id="newpass" required /></p>
            <p class="error"></p>
            <p><label for="checkpass">Confirmation du nouveau mot de passe : </label><br /><input type="password" name="checkpass" id="checkpass" required /></p>
            <p class="error"></p>
            <p class="confirm"></p>
            <input type="submit" value="Valider les changements">
        </form>
    </section>

    <section class="form">
        <h2>Changer mon nom</h2>
        <form method="post" novalidate>
            <input type="hidden" name="account_form" value="lastname" />
            <p><label for="lastname">Nom : </label><br /><input type="text" name="lastname" id="lastname" value="PERUSSEL" /></p>
            <p class="error"></p>
            <p class="confirm"></p>
            <input type="submit" value="Valider les changements">
        </form>
    </section>

    <section class="form">
        <h2>Changer mon prénom</h2>
        <form method="post" novalidate>
            <input type="hidden" name="account_form" value="firstname" />
            <p><label for="firstname">Prénom : </label><br /><input type="text" name="firstname" id="firstname" value="Benoît" /></p>
            <p class="error"></p>
            <p class="confirm"></p>
            <input type="submit" value="Valider les changements">
        </form>
    </section>

    <section class="form">
        <h2>Changer ma question secrète et ma réponse</h2>
        <form method="post" novalidate>
            <input type="hidden" name="account_form" value="questionAnswer" />
            <p><label for="question">Ma nouvelle question : </label><br /><input type="text" name="question" id="question" value="" required /></p>
            <p class="error"></p>
            <p><label for="answer">Ma nouvelle réponse : </label><br /><input type="text" name="answer" id="answer" value="" required /></p>
            <p class="error"></p>
            <p class="confirm"></p>
            <input type="submit" value="Valider les changements">
        </form>
    </section>

</main>


        <footer class="site-footer">
            <p class="mentions">Mentions légales | Contact</p>
        </footer>
    </body>
</html>
