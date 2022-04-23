<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Contact;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

public function profilecheck($id){
    $profilecheck = Profile::where('profileid', '=', Auth::user()->id)->first();
    if ($profilecheck === null) {
        return view('/profile');  
       
    } else {

        return redirect('edit/'.$id); 
    }

  


}
    public function edit($id){
        // return first row by id  
         
    
        $profiles = Profile::where('profileid',$id)->first();
           
       return view('edit')->with('profiles', $profiles);
        
    }
    //
    public  function viewprofile() {

        $profiles = Profile::all();
       
        return view('/viewprofile')->with ('profiles', $profiles);
    }
    public  function saveprofile() {
        $profilecheck = Profile::where('profileid', '=', Auth::user()->id)->first();
if ($profilecheck === null) {
   // if profile doesn already't exist

      $profile = new Profile();
      $image = request('image');
      
     $imageName =  time(). request('image');

       // echo $imageName;

        
       // $imageName = request('image'). time(). request('image')->extension();
    
        //$image->move('/public/images', $imageName);
       // $profile->image = $imageName;

        

       /// DO AUTH  $profile->sex = request('email');
       $profile->email = 'FIX MEH';

       //move and save profile pic
       $profile->profileid= Auth::user()->id;
       $image= request('profilepic');
       $filename= date('YmdHi').$image->getClientOriginalName();
       $image-> move(public_path('pictures'), $filename);


       
       $profile->profilepic = $filename;
       $profile->occupation = request('occupation');
       $profile->name = request('name');
        $profile->job = request('job');
        $profile->motivation = request('motivation');
        $profile->education = request('education');
       $profile->experience = request('experience');
       $profile->motivatetwo = request('motivationtwo');
       $profile->future = request('future');
        $profile->advice = request('advice');
     

        //save in db as profile
        $profile->save();}

        return redirect('/viewprofile'); }
////
public  function events() {

    $events = Event::all();


    
    return view('/events')->with('events', $events);
}

public function sortbyasc(){

    $events = Event::orderBy('date', 'ASC')->get();
    
        return view('/events')->with('events', $events);
    
}

public function sortbydesc(){

    $events = Event::orderBy('date', 'DESC')->get();
    
        
        return view('/events')->with('events', $events);
    
}

public function profileupdate($id){

    $row= Profile::all()->where('profileid', $id)->first();
  //  $profile = new Profile();
  $row->occupation=request('occupation');
  $row->name=request('name');
  $row->job =request('job');
  $row->motivation=request('motivation');
  $row->education=request('education');
  $row->experience=request('experience');
  $row->motivatetwo=request('motivatetwo');
  $row->future=request('future');
  $row->update();
 return redirect('edit/'.$id);
}
 public function remove($id) {

    $row= Profile::all()->where('id', $id)->first();
    $row->delete();
    return redirect('/viewprofile');
    
 }

 public  function contactus() {
     $contact = new Contact();
     $contact->fname= request('fname');
     $contact->lname= request('lname');
     $contact->email= request('email');
     $contact->number= request('number');
     $contact->cmnt= request('cmnt');

     $contact->save();

     return redirect('/');
    }
}
