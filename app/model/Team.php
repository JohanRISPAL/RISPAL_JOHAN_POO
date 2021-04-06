<?php


class Team
{
    private $_id;
    private $_name;
    private $_victory;
    private $_draw;
    private $_defeat;
    private $_goal;
    private $_conceded;
    private $_logo;

    public function __construct($_id, $_name, $_victory, $_draw, $_defeat, $_goal, $_conceded, $_logo){
        $this->_id = $_id;
        $this->_name = $_name;
        $this->_victory = $_victory;
        $this->_draw = $_draw;
        $this->_defeat = $_defeat;
        $this->_goal = $_goal;
        $this->_conceded = $_conceded;
        $this->_logo = $_logo;
    }

    public function getID(){
        return $this->_id;
    }

    public function setID($_id){
        $this->_id = $_id;
    }

    public function getName(){
        return $this->_name;
    }

    public function setName($_name){
        $this->_name = $_name;
    }

    public function getVictory(){
        return $this->_victory;
    }

    public function setVictory($_victory){
        $this->_victory = $_victory;
    }

    public function getDraw(){
        return $this->_draw;
    }

    public function setDraw($_draw){
        $this->_draw = $_draw;
    }

    public function getDefeat(){
        return $this->_defeat;
    }

    public function setDefeat($_defeat){
        $this->_defeat = $_defeat;
    }

    public function getGoal(){
        return $this->_goal;
    }

    public function setGoal($_goal){
        $this->_goal = $_goal;
    }

    public function getConceded(){
        return $this->_conceded;
    }

    public function setConceded($_conceded){
        $this->_conceded = $_conceded;
    }

    public function getLogo(){
        return $this->_logo;
    }

    public function setLogo($_logo){
        $this->$_logo = $_logo;
    }

    public function getTeams($bdd)
    {
        $query = $bdd->prepare("SELECT *, SUM(team.victory * 3 + team.draw) as point FROM `team` GROUP BY id ORDER BY point DESC, conceded ASC, goal DESC ");
        $query->execute();

        $teams = [];

        $queryResult = $query->fetchAll();

        foreach ($queryResult as $q){
            $team = new Team($q["id"], $q["name"], $q["victory"], $q["draw"], $q["defeat"], $q["goal"], $q["conceded"], $q["logo"]);
            array_push($teams, $team);
        }

        return $teams;
    }

    public function getTeam($bdd, $id){
        $query = $bdd->prepare("SELECT * FROM `team` WHERE id = ?");
        $query->execute(array($id));

        $queryResult = $query->fetch();

        if($queryResult != null){
            return new Team($queryResult["id"], $queryResult["name"], $queryResult["victory"], $queryResult["draw"], $queryResult["defeat"], $queryResult["goal"], $queryResult["conceded"], $queryResult["logo"]);
        }else {
            return null;
        }
    }

    public function createTeam($bdd, $name, $victory, $draw, $defeat, $goal, $conceded, $logo){
        $query = $bdd->prepare("INSERT INTO team (name, victory, draw, defeat, goal, conceded, logo) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->execute(array($name, $victory, $draw, $defeat, $goal, $conceded, $logo));
    }

    public function editTeam($bdd, $id, $name, $victory, $draw, $defeat, $goal, $conceded){
        $query = $bdd->prepare("UPDATE team SET name = ?, victory = ?, draw = ?, defeat = ?, goal = ?, conceded = ? WHERE id = ?");
        $query->execute(array($name, $victory, $draw, $defeat, $goal, $conceded, $id));
    }

    public function deleteTeam($bdd, $id){
        $query = $bdd->prepare("DELETE FROM team WHERE id = ?");
        $query->execute(array($id));
    }
}


