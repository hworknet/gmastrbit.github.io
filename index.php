<html>
	<head> 
		<title> Animation test </title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="shortcut icon" href="ico.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
	<div class="all">
		<div class="div1 wow fadeOut animated"  data-wow-delay="3s">
			<div class="div-1 wow slideIn animated" data-wow-delay="1s">
				Hello. 
			</div>
		</div>
		<div class="div2 wow fadeOut animated"  data-wow-delay="6s">
			<div class="div-2 wow fadeIn animated" data-wow-delay="4s">
				This is test site.
			</div>
		</div>
		<div class="div3 wow fadeOut animated"  data-wow-delay="10s">
			<div class="div-3 wow fadeIn animated" data-wow-delay="7s">
				<a href="http://hwork.net">Go to hwork.net</a> or press F5.
			</div>
		</div>
	</div>
	<script src="wow.min.js"></script>
		<script>
		new WOW().init();
		</script>
	</body>
</html>