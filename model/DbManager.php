<?php 
class DbConnect
{
    private $connec_host = 'localhost';
    private $connec_dbname = 'p5blog';
    private $connec_pseudo = 'root';
    private $connec_mdp = '';

    public function GetDb($Query)
    {
        $Db=$this->connexion();
        $Req = $Db->prepare($Query);
        $Req->execute();
        $GetDb = $req->fetch(PDO::FETCH_ASSOC);

        return $GetDb;
    }

    public function UpdateDb($Query, $DbParam)
    {
        $Db=$this->connexion();
        $Req=$Db->prepare($Query);
        $Req->execute(array($DbParam));
    }

    public function DeleteDb($DbName, $id, $DelId)
    {
        $Db=$this->connexion();
        $Req=$Db->prepare('DELETE FROM'.$DbName.'WHERE'.$id.'='.$DelId);
        $Req->execute();
    }

    private function connexion() {
        try {
            $Db = new PDO('mysql:host='.$this->connec_host.';dbname='.$this->connec_dbname, $this->connec_pseudo, $this->connec_mdp);
            $Db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            die('<h3>Erreur!</h3>');
        }
        return $bdd;
    }

}


?>