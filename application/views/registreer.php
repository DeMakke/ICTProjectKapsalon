<!--************************** REGISTREERPAGINA *****************************-->
<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" />
		<title>Login Systeem</title>
                <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/assets/css/style.css">
	</head>
	<body>
		<center>
			<div id="login-form">
				<form method="post">
					<table align="center" width="30%" border="0">
						<tr>
							<td><input type="text" name="uname" placeholder="Naam" required /></td>
						</tr>
						<tr>
							<td><input type="email" name="email" placeholder="Email" required /></td>
						</tr>
						<tr>
							<td><input type="password" name="pass" placeholder="Wachtwoord" required /></td>
						</tr>
						<tr>
							<td><button type="submit" name="btn-signup">Registreer</button></td>
						</tr>
						<tr>
							<td><a href="login">Home Pagina</a></td>
						</tr>
					</table>
				</form>
			</div>
		</center>
	</body>
</html>

