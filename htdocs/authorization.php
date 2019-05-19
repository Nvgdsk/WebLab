<?php

include_once ("../config/db.php");
Class User{

    private $email;
    private $password;

    public function setLoginPassword($array){
        if(isset($array['email']) && isset($array['password']))
        {
            if (filter_var($array['email'], FILTER_VALIDATE_EMAIL)) {
                $this->email=$array['email'];
                $this->password =htmlspecialchars(md5($_POST['password']));
            }
        }
    }
    public function regUser(){
        $pass =  $this->password;
        $email = $this->email;
        $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        global $mysqli;
        $res = $mysqli->query($sql);
        if(mysqli_num_rows($res)==0)
        {
            $sql = "INSERT INTO `users`(`email`, `password`) VALUES ('$email','$pass')";
            $mysqli->query($sql);
            echo "Регистрация прошла успешно";
        }
        else
        {
            echo "Данный email уже зарегистрирован";
        }
        $mysqli->close();
    }
    public function authUser(){
        $pass =  $this->password;
        $email = $this->email;
        $sql = "SELECT * FROM `users` WHERE `email`='$email' and `password`='$pass '";
        global $mysqli;
        $res = $mysqli->query($sql);
        if(mysqli_num_rows($res)==0)
        {
            session_start();
            $_SESSION['Auth']=0;

            echo "0";
        }
        else
        {
            session_start();
            $_SESSION['Auth']=1;

            echo "1";
        }
        $mysqli->close();
    }


}



function regUserFunc($arr){
    $user= new User();
    $user->setLoginPassword($arr);
    $user->regUser();

}
function authUserFunc($arr){
    $user= new User();
    $user->setLoginPassword($arr);
    $user->authUser();

}
function exitUser($arr){
    session_start();
    $_SESSION['Auth']=0;

}