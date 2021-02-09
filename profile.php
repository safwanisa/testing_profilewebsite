<?php include('server.php'); 

if (empty ($_SESSION['username'])){
    header('location: login.php');
}else{
    $sql00 = "Select * from users where username='".$_SESSION['username']."'";
            $result = mysqli_query($db, $sql00);

            while($row = mysqli_fetch_assoc($result)) {
                
            $email = $row["email"];
            $password = $row["password"];
            $detail = $row["detail"];
            $phoneNo = $row["phoneNo"]; 
            $location = $row["location"];
            $instagram = $row["instagram"];
            $twitter = $row["twitter"];
            $linkedin = $row["linkedin"];     
            }
}
?>

<!DOCTYPE html>
<html>
<head>

    <title> Profile </title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>

<body>

<section class="banner" id="sec">

<form class="formprofile" method="POST" action="register.php">

<?php include ('errors.php'); ?>
<table>

<div class="header1">
    <h2 class="headerprofile">Edit profile</h2>
</div>

	<tbody>
		<tr>
			<td class="table1">
				<div class="input-group"><img src="user.png">
					<input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" placeholder="Username">&nbsp;
					<input type="hidden" name="username_ori" value="<?php echo $_SESSION['username'] ?>" placeholder="Username">&nbsp; 
                </div>
				<div class="input-group"><img src="email.png">
					<input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email">&nbsp; 
                </div>
				<div class="input-group"><img src="phone.png">
					<input type="tel" name="phoneNo" value="<?php echo $phoneNo; ?>">&nbsp; </div>
				<div class="input-group"><img src="location.png">
					<input type="text" name="location" value="<?php echo $location; ?>">&nbsp; 
                </div>
				<div class="input-group"><img src="lock1.jpg">
					<input type="password" name="password_1" value="<?php echo $password; ?>" placeholder="Password">&nbsp; </div>
				
            </td>

			<td class="table2">
				<div class="input-group"> <img src="twitter.png">
					<input type="text" name="twitter" value="<?php echo $twitter; ?>">&nbsp; </div>
				<div class="input-group"> <img src="instagram.png">
					<input type="text" name="instagram" value="<?php echo $instagram; ?>">&nbsp; </div>
				<div class="input-group"> <img src="linkedin.png">
					<input type="text" name="linkedin" value="<?php echo $linkedin; ?>">&nbsp; </div>
				<div class="input-group">
                <div class="input-group"><img src="description.png">
					<textarea name="detail"><?php echo $detail ?></textarea>&nbsp; 
                </div>&nbsp;
					<button type="submit" name="update" class="btn1">Update</button>
				</div> &nbsp;
            </td>
		</tr>
	</tbody>
</table>

</form>

        <header>
            <a href="index.php" class="logo">Logo</a>
            <div id="toggle" onclick="toggle()"></div>
        </header>
        <div class="content">
			<input type="hidden" id="this_username"></input>
            <h2 style="color:white"><br><span><strong></strong></span></h2>
            <p style="color:white" id="introduction"></p>
        </div>        
        <ul class="sci">
            <li><a href="<?php echo $linkedin; ?>"><img src="linkedin.png"></a></li>
            <li><a href="<?php echo $twitter; ?>"><img src="twitter.png"></a></li>
            <li><a href="<?php echo $instagram; ?>"><img src="instagram.png"></a></li>            
        </ul>
        </section>

    <script type="text/javascript">

    function toggle(){
        var sec = document.getElementById('sec');
        var nav = document.getElementById('navigation');
        sec.classList.toggle('active')
        nav.classList.toggle('active')
    }
	</script>
            <?php if (isset($_SESSION['success'])): ?>
                    <div class="error success">
                        <h3>
                            <?php
                                echo $_SESSION['success'];
                                unset ($_SESSION['success']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>

                <div class="nav-bar">
                    <div class="user">
                        <div id="navigation">
                        <?php if (isset ($_SESSION["username"])): ?>
                            <ul>
                            <a style="color:white";>Hi! [<strong><?php echo $_SESSION['username'];?></strong>]</a>&nbsp;
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="resume.php">Resume</a></li>
                                    <li><a href="index.php?logout='1'">Logout</a></li>
                            </ul>                            
                        <?php endif ?>
                    </div>
                </div>
</body>
</html>