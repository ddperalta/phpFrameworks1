
<h2> <?php echo $title ?> </h2>

<?php echo validation_errors();
	$attributes=array('class'=>'pure-form pure-form-stacked')
 ?>

<?php echo form_open('productos/create', $attributes); ?>
	<fieldset>
		<legend>Crear Producto</legend>
		<label for="nombre">Nombre</label>
		<input type="input" name="nombre" placeholder="nombre">
		
		<label for="descripcion">Descripcion</label>
		<textarea name="descripcion" placeholder="nombre"></textarea>
		
		<label for="precio">Precio</label>
		<input type="input" name="precio" placeholder="100"></br>
		
		<button type="submit" class="pure-button pure-button-primary"  >Crear Producto</button>
	</fieldset>