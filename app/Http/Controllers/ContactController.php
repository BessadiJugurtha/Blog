<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
       return view('ViewContact');
    }

    public function store(ContactRequest $request){
        
        $contact = new Contact;
        $contact->contact_name = $request->contact_name;
        $contact->contact_email = $request->contact_email;
        $contact->contact_message = $request->contact_message;
        $contact->post_date = date('Y-m-d H:i:s');
        $contact->save();
        $liste = Contact::all();
        if($contact->save()){  
          return view('ViewContact',[
              'name'=>$request->contact_name,
              'listes'=>$liste,
          ]); 
        }
    }

    public function AfficheListeContact(){
        $liste = Contact::all();
         return view('ViewContact',['listes'=>$liste]);
        
    }


}
