<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\package;
use App\Models\Contact;


class AdminController extends Controller
{
    public function dasboard(){
        return \view('admin/dasboard');
    }
    public function show_contact(){
        $contact= Contact::all();
        return \view('admin.show_contact',compact('contact'));
    }
    public function cdel($id){ 
        $contact = Contact::where('id',$id)->delete();
        // $destination= Destination::destroy($id);
        return \redirect('/admin/show_contact');

    }
    //start  destination class
    public function form_destination(){
        return \view('admin.form_destination');
    }

    public function insert_destination(Request $request){
        $request->validate([
            'dtitle'=>'required',
            'dimage'=>'required',
            'dcities'=>'required'
          
        ]); 
        $destination= new Destination();
        $destination->dtitle = $request->dtitle;
        $destination->dcities = $request->dcities;
        if($request->hasFile('dimage')){
            $dimage = $request->file('dimage');
            $ext = $dimage->getClientOriginalExtension();
            $dimage_name = time().".".$ext;
            $dimage->move(public_path('img'),  $dimage_name);
            $destination->dimage = $dimage_name;

        }
        $destination->save();
        // return back();
       return redirect('admin/show_destination')->withSuccess('Data Inserted');

    }
    public function show_destination(){
        $destination=  Destination::all();
        return view('admin.show_destination',compact('destination'));   
     }
    public function ddelete($id){ 
        $destination = Destination::where('id',$id)->delete();
        // $destination= Destination::destroy($id);
        return \redirect('/admin/show_destination');

    }
     //end  destination class

##########################################################################################################
       //start destination class
     public function form_packages(){
        return \view('admin/form_ packages');
     }
     public function insert_packages(Request $request){
        $request->validate([
            'city'=>'required',
            'day'=>'required',
            'person'=>'required',
            'image'=>'required',
            'para'=>'required',
            'rating'=>'required',
            'ratingcount'=>'required',
            'amount'=>'required'
          
        ]); 
        $packages= new package();
        $packages->city = $request->city;
        $packages->day = $request->day;
        $packages->person = $request->person;
        $packages->para = $request->para;
        $packages->rating = $request->rating;
        $packages->ratingcount = $request->ratingcount;
        $packages->amount = $request->amount;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $image_name = time().".".$ext;
            $image->move(public_path('img'),  $image_name);
            $packages->image = $image_name;

        }
        $packages->save();
        // return back();
       return redirect('admin/show_packages')->withSuccess('Data Inserted');

    }
    public function show_packages(){
        $packages= package::all();
        return view('admin/show_packages',compact('packages'));   
     }

    //  public function update_package($id){
    //     $packages= package::all($id); 
    //     //return $id;
    //     return view('/admin/update_package');
    // }
    // public function post_package(Request $request){
    //     $packages= package::where('id',$request->id)->first();
    //     $packages->city = $request->city;
    //     $packages->day = $request->day;
    //     $packages->person = $request->person;
    //     $packages->para = $request->para;
    //     $packages->rating = $request->rating;
    //     $packages->ratingcount = $request->ratingcount;
    //     $packages->amount = $request->amount;

    //     if($request->hasFile('image')){
    //         $image = $request->file('image');
    //         $ext = $image->getClientOriginalExtension();
    //         $image_name = time().".".$ext;
    //         $image->move(public_path('img'),  $image_name);
    //         $packages->image = $image_name;

    //     }
    //     $packages->save();
    //         return redirect('admin/show_packages');
    // }
     public function pdelete($id){ 
        $packages = package::where('id',$id)->delete();
        // $destination= Destination::destroy($id);
        return \redirect('/admin/show_packages');

    }

    ################################################################
    //start contactus
    
}
