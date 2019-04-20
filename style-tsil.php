
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.animestarz.com/animeonline/api_android/anime_a.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo $response;
?>