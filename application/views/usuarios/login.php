<h2> <?php echo $title ?> </h2>

<?php echo validation_errors();
	$attributes=array('class'=>'pure-form pure-form-stacked')
 ?>

<?php echo form_open('usuarios/login', $attributes); ?>
	<fieldset>
		<legend>Introduce Login</legend>
		<label for="login">Login</label>
		<input type="input" name="login" placeholder="login" required>
		
		<label for="pass">Password</label>
		<textarea name="pass" placeholder="pass"></textarea>
		
		<button type="submit" class="pure-button pure-button-primary"  >Enviar Usuario Usuario</button>
	</fieldset>