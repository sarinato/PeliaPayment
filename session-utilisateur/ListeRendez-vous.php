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
	<title>Liste des Rendez-vous</title>
	<?php
	include "link.php";
    ?>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/json.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
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
									liste des Rendez-vous
									<span>auquel vous etes alérter</span>
								</a>
							</li>
							</ul>
						</div>
						<div class="medicament-contents bg-medicament">
							<div class="tab-content" id="pills-tabContent">
							<div  class="">
								<!-- Card global popup -->
								
											<!-- Form -->
										<form class="" action="requetteAjoutMedic.php" method="POST">
										<div class="d-flex justify-content-around flex-wrap simple-information">
											<div class="col-md-8">
												<div class="card form-ajout-medic">
													<div style="" class="card-body">
														<h5 class="card-title ">Vos Rendez-vous </h5>
														
														<div class="form-group ">
                                                        <a class="appelSpecifier pop" href="#specifier">
														<div class="search-form medecin ">
                                                            
														    <img  src="img/Rndv1.svg" width="16%" alt="">
                                                            
                                                            <div class="NomMed Margin pic">
                                                            <h4 class="">Contrôle</h4>
                                                            <span>12-09-2019,16:00</span>
                                                            </div></a>

                                                            <a class="appelSpecifier pop  " href="#specifier"><div class="search-form medecin ">
                                                            
														    <img src="img/Rndv1.svg" width="16%" alt="">
                                                            
                                                            <div class="NomMed Margin  pic">
                                                            <h4 class="">Analyse</h4>
                                                            <span>25-06-2019,09:30</span>
															</div></a>	
                                                        </div>
														
													</div>	
														
											</div>
													
										</div>
												
											</div>
											
											</div>
												
												</div>
												<div class="d-flex justify-content-center mt-5">
															<a class="primary-btn contact100-form-btn" href="rendez-vous.php">Ajouter un rendez-vous</a>
											</div>
												<div style="width:100%;border-radius:20px" class="mfp-hide white-popup-block d-flex justify-content-center animated zoomIn one" id="specifier">
												
												<div style=" max-width:470px; background:#fff;border-radius:20px">

													<div class="card joursSpicifier">

                                                    <div style=" padding-bottom: 0;padding-top: 0;" class=" card-header header">	
                                                        <div class="NomMed Margin pic prof">
															<h3 class="NomdeR">Contrôle</h3>
															<a class=" editButton editRndv" href=""><img class="edit modif" src="img/edit1.svg" width="7%" alt=""></a>
															<a class=" suppButton suppRndv" href=""><img class="supp del" src="img/delete.svg" width="4%" alt=""></a>

															<p><a class="popup-jours-annuler closeButton" href="#"><img class="closee ferme" src="img/closee.svg" width="7%" alt=""></a></p>
                                                        </div>	
                                                    </div>
													<div class="card-body box-shodw coordonne" id="coordonne">
                                                        
														<div style="margin-top:-7%;" class="form-group checkbox jours Cord" >

														<div class="search-form medecin ">
															<img  src="img/doctor.svg" width="12%" alt="">
                                                            <div class="NomMed Margin pic">
                                                            <h4 class="Nom Margin pic">Abdo</h4>
                                                        </div>

														<div style="margin-top:9%;" class="search-form medecin">
															<img  src="img/time.svg" width="7%" alt="">
															<span class=" Margin pic  spanRndv ">12Juillet,09:30</span>
														</div>
                                                            
														<div class="search-form medecin ">
															<img  src="img/alarm.svg" width="7%" alt="">
															<span class="Margin pic  spanRndv">10 minutes avant</span>
														</div>
														<div class="search-form medecin ">
															<img  src="img/adresse.svg" width="7%" alt="">
															<span class="Margin pic spanRndv">EL YASSMIN2 N148 IZDIHAR MARRAKECH</span>
														</div>

														<div class="search-form medecin ">
															<img  src="img/remarque.svg" width="7%" alt="">
															<span class="Margin pic spanRndv">Très important</span>														</div>

                                                        </div>
                                                        
                                                    </div>
                                                    	
                                                    
												
													
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
		<script src="dist/timepicker.min.js"></script>
        <script>
	        document.addEventListener("DOMContentLoaded", function(event)
			{
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
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


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