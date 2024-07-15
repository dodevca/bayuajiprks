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

    public function detail($id)
    {
        $this->data['meta']->title          = "Lorem Ipsum by Bayuajiprks";
        $this->data['meta']->name           = [
            'collections',
            'lorem ipsum'
        ];
        $this->data['meta']->description    = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

        return view('detail', $this->data);
    }
}