<?php

class User{


    public function set__(){


    }

    public function get__(){

        
    }

    public function destruct__(){


    }

    public function connectUser($email, $password){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
    $res = $bdd->selectQuery("Select count(*) as nb from users where email like ? and mdp like ?;", [$email, hash("gost", $password)]);

        return $res;
    }

    public function createUser($num_licence, $nom, $prenom, $email, $num, $status, $role, $password, $nom_photo){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->nonSelectQuery("Insert into users (num_licence_u, nom_u, prenom_u, email, tel_u, image_u, mdp, status, role) values (?, ?, ?, ?, ?, ?, ?, ?, ?);",[$num_licence, $nom, $prenom, $email, $num, './images/joueur/'.$nom_photo, hash("gost", $password), $status, $role]);
        $res=1;
        return $res;

    }

    public function deleteUser($userId){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->nonSelectQuery("Delete from users where id = ?", [$userId]);

        return $res;


    }

    public function setUserInfos($userId, $title, $content){


        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->nonSelectQuery("UPDATE `users` set `?`= `?` where Id = ? ", [$title, $content, $userId]);

        return $res;


    }

    public function getAllUsers(){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->selectQuery("Select * from users ;", [null, null]);
        //Log::directlyWriteLog("./logs/LogResultatsRequetes.txt", $res[0], "Résulatat de la requête ", "haha");
        return $res;
    }




    public function getUserInfos($InfoVoulue = null , $userMail){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->selectQuery("Select * from users where Email like ?;", [$userMail]);
        //Log::directlyWriteLog("./logs/LogResultatsRequetes.txt", $res[0], "Résulatat de la requête ", "haha");
        return $res;
    }

    public function getUserPhoto(){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->selectQuery("Select image_u from users;", [null,null]);
        //Log::directlyWriteLog("./logs/LogResultatsRequetes.txt", $res[0], "Résulatat de la requête ", "haha");
        return $res;
    }


    

    public function disconnectUser($userId){

        unset($_SESSION['mail']);
    }




}





?>