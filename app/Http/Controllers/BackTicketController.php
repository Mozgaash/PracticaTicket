<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackTicketController extends Controller
{
    
    private $tickets = [
        'tickets' => [
            1 => ['id' => 1, 'name' => 'Kindle Oasis', 'price' => 80, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'Case cover skin iPhone X', 'price' => 9, 'date' => '2020/9/19', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'heated socks', 'price' => 5, 'date' => '2020/10/21', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'wireless headphones', 'price' => 17,  'date' => '2020/9/14', 'time' => '10:00'],
        ]
    ];
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index', $this->tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    function list() {
        return view('backend.list', $this->tickets);
    }

    /* function detail($id) {
        return view('detail', $this->tickets['tickets'][$id]);
    } */
    
    function detail($id)
    {
        if(isset($this->tickets['tickets'][$id])) {
            $datos = $this->tickets['tickets'][$id];
            return view('backend.detail', $datos);
        }
        return $this->fallback();
    }
    
}
