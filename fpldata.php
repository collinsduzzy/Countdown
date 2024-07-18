<?php 
// League ID
$league_id = 90137;
// FPL URL
$fplUrl = 'https://fantasy.premierleague.com/api/leagues-classic/' . $league_id . '/standings/';

echo $fplUrl;

$curl_start = curl_init($fplUrl);
// curl_setopt($ch, CURLOPT_URL, $fplUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,  true);
// curl_setopt($ch, CURLOPT_HEADER,  false);

$response = curl_exec($curl_start);
$league_data = json_decode($response, true);

curl_close($ch);

print_r($league_data);

?>