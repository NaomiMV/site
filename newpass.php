<?php
/**
 * Created by PhpStorm.
 * User: naomi
 * Date: 30-3-2016
 * Time: 09:13
 */
http://stackoverflow.com/questions/20435248/create-login-accounts-and-store-them-in-a-text-file-using-php
if(isset($_POST['submit_btn']))
{
    $username = $_POST['name'];
    $password = $_POST['pwd'];
    //check of input leeg


    //haal inloggevens op
    $userData = file_get_contents('accounts.txt');

    //stel de data uit de submit samen
    $inputUser = $username . "||" . $password;

    $isItThere = strpos($userData, $inputUser); //zoek een match

    if($isItThere === false){
        echo "$inputUser staat niet in de lijst<br>";
        session_start();
        $_SESSION['user'] = "";
        //remove all session variables
        session_unset();
        //destroy the session
        session_destroy();
    }
    else{
        echo "$inputUser komt voor op de positie $isItThere<br>";
        session_start();
        $_SESSION['user'] = $username;
    }
}
?>
    