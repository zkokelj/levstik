<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LevstikWinner;

class WinnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $winners = LevstikWinner::orderBy('year', 'desc')->get();
        return view('nagrajenci', compact('winners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'full_name' => ['required', 'min:3', 'max:70'],
            'year' => ['required', 'min:4', 'max:4'] ,
            'short_info' => ['required', 'min:5', 'max:1000'],
            'description' => ['required', 'min:5', 'max:10000']
        ]);

        LevstikWinner::create($attributes);

        return redirect('/nagrajenci');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $winner = LevstikWinner::findOrFail($id);
        return view('prikaz', compact('winner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $winner = LevstikWinner::findOrFail($id);
        return view('edit', compact('winner'));
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
        $winner = LevstikWinner::findOrFail($id);
        $winner->full_name = request("full_name");
        $winner->year = request("year");
        $winner->short_info = "a";
        $winner->description = "a";

        $winner->save();

        return redirect('/nagrajenci');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LevstikWinner::findOrFail($id)->delete();

        return redirect('/nagrajenci');
    }
}
