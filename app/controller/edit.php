<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=examphp;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include("./app/model/Team.php");

    $teamToEdit = null;

    if(isset($_GET["id"]) && $_GET["id"] != ""){
        $teamToEdit = Team::getTeam($bdd, $_GET["id"]);
        if(!empty($_POST)){
            if(isset($_POST["name"]) && $_POST["name"] != ""){
                if(isset($_POST["victory"]) && $_POST["victory"] != ""){
                    if(isset($_POST["draw"]) && $_POST["draw"] != ""){
                        if(isset($_POST["defeat"]) && $_POST["defeat"] != ""){
                            if(isset($_POST["goal"]) && $_POST["goal"] != ""){
                                if(isset($_POST["conceded"]) && $_POST["conceded"] != ""){
                                    Team::editTeam($bdd, $_GET["id"], $_POST["name"], $_POST["victory"], $_POST["draw"], $_POST["defeat"], $_POST["goal"], $_POST["conceded"]);
                                    header("Location:index.php");
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    include("./app/view/page/edit.php");

} catch (PDOException $e) {
    echo $e->getMessage();
}

