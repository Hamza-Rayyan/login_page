<!DOCTYPE html>
<html>
    <head>
        <title>Login </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post" action="login.php">
            <h1>Enter the login credentials</h1>
            <br>
            <div class="textBox">
                <input type="text" placeholder="username">
            </div>
            <div class="textBox">                       
                <input type="password" placeholder="password">
            </div>            
            <br>
            <input type="submit" value="login" class="loginBtn" name="login_btn">
            <div class="signup">
                
                Don't have an account ?
            <br>
                <a href="#">sign up</a>
            </div>
        </form>
    </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM websitlogin.logindetails WHERE username = '$username'";
    $result = mysql_query($conn,$sql);
    while($row = mysql_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:index.html');
        }else{
            echo "<script>
                alert('Login unsuccessful');
            </scripts>"
        }
    }
}

>