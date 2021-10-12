<?php
    $resultat=require_once("bakend.php");
    $id = $_GET['id'];
    $req=$pdo->prepare("SELECT * FROM personnages WHERE id=$id");
    $req->execute();
    $historie=$req->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="media.css">
    <title>Les grands personnages du Numerique</title>
</head>
<body style="font-size: 1.3em;">
    <section>
      <div class="containercontenu">
        <p>Biographie</p>
        <p> <img src="<?= $historie['nom_image'] ;?>" alt=""> </p>
        <p>
          <?= $historie['historique'] ;?>
        </p>
      </div>
    </section>
    <form>
       <input type="button" value="Retour" onclick="history.go(-1)">
    </form>
</body>
</html>