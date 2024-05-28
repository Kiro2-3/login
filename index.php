<?php

 session_start();

 include("connection.php");
 include("function.php");
 $user_data = check_login($con);

?>
<html>
<head>
	<title>CDMUOS</title>
    <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<body>
<style>
        
        :root {
    --white: #ffffffdc;
}

* {
    margin: 0;  
    padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html {
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

section {
    padding: 14rem 9%;
}

.heading {
    text-align: center;
    font-size: 4rem;
    color: #003514;
    padding: 1rem;
    margin: 2rem 0;
    background: rgba(243, 0, 0, 0.05);
}

.heading span {
    color: #000000;
}

.btn {
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background: #000000;
    color: #ffffff;
    padding: .9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover {
    background: #003514;
}

.btn1 {
    display: inline-block;
    margin-top: 1rem;
    border-radius: 100rem;
    color: #EBEBEB;
    padding: .9rem 1.5rem;
    cursor: pointer;
    font-size: 10rem;
    left :80%;
    top: 18%;
    position: absolute;

}
.btn1:hover {
    color: #CBDA00;
}


header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #003514;
    padding: 2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}

header .logo {
    font-size: 3rem;
    color: #ffffff;
    font-weight: bolder;
}

header .logo span {
    color: #ffc400;
}

header .navbar a {
    font-size: 2rem;
    padding: 0 1.5rem;
    color: #ffc400;
    transform: translate(-100%,40%);
}

header .navbar a:hover {
    color: #ffc400;
}

.icon {
    width: 300px;   
    float: left;
    height: 70px;
}

/* Assuming these are your header icons */
header .icons a {
    font-size: 2rem;
    color: #fdfdfd;
    margin-left: 1rem; /* Adjust the margin as needed */
    display: inline-block; /* Ensure each icon is on the same line */
    vertical-align: middle; /* Align icons vertically in the middle */
}

header .icons a:hover {
    color: #D8D400;
}

header #toggler {
    display: none;
}

header.fa-bars {
    font-size: 3rem;
    color: #ffc400;
    border-radius: .5rem;
    padding: .5rem 1.5rem;
    cursor: pointer;
    border: .1rem solid rgba(0, 0, 0, 0.3);
    display: none;
}

.navbar {
    align-items: center;
    list-style: none;
    position: relative;
    padding: 12px 20px;
}

.logo img {
    width: 200px;
}

.menu {
    display: flex;
}

.menu li {
    padding-left: 30px;
}

.menu li a {
    display: inline-block;
    text-decoration: none;
    color: #FFFFFF;
    text-align: center;
    transition: 0.15s ease-in-out;
    position: relative;
    text-transform: uppercase;
}

.menu li a::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 1px;
    background-color: #FFF;
    transition: 0.15s ease-in-out;
}

.menu li a:hover:after {
    width: 100%;
}

.open-menu,
.close-menu {
    position: absolute;
    color: #FFFFFF;
    cursor: pointer;
    font-size: 1.5rem;
    display: none;
}

.open-menu {
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

.close-menu {
    top: 20px;
    right: 20px;
}

#check {
    display: none;
}

@media(max-width: 977px) {
    .menu {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 80%;
        height: 100vh;
        position: fixed;
        top: 0;
        right: -100%;
        z-index: 100;
        background-color: #55FF55;
        color: #FFF;
        transition: all 0.2s ease-in-out;
    }
    .menu li {
        margin-top: 40px;
    }
    .menu li a {
        padding: 10px;
    }
    .open-menu,
    .close-menu {
        display: block;
    }
    #check:checked~.menu {
        right: 0;
    }
}

