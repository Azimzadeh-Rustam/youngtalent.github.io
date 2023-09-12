<!DOCTYPE html>
<html lang="ru">

<head>

		<meta charset="utf-8">

		<title>МОЛОДОЙ ТАЛАНТ: ВЫПУСКИ ЖУРНАЛА</title>
		<meta name="description" content="Выпуски журнала">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<meta property="og:image" content="../img/present.jpg">
		<link rel="shortcut icon" href="../img/menu/logo.png" type="image/x-icon">
		<link rel="apple-touch-icon" href="../img/menu/logo.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../img/menu/logo.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../img/menu/logo.png">

		<link rel="stylesheet" href="issues.css">

		<script src="https://kit.fontawesome.com/a0a26c2951.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="back-button-wrap">
		<a href="../index.php">
			<div class="back-button">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-alt-circle-left" class="svg-inline--fa fa-arrow-alt-circle-left fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zm116-292H256v-70.9c0-10.7-13-16.1-20.5-8.5L121.2 247.5c-4.7 4.7-4.7 12.2 0 16.9l114.3 114.9c7.6 7.6 20.5 2.2 20.5-8.5V300h116c6.6 0 12-5.4 12-12v-64c0-6.6-5.4-12-12-12z"></path></svg>
				<span>Назад</span>
			</div>
		</a>
	</div>

	<section>
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h2>Выпуски журнала</h2>
				</div>

				<div class="col-md-12">
					<?php 
						include('issues_years.php');
					 ?>
				</div>

				<div class="col-md-12">
					<h3>2021 год</h3>
				</div>
				
			</div>



		</div>
	</section>
	




<div class="scroll-up">
	<svg class="scroll-up__svg" viewBox="-2 -2 52 52">
		<path class="scroll-up__svg-path" d="
				M24,0
				a24,24 0 0,1 0,48
				a24,24 0 0,1 0,-48
			" />
	</svg>
</div>


<script src="issues.js"></script>
</body>
</html>