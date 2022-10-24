<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chollo;
use Illuminate\Support\Facades\Http;

class RestController extends Controller
{
    public function index() {
        $restChollos = Http::get('http://localhost/api/chollos') -> collect(); // PARA API EXTERNA

        $chollos = Chollo::all();


        return view('rest', compact('chollos'));
    }

   /* public function store(Request $request)
    {
        $response = Http::post('http://localhost:8000/api/chollos2', [
            'nombre' => 'David',
            'descripcion' => 'Lorem ipsum dolo...',

        // [...]
        ]);
    }*/


}

class ChollosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chollos = Chollo::all();
        return $chollos;
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
        $response = Http::post('http://localhost:8000/api/chollo2', [
            'nombre' => 'David',
            'descripcion' => 'Lorem ipsum dolo...',

        // [...]
        ]);
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
}
