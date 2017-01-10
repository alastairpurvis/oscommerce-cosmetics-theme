<?php global $titan; ?>
<head>
	<link href="<?php bloginfo( 'stylesheet_url'); ?>" type="text/css" media="screen" rel="stylesheet" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url'); ?>/stylesheets/ie.css" />
	<![endif]-->

	<!--Scripts-->
	<!--[if lte IE 7]>
	<script type="text/javascript">
	sfHover=function(){var sfEls=document.getElementById("nav").getElementsByTagName("LI");for(var i=0;i<sfEls.length;i++){sfEls[i].onmouseover=function(){this.className+=" sfhover";}
	sfEls[i].onmouseout=function(){this.className=this.className.replace(new RegExp(" sfhover\\b"),"");}}}
	if (window.attachEvent)window.attachEvent("onload",sfHover);
	</script>
	<![endif]-->

	<!--WordPress-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name'); ?> RSS Feed" href="<?php bloginfo( 'rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url'); ?>" />

	<!--WP Hook-->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
<table width=800 cellspacing=0 cellpadding=0><td width=600 valign=top>
	<div class="wrapper">
		<div id="content">