<?php

namespace App\Controllers;

use App\Models\CharsModel;

class Chars extends BaseController
{
protected $charsModel;
public function __construct()
{
    $this->charsModel = new CharsModel();
}

public function index(){
    // $chars = $this->charsModel -> findAll();
    $data =[
        'title' => 'Character List',
        'chars' => $this->charsModel->getChars()
    ];



    return view('chars/index', $data);
}

public function detail($slug){
   $data =[
    'title'=>'Character Detail',
    'chars'=>$this->charsModel->getChars($slug)
   ];

   return view('chars/detail', $data);
}
}