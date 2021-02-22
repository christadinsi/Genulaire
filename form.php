<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>formulaire de connexion</title>
</head>

<body>

    <?php include('config.php');?>
    <div class="bloc">
        <h1>
            <?=$form['titre']?>
        </h1>
        <form <?php  foreach ($form['attributs'] as $cle=> $valeur) {
            echo $cle .'='.'"'.$valeur.''.'" ';
            }?>>

            <div>
                <label for="email">Adresse e-mail</label><br>
                <input type="email" id="email" name="email">
                <p>Veillez renseigner une adresse mail valide </p>
            </div>
            <div>
                <label for="pwd">Mot de passe</label><br>
                <input type="password" id="pwd" name="pwd">
            </div>
            <div>
                <input class="submit" type="submit" value=" <?=$form['bouton']?>">
            </div>
        </form>
    </div>
</body>

</html>