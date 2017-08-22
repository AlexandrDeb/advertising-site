<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ad;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AdController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ad $adModels)
    {
        
        //$ads = Ad::all();
        //$ads = Ad::latest('id')->get();
        //$ads = Ad::latest('created_at_datetime')->get();

      /*  $ads = Ad::latest('created_at_datetime')
       ->where('created_at_datetime', '<=', Carbon::now())
       ->get();*/

        $ads = $adModels->getAds();
        //ad.index (ad -название папкиб index - action)
        return view('ad.index', ['ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Ad $adModel, Requests\CreateAdRequest $request)
    {

        $ad = $adModel->create($request->all());

        $ad->save();

        return redirect()->route('ads');
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
        $ads = Ad::findOrFail($id);
        //dd($ads);
        //return view('ad.index', ['ads' => $ads]);
        return view('ad.edit', compact('ads'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Requests\CreateAdRequest $request, $id)
    {
        $ads = Ad::findOrFail($id);

        $ads->update($request->all());

        return redirect()->route('ads')->with('message', 'ad has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
//dd($id);
        Ad::destroy($id);

        return redirect()->route('ads')->with('message', 'ad has been deleted successfully');
    }
}
