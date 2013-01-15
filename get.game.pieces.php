<?
	include 'libraries/instagram/Instagram.php'; 
/**
* Configuration params, make sure to write exactly the ones
* instagram provide you at http://instagr.am/developer/
*/ 
$config = array( 
        'site_url' => 'https://api.instagram.com/oauth/access_token', 
        'client_id' => '7007dc6f7f5d4c24b783e75223c93f21', // Your client id 
        'client_secret' => '2df4a73a3a9a4b0bbe46465230d55a29', // Your client secret 
        'grant_type' => 'authorization_code', 
        'redirect_uri' => 'http://thomasphorton.com/instagram/landing.php', // The redirect URI you provided when signed up for the service 
     ); 
 
// Instantiate the API handler object 

$instagram = new Instagram($config); 

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

// Get the target's recent media.
$target_recent = $instagram->getUserRecent($target_data['id']);
$target_media_object = json_decode($target_recent, true);

// Pick a random item from the recent media. Assign it to a variable.
$target_num_pics = count($target_media_object['data']);
$target_num = rand(0,$target_num_pics-1);
$target_pic = $target_media_object['data'][$target_num];

$user_choices = array($target_data, $first_decoy_data, $second_decoy_data);
shuffle($user_choices);
/*echo '<h1>';
echo $target_data['username'];
echo '</h1>';*/
?>