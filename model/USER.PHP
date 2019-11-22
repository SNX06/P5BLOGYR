<?php

namespace Model;

class User
{
    private $IdUser;
    private $FirstName;
    private $LastName;
    private $Mail;
    private $Phone;


    public function GetUser($SelectorGet ,$ValueSelector)
    {
        $Req='SELECT * FROM user WHERE'.$SelectorGet.'='.$ValueSelector;
        $DbReq= \model\DbManager::GetDb($Req);
        return $DbReq;
    }

    public function GetAllUser()
    {
        $Req='SELECT * FROM user';
        $DbReq= \model\DbManager::GetDb($Req);
        return $DbReq;
    }
    public function UpdateUser($IdUser,$FirstName,$LastName,$Mail,$Phone){
        $id=htmlspecialchars($IdUser);
        $Req='UPDATE user(first_name, last_name, mail, phone) SET (:first_name, :last_name,:mail,:phone) WHERE id='.$id;
        $ReqValues= array(
            ':first_name' => htmlspecialchars($FirstName),
            ':last_name' => htmlspecialchars($LastName),
            ':mail' => htmlspecialchars($Mail),
            ':phone' => htmlspecialchars($Phone),
        );
        $DbReq= \model\DbManager::updateDb($Req,$ReqValues);
    }
    
    public function DeleteUserBy($Arg, $ValueArg)
    {
        $DbName='user';
        DbManager::DeleteDb($DbName, $Arg , $ValueArg);
    }
}


?>