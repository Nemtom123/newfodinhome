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
<div class="wrapper">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="images/3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title fodin-button">Fodor Norbert</h5>
                    <button class="fodin" type="button">TOVÁBB <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
<h6>Igazgató</h6>
<p class="card-text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
<div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="images/3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Fodor Norbert</h5>
<h6>
Igazgató</h6>
<p class="card-text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque aliquid similique eius alias facilis quisquam, ipsa dolor.</p>
<div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="images/3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">
Fodor Norbet</h5>
<h6>
Igazgató</h6>
<p class="card-text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse amet repellat, eaque aliquid similique eius alias facilis quisquam, ipsa dolor.</p>

<div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
</div>
</div>
</div>
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
            <img class="card-img" src="images/3.jpg" alt="Card image">
        </div>
    </div>
</div>
<br>
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
