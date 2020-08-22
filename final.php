<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left">
				<h2>Login here</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user"class="form-control"required>
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password"class="form-control"required>
					</div>
						<button type="submit" class="btn btn-primary">Login </button>
				</form>
		</div>
		
			<div class="col-md-6 login-right">
				<h2>Register here</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user"class="form-control"required>
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password"class="form-control"required>
					</div>
						<button type="submit" class="btn btn-primary">Login </button>
				</form>
		</div>
			
		</div>	
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>