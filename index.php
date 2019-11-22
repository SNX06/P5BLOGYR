<?php
namespace index;
use Controller;
session_start();

require_once'Autoload/Autoloader.php';
\Autoload\Autoloader::register();

if(isset($_GET['p']))
{
    $content= controller\UserList::WatchUserList(); //TEST BDD USER
    //$content= $content.Controller\UserList::test();
    var_dump($content);
    //require('indexView.php');
}
else
{
    $content = '<div><H2>AUCUNE DONNEE A CHARGER</H2></div>';
    require('indexView.php');
}
?>