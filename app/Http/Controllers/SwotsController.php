<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Swot;

class SwotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('swots.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('swots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'strength1'=>'required',
        ]);
        
      $swotStrength1 = new Swot;
      $swotStrength2 = new Swot;
      $swotStrength3 = new Swot;
      $swotStrength4 = new Swot;

      $swotWeakness1 = new Swot;
      $swotWeakness2 = new Swot;
      $swotWeakness3 = new Swot;
      $swotWeakness4 = new Swot;
      
      $swotStrength1->type =  'SWOT_Strength';
      $swotStrength1->body =  $request->input('strength1');
      $swotStrength1->status =  'New';

      $swotStrength2->type =  'SWOT_Strength';
      $swotStrength2->body =  $request->input('strength2');
      $swotStrength2->status =  'New';

      $swotStrength3->type =  'SWOT_Strength';
      $swotStrength3->body =  $request->input('strength3');
      $swotStrength3->status =  'New';

      $swotStrength4->type = 'SWOT_Strength';
      $swotStrength4->body =  $request->input('strength4');
      $swotStrength4->status =  'New';

      $swotWeakness1->type =  'SWOT_Weakness';
      $swotWeakness1->body =  $request->input('weakness1');
      $swotWeakness1->status =  'New';
      $swotWeakness2->type =  'SWOT_Weakness';
      $swotWeakness2->body =  $request->input('weakness2');
      $swotWeakness2->status =  'New';
      $swotWeakness3->type =  'SWOT_Weakness';
      $swotWeakness3->body =  $request->input('weakness3');
      $swotWeakness3->status =  'New';
      $swotWeakness4->type =  'SWOT_Weakness';
      $swotWeakness4->body =  $request->input('weakness4');
      $swotWeakness4->status =  'New';

      // set  strength

      $swotStrength1->save();
      $swotStrength2->save();
      $swotStrength3->save();
      $swotStrength4->save();
      // set weaknesses
      $swotWeakness1->save();
      $swotWeakness2->save();
      $swotWeakness3->save();
      $swotWeakness4->save();





     



        
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
