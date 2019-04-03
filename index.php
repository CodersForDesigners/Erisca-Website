<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20180715';

	// get info on the request
	// $view = require "server/pageless.php";
	// $viewName = $view[ 0 ];
	// $viewPath = $view[ 1 ];

	// included external php files with functions.
	require ('inc/head.php');
	require ('inc/lazaro.php'); /* -- Lazaro disclaimer and footer -- */

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>


	<!-- Nothing Above This -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Page Title | Page Name -->
	<title>Erisca | Welcome</title>

	<?php echo gethead(); ?>

</head>

<body id="body" class="body">

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="page-wrapper"><!-- Page Wrapper -->

	<!-- Header Section -->
	<!-- <section class="header-section">
		<div class="container">
			<div class="header row">
				<div class="columns small-3">
					<a class="logo" href="/">
						<img src="media/logo.svg<?php //echo $ver ?>">
					</a>
				</div>
				<div class="text-right columns small-9">
					<div class="navigation inline">
						<a class="button js_nav_button <?php //echo ( $viewName == "pageone" ? "active" : "" ) ?>" data-page-id="pageone" href="/pageone">page-1</a>
						<a class="button js_nav_button <?php //echo ( $viewName == "pagetwo" ? "active" : "" ) ?>" data-page-id="pagetwo" href="/pagetwo">page-2</a>
						<a class="button js_nav_button <?php //echo ( $viewName == "contact" ? "active" : "" ) ?>" data-page-id="contact" href="/contact">contact</a>
					</div>
				</div>
			</div>
		</div>
	</section> --> <!-- END : Header Section -->

	<section class="placeholder-section fill-dark block-space-top-bottom">
		<div class="container placeholder">
			<div class="row block-space-top">
				<div class="columns logo small-9 small-offset-1 medium-7 large-5">
					<img class="block" src="media/erisca-logo-dark.svg<?php echo $ver ?>">
				</div>
			</div>
			<div class="row">
				<div class="columns title small-10 small-offset-1 medium-7 large-5">
					<h1 class="h3">Erisca is an end-to-end Project Update Platform for Real Estate Developers.</h1>
				</div>
				<div class="columns description small-10 small-offset-1 large-6">
					<p class="p text-neutral">Our website is currently being developed. If you’d like to be informed the minute we go live or if you’d like to talk to us, leave your information in the form below.</p>
				</div>
			</div>
			<div class="action block-space-bottom">
				<form class="js_contact_form">
					<div class="row ">
						<div class="columns small-10 small-offset-1 medium-5 large-3">
							<label class="block name">
								<span class="visuallyhidden">Name</span>
								<input class="block p" type="text" placeholder="Full Name" name="name">
							</label>
						</div>
						<div class="columns small-10 small-offset-1 medium-5 medium-offset-0 large-3">
							<label class="block phone">
								<span class="visuallyhidden">Phone</span>
								<input class="block p" type="text" placeholder="Mobile Number" name="phone-number">
							</label>
						</div>
					</div>
					<div class="row ">
						<div class="columns small-10 small-offset-1 medium-5 large-3">
							<label class="block email">
								<span class="visuallyhidden">Email</span>
								<input class="block p" type="email" placeholder="Email ID" name="email">
							</label>
						</div>
						<div class="columns small-10 small-offset-1 medium-5 medium-offset-0 large-3">
							<label class="block submit">
								<span class="visuallyhidden">Submit</span>
								<button class="button block fill-gradient-highlight js_form_submit" type="submit">Request A Call Back</button>
							</label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!-- Page Content -->
	<!-- <div id="page-content">

		<?php //require $viewPath; ?>

	</div> --> <!-- END : Page Content -->



	<!-- Lazaro Signature -->
	<?php lazaro_signature(); ?>
	<!-- END : Lazaro Signature -->

</div><!-- END : Page Wrapper -->









<!-- ⬇ All Modals below this point ⬇ -->

<div id="modal-wrapper"><!-- Modal Wrapper -->
	<div class="modal-box js_modal_box">
		<!-- Modal Content : Sample Video -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-video">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<!-- video embed -->
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Video -->

		<!-- Modal Content : Sample Form -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-form">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<h2>Form Title Goes Here</h2>
					</div>
				</div>
				<div class="row">
					<!-- video embed -->
					<div class="columns small-12">
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="columns small-12">
						<p>Augmented reality chrome network skyscraper Tokyo camera military-grade cardboard footage ablative otaku warehouse Kowloon table tower monofilament. Bicycle girl tower network face forwards towards fetishism corporation tiger-team. Monofilament decay hacker RAF dolphin DIY franchise narrative math-skyscraper realism systemic order-flow corrupted. Math-sentient tube cyber-paranoid order-flow long-chain hydrocarbons Chiba boy. RAF advert narrative dissident car wristwatch soul-delay cardboard nano-neon silent. Wonton soup pistol nano-otaku assault franchise realism RAF denim skyscraper geodesic tube into weathered youtube artisanal grenade. Youtube monofilament smart-corporation military-grade Tokyo meta-papier-mache corrupted disposable plastic savant shanty town dolphin 8-bit wonton soup. Military-grade Tokyo digital 3D-printed boat advert San Francisco engine tattoo computer skyscraper physical construct. Sub-orbital computer media market order-flow nodal point j-pop spook Chiba soul-delay tiger-team tanto cartel. Camera tower-space franchise range-rover futurity network military-grade Shibuya. Saturation point tanto physical BASE jump 3D-printed neural fetishism long-chain hydrocarbons rain. Bicycle apophenia futurity digital boat denim post-jeans free-market car corporation range-rover cardboard convenience store concrete. Long-chain hydrocarbons j-pop Tokyo crypto-table cardboard render-farm. Tokyo boy disposable industrial grade bridge A.I. carbon footage BASE jump cartel free-market euro-pop long-chain hydrocarbons-ware grenade. Pre-man voodoo god towards euro-pop cyber-crypto-Legba systema modem beef noodles. Free-market boy sensory post--space systemic jeans. Uplink singularity shanty town voodoo god rifle tank-traps smart-katana shrine human. Hotdog savant human garage wonton soup tube dolphin j-pop. Tiger-team wristwatch engine vehicle cartel apophenia augmented reality man network stimulate. Shrine claymore mine monofilament hotdog voodoo god geodesic knife. Voodoo god silent otaku hacker computer post-singularity office tower shanty town. Tokyo lights corrupted marketing skyscraper receding beef noodles uplink footage gang rebar order-flow table nano-bicycle tube. </p>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Form -->


		<!-- Modal Close Button -->
		<div class="modal-close js_modal_close">&times;</div>
	</div>

</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->

<?php //lazaro_disclaimer(); ?>









<!-- JS Modules -->
<!-- <script type="text/javascript" src="/js/modules/pageless.js"></script> -->
<script type="text/javascript" src="/js/modules/video_embed.js"></script>
<script type="text/javascript" src="/js/modules/modal_box.js"></script>
<script type="text/javascript" src="/js/modules/smoothscroll.js"></script>
<script type="text/javascript" src="/js/modules/form.js"></script>
<!-- <script type="text/javascript" src="/js/modules/disclaimer.js"></script> -->

<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){
});

</script>

</body>

</html>
