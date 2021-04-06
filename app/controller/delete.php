<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=examphp;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include("./app/model/Team.php");

    if(isset($_GET["id"]) && $_GET["id"] != ""){
        $teamToDelete = Team::getTeam($bdd, $_GET["id"]);
        if($teamToDelete != null){
            Team::deleteTeam($bdd, $_GET["id"]);
            header("Location:index.php");
        }else {
            header("Location:index.php");
        }
    }


}catch(PDOException $e){
    echo $e->getMessage();
}
