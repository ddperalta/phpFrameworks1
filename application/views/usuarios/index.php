<h2><?php echo $title; ?></h2>

<?php foreach($usuarios as $usuarios_item): ?>
  <h3><?php echo $usuarios_item['login']; ?></h3>
  <div class="main">
    <?php echo $usuarios_item['password']; ?>
  </div>
  <p><a class="pure-button pure-button-primary" href="<?php echo site_url('usuarios/'.$usuarios_item['id']); ?>">Ver Usuario</a></p>
<?php endforeach; ?>