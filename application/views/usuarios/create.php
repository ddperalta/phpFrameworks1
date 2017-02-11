<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php $attributes = array('class' => 'pure-form pure-form-stacked'); ?>

<?php echo form_open('usuarios/create', $attributes) ?>
  <fieldset>
    <legend>Crear Usuario</legend>

    <label for="login">Login</label>
    <input type="input" name="login" placeholder="login">

    <label for="password">Password</label>
    <input name="password" type="password"></input>

    <button type="submit" class="pure-button pure-button-primary">Crear usuario</button>
  </fieldset>
</form>