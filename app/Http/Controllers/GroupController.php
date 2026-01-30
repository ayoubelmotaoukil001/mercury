<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group ;
use App\Models\Contact ;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups =Group::all() ;
        return view('groups.index' ,compact('groups')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'required|string|max:255'
        ]) ;
        Group::create([
            'name'=>$request->name,
         ]) ;

         return redirect()->route('groups.index')-> with('success','group created with ssuccess') ;
    }

    /**
     * Display the specified resource.
     */
    public function show( Request $request , string $id  )
    {
    $group = Group::with('contacts')-> findOrFail($id) ;

    $contacts = $group->contacts()
    ->when($request->search ,function ($query) use($request) {
     $query->where('name' ,'LIKE' , '%'.$request->search.'%') ;    
    })
    ->get() ;
    return view('groups.show',compact('group', 'contacts')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $group=Group::findOrFail($id) ;
        return view('groups.edit',compact('group')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|string|max:255',
        ]);

        $group = Group::findOrFail($id) ;
        $group->update([
            'name'=> $request->name ,
        ]) ;

        return redirect()->route('groups.index')-> with('sucees','the greoup si updated with succes') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $group = Group::findOrFail($id) ;
        $group->delete() ;


        return  redirect()->route('groups.index')->with("succes","deleted with succes") ;
    }

    public function attachContact(Group $group, Contact $contact)
{
    $contact->group_id = $group->id;
    $contact->save();

    return redirect()->route('groups.show', $group->id);
}
public function addContacts(Group $group)
{
    $contacts = \App\Models\Contact::whereNull('group_id')->get();
    return view('groups.add-contacts', compact('group', 'contacts'));
}
}
