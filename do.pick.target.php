
<?
/********** Picking The Target **********/

// Get current user object, dump vars, find the user id.
$self = $instagram->getCurrentUser();
$user_data = get_object_vars($self);

// Look at the followers (encoded json), decode it, count them.
$follows = $instagram->getUserFollows($user_data['id']);
$follows_object = json_decode($follows, true);
$num_followers = count($follows_object['data']);

// Pick a random follower, assign their data as the target.
$rand_follower = rand(0,$num_followers-1);
$target_data = $follows_object['data'][$rand_follower];

// Pick another random follower as a decoy. Make sure it isn't the same as the target.
$first_decoy = rand(0,$num_followers-1);
while ($first_decoy == $rand_follower){
	$first_decoy = rand(0,$num_followers-1);
}
$first_decoy_data = $follows_object['data'][$first_decoy];

// Pick a second decoy. Make sure they haven't already been picked.
$second_decoy = rand(0,$num_followers-1);
while($second_decoy == $rand_follower || $second_decoy == $first_decoy){
	$second_decoy = rand(0,$num_followers-1);
}
$second_decoy_data = $follows_object['data'][$second_decoy];

// Start gathering data.
$target_id = $target_data['id'];
$target_name = $target_data['username'];

// Get the target's recent media.
$target_recent = $instagram->getUserRecent($target_data['id']);
$target_media_object = json_decode($target_recent, true);

// Pick a random item from the recent media. Assign it to a variable.
$target_num_pics = count($target_media_object['data']);
$target_num = rand(0,$target_num_pics-1);
$target_pic = $target_media_object['data'][$target_num];
?>

<img src="<?= $target_pic['images']['standard_resolution']['url']?>" id="targetPic" />
<ul>
<li>
	<a href="https://api.instagram.com/oauth/authorize/?client_id=7007dc6f7f5d4c24b783e75223c93f21&redirect_uri=http://thomasphorton.com/instagram/landing.php&guess=<?=$target_data['username']?>&answer=<?=$target_data['username']?>&response_type=code" class="winner choice">
	<img src="<?= $target_data['profile_picture']?>" class="choicePic">
	<span class="choiceName"><?= $target_data['username']?></span>
	</a>
</li>
<li>
	<a href="https://api.instagram.com/oauth/authorize/?client_id=7007dc6f7f5d4c24b783e75223c93f21&redirect_uri=http://thomasphorton.com/instagram/landing.php&guess=<?=$first_decoy_data['username']?>&answer=<?=$target_data['username']?>&response_type=code" class="loser choice">
	<img src="<?= $first_decoy_data['profile_picture']?>" class="choicePic">
	<span class="choiceName"><?= $first_decoy_data['username']?></span>
</li>
<li>
	<a href="https://api.instagram.com/oauth/authorize/?client_id=7007dc6f7f5d4c24b783e75223c93f21&redirect_uri=http://thomasphorton.com/instagram/landing.php&guess=<?=$second_decoy_data['username']?>&answer=<?=$target_data['username']?>&response_type=code" class="loser choice">
	<img src="<?= $second_decoy_data['profile_picture']?>" class="choicePic">
	<span class="choiceName"><?= $second_decoy_data['username']?></span>
</li>
</ul>