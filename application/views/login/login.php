<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>

<?php echo form_open('login'); ?>
	<label>
		Usuario
		<input name="username" type="text" value="<?php echo set_value('username') ?>" />
  </label>
</br>
	<label>
		Password
		<input name="password" type="password" value="<?php echo set_value('password') ?>" />
  </label>
</br>
<?php echo validation_errors('<div>','</div>') ?>
	<button type="submit">Enviar</button>
<?php echo form_close(); ?>

</body>
</html>