.home {
    display: flex;
    align-items: center;
    min-height: 110vh;
    background: url(https://i.imgur.com/LxBPJ9e.jpg) no-repeat;
    background-position: center;
}
.inforpic{
    width: 48%;
    position: absolute;
    transform: translate(-24%,-50%);
    top: 50%;
    left: 50%;
    overflow: hidden;
    border: 5px solid #ffffff;
    border-radius: 8px;
    box-shadow: 10px 25px 30px rgba(30,30,200,0.3);
}
.inforpic1{
    width: 75%;
    display: flex;
    animation: slide 10s infinite;
    
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}



.home .content {
    max-width: 50rem;
}

.home .content h3 {
    font-size: 6rem;
    color: #FFE600;
}

.home .content span {
    font-size: 3.5rem;
    color: #055C26;
    padding: 1rem 0;
    line-height: 1.5;
}

.home .content p {
    font-size: 1.5rem;
    color: #003514;
    padding: 1rem 0;
    line-height: 1.5;
}

.about .row {
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    padding: 2rem 0;
    padding-bottom: 3rem;
}

.about .row .video-container {
    flex: 1 1 40rem;
    position: relative;
}

.about .row .video-container video {
    width: 100%;
    border: 1.5rem solid #fff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    height: 100%;
    object-fit: cover;
}

.about .row .video-container h3 {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 3rem;
    background: #ffffff;
    width: 100%;
    padding: 1rem 2rem;
    text-align: center;
    mix-blend-mode: screen;
}

.about .row .content {
    flex: 1 1 40rem;
}

.about .row .content h3 {
    font-size: 3rem;
    color: #FF1E00;
}

.about .row .content p {
    font-size: 1.5rem;
    color: #003514;
    padding: .5rem 0;
    padding-top: 1rem;
    line-height: 1.5;
}

.icons-container {
    background: #eee;
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.icons-container .icons {
    background: #fff;
    border: .1rem solid rgba(0, 0, 0, .1);
    padding: 2rem;
    display: flex;
    align-items: center;
    flex: 1 1 25rem;
}

.icons-container .icons img {
    height: 5rem;
    margin-right: 2rem;
}

.icons-container .icons h3 {
    color: #1f9900;
    padding-bottom: .5rem;
    font-size: 1.5rem;
}

.icons-container .icons span {
    color: #1f9900;
    font-size: 1.3rem;
}


.review .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.review .box-container .box {
    flex: 1 1 30rem;
    box-shadow: 0.5rem 1.5rem rgba(0, 0, 0, .1);
    border-radius: .5rem;
    padding: 3rem 2rem;
    position: relative;
    border: 1rem solid rgba(0, 0, 0, .1);
}

.review .box-container .box .fa-quote-right {
    position: absolute;
    bottom: 3rem;
    right: 3rem;
    font-size: 6rem;
    color: #eee;
}

.review .box-container .box .stars i {
    color: #003514;
    font-size: 2rem;
}

.review .box-container .box p {
    color: #999;
    font-size: 1.5rem;
    line-height: 1.5;
    padding-top: 2rem;
}

.review .box-container .box .user {
    display: flex;
    align-items: center;
    padding-top: 2rem;
}

.review .box-container .box .user img {
    height: 6rem;
    width: 6rem;
    border-radius: 50%;
    object-fit: cover;
    margin: 1rem;
}

.review .box-container .box .user h3 {
    font-size: 2rem;
    color: #333;
}

.review .box-container .box .user span {
    font-size: 1.5rem;
    color: #999;
}

.contact .row {
    display: flex;
    flex-wrap: wrap-reverse;
    gap: 1.5rem;
    align-items: center;
}

.contact .row form {
    flex: 1 1 40rem;
    padding: 2rem 2.5rem;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    border: 1rem solid rgba(0, 0, 0, .1);
    background: #fff;
    border-radius: .5rem;
}

.contact .row .image {
    flex: 1 1 40rem;
}

.contact .row .image img {
    width: 100%;
}

.contact .row form .box {
    padding: 1rem;
    font-size: 1.7rem;
    color: #333;
    text-transform: none;
    border: .1rem solid rgba(0, 0, 0, .1);
    border-radius: .5rem;
    margin: .7rem 0;
    width: 100%;
}

.contact .row form .box:focus {
    border-color: #003514;
}

.contact .row form textarea {
    height: 15rem;
    resize: none;
}

.footer .box-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.footer .box-container .box {
    flex: 1 1 25rem;
}

.footer .box-container .box h3 {
    color: #333;
    font-size: 2.5rem;
    padding: 1rem 0;
}

.footer .box-container .box a {
    display: block;
    color: #666;
    font-size: 1.5rem;
    padding: 1rem 0;
}

.footer .box-container .box a:hover {
    color: #00500b;
    text-decoration: underline;
}

.footer .box-container .box img {
    margin-top: 1rem;
}

.footer .credit {
    text-align: center;
    padding: 1.5rem;
    margin: 1.5rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color: #333;
    border-top: .1rem solid rgba(0, 0, 0, .1);
}

.footer .credit span {
    color: #003514;
}

@media (max-width: 991px) {
    html {
        font-size: 55%;
    }
    header {
        padding: 2rem;
    }
    section {
        padding: 2rem;
    }
    .home {
        background-position: left;
    }
}

@media (max-width: 768px) {
    header .fa-bars {
        display: block;
    }
    header.navbar {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #eee;
        border-top: .1rem solid rgba(0, 0, 0, .1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0)
    }
    header #toggler:checked~.navbar {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }
    header .navbar a {
        margin: 1.5rem;
        padding: 1.5rem;
        background: #fff;
        border: .1rem solid rgba(0, 0, 0, .1);
        display: block;
    }
    .home .content h3 {
        font-size: 5rem;
    }
    .home .content span {
        font-size: 2.5rem;
    }
    .icons-container .icons h3 {
        font-size: 2rem;
    }
    .icons-container .icons span {
        font-size: 1.7rem;
    }
}

@media (max-width: 450px) {
    html {
        font-size: 50%;
    }
    .heading {
        font-size: 3rem;
    }
}
  .card {
    height: 500px; /* Set the desired height for all cards */
  }

  .card-img-top {
    object-fit: cover; /* Ensure the image covers the entire card, maintaining aspect ratio */
    height: 60%; /* Set the desired height for the image */
    width: 100%; /* Ensure the image takes the full width of the card */
    margin-bottom: 10px; /* Add margin at the bottom for spacing */
  }
  

  .row mt-2 pb-3 {

    transform: translate(-100%,40%);
  }

</style>

	<a href="logout.php"></a>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <title>fashion design</title>

    <link rel="stylesheet" href="endrina.css">

    <link rel="stylesheet" href="endrina.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
<header>

<a class="logo">CDM<span>UOS</span></a>





<div class="icons">
<a class="nav-link" href="cart.php "><i class="fas fa-shopping-cart"></i> <span id="cart-item"  class="badge badge-danger"></span></a>
<a class="nav-link" href="orderlist.php">
  <i class="fas fa-shopping-bag"></i>
</a>
<a class="nav-link" href="logout.php">
  <i class="fas fa-sign-out-alt"></i>
</a>
</div>


</header>

    <section class="home" id="home">

        <div class="content">
            <h2>Welcome, <?php echo $user_data['user_name'];?>
            <h3> COLEGIO DE MONTALBAN </h3>
            <span>Uniform Ordering System </span>
            <p> This system is tailored to meet the unique needs of the educational institution, offering a seamless and organized approach to managing uniform requests. </p>
            <a href="#products" class="btn">Order now</a>
        </div>
    </section>

    <section class="about" id="about">

        <h1 class="heading"> <span> <b>PRODUCTS ARE ON DECEMBER SALE!</b></span> </h1>

        <div class="row">

            <div class="video-container">
                <video src="https://i.imgur.com/iG3wfMr.mp4"
                    loop autoplay muted></video>

            </div>

            <div class="content">
                <h3>HOLIDAY SALE!</h3>
                <p>We value all students of Colegio de Montalban as a gift for december we have made a december sale!</p>
                <p>Elevate your brand with precision, order by order, stitching excellence into every garment. Because in unity, we find strength, and in a uniform, we express it."</p>
            </div>

        </div>
    </section>

    <section class="icons-container">

        <div class="icons">
            <a> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="delivery-time_1-solid" width="24" height="24"><path data-name="layer2" d="M27 18.1a12 12 0 1 0-12 12 12 12 0 0 0 12-12zm-6 4h-8v-10a2 2 0 1 1 4 0v6h4a2 2 0 0 1 0 4z" fill="#202020"></path><circle data-name="layer1" cx="25" cy="53.9" r="4" fill="#202020"></circle><circle data-name="layer1" cx="55" cy="53.9" r="4" fill="#202020"></circle><path data-name="layer1" d="M9 35.9H3a2 2 0 0 0 0 4h6a2 2 0 0 0 0-4zm0 8H7a2 2 0 0 0 0 4h2a2 2 0 0 0 0-4zM63 41l-3.1-3.1-4.6-4H49v12h14V41zM33 53.9h14a8 8 0 0 1 2.7-6H30.3a8 8 0 0 1 2.7 6zm-16-4.6v4.6a8 8 0 0 1 2.7-6H17zm46 4.5v-6h-2.7a8 8 0 0 1 2.7 6zM17 34v11.9h28v-22H29.9A16 16 0 0 1 17 34z" fill="#202020"></path></svg>
                <div class="info">
                    <h3>free delivery</h3>
                    <span>on Montalban Area</span>
                </div>
        </div>


        <div class="icons">
            <a> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="cash-dispenser-solid" width="24" height="24"><path data-name="layer2" fill="#202020" d="M14 59h36v4H14zm0-6h8a8 8 0 0 0-8-8zm36 0v-8a8 8 0 0 0-8 8z"></path><path data-name="layer2" d="M50 9H14v32a12 12 0 0 1 12 12h12a12 12 0 0 1 12-12zM34 36.2v.8a2 2 0 1 1-4 0v-.8a7 7 0 0 1-5-6.7 2 2 0 1 1 4 0 3 3 0 0 0 3 3c1.5 0 3-.8 3-2.6s0-1.9-3.4-2.6C25.8 26 25 22.6 25 20.7a6.5 6.5 0 0 1 5-6.3v-.8a2 2 0 1 1 4 0v.8a7 7 0 0 1 4.9 5.6 2 2 0 1 1-3.9.7 3 3 0 0 0-3-2.5c-1.5 0-3 .8-3 2.6s0 1.8 3.4 2.6c5.7 1.3 6.6 4.6 6.6 6.5a6.5 6.5 0 0 1-5 6.3z" fill="#202020"></path><path data-name="layer1" d="M59 1H5a3 3 0 0 0-3 3v18a3 3 0 0 0 3 3h5V6h44v19h5a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3z" fill="#202020"></path></svg>
                <div class="info">
                    <h3>10 days returns</h3>
                    <span>moneyback guarantee</span>
                </div>
        </div>


        <div class="icons">
            <a> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="24" height="24" class="gifts-fws"><path d="M608 224.016H587.625C590.25 216.391 592 208.516 592 200.266C592 164.766 565 128.02 519.875 128.02C471.75 128.02 444 175.766 432 203.266C419.875 175.766 392.125 128.02 344.125 128.02C299 128.02 272 164.766 272 200.266C272 208.516 273.75 216.391 276.375 224.016H256C238.25 224.016 224 238.266 224 256.016V352.008H416V256H448V352.008H640V256.016C640 238.266 625.75 224.016 608 224.016ZM336 224.016C320.736 216.383 320 204.07 320 200.266C320 190.516 326.375 176.016 344.125 176.016C362.75 176.016 379.75 203.391 388.625 224.016H336ZM528 224.016H475.375C484.25 203.766 501.25 176.016 519.875 176.016C537.625 176.016 544 190.516 544 200.266C544 204.07 543.264 216.383 528 224.016ZM240.625 194.141C242.5 163.266 257.875 132.895 284.625 114.273C279.375 103.523 268.75 96.023 256 96.023H226.625L257.25 74.023C264.5 68.898 266.25 58.898 261 51.773L251.75 38.773C246.625 31.523 236.625 29.773 229.375 35.023L197.375 57.898L208.875 27.273C212 19.023 207.75 9.777 199.5 6.777L184.5 1.152C176.25 -1.973 167 2.277 163.875 10.527L144 63.523L124.125 10.402C121 2.152 111.75 -2.098 103.5 1.027L88.5 6.652C80.25 9.777 76 19.023 79.25 27.273L90.75 57.773L58.625 35.023C51.375 29.898 41.375 31.523 36.25 38.773L27 51.773C21.875 58.898 23.5 68.898 30.75 74.023L61.375 96.023H32C14.25 96.023 0 110.273 0 128.02V480C0 497.75 14.25 512 32 512H200.875C195.375 502.5 192 491.75 192 480V256.016C192 226.141 212.75 201.016 240.625 194.141ZM224 480C224 497.75 238.25 512 256 512H416V384.008H224V480ZM448 512H608C625.75 512 640 497.75 640 480V384.008H448V512Z"></path></svg>
                <div class="info">
                    <h3>offer & gifts</h3>
                    <span>on all orders</span>
                </div>
        </div>


        <div class="icons">
            <a> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="24" height="24" class="secure-payment-solid"><path data-name="layer2" d="M58 38V28a8 8 0 0 0-16 0v10h-4v16h24V38zm-6 10a2 2 0 1 1-4 0v-4a2 2 0 1 1 4 0zm2-10h-8V28a4 4 0 0 1 8 0z" fill="#202020"></path><path data-name="layer1" d="M38 28a11.9 11.9 0 0 1 3.1-8H2v19.6A2.4 2.4 0 0 0 4.4 42H34v-8h4zm-21.6 8H10a2 2 0 0 1 0-4h6.4a2 2 0 0 1 0 4zm9.6-8H10a2 2 0 0 1 0-4h16a2 2 0 0 1 0 4zm24-15.6a2.4 2.4 0 0 0-2.4-2.4H4.4A2.4 2.4 0 0 0 2 12.4V16h48z" fill="#202020"></path></svg>
                <div class="info">
                    <h3>secure payments</h3>
                    <span>Legitimate Sellers</span>
                </div>
        </div>

        </section:>

        <section class="products" id="products">
        <h1 class="heading"> latest <span> products</span></h1>
        <div class="imcontainer" id=imcontainer>
            <div class="row mt-2 pb-3">
        <?php
        include 'config.php';
        $stmt = $conn->prepare('SELECT * FROM product');
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()):
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2" style="max-height: 900px;">
                        <img src="<?= $row['product_image'] ?>" class="card-img-top" style="max-height: 150%;" alt="Product Image">
                        <div class="card-body p-1">
                            <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
                            <h5 class="card-text text-center text-danger"><i class="fas fa-peso-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>
                        </div>
                        <div class="card-footer p-1">
                            <form action="your_processing_script.php" class="form-submit">
                                <div class="row p-2">
                                    <div class="col-md-6 py-1 pl-4">
                                    
                                    </div>

                                </div>
                                <input type="hidden" class="id" value="<?= $row['id'] ?>">
                                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                <button class="btn btn-info btn-block viewdetails" onclick="information()"><i class="fas fa-eye"></i></i>&nbsp;&nbsp;view</button>
                                <button class="btn btn-info btn-block addItemBtn" onclick="addToCart()"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>

<script type="text/javascript">
  function addToCart() {
    // Your existing logic to add the item to the cart
    // ...

    // Create an invisible link
    var link = document.createElement("a");
    link.href = "cart.php";

    // Simulate a click on the link
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }


  function information() {
    // Your existing logic to add the item to the cart
    // ...

    // Create an invisible link
    var link = document.createElement("a");
    link.href = "information.php";

    // Simulate a click on the link
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
</script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var id = $form.find(".id").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          id: id,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
        </section>


        <section class="review" id="review">

            <h1 class="heading"> customer's <span>review</span></h1>

            <div class="box-container">

                <div class="box">
                    <div class="stars">
                        <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                        <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                        <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                        <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                        <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    </div>
                    <p>This is my very first order through site, and I am totally and completely satisfied! The fit is great and so are the prices. I will definitely return again and again...</p>
                    <div class="user">
                        <img src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.6435-9/123205712_1321292758203994_2293083876688580971_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=dd63ad&_nc_eui2=AeHquj6RmB-aHxRc6so_cUB0kJwOOk_4czSQnA46T_hzNI53dMvP4u0Kmu6blNGvYTHBTykbu8DTjuIwH1HaRi8_&_nc_ohc=QIY0U995sikAX_v0dF7&_nc_ht=scontent.fmnl4-4.fna&oh=00_AfDLdivPiPJglbjZQqV6OrP17GpxDCeBFIf6EV7MAY9a5A&oe=65648874"
                            alt=>
                        <div class="user-info">
                            <h3>anjadette jao</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <span><div class="fas fa-qoute-right"></span>
                    <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" class="quote-right-fws"><path d="M464 32H336C309.5 32 288 53.5 288 80V208C288 234.5 309.5 256 336 256H416V320C416 355.25 387.25 384 352 384H344C330.75 384 320 394.75 320 408V456C320 469.25 330.75 480 344 480H352C440.375 480 512 408.375 512 320V80C512 53.5 490.5 32 464 32ZM176 32H48C21.5 32 0 53.5 0 80V208C0 234.5 21.5 256 48 256H128V320C128 355.25 99.25 384 64 384H56C42.75 384 32 394.75 32 408V456C32 469.25 42.75 480 56 480H64C152.375 480 224 408.375 224 320V80C224 53.5 202.5 32 176 32Z"></path></svg></a>
                </div>
            </div>
            <div class="box">
                <div class="stars">
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                </div>
                <p>I love these clothes!! I love the fit!!! I love the price!!! I am on my 3rd order from you!! My order was here within a week and when I pulled out the clothes and tried them on.. I was skeptical no more. Keep those high low tops coming
                    and thank you for making me look great at work!!!</p>
                <div class="user">
                    <img src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/365164566_1962133287487182_2675061542129746096_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGewXQ0wP9fJ5FVMMSkFiQVUNz_TrZm5ehQ3P9Otmbl6BC-srSnziE96MpDO9WnSZM2brcN_DWLaBx8iGwzC10v&_nc_ohc=ECkqRaxbFSUAX_Ks6vx&_nc_ht=scontent.fmnl4-6.fna&oh=00_AfB3lWY2z2h2fY-W4Aigzs8CmLLJpob-LJnE2LNUzPe2rA&oe=65420DE0"
                        alt=>
                    <div class="user-info">
                        <h3>charles dologmanding</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span><div class="fas fa-qoute-right"></span>
                <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" class="quote-right-fws"><path d="M464 32H336C309.5 32 288 53.5 288 80V208C288 234.5 309.5 256 336 256H416V320C416 355.25 387.25 384 352 384H344C330.75 384 320 394.75 320 408V456C320 469.25 330.75 480 344 480H352C440.375 480 512 408.375 512 320V80C512 53.5 490.5 32 464 32ZM176 32H48C21.5 32 0 53.5 0 80V208C0 234.5 21.5 256 48 256H128V320C128 355.25 99.25 384 64 384H56C42.75 384 32 394.75 32 408V456C32 469.25 42.75 480 56 480H64C152.375 480 224 408.375 224 320V80C224 53.5 202.5 32 176 32Z"></path></svg></a>
            </div>
            </div>
            <div class="box">
                <div class="stars">
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                    <i class=><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-altgm"> <polygon fill="#FFC95E" fill-rule="evenodd" points="12 16.667 5 22 8 14 2 9.5 9.5 9.5 12 2 14.5 9.5 22 9.5 16 14 19 22"></polygon> </svg></i>
                </div>
                <p>I love the clothes from this website!! I am so glad I found them.....everything has been spot on, fits wonderfully, styles are trendy and lots to choose from!! Thanks for being here for us!!!</p>
                <div class="user">
                    <img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t39.30808-6/395157134_663680845869910_7216904850610968854_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF0E_RgU_7SGWSPeHcPGv0aEApDO308ZwUQCkM7fTxnBQWr-FDaE1PRbkqCbIkBuE_tHWPrdUa5_8RHpVlae7nf&_nc_ohc=15oBxGjSvrQAX-78vx1&_nc_ht=scontent.fmnl4-2.fna&oh=00_AfByn6tPxnzVXmNmsPDeKoqSJNQBq2PWzSEdIrX2dDUM7A&oe=6540FF25"
                        alt="">
                    <div class="user-info">
                        <h3>xiaoxi ong</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span><div class="fas fa-qoute-right"></span>
                <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" class="quote-right-fws"><path d="M464 32H336C309.5 32 288 53.5 288 80V208C288 234.5 309.5 256 336 256H416V320C416 355.25 387.25 384 352 384H344C330.75 384 320 394.75 320 408V456C320 469.25 330.75 480 344 480H352C440.375 480 512 408.375 512 320V80C512 53.5 490.5 32 464 32ZM176 32H48C21.5 32 0 53.5 0 80V208C0 234.5 21.5 256 48 256H128V320C128 355.25 99.25 384 64 384H56C42.75 384 32 394.75 32 408V456C32 469.25 42.75 480 56 480H64C152.375 480 224 408.375 224 320V80C224 53.5 202.5 32 176 32Z"></path></svg></a>
            </div>
            </div>

        </section>

        <section class="contact" id="contact">

            <h1 class="heading"> <span> contact</span> us</h1>

            <div class="row">

            <form method="post" action="">
    <input type="text" name="name" placeholder="name" class="box">
    <input type="email" name="email" placeholder="email" class="box">
    <input type="number" name="number" placeholder="number" class="box">
    <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="send message" class="btn">
</form>

                <div class="image">
                    <img src="https://i.imgur.com/wOGvngo.png" alt=>
                </div>
            </div>
        </section>

        <section class="footer">

            <div class="box-container">



                <div class="box">
                    <h3>extra links</h3>
                    <a href=https://www.facebook.com/BanAnnaEntertainment>Facebook</a>
                    <a>my order</a>
                    <a></a>
                </div>



                <div class="box">
                    <h3>contact info</h3>
                    <a>+63-928-7268-871</a>
                    <a>uniformcdm@gmail.com</a>
                    <a>Kasiglahan Rodriguez Rizal</a>
                    <img src=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24" class="cc-visa-fwb" fill="#06579a"><path d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2.3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4.2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2.2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2.1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z"></path></svg>
                    <img src=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24" class="cc-paypal-fwb" fill="#06579a"><path d="M186.3 258.2c0 12.2-9.7 21.5-22 21.5-9.2 0-16-5.2-16-15 0-12.2 9.5-22 21.7-22 9.3 0 16.3 5.7 16.3 15.5zM80.5 209.7h-4.7c-1.5 0-3 1-3.2 2.7l-4.3 26.7 8.2-.3c11 0 19.5-1.5 21.5-14.2 2.3-13.4-6.2-14.9-17.5-14.9zm284 0H360c-1.8 0-3 1-3.2 2.7l-4.2 26.7 8-.3c13 0 22-3 22-18-.1-10.6-9.6-11.1-18.1-11.1zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM128.3 215.4c0-21-16.2-28-34.7-28h-40c-2.5 0-5 2-5.2 4.7L32 294.2c-.3 2 1.2 4 3.2 4h19c2.7 0 5.2-2.9 5.5-5.7l4.5-26.6c1-7.2 13.2-4.7 18-4.7 28.6 0 46.1-17 46.1-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.2 8.2-5.8-8.5-14.2-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9 0 20.2-4.9 26.5-11.9-.5 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H200c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm40.5 97.9l63.7-92.6c.5-.5.5-1 .5-1.7 0-1.7-1.5-3.5-3.2-3.5h-19.2c-1.7 0-3.5 1-4.5 2.5l-26.5 39-11-37.5c-.8-2.2-3-4-5.5-4h-18.7c-1.7 0-3.2 1.8-3.2 3.5 0 1.2 19.5 56.8 21.2 62.1-2.7 3.8-20.5 28.6-20.5 31.6 0 1.8 1.5 3.2 3.2 3.2h19.2c1.8-.1 3.5-1.1 4.5-2.6zm159.3-106.7c0-21-16.2-28-34.7-28h-39.7c-2.7 0-5.2 2-5.5 4.7l-16.2 102c-.2 2 1.3 4 3.2 4h20.5c2 0 3.5-1.5 4-3.2l4.5-29c1-7.2 13.2-4.7 18-4.7 28.4 0 45.9-17 45.9-45.8zm84.2 8.8h-19c-3.8 0-4 5.5-4.3 8.2-5.5-8.5-14-10-23.7-10-24.5 0-43.2 21.5-43.2 45.2 0 19.5 12.2 32.2 31.7 32.2 9.3 0 20.5-4.9 26.5-11.9-.3 1.5-1 4.7-1 6.2 0 2.3 1 4 3.2 4H484c2.7 0 5-2.9 5.5-5.7l10.2-64.3c.3-1.9-1.2-3.9-3.2-3.9zm47.5-33.3c0-2-1.5-3.5-3.2-3.5h-18.5c-1.5 0-3 1.2-3.2 2.7l-16.2 104-.3.5c0 1.8 1.5 3.5 3.5 3.5h16.5c2.5 0 5-2.9 5.2-5.7L544 191.2v-.3zm-90 51.8c-12.2 0-21.7 9.7-21.7 22 0 9.7 7 15 16.2 15 12 0 21.7-9.2 21.7-21.5.1-9.8-6.9-15.5-16.2-15.5z"></path></svg>
                </div>
            </div>

            <div class="credit"> created by <span> BSIT 2-E </span> | all right reserved</div>
        </section>

</body>

</html>

</body>
</html>