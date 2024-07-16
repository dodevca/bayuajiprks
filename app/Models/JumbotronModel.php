<?php

namespace App\Models;

use CodeIgniter\Model;

class JumbotronModel extends Model
{
    protected $table            = 'jumbotron';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'badge',
        'title',
        'subtitle',
        'action',
        'cover',
        'status'
    ];
    protected $useTimestamps    = false;
    protected $returnType       = 'object';

    public function list(): ?array
    {
        $cache  = service('cache');
        $cached = $cache->get('jumbotron-list');

        if(!$cached) {
            $response = $this->where('status', 1)->findAll();

            $cache->save(
                'jumbotron-list',
                json_encode($response),
                86400
            );
        } else {
            $response = json_decode($cached);
        }

        return $response;
    }
}