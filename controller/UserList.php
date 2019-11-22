<?php
namespace controller;
use model;

Class Userlist
{
    public function WatchUserList()
    {
        $UserList=\model\User::GetAllUser();
        echo '    <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <img class="img-responsive" src="img/profile.png" alt="">
                                <div class="intro-text">';
        foreach($UserList as $UserList){
            echo'<p>id = '.$UserList['id'].'</p>';
            echo'<p>first_name ='.$UserList['first_name'].'</p>';
            echo'<p>last_name'.$UserList['last_name'].'</p>';
            echo'<p>'.$UserList['mail'].'</p>';
            echo'<p>Phone ='.$UserList['phone'].'</p>';
        }
        echo '</div></div></div></div></header>';
    }
    public function test(){
        $idtest=1;
        $id2='id';
        $content1= model\Post::GetPost($id2,$idtest);
        return $content1;
    }
}
