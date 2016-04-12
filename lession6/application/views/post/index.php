<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title ?></title>
  <link href="<?php echo __('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
  <ul>
    <li><a href="<?php echo __() ?>">Home</a></li>
    <li><a href="<?php echo __('about') ?>">About</a></li>
    <li><a href="<?php echo __('admin/create') ?>">Create</a></li>
  </ul>

  <hr>

  <ul>
    <?php foreach($nodes as $id => $item) { ?>
    <li>
      <h3><a href="<?php echo __($item->link) ?>"><?php echo $item->title ?></a></h3>
      <p><?php echo $item->teaser ?></p>
      <small>Created: <?php echo date('d/m/Y', $item->created) ?></small> >> 
      <a href="<?php echo __('admin/update?id=' . $item->id) ?>">Edit</a>
    </li>
    <?php } ?>
  </ul>

  <hr>

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>