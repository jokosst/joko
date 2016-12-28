<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()."assets/";?>img/logo-fly.png">
	<link rel="icon" type="image/png" href="<?php echo base_url()."assets/";?>img/logo-fly.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile Page</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link href="<?php echo base_url()."assets/";?>css/themify-icons.css" rel="stylesheet"/>
	<!-- CSS Files -->
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()."assets/";?>css/material-kit.css" rel="stylesheet"/>
	 

</head>

<body class="profile-page">
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
				
        		<a class="navbar-brand" href="#">FLY JOE Web Design</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
		            <li>
		                <a href="#">
							<p>Facebook</p>
						</a>
		            </li>
		            <li>
		                <a href="#">
							<p>Twitter</p>
						</a>
		            </li>
					<li>
		                <a href="#">
							<p>Instagram</p>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('<?php echo base_url()."assets/";?>img/examples/joe.png');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="<?php echo base_url()."assets/";?>img/joe.JPG" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">Joko Susanto, S.Kom</h3>
								<h6>Web Developer</h6>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p>Fly Joe Web Design merupakan jasa pembuatan website di daerah pontianak, jenis website yang dibuat ialah web informasi dan aplikasi berbasis web - jika anda ingin membutuhkan jasa ini segera hubungi - Kontak : <u>089615919150</u>. - bisa juga melalui sosial media FB, Twitter dan Instagram.</p>
	                </div>

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										<li class="active">
											<a href="#studio" role="tab" data-toggle="tab">
												<i class="material-icons">palette</i>
												Work
											</a>
										</li>
										<li>
				                            <a href="#work" role="tab" data-toggle="tab">
												<i class="material-icons">camera</i>
												Studio
				                            </a>
				                        </li>
				                        <li>
				                            <a href="#shows" role="tab" data-toggle="tab">
												<i class="material-icons">favorite</i>
				                                Favorite
				                            </a>
				                        </li>
				                    </ul>

				                    <div class="tab-content gallery">
										 <div class="tab-pane text-center" id="work">
				                            <div class="row">
												<div class="col-md-6">
													<img src="<?php echo base_url()."assets/";?>img/examples/st1.jpg" class="img-rounded" />
													<img src="<?php echo base_url()."assets/";?>img/examples/st4.jpg" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="<?php echo base_url()."assets/";?>img/examples/st2.PNG" class="img-rounded" />
													<img src="<?php echo base_url()."assets/";?>img/examples/st3.PNG" class="img-rounded" />
												</div>
				                            </div>
				                        </div>
										<div class="tab-pane active" id="studio">				                       
											<div class="row">
												<div class="col-md-6">
	                              <a href="#" data-toggle="modal" data-target="#myModal1">
	                                  <img src="<?php echo base_url()."assets/";?>img/examples/work1.PNG" class="img-rounded" /></a>
													<a href="#" data-toggle="modal" data-target="#myModal2">
													<img src="<?php echo base_url()."assets/";?>img/examples/work2.PNG" class="img-rounded" />
													</a>
													<a href="#" data-toggle="modal" data-target="#myModal3">
													<img src="<?php echo base_url()."assets/";?>img/examples/work3.PNG" class="img-rounded" />
													</a>
												</div>
												<div class="col-md-6">
													<a href="#" data-toggle="modal" data-target="#myModal4">
													<img src="<?php echo base_url()."assets/";?>img/examples/work4.PNG" class="img-rounded" />
													</a>
													<a href="#" data-toggle="modal" data-target="#myModal5">
													<img src="<?php echo base_url()."assets/";?>img/examples/work5.PNG" class="img-rounded" />
												</a>
													<a href="#" data-toggle="modal" data-target="#myModal6">
												<img src="<?php echo base_url()."assets/";?>img/examples/work6.PNG" class="img-rounded" />
												</a>
												</div>
												<div class="col-md-6">
													<a href="#" data-toggle="modal" data-target="#myModal7">
													<img src="<?php echo base_url()."assets/";?>img/examples/work7.PNG" class="img-rounded" />
													</a>
													<a href="#" data-toggle="modal" data-target="#myModal8">
													<img src="<?php echo base_url()."assets/";?>img/examples/work8.jpg" class="img-rounded" />
												</a>
													<a href="#" data-toggle="modal" data-target="#myModal9">
												<img src="<?php echo base_url()."assets/";?>img/examples/work9.PNG" class="img-rounded" />
												</a>
												<a href="#" data-toggle="modal" data-target="#myModal13">
												<img src="<?php echo base_url()."assets/";?>img/examples/work13.PNG" class="img-rounded" />
												</a>
												</div>
												<div class="col-md-6">
													<a href="#" data-toggle="modal" data-target="#myModal10">
													<img src="<?php echo base_url()."assets/";?>img/examples/work10.PNG" class="img-rounded" />
													</a>
													<a href="#" data-toggle="modal" data-target="#myModal11">
													<img src="<?php echo base_url()."assets/";?>img/examples/work11.PNG" class="img-rounded" />
												</a>
													<a href="#" data-toggle="modal" data-target="#myModal12">
												<img src="<?php echo base_url()."assets/";?>img/examples/work12.PNG" class="img-rounded" />
												</a>
												</div>
											</div>
				                        </div>
										<div class="tab-pane text-center" id="shows">
											<div class="row">
												<div class="col-md-6">
													<img src="<?php echo base_url()."assets/";?>img/examples/st1.jpg" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="<?php echo base_url()."assets/";?>img/examples/work4.PNG" class="img-rounded" />
													<img src="<?php echo base_url()."assets/";?>img/examples/work3.PNG" class="img-rounded" />
													<img src="<?php echo base_url()."assets/";?>img/examples/work1.PNG" class="img-rounded" />
												</div>
											</div>
				                        </div>

				                    </div>
								</div>
							</div>
							<!-- End Profile Tabs -->
						</div>
	                </div>

	            </div>
	        </div>
		</div>

    </div>
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
				<ul>
					
				</ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2016, made with by Fly Joe Web Design
            </div>
        </div>
    </footer>
	<?php foreach ($gambar as $data){?>
<!-- Modal Core -->
<div class="modal fade" id="myModal<?php echo $data['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-body">
		<img src="<?php echo base_url()."assets/";?>img/examples/<?php echo $data['nama']; ?>"/>
		</div>
	</div>
  </div>
</div><!-- Modal tutup -->
	<?php }?>

</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url()."assets/";?>js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()."assets/";?>js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url()."assets/";?>js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url()."assets/";?>js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url()."assets/";?>js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">
		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
		});
	</script>




</html>
