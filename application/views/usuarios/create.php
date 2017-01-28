
<h2> <?php echo $title ?> </h2>

<?php echo validation_errors();
	$attributes=array('class'=>'pure-form pure-form-stacked')
 ?>

<?php echo form_open('usuarios/create', $attributes); ?>
	<fieldset>
		<legend>Crear Usuario</legend>
		<label for="login">Login</label>
		<input type="input" name="login" placeholder="login" required>
		
		<label for="pass">Password</label>
		<textarea name="pass" placeholder="pass"></textarea>
		
		<button type="submit" class="pure-button pure-button-primary"  >Crear Usuario</button>
	</fieldset>