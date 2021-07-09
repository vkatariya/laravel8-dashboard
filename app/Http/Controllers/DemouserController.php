<?php

namespace App\Http\Controllers;

use App\Models\Demouser;
use Illuminate\Http\Request;

class DemouserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demouser  = Demouser::all();
        //Demouser::get();
        return view('demoUser.index',compact('demouser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demoUser.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validateData =  $request->validate([
            'username' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);
      $show =  Demouser::create($validateData);

        return redirect()->route('demouser.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demouser  $demouser
     * @return \Illuminate\Http\Response
     */
    public function show(Demouser $demouser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demouser  $demouser
     * @return \Illuminate\Http\Response
     */
    public function edit(Demouser $demouser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demouser  $demouser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demouser $demouser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demouser  $demouser
     * @return \Illuminate\Http\Response
     */
    public function delete( $id)
    {
      //  dd($demouser);
      $demouser =Demouser::find($id);
      return view('demouser.delete', compact('demouser'));
      //  Demouser::find($demouser)->delete();
      //  return redirect()->back()->with('success','Delete Successfully')
    }
    public function destroy( $demouser)
    {
      //  dd($demouser);
        Demouser::find($demouser)->delete();
      //  return redirect()->back()->with('success','Delete Successfully')
    }
}
