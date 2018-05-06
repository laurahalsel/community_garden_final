<?php

namespace App\Http\Controllers;

use App\Pot;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PotsController extends Controller
{
    public function index() {
        $pots = Pot::where('systemID', app('system')->id)->get();
        return view('pots.index', compact('pots'));
    }

    public function create() {

        return view('pots.create');
    }

    public function store(Request $request) 
    {
        // dd($request->all());
        $newpot = Pot::create([
            'name' => $request['name'],
            'comments' => $request['comments'],
            'systemID' => app('system')->id, // from appServiceprovider
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        return redirect('pots');
    }


/**
     * Display a page to edit a new planttype
     *
     */
    public function edit($id) 
    {
        $pot = Pot::find($id);
        return view('pots.edit')->with('pot', $pot);
    }

    public function update(Request $request) 
    {
       //print_r($_POST); 
       //dd($request->all()); 
       //dd($request->hasFile('imageFile'));
       // dd($request['imageFile']);
        $pot = Pot::find($request['id']);
        
            $pot->name = $request['name'];
            $pot->comments = $request['comments'];
            
            $pot->updated_at = Carbon::now()->toDateTimeString();
            $pot->save();
            return redirect('pots');
    }

    /**
     * Display a page to delete a new planttype
     *
     */
    public function destroy($id) 
    {
        pot::destroy($id);

        $pots = Pot::all();
        return view('pots.index', compact('pots'));
    }
}
