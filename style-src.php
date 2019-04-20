 <?php
$datas = $_REQUEST['catID'];
$b = "catID=" . $datas;
# Create a connection
$url = 'http://www.animestarz.com/animeonline/api_android/detail_anime.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $b);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$response = curl_exec($ch);
echo $response;
curl_close($ch);
?>
