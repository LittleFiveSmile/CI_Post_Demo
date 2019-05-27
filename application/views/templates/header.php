<html>
	<head>
		<title>Xu blog</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
		<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="<?php echo base_url();?>">XuBlog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>index.php/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>index.php/posts">Blog</a>
				</li>

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a class="nav-link" href="<?php echo base_url();?>index.php/posts/create">Create Post</a></li>
			</ul>
			<form class="form-inline my-2 my-lg-0">

<!--				<input class="form-control mr-sm-2" type="text" placeholder="Search">-->
<!--				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>-->
			</form>
		</div>
	</nav>
	<div class="container">
