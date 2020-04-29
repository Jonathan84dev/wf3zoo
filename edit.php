<!doctype html>
<html lang="en">
  <head>
    <title>Creation d'un animal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php
$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$animalID=$_GET ['id'];
$request = "SELECT * FROM animal WHERE id = " . $animalID;
$response = $bdd->query($request);
$animals = $response->fetch(PDO::FETCH_ASSOC);
?>

  <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Modifier l'animal en BDD</h1>
                <form action="update.php" method="post" class="form">
                <input type="hidden" name='id' value='<?=$animalID ?>'>
                    <div class="form-group">
                        <label for="espece">Espèce</label>
                        <input name="espece" input id="formEspece" type="text" class="form-control" value="<?= $animals['espece'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input name="nom" input id="formNom" type="text" class="form-control" value="<?= $animals['nom']?>">
                    </div>
                    <div class="form-group">
                        <label for="taille">Taille</label>
                        <input name="taille" input id="formTaille" type="number" class="form-control" value="<?= $animals['taille']?>">
                    </div>
                    <div class="form-group">
                        <label for="poids">Poids</label>
                        <input name="poids" input id="formPoids" type="number" class="form-control" value="<?= $animals['poids']?>">
                    </div>
                    <div class="form-group">
                        <label for="date_de_naissance">Date de naissance</label>
                        <? $strtotime=strtotime($animals['date_de_naissance']) ;
                            $date=date('Y-m-d',$strtotime); ?>
                        <input name="date_de_naissance" input id="formDate" type="date" class="form-control" value="<?= $date?>">
                    </div>
                    <div class="form-group">
                        <label for="pays">Pays d'origine</label>
                        <input name="pays_origine" input id="formPays" type="text" class="form-control" value="<?= $animals['pays_origine']?>">
                    </div>
                    <div class="form-group">Sexe :<p><p>
                        <select name="sexe">
                    <option value="1" <? if($animals['sexe']==1){echo "selected";} ?>>Mâle</option>
                    <option value="0" <? if($animals['sexe']==0){echo "selected";} ?>>Femelle</option>
                        </select>
                    </div>
                        <br>
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Modifiez votre sélection">
                </form>
            </div>
        </div>
    </div> 
</body>
</html>