<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Group;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a lissting of the resource.
     */
   public function index()
{
    $query = Contact::query();
    if(request('group_id')) $query->where('group_id', request('group_id'));
    $contacts = $query->get();
    $groups = Group::all();
    return view('contacts.index', compact('contacts','groups'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view ('contacts.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
        'name'=> "required|string|max:255" ,
        'email'=> "required|string|max:255" ,
        'phone'=> "required|string|max:50"
        ]);
        Contact::create([
            'name' => $request->name,
            'email' =>$request->email ,
            'phone'=> $request->phone ,
           
        ]) ;
        return redirect()->route('contacts.index')->with('succes' ,'group created with succees') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id) ;
        return view('contacts.edit' , compact('contact')) ;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'required|string|max:255',
        ]) ;
        $contact = Contact::findOrFail($id);
        $contact->update([
            'name'=> $request->name ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
        ]) ; 
        return redirect()->route("contacts.index")->with("succes" , "the contact is updated with succes") ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id) ;
        $contact ->delete() ;

    return redirect()->route('groups.show') ;
    } 

}
