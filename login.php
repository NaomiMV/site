<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<?php
/**
 * Created by PhpStorm.
 * User: laptop
 * Date: 30-3-2016
 * Time: 08:50
 */
//http://stackoverflow.com/questions/20435348/create-login-accounts-and-store-them-in-a-text-files-using-php
if(isset($_POST['submit_btn']))
{
 $username = $_POST['name'];
 $password = $_POST['password'];
 $text = $username . "||" . $password . "||";
 $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text)) {
        echo 'saved';
    }
    fclose($fp);
}
?>
<body>
<form action="newpass.php" method="post">
    <h1>Please enter your information to create a new login account</h1>
    <p>
     <label>Login Name:</label><input type="text" name="name"/>
     <label>Password:</label><input type="password" name="password"/>
        <br>
        <br>
    </p>
    <input type="submit" name="submit_btn" id="submit" value="submit"/>
    <input type="reset"  id="reset" value="reset"/>
</form>
</body>
</html>
/*<style>
    
/*label{*/
display:inline-block;
width:200px;
margin-right:30px;
text-align:right;
}

/*input{*/
    margin:0;
}

/*fieldset{*/
border: 10px solid pink;
width:500px;
margin:0px auto;
}

    
/*h1{*/
    text-align: center;
    font-family:cursive;
}


//</style>
*/


