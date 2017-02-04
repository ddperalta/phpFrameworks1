<h2> <?php echo $title ?> </h2>

<?php echo validation_errors();
	$attributes=array('class'=>'pure-form pure-form-stacked')
 ?>

 
<?php
				//form_open(action, attributes, hidden)
	             //controlador/metodo  <--- (action)
    //echo form_open('usuarios/login', $attributes);
	echo form_open('usuarios/login', $attributes);
	$login_array = array(
		'name'=>'login',
		'type'=>'text',
	    'placeholder'=>'login',
		'required'=>'required',
		'id'=>'login'
	);
	$password_array = array(
		'name'=>'password',
		'type'=>'password',
	    'placeholder'=>'password',
		'required'=>'required',
		'id'=>'password'
	);
	$attri_button=array('class'=>'pure-button pure-button-primary id="login-btn"');
	echo form_input($login_array);
	echo form_input($password_array);
	//echo form_submit("submit","Entrar",$attri_button);
	echo anchor("#","Entrar",$attri_button);
?>
	
	
	
	<?php
	//mi version
	/*<fieldset>
		<legend>Introduce Login</legend>
		<label for="login">Login</label>
		<input type="input" name="login" placeholder="login" required>
		
		<label for="pass">Password</label>
		<textarea name="pass" placeholder="pass"></textarea>
		
		<button type="submit" class="pure-button pure-button-primary"  >Enviar Usuario Usuario</button>
	</fieldset>*/?>