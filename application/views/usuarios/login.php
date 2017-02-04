<?php
// form_open(<ACCION>, <ATRIBUTOS>, <HIDDEN>)
//array('class'=>'bootstrap-form')
//$attributos = 'class="formulario" id="loginform"'
//$array_de_hiddens = array('is_login'=>true);

echo form_open('usuarios/login');
$login_array = array(
	'name' => 'login',
	'type' => 'text'
	);
echo form_input($login_array);
$password_array = array(
	'name' => 'password',
	'type' => 'password'
	);
echo form_input($password_array);
echo form_submit("submit", "Entrar");
echo form_close();

?>
