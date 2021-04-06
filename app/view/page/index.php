<div class="container">
    <div class="row">
        <h1>Classement de la ligue 1</h1>
        <table class="table text-center table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">Place dans le classement</th>
                <th scope="col">Logo</th>
                <th scope="col">Nom de l'équipe</th>
                <th scope="col">Victoire</th>
                <th scope="col">Nul</th>
                <th scope="col">Défaite</th>
                <th scope="col">But marqués</th>
                <th scope="col">But concédés</th>
            </tr>
            </thead>
            <tbody>
            <?php
            for($i = 0; $i < sizeof($teams); $i++){
                echo '<tr>';
                $i += 1;
                echo '<th scope="row">'.$i.'</th>';
                $i -= 1 ;
                echo '<td> <img src="./app/view/assets/images/'.$teams[$i]->getLogo().'"> </td>';
                echo '<td>'.$teams[$i]->getName().'</td>';
                echo '<td>'.$teams[$i]->getVictory().'</td>';
                echo '<td>'.$teams[$i]->getDraw().'</td>';
                echo '<td>'.$teams[$i]->getDefeat().'</td>';
                echo '<td>'.$teams[$i]->getGoal().'</td>';
                echo '<td>'.$teams[$i]->getConceded().'</td>';
                if(isset($_SESSION["user"]) && $_SESSION["user"] != ""){
                    echo '<td> <a class="btn btn-warning" href="index.php?p=edit&id='.$teams[$i]->getID().'">Modifier</a></td>';
                    echo '<td> <a class="btn btn-danger" href="index.php?p=delete&id='.$teams[$i]->getID().'">Supprimer</a></td>';
                }
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

