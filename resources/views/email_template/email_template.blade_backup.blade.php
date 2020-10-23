

<?php
    $user_ip = getenv('REMOTE_ADDR');
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $zone = $geo["geoplugin_continentName"];
?>
<style>
    p{
        font-size: 9.5pt;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>

<p> Please check your Meta tag this page : www.databar.co.th{{$data}}</p>
<br>
<p>Zone :  <?= isset($zone) ? $zone :  ''?> | Country :  <?= isset($country) ? $country : ''?> | Date :  {{date("d-M-Y")}} | Time :  {{date("h:i:s")}} </p>
