<?php 
	try { 
		$bdd = new PDO('mysql:host=localhost;dbname=examphp;charset=utf8', 'root', 'root');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		include("./app/model/Team.php");

		$teams = Team::getTeams($bdd);

        if(isset($_GET["checkDeco"])){
            session_destroy();
            header('Location:index.php');
        }

		include("./app/view/page/index.php");

	}catch(PDOException $e){ 
		echo $e->getMessage();
	} 
