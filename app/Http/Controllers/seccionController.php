<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\seccion;

class seccionController extends Controller
{
    
    public function index()
    {
        $seccion = seccion::all();
        return view('seccion',compat('seccion'));
        
        
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

   
    public function show($id)
    {
        
    }

 
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    }
}
