<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->data = [
            'meta' => (object) [
                'title'         => 'Bayuajiprks',
                'name'          => 'home',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]
        ];
    }

    public function index()
    {
        return view('homepage', $this->data);
    }
}