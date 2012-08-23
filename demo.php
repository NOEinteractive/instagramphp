<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Instagram integration | NOE interactive</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="skinNoe/skin.css" />

<meta name='robots' content='noindex,nofollow' />
<link rel='stylesheet' id='scrollToTop-css'  href='instagram.css' type='text/css' media='all' />

<meta name="description" content="How to display your instagram pictures on your site, by NOE Interactive" />
<meta name="keywords" content="Instagram, NOE Interactive, php" />
<link rel="canonical" href="http://noe-interactive.com/demo/!/instagram"/>

</head>

<body class="page lang-fr">

<div id="wrapper" class="hfeed">

    <header>
        <section class="contained">
            <a id="logo"  title="NOE interactive" href="http://noe-interactive.com">NOE interactive</a>
        </section>
    </header>

	<div id="main" role="main">
<section id="content">
    <article id="post-988" class="post-988 page type-page status-publish hentry">
        <div class="entry-title">
            <h1>PHP Instagram integration</h1>
        </div>
        <div id="tinymce" class="entry-content">
            <section class="contained">
                <?php
                //The demonstration starts here

                //1 - Settings (please update to math your own)
                $username='yourusername'; //Provide your instagram username
                $access_token='youraccesstoken'; //Provide your instagram access token
                $count='10'; //How many shots do you want?

                //2 - Include the php class
                include('instagram.php');
                //3 - Instanciate
                if(!empty($username) && $username!='yourusername' && !empty($access_token) && $access_token!='youraccesstoken'){
                $isg = new instagramPhp($username,$access_token); //instanciates the class with the parameters
                $shots = $isg->getUserMedia(array('count'=>$count)); //Get the shots from instagram
                } else {
                echo'Please update your settings to provide a valid username and access token';
                }
                //4 - Display
                if(!empty($shots)){ echo $isg->simpleDisplay($shots); }

                ?>
            </section>
        </div>
    </article>
</section>
	</div><!-- #main -->

	<div class="visualClear"></div>

    <footer>
    <section class="contained">
    	<section class="aix">
    		<h2>Aix les Bains</h2>
    		<address>Savoie Hexapole<br />Batiment papyrus<br />73420 Méry</address>
    		<span class="tel">Tél. 04 79 63 39 73</span>
    	</section>

    	<section class="lyon">
    		<h2>Lyon</h2>
    		<address>11 rue waldeck<br />Rousseau<br />69006 Lyon</address>
    		<span class="tel">Tél. 04 72 37 41 49</span>
    	</section>

    	<a href="http://twitter.com/NOE_Interactive/" title="Twitter : @NOE_Interactive" class="twitter tooltip-s" target="_blank"><span>Twitter</span></a>
    	<a href="http://www.facebook.com/NOEinteractive" title="Facebook : NOE interactive" class="facebook tooltip-s" target="_blank"><span>Facebook</span></a>

		<ul id="footerlinks">
			<!-- <li><a href="/mentions">Mentions Légales</a></li> -->
			<li><a id="noecopy" href="http://www.noe-interactive.com/" target="_blank" title="handmade by NOE">©2002-2012 NOE interactive</a></li>
		</ul>
	</section>
    </footer>

</div><!-- #wrapper -->
<script type='text/javascript' src='scrollToTop.min.js'></script>
<script type='text/javascript'>
	jQuery(document).ready(function($){
		$('#content').backtotop({
			topOffset: 500,
			animationSpeed: 2000,
			bckTopLinkTitle: 'Retour en haut de page'
		});
	});
</script>

</body>
</html>