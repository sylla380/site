<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo htmlentities($title); ?></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <form action="" method="post">
        <label for="nomFormation">Formation :</label>
        <input type="text" name="nomFormation" id="nomFormation" value="<?= $contact->nomFormation ?>"><br><br>
        
        <label for= "date">Date :</label>
        <input type="text" name="date" id="date" value="<?= $contact->date ?>"><br><br>

        <label for="poste">Poste :</label>
        <input type="text" name="poste" id="poste" value="<?= $contact->poste ?>"><br><br>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" value="<?= $contact->ville ?>"><br><br>

        <input type="submit" value="Edite">

    </form>
</body>
</html>