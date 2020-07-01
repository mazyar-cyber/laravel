<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\ContactViewEvent;
use App\Http\Requests\createContactRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {

        $contact = Contact::all();
        return view('contact.index', compact(['contact']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contact.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createContactRequest $request)
    {
        $contact = new Contact();
        $file = $request->file('pic');
        $name = $file->hashName();
        $clientName = $file->getClientOriginalName();
        $file->store("files");
//        $file->move("image", $name);
//        $contact->path = $name;
//        $contact->name = $request->name;
//        $contact->lastName = $request->lastname;
//        $contact->password = $request->password;
//        $contact->user_id = 1;
//        $contact->post_id = 1;
//        $contact->save();
//        return redirect('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        event(new ContactViewEvent($contact));
        return view('contact.show', compact(['contact']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        $user = Auth::user();
//        if ($user->can('update', $contact)) {
            return view('contact.edit', compact(['contact']));
//        } else {
//            echo "You are not have <span style='color: red'> premission</span> to access this webPage";
//        }
//        if (Gate::allows('edit-contact', $contact)) {
//            return view('contact.edit', compact(['contact']));
//        } else {
//            echo "<center>";
//            echo "You are not have <span style='color: red'> premission</span> to access this webPage";
//            echo "</center>";
//        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->lastName = $request->lastname;
        $contact->password = $request->password;
        $contact->save();
        return redirect('contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('contact');
    }

//    public function restore($id)
//    {
//        $contact = Contact::withTrashed()->find($id);
//        $contact->restore();
//        return redirect('contact');
//    }

//    public function getContact()
//    {
//        return Contact::all();
//    }
//
//    public function insert()
//    {
//        $contact = new Contact();
//        $contact->name = "mazyar";
//        $contact->lastname = "ghahremani";
//        $contact->password = "sdcldsk";
//        $contact->save();
//    }
//
//    public function updateContact($id)
//    {
//        $contact = Contact::findOrFail($id);
//        $contact->name = "ali";
//        $contact->lastname = "ghahremani";
//        $contact->password = "sdascldsk";
//        $contact->update();
//    }
//
//    public function deleteContact($id)
//    {
//        $contact = Contact::findOrFail($id)->delete();
//    }
//
//    public function restore($id)
//    {
//        $contact = Contact::withTrashed()->find($id)->restore();
//    }
//
//    public function forceDelete($id)
//    {
//        $contact=Contact::withTrashed()->find($id)->forceDelete();
//        return view('welcome');
//    }
}
