<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<?php wp_head(); ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar-inverse" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="<?php echo site_url(); ?>">Logo Site</a>
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="<?php echo site_url(); ?>">Home</a>
					</li>
					<li>
						<a href="#">Link 1</a>
					</li>
					<li>
						<a href="#">Link 2</a>
					</li>
					<li>
						<a href="#">Link 3</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li>
						<a href="<?php echo site_url(); ?>">Home</a>
					</li>
					<li>
						<a href="#">Link</a>
					</li>
					<li class="active">Current</li>
				</ol>
			</div>
		</div>

	</header>
