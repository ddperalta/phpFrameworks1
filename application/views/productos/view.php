<?php
echo '<h2>'.$productos_item['nombre'].'</h2>';
echo '<p>'.$productos_item['descripcion'].'</p>';
echo '<p>'.$productos_item['precio'].'</p>';

echo '<p><a class="pure-button pure-button-primary" href="'.site_url('productos').'">Listado de productos</a></p>';
