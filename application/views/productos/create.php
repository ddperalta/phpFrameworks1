<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php $attributes = array('class' => 'pure-form pure-form-stacked'); ?>

<?php echo form_open('productos/create', $attributes) ?>
  <fieldset>
    <legend>Crear Producto</legend>

    <label for="nombre">Nombre</label>
    <input type="input" name="nombre" placeholder="Nombre">

    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion"></textarea>

    <label for="precio">Precio</label>
    <input type="input" name="precio" placeholder="100"><br /><br />

    <button type="submit" class="pure-button pure-button-primary">Crear producto</button>
  </fieldset>
</form>
