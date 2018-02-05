<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FitnessToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'bmi' => $this->getBMICategories()
        ];
        return view('user.tools',$data);      
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
        //
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
    
    private function getBMICategories()
    {
        return [
            'Severe Thinness'   => '< 16',
            'Moderate Thinness' => '16 - 17',
            'Mild Thinness'     => '17 - 18.5',
            'Normal'            => '18.5 - 25',
            'Overweight'        => '25 - 30',
            'Obese Class 1'     => '30 - 35',
            'Obese Class 2'     => '35 - 40',
            'Obese Class 3'     => '> 40'
        ];
    }
}
