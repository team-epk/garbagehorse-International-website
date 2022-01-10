<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Some of our work</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--swipebox CSS-->
	<link rel="stylesheet" href="css/swipebox.css">

	<!--Site CSS-->
	<link rel="stylesheet" href="css/garbagestyle.css">

	<!--JQuery CDN-->
	<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    
    <!--Swipebox JS-->
    <script src="js/jquery.swipebox.js"></script>

	<!--"Fire the plugin/Release the Kraken!"-->
	<script type="text/javascript">
		;
		(function($) {

			$('.swipebox').swipebox();

		})(jQuery);

	</script>
</head>

<body>
	<div class="grid-container">

		<div class="header">
			<?php include("includes/header.php"); ?>
		</div>

		<div class="sidenav">
			<?php include("includes/navigation.php"); ?>
		</div>

		<div class="swipebox">
			<div id="gallery_text">
				<p>Garbagehorse International makes props, directs plays, and creates items and events that use cheap technology to change the way people think about theater, while fostering sociability.
					<br />Refer to the Manifesto for more details.</p>
			</div>

			<a href="img/atomic_mass-based_object_generator.jpg" class="swipebox" title="Every Seven Minutes - Atomic Mass-based Generator">
				<img src="img/thumb/atomic_mass-based_object_generator_thumb_tiny.jpg" alt="Every Seven Minutes - written by Ken Preuss - Atomic Mass-based Generator"></a>


			<a href="img/randomized_recipient_generator.jpg" class="swipebox" title="Every Seven Minutes - Randomized Recipient Generator - noise maker with flashing lights - made of scrap wood, yogurt jars, hard drive parts, and PVC pipe (to name a few things).">
				<img src="img/thumb/randomized_recipient_generator_thumb_tiny.jpg" alt="Every Seven Minutes - Randomized Recipient Generator - noise maker with flashing lights"></a>

			<a href="img/RRG_innards.jpg" class="swipebox" title="Every Seven Minutes - Randomized Recipient Generator Innards - 3 Arduino boards powered by a cell phone battery (and held in place by popsicle sticks).">
				<img src="img/thumb/RRG_innards_thumb_tiny.jpg" alt="Every Seven Minutes - Randomized Recipient Generator Innards"></a>
			
			<a href="https://vimeo.com/335646030" class="swipebox" title="The Randomized Recipient Generator in action!"><img src="img/thumb/RRG_demo_thumb_tiny.png" alt="The Randomized Recipient Generator in action!"></a>

			<a href="img/utilized_thingumajig_receptacle.jpg" class="swipebox" title="Every Seven Minutes - Utilized Thingumajig Receptacle (where props are thrown post-usefulness)">
				<img src="img/thumb/utilized_thingumajig_receptacle_thumb_tiny.jpg" alt="Every Seven Minutes - Utilized Thingumajig Receptacle"></a>

			<a href="img/vegan_starter_kit.jpg" class="swipebox" title="Every Seven Minutes - Vegan Starter Kit - prop produced by the Atomic Mass-based Object Generator, containing a giant carrot.">
				<img src="img/thumb/vegan_starter_kit_thumb_tiny.jpg" alt="Every Seven Minutes - Vegan Starter Kit"></a>

			<a href="img/tech_rehearsal.jpg" class="swipebox" title="Every Seven Minutes - Tech Rehearsal - Costumes and almost finished props.">
				<img src="img/thumb/tech_rehearsal_thumb_tiny.jpg" alt="Every Seven Minutes - Tech Rehearsal - Costumes and almost finished props"></a>

			<a href="img/t-beefin.png" class="swipebox" title="T-Beefin' - wireless portal to solicit (unofficial) MBTA feedback.">
				<img src="img/thumb/t-beefin_thumb_tiny.png" alt="T-Beefin' - wireless portal to solicit (unofficial) MBTA feedback."></a>

			<a href="img/smilebox.jpg" class="swipebox" title="The Smilebox - a wireless portal that asks people what made them smile that day. A Raspberry Pi zero powered by a battery and stuffed into a travel soap container.">
				<img src="img/thumb/smilebox_thumb_tiny.jpg" alt="The Smilebox - a wireless portal that asks people what made them smile that day. A Raspberry Pi zero powered by a battery and stuffed into a travel soap container."></a>

			<a href="img/smilebox-home.png" class="swipebox" title="The Smilebox homepage.">

				<img src="img/thumb/smilebox-home_thumb_tiny.png" alt="The Smilebox homepage."></a>

		</div>


		<div class="footer">
			<?php include("includes/footer.php"); ?>
		</div>
	</div>

</body>

</html>
