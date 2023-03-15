<?php

class User_match/*implements intJoueur*/{


    public function set__(){


    }

    public function get__(){

        
    }

    public function destruct__(){


    }


    public function createUserMatch($id_user, $id_match){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->nonSelectQuery("Insert into user_match (id_user, id_match) values (?, ?);",[$id_user, $id_match]);

        return $res;

    }


    public function deleteUserMatch($id_user, $id_match){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->nonSelectQuery("Delete from user_match where id_user = ? AND id_match = ?;",[$id_user, $id_match]);

        return $res;

    }

    public function isPresent($id_user, $id_match){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->selectQuery("Select count(*) as nb from user_match where id_user = ? and id_match = ?;", [$id_user, $id_match]);
        return $res;
    }

}


?>