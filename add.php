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
  <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Intégrer l'animal en BDD</h1>
                <form action="create.php" method="post" class="form">
                    <div class="form-group">
                        <label for="espece">Espèce</label>
                        <input name="espece" input id="formEspece" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input name="nom" input id="formNom" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="taille">Taille</label>
                        <input name="taille" input id="formTaille" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="poids">Poids</label>
                        <input name="poids" input id="formPoids" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date_de_naissance">Date de naissance</label>
                        <input name="date_de_naissance" input id="formDate" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pays">Pays d'origine</label>
                        <input name="pays_origine" input id="formPays" type="text" class="form-control">
                    </div>
                    <div class="form-group">Sexe :<p><p>
                        <select name="sexe">
                        <option value="1">Mâle</option>
                            <option value="0">Femme</option>
                        </select>
                    </div>
                        <br>
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Ajoutez !">
                </form>
            </div>
        </div>
    </div> 
</body>
</html>