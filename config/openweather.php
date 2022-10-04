<?php

return [
    'api_key' => env('OPENWAETHER_API_KEY', ""),
    'weather_api_version' => '2.5',
    'onecall_api_version' => '2.5',
    'historical_api_version' => '2.5',
    'forecast_api_version' => '2.5',
    'polution_api_version' => '2.5',
    'geo_api_version' => '1.0',
    'lang' => env('OPENWAETHER_API_LANG', 'en'),
    'date_format' => 'm/d/Y',
    'time_format' => 'h:i A',
    'day_format' => 'l',
    'temp_format' => 'c',  // c celcius - f farenheit - k kelvin
];
