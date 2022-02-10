<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request = $request; 
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = '<h1>Olá!</h1>';
        $teste2 = 123;
        $teste3 = ['tv', 'sofa', 'geladeira', 'forno'];

        return view('admin.pages.products.index', compact('teste', 'teste2', 'teste3'));
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
        // dd($request->all());
        // dd($request->only(['name', 'description']));
        // dd($request->'name');
        // dd($request->input('teste', 'default'));
        // dd($request->except('_token', 'name'));
        if ($request->file('photo')->isValid()){
            // dd($request->file('photo')->store('products'));
            $nameFile = $request->name . '.' . $request->photo->extension();
            // dd($request->file('photo')->storeAs('products', $nameFile));
        }



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
