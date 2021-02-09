<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url(background.jpg);
}
</style>
    <title> Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>

<body>    
        <div class="box">   
            <form class="form1" method="post" action="login.php">
            
            <div class="header1">
                <h2>Login</h2>
            </div>

                <?php include ('errors.php'); ?>

                <div class="input-group">
                    <img src="user.png">    
                    <input type="text" name="username" placeholder="Username">                    
                </div>
            
                <div class="input-group">
                    <img src="lock.png">
                    <input type="password" name="password" placeholder="Password">                    
                </div>

                &nbsp;

                <div class="input-group">
                    <button type="submit" name="login" class="btn">Login</button>&nbsp;
                </div>

                <p style="color:white";>
                    Not yet a member ? <a href="register.php">Sign Up</a>
                </p>
            </form>
        </div>   

</body>
</html>