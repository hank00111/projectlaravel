<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\User;
use App\Raberu;
use App\ccdate;
use DB;

class BaikuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$test = main::all();
        $test2= raberu::all();
        $cc= ccdate::all();
        //$baiku= main::all();
        $test = DB::table('mains')            
        //->select('raberu_ID','year','model','HP','CC')
        ->join('raberus', 'mains.raberu_ID', '=', 'raberus.raberuID')
        ->join('ccdates', 'mains.CC_ID', '=', 'ccdates.CCID')
        ->paginate(5);
        /*$users = DB::table('mains')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        */

        //$test = main::where('created_at',)
        //->orderBy('created_at', 'updated_at')
        //->take(10)
        //->get();
        return view('baiku.index', compact('test','test2','cc'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('baiku/create');
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
        /*$main          = new Main;
        $main->raberu_ID  = $request->raberu_ID;
        $main->year   = $request->year;
        $main->model = $request->model;
        $main->HP  = $request->HP;
        $main->CC  = $request->CC;
        $main->save();*/

        Main::create([
            'id' => $request->id,
            'raberu_ID'   => $request->raberu_ID,
            'year' => $request->year,
            'model'  => $request->model,
            'HP' => $request->HP,
            'CC_ID' => $request->CC_ID,
        ]);        
        return redirect()->route('baiku.index');
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
