<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Main;
use App\User;
use App\Raberu;
use App\ccdate;
use DB;

class CCtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$test = DB::table('mains')  $test2= raberu::all();
        $cc= ccdate::all();

        return view('cc.index', compact('cc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        ccdate::create([
            'CCID' => $request->CCID,
            'CCType'=> $request->CCType,
        ]);        
        return redirect()->route('cc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        //return view('numbers.index')->with('numbers', $item->numbers);
        $cc = ccdate::where('CCID')->CCType();

        return view('baiku.show', compact('cc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cc = ccdate::find($id);

        //$items = \App\Item::all('uid','type')->toArray();
        $selections = [];
       /* foreach ($items as $option)
            $selections[$option['uid']] = $option['type'];*/

        return view('cc.edit')->with(['selections'=>$selections, 'ccdate'=>$cc]);
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
        //
        $cc = ccdate::findOrFail($id);

        $cc->update($request->all());

        $cc = ccdate::all();
        //return view('baiku.index')->with('numbers', $test);
        return redirect()->route('cc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
