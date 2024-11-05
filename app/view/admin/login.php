<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Relite Admin Panel - Login</title>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<style>
		body {
			font-family: poppins;
			background-color: #0d122f;
		}
		input {
			width: 500px; border-radius: 8px; outline: none; border: none; height: 20px; padding: 10px;
		}
		form {
			display: flex; flex-direction: column; justify-content: center; align-items: center;
		}
		.form-input {
			width: 100%;
		}
		.pd {
			margin: 10px 0 30px;
		}
		.pd-sm {
			margin: 10px 0;
		}
		.white {
			color: #F9F9F9;
		}
		.label {
			margin: -10px 0 -10px 0;
		}
		button {
			border: none;
			outline: none;
			padding: 14px;
			border-radius: 8px;
			width: 100%;
			margin-top: 20px;
			background-color: cornflowerblue;
			color: #F9F9F9;
			font-size: 16px;
			font-weight: 700;
		}
	</style>
</head>
<body>

	<div style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
		<div style="background-color: #0d1748; width: fit-content; height: fit-content; padding: 20px; border-radius: 15px; box-shadow: 0px 0px 4px black;">
			<form action="" method="post">
				<h1 class=" white pd">Login Admin Relite</h1>
				<div class="form-input pd-sm">
					<h3 class=" white label" for="" >Username</h3> <br>
					<input type="text" name="username" id="username">
				</div>
				<div class="form-input pd-sm">
					<h3 class=" white label" for="" >Password</h3> <br>
					<input type="password" name="password" id="password">
				</div>
				<button type="submit" name="submit" id="submit" style="cursor:pointer;">Login</button>
			</form>
		</div>
	</div>

</body>

</html>