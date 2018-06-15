<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/elt.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="theme-color" content="#ffffff">



	<title>Demo - ELTMaestro</title>
</head>

<body>
<?php include 'header.php';?>
	<!-- END NAV -->
	<!-- START CONTENT -->
		<div class="container pl-5">

				<h3 class="display-4  pb-4 pt-3 ">
					Request demo
				</h3>
				<div class="row px-0 px-sm-5">

					<div class="col-sm">
						<p class="lead">We offer a live demo of ELTMaestro for all supported platforms. Enter your details below to request access.</p>
						<form action="https://formspree.io/david@iq-associates.com " method="POST">
							<div class="form-group">
								<label for="name">Name*</label>
								<input type="text" class="form-control"  name="name" id="name" placeholder="John Smith" required>
							</div>
							<div class="form-group">
							 <label for="platfrom">Select your platform*</label>
							 <select class="form-control" name="platform" id="platform">
								 <option>Neteeza</option>
								 <option>Amazon Redshift</option>
								 <option>Spark</option>
							 </select>
						 </div>

							<div class="form-group pb-1">
								<label for="email">Email*</label>
								<input type="email" id="email" class="form-control"  name="_replyto" placeholder="name@example.com" required>
							</div>

							<button class="btn btn-primary" type="submit" value="Send">Submit</button>
						</form>


					</div>
				</div>




		</div>

			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>
<footer>
	<div class "container ">

		<hr>
		<p class="pl-4 "> &copy; IQ Associates 2018</p>

		</container>
</footer>

</html>
