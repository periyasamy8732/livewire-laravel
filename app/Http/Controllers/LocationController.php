<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class LocationController extends Controller
{
  public function getUserLocation(Request $request)
{
    $request->validate([
        'ip' => 'nullable|ip',
    ]);

    $ip = $request->ip ?? $request->ip();

    $location = geoip($ip);

    return response()->json([
        'ip'       => $location->ip,
        'country'  => $location->country_name,
        'city'     => $location->city,
        'state'    => $location->state_prov,
        'timezone' => $location->time_zone['name'] ?? null,
        'lat'      => $location->latitude,
        'lon'      => $location->longitude,
    ]);
}


// public function getUserLocation(Request $request)
// {
//     // If local environment, fetch public IP
//     if ($request->ip() == "59.92.106.79" || $request->ip() == "::1") {
//         $ip = Http::get('https://api.ipify.org')->body();
//     } 
//     else {
//         $ip = $request->ip();
//     }
//     // $ip= '59.92.106.79';

//     $location = geoip($ip);
//     dd(geoip($ip));

//     return response()->json([
//         'ip'       => $ip,
//         'country'  => $location->country_name,
//         'city'     => $location->city,
//         'state'    => $location->state_prov,
//         'timezone' => $location->time_zone['name']??null,
//         'lat'      => $location->latitude,
//         'lon'      => $location->longitude,
//     ]);
// }
}

  // public function getUserLocation(Request $request)
    // {
    //     $ip = $request->ip(); // user IP
        
    //     // For testing locally
    //    //  $ip = " 192.168.10.120";

    //     $location = geoip($ip);

    //     return response()->json([
    //         'ip'       => $ip,
    //         'country'  => $location->country,
    //         'city'     => $location->city,
    //         'state'    => $location->state_name,
    //         'timezone' => $location->timezone,
    //         'lat'      => $location->lat,
    //         'lon'      => $location->lon,
    //     ]);
    // }
