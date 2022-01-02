<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function add_blog(){
        return view('admin.blog.add_blog');
    }
    public function view_blog(){
       
        // $al_blog = DB::table('tbl_blog')->get();
        // $manager_blog = view('admin.blog.all_blog')->with('all_blog',$al_blog);
        // return view('layout')->with('pages.blog.blog',$manager_blog);

        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->get();
        $manager_blog = view('pages.blog.blog')->with('all_blog',$all_blog);
        return view('layout')->with('pages.blog.blog',$manager_blog);
    }

    public function blog_details($blog_id){
        
        $edit_blog = DB::table('tbl_blog')->where('blog_id',$blog_id)->get();
        $manager_blog = view('pages.blog.blog_details')->with('edit_blog', $edit_blog);
        return view('layout')->with('pages.blog_details',$manager_blog);
    }

    public function all_blog(){
        $this->AuthLogin();

        $all_blog = DB::table('tbl_blog')->get();
        $manager_blog = view('admin.blog.all_blog')->with('all_blog',$all_blog);
        return view('admin_layout')->with('admin.blog.all_blog',$manager_blog);
    }

    public function save_blog(Request $request){
        $this->AuthLogin();

        $data = array();
        $data['blog_title'] = $request->blog_title;
        $data['blog_content'] = $request->blog_content;
        $data['blog_content_desc'] = $request->blog_content_desc;
        $data['blog_status'] = $request->blog_status;

        $gett_image = $request->file('blog_image');

        if($gett_image){
            $get_name_image = $gett_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =$name_image.rand(0,999).'.'.$gett_image->getClientOriginalExtension(); //lay duoi mo rong
            $gett_image->move('public/uploads/blog',$new_image); 
            $data['blog_image'] = $new_image;
            DB::table('tbl_blog')->insert($data);
            Session::put('message','Thêm tin tức thành công');
            return redirect::to('add-blog');
        }


        DB::table('tbl_blog')->insert($data);
        Session::put('message','Thêm tin tức thành công');
        return redirect::to('add-blog');
    }

    public function edit_blog($blog_id){
        $this->AuthLogin();

        $edit_blog = DB::table('tbl_blog')->where('blog_id',$blog_id)->get();
        $manager_blog = view('admin.blog.edit_blog')->with('edit_blog', $edit_blog);
        return view('admin_layout')->with('admin.edit_blog',$manager_blog);
    }

    public function update_blog(Request $request,$blog_id){
        $this->AuthLogin();

        $data = array();
        $data['blog_title'] = $request->blog_title;
        $data['blog_content'] = $request->blog_content;
        $data['blog_content_desc'] = $request->blog_content_desc;
       

        $get_image = $request->file('blog_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =$name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension(); //lay duoi mo rong
            $get_image->move('public/uploads/blog',$new_image); 
            $data['blog_image'] = $new_image;
            DB::table('tbl_blog')->where('blog_id',$blog_id)->update($data);
            Session::put('message','Thêm sản phẩm thành công');
            return redirect::to('all-blog');
        }
        
        
        DB::table('tbl_blog')->where('blog_id',$blog_id)->update($data);
        Session::put('message','Cập nhật tin tức thành công');
        return Redirect::to('all-blog');
    }


    public function unactive_blog($blog_id){
        $this->AuthLogin();

        DB::table('tbl_blog')->where('blog_id',$blog_id)->update(['blog_status'=>1]);
        Session::put('message','Kích hoạt blog');
        return redirect::to('all-blog');
    }
    public function active_blog($blog_id){
        $this->AuthLogin();

        DB::table('tbl_blog')->where('blog_id',$blog_id)->update(['blog_status'=>0]);
        Session::put('message','Không kích hoạt blog');
        return redirect::to('all-blog');
    }
    
    

    public function delete_blog($blog_id){
        $this->AuthLogin();
        
        DB::table('tbl_blog')->where('blog_id',$blog_id)->delete();
        Session::put('message','Xoá tin tức thành công');
        return redirect::to('all-blog');
    }
}
