<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
            <label for="action">Choisissez une action :</label>
            <select name="action" id="action">
                <option value="examiner">Examiner un enclos</option>
                <option value="nourrir">Nourrir les animaux</option>
                <option value="nettoyer">Nettoyer un enclos</option>
                <option value="ajouterAnimal">Ajouter un animal</option>
                <option value="enleverAnimal">Enlever un animal</option>
                <option value="transfererAnimal">Transférer un animal</option>
            </select>

            <label for="enclos">Sélectionnez un enclos :</label>
            <select name="enclos" id="enclos">
            <option value="aquarium">Aquariums</option>
                <option value="voiliere">Voiliere</option>
            
            </select>



            <input type="submit" value="Soumettre">
        </form>
        

</body>
</html>