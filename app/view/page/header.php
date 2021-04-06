<!doctype html>   
<html lang="fr"> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./app/view/assets/css/index.css" media="all">
    <title>examPhP</title>
</head> 
<body>
    <div class="container text-center">
        <div class="row">
            <?php
            if(isset($_GET["p"]) && $_GET["p"] != "login"){
                echo '<a class="btn btn-dark" href="http://localhost/examPhP/index.php?p=login">Connexion</a>';

                if(isset($_SESSION["user"]) && $_SESSION["user"] != ""){
                    echo '<a class="btn btn-dark" href="http://localhost/examPhP/index.php?p=create">Créer une équipe</a>';
                    echo '<a class="btn btn-dark" href="http://localhost/examPhP/index.php?checkDeco=true">Déco</a>';
                }
            }else if(!isset($_GET["p"])) {
                echo '<a class="btn btn-dark" href="http://localhost/examPhP/index.php?p=login">Connexion</a>';

                if(isset($_SESSION["user"]) && $_SESSION["user"] != ""){
                    echo '<a class="btn btn-dark" href="http://localhost/examPhP/index.php?p=create">Créer une équipe</a>';
                    echo '<a class="btn btn-dark" href="http://localhost/examPhP/index.php?checkDeco=true">Déco</a>';
                }
            }?>
        </div>
    </div>


