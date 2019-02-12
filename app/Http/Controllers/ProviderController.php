<?php

namespace InterSoluciones\Http\Controllers;

use InterSoluciones\Provider; 
use Illuminate\Http\Request;
use InterSoluciones\Http\Requests\StoreProviderRequest; 


class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $providers = Provider::all();
        return view('providers.index', compact('providers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProviderRequest $request)
    {
    
        if($request->hasFile('logo')){
        $file = $request->file('logo');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/',$name);
        

    }

        $provider = new Provider();
        $provider->name=$request->input('name');
        $provider->logo = $name;
        $provider->slug = $request->input('slug');
        $provider->save();
              
        return redirect()->route('providers.index');
        //return 'Saved';
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
       return view('providers.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        
        return view('providers.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
       $provider->fill($request->except('logo'));
        if($request->hasFile('logo')){
        $file = $request->file('logo');
        $name = time().$file->getClientOriginalName();
        $provider->logo = $name;
        $file->move(public_path().'/images/',$name);
         }
      
      $provider->save();
      return redirect()->route('providers.show', [$provider])->with('status','Informacion actualizada exitosamente');

    //return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $file_path = public_path().'/images/'.$provider->logo;
        \File::delete($file_path);
        $provider->delete();
         return redirect()->route('providers.index');
        //return 'deleted';
        
    }
}
