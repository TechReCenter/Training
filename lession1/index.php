<?php

require('data.php');

?>

<ul>
  <li><a href="index.php">Home</a></li>
</ul>

<hr>

<ul>
  <?php foreach($data as $id => $item) { ?>
  <li>
    <h3><a href="detail.php?id=<?php echo $id ?>"><?php echo $item['title'] ?></a></h3>
    <p><?php echo $item['content'] ?></p>
  </li>
  <?php } ?>
</ul>

<hr>