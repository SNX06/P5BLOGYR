<?php
namespace index;
use Controller;
session_start();

require_once'Autoload/Autoloader.php';
\Autoload\Autoloader::register();

if(isset($_GET['p']))
{
    //require('indexView.php');
    $content= controller\UserList::testPost(); //TEST BDD USER
    //$content= $content.Controller\UserList::test();
    var_dump($content);
    $content2=controller\UserList::testComment();
    var_dump($content2);
    $content3=controller\UserList::WatchUserList();
    var_dump($content3);
    
}
else
{
    $content = '<div><H2>AUCUNE DONNEE A CHARGER</H2></div>';
    require('indexView.php');
}
