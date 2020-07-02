<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Cliente::orderBy('id','DESC')->paginate(3);
        //dd($lawyers->all());
        return view('Client.index',compact('client')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'names'=>'required', 'lastname'=>'required', 'document_type_id'=>'required', 'document_number'=>'required', 'start_date'=>'required', 'deleted_at'=>'required', 'created_at'=>'required', 'update_at'=>'required']);
        Client::create($request->all());
        return redirect()->route('index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client=Client::find($id);
        return view('show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Client::find($id);
        return view('edit',compact('client'));
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
        $this->validate($request,[ 'names'=>'required', 'lastname'=>'required', 'document_type_id'=>'required', 'document_number'=>'required', 'start_date'=>'required', 'deleted_at'=>'required', 'created_at'=>'required', 'update_at'=>'required']);

        $client::find($id)->update($request->all());
        return redirect()->route('index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->route('index')->with('success','Registro eliminado satisfactoriamente');
    
    }
}
