<? include 'get.game.pieces.php'; ?>
<div id="targetPicWrapper">
<img src="<?= $target_pic['images']['standard_resolution']['url']?>" id="targetPic" />
</div>
<ul id="choiceList" class="clearfix">
<?
foreach($user_choices as $user){
?>
	<li>
	<a href="https://api.instagram.com/oauth/authorize/?client_id=7007dc6f7f5d4c24b783e75223c93f21&redirect_uri=http://thomasphorton.com/instagram/landing.php&response_type=code" 
	class="choice clearfix <? if ($target_data['username'] == $user['username']) echo 'winner' ?>" data-answer="<?= $target_data['username']; ?>" data-guess="<?= $user['username']; ?>">
	<img src="<?= $user['profile_picture']?>" class="choicePic">
	<span class="choiceName"><?= $user['username']?></span>
	</a>
</li>
	
	<?
}

?>
</a>
</ul>

