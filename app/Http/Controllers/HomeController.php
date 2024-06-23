<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\package;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index(){
        $destination= Destination::all();
        $packages= package::all();
        return \view('index',compact('destination','packages'));
    }

    public function about(){
        return \view('about');
    }

    public function contact(){
        
        return \view('contact');
    }

    public function insertcontact(Request $request){
        $request->validate([
            'cname'=>'required',
            'cemail'=>'required',
            'subject'=>'required',
            'cmessage'=>'required'
          
        ]); 
        $contact= new Contact();
        $contact->cname = $request->cname;
        $contact->cemail = $request->cemail;
        $contact->subject = $request->subject;
        $contact->cmessage = $request->cmessage;
        $contact->save();
        return redirect('/contact')->withSuccess('Data Inserted');

    }
    public function destination(){
        return \view('destination');
    }

    public function guide(){
        return \view('guide');
        
    }

    public function package(){
        return \view('package');
    }

    public function service(){
        return \view('service');
    }

    public function single(){
        return \view('single');
    } 

    public function testimonial(){
        return \view('testimonial');
    }

}
