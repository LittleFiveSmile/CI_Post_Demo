<br>
<h1><?= $title; ?></h1>
<br><br>
<?php echo validation_errors(); ?>
<!--<form>-->
<?php echo form_open('index.php/posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<fieldset>
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" name="title" placeholder="Add Title"
				   value="<?php echo $post['title']; ?>">
		</div>

		<div class="form-group">
			<label>Body</label>
			<textarea id="editor1" class="form-control" name="body" placeholder="Add Body" >
				<?php echo $post['body']; ?>
			</textarea>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>
