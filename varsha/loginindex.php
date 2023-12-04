<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Login Page</h2><br>
    <div class="logii">
    <form id="logii" method="get" action="login.php" onsubmit="return isvalid()" method="post">
        <label><b>username
        </b><br>
        </label>
        <input type="text" name="uname" id="uname" placeholder="Username">
        <br><br>
        <label><b>Password
        </b><br>
        </label>
        <input type="Password" name="pass" id="pass" placeholder="Password">
        <br><br>
        <a href="./index1.html"><button class="btnn"  name="submit">Login</button></a>
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        Forgot <a href="Signin.html">Password</a>
    </form>
    <!-- <script>
        function isvalid(){
            var uname= document.form.uname.value;
            var pass= document.form.pass.value;
            if(uname.length==""&& pass.length==""){
                alert("username and password field is empty!!!");
                return false
            }
            else{
                if(uname.length==""){
                    alert("username is empty!!!");
                    return false
                }
                if(pass.length==""){
                    alert("password is empty!!!");
                    return false
                }
            }
        }
        </script> -->
</div>
</body>
</html>
