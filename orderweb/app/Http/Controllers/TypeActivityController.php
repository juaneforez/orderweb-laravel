<?php

namespace App\Http\Controllers;

use App\Models\TypeActivity;
use Illuminate\Http\Request;

class TypeActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_activitys = TypeActivity::all();  //Select * from causal
        //dd($type_activity);  
        return view('type_activity.index', compact('type_activitys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type_activity = TypeActivity::create($request->all());
        session()->flash('message', 'Registro creado exitosamente');
        return redirect()->route('causal.index');
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
        $type_activity = TypeActivity::find($id);
        if($type_activity) //Si la observación existe
        {
            return view('type_activity.edit', compact('type_activity'));
        }
        else
        {
            return redirect()->route('type_activity.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type_activity = TypeActivity::find($id);
        if($type_activity) //Si la causal existe
        {
           $type_activity->update($request->all());  //delete from causal set description=.....
           session()->flash('message', 'Registro eliminado exitosamente');
        }
        else
        {
            
            return redirect()->route('causal.index');
            session()->flash('warning', 'No se encuentra el registro solicitado');
            
        }
        return redirect()->route('type_activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
