<?/*
https://api.instagram.com/oauth/authorize/?client_id=7007dc6f7f5d4c24b783e75223c93f21&redirect_uri=http://thomasphorton.com/instagram/landing.php&response_type=code
*/?>

<!DOCTYPE html>
<html>

<head>
<title>InstaRoulette</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	gameContainer = $('.game-container');
	targetPicWrapper = $('#targetPicWrapper');
	
	
	link = $('.choice');
	winner = $('.winner');
	loser = $('.loser');
	
	link.click(function(){
		if ($(this).hasClass('winner')){
			//alert('win!')
			
			targetPicWrapper.html('<h2>That\'s Correct! A Big Check Mark is Going to Go Here One Day!</h2>')
			
		}
		else{
			//alert('lose!')
			targetPicWrapper.html('<h2>Imagine a Big Red \'X\'. Because That\'s What Losers See.</h2>')
		}
	})
});
</script>
<?php include 'analytics.php';?>
</head>
<body>
<header class="header">
<h1>Who Took This Picture?</h1>
<a href="logout.html">log out</a>
</header>

<span class="instructions">Click the user who you think uploaded the picture on the left:</span>

<div clase="game-container" class="clearfix">
<? include 'the.game.php'; ?>
</div><!--#gameContainer-->

<?php include 'footer.php'; ?>

</body>
</html>
