<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garbagehorse International</title>
    <link rel="stylesheet" href="css/garbagestyle.css">
    <!--JQuery CDN-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<!--Link to JQuery Validator-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js">
	</script>

	<!--Rules-->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#myForm").validate();
		});

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


        <div class="main">

            <form id="myForm" method="post" action="mailto:erik@mopedpress.com">
                <fieldset>
                    <legend>Contact Us!</legend>
                    <p>Would you like to know more about what we do? Or would you like to hire us to do it? Do you want to learn how to do this stuff? Collaborate? Let's talk! (Or email, for now.)</p>
                    <p>
                        <label for="name">Name</label> <em>(Required)</em>
                        <br />
                        <input id="name" name="name" size="25" class="required" minlength="2" /> </p>
                    <p>
                        <label for="email">Email Address</label> <em>(Required)</em>
                        <br />
                        <input id="email" name="email" size="25" class="required email" /> </p>
                    <p>
                        <label for="comments">Comments</label><em> (Required)</em>
                        <br />
                        <textarea id="comments" name="comments" rows="8" cols="30" class="required comments" placeholder="What say you?"></textarea></p>
                    <p>
                        <p>
                            <input class="submit" type="submit" value="Submit Form" /> </p>
                </fieldset>
            </form>
        </div>

        <div class="footer">
            <?php include("includes/footer.php"); ?>
        </div>
    </div>

</body>

</html>
