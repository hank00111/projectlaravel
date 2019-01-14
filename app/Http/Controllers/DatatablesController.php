<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MainRequest;
use Carbon\Carbon;
use App\Main;
use App\Raberu;
use App\ccdate;
use DB;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {   
        
        return view('datatables.index');    
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {   
        $test1= Raberu::all();
        $cc= ccdate::all();
        $users = DB::table('mains')            
        //->select('raberu_ID','year','model','HP','CC')
        ->join('raberus', 'mains.raberu_ID', '=', 'raberus.raberuID')
        ->join('ccdates', 'mains.CC_ID', '=', 'ccdates.CCID');
        return Datatables::of($users)           
        ->addColumn('action', function ($users) {
            return '<a href="datatables/'.$users->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';


        })
        ->editColumn('id', '{{$id}}')
        ->make(true);
    }

    public function edit($id)
    {
        //
        $users = main::find($id);

        //$items = \App\Item::all('uid','type')->toArray();
        $selections = [];
       /* foreach ($items as $option)
            $selections[$option['uid']] = $option['type'];*/

        return view('datatables.edit')->with(['selections'=>$selections, 'main'=>$users]);
    }

    public function update(MainRequest $request, $id)
    {
        //
        $users = main::findOrFail($id);

        $users->update($request->all());

        $users = main::all();
        //return view('baiku.index')->with('numbers', $test);
        return redirect()->route('datatables.index');
    }


}