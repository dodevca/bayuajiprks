<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\JumbotronModel;

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
        $jumbotron              = new JumbotronModel();
        $this->data['contents'] = (object) [
            'jumbotron' => $jumbotron->list(),
            'category'  => (object) [
                'list' => $category->list()
            ]
        ];

        return view('homepage', $this->data);
        // return $this->response->setJSON($this->data);
    }
}