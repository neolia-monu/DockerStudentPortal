<?php

session_start();
//    echo "View Page";
    require_once "database/conn.php";

    $_SESSION['total'] = 0;
    $results = $view->allView();


if(!isset($_GET['uid'])) {
        header("Location: index.php");
    }
        $uid = $_GET['uid'];
//    echo $_SESSION['uid'];

//    echo "<br/>HJKH";
        $result = $view->myView($uid);

//    exit();

//    print_r($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" type="text/css" href="CSS/view.css">
</head>
<body>
<section>

<h2><?php echo $result['TITLE'] ?></h2>
<a href="index.php">Back</a>

<main class="div-main">
<div class="view-div">
    <div class="img-content">
    <img src="<?php echo $result['image'] ?>" alt="Image1">
        <h3><?php echo $result['TITLE'] ?></h3>
    </div>
    <div class="div-content">
    <p>
        <?php echo $result['description'] ?>
    </p>

        <p>Price $<span id="price-val"><?php echo $result['price'] ?></span></p>

    </div>
    <div class="cart-content">
        <h2 style="text-align: center">Cart Info</h2>

        <div class="cart-content-total">
            <p>Order:
                <span id="quantity">1</span>
<!--                <input type="text" id="quantity" value="" name="quantity" />-->
                <input type="button" value="-" id="decrement">
                <input type="button" value="+" id="increment">
            </p>
            <p>Total amount: $
                <span id="total-price" aria-readonly="true"><?php echo $result['price'] ?></span>
<!--                <input id="total-price" readonly="readonly" value="" />-->

            </p>
            <div class="order-card">
                <p class="order-now"><a href="payment.php?uid=<?php echo $result['did'] ?>">Order Now</a></p>
                <p class="add-cart"><a href="#">Add To Cart</a></p>
            </div>
<!--            <span id="span_Id">I am the Text </span>-->
        </div>
    </div>
</div>
</main>

    <main class="div-more">

        <div class="div-more-main">

                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {
                        if($r['did'] != $uid){
                        ?>
                    <div class="div-more-content" onclick="divClickMore(<?php echo $r['did']?>)">
                        <img src="<?php echo $r['image']  ?>" />

                        <br/><span>Price $<?php echo $r['price'] ?></span>
                        <span style="display: none" id="data-<?php echo $r['did']?>"></span>
                        <p>
                            <?php echo $r['TITLE'] ?>
                        </p>
                    </div>
                <?php }
                        } ?>
            </div>
        </div>

    </main>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="JavaScript/view.js"></script>
</body>
</html>