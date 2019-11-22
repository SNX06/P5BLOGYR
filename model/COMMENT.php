<?php

namespace Model;

class Comment
{
    public $IdPost;
    public $Title;
    public $Chapo;
    public $Content;
    public $Author;
    public $Date;


    public function GetPost($SelectorGet ,$ValueSelector)
    {
        $SelecGet=htmlspecialchars($SelectorGet);
        $ValSelec=htmlspecialchars($ValueSelector);
        $Req='SELECT * FROM post WHERE '.$SGet.'='.$ValSelec;
        $DbReq= \model\DbManager::GetDb($Req);
        return $DbReq;
    }

    public function GetAllPost()
    {
        $Req='SELECT * FROM post';
        $DbReq= \model\DbManager::GetDb($Req);
        return $DbReq;
    }
    public function UpdatePost($IdPost, $Title, $Chapo, $Content, $Author, $Date)
    {
        $id=htmlspecialchars($IdPost);
        $Req='UPDATE post(id, title, chapo, content, author, date_post) SET (:id, :title, :chapo, :content, :author, :date_post) WHERE id='.$id;
        $ReqValues= array(
            ':title' => htmlspecialchars($Title),
            ':chapo' => htmlspecialchars($Chapo),
            ':content' => htmlspecialchars($Content),
            ':author' => htmlspecialchars($Author),
            ':date_post' => htmlspecialchars($Date),
        );
        $DbReq= \model\DbManager::updateDb($Req,$ReqValues);
    }
    
    public function DeleteUserBy($ArgToDel, $ValueArg) 
    {
        $DbName='user';
        DbManager::DeleteDb($DbName, $Arg , $ValueArg);
    }
}

