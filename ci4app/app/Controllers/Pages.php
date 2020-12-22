<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | CesarWeb',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Home | About Me '
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us!',
            'alamat' =>
            [
                'tipe' => 'Rumah',
                'alamat' => 'Jatinunggal',
                'kota' => 'Sumedang'
            ],
            [

                'tipe' => 'Kontrakan',
                'alamat' => 'Jl. Terusan Jakarta',
                'kota' => 'Bandung'

            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
