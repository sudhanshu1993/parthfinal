<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\contact;
use App\Models\gallery;
use App\Models\membership;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index_home()
    {
        return view('front_end.index');
    }
    public function adminindex()
 {
     return view('admin.adminindex');
 }
    public function login(Request $request)
        {
            if($request->isMethod('post'))
            {
                $data = $request->input();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'id'=>'2']))
                {
                    return redirect('/admin/adminindex');
                }
                else
                {
                    return redirect('/admin/login');
                }
            }
            return view("admin.login");
        }

    public function contact()
    {
        return view('front_end.contact');
    }

    public function membership_db(Request $req2)
    {
        $memberships = new membership;
        $memberships->name=$req2->name;
        $memberships->contactnumber=$req2->contactnumber;
        $memberships->address=$req2->address;
        $memberships->save();
        return redirect('/')->with('success','We Will Connect You as soon as possible!');
    }


    public function membershipdisplay()
    {
        $todoArr111 = DB::select('select * from membershipdetails');
        return view('/admin/adminpages/adminmembershipinfo',['todoArr111'=>$todoArr111]);
        
    }
    public function contact_db(Request $req2)
    {
        $contacts = new contact;
        $contacts->name=$req2->Name;
        $contacts->email=$req2->Email;
        $contacts->phone=$req2->Phone;
        $contacts->subject=$req2->Subject;
        $contacts->msg=$req2->Msg;
        $contacts->save();
        return redirect('/contact')->with('success','We Will Connect You as soon as possible!');
    }
    public function contactdisplay()
    {
        $todoArr111 = DB::select('select * from contacts');
        return view('/admin/adminpages/admincontact',['todoArr111'=>$todoArr111]);
        
    }
    public function blogs(Request $req2)
        {
            return view('admin/adminpages/addgallery');         
        }

    public function blog()
        {
            return view("admin.adminpages.addgallery");
        }

        public function blogs_db(Request $req2)
        {
            $file = $req2->file('galleryimage');
            if(isset($file) || $file != null){
                $destinationPath = public_path().'/upload/admin_profile/';
                $filenameWithExt = $req2->file('galleryimage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $req2->file('galleryimage')->getClientOriginalExtension();
                $profile = $filename.'_'.time().'.'.$extension;
                $path = $file->move($destinationPath, $profile);
            }else{
                $profile = '';
            }
            $blogs = new gallery;
            $blogs->Imagename=$req2->imagename;
            $blogs->imagealt=$req2->imagealt;
            $blogs->imagetitle=$req2->imagetitle;
            $blogs->categoryname=$req2->categoryname;
            $blogs->galleryimage=$profile;
            $blogs->save();
            return redirect('/admin/adminpages/addgallery')->with('success','blog added successfully!');
        }   
        public function blogs_data()
        {
        //$todoArr1 = DB::select('select * from gallery');
        $todoArr122 = gallery::orderBy('id', 'desc')->get();
        return view('front_end/gallery',['todoArr122'=>$todoArr122]);    
        }    
        public function bloglist()
        {
            $todoArr124 = DB::select('select * from gallery');
            return view('admin/adminpages/galleryinfo',['todoArr124'=>$todoArr124]);    
        }
        public function editBlog($id)
        {
            $todo = Gallery::find($id);
            return view('admin/adminpages/editblog')->with('blog',$todo);
            
        }
        public function updateBlog(Request $request, $id)
        {
            $todo = gallery::find($id);
            $todo->imagename = $request->imagename;
            $todo->imagealt = $request->imagealt;
            $todo->imagetitle = $request->imagetitle;
            $todo->imagetitle = $request->imagetitle;
            $todo->save();
            return redirect('admin/adminpages/galleryinfo')->with('message','1 Row Incerted');
        }
        
        public function deleteBlog($id)
        {
            $todo = gallery::find($id)->delete();
            return back()->with('message','1 Row Deleted');
        }
        

}
