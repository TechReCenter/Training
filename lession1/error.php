<?php

$message = isset($_GET['message']) ? $_GET['message'] : '';

if ($message) {
  echo "<h1>{$message}</h1>";
}