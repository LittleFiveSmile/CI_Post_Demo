<br>
<h2><?php echo $post['title']; ?></h2>
<br>
<br>
<small class="post-date">Posted on:<?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>
<hr>
<a class="btn  btn-outline-primary pull-left" href="edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/index.php/posts/delete/' . $post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
