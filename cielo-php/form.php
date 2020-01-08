<html>
<head>
<title>Tell CIELO About Yourself!</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
</head>

<div class="container">
<body>
  <?php echo validation_errors(); ?>
  <h1>Who are you, stranger?</h1>
  <!-- <form method="post"> -->
  <form action="CIELO.php" id="aboutYou">
  	<label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="Michael Jordan" required="required" data-validation="length" data-validation-length="2-20" data-validation-help="(must be between 2-20 characters)"/><br>

    <label for="dob">Date of Birth:</label>
    <input type="text" name="dob" id="dob" placeholder="1990-01-01" required="required" data-validation="birthdate" data-validation-help="YYYY-MM-DD (year, month, day)"/><br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" required="required" placeholder="ci@elo.com" data-validation="email" /><br>

    <label for="favcolor">Favorite Color:</label>
    <input type="text" name="favcolor" id="favcolor" required="required" placeholder="blue"/><br>

    <button type="submit" name="submit" value="upload">Submit</button>
	</form>
</body>
</div>
<script>
  $.validate({
      modules : 'date, security, html5'
  });
  </script>
</html>