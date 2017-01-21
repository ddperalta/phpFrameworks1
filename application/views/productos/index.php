<h2><?php echo $title; ?></h2>

<?php foreach($productos as $productos_item): ?>
  <h3><?php echo $productos_item['nombre']; ?></h3>
  <div class="main">
    <?php echo $productos_item['descripcion']; ?>
  </div>
  <p><a class="pure-button pure-button-primary" href="<?php echo site_url('productos/'.$productos_item['id']); ?>">Ver Producto</a></p>
<?php endforeach; ?>
