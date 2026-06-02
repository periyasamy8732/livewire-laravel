<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


    use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://lelamonline.com/admin/api/v1/index.php', [
            'token' => '5cb2c9b569416b5db1604e0e12478ded'
        ]);

        $data = $response->json();

        return view('internalapi', compact('data'));
    }
}

