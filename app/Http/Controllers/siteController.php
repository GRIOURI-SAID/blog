<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function Home(){
        $services = Service::all();
        $slides =Slide::all();
        $post = Post::all();
        return view("pages.home" ,[
            "posts" => $post,
            "services" =>$services,
            "slides"   =>$slides
        ]);
    }

    public function blog(){
         $post = Post::all();
          return view("pages.blog",[
              "posts" => $post
          ]);
    }


    public function show($id){
         $post = Post::find($id);
          return view("show",[
              "post" => $post
          ]);
    }




    public function service(){
        $services = Service::all();
         return view("pages.service" , [
             "services" =>$services
         ]);
    }

     public function serviceDetails($id){
        $service = Service::find($id);
         return view("details-serivce" , [
             "service" =>$service
         ]);
    }


    public function about(){
        return view("pages.about");
    }

    public function contact(){
        return view("pages.contact");
    }

     public function store(Request $request){

        $contact = new Contact();

        $contact->name =$request->get("name");
        $contact->email =$request->get("email");
        $contact->message =$request->get("message");

        $contact->save();

        return  redirect('/contact');


    }
}
