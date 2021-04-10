<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Fodin-Home KFT</title>
    <meta name="description" content="Építkezés, Felújítás">
    <meta name="keywords" content="Építkezés, Felújítás">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>

</head>
<body>

<?php
include_once 'NavMenu.php';
?>

<section class = "header">
    <h2>szöveg</h2>
    <p >szöveg helye</p>
</section>
<br>
<!-- Belső rész -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="card-img" src="images/10.jpg" alt="Card image">
        </div>
        <br><br>
        <div class="col-md-8">
            <h2 class="h4 card-title m-b-1 text-uppercase verso-mb-3"> szöveg</h2>
            <p class="card-text">szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg. </p>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="h4 card-title m-b-1 text-uppercase verso-mb-3"> szöveg</h2>
            <p class="card-text"> szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg szöveg.</p>
        </div>
        <div class="col-md-4">
            <img class="card-img" src="images/10.jpg" alt="Card image">
        </div>
    </div>
</div>
<br>
<!-- /Belső rész vége-->
<?php
include_once 'footer.php';
?>

<!--jQuery-->
<script src="jquery/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        "use strict";
        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">&nbsp;</a>");
        $(".menu > ul > li").hover(function(e) {
            if ($(window).width() > 943) {
                $(this).children("ul").stop(true, false).fadeToggle(150);
                e.preventDefault();
            }
        });
        $(".menu > ul > li").click(function() {
            if ($(window).width() <= 943) {
                $(this).children("ul").fadeToggle(150);
            }
        });
        $(".menu-mobile").click(function(e) {
            $(".menu > ul").toggleClass('show-on-mobile');
            e.preventDefault();
        });
    });
    $(window).resize(function() {
        $(".menu > ul > li").children("ul").hide();
        $(".menu > ul").removeClass('show-on-mobile');
    });

</script>
</body>
</html>
