<!DOCTYPE html>
<html>
<head>
	<title>Hunter Newton - Projects</title>
	<link rel="stylesheet" type="text/css" href="lib/css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous">
	</script>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
	<?php include "inc/nav.php"; ?>

	<div id="wrapper">
		<h1 class="main-h1">Contact</h1>

		<form id="form">
			<label>Name:</label>
			<input placeholder="Your Name" type="text" name="name" required="">
			<label>Email:</label>
			<input placeholder="Email" type="email" name="email" required="">
			<label>Phone: (optional)</label>
			<input placeholder="xxx-xxx-xxxx" type="tel" name="phone" required="">
			<label>Comment:</label>
			<input placeholder="Comment" type="text" name="comment" required="">
			<input class="submit" type="submit" name="submit">
		</form>

		<div class="form-submit">
			<h2>Thank You!</h2>
			<p>Your form has been submitted!</p>
			<p>Phone: (803)-804-4706</p>
			<p>Email: HunterCNewton@gmail.com</p>
		</div>

		<img class="contact-image" alt="mountains photo" src="lib/img/background/11.png">
	</div>

	<?php include "inc/footer.php"; ?>

	<script type="text/javascript">
		$(".submit").click(function(){
    		document.getElementByClassName('form-submit').style.display = '';
		});
	</script>
	
</body>
</html>