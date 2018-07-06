	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Accueil</title>


			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css') }}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css') }}">
			<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			       
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{url('index')}}">Acceuil</a></li>
			          <li><a href="{{url('services')}}">Compétences</a></li>
			          <li><a href="{{url('contact')}}">Contact</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="img/yy.jpg" alt="">
						</div>

						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>A propos de moi</h6>
							<h1 class="text-uppercase">Détails Personnels</h1>
							@foreach($detail_peoples as $detail_people)
							<p>
							   {{ $detail_people->contenu }}
							</p>
							@endforeach
							<a id="clicker" class="primary-btn text-uppercase">Plus de Détails</a>
						</div>

					</div>
			</section>
			

			<section id="new" class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center" style="margin-top: 30px">
                        <h1 class="mb-10">Systèmes et Langages de Programmation</h1>
                    </div>
                </div>
            </div>				
			  <ul>
			    <li>
			      <div class="content">
			        <h4>
			          <time>Microsoft Windows, Windows Server</time>
			        </h4>
			        <p><b>Session:</b> 2010-11</p>
			        <p><b>Result:</b> 3.78 (In the Scale of 4.00)</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{url('img/about/c-logo.png')}}" alt="">
			        <h4>
			          <time>Developpement Web</time>
			        </h4>
			        <p>JavaScript</p>
			        <p>React.js</p>
			        <p>Java</p>
			        <p>HTML</p>
			        <p>JSP</p>
			        <p>Laravel</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			        <h4>
			          <time>Systemes Linux</time>
			        </h4>
			       <p>Ubuntu</p>
			       <p>kali</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{url('img/about/c-logo.png')}}" alt="">
			        <h4>
			          <time>Application Mobile et Bureautique</time>
			        </h4>
			        <p>React Js</p>
			        <p>Java</p>
			      </div>
			    </li>
			  </ul>
			</section>		

			<!-- Start services Area -->
			<section class="services-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Mes qualifications</h1>
		                      
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4>Web Design</h4></a>
								<p>
									" Il est impossible de tenir un design entre ses mains. Le design n'est pas une chose. C'est un processus. Un systeme. Une maniere de penser"
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-laptop-phone"></span>
								<a href="#"><h4>Web Development</h4></a>
								<p>Un Geek ne se couche pas, il se met au format paysage</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-camera"></span>
								<a href="#"><h4>Photography</h4></a>
								<p>
									« Photographier, c’est une attitude, une façon d’être, une manière de vivre » 
								</p>
							</div>	
						</div>
						
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-tablet"></span>
								<a href="#"><h4>Apps Interface</h4></a>
								<p>
									“En terme de design, il y a selon moi deux choses essentielles: la simplicité et la clarté. Un bon design nait de ces deux éléments ».
								</p>
							</div>
						</div>
																			
					</div>
				</div>	
			</section>
			<!-- End services Area -->		

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>A Propos de moi</h4>
                                <p>
                                   Abonnez vous a mon NewsLetter pour des articles sur la technologie et autres
                                </p>
                               
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Suivez moi</h4>
                                
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
			<script src="{{asset('js/modif.js')}}"></script>
			<script src="{{asset('js/popper.min.js')}}"></script>
			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
  			<script src="{{asset('js/easing.min.js')}}"></script>
			<script src="{{asset('js/hoverIntent.js')}}"></script>
			<script src="{{asset('js/superfish.min.js')}}"></script>
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    		<script src="{{asset('js/jquery.tabs.min.js')}}"></script>
			<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
            <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
			<script src="{{asset('js/waypoints.min.js')}}"></script>
			<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
			<script src="{{asset('js/simple-skillbar.js')}}"></script>
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('js/mail-script.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
		</body>
	</html>