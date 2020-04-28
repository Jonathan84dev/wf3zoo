<?

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "INSERT INTO animal (espece, nom, taille, poids, date_de_naissance, pays_origine, sexe) VALUES ( :espece, :nom, :taille, :poids, :date_de_naissance, :pays_origine, :sexe)";
$response = $bdd->prepare($request);
$response->execute([
    'espece' => $_POST['espece'],
    'nom' => $_POST['nom'],
    'taille' => $_POST['taille'],
    'poids' => $_POST['poids'],
    'date_de_naissance' => $_POST['date_de_naissance'],
    'pays_origine' => $_POST['pays_origine'],
    'sexe' => $_POST['sexe'],
]);

header('Location: index.php'); 

/* methode non paramètrée (faille SQL, à éviter)

 $bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=3306', 'root', 'root');
$request = "INSERT INTO animal (espece, nom, taille, poids, date_de_naissance, pays_origine,sexe) 
VALUES ('".$_POST['espece']."', '".$_POST['nom']."','".$_POST['taille']."',  '".$_POST['poids']."',  '".$_POST['date_de_naissance']."',  '".$_POST['pays_origine']."','".$_POST['sexe']."')";
var_dump($request);
$response = $bdd->query($request);
h*/
?>