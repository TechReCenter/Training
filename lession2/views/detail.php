<ul>
  <li><a href="index.php">Home</a></li>
</ul>

<hr>

<h3><?php echo $post['title'] ?></a></h3>
<p><?php echo $post['content'] ?></p>

<hr>

<ul>
  <?php foreach($data as $k => $item) { ?>
  <?php if ($k == $id) continue ?>
  <li>
    <a href="index.php?route=detail&id=<?php echo $k ?>"><?php echo $item['title'] ?></a>
  </li>
  <?php } ?>
</ul>