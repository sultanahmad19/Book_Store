<?php
include 'dbconnect.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset ($user_id )){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- fontawsome  -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/style0.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>about us</h3>
    <p><a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sapiente esse earum commodi labore, reiciendis excepturi officia assumenda nisi nulla illum veniam ducimus, aut velit? Eligendi voluptatum a quidem doloremque.</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="contact.php" class="btn">contact us</a> 
      </div>

   </div>

</section>


<section class="reviews">

<h1 class="title">client's reviews</h1>

<div class="box-container">
    <div class="box">
        <img src="images/pic-1.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, illo eveniet impedit tenetur fugiat perferendis adipisci provident ullam, harum fugit nihil nulla pariatur tempore suscipit expedita unde, ratione ipsa ipsam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>arslan</h3>
    </div>
    <div class="box">
        <img src="images/pic-2.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, illo eveniet impedit tenetur fugiat perferendis adipisci provident ullam, harum fugit nihil nulla pariatur tempore suscipit expedita unde, ratione ipsa ipsam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>alee</h3>
    </div>
    <div class="box">
        <img src="images/pic-3.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, illo eveniet impedit tenetur fugiat perferendis adipisci provident ullam, harum fugit nihil nulla pariatur tempore suscipit expedita unde, ratione ipsa ipsam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>sultan</h3>
    </div>
    <div class="box">
        <img src="images/pic-4.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, illo eveniet impedit tenetur fugiat perferendis adipisci provident ullam, harum fugit nihil nulla pariatur tempore suscipit expedita unde, ratione ipsa ipsam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>dummy</h3>
    </div>
    <div class="box">
        <img src="images/pic-5.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, illo eveniet impedit tenetur fugiat perferendis adipisci provident ullam, harum fugit nihil nulla pariatur tempore suscipit expedita unde, ratione ipsa ipsam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>sami</h3>
    </div>
    <div class="box">
        <img src="images/pic-6.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, illo eveniet impedit tenetur fugiat perferendis adipisci provident ullam, harum fugit nihil nulla pariatur tempore suscipit expedita unde, ratione ipsa ipsam.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>dummy</h3>
    </div>
</div>
</section>

<section class="authors">
    <h1 class="title">greate authors</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/author-1.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>ahmad</h3>
        </div>
        <div class="box">
            <img src="images/author-2.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>alee</h3>
        </div>
        <div class="box">
            <img src="images/author-3.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>sultan</h3>
        </div>
        <div class="box">
            <img src="images/author-4.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>dummy</h3>
        </div>
        <div class="box">
            <img src="images/author-5.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>sami</h3>
        </div>
        <div class="box">
            <img src="images/author-6.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>dummy</h3>
        </div>
    </div>
</section>









<?php include 'footer.php';?>






     <!-- custom admin js  -->
     <script src="js/script.js "></script>
</body>
</html>