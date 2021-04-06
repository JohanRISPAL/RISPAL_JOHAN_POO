<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=examphp;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include("./app/model/User.php");

    if(!empty($_POST)){
        if(!empty($_POST["login"]) && !empty($_POST["password"])){
            User::checkUserExist($bdd, $_POST["login"], $_POST["password"]);

            if(isset($_SESSION["user"]) && $_SESSION["user"] != ""){
                header("Location:index.php");
            }
        }
    }

    include("./app/view/page/login.php");


}catch(PDOException $e){
    echo $e->getMessage();
}
