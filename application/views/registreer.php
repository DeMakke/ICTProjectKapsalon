<!--************************** REGISTREERPAGINA *****************************-->
<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" />
		<title>Login Systeem</title>
                <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/assets/css/style.css">
	</head>
	<body>
            
            <p><?php if($this->session->flashdata('flashSuccess')):?>
                <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                    <?php endif?></p>
        
		<center>
			<div id="login-form">
				<form method="post">
					<table align="center" width="30%" border="0">
						<tr>
							<td><input class="form-control" name="username" placeholder="Gebruikersnaam" type="text" value="<?php echo set_value('username'); ?>" /></td><br/>
                                                        <td><span class="text-danger"><?php echo form_error('username'); ?></span></td>
						</tr>
						<tr>
							<td><input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" /></td><br/>
                                                        <td><span class="text-danger"><?php echo form_error('email'); ?></span></td>
						</tr>
						<tr>
							<td><input class="form-control" name="password" placeholder="Wachtwoord" type="password" /></td><br/>
                                                        <td><span class="text-danger"><?php echo form_error('password'); ?></span></td>
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

