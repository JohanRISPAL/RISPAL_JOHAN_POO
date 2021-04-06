<div class="contaier">
    <div class="row text-center">
        <div class="col-sm">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nom de l'équipe</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'équipe" required value="<?php echo $teamToEdit->getName();?>">
                </div>
                <div class="form-group">
                    <label for="victory">Nombre de victoire</label>
                    <input type="number" id="victory" name="victory" min="0" required value="<?php echo $teamToEdit->getVictory();?>"/>
                </div>
                <div class="form-group">
                    <label for="draw">Nombre de nul</label>
                    <input type="number" id="draw" name="draw" min="0" required value="<?php echo $teamToEdit->getDraw();?>"/>
                </div>
                <div class="form-group">
                    <label for="defeat">Nombre de défaite</label>
                    <input type="number" id="defeat" name="defeat" min="0" required value="<?php echo $teamToEdit->getDefeat();?>"/>
                </div>
                <div class="form-group">
                    <label for="goal">Nombre de but inscrit</label>
                    <input type="number" id="goal" name="goal" min="0" required value="<?php echo $teamToEdit->getGoal();?>"/>
                </div>
                <div class="form-group">
                    <label for="conceded">Nombre de but concédé</label>
                    <input type="number" id="conceded" name="conceded" min="0" required value="<?php echo $teamToEdit->getConceded();?>"/>
                </div>
                <input type="submit" class="btn btn-success" value="Modifier">
            </form>
        </div>
    </div>
</div>
