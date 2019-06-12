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
        <label for="name">nom :</label>
        <input type="text" name="name" id="name"><br><br>
        
        <label for="capacite">capacite :</label>
        <input type="text" name="capacite" id="capacite"><br><br>

        <label for="photo">photo :</label>
        <input type="text" name="photo" id="photo"><br><br>

        <input type="submit" value="Ajouter">

    </form>
</body>
</html>