<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function TampilContoh()
    {
     $data = [
        'totalProducts' => 310,
        'salesToday' => 100,
        'totalRevenue' => 'Rp 75,000,000',
     ];
     return view('welcome' , $data);


     





    }
}
