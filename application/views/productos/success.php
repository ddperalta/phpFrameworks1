<?php


	 //var_dump($this->session->contador);
	 var_dump($this->session->userdata('detailsData'));

echo '<h1>El producto se agregó correctamente</h1>';

echo '<p><a class="pure-button pure-button-primary" href="'.site_url('productos').'">Listado de productos</a></p>';
echo '<p><a class="pure-button pure-button-primary" href="'.site_url('productos/create').'">Agregar nuevo</a></p>';
