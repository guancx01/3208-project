<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
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
						<h1>Login</h1>
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
					<a href="SignUp.php">Sign up</a>
				</li>
			</ul>

		</nav>
		
		<section id="contact-form">

			<form method="get" action="index.html">

			    <fieldset>

			        <legend>
			            Enter the following
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
			        		<input type="text" name="User name" id="form-UserName" placeholder="Type in your user name" />
			        	</div>
			        </div>

					<div class="form-item">
			        	<label for="form-Password">Password:</label>
			        	<div class="form-element">
			        		<input type="password" name="password" id="form-Password" placeholder="Type in your password" />
			        	</div>
			        </div>

					<div class="form-item">
						<label>Keep me logged in <input type="checkbox" id="form-Remember-user-name" name="Choice 1"></label>
			        </div>
					
					<div class="form-item">
						<label>Remember your user name <input type="checkbox" id="form-Remember-user-name" name="Choice 1"></label>
			        </div>

					<div class="form-item">
						<label>Remember your password <input type="checkbox" id="form-Remember-user-name" name="Choice 1"></label>
			        </div>

			    </fieldset>

			    <fieldset>
			        <button type="submit">Login</button>
			    </fieldset>

			</form>

		</section>
</body>