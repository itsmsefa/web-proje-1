<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method_exists = "post">
        <table>
            <tr>
                <td>
                    username:
                </td>
                <td>
                    <input type="text" name="username" placeholder="enter your username"> 
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" name="password" placeholder="enter your password">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
    if(isset($_POST["submit"]))
    {
        $user = $_POST['username'];
        $password = $_POST['password'];
        
        if($username == "admin" && $password == "admin")
        {
          header("Refresh: 1; url=login2.php");
        }
        else
        {
            echo("error ! please enter the correct data!");
        }
    }
?>