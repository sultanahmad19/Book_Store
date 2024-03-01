

<?php
include 'dbconnect.php';


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    if ($password !== $cpassword) {
        $message[] = 'confirm password not matched!';
    } else {
        // user already exists
        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email ='$email'") or die ('query failed');

        if(mysqli_num_rows($select_users) > 0){
            $message[] = 'user already exists!';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert data to the database
            $stmt = $conn->prepare("INSERT INTO `users` (`name`, `email`, `password`, `user_type` ) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $hashed_password, $user_type);

            if ($stmt->execute()) {
                $message[] = 'registered successfully!';
                header('location:login.php');
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    }
}

$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
            <h3>register now</h3>
            <input type="text" name="name" placeholder="enter your name" required class="box">
            <input type="text" name="email" placeholder="enter your email" required class="box">
            <input type="password" name="password" placeholder="enter your password" required class="box">
            <input type="password" name="cpassword" placeholder="confirm your password" required class="box">

            <select name="user_type" class="box" >
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>

            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have account? <a href="login.php">login now</a></p>
        </form>

    </div>





    
</body>
</html>