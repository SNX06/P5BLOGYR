<?php
namespace Controller;
use model;

Class Userlist
{
    public function WatchUserList()
    {
        $UserList=\model\User::GetAllUser();
        var_dump($UserList);
        
    }
    public function test(){
        $idtest=1;
        $id2='id';
        $content1= model\Post::GetPost($id2,$idtest);
        return $content1;
    }
}
