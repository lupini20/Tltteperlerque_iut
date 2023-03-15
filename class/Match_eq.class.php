<?php

class Match_eq/*implements intJoueur*/{


    public function set__(){


    }

    public function get__(){

        
    }

    public function destruct__(){


    }


    public function createMatch($libelle, $div, $equ_1, $equ_2 ,$lieu, $date){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->nonSelectQuery("Insert into matchs (libelle_match, div_match, equ_1, equ_2, lieu_match, date_match) values (?, ?, ?, ?, ?, ?);",[$libelle, $div, $equ_1, $equ_2, $lieu, $date]);

        return $res;

    }

    public function getIdMatch($libelle){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->selectQuery("Select * from matchs where libelle_match like ?;", [$libelle]);
        //Log::directlyWriteLog("./logs/LogResultatsRequetes.txt", $res[0], "Résulatat de la requête ", "haha");
        return $res;
    }

    




}





?>