<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function __construct()
    {
        $this->data = [
            'meta' => (object) [
                'title'         => 'Contact - Bayuajiprks',
                'name'          => 'contact',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]
        ];
    }

    public function index()
    {
        return view('contact', $this->data);
    }
}