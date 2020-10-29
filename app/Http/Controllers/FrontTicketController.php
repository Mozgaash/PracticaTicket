<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontTicketController extends Controller
{
    private $tickets = [
        'tickets' => [
            1 => ['id' => 1, 'name' => 'Kindle Oasis', 'price' => 80, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'Case cover skin iPhone X', 'price' => 9, 'date' => '2020/9/19', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'heated socks', 'price' => 5, 'date' => '2020/10/21', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'wireless headphones', 'price' => 17,  'date' => '2020/9/14', 'time' => '10:00'],
        ]
    ];
    
    function main() {
        return view('main', $this->tickets['tickets']);
    }
    
    function list() {
        return view('list', $this->tickets);
    }

    /* function detail($id) {
        return view('detail', $this->tickets['tickets'][$id]);
    } */
    
    function detail($id)
    {
        if(isset($this->tickets['tickets'][$id])) {
            $datos = $this->tickets['tickets'][$id];
            return view('detail', $datos);
        }
        return $this->main();
    }
}
