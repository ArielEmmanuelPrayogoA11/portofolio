<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestRequest;
use App\Models\Quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hax = Quest::paginate(3);
        return view ('quest' , [
            'title' => 'PENITENCE | Quest',
            'dataquest' => Quest::get(),
            'hax' => $hax
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestRequest $request)
    {
        // Validation -> LAKUKAN DI FOLDER REQUEST RULES 
        // $request->validate([
        //     'namaq' => ['required' , 'min:3'],
        // ]);

        //Insert
        Quest::create($request->all());


        // Quest::insert([
        //     'namaq' => $request->namaq,
        //     'client' => $request->client,
        //     'deskripsi' => $request->deskripsi,
        //     'reward' => $request->reward,
        // ]);


        return redirect('/quest')->with('success', 'Quest added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function show(Quest $quest ,$namaq)
    {
        return view ('questdetail' , 
        [
            'title' => 'Penitence | Quest Detail',
            'dataquest' => Quest::where('namaq', $namaq)->get()
        ]);
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function edit(Quest $quest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quest $quest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quest  $quest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quest $quest)
    {
        //
    }
}
