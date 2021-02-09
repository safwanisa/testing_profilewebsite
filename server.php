<?php
    session_start();
    $username = "";
    $email = "";
    $detail = "";
    $phoneNo = "";
    $location = "";
    $errors = array();

    $db = mysqli_connect('localhost','root','','registration');

    if (isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $detail = mysqli_real_escape_string($db, $_POST['detail']);
        $phoneNo = mysqli_real_escape_string($db, $_POST['phoneNo']);
        $location = mysqli_real_escape_string($db, $_POST['location']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $twitter = mysqli_real_escape_string($db, $_POST['twitter']);
        $instagram = mysqli_real_escape_string($db, $_POST['instagram']);
        $linkedin = mysqli_real_escape_string($db, $_POST['linkedin']);

        if (empty($username)){
            array_push($errors, "Username is required");
        }
        if (empty($email)){
            array_push($errors, "Email is required");
        }
        if (empty($location)){
            array_push($errors, "Location is required");
        }
        if (empty($phoneNo)){
            array_push($errors, "Phone Number is required");
        }
        if (empty($detail)){
            array_push($errors, "Introduction is required");
        }
        if (empty($password_1)){
            array_push($errors, "Password is required");
        }
         if ($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }

        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO users (username, email, password, detail, phoneNo, location, twitter, instagram, linkedin) 
                    VALUES ('$username', '$email', '$password', '$detail', '$phoneNo', '$location', '$twitter', '$instagram', '$linkedin')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            header('location: index.php');
        }
    }

    if (isset($_POST['update'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $username_ori = mysqli_real_escape_string($db, $_POST['username_ori']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $detail = mysqli_real_escape_string($db, $_POST['detail']);
        $location = mysqli_real_escape_string($db, $_POST['location']);
        $phoneNo = mysqli_real_escape_string($db, $_POST['phoneNo']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $instagram = mysqli_real_escape_string($db, $_POST['instagram']);
        $twitter = mysqli_real_escape_string($db, $_POST['twitter']);
        $linkedin = mysqli_real_escape_string($db, $_POST['linkedin']);

        if (empty($username)){
            array_push($errors, "Username is required");
        }
        if (empty($email)){
            array_push($errors, "Email is required");
        }
        
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql00 = "Select * from users where username='".$username_ori."'";
            $result = mysqli_query($db, $sql00);
            while($row = mysqli_fetch_assoc($result)) {
                $sql = "UPDATE users SET username ='".$username."', email='".$email."', password='".$password."', detail='".$detail."', phoneNo='".$phoneNo."', location='".$location."', 
                twitter='".$twitter."', linkedin='".$linkedin."', instagram='".$instagram."' WHERE id='".$row["id"]."'";
                mysqli_query($db, $sql);
              }
            $_SESSION['username'] = $username;
            header('location: profile.php');
        }
    }

    if(isset ($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)){
            array_push($errors, "Username is required");
        }

        if (empty($password)){
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0) {

            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1){

                $_SESSION['username'] = $username;
                header('location: index.php');
            }else{
                array_push($errors, "Wrong username/password combination");
            }
        }

    }

    if (isset ($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>