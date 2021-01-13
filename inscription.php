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
            <a href="#"><img src="Images/Logo_GBAF.jpg" class="logo_petit" alt="logo de GBAF" /></a>
            
					        </header>
					                
					        
					    <section >
					      
			 <div>

					        <h1>Inscription</h1>

	<br /><br /> 

			


	<br />
					       
				<form method="POST" action="inscription_post.php">

				<table>	
				<tr>
					<td align="right">	<label for="nom"><strong>Votre Nom : </strong></label> </td>
					<td>				<input type="text" id="nom" name=nom/> </td>
				</tr>
				<tr>
					<td align="right">	<label for="prenom"><strong>Votre prénom: </strong></label> </td>
					<td>				<input type="text" id="prenom" name=prenom/> </td>
				</tr>			
				<tr>	
					<td align="right">	<label for="pseudo"><strong>Pseudo:</strong> </label> </td>
					<td>				<input type="text" id="pseudo" name=pseudo/> </td>
				</tr>
				<tr>	
					<td align="right">	<label for="password"><strong>Mot de passe:</strong></label> </td>
					<td >				<input type="password" id="password" name=passeword/> </td>
				</tr>
				<tr>	
					<td align="right">	<label for="question"><strong>Votre question secrète: </strong> </label> </td>
					<td>				<input type="text" id="question" name=question/> </td>
				</tr>
				<tr>
					<td align="right">	<label for="reponse"><strong>Réponse à la question secrète:</strong> </label></td>
					<td>				<input type="text" id="reponse" name=reponse> </td>
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" name="forminscription" class="inscription" value="Je m'inscris"/> </td>
					</tr>
				</table>
									
				<?php 

				if(isset($erreur))
				{
					echo $erreur;
				}
			?>

				</form>	
			<br />	
				

			 </div>





					        
					    </section>

        <footer class="site-footer">
            <p class="mentions">Mentions légales | Contact</p>
        </footer>
    </body>
</html>
