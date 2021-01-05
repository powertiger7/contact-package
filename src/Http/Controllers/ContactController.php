<?php

namespace Tigers\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Tigers\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Tigers\Contact\Mail\ContactMailable;

class ContactController extends Controller
{

    public function index(){
        return view("contact::contact");
    }

    public function send(Request $request){
        Mail::to(config("contact.email"))->send(new ContactMailable($request->all()));
        Contact::create($request->all());
        return \redirect("contact");
    }
}
