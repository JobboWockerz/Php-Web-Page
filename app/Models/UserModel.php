<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
protected $table      = 'users';
protected $primaryKey = 'id';

protected $allowedFields = ['kullanici_ad', 'sifre'];

public function kayit_ol($veri)
{
return $this->insert($veri);
}
}