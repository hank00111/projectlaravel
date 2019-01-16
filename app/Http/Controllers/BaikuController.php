<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MainRequest;
use Carbon\Carbon;
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
        return view('baiku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainRequest $request)
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
        //$test3 = User::find($id);

        $test = Main::find($id);
        return view('baiku.index', compact('test'));
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
        $test = main::find($id);

        //$items = \App\Item::all('uid','type')->toArray();
        $selections = [];
       /* foreach ($items as $option)
            $selections[$option['uid']] = $option['type'];*/

        return view('baiku.edit')->with(['selections'=>$selections, 'main'=>$test]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MainRequest $request, $id)
    {
        //
        $test = main::findOrFail($id);

        $test->update($request->all());

        $test = main::all();
        //return view('baiku.index')->with('numbers', $test);
        return redirect()->route('baiku.index');
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
        $test = main::find($id);
        //return redirect()->route('baiku.index');
        //DB::table('users')->where('votes', '<', 100)->delete();
        if($test->delete())
        {
            return redirect()->route('baiku.index')->with('success', '刪除成功-'.$id);
        } else {
            return redirect()->back()->with('error', '刪除失敗-'.$id);
        }
    }
}
