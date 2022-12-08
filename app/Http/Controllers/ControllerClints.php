<?php

namespace App\Http\Controllers;

use App\Models\Clins;
use Illuminate\Http\Request;

class ControllerClints extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clins = Clins::paginate();
        return view('clins.index', compact('Clins'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clins.create_new_data');
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
            'user_name' => 'required',
            'user_email' => 'required',
            'user_phone' => 'required',
        ]);
        Clins::create($request->all());
        return redirect()->route('clins.index')->with('Successfully', 'Success Created Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Clins $clin)
    {

        return view('clins.show', compact('clin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Clins $clin)
    {
        return view('clins.edit', compact('clin'));
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
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_phone' => 'required',
        ]);
        Clins::find($id)->update($request->all());
        return redirect()->route('clins.index')->with('success', 'Inforamtion are success updata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clins::find($id)->delete();
        return redirect()->route('clins.index')->with('info', 'DELETED');
    }
}
