<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderBy('brand_id','desc')->get();

        return view('pages.checkout.login_checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function add_customer(Request $request){
        $data= array();
        $data['customer_name'] = $request -> customer_name;
        $data['customer_phone'] = $request -> customer_phone;
        $data['customer_email'] = $request -> customer_email;
        $data['customer_password'] = md5($request -> customer_password);

        $customer_id = DB::table('tbl_customers')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_id', $request -> customer_name);
        return Redirect::to('/checkout');
    }

    public function checkout() {
        $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderBy('brand_id','desc')->get();

        return view('pages.checkout.show_checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }

    public function save_checkout_customer(Request $request){
        $data= array();
        $data['shipping_name'] = $request -> shipping_name;
        $data['shipping_phone'] = $request -> shipping_phone;
        $data['shipping_email'] = $request -> shipping_email;
        $data['shipping_notes'] = $request -> shipping_notes;
        $data['shipping_address'] = $request -> shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);

        return Redirect::to('/payment');
    }

    public function payment(){
        $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderBy('brand_id','desc')->get();

        return view('pages.checkout.payment')->with('category',$cate_product)->with('brand',$brand_product);
    }

    public function logout_checkout(){
        Session::flush();
        return Redirect::to('/login-checkout');
    }

    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password', $password)->first();
        
        if($result){
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login-checkout');
        }
    }

    public function order_place(Request $request){
        //inset payment_method
        $data= array();
        $data['payment_method'] = $request -> payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //inset order
        $order_data= array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] =  $payment_id ;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 'Đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //inset order_details
        $content = Cart::content();
        foreach($content as $v_content) {
            $order_data= array();
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] =  $v_content->id;
            $order_d_data['product_name'] = $v_content->name ;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quanlity'] = $v_content->qty;
            DB::table('tbl_order_details')->insert($order_d_data);
        }
        if($data['payment_method']==1){

            echo 'Thanh toán thẻ ATM';
        
          }elseif($data['payment_method']==2){
            echo 'Tien mat';
            Cart::destroy();
            $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderBy('category_id','desc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderBy('brand_id','desc')->get();

            return view('pages.checkout.handcash')->with('category',$cate_product)->with('brand',$brand_product);
           
          }else{
            echo 'Thẻ ghi nợ';
        
          }
        //return Redirect::to('/payment');

       
    }
}
