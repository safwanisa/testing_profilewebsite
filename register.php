<?php include ('server.php'); ?>

<!DOCTYPE html>
<html>

<head>
<style>
body {
  background-image: url(background.jpg);
}
</style>

    <title> User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body >
        <form class="form1" method="POST" action="register.php">

        
        <div class="header1">
            <h2>Register</h2>
        </div>

            <?php include ('errors.php'); ?>

            <div class="input-group">
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">&nbsp;
            </div>

            <div class="input-group">
                <input type="text" name="email" placeholder="Email">&nbsp;
            </div>
            
            <div class="input-group">
                <input type="tel" name="phoneNo" placeholder="Phone No">&nbsp;
            </div>
            
            <div class="input-group">
                <input type="text" name="location" placeholder="Location">&nbsp;
            </div> 

            <div class="input-group">
                <input type="password" name="password_1" placeholder="Password">&nbsp;
            </div>

            <div class="input-group">
                <input type="password" name="password_2" placeholder="Confirm Password">&nbsp;
            </div>

            <div class="input-group">
                <textarea name="detail" placeholder="Introduction"></textarea>&nbsp;
            </div>
            
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div> &nbsp;

            <p style="color:white";>
                Already a member ? <a href="login.php">Sign In</a>
            </p>
        </form>

</body>
</html>
