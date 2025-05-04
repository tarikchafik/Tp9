<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Inscription</title> 
    
    <link rel="stylesheet" href="style.css">

    
</head> 
<body> 

    <h2>Inscription</h2> 

    <form action="affichage.php" method="POST"> 
        <label>Nom :</label> 
        <input type="text" name="nom" required> <br><br>
    

        <label>Prénom :</label> 
        <input type="text" name="prenom" required> <br><br>

        <label>Groupe :</label> 
        <input type="number" name="group" required min="0"> <br><br>

        <label>Sujet :</label> 
        <input type="text" name="sujet" required> <br><br>

        <label>Date début :</label> 
        <input type="date" name="date_debut" required> <br><br>

        <label>Date fin :</label> 
        <input type="date" name="date_fin" required> <br><br>

        <label>Encadrement :</label> 
        <input type="text" name="encadrement" required> <br><br>

        <input type="submit" value="Envoyer"> <br><br>
        <input type="reset" value="Annuler"> <br><br>
    </form> 

</body> 
</html>
