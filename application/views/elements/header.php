<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= isset($title) ? $title : "Titulo"?></title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
</head>
<body>

<div class="pure-menu pure-menu-horizontal">
          <a href="<?php echo site_url(); ?>" class="pure-menu-heading pure-menu-link">TecGurus</a>
          <ul class="pure-menu-list">
              <li class="pure-menu-item"><a href="<?php echo site_url('pages/view/home') ?>" class="pure-menu-link">Home</a></li>
              <li class="pure-menu-item"><a href="<?php echo site_url('productos'); ?>" class="pure-menu-link">Productos</a></li>
              <li class="pure-menu-item"><a href="<?php echo site_url('pages/view/about'); ?>" class="pure-menu-link">Acerca de</a></li>
          </ul>
</div>