<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    		<link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    		<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
   	 	<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="/"><?php echo get_bloginfo( 'name' ); ?></a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
            <?php wp_list_pages( '&title_li='); ?>
			
		</ul>
		<div class="col-sm-3 col-md-3 pull-right">
          <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
          </form>
		</div>
	</div>
</nav>