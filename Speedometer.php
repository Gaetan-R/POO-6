<?php


class Speedometer
{
    const kilometer = [
        '10'  => '6.21371',
        '20'  => '12.4274',
        '30'  => '18.6411',
        '40'  => '24.8548',
        '50'  => '31.0686',
        '60'  => '37.2823',
        '70'  => '43.496',
        '80'  => '49.7097',
        '90'  => '55.9234',
        '100' => '62.1371',
    ];

    public static function convertKmToMiles(string $miles) : ?string
    {
        return array_key_exists($miles, self::kilometer) ? self::kilometer[$miles] : null;
    }


    const miles = [
        '6.21371' => '10',
        '12.4274' => '20',
        '18.6411' => '30',
        '24.8548' => '40',
        '31.0686' => '50',
        '37.2823' => '60',
        '43.496'  => '70',
        '49.7097' => '80',
        '55.9234' => '90',
        '62.1371' => '100',
    ];

    public static function convertMilesToKm(string $kilometer) : ?string
    {
        return array_key_exists($kilometer, self::miles) ? self::miles[$kilometer] : null;
    }


}