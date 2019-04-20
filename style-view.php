 <?php
$datas = $_REQUEST['anime_ids'];
$b = "anime_ids=" . $datas;
# Create a connection
$url = 'http://www.animestarz.com/animeonline/api_android/anime_season_animes.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $b);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$response = curl_exec($ch);
echo $response;
curl_close($ch);
?>
