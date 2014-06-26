<!doctype html>
<?php 
// domain name
$domain_name = preg_replace('/^www./','',$_SERVER["HTTP_HOST"]); 

// random image
$dir = "img/";
$images = scandir($dir);
$i = rand(2, sizeof($images)-1);
?>




<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $domain_name ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">
		
		<!-- Google fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Economica:400,700|Sonsie+One|Wire+One|Lobster|Pacifico|Londrina+Shadow|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- image randomizer --> 
		<style>body {background-image: url("img/<?php echo $images[$i]; ?>");}</style>
		
    </head>
    <body>
        <!-- Add your site or application content here -->
		<header>
		
		</header>
		
		<content>
			<div class="wrap">	
				<div id="domain-name">
					<h1>domain.com</h1>
					<p>New domain has been setup but it's not quite ready yet. Please come back soon ! :)</p>
				</div>
			</div>
		</content>

		<footer>
		</footer>
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
		-->
    </body>
</html>