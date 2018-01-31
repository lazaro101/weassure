<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class WebController extends Controller
{
	public function Login(){
		if(!isset($_SERVER['HTTP_REFERER'])){
			return redirect('/');
		}
        if (DB::table('users')->first() == '') {
            DB::table('users')->insert([
                'username' => 'admin',
                'password' => bcrypt('admin')
            ]);
        }
		return view('login');
	}
	public function doLogin(Request $req){ 
        if(Auth::attempt(['username'=> $req->username,'password'=> $req->password])){
           return redirect('/Admin');
        }
        return redirect('/Login');
	}
	public function Register(){
		DB::table('users')->insert([
			'username' => 'admin',
			'password' => bcrypt('admin'),
		]);
		return redirect('/Login');
	}

    public function Home(){
    	return view('home');
    }
    public function Products(){
    	return view('products');
    }
    public function Updates(){
        $pic1 = DB::table('news')->orderby('news_id','DESC')->first();
        $pic2 = DB::table('products')->orderby('prod_id','DESC')->first();
        $pic3 = DB::table('employee')->orderby('emp_id','DESC')->first();
        return view('updates',['pic1' => $pic1, 'pic2' => $pic2,'pic3' => $pic3]);
    }
    public function About(){
        $emp = DB::table('employee_tbl')->where('status',0)->get();
    	return vieW('about',['emp' => $emp]);
    }
    public function Gallery(){
        $var = DB::table('gallery')->where('status',0)->get();
        return view('gallery',['var' => $var]);
    }
    public function GalleryPics($id){
        $alb = DB::table('gallery')->where('status',0)->where('gallery_id',$id)->first();
        $pics = DB::table('gallery_pics')->where('gallery_id',$id)->get();
        return view('pics',['alb' => $alb, 'pics' => $pics]);
    }
}
