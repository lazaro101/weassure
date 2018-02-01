<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('checklog');
    }

    public function Admin(){
    	$emp = DB::table('employee_tbl')->where('status',0)->get();
    	return view('admin.home',['emp' => $emp]);
    }
    public function saveemp(Request $req){
        DB::table('employee_tbl')->insert([
            'name' => $req->name,
            'position' => $req->position,
        ]);
        return redirect('/Admin');
    }
    public function deleteemp($id){
        DB::table('employee_tbl')->where('emp_id',$id)->update(['status' => 1]);
        return redirect('/Admin');
    }

    public function Updates(){
        $pic1 = DB::table('news')->orderby('news_id','DESC')->first();
        $pic2 = DB::table('products')->orderby('prod_id','DESC')->first();
        $pic3 = DB::table('employee')->orderby('emp_id','DESC')->first();
        return view('admin.updates',['pic1' => $pic1, 'pic2' => $pic2,'pic3' => $pic3]);
    }
    public function addPicnews(Request $req){
        $target_dir = "uploadpic/";
        $target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["newspic"]["name"]),PATHINFO_EXTENSION);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $temp_name  = $_FILES['newspic']['tmp_name']; 
        move_uploaded_file($temp_name, $target_file);
        DB::table('news')->insert(['news_pic' => $target_file]);

        return redirect('/AdminUpdates');
    }
    public function addPicprod(Request $req){
        $target_dir = "uploadpic/";
        $target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["prodpic"]["name"]),PATHINFO_EXTENSION);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $temp_name  = $_FILES['prodpic']['tmp_name']; 
        move_uploaded_file($temp_name, $target_file);
        DB::table('products')->insert(['prod_pic' => $target_file]);

        return redirect('/AdminUpdates');
    }
    public function addPicachi(Request $req){
        $target_dir = "uploadpic/";
        $target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["emppic"]["name"]),PATHINFO_EXTENSION);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $temp_name  = $_FILES['emppic']['tmp_name']; 
        move_uploaded_file($temp_name, $target_file);
        DB::table('employee')->insert(['emp_pic' => $target_file]);

        return redirect('/AdminUpdates');
    }

    public function AdminGallery(){
        $var = DB::table('gallery')->where('status',0)->get();
        return view('admin.gallery',['var' => $var]);
    }
    public function AdminGalleryPics($id){
        $alb = DB::table('gallery')->where('status',0)->where('gallery_id',$id)->first();
        $pics = DB::table('gallery_pics')->where('gallery_id',$id)->get();
        return view('admin.pics',['alb' => $alb, 'pics' => $pics]);
    }
    public function addGallery(Request $req){
        $target_dir = "album/";
        $target_file = $target_dir . date("mdYHis") .'.'.pathinfo(basename($_FILES["thumbnail"]["name"]),PATHINFO_EXTENSION);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $temp_name  = $_FILES['thumbnail']['tmp_name']; 
        move_uploaded_file($req->thumbnail, $target_file);

        $gid = DB::table('gallery')->insertGetId([
            'gallery_name' => $req->name,
            'date' => date_create('now')->format('Y-m-d'),
            'thumbnail' => $target_file
        ]);

        foreach ($req->photo as $num => $val) {
            $target_dir = "album/";
            $target_file = $target_dir . date("mdYHis") .$num.'.'.pathinfo(basename($_FILES["photo"]["name"][$num]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['photo']['tmp_name'][$num]; 
            move_uploaded_file($temp_name, $target_file);

            DB::table('gallery_pics')->insert([
                'gallery_id' => $gid,
                'picture' => $target_file
            ]);
        }
        return redirect('/AdminGallery');
    }
    public function editGallery(Request $req){
        DB::table('gallery')->where('gallery_id',$req->id)->update([
            'gallery_name' => $req->name,
            'date' => date_create('now')->format('Y-m-d'),
        ]);
        return redirect('/AdminGallery');
    }
    public function getGallery(Request $req){
        $var = DB::table('gallery')->where('gallery_id',$req->id)->first();
        return response()->json($var);
    }
    public function delGallery(Request $req){
        DB::table('gallery')->where('gallery_id',$req->id)->update(['status' => 1]);
        return redirect('/AdminGallery');
    }
    public function addPhoto(Request $req){

        DB::table('gallery')->where('gallery_id',$req->id)->update([
            'date' => date_create('now')->format('Y-m-d'),
        ]);
        foreach ($req->photo as $num => $val) {
            $target_dir = "album/";
            $target_file = $target_dir . date("mdYHis") .$num.'.'.pathinfo(basename($_FILES["photo"]["name"][$num]),PATHINFO_EXTENSION);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $temp_name  = $_FILES['photo']['tmp_name'][$num]; 
            move_uploaded_file($temp_name, $target_file);

            DB::table('gallery_pics')->insert([
                'gallery_id' => $req->id,
                'picture' => $target_file
            ]);
        }
        return redirect('/AdminGallery/'.$req->id);
    }
    public function delPhoto(Request $req){
        DB::table('gallery_pics')->where('picture','LIKE','%'.$req->pic.'%')->delete();
        return response()->json();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
