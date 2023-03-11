<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class HelloController extends Controller
{
    public function create() { 
        return view('create');
    }    //
    public function store(Request $request) {
        $request_data = new Contact();
        $request_data->name = $request->name;
        $request_data->addrees = $request->email;
        $request_data->tel = $request->tel;
        $request_data->mean = 1;
        $request_data->request = $request->message;
        $request_data->save();  
        return redirect('create'); 
 }
 public function index() {

    $contacts = Contact::get();
    return view('index', compact('contacts'));   
}
public function edit(Contact $contact) {
    return view('edit', compact('contact'));
}
public function update(Request $request, Contact $contact) {
        
    $contact->name = $request->name;
    $contact->addrees = $request->email;
    $contact->tel = $request->tel;
    $contact->request = $request->message;
    $contact->mean = 1;
    $contact->save();
    return redirect('/index');
}
public function destroy(Request $request, Contact $contact) {
    $contact->delete();
    return redirect('/index');
}


public function introduction() { 
    return view('introduction');
}

public function portfolio() { 
    return view('portfolio');
}


}

