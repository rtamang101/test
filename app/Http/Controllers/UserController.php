<?php

namespace App\Http\Controllers;

use App\Department;
use App\Message;
use App\Responce;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{


    public function login(Request $request){


        $user=User::all();

        foreach ($user as $use) {


            if ($use->email == $request->email && $use->password == $request->password) {

                $user = DB::table('users')->select('id', 'dep_id')->where('email', '=', $request->email)
                    ->where('password', '=', $request->password)
                    ->get();



                if($use->is_admin==1){

                    $dep=Department::all();

                    return View('admin',['dep'=>$dep]);//->withCookie(cookie('aaa',$use->id,2));
                }
                else{

                    return View('client',['dep_id'=>$use->dep_id],['id'=>$use->id]);//->withCookie(cookie('aaa',$use->id,2));
                }
            }

        }

        return ('error');


    }
    public function reg_view(){

        $dep=Department::all();
        return view('register',['dep'=>$dep]);


    }
    public function register(Request $request){

        $user=new User();

        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->dep_id = $request->department_id;

        $user->save();

        return back();


    }

    public function send_message(Request $request){

        $user=new Message();

        $user->text = $request->message;
        $user->dep_id = $request->department_id;


        $user->save();
        return back();


    }

    public function get_message($dep_id,$id){


       //$id= $request->cookie('aaa');



        $user = DB::table('messages')->select('id', 'text','dep_id')->where('dep_id', '=', $dep_id)
            ->orderby('id','DESC')
            ->get();

              //$d_id=$dep_id;
    return  View('show_message',['user'=>$user],['user_id'=>$id,'d_id'=>$dep_id]);

    }

    public function send_responce(Request $request){


     $user=User::find($request->user_id);
     $dep=Department::find($request->dep_id);


        $user_name=$user->name;
        $dep_name=$dep->name;

        $resp= new Responce();

        $resp->responce=$request->responce;
        $resp->user_id=$request->user_id;
        $resp->message_id=$request->message_id;
        $resp->user_name=$user_name;
        $resp->dep_name=$dep_name;

        $resp->save();
      // dump($request->user_id,$request->responce,$request->message_id);
        return  "responce send succesfully ";

    }

    public function get_messages(){


        $messages=Message::orderBy('id', 'DESC')->get();


        return view('responsePage',['messages'=>$messages]);

    }



}
