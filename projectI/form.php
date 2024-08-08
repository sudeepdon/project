<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    <div id="form">
    <h1>Login Form</h1> <br>
        <form action="login.php" name="form" onsubmit="return isvalid()" method="POST">
            <label>Username:</label>
            <input type="text" id="user" name="user"><br><br>

            <label>Password:</label>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="button" id="btn" value="Login" name="Submit">
        </form>
    </h1>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var user = document.form.pass.value;
            if(user.length==""&& pass.length==""){
                alert("username and password filed is empty!!!!");
                return false
            }
            else{
                if(user.length==""){
                alert("username is empty!!!!");
                return false
            }
            if(user.length==""){
                alert("username is empty!!!!");
                return false
            }

            }
        }
    </script>
</body>
</html>