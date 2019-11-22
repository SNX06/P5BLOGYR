<?php 
namespace model;
use PDO;
class DbManager
{

    public function GetDb($Query)
    {
        $Db= DbManager::connexion();
        $Req = $Db->prepare($Query);
        $Req->execute();
        $GetDb = $Req->fetchAll(PDO::FETCH_ASSOC);

        return $GetDb;
    }

    public function UpdateDb($Query, $DbParam)
    {
        $Db=$this->connexion($DbName, $DbHost, $DbUser, $DbPass);
        $Req=$Db->prepare($Query);
        $Req->execute(array($DbParam));
    }

    public function DeleteDb($DbName, $id, $DelId)
    {
        $Db=$this->connexion();
        $Req=$Db->execute('DELETE FROM'.$DbName.'WHERE'.$id.'='.$DelId);
        return $Req;
    }

    private function connexion() {
        try {
            $Db = new PDO('mysql:dbname=p5blog;host=localhost' , 'root', '');
            $Db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            die('<h3>Erreur!</h3>');
        }
        return $Db;
    }

}


?>