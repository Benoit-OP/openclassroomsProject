<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8"/>
        <title>GBAF, Groupement banques et assurances</title>
        <link rel="stylesheet" href="Style2.css">
    </head>

    <body>
        
    <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
    
        
        
        
        <div id="bloc_page">
    
            <header class="site-header">

                <img src="C:/MAMP/htdocs/test/GBAF/ImagesLogo_GBAF.jpg" class= "logo_petit" alt= "Logo"/>

                
             </header>
                   
             <img src="C:/MAMP/htdocs/test/GBAF/Imagesbannière.jpg" class="banniere" alt="Bannière du site"/>
            <br/>
             

                <br/>
                <br/>
                <h1>Bienvenue sur le Groupement Banques et Assurances Français</h1>
            <!-- Insérer une image de présentation / bannière -->
            <p>Salut <?php echo $_SESSION['prenom']; ?> !<br />
            Tu es à l'accueil de mon site. Tu peux aller sur ta page compte <a href="Page-compte.php">ici.</a> </p>


    <section id='presentation'>        
            
                 <h2>Qu'est-ce que GBAF?</h2>
                 <p>Le Groupement Banque Assurance Français​ (GBAF) est une fédération  représentant les 6 grands groupes français:</p>
                <br/>
                 <ul>
                     <li>BNP Paribas</li>		
                     <li>Crédit Agricole</li>
                     <li>La Banque Postale</li>
                     <li>BPCE</li>
                     <li>Crédit Mutuel-CIC</li>
                     <li>Société Générale</li>

                 </ul>
                <br/>    
                 <p>Même s’il existe une forte concurrence entre ces entités, elles vont toutes  
                    travailler de la même façon pour gérer près de 80 millions de comptes sur le territoire national.
                    Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. 
                    Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.
                </p>
    
    </section>       

    <section id="acteurs">
                <h2>Acteurs et partenaires</h2>
    
        <br/>   
                <div id="alignement">
                <p><img src="C:/Users/Benoit/Openclassrooms/openclassroomsProject/formation_co.png" alt="Logo Formation&co"/></p>
                <p class="centrage">    Formation&co est une association française présente sur tout le territoire...
                </p>
            <form action="formation_co.php">    
                <p><button class="suite" type="submit"> Lire la suite </button> </p>     
            </form>
                </div>  
        <br/> 
                <div id="alignement">  
                <p> <img src="C:Users/Benoit/Openclassrooms/openclassroomsProject/protectpeople.png" alt="Logo ProtectPeople"/> </p>
                 <p class="centrage">Chez Protectpeople, chacun cotise selon ses moyens et reçoit... </p>  
            <form action="Page_protectpeople.php">     
                 <p><button class="suite" type="submit"> Lire la suite </button> </p>
            </form>    
                </div> 

        <br/>        
               <div id="alignement">
                <p><img src="C:Users/Benoit/Openclassrooms/openclassroomsProject/Dsa_france.png" alt="Logo DSA France"/></p>
                <p class="centrage">    Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales. Nous accompagnons...</p>                  
            <form action="Page_DSA.php">
                <p><button class="suite" type="submit"> Lire la suite </button> </p>
            </form>
                </div>
        <br/>
                <div id="alignement">
                <p><img src="C:Users/Benoit/Openclassrooms/openclassroomsProject/CDE.png" alt="Logo CDE"/></p>
                <p class="centrage">   La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches... </p>   
            <form action="Page_CDE.php">    
                <p><button class="suite" type="submit"> Lire la suite </button> </p>
            </form>
                 </div>
                   
                

               </div> 
           
        </div>     
    </section>   














        </main>
 
       
       
    </div>    
        <footer class="site-footer">
           <p class="mentions"> Mentions légales | Contacts</p> 
            


        </footer>
    
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>


 
    </body>
</html>