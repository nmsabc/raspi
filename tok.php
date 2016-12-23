<?php 
$token = uniqid();
//$short_token = uuid_short();
$hashedtoken = md5($token);
//$user = $user_login;

//$wpdb->insert('wp_tokens', 
//array('user' => $user, 'token' => $hashedtoken),
//array('%s','%s')
//);

echo "my token: $token <br><br>";
//echo "my uuid_short token is : $short_token <br><br>";
echo "my md5 token: $hashedtoken"; 


?>

