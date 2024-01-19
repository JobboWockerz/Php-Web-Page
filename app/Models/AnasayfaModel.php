<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
 protected $table = "users";

 public function kayitlar()
 {

     $this->table = 'oyunlar';
     return $this->findAll();

 }
    public function kayit_detay($url)
    {

        $this->table = 'oyunlar';
        return $this->where('url', $url)->find();

    }
}