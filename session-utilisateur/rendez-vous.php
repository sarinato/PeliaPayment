<?php
include("verificationLogin.php");

?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Ajouter un rendez-vous</title>
        <?php
	include "link.php";
	?>
            <link rel="stylesheet" href="css/json.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>

    <body>

        <!--================ Start Header Menu Area =================-->
        <?php
	include "header.php";
	?>
            <!--================ End Header Menu Area =================-->

            <div class="site-main">
                <!--================ Start Home Banner Area =================-->
                <section class="home_banner_area common-banner">
                    <div class="banner_inner">
                        <div class="container-fluid no-padding">
                            <div class="row fullscreen">

                            </div>
                        </div>
                    </div>
                </section>

                <!--================ End Home Banner Area =================-->

                <!--==============================
		=            medicament            =
		===============================-->

                <section class="section medicament">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="medicament-tab">
                                    <ul class="nav nav-pills text-center">
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill">
									Ajouter des Rendez-vous
									<span>auquel vous etes alérter</span>
								</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="medicament-contents bg-medicament">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="VR">
                                            <!-- Card global popup -->

                                            <!-- Form -->
                                            <form class="" action="requetteAjoutMedic.php" method="POST">
                                                <div class="d-flex justify-content-around flex-wrap simple-information">
                                                    <div class="col-md-8">
                                                        <div class="card">
                                                            <div class="card-body VR">
                                                                <h5 class="card-title ">Ajouter un rendez-vous</h5>

                                                                <div class="form-group ">
                                                                    <div class="search-form medecin ">
                                                                        <input placeholder="Nom du rendez-vous" class="typeText search Margin pic" type="text" name="nomRend" required>
                                                                    </div>
                                                                    <div class="form-group col-md-12 selectt ">
                                                                        <div class="form-select Margin medecin rightt">
                                                                            <select class="pic slc" name="typeMedic">
                                                                                <option value="select">Choisissez un medecin</option>
                                                                                <option value="select">Aucun médecin</option>
                                                                                <option value="comprimé" value="en" class="test" data-thumbnail="img/doctor.svg">Ahmed</option>
                                                                                <option value="comprimé" value="en" class="test pls" data-thumbnail="img/plus.svg">Ajouter un medecin</option>
                                                                            </select>
                                                                            <div style="z-index:99999;" class="form-group lang-select ">
                                                                                <button class="btn-select" value=""></button>
                                                                                <div class="b">
                                                                                    <ul id="a"></ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="search-form medecin ">

                                                                        <div class="input-group dateRendez">
                                                                            <img src="img/rendez.svg" width="7%" alt="">
                                                                            <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                                                            <input class="input--style-2 js-datepicker " type="text" placeholder="Date de Rendez-vous" name="dateRendez">

                                                                        </div>
                                                                    </div>
                                                                    <div class="search-form medecin">
                                                                        <img src="img/time.svg" width="7%" alt="">
                                                                        <div class="form-group unique" id="timeRendez">
                                                                            <input type="text" name="frequenceJ2" data-toggle="timepicker" class="form-input  " autocomplete="off" placeholder="12:00">
                                                                        </div>
                                                                    </div>

                                                                    <div class="search-form medecin ">
                                                                        <img src="img/alarm.svg" width="7%" alt="">
                                                                        <a class="appelSpecifier reminder" href="#rappel"><span class="Margin pic">Aucun rappel</span></a>
                                                                    </div>

                                                                    <div class="search-form medecin ">
                                                                        <img src="img/adresse.svg" width="7%" alt="">
                                                                        <input placeholder="Ajouter un emplacement" class="typeText search Margin pic" type="text" name="LocMed" required>
                                                                    </div>

                                                                    <div class="search-form medecin ">
                                                                        <img src="img/remarque.svg" width="7%" alt="">
                                                                        <input placeholder="Ajouter des remarques" class="typeText search Margin pic" type="text" name="RemarqueMed" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex justify-content-center mt-5">
                                                    <button class="primary-btn contact100-form-btn" type="submit" name="submit">Ajouter</button>
                                                </div>

                                        </div>

                                    </div>
									<div class="VM" style="display:none">
                                            <!-- Card global popup -->

                                            <!-- Form -->
                                            <form class="" action="requetteAjoutMedic.php" method="POST">
                                                <div class="d-flex justify-content-around flex-wrap simple-information">
                                                    <div class="col-md-8">
                                                        <div class="card">
                                                            <div class="card-body VM">
                                                                <h5 class="card-title ">Ajouter un médecin</h5>

                                                                <div class="form-group ">
                                                                    <div class="search-form medecin ">
                                                                        <img src="img/doctor.svg" width="12%" alt="">
                                                                        <input placeholder="Nom du médecin" class="typeText search Margin pic" type="text" name="nomMed" required>
                                                                    </div>
                                                                    <div class="search-form medecin ">
                                                                        <input placeholder="Spécialité" class="typeText search Margin specialite" type="text" name="SpecMed" required>
                                                                    </div>
                                                                    <div class="search-form medecin ">
                                                                        <img src="img/phone1.svg" width="7%" alt="">
                                                                        <input placeholder="Numéro de téléphone" class="typeText search Margin pic" type="text" name="numMed" required>
                                                                    </div>

                                                                    <div class="search-form medecin ">
                                                                        <img src="img/email.svg" width="7%" alt="">
                                                                        <input placeholder="Email" class="typeText search Margin pic" type="email" name="emailMed" required>
                                                                    </div>

                                                                    <div class="search-form medecin ">
                                                                        <img src="img/adresse.svg" width="7%" alt="">
                                                                        <input placeholder="Adresse" class="typeText search Margin pic" type="text" name="adresseMed" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex justify-content-center mt-5">
                                                    <button class="primary-btn contact100-form-btn VMbtn" type="submit" name="submit">Ajouter</button>
                                                </div>

                                        </div>

                                    </form>

                                    <!-- END Form -->

                                </div>
                                <!-- Material form contact -->

                                <!-- popup magnifique with form -->

                            </div>
                        </div>
                    </div>
            </div>
            </div>
            </section>

            <!--====  End of medicament  ====-->
            <script>
                var langArray = [];
                $('.slc option').each(function() {
                    var img = $(this).attr("data-thumbnail");
                    var text = this.innerText;
                    var value = $(this).val();
                    var item = '<li><img src="' + img + '" alt="" value="' + value + '"/><span>' + text + '</span></li>';
                    langArray.push(item);
                })

                $('#a').html(langArray);

                //Set the button value to the first el of the array
                $('.btn-select').html(langArray[0]);
                $('.btn-select').attr('value', 'en');

                //change button stuff on click
                $('#a li').click(function() {
                    var img = $(this).find('img').attr("src");
                    var value = $(this).find('img').attr('value');
                    var text = this.innerText;
                    var item = '<li><img src="' + img + '" alt="" /><span>' + text + '</span></li>';
                    $('.btn-select').html(item);
                    $('.btn-select').attr('value', value);
                    $(".b").toggle();
                    //console.log(value);
                });

                $(".btn-select").click(function(event) {
                    $(".b").toggle();
                    event.preventDefault();
                    $('li:first-child').css('display','none');
                });

                //check local storage for the lang
                var sessionLang = localStorage.getItem('lang');
                if (sessionLang) {
                    //find an item with value of sessionLang
                    var langIndex = langArray.indexOf(sessionLang);
                    $('.btn-select').html(langArray[langIndex]);
                    $('.btn-select').attr('value', sessionLang);
                } else {
                    var langIndex = langArray.indexOf('ch');
                    console.log(langIndex);
                    $('.btn-select').html(langArray[langIndex]);
                    //$('.btn-select').attr('value', 'en');
                }
                $('li:last-child').click(function(e) {
                    $('.VR').css('display','none');
					$('.VM').css('display','block');
                })
                
				$('.VMbtn').click(function(e){
					$('.VR').css('display','block');
					$('.VM').css('display','none');
				})
            </script>

            <script>
                var avant = document.getElementsByClassName('avant');
                var reminder = document.getElementsByClassName('reminder')[0];

                for (i = 0; i < avant.length; i++) {
                    avant[i].addEventListener("click", function(e) {
                        reminder.innerHTML = e.target.innerHTML;
                    })
                }
                $(function() {
                    for (let i = 1; i <= 7; i++) {
                        $('#sel' + i).click(function() {
                            var nameValue = $(this).html();
                            $('#inpSel' + i).val(nameValue);
                        });
                    }

                });
            </script>

            <script type="text/javascript">
                $('.clockpicker').clockpicker({
                    placement: 'top',
                    align: 'left',
                    donetext: 'Done'
                });
            </script>
            <script src="dist/timepicker.min.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function(event) {
                    timepicker.load({
                        interval: 15,
                        defaultHour: null
                    });
                });
            </script>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/stellar.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>

            <script src="vendors/lightbox/simpleLightbox.min.js"></script>
            <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
            <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
            <script src="vendors/jquery-ui/jquery-ui.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
            <script src="vendors/counter-up/jquery.counterup.js"></script>
            <script src="js/mail-script.js"></script>
            <!--gmaps Js-->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
            <script src="js/gmaps.min.js"></script>
            <script src="js/theme.js"></script>
            <script src="js/global.js"></script>

            <!-- Jquery JS-->
            <script src="vendors/jquery/jquery.min.js"></script>
            <!-- Vendor JS-->
            <script src="vendors/select2/select2.min.js"></script>
            <script src="vendors/datepicker/moment.min.js"></script>
            <script src="vendors/datepicker/daterangepicker.js"></script>

            <!-- Main JS-->
            <script src="js/global.js"></script>

    </body>

    </html>