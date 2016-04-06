<?php

require('data.php');

$id = 0;
$post = null;

if (isset($_GET['id'])) {
	$id = intval($_GET['id']);
}

if (isset($data[$id])) {
	$post = $data[$id];
}

if (empty($post)) {
	header('Location: error.php?message=Data not found');
}

?>


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
		<a href="detail.php?id=<?php echo $k ?>"><?php echo $item['title'] ?></a>
	</li>
	<?php } ?>
</ul>