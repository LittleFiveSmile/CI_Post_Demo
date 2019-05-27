<br>
<h1><?= $title;?></h1>
<br>
<br>
<?php echo validation_errors();?>
<!--<form>-->
<?php echo form_open('index.php/posts/create');?>
	<fieldset>
		<div class="form-group">
			<label >Title</label>
			<input type="text" class="form-control" name="title" placeholder="Add Title">
		</div>

		<div class="form-group">
			<label >Body</label>
			<textarea id="editor1" class="form-control"  name="body" placeholder="Add Body" rows="3"></textarea>

		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>
