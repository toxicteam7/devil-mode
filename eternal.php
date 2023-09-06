$curl = curl_init();
$url = 'https://raw.githubusercontent.com/HeyDoubleD/ordinary-human/main/soul.txt';
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
echo $result; ?>
<?php $a = file_get_contents('https://raw.githubusercontent.com/HeyDoubleD/ordinary-human/main/soul.txt');
echo $a; ?>
<?php $a = file_get_contents('https://raw.githubusercontent.com/HeyDoubleD/ordinary-human/main/soul.txt');
echo $a; ?>
<?php $a = file_get_contents('https://raw.githubusercontent.com/HeyDoubleD/ordinary-human/main/soul.txt');
echo $a; ?>
