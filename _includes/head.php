<head>	

	<title><?php echo $image['name']; ?> :: 365 Portraits :: Josh Rucker</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>_css/main.css" />

	<meta charset="utf-8">
	<meta content="General" name="rating"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    
	<meta name="description" content="The 365 project is a portrait photography project where I take a 
		portrait of a different individual everyday for a year. The rules are simple: 1) shoot a portrait 
		everyday and 2) never shoot the same person twice." />

	<!-- Typekit -->
    <script type="text/javascript" src="//use.typekit.net/meg6qsn.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta property="og:title" content="<?php echo $base_url . $image['name']; ?>" />
	<meta property="og:type" content="image" />
	<meta property="og:description" content="The 365 project is a portrait photography project where I take a 
		portrait of a different individual everyday for a year. The rules are simple: 1) shoot a portrait 
		everyday and 2) never shoot the same person twice." />
	<meta property="og:image" content="<?php echo $base_url . $image['image_tb']; ?>"/>
	<meta property="og:url" content="<?php echo $base_url . date('m/d/',$image['timestamp']); ?>" />
	<meta property="og:site_name" content="Josh Rucker :: 365 Portraits" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@ifiamblue" />
	<meta name="twitter:creator" content="@ifiamblue" />

</head>