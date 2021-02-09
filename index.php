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
    <title> Homepage </title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>

<body> 
    <section class="banner" id="sec">
        <header>
            <a href="index.php" class="logo">Welcome !</a>
            <div id="toggle" onclick="toggle()"></div>
        </header>
        <div class="content">            
			<input type="hidden" id="this_username" value="<?php echo $_SESSION['username'];?>"></input>
            <h2 style="color:white">Hello Mr/Mrs,<br>I'm <span><strong><?php echo $_SESSION['username'];?></strong></span></h2>
            <p style="color:white"><?php echo $detail ?></p>
            <a href="#">Know More</a>
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

