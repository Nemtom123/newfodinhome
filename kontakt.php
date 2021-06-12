<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2020. 02. 09.
 * Time: 19:17
 */
//include ("add.php");
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <script src="contactform/contactform.js"></script>
    <style>
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #ffc81e;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #ffc81e;
        }
        .column {
            float: left;
            width: 100%;
            margin-top: 6px;
            padding: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
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
<!-- 
<hr>
<!--Section: Contact v.2-->
<section class="mb-4 slower bounce">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 slower bounce ">Lépjen kapcsolatba velünk</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto my-5 slower bounce">Van kérdése? Kérjük, ne habozzon kapcsolatba lépni velünk. Csapatunk néhány órán belül válaszol, hogy segítsen.</p>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <p><span class="icon icon-map-marker"></span> 3525 Miskolc Győri K. 24/B</p>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p><span class="icon icon-phone"></span></p>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p><span class="icon icon-phone"></span></p>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <p><span class="icon icon-envelope"></span> Email: </p>
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-md">
                    <form method="post" action="form-to-email.php" role="form" class="form contactForm">
                        <label for="fname">Név : </label>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Név"
                                       data-rule="minlen:4"
                                       data-msg="Minimum 4 karaktert kell beírni"/>
                                <div class="validation" style="color: orangered"></div>
                            </div>
                        </div>
                        <label for="fname">Email cím : </label>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="email" id="email" placeholder="Pl: tesztelek@gmail.com"
                                       data-rule="email"
                                       data-msg="Rossz E-mail cím"/>
                                <div class="validation" style="color: orangered"></div>
                            </div>
                        </div>
                        <label for="fname">Tárgy : </label>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text"  name="sub" id="subject" placeholder="Tárgy"
                                       data-rule="minlen:4"
                                       data-msg="Kérem minimum 4 karaktert adjon meg"/>
                                <div class="validation" style="color: orangered"></div>
                            </div>
                        </div>
                        <label for="fname">Üzenet : </label>
                        <div class="col-md-12">
                            <div class="form-group">
                <textarea name="comments" rows="5" data-rule="required"
                          data-msg="Kérem írjon üzenetet"
                          placeholder="Üzenet"></textarea>
                                <div class="validation" style="color: orangered"></div>
                            </div>
                        </div>
                        <div id="sendmessage" style="text-align: center; color: red"></div>
                <div id="errormessage" style="text-align: center; color: red"></div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="submit" value="Küldés">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<!--Section: Contact v.2-->

<br>
<?php
include_once 'footer.php';
?>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/vip.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>
<script src="contactform/contactform.js"></script>


</body>
</html>