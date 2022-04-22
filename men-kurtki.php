<!DOCTYPE html>
<html lang="en">
<head>
<meta name="keywords" content="KARAMBOLLA, МУЖСКИЕ КУРТКИ, новинки, женщины, мужчины, подростки, дети">
    <meta name="description" content="KARAMBOLLA интернет-магазин мужские куртки">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/men-jeans2.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/logo.png" type="img/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0c6f21b261.js" crossorigin="anonymous"></script>
    <title>Мужчины Куртки</title>
</head>
<body>
    
<?php require "document/header-sale.php" ?>


<div class="header__logo">
    <h3>
        <strong>
            KARAMBOLLA  
        </strong>
    </h3>
</div>
<?php require "document/header-menu.php" ?>


<div class="container">
    <div class="filter__flex">
        <div class="text__filter">
            <i class='bx bx-slider'></i>
            <p>Отфильтровать</p>
        </div>

    </div>
    <div class="title__flex">
        <h3>МУЖСКИЕ КУРТКИ</h3>
    </div>
</div>


<div class="container_cart">
    <div class="cart__flex">
        <div class="cart">
            <a href="cart-men-kurtki1.php"><img src="img/men-kurtki.png" alt=""></a>            
            <i class="fa-solid fa-heart cart-heart"></i>
            <i class="fa-solid fa-cart-shopping cart-basket"></i>
            <p>12 499 руб</p>
        </div>
        <div class="cart">
            <a href="cart-men-kurtki2.php"><img src="img/men-kurtki2.png" alt=""></a>
            <i class="fa-solid fa-heart cart-heart"></i>
            <i class="fa-solid fa-cart-shopping cart-basket"></i>
            <p>34 999 руб</p>
        </div>
        <div class="cart">
            <a href="cart-men-kurtki3.php"><img src="img/men-kurtki3.png" alt=""></a>
            <i class="fa-solid fa-heart cart-heart"></i>
            <i class="fa-solid fa-cart-shopping cart-basket"></i>
            <p>6999 руб</p>
        </div>
        <div class="cart">
            <a href="cart-men-kurtki4.php"><img src="img/men-kurtki4.png" alt=""></a>
            <i class="fa-solid fa-heart cart-heart"></i>
            <i class="fa-solid fa-cart-shopping cart-basket"></i>
            <p>26 999 руб</p>
        </div>
        <div class="cart">
            <a href="cart-men-kurtki5.php"><img src="img/men-kurtki5.png" alt=""></a>
            <i class="fa-solid fa-heart cart-heart"></i>
            <i class="fa-solid fa-cart-shopping cart-basket"></i>
            <p>6999 руб</p>
        </div>
        <div class="cart">
            <a href="cart-men-kurtki6.php"><img src="img/men-kurtki6.png" alt=""></a>
            <i class="fa-solid fa-heart cart-heart"></i>
            <i class="fa-solid fa-cart-shopping cart-basket"></i>
            <p>6999 руб</p>
        </div>
    </div>
</div>






<div class="select__list">
    <div class="container__select">
        <div class="select__flex">
            <h3>
                Подпишись на нашу рассылку и получи скидку 10% на заказ онлайн.
            </h3>
            <p>
                Получай специальные скидки и ранний доступ к специальным предложениям,
                новым коллекциям и актуальным трендам.
            </p>
            <form action="" class="form__select">
                <input type="email" name="email" placeholder="E-mail">
                <input type="submit" value="ПОДПИСАТЬСЯ">
            </form>
            <span>
                Нажимая кнопку “Подписаться”, вы принимаете условия <a href="#">рассылки</a>
            </span>
        </div>
    </div>
</div>


<?php require "document/footer.php" ?>
    <script>
        function popupp(){
        const popup2 = document.getElementById("search-form");
        const popup3 = document.getElementById("search-form__vxod");
        popup2.classList.toggle("active2");
        popup3.classList.toggle("active3");
    }
    </script>
    <script>
        function popuptoggle(){
        const popup = document.getElementById("modal");
        popup.classList.toggle("active");
    }
    </script>

    <script>
        function popup(){
        const popup4 = document.getElementById("korzina");
        popup4.classList.toggle("active4");
    }
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>