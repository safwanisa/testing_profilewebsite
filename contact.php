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
    <title> Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">   
</head>

<body>
<section class="banner" id="sec">
        <header>
            <a href="index.php" class="logo">Logo</a>
            <div id="toggle" onclick="toggle()"></div>
        </header>
        <h2 class="headercontact">Contact Info</h2>
        
        <div class="contact-info">
            <div class="card">
                <i class="card-icon far fa-envelope"></i>
                <p><?php echo $email; ?></p>
            </div>

            <div class="card">
                <i class="card-icon fas fa-phone"></i>
                <p><?php echo $phoneNo; ?></p>
            </div>

            <div class="card">
                <i class="card-icon fas fa-map-marker"></i>
                <p><?php echo $location; ?></p>
            </div>
        </div>
        <div class="contact-info">

            <div class="card">
                <i class="card-icon fab fa-instagram"></i>
                <p><?php echo $instagram; ?></p>
            </div>

            <div class="card">
                <i class="card-icon fab fa-twitter"></i>
                <p><?php echo $twitter; ?></p>
            </div>

            <div class="card">
                <i class="card-icon fab fa-linkedin"></i>
                <p><?php echo $linkedin; ?></p>
            </div>
        </div>
        
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