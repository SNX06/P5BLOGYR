<?php

require_once('./DbManager.php');


class User
{
    private $id;
    private $FirstName;
    private $LastName;
    private $Mail;
    private $Phone;


    public function GetUser($SelectorGet ,$ValueSelector)
    {
        $Req='SELECT * FROM user WHERE'.$SelectorGet.'='.$ValueSelector;
        $DbReq= DbManager::GetDb($Req);
        return $DbReq;
    }

    public function GetAllUser()
    {
        $Req='SELECT * FROM user';
        $DbReq= DbManager::GetDb($Req);
        return $DbReq;
    }
    public function UpdateUser($Id,$FirstName,$LastName,$Mail,$Phone){
        $Req='UPDATE user(first_name, last_name, mail, phone) SET (:first_name, :last_name,:mail,:phone) WHERE id='.$id;
        $ReqValues= array(
            'first_name' => htmlspecialchars($FirstName),
            'last_name' => htmlspecialchars($LastName),
            'mail' => htmlspecialchars($Mail),
            'phone' => htmlspecialchars($Phone),
        );
        $DbReq= DbManager::updateDb($Req,$ReqValues);
    }
    
    public function DeleteUserBy($Arg, $ValueArg)
    {
        $DbName='user';
        DbManager::DeleteDb($DbName, $Arg , $ValueArg);
    }
}


?>