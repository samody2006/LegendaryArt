<?php

namespace App\Http\Controllers;

use App\Message;
use App\Team;
use App\Album;
use App\Photo;
use App\Service;
use App\ContactInfo;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function home(){
        $data["albums"] = Album::orderBy('created_at','desc')->get();
        return view('frontend.index',$data);
    }

    // Gallery

    public function gallery($slug){
        $album = Album::where('slug',$slug)->first();
        $data["albums"] = Album::orderBy('created_at','desc')->get();
        $data["title"] = $album->name;
        $data["photos"] = Photo::where("album_id",$album->id)->get();
        return view('frontend.gallery',$data);
    }

    // About

    public function about(){
        $data["albums"] = Album::orderBy('created_at','desc')->get();
        $data["teams"] = Team::orderBy('created_at','desc')->get();
        return view('frontend.about',$data);
    }

    // Contact

    public function contact(){
        $data["infos"] = ContactInfo::orderBy('created_at','desc')->get();
        return view('frontend.contact',$data);
    }

    public function contactForm(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'subject' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|string',
            ]);
              if($validator->fails()){
                 return redirect()->back()->withErrors($validator);
              }


        $post = Message::create([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'subject' => $request->subject,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ]);
//
//              Mail::to('samody2006@gmail.com')->send(new ContactForm($request->all()));

              session()->flash("type","success");
              session()->flash("message","Mail Sent Successfully");

              return redirect()->route("contact");

    }

    // Service

    public function service(){
        $data["albums"] = Album::orderBy('created_at','desc')->get();
        $data["ourservices"] = Service::all();
        return view('frontend.service',$data);
    }

}
