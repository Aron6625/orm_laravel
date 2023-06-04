<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		nav {
			background-color: #333;
			color: #fff;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 20px;
		}
		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			display: flex;
		}
		nav li {
			margin: 0 10px;
		}
		nav a {
			color: #fff;
			text-decoration: none;
			padding: 5px;
		}
		nav a:hover {
			background-color: #fff;
			color: #333;
		}
		button {
			background-color: #f44336;
			color: #fff;
			border: none;
			border-radius: 4px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
			margin: 20px;
			float: right;
		}
		button:hover {
			background-color: #d32f2f;
		}
	</style>
</head>
<body>
	<nav>
		<h1></h1>
		<ul>
		</ul>
	</nav>
	<button id="salir">Cerrar sesión</button>
	<script type="text/javascript">
		const button = document.getElementById('salir');
		button.onclick = () => {
			document.cookie = 'PHPSESSID=; path=/; expires=Monday, 10 May 1914 00:00:01 GMT';
			window.location = 'src/login.php'
		}
	</script>
</body>
</html>
