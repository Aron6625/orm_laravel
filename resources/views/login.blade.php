<head>
</head>
<body>
<div class="container">
	<div class="screen">
		<img src="http://localhost:3000/image" />
		<div class="screen__content">
			<form
				action="{{ route('login') }}"
				class="login"
				method="POST"
				enctype="multipart/form-data"
			>
				@csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="name" class="login__input" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input
						type="password"
						name="password"
						class="login__input"
						placeholder="Password">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input
						type="file"
						name="image"
						class="login__input"
						placeholder="FILE>>>">
				</div>
				<button class="button login__submit" type="submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
			</form>
			<div class="social-login">
				<h3>log in via</h3>
			</div>
		</div>
	</div>
</div>
</body> 