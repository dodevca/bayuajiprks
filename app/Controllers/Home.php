<?php

namespace App\Controllers;

use App\Models\CategoryModel;

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
        $category               = new CategoryModel();
        $this->data['contents'] = (object) [
            'category' => (object) [
                'list' => $category->list()
            ]
        ];

        return view('homepage', $this->data);
        // return $this->response->setJSON($this->data);
    }
}