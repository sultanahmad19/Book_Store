<?php
include 'dbconnect.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset ($user_id )){
    header('location:login.php');
}

if(isset($_POST['order_btn'])){

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $method = $_POST['method'];
    $address ='flat no.'. $_POST['flat'].','. $_POST['street'].','. $_POST['city'].','. $_POST['country'].','. $_POST['pin_code'];

    $placed_on = date('d-M-Y');
    $cart_total = 0;
    $cart_products[] = '';


    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die ('query failed');
    if(mysqli_num_rows($cart_query) > 0){
        while($cart_item = mysqli_fetch_assoc($cart_query)){
            $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
            $sub_total = ($cart_item['price'] *  $cart_item['quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ',$cart_products);

    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name='$name' AND number='$number' AND email='$email' AND method='$method' AND address='$address' AND total_products='$total_products' AND total_price='$cart_total'") or die('query failed');

    if($cart_total == 0){
        $message[] = 'your card is empty!';
    }else{
        if(mysqli_num_rows($order_query) > 0){
            $message[] = 'your card is empty!';
        }else{
            mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
            $message[] = 'order placed successfully!';
            mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');

        }
    }
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <!-- fontawsome  -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="css/style0.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>checkout</h3>
    <p><a href="home.php">home</a> / checkout </p>
</div>

<section class="display-order">
    <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = $user_id") or die ('query failed');
        if(mysqli_num_rows($select_cart) > 0){
           while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $total_price;
    ?>
    <p><?php echo $fetch_cart['name']; ?> <span>(<?php echo '$'.$fetch_cart['price'].'/-'.' x '.$fetch_cart['quantity']; ?>;)</span></p>

    <?php
        }
            }else{
            echo '<p class="empty">Your cart is empty</p>';
        }
    ?>

    <div class="grand-total"> Grand Total : <span>$<?php echo $grand_total; ?>/-</span></div>
</section>

<section class="checkout">
    <form action="" method="post">
        <h3>place your order</h3>
        <div class="flex">
            <div class="inputBox">
                <span>your name :</span>
                <input type="text" name="name" required placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span>your number :</span>
                <input type="number" name="number" required placeholder="Enter your number">
            </div>
            <div class="inputBox">
                <span>your email :</span>
                <input type="email" name="email" required placeholder="enter your email">
            </div>
            <div class="inputBox">
                <span>payment method :</span>
                <select name="method">
                    <option value="cash on delivery">Cash on delivery</option>
                    <option value="credit card">Credit card</option>
                    <option value="easypaisa">Easypaisa</option>
                </select>
            </div>
            <div class="inputBox">
                <span>address line 01 :</span>
                <input type="text" min="0" name="flat" required placeholder="G-112.">
            </div>
            <div class="inputBox">
                <span>address line 01 :</span>
                <input type="text" name="street" required placeholder="12.">
            </div>
            <div class="inputBox">
                <span>city :</span>
                <input type="text" name="city" required placeholder="Islamabad.">
            </div>
            <div class="inputBox">
                <span>country :</span>
                <input type="text" name="country" required placeholder="Pakistan.">
            </div>
            <div class="inputBox">
                <span>pin code :</span>
                <input type="text" name="pin_code" required placeholder="45000.">
            </div>
        </div>
        <input type="submit" value="order now" class="btn" name="order_btn">
    </form>
</section>








<?php include 'footer.php';?>






     <!-- custom admin js  -->
     <script src="js/script.js "></script>
</body>
</html>