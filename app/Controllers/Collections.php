<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Collections extends BaseController
{
    public function __construct()
    {
        $this->data = [
            'meta'      => (object) [
                'title'         => 'Collections - Bayuajiprks',
                'name'          => 'collections',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]
        ];
    }

    public function index()
    {
        $category               = new CategoryModel();
        $this->data['contents'] = (object) [
            'category' => (object) [
                'list'      => $category->list(),
                'selected'  => $this->request->getGet('c')
            ]
        ];

        return view('list', $this->data);
        // return $this->response->setJSON($this->data);
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