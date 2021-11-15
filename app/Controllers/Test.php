<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        $data['age'] = 20;
		$data['username'] = 'Haris Khalil';
		$data['price'] = 4.5;
       return view('test',$data);
    }
}