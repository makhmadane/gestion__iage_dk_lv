<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use App\Models\TypeAssurance;
use Illuminate\Http\Request;

class AssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assurances =  Assurance::orderBy('id','desc')->paginate(5) ;//Model
        return view('assurance.assurance',['assurs'=>$assurances]); //view

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assurance = new Assurance();
        $types_assurances = TypeAssurance::all(); //model
        return view('assurance.add',['assurance'=>$assurance, 'types_assurances'=>$types_assurances]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assurance = new Assurance();
        $assurance->libelle = $request['libelle'];
        $assurance->montant  = $request['montant'];
        $assurance->bonus = $request['bonus'];
        $assurance->type_assurance_id = $request['type'];
        $assurance->save(); //model
      return redirect('/assurance');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Assurance::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assurance = $this->show($id);
        return view('assurance.add',['assurance'=>$assurance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $assurance = $this->show($request['id']);
        $assurance->libelle = $request['libelle'];
        $assurance->montant = $request['montant'];
        $assurance->bonus = $request['bonus'];
        $assurance->save();
        return redirect('/assurance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assurance = $this->show($id);
        $assurance->delete();
        return redirect('/assurance');
    }
}
