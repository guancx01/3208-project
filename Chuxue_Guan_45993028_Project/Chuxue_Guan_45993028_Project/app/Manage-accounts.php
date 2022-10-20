<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Manage Accounts</title>
    <script src="/assets/js/script.js"></script>
</head>
<body>
        <header id="page-Manage your account">
			<nav id="header-menu">
			
				<ul>
					<li>
						<a href="index.html">Go Back</a>
					</li>
					<li>
						<h1>Manage your account</h1>
					</li>
				</ul>
	
			</nav>
		</header>
		
		<nav id="menu">
			
			<ul>
				<li class="current">
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

		<h2>Details</h2>

		<section id="contact-form">

			<form method="get" action="index.html">

			    <fieldset>

					<div class="form-item">
			        	<label for="form-email">Email:</label>
			        	<div class="form-element">
			        		<input type="text" name="email" id="form-email" placeholder="Please type in your email address" />
			        	</div>
			        </div>
					
					<div class="form-item">
			        	<label for="form-phone">Phone:</label>
			        	<div class="form-element">
			        		<input type="text" name="phone" id="form-phone" placeholder="Phone number including area code" />
			        	</div>
			        </div>

			    </fieldset>

			    <fieldset>
			        <button type="submit">Submit</button>
			    </fieldset>

			</form>

		</section>
</body>
