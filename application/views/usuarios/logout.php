<?php

echo doctype("HTML5");

echo heading("Informacion",2,'class="heading"');
$image_array = array(
	'src'=>"img/php.jpg",
	'width'=>'100',
	'heigth'=>'100'
);
echo img($image_array,false);
echo link_tag("css/style.css");
echo link_tag("favicon.ico","icon","imagen/ico");
echo meta("descripcion","contenido de la descripcion","type");

$metadatos=array(
	array("array"=>"robots", "content"=>"no-cache"),
	array("array"=>"keywords", "content"=>"auto,car,vehiculos")
);
echo meta($metadatos);
echo ul(array("uno","dos","tres"));
session_destroy();