<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'category';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'name',
        'slug',
        'cover'
    ];
    protected $useTimestamps    = false;
    protected $returnType       = 'object';

    public function list(): ?array
    {
        $cache  = service('cache');
        $cached = $cache->get('category-list');

        if(!$cached) {
            $response = $this->findAll();

            $cache->save(
                'category-list',
                json_encode($response),
                86400
            );
        } else {
            $response = json_decode($cached);
        }

        return $response;
    }
}