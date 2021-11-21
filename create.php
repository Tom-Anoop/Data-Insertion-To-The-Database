<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="POST">
        First Name <input type="text" name="txtfirst" ><br><br>
        Last Name <input type="text" name="txtlast" ><br><br>
        E-mail <input type="email" name="txtmail" ><br><br>
        Password <input type="password" name="txtpwd" ><br><br>
        Gender <input type="radio" name="gender" value="male" >Male <input type="radio" name="gender" value="female" >Female
        <br><br><input type="submit" name="submit" value="submit" >
</body>
</html>