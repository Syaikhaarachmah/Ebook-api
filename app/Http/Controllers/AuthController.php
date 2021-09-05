<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'status' => '200',
            'message' => 'success',
            'Nis' => '3103119184',
            'Nama' => 'Syaikha Rachmah SK',
            'Kelas' => 'XII RPL 6',
            'Absen' => '13',
            'TTL' => 'Banjarnegara, 24 Maret 2004'
        ];
    }
}
