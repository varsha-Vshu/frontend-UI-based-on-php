<?php
include("connection.php");
if (isset($_POST['submit'])) {
         $email = $_POST['uname'];
        $password = $_POST['pass'];
        $sql="SELECT * from login where username ='$username' and password='$password' "; 
        $result=mysqli_query(conn,$sql);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count==1){
            header("Location:welcome.php");
        }
        else{
            echo `<script>
            window.location.href="loginindex.php ";
            alert("Login failed. invalid username or password!!!!")
            </script>`;
        }
    }
        ?>