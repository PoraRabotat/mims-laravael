<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $products = [
        ['id' => 1, 'title' => 'Сова', 'price' => 1500, 'path' => '72f.jpg'],
        ['id' => 2, 'title' => 'Кот', 'price' => 750, 'path' => '0843.jpg'],
        ['id' => 3, 'title' => 'Тигр', 'price' => 2000, 'path' => '396.jpg'],
        ['id' => 4, 'title' => 'Плакат', 'price' => 500, 'path' => 'images.jpg'],
        ['id' => 5, 'title' => 'Иконка', 'price' => 250, 'path' => 'xd.jpg'],
    ];

    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        return view('array', ['array' => $this->products]);
    }

    // НЕЗАБЫТЬ Самостоятельная!!

    // 1. ПЕРЕМЕШКА МАССИВА
    // 2. СОРТИРОВКА
    // 3. ФИЛЬТРАЦИЯ



    public function shuffleArray()
    {
        $mixed = $this->products;
        shuffle($mixed); 
        return view('array', ['array' => $mixed]);
    }

    public function sortArray()
    {
        $sorted = $this->products;
        usort($sorted, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', ['array' => $sorted]);
    }

    public function filterArray()
    {
        $filtered = array_filter($this->products, function($item) {
            return $item['price'] > 1000;
        });
        return view('array', ['array' => $filtered]);
    }
}