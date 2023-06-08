<!doctype html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta
		name='viewport'
		content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
	<meta http-equiv='X-UA-Compatible' content='ie=edge'>
	<title>Document</title>
	<link
		rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class='container'>
	<div class='col-6 mt-5'>
		<form action='login_read.php' method='post'>
			<div class='form-group'>
				<input type='text' name='username' placeholder='Username' class='form-control mb-4' >
				<input type='password' name='password' placeholder='Password' class='form-control mb-4'>
				<button class='btn btn-danger' type='submit' name='submit'>Press</button>
			</div>
		</form>
	</div>
</div>

</body>
</html>
