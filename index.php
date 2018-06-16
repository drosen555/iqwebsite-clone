<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags hi -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/elt.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="theme-color" content="#ffffff">

	<title>Home - ELTMaestro</title>
</head>

<body>
	<?php include 'header.php';?>
	<!-- END NAV -->
	<!-- START CONTENT -->
	<div class="header bg-light border border-white">
		<div class="container">
			<div class="row px-sm-4">
				<div class="col-sm ">
					<h2 class=" display-4 loadtrans">ELTMaestro</h2>
					<p class="lead ">ELTMaestro is a data integration tool that loads and transforms data more efficiently than traditional ETL tools, with a smaller footprint, at a fraction of the cost.</p>
					<p class="lead pb-3 ">ELTMaestro unlocks and extends the power of your AWS Redshift, IBM Netezza, or Apache Spark platform to act as its own data loading and transformation tool.</p>
					<a class="btn btn-xlarge btn-primary" href="contact.php" role="button" >Get started</a>
					<a class="btn btn-xlarge btn-secondary" href="whitepapers.php" role="button" >Learn more</a>
				</div>
				<div class="col-sm ">
					<img src="img/starmatch.svg" class="img-star img-fluid" alt="star logo">
				</div>
			</div>
		</div>
	</div>
		<div class="container-fluid px-5 ">
			<h1 class=" text-center pb-5 pt-5 ">
				Features
			</h1>
			<div class="row px-5">
				<div class="col">
					<div class="d-flex flex-row">
					  <div class="p-2"><i class="fas fa-sitemap fa-3x float-left loadtrans"></i></div>
						  <div class="p-2">
								<p class="lead">Dataflow-based GUI</p>
								<p>ELTMaestro uses an intuitive visual dataflow language where icons connected by arrows represent sources, operations, and targets of data.</p>
							</div>
				</div>

				<div class="d-flex flex-row">
					<div class="p-2"><i class="fas fa-vial fa-3x float-left loadtrans"></i></div>
					<div class="p-2">
						<p class="lead">Testing and deployment framework </p>
						<p>ELTMaestro comes with advanced debugging and logging features to make deployment and maintenance easy.
						</p>
					</div>
				</div>

				<div class="d-flex flex-row">
					<div class="p-2"><i class="fas fa-terminal fa-3x float-left loadtrans"></i></div>
					<div class="p-2">
						<p class="lead">Built-in jobs and batch scripts</p>
						<p>ELTMaestro presents users with a hierarchy of jobs and batches which can be easily integrated into production environments.
						</p>
					</div>
				</div>
				</div>
				<div class="col">
					<div class="d-flex flex-row">
						<div class="p-2"><i class="fas fa-shield-alt fa-3x float-left loadtrans"></i></div>
						<div class="p-2">
							<p class="lead">Advanced agent security scheme</p>
							<p>Agents, or processes that communicate between source and target machines, are able to keep communications private by intelligently managing connections between them.
							</p>
						</div>
					</div>
					<div class="d-flex flex-row">
						<div class="p-2"><i class="fas fa-feather fa-3x float-left loadtrans"></i></div>
						<div class="p-2">
							<p class="lead">Small footprint</p>
							<p>Unlike traditional ETL tools, ELTMaestro has no engine, since it relies on the underlying Spark (Netezza, Redshift, etc.) engine. This significantly reduces ELTMaestro's footprint.
							</p>
						</div>
					</div>
					<div class="d-flex flex-row">
						<div class="p-2"><i class="fas fa-chart-bar fa-3x float-left loadtrans"></i></div>
						<div class="p-2">
							<p class="lead">A best practices product</p>
							<p>The designers of ELTMaestro are longtime practitioners of ELT and data warehousing and have built their experience into the product. </p>
						</div>
						</div>
					</div>
			</div>
		</div>
		<div class="container-fluid px-sm-5 bg-light border border-white pt-5 pb-5">
			<h1 class=" text-center pt-3 pb-5 ">
				Benefits
			</h1>
			<div class="row px-0 px-sm-5">
				<div class="col-md">
					<h3 class="mb-3"><i class="fas fa-fire pr-3 loadtrans "></i>Speed</h3>
					<p>Bottlenecks in data integration processes happen at computational boundaries:  landing data to disk or transferring data across a network.
					Eliminating a server from the series of machines that data passes through on its way from source to target will confer a significant performance advantage.
					This is all the more true when the machine that is eliminated (the ETL server) is resource-bound relative to the machine that replaces it (the target data integration server – generally an MPP purpose-built platform or cluster).
						The result:  ELT architectures have significant speed advantages over traditional architectures.</p>
				</div>

				<div class="col-md">
					<h3 class="mb-3 "><i class="fas fa-dollar-sign pr-3 loadtrans"></i>Cost</h3>
					<p>Traditional ETL systems contain powerful engines that implement efficient joins, sorts, filters and other operations on large datasets.  To work well, these systems require powerful dedicated servers.  These servers become sources for data integration servers – which, ironically, are even more powerful servers that are more capable of performing the joins, sorts, filters, and other large dataset operations than the ETL servers are.  The traditional ETL systems have become, for historical reasons, costly duplications of effort.  To eliminate the ETL servers and make the data integration servers perform in the required role, however, some inexpensive “glue” is required.  ELTMaestro is that glue.  The result:  ELTMaestro is an order of magnitude less expensive than the ETL systems it replaces.  ETLMaestro essentially eliminates the cost of traditional ETL systems.</p>
				</div>

				<div class="col-md">
					<h3 class="mb-3 "><i class="fas fa-star pr-3 loadtrans"></i>Ease of use</h3>
					<p>ELTMaestro is designed to look and feel familiar to the users of traditional ETL systems such as Informatica and DataStage.  ELTMaestro users write data integration programs using an intuitive visual dataflow language where icons connected by arrows represent sources, operations, and targets of data.  ELTMaestro presents users with a hierarchy of jobs and batches which can be readily integrated into production environments.  ELTMaestro provides parameters to control job behavior and to pass information between jobs.  ELTMaestro has debug modes and log information to help developers determine what is going wrong with their programs.  The result:  ELTMaestro is easy for anyone to learn and use.  For users of traditional ETL systems, ELTMaestro will look and feel familiar.</p>
				</div>
			</div>
		</div>

		<div class="container-fluid px-5">

			<div class="row px-sm-4 pt-4">
				<div class="col-sm text-center">
					<img src="img/plats/redshift2.png" class="img-fluid" alt="Responsive image">
				</div>
			<div class="col-sm text-center">
				<img src="img/plats/spark2.png" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-sm text-center">
				<img src="img/plats/neteeza2.png" class="img-fluid" alt="Responsive image">
			</div>
		</div>

		<!-- jQuery first, then Popper.js, then Bootstrap JS, then vivus -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
		<script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
	<!--	<script>
  		new Vivus('dbsvg', {duration: 200},);
	  </script>

	-->
<footer>
	<div class "container ">

		<hr>
		<p class="pl-4 "> &copy; IQ Associates 2018</p>

		</container>
</footer>

</html>
