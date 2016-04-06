<?php

$id = 0;
$post = null;

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
}

if (isset($data[$id])) {
  $post = $data[$id];
}

if (empty($post)) {
  header('Location: index.php?message=Data not found');
}

require(ROOT . '/views/detail.php');