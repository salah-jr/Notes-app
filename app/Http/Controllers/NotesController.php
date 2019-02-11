<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notes;

class NotesController extends Controller

{
    public function __construct(){
        $this->middleware('auth', ['except'=> ['index', 'show']]);
    }

    public function index()
    {
        $notes = notes::orderBy('created_at', 'desc')->get();
        return view('notes')->with('notes', $notes);

    }

  
    public function create()
    {
        return view('createnote');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required' 
        ]);
        $note = new notes;
        $note->title = $request->input('title');
        $note->body = $request->input('body');
        $note->user_id = auth()->user()->id;
        $note->save();
        return redirect('/dashboard')->with('success', 'Note Added');
    }

   
    public function show($id)
    {
        $note = notes::find($id);
        return view('shownote')->with('note', $note);
    }

  
    public function edit($id)
    {
        $note = notes::find($id);
        return view('edit')->with('note', $note);
    }

  
    public function update(Request $request, $id)
    {
        $note = notes::find($id);
        $note->title = $request->input('title');
        $note->body = $request->input('body');
        $note->user_id = auth()->user()->id;
        $note->save();
        return redirect('/dashboard')->with('success', 'Note Updated');
    }

    public function destroy($id)
    {
        $note = notes::find($id);
        $note->delete();
        return redirect('/dashboard')->with('success', 'Note Deleted');
    }
}
