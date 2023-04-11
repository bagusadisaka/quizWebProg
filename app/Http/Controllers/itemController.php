<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
{
    public function index(){
        $characters = [
            ['type' => 'SSR', 'name' => 'New ME!', 'element' => 'It is about a new soul in our life', 'price' => 'Rp400.000', 'image' => '1.png'],
            ['type' => 'SR', 'name' => 'Be The Light', 'element' => 'It is about our soul to be shine', 'price' => 'Rp280.000', 'image' => '2.png'],
            ['type' => 'R', 'name' => 'Potatow', 'element' => 'It is about believe that we can', 'price' => 'Rp99.000', 'image' => '3.png'],
            ['type' => 'SSR', 'name' => 'CatDino', 'element' => 'It is about not to be overthink', 'price' => 'Rp400.000', 'image' => '4.png'],
            ['type' => 'SR', 'name' => 'Querencia', 'element' => 'It is about Spanish name', 'price' => 'Rp280.000', 'image' => '5.png'],
            ['type' => 'R','name' => 'Feel Blessed', 'element' => 'It is about feeling blessed from the God', 'price' => 'Rp99.000','image' => '6.png'],
        ];
        return view('item', compact('characters'));
    }

}


