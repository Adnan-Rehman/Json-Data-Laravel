<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Test::whereJsonLength('meta_data->name', 0)->get();
        return $test;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $test = new Test;
        // $test->meta_data = [
        //     'name' => "Yahoo Baba",
        //     'email' => 'yahoobaba@gmail.com',
        //     'mobile_number' => "123456789",
        // ];

        // $test->save();

        //
        $test = Test::where('id', 4)->update([
            'meta_data->name' => 'Yahoo Baba'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
