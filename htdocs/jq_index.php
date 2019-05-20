<?php
include_once("authorization.php");
include_once("Content.php");
if(isset($_POST['a'])){
    $action = $_POST['a'];
}
else{
    $action = "";
}
switch($action)
{
    case 'reg':
        regUserFunc($_POST);
        break;
    case 'auth':
        authUserFunc($_POST);
        break;
    case 'out':
        exitUser($_POST);
        break;
    case 'loadNews':
        getNews($_POST);
        break;
    case 'uploadNews':
        uploadNews($_POST);
        break;
}
