<br>
<h1><?= $title ?></h1>
<br>
<!--posts 里面是很多行数据，用post 循环每一行  $post['属性名称']-->
<?php foreach ($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small class="post-date">Posted on:<?php echo $post['created_at']; ?></small><br>
	<?php echo $post['body']; ?>
	<p><a class="btn  btn-outline-primary" href="<?php echo site_url('/index.php/posts/' . $post['slug']); ?>">

		Read More</a></p>
<?php endforeach; ?>
