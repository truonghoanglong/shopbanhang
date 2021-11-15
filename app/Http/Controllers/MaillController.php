<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class MaillController extends Controller
{
    public function send_mail(){
        //send mail
        $to_name = "LONG Shop";
        $to_email = 'truonghoanglongabc@gmail.com';//send to this email

        $data = array("name"=>"Mail tới khách hàng","body"=>"Cảm ơn khách hàng đã mua hàng của LONG Shop"); //body of mail.blade.php

        Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){

        $message->to($to_email)->subject("Mail gửi khách hàng");   //send this mail with subject
        $message->from($to_email,$to_name);//send from this mail
        });

        return redirect('/')->with('message','');
        //--send mail


    }
}
