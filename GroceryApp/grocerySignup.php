<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Grocery Signup</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<div class="page">
			<header class="menu-container">
				<h1 class="logo">455: Database Systems</h1>
				<nav class="menu">
					<li class="dropdown">
						<span>Pages &#9662;</span>
						<ul class="features-menu">
							<!-- Start of submenu -->
							<li><a href="index.html">Home</a></li>
							<li><a href="passengerIndex.html">Airplane Passengers</a></li>
						</ul>
						<!-- End of submenu -->
					</li>
					<li><a href="index.html">Home</a></li>
				</nav>
			</header>

			<!--Title and Form-->
			<article class="content">
				<header class="title">
					<h2>Grocery Signup</h2>
				</header>

				<!-- Form -->
				<form
					class="groceryForm"
					method="post"
					action="groceryLogin.php"
				>
					<!-- firstName, lastName, username, password, email-->
					<label for="firstName">First Name</label>
					<input
						class="textInput"
						type="text"
						id="firstName"
						name="fame"
						pattern="[A-Za-z]{1,}"
						required
					/>

					<label for="lastName">Last Name</label>
					<input
						class="textInput"
						type="text"
						id="lastName"
						name="lastName"
						pattern="[A-Za-z]{1,}"
						required
					/>

					<label for="username">Username</label>
					<input
						class="textInput"
						type="text"
						id="username"
						name="username"
						pattern="[A-Za-z]{1,}"
						required
					/>

					<label for="password">Password</label>
					<input
						class="textInput"
						type="text"
						id="password"
						name="password"
						pattern="[A-Za-z]{1}"
					/>

					<label for="email">Email</label>
					<input
						class="textInput"
						type="text"
						id="password"
						name="password"
						pattern="[A-Za-z]{1}"
					/>

					<input type="submit" value="Sign Up" />
				</form>
				<div class="groceryForm">
                <a href="groceryLogin.php" style="color: #0b6fa6">Returning user?</a>
            </div>
			</article>
		</div>
	</body>
</html>