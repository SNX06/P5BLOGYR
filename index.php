<?php

if(isset($_GET['p']))
{
    require('controller/UserList.php');
    $content= Userlist\UserList::WatchUserList();
    require('indexView.php');
}
else
{
    $content = '<div><H2>AUCUNE DONNEE A CHARGER</H2></div>';
    require('indexView.php');
}
?>