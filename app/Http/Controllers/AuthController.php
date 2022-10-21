<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120212,
            'Name' => 'Sigit Bimantoro',
            'Phone' => '088812888',
            'Class' => 'XII RPL 7',
        ];
    }
}
