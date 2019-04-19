<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Contact;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
         $last_id = Contact::get()->last()->id;
        $liste = Contact::find([$last_id,$last_id - 1, $last_id - 2]);
        if($contact->save()){  
          return view('ViewContact',[
              'name'=>$request->contact_name,
              'listes'=>$liste,
          ]); 
        }
    }

    public function AfficheListeContact(){
        $last_id = Contact::get()->last();
        $id = $last_id['id'];
        $liste = Contact::find([$id,$id - 1, $id - 2]);
        return view('ViewContact',['listes'=>$liste]);
        
    }


}
