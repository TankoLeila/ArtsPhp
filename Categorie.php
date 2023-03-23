
<?php 
include ("./db.php");
// print_r($_POST);

if (isset ($_POST ["Register"]) ){
    $Code = $_POST ["categoriecode"];
    $Libelle =$_POST ["categoriename"];

    $requete = "INSERT INTO Categorie(codeCat,libelleCat) values (?,?)";

    $statement = $pdo->prepare ($requete);
    $statement -> execute ([$Code,$Libelle]);
    echo ("Insertion categorie with success!!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signUpDriverStyle.css">
    <link rel="stylesheet" href="./categorie.css">
    <link rel = "stylesheet" href= "nav.css">
    <title>Categorie form</title>
</head>
<body>





    <form method="POST" action= " ">

        <h2>Car Categories</h2>

        <div class="spaceCategorie">
            <input type="text" name="categoriecode" placeholder="Enter Categorie code" class="inputText"/>
            <input type="text" name="categoriename" placeholder="Enter Categorie name" class="inputText"/>
            
        </div>

        <input type="submit" name="Register" class="btnSubmit"/>

    </form>
</body>
</html>