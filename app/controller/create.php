<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=examphp;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include("./app/model/Team.php");

    if(!empty($_POST)){
        move_uploaded_file ($_FILES["logo"]["tmp_name"], "./app/view/assets/images/".$_FILES["logo"]["name"] );
        if(isset($_POST["name"]) && $_POST["name"] != ""){
            if(isset($_POST["victory"]) && $_POST["victory"] != ""){
                if(isset($_POST["draw"]) && $_POST["draw"] != ""){
                    if(isset($_POST["defeat"]) && $_POST["defeat"] != ""){
                        if(isset($_POST["goal"]) && $_POST["goal"] != ""){
                            if(isset($_POST["conceded"]) && $_POST["conceded"] != ""){
                                if(isset($_FILES) && $_FILES != "")
                                Team::createTeam($bdd, $_POST["name"], $_POST["victory"], $_POST["draw"], $_POST["defeat"], $_POST["goal"], $_POST["conceded"], $_FILES["logo"]["name"]);
                                header("Location:index.php");
                            }
                        }
                    }
                }
            }
        }
    }

    include("./app/view/page/create.php");


}catch(PDOException $e){
    echo $e->getMessage();
}
