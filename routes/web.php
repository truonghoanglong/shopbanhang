<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//  -------------------FRONT-END--------------------------------

Route::get('/', 'HomeController@index');
Route::get('/product-show', 'HomeController@product_show'); //viell_all
Route::get('/trang-chu','HomeController@index');
Route::post('/tim-kiem','HomeController@search');


// ----------------Danh mục sản phẩm trang chủ---------------------------
Route::get('/danh-muc-san-pham/{category_id}','CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}','BrandProduct@show_brand_home');
Route::get('/chi-tiet-san-pham/{product_id}','ProductController@details_product');



//  -------------------BACK-END--------------------------------

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');

Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

//-----------------Category product Danh Muc------
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');


//----------------Brand product Thuong Hieu-------
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

Route::post('/save-brand-product','BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product');



//----------product-------
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/all-product','ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');


//-----------cart --------
Route::post('/save-cart','CartController@save_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_card');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
//cart_ajax
//Route::get('/add-cart-ajax','CartController@add_cart_ajax');


//---------------checkout-----------------
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::get('/logout-checkout','CheckoutController@logout_checkout');

Route::post('/add-customer','CheckoutController@add_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::post('/login-customer','CheckoutController@login_customer');
Route::post('/order-place','CheckoutController@order_place');
Route::get('/payment','CheckoutController@payment');
//xacthuc
Route::get('/unactive-order/{order_id}','CheckoutController@unactive_order');
Route::get('/active-order/{order_id}','CheckoutController@active_order');




//send_mail
Route::get('/send-mail','MaillController@send_mail');

//order-quanlydonhang
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{orderId}','CheckoutController@view_order');
// Route::get('/manage-order','OrderController@manage_order');


//contact
Route::get('/contact','ContactController@contact');

//blogs
Route::get('/blog','BlogController@view_blog');
Route::get('/add-blog','BlogController@add_blog');
Route::get('/edit-blog/{blog_id}','BlogController@edit_blog');
Route::post('/update-blog/{blog_id}','BlogController@update_blog');
Route::get('/delete-blog/{blog_id}','BlogController@delete_blog');
Route::get('/all-blog','BlogController@all_blog');
Route::post('/save-blog','BlogController@save_blog');
Route::get('/unactive-blog/{blog_id}','BlogController@unactive_blog');
Route::get('/active-blog/{blog_id}','BlogController@active_blog');
Route::get('/blog-details/{blog_id}','BlogController@blog_details');












