<?php 
namespace model;
use PDO;
class DbManager
{

    public function GetDb($Query)
    {
        $InitDb= DbManager::connexion();
        $Req = $InitDb->prepare($Query);
        $Req->execute();
        $GetDb = $Req->fetchAll(PDO::FETCH_ASSOC);

        return $GetDb;
    }

    public function UpdateDb($Query, $InitDbParam)
    {
        $InitDb=DbManager::connexion();
        $Req=$InitDb->prepare($Query);
        $Req->execute(array($InitDbParam));
    }

    public function DeleteDb($InitDbName, $id, $DelId)
    {
        $InitDb=DbManager::connexion();
        $Req=$InitDb->execute('DELETE FROM'.$InitDbName.'WHERE'.$id.'='.$DelId);
        return $Req;
    }

    private static function connexion() {
        try {
            $InitDb = new PDO('mysql:dbname=p5blog;host=localhost' , 'root', '');
            $InitDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            
        }
        return $InitDb;
    }

}


?>