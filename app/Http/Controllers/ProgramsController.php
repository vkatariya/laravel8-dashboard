<?php

namespace App\Http\Controllers;

use App\Models\programs;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $programs = Programs::all();
        return view('programs/programs-list', compact('programs'));
         }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'program_title' => 'required|max:255'


        ]);
        //dd($request->all());
        $storeData = $request->all();

       // dd($storeData);
        $program = Programs::create($storeData);

        return redirect('programs-list')->with('completed', 'Programs has been saved!');

        //     $request->validate([
        //         'program_name' => 'required',

        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     ]);

        //     $input = $request->all();
        //  //var_dump($input);
        //  //exit();

        //     if ($image = $request->file('image')) {
        //         $destinationPath = 'asset/dist/images/';
        //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //         $image->move($destinationPath, $profileImage);
        //         $input['image'] = "$profileImage";
        //     }

         //   Programs::create($input);

            // return redirect()->route('programs.index')
            //                 ->with('success','programs created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show(programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit(programs $programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programs $programs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy(programs $programs)
    {
        //
    }
}
