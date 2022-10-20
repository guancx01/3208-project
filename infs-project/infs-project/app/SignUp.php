<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>New cars</title>
    <script src="/assets/js/script.js"></script>
</head>
<body>
    <header id="page-Sign up/Login">
			<nav id="header-menu">
			
				<ul>
					<li>
						<a href="homepage.php">Go Back</a>
					</li>
					<li>
						<h1>Sign up</h1>
					</li>
				</ul>
	
			</nav>
	</header>
		
		<nav id="menu">
			
			<ul>
				<li>
					<a href="Manage-accounts.php">Manage your account</a>
				</li>
				<li>
					<a href="Search-cars.php">Search</a>
				</li>
				<li>
					<a href="New-cars.php">New Cars</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
			</ul>

		</nav>

		<section id="contact-form">

			<form method="get" action="Login.html">

			    <fieldset>
					<legend>
						Enter Your details to sign up
					</legend>
					<div class="form-item">
			        	<label for="form-email">Email:</label>
			        	<div class="form-element">
			        		<input type="text" name="email" id="form-email" placeholder="Type your email here (Should be VALID email address)" />
			        	</div>
			        </div>
					
					<div class="form-item">
			        	<label for="form-UserName">User name:</label>
			        	<div class="form-element">
			        		<input type="text" name="User name" id="form-UserName" placeholder="Type your name here..." />
			        	</div>
			        </div>

					<div class="form-item">
			        	<label for="form-Password">Password:</label>
			        	<div class="form-element">
			        		<input type="password" name="password" id="form-password" placeholder="Please enter your password..." />
			        	</div>
			        </div>

					<div class="form-item">
			        	<label for="form-Password">Confirm Password:</label>
			        	<div class="form-element">
			        		<input type="password" name="password" id="form-password" placeholder="Type your password again..." />
			        	</div>
			        </div>

			    </fieldset>

			    <fieldset>
			        <button type="submit">Finish, let's get started!</button>
			    </fieldset>

			</form>

		</section>

</body>