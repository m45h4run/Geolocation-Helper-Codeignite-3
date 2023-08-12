<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('haversineDistance')) {
    function haversineDistance($koordinat1, $koordinat2, $unit = 'km') {
        $earthRadius = ($unit === 'km') ? 6371 : 6371000;
        // Radius Bumi dalam kilometer atau meter

        $result1 = explode(',', $koordinat1);
        $lat1 = $result1[0];
        $lon1 = $result1[1];

        $result2 = explode(',', $koordinat2);
        $lat2 = $result2[0];
        $lon2 = $result2[1];

        $deltaLat = deg2rad($lat2 - $lat1);
        $deltaLon = deg2rad($lon2 - $lon1);

        $a = sin($deltaLat / 2) * sin($deltaLat / 2) +
        cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
        sin($deltaLon / 2) * sin($deltaLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;

        return $distance;
    }
}
