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
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    //chuyen
    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderBy('brand_id','desc')->get();

        return view('pages.checkout.login_checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }

    //dang_ky
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

    //thanh_toan
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

    //chuyen_thanhtoan
    public function logout_checkout(){
        Session::flush();
        return Redirect::to('/login-checkout');
    }


    //dang-nhap
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
        $data['payment_status'] = 1;
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //inset order
        $order_data= array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] =  $payment_id ;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 1;
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

            echo 'Thanh to??n th??? ATM';
        
          }elseif($data['payment_method']==2){
            Cart::destroy();
            $cate_product = DB::table('tbl_category_product')->where('category_status',0)->orderBy('category_id','desc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status',0)->orderBy('brand_id','desc')->get();

            return view('pages.checkout.handcash')->with('category',$cate_product)->with('brand',$brand_product);
           
          }else{
            echo 'Th??? ghi n???';
        
          }
        // return Redirect::to('/payment');
    }

    //quanlydonhang
    public function manage_order(){
        $this->AuthLogin();

        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->select('tbl_order.*','tbl_customers.customer_name')
        ->orderBy('tbl_order.order_id','desc')
        ->get();
        $manager_order = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manage_order',$manager_order);      
    }

    //xem chi tiet don hang
    public function view_order($orderId){
        $this->AuthLogin();

        $order_by_id = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*','tbl_order_details.*')->where('tbl_order.order_id', $orderId)->get();
        // echo '<pre>';
        // print_r($order_by_id);
        // echo '</pre>';

        $manager_order_by_id = view('admin.view_order')->with('order_by_id', $order_by_id);
        return view('admin_layout')->with('admin.view_order',$manager_order_by_id);      

    }

    //xac thuc
    public function unactive_order($order_id){
        $this->AuthLogin();

        DB::table('tbl_order')->where('order_id',$order_id)->update(['order_status'=>0]);
        Session::put('message','X??c th???c giao h??ng');
        return redirect::to('manage-order');
    }

    public function active_order($order_id){
        $this->AuthLogin();

        DB::table('tbl_order')->where('order_id',$order_id)->update(['order_status'=>1]);
        Session::put('message','H??ng ch??a ???????c giao');
        return redirect::to('manage-order');
    }
}
