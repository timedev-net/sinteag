<?php

namespace App\Controllers;

class Home extends BaseController
{
    //public function index(): string
    public function index()
    {
              $data = ['titulo' => 'SINTEAG'];
        return view('paginaprincipal', $data);
    }

}
