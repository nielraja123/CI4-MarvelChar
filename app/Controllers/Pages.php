<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Home | Code Igniter 4 App'
        ];
        return view('pages/home', $data);
    } 

    public function about()
    {
        $data =[
            'title' => 'About Me | Code Igniter 4 App'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data =[
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Yasmin',
                    'kota' => 'Bogor'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'BCC',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        echo view('pages/contact', $data);
    }
}
