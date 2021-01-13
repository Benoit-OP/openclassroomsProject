<?php
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 


   			if(isset($_POST['forminscription'])) 
{
		      				

      			if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty($_POST['question']) AND !empty($_POST['reponse']))
    {  				 
    						$pseudolenght = strlen($pseudo);
    			

 							$nom = htmlspecialchars($_POST['nom']);
		      				$prenom = htmlspecialchars($_POST['prenom']);
		      				$pseudo = htmlspecialchars($_POST['pseudo']);
		      				$password = htmlspecialchars($_POST['password']);
		      				$question = htmlspecialchars($_POST['question']);
		      				$reponse = htmlspecialchars($_POST['reponse']);


    				if($pseudolenght <= 255)
    	{								
    							$insert_membre = $bdd->prepare("INSERT INTO membre(nom, prenom, pseudo, password, question, reponse) VALUES(?, ?, ?, ?, ?, ?)");
    							$insert_membre->execute(array($nom, $prenom, $pseudo, $password, $question, $reponse));
    							$erreur = "Votre compte a bien été crée!";
    							
    	}			
    				else
    				{
    					$erreur = "Votre pseudo ne doit pas dépasser 255 caractères!";
    				}

    			else
    			{
    				$erreur = "Tous les champs doivent être remplis!";
    			}	
    }			
}


?>	