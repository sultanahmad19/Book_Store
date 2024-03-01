

<?php
include 'dbconnect.php';
session_start();

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

   

    // user already exists
    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email ='$email'") or die ('query failed');
    // } 
    if(mysqli_num_rows($select_users) > 0){
        $row = mysqli_fetch_assoc($select_users);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name']= $row['name'];
            $_SESSION['admin_email']= $row['email'];
            // $_SESSION['admin_password']= $row['password'];
            $_SESSION['admin_id']= $row['id'];
            header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name']= $row['name'];
            $_SESSION['user_email']= $row['email'];
            // $_SESSION['user_password']= $row['password'];
            $_SESSION['user_id']= $row['id'];
            header('location:home.php');
        }
    } 
    // elseif(!$password == 'password'){
    //     $message[] = 'incorrect password!';
    // }
    else{
        $message[] = 'incorrect email or password!';
    }
}

$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

     <!-- fontawsome  -->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/style0.css">

</head>
<body>



    <?php

        if(isset($message)){
            foreach($message as $message){

                echo '<div class="message">
                        <span>'.$message.'</span>
                        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                      </div>';
            }
        }

    ?>
    <div class="form-container">

        <form action="" method="post">
            <h3>login now</h3>
            <input type="text" name="email" placeholder="enter your email" required class="box">
            <input type="password" name="password" placeholder="enter your password" required class="box">

            <input type="submit" name="submit" value="login now" class="btn">
            <p>don't have account? <a href="register.php">register now</a></p>
        </form>

    </div>





    
</body>
</html>