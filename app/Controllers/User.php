<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $helpers = ['form'];

    public function kayit_ol()
{
$session = session();

if ($session->has('durum') && $session->get('durum')) {
return redirect()->to(base_url('panel'));
}

if (! $this->request->is('post')) {
return view('tema/header')
. view('sayfalar/login')
. view('tema/footer');
}

$rules = [
'kullanici_ad' => 'required|is_unique[users.kullanici_ad]',
'sifre'        => 'required|min_length[1]',
];

$data = $this->request->getPost(array_keys($rules));

if (! $this->validateData($data, $rules)) {
return view('tema/header')
. view('sayfalar/login')
. view('tema/footer');
}

$veri = $this->validator->getValidated();
$model = model('App\Models\UserModel');

$veri['sifre'] = password_hash($veri['sifre'], PASSWORD_DEFAULT);

$sonuc = $model->kayit_ol($veri);

if ($sonuc) {

$session->set('durum', true);
$session->set('isim', $veri['kullanici_ad']);
return redirect()->to(base_url('panel'));
} else {

return view('tema/header')
. view('sayfalar/login')
. view('tema/footer');
}
}
}
