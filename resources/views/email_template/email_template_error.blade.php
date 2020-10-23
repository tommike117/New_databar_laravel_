

<?php

$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$zone = $geo["geoplugin_continentName"];
$ip = $geo["geoplugin_request"];

?>
<style>
    p{
        font-size: 9.5pt;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>

<p> Error Page : www.databar.co.th/{{$data}}</p>
<p> Sorry, the page you're looking for is not available. </p>
<br>
<p>IP address : <?= isset($ip) ? $ip : ''?>  | Zone :  <?= isset($zone) ? $zone :  ''?> | Country :  <?= isset($country) ? $country : ''?> | Date :  {{date("d-M-Y")}} | Time :  {{date("h:i:s")}} </p>
