<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Events::all();
        //dd($event);
        //var_dump($event);

        return view('events.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $events =new Events;
        $events->title=$request->title;
        $events->url=$request->url;
        $events->image='vin.jpg';

        $events->save();

//       $request->validate([
//           'title' =>'required',
//           'url'   =>'required',
//          'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//      ]);
//  //dd($request->all());
//       $storeData = $request->all();
//       if ($image = $request->file('image')) {
//         $destinationPath = 'asset/dist/image/';
//         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//         $image->move($destinationPath, $profileImage);
//         $storeData['image'] = "$profileImage";
//     }

//     Events::create($storeData);

    return redirect('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
