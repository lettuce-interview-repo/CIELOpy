<html>
<head>
<title>Tell CIELO About Yourself!</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<div class="container">
<body>
  <form method="post">
  	<label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Michael Jordan"/>

    <label for="dob">Date of Birth (must be in the format YYYY-MM-DD)</label>
    <input type="text" name="dob" id="dob" placeholder="1990-01-01"/>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="ci@elo.com"/>

    <label for="favcolor">Favorite Color</label>
    <input type="favcolor" name="favcolor" id="favcolor" placeholder="blue"/>

    <button type="submit">Submit</button>
	</form>
</body>
</div>
</html>