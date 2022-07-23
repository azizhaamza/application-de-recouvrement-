<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Inscription</title>

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
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo steg" width="50" height="50" ></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="/">Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!--<header id="head" class="secondary"></header>-->

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Inscription</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<hr>

							<x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form method="POST" action="{{ route('register') }}" >
                                        	@csrf

                                        <!-- Name -->
                                        <div class="top-margin">
                                            <x-label for="name" :value="__('Name')" /><span class="text-danger">*</span>
                                        	<x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="top-margin">
                                            <x-label for="email" :value="__('Email')" /><span class="text-danger">*</span>
                                        	<x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                        </div>

                                        <!-- Password -->
                                        <div class="row top-margin">
                                            <div class="col-sm-6">
                                                <x-label for="password" :value="__('Password')" /><span class="text-danger">*</span>
                                                <x-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                                            </div>

                                            <!-- Confirm Password -->
                                            
                                                <div class="col-sm-6">
                                                    <x-label for="password_confirmation" :value="__('Confirm Password')" /><span class="text-danger">*</span>

                                                    <x-input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation" required />
                                                </div>
                                            </div>
                                         <!--chapm pour entrer CIN -->
                                        <div class="mt-4">
                                        	<x-label for="user_cin" value="{{ __('CIN') }}" />
                                        	<x-input id="user_cin" class="form-control" type="text" name="user_cin" :value="old('user_cin')" required />
                                        </div>
                                        <!--choisir type de compte-->
                                        <div class="top-margin">
                                                <x-label for="role_id" :value="__('Register as:')" /><span class="text-danger">*</span>
                                                <select name="role_id" class="form-control">
													<option value="user" id="user">User</option>
													<option value="responsable_de_recouvrement" id="responsable">Responsable de recourement </option>
													<option value="admin" id="admin">admin </option>

                                        		</select>
                                        </div>
										<div class="row top-margin">
											<div class="col-sm-6" id="div1" >
											<x-label for="reference" value="{{ __('Réference') }}" /><span class="text-danger">*</span>
											<x-input id="reference" class="form-control" type="text" :value="old('client_reference')" name="reference" />
											</div>
											<div class="col-sm-6" id="div2" >
											<x-label for="region_id" value="{{ __('Région') }}" /><span class="text-danger">*</span>
											<select name="region_id" style="width: 200px"id="region_id" class="form-control">
												<option value="">---choisir---</option>
												@foreach ($regions as $reg )
													<option value="{{ $reg->id }}" >{{ $reg->nom_region }}</option>
												@endforeach
												
											</select>
											</div>
											<div class="col-sm-6" id="div2" >
												<x-label for="district_id" value="{{ __('District') }}" /><span class="text-danger">*</span>
												<select name="district_id" class="form-control">
												<option value="0" >----choisir-----</option>
												@foreach ($districts as $district)
													<option value="{{ $district->id }}" >{{ $district->nom_district }}</option>
												@endforeach
												</select>

											</div>
										</div>
                                                        
                                        <!--les champs pour responsable-->
                                     <div class="row top-margin" id="div3" >                  
										<div class="col-sm-8" >
												<x-label for="matricule" value="{{ __('Matricule') }}" /><span class="text-danger">*</span>
												<x-input id="matricule" class="form-control" type="text"  name="matricule" />
										</div>
										<div class="col-sm-8" >
											<x-label for="matriculeadmin" value="{{ __('Matricule Admin') }}" /><span class="text-danger">*</span>
											<x-input id="matriculeadmin" class="form-control" type="text"  name="matriculeadmin" />
									</div>
									</div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        	    {{ __('Already registered?') }}
                                            </a>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <x-button class="btn btn-action">
                                        	{{ __('Register') }}
                                    	    </x-button>
                                        </div>
                                    </div>
                                </form>

						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								2020 Copyright &copy;, STEG
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>
	
		
		




	 <!--JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>


	<!--<script type="text/javascript">
		$(document).ready(function()
		{
					$(document).on('change','.region_name_id',function()
					{
								console.log("hmm it's");

								var region_id=$(this).val();
								console.log(region_id) ;
								var div=$(this).parent();

								var op=" ";



								$.ajax({
									type:'get',
									url:'{!!URL::to('register/findDistrictName')!!}',
									data:{'id':region_id},
									success:function(data)
									{
										console.log('success'); 


										console.log(data);
										//console.log(data.length);
											op+='<option value="0" selected disabled>choisir district</option>';
											for(var i=0;i<data.length;i++)
											{
												op+='<option value="'+data[i].id+'">'+data[i].nom_district+'</option>';
											}
										div.find('.district').html(" ");
										div.find('.district').append(op);
									}
									,error:function()
									{

									}
								});
					});
		});



				 
				 
	
	</script>
	<script>
		document.getElementById("div1").style.display = "none";
		document.getElementById("div2").style.display = "none";
		document.getElementById("div3").style.display = "none";
		let role= document.querySelector('responsable');
		role.addEventListener('click',function(){
			document.getElementById("div3").style.display = "block";
			document.getElementById("div1").style.display = "none";
			document.getElementById("div2").style.display = "none";



		});



	</script>-->
</body>
</html>