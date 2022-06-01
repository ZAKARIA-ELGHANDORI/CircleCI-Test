<?php 
session_start();


?>

<h1>Bonjour </h1>
<h3> Votre nom est : <?php echo $_GET['nom'] ?> </h3>  
<h3> Votre prenom est : <?php echo $_GET['prenom'] ?> </h3>  
<h3> Votre email est : <?php echo $_GET['email'] ?> </h3>  
<h3> Votre age est : <?php echo $_GET['Age'] ?> </h3>  

<h4><a href="Formulaire.php">Retourner a la page d'inscriptions</a></h4>

 <h3><a href="logout.php" style="border : 1px solid black; padding : 4px; text-decoration : none; margin-left: 3cm;
      background-color : #FF0000;">LOGOUT</a></h3>

   
   