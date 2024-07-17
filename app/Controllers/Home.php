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

    public function terms()
    {
        $this->data['meta']->title          = 'Terms & Conditions - Bayuajiprks';
        $this->data['meta']->name           = 'terms & conditions';
        $this->data['meta']->description    = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

        return view('terms', $this->data);
    }

    public function privacy()
    {
        $this->data['meta']->title          = 'Privacy Policy - Bayuajiprks';
        $this->data['meta']->name           = 'privacy policy';
        $this->data['meta']->description    = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

        return view('privacy', $this->data);
    }
}