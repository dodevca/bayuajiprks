<?php

namespace App\Controllers;

class Collections extends BaseController
{
    public function __construct()
    {
        $this->data = [
            'meta' => (object) [
                'title'         => 'Collections - Bayuajiprks',
                'name'          => 'collections',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]
        ];
    }

    public function index()
    {
        return view('list', $this->data);
    }
}