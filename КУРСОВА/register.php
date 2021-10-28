<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.css">
    <title>Регистрация</title>
    <!-- Registration -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand" href="#"><img src="img/Pette.png" width="100" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
        <span class="toggler-icon"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mx-auto text-capitalize">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Начало</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="aboutus.html">За нас</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="order.html">Поръчка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="careers.html">Кариери</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Вход</a>
            </li>
        </ul>
        <div class="nav-info-items d-none d-lg-flex ">
            <!-- single info -->
            <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
                <span class="info-icon mx-lg-3"><i class="fas fa-phone"></i></span>
                <p class="mb-0">+ 052 456 789</p>
            </div>
            <!-- single info -->
            <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                <span class="cart-info__icon mr-lg-3"><i class="fas fa-shopping-cart"></i></span>
                <p class="mb-0 text-capitalize"><span id="item-count">0</span> артикул(а) - <span class="item-total">0.00</span> лв</p>
            </div>
            <!-- end of single info -->
        </div>
    </div>
</nav>
<!-- end of nav -->
<!-- banner  -->
<div class="container-fluid">
    <div class="row max-height justify-content-center align-items-center">
        <div id="cart" class="cart">
            <!-- cart total -->
            <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
                <h5>Общо</h5>
                <h5> <strong id="cart-total" class="font-weight-bold">0 </strong> лв</h5>
            </div>
            <!--end cart total -->
            <!-- cart buttons -->
            <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">Изчисти</a>
                <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">Плати</a>
            </div>
        </div>
    </div>
    <div class="bodyForm">
        <div class="containerForm">
<form class="form " id="createAccount" action="PHP/signup.php" method="POST">
    <h1 class="form__title">Create Account</h1>
    <div class="form__message form__message--error"></div>
    <div class="form__input-group">
        <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username">
        <div class="form__input-error-message"></div>
    </div>
    <div class="form__input-group">
        <input type="text" class="form__input" autofocus placeholder="Email Address" name="email">
        <div class="form__input-error-message"></div>
    </div>
    <div class="form__input-group">
        <input type="password" class="form__input" autofocus placeholder="Password" name="password">
        <div class="form__input-error-message"></div>
    </div>
    <div class="form__input-group">
        <input type="password" class="form__input" autofocus placeholder="Confirm password">
        <div class="form__input-error-message"></div>
    </div>
    <button class="form__button" type="submit" name="submit">Continue</button>
    <p class="form__text">
        <a class="form__link" href="login.html" id="linkLogin">Already have an account? Sign in</a>
    </p>
</form>
</div>
</div>
    <p class="copy"> &copy Copyright 2021</p>
<script src="login.js"></script>


</body>
</html>