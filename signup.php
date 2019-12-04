<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Sign Up</title>
		<link rel="shortcut icon" href="https://material.io/favicon.ico" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css"
		/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
		<link rel="stylesheet" href="./dist/bundle-signup.css" />
	</head>

	<body>
		<section class="header">
			<img
				src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_of_IIT_Bhilai.png"
				alt="logo"
				class="logo"
			/>
			<h1>Register</h1>
		</section>

		<form>
			<div class="mdc-text-field username">
				<input
					type="text"
					class="mdc-text-field__input"
					id="username-input"
					name="username"
					required
				/>
				<label class="mdc-floating-label" for="username-input">Username</label>
				<div class="mdc-line-ripple"></div>
			</div>
			<div class="mdc-text-field input_block">
				<input
					type="text"
					class="mdc-text-field__input"
					id="username-input"
					name="username"
					required
				/>
				<label class="mdc-floating-label" for="username-input">Username</label>
				<div class="mdc-line-ripple"></div>
			</div>
			<div class="mdc-text-field password">
				<input
					type="password"
					class="mdc-text-field__input"
					id="password-input"
					name="password"
					minlength="8"
					required
				/>
				<label class="mdc-floating-label" for="password-input">Password</label>
				<div class="mdc-line-ripple"></div>
			</div>

			<div class="mdc-text-field input_block">
				<input
					type="password"
					id="inputConfirmPassword"
					class="mdc-text-field__input"
					placeholder="Password"
					required
				/>
				<label for="inputConfirmPassword" class="mdc-floating-label">Confirm password</label>
				<div class="mdc-line-ripple"></div>
			</div>

			<div class="button-container ">
				<button type="button" class="mdc-button cancel">
					<div class="mdc-button__ripple"></div>
					<span class="mdc-button__label">
						Login
					</span>
				</button>
				<button class="mdc-button mdc-button--raised next">
					<div class="mdc-button__ripple"></div>
					<span class="mdc-button__label">
						Register
					</span>
				</button>
			</div>

			<!-- <hr class="my-4">
        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> -->
		</form>

		<script src="dist/bundle-signup.css" async></script>
	</body>
</html>
