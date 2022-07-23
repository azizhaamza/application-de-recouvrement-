<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
            <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/font-awesome.min.css">

            <!-- Custom styles for our template -->
            <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
            <link rel="stylesheet" href="assets/css/main.css">

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
            <![endif]-->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @include('nav_bar');
    

            <!-- Header -->
	<header id="head">
		<div class="container fluid">
			<div class="row img-fluid">
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">La société tunisienne de l’électricité et du gaz (STEG) est une entreprise publique à caractère non administratif (EPNA) </h2>
		<p class="text-muted">
			Elle a pour mission la production et la distribution de l’électricité et du gaz naturel sur le territoire tunisien. Jusqu’en août 1959, l’industrie électrique tunisienne est répartie entre 8 sociétés différentes. Ayant décidé de prendre provisoirement en charge ces sociétés, l’Etat tunisien place, le 15 août 1958, un comité de gestion à la tête de l’une de ces sociétés (connue sous le nom de Compagnie tunisienne d’électricité et de transport). Par le décret-loi n°62-8 du 3 avril 1962, l’Etat met fin à cette situation en créant un monopole public confié à la STEG.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin"></h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Missions</h4></div>
					<div class="h-body text-center">
						<p>La STEG assure la production de l’énergie électrique et du GPL, ainsi que le transport et la distribution de l’électricité et du gaz naturel au niveau national.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Objectifs</h4></div>
					<div class="h-body text-center">
						<p>Pouvoir le marché national en énergies électrique et gazières et de répondre aux de l’ensemble de ses clients (résidentiels, industriels, tertiaires ...)  </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>	Direction Recouvrement </h4></div>
					<div class="h-body text-center">
						<p>La mission principale de cette direction est de collecter les sommes impayées aux créanciers.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Taches de direction recouvrement </h4></div>
					<div class="h-body text-center">
						<p>Suivi des résultats de réduction des pertes d’énergie au niveau de la Distribution.</p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container ">

		<h2 class="text-center top-space">Organigramme STEG</h2>
		<br>
		<div class="row">
		<img src="{{ asset('assets/images/orgsteg.png') }}"class="img-fluid" style="margin-left: 270px" >
		</div>
	

		

		

		<div class="jumbotron top-space">
			<h4>Le monde change,La STEG évolue</h4>
			<p>Siège : Tunis</p>
			<p>Adresse : 38 rue Kamel Ataturk 1080 Tunis</p>
			<p>Adresse Postale : BP 190, 1080 Tunis cedex</p>
			<p>e-mail: dpsc@steg.com.tn</p>
			<p> Tél : 71 341 311 </p>

     		<p class="text-right"><a href="https://www.steg.com.tn/fr/index.html" class="btn btn-primary btn-large">Steg.com »</a></p>
  		</div>

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->

@include('footer')
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>