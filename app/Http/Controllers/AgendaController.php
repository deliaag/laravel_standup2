<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Http\Requests;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $agendas = Agenda::orderBy('name','ASC')->paginate(5);
        $value=($request->input('page',1)-1)*5;
        foreach ($agendas as $agenda)
        {
        $agenda->event_name = $agenda->event->name;
        $agenda->comedian_name = $agenda->comedian->name;
        }
        return view('agendas.list',compact('agendas'))->with('i',$value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'start' => 'required',
            'finish' => 'required',
            'date' => 'required',
        ]);
        // create new agenda
        Agenda::create($request->all());
        return redirect()->route('agendas.index')->with('success', 'Your agenda added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $agenda = Agenda::find($id);   

        return view('agendas.show',compact('agenda')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::find($id); 

        return view('agendas.edit', compact('agenda')); 
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
          $this->validate($request, [ 

            'start' => 'required', 

            'finish' => 'required', 

            'date' => 'required' 

            ]); 

            Agenda::find($id)->update($request->all()); 

            return redirect()->route('agendas.index')->with('success','Agenda updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Contact::find($id)->delete(); 

        return redirect()->route('agendas.index')->with('success','Agenda removed successfully'); 
    }
}
