<?php

$curl = curl_init('https://api.openweathermap.org/data/2.5/weather?lat=35&lon=139&appid=843d40633ae05dcf366e7d2c05300f90');
curl_setopt_array($curl, [
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 1
]);

$data = curl_exec($curl);

if ($data === false) {
    var_dump(curl_error($curl));
} else {
    if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
        $data = json_decode($data, true);
        echo '<pre>';
        var_dump($data['main']['temp']);
        echo '</pre>';
    }
}
curl_close($curl);
