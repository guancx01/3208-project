<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search cars</title>
    <style>
    </style>
    <script src="/assets/js/script.js"></script>
</head>
<body>
    <header id="page-Find a car">
			<nav id="header-menu">
			
				<ul>
					<li>
						<a href="Find a car.html">Go Back</a>
					</li>
					<li>
						<h1>Follow the steps to find your car!</h1>
					</li>
				</ul>
	
			</nav>
		</header>
		
		<nav id="menu">
			
			<ul>
				<li>
					<a href="Manage-accounts.php">Manage your account</a>
				</li>
				<li class="current">
					<a href="Search-cars.php">Search</a>
				</li>
				<li>
					<a href="New-cars.php">New Cars</a>
				</li>
				<li>
					<a href="homepage.php">Sign up/Login</a>
				</li>
			</ul>

		</nav>

		<h2>Follow the steps</h2>

		<section id="contact-form">

			<form method="get" action="Dealers found.html">

			    <fieldset>

			        <legend>
			            Follow the steps to find your car
			        </legend>

			        <div class="form-item">
			        	<label for="form-makers">Choose a maker:</label>
				        <div class="form-element">
					        <select name="form-makers-list">
								<option>BMW</option>
					        </select>
				        </div>
			        </div>

					<div class="form-item">
			        	<label for="form-types">Choose a type:</label>
				        <div class="form-element">
					        <select name="form-types-list">
					            <option>SUV</option>
					            <option>Sedan</option>
					        </select>
				        </div>
			        </div>

					<div class="form-item">
			        	<label for="form-models">Choose a Model:</label>
				        <div class="form-element">
					        <select name="form-models-list">
								<option>X3</option>
								<option>X5</option>
								<option>5 Series</option>
					        </select>
				        </div>
			        </div>

					<div class="form-item">
			        	<label for="form-styles">Choose a style:</label>
				        <div class="form-element">
					        <select name="form-styles-list">
								<option>X3 xDrive30i</option>
								<option>X5 xDrive40i</option>
								<option>540i</option>
					        </select>
				        </div>
			        </div>
					<button type="submit">Go</button>

			    </fieldset>

			</form>

		</section>
</body>
</html>