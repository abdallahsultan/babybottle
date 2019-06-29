<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        
    }
    public function save(Request $request,$id)
    {

    }
    public function edit($id)
    {

    }
    public function update(Request $request,$id)
    {

    }
    public function view()
    {
        $rows =Contact::orderBy('id','desc')->get();
        $title = 'رسائل الموقع';
        return view('admin.contacts.view',compact('rows','title'));
    }
    public function delete(Requst $request ,$id)
    {
        Contact::findorfail($id)->delete();
        return redirect(route('contact.view'));
    }
}
